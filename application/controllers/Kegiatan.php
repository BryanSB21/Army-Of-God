<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header2');
		$this->load->view('templates/nav');


		$this->load->view('do_page');

		$this->load->view('templates/footer');
		
	}
}
