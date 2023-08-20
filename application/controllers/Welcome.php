<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('home');		
		$this->load->view('templates/sweetalert');
		
	}
	public function reservation()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('service');
		$this->load->view('templates/footer');
	}
	
}

