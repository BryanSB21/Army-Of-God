<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('login_data');

	}

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/nav');


		$this->load->view('signin_page');

		$this->load->view('templates/footer');
		
	}

	// proses login user
	public function login(){


		if( $this->login_data->userterdaftar( $this->input->post('username') ) && $this->login_data->passwordok( $this->input->post('password') )) {

			redirect( base_url('beranda'));
		} else {
			// username salah
			$this->session->set_flashdata('pesan','The username and password you entered did not match our records. Please double-check and try again.');
			redirect( base_url().'signin');
		}

	}
}
