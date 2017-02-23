<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header2');
		$this->load->view('templates/nav');


		$this->load->view('team_page');

		$this->load->view('templates/footer');
		
	}
}
