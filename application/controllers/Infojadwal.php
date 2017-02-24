<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infojadwal extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
    }

	public function index()
	{

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $jadwal = $this->Jadwal_model->get_limit_data($config['per_page']);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jadwal_data' => $jadwal,
            'pagination' => $this->pagination->create_links(),
        );

        $this->load->view('templates/header');
        $this->load->view('templates/navh');
        $this->load->view('infojadwal_user', $data);
        $this->load->view('templates/chat');
        $this->load->view('templates/footer');
    }
}
