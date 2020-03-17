<?php
class Home extends CI_Controller 
{
	public function __Construct()
	{	error_reporting(-1);
		parent:: __construct();
	}
	
	function index()
	{
		if(!$this->session->userdata('user')){
			
				$data['page'] = 'login';
				$this->load->view('includes/header-login');
				$this->load->view('login');
				$this->load->view('includes/footer-login');			
		}else{
			$user=json_decode(json_encode($this->session->userdata('user')),true);
			print_r($user);
			if($user[0]['user_type']=='admin'){
					$data['page'] = 'Dashboard';
					$this->load->view('includes/header');
					$this->load->view('includes/nav');
					$this->load->view('index');
					$this->load->view('includes/footer');
			}
		}
	}
}
?>