<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function index()
	{
		$this->load->view('included/header');
		$this->load->view('pages/index');
		$this->load->view('included/footer');
	}
}
