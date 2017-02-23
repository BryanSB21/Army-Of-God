<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infojadwal extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

	public function index()
	{
		$data['jadwal'] = $this->m_data->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/navh');

		$this->load->view('Infojadwal_user',$data);


		$this->load->view('templates/chat');
		$this->load->view('templates/footer');
	}
}
