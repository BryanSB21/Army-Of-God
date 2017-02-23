<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
    }

	public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'beranda/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'beranda/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'beranda/index.html';
            $config['first_url'] = base_url() . 'beranda/index.html';
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
        $data['page'] = "beranda";
        $this->load->view('templates/header2');
        $this->load->view('templates/navh');
        $this->load->view('home_page', $data);
        $this->load->view('templates/chat');
        $this->load->view('templates/footer');
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
            $this->load->view('post_page', $data);
            $this->load->view('templates/chat');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('beranda'));
        }
    }

    public function logout(){
        session_destroy();
        redirect(base_url('signin'));
    }

}
