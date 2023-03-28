<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainerfarm extends CI_Controller 
{
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('website/home');
		$this->load->view('template/footer');
	}

	public function about()
	{
		// $this->load->view('template/header');
		$this->load->view('website/about');
		// $this->load->view('template/footer');
	}
}
