<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadm extends CI_Controller {


	public function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
 
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/login_admin');
		$this->load->view('templates/footer');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => MD5($password)
			);
		$cek = $this->m_admin->cek_login("admin",$where);
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			$this->session->set_flashdata('pesan','The username and password you entered did not match our records. Please double-check and try again.');
			redirect( base_url().'loginadm');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('landing'));
	}
}
