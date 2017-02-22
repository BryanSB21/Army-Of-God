<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'artikel/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'artikel/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'artikel/index.html';
            $config['first_url'] = base_url() . 'artikel/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Artikel_model->total_rows($q);
        $artikel = $this->Artikel_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'artikel_data' => $artikel,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/nav');
        $this->load->view('artikel/artikel_list', $data);
        $this->load->view('admin/templates/footer');
    }

    public function read($id) 
    {
        $row = $this->Artikel_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_news' => $row->id_news,
		'Judul' => $row->Judul,
		'Isi' => $row->Isi,
		'Tanggal' => $row->Tanggal,
	    );
            $this->load->view('artikel/artikel_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('artikel/create_action'),
	    'id_news' => set_value('id_news'),
	    'Judul' => set_value('Judul'),
	    'Isi' => set_value('Isi'),
	    'Tanggal' => set_value('Tanggal'),
	);
        $this->load->view('artikel/artikel_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Judul' => $this->input->post('Judul',TRUE),
		'Isi' => $this->input->post('Isi',TRUE),
		'Tanggal' => $this->input->post('Tanggal',TRUE),
	    );

            $this->Artikel_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('artikel'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Artikel_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('artikel/update_action'),
		'id_news' => set_value('id_news', $row->id_news),
		'Judul' => set_value('Judul', $row->Judul),
		'Isi' => set_value('Isi', $row->Isi),
		'Tanggal' => set_value('Tanggal', $row->Tanggal),
	    );
            $this->load->view('artikel/artikel_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_news', TRUE));
        } else {
            $data = array(
		'Judul' => $this->input->post('Judul',TRUE),
		'Isi' => $this->input->post('Isi',TRUE),
		'Tanggal' => $this->input->post('Tanggal',TRUE),
	    );

            $this->Artikel_model->update($this->input->post('id_news', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('artikel'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Artikel_model->get_by_id($id);

        if ($row) {
            $this->Artikel_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('artikel'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('artikel'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('Judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('Isi', 'isi', 'trim|required');
	$this->form_validation->set_rules('Tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id_news', 'id_news', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-02-21 12:37:44 */
/* http://harviacode.com */