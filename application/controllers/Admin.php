<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/nav');
		$this->load->view('admin/home_admin');
		$this->load->view('admin/templates/footer');
	}


}
