<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
    }

	public function index()
	{
		$data['list'] = $this->m_data->tampil_data_atk()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/navh');

		$this->load->view('home_page',$data);

		$this->load->view('templates/chat');
		$this->load->view('templates/footer');
		
	}

	public function read_atk(){
		$data['list'] = $this->m_data->tampil_data_atk()->result();

		$this->load->view('post_page',$data);

	}


	public function logout(){
		session_destroy();
		redirect(base_url('signin'));
	}
}
