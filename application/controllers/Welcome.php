<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
	public function login()
	{
		$this->load->view('includes/header-login');
		$this->load->view('login');
		$this->load->view('includes/footer-login');
	}
	public function forgotpassword()
	{
		$this->load->view('includes/header-login');
		$this->load->view('forgotpassword');
		$this->load->view('includes/footer-login');
	}
	public function viewProducts()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('index');
		$this->load->view('includes/footer');
	}
	public function addCategory()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('addcategory');
		$this->load->view('includes/footer');
	}
	public function addSubCategory()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('addsubcategory');
		$this->load->view('includes/footer');
	}
	public function addProduct()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/nav');
		$this->load->view('addproduct');
		$this->load->view('includes/footer');
	}
	public function comments()
    {
         echo 'Look at this!';
    }
}
