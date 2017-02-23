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
        
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;;
        $artikel = $this->Artikel_model->get_limit_data($config['per_page']);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'artikel_data' => $artikel,
            'pagination' => $this->pagination->create_links(),
        );
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
