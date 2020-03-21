<?php
class Signin extends CI_Controller 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->model('user_model');
		$this->load->model('email_model');
		
	}
	
	function index()
	{
		if($this->session->userdata('user'))	redirect(base_url());
		
                $data['page'] = 'login';
                $this->load->view('includes/header-login');
				$this->load->view('login');
				$this->load->view('includes/footer-login');
	}	
	function verify_admin()
	{	
		// if(isset($_POST['lemail'])&& isset($_POST['lpassword'])){
		$this->form_validation->set_rules('lemail','email','required|valid_email');
		$this->form_validation->set_rules('lpassword','password','required|min_length[8]');
		
		if ($this->form_validation->run() == TRUE) {
				$email = $this->security->xss_clean($this->input->post('lemail'));
				$password = sha1($this->security->xss_clean($this->input->post('lpassword')));
				$res= $this->user_model->verify_admin($email,$password);
				// print_r($res);
				if($res)
				{
						$this->session->set_userdata('user',$res);
						if($this->session->userdata('redirectTo'))
						{	
							$re = $this->session->userdata('redirectTo');
							$this->session->unset_userdata('redirectTo');
							redirect($re);				
						}
					else
						redirect('/','refresh');	
			}
			else{
				
				$this->session->set_userdata('error','Invalid credentials!.');
				$this->session->set_userdata('login_status','failed');
				$this->load->view('includes/header-login');
				$this->load->view('login');
				$this->load->view('includes/footer-login');
			}

		}else {
				$this->session->set_userdata('login_status','failed');
				$this->load->view('includes/header-login');
				$this->load->view('login');
				$this->load->view('includes/footer-login');
		}
	

		
	}
	function change_password(){
		
		$password = sha1($this->security->xss_clean($this->input->post('password')));
		$match_password=sha1($this->security->xss_clean($this->input->post('password')));
		
		$res= $this->user_model->verify_login($email,$password);
		if($res)
		{
			
			$this->session->set_userdata('user',$res);
			if($res[0]['user_type'] == 'candidate'){
				redirect('index.php/candidate/');
			}
			else
			{
				redirect('index.php/login');
			}
		}
		else
		{
			$this->session->set_userdata('login_status','failed');
		}	 
	}
	function forget_password()
	{	
		$this->form_validation->set_rules('lemail','email','required|valid_email');
		if ($this->form_validation->run() == TRUE) {			
			$email = $this->security->xss_clean($this->input->post('lemail'));
			$res= $this->user_model->check_email($email);
			// print_r($res);
			if($res)
			{			
				
				// $this->emailhelper->forget_email($email);
			}
			else{

			}
		}else {
			
		}
	}
	/*Avoid email duplication while registration*/
	function check_email()
	{
		$this->form_validation->set_rules('femail','email','required|valid_email');
		if ($this->form_validation->run() == TRUE) {
			$email = $this->security->xss_clean($this->input->post('femail'));
			if($this->user_model->check_email($email)>0){
				$this->session->set_flashdata('success','Email with temporary password sent to '.$email.' successfully');
				$this->session->set_userdata('login_status','failed');
				$newtPass=sha1(random_string('alnum',8));
				echo $newtPass;
				$res=$this->email_model->forget_email($email,$newtPass);
				echo $res;
				// if($res){
					$this->email->print_debugger();	
				// }
				// $this->load->view('includes/header-login');
				// $this->load->view('login');
				// $this->load->view('includes/footer-login');
					
			}
			else{				
				$this->session->set_flashdata('error','Seems like email is not registered !! enter valid email address');
				$this->session->set_userdata('login_status','failed');
				$this->load->view('includes/header-login');
				$this->load->view('forgotpassword');
				$this->load->view('includes/footer-login');
			}
		}else {
				$this->session->set_userdata('login_status','failed');
				$this->load->view('includes/header-login');
				$this->load->view('forgotpassword');
				$this->load->view('includes/footer-login');
		}
	}
	
	function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url());
	}	
}
?>
