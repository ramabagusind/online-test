<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('user');
	}

	public function updateform()
	{
		$this->load->view('update');
	}
}
