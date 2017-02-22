<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'jadwal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'jadwal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'jadwal/index.html';
            $config['first_url'] = base_url() . 'jadwal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jadwal_model->total_rows($q);
        $jadwal = $this->Jadwal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jadwal_data' => $jadwal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/nav');
        $this->load->view('jadwal/jadwal_list', $data);
        $this->load->view('admin/templates/footer');
    }

    public function read($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_jadwal' => $row->id_jadwal,
		'haritanggal' => $row->haritanggal,
		'acara' => $row->acara,
		'tampat' => $row->tampat,
		'pelayan' => $row->pelayan,
		'jam' => $row->jam,
	    );
            $this->load->view('jadwal/jadwal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jadwal/create_action'),
	    'id_jadwal' => set_value('id_jadwal'),
	    'haritanggal' => set_value('haritanggal'),
	    'acara' => set_value('acara'),
	    'tampat' => set_value('tampat'),
	    'pelayan' => set_value('pelayan'),
	    'jam' => set_value('jam'),
	);
        $this->load->view('jadwal/jadwal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'haritanggal' => $this->input->post('haritanggal',TRUE),
		'acara' => $this->input->post('acara',TRUE),
		'tampat' => $this->input->post('tampat',TRUE),
		'pelayan' => $this->input->post('pelayan',TRUE),
		'jam' => $this->input->post('jam',TRUE),
	    );

            $this->Jadwal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwal/update_action'),
		'id_jadwal' => set_value('id_jadwal', $row->id_jadwal),
		'haritanggal' => set_value('haritanggal', $row->haritanggal),
		'acara' => set_value('acara', $row->acara),
		'tampat' => set_value('tampat', $row->tampat),
		'pelayan' => set_value('pelayan', $row->pelayan),
		'jam' => set_value('jam', $row->jam),
	    );
            $this->load->view('jadwal/jadwal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jadwal', TRUE));
        } else {
            $data = array(
		'haritanggal' => $this->input->post('haritanggal',TRUE),
		'acara' => $this->input->post('acara',TRUE),
		'tampat' => $this->input->post('tampat',TRUE),
		'pelayan' => $this->input->post('pelayan',TRUE),
		'jam' => $this->input->post('jam',TRUE),
	    );

            $this->Jadwal_model->update($this->input->post('id_jadwal', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $this->Jadwal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jadwal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('haritanggal', 'haritanggal', 'trim|required');
	$this->form_validation->set_rules('acara', 'acara', 'trim|required');
	$this->form_validation->set_rules('tampat', 'tampat', 'trim|required');
	$this->form_validation->set_rules('pelayan', 'pelayan', 'trim|required');
	$this->form_validation->set_rules('jam', 'jam', 'trim|required');

	$this->form_validation->set_rules('id_jadwal', 'id_jadwal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "jadwal.xls";
        $judul = "jadwal";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Haritanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Acara");
	xlsWriteLabel($tablehead, $kolomhead++, "Tampat");
	xlsWriteLabel($tablehead, $kolomhead++, "Pelayan");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam");

	foreach ($this->Jadwal_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->haritanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->acara);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tampat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pelayan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/Jadwal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-02-19 17:33:16 */
/* http://harviacode.com */