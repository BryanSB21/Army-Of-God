<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	public function index()
	{
		$data['page'] = "user";
		$data['judul'] = "Registration";
		$data['subjudul'] = "Form";

		$this->load->view('templates/header');
		$this->load->view('templates/nav');


		$this->load->view('landing_page',$data);

		$this->load->view('templates/footer');
		
	}


	public function register(){
		$this->m_data->registeruser();

		$this->session->set_flashdata('pesan1','Berhasil Mendaftar , Silahkan Login..');
		redirect( base_url().'signin' );
	}



}
