<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header-view');
		$this->load->view('includes/nav');
		$this->load->view('view-users');
		$this->load->view('includes/footer-view');
	}
}
