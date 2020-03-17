<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class login extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('user_model');
    }
	public function index_post() {
        //returns login authentication result if login succesful then send user detail
		//otherwise single row will be returned
		
	 $this->form_validation->set_rules('name', 'First Name', 'required|alpha');
	 $this->form_validation->set_rules('name', 'Last Name', 'required|alpha');
	 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
	 $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[16]');
	 $this->form_validation->set_rules('contact_no', 'Contact Number', 'required');
	 $this->form_validation->set_rules('reg[dob]', 'Date of birth', 'regex_match[(0[1-9]|1[0-9]|2[0-9]|3(0|1))-(0[1-9]|1[0-2])-\d{4}]');		
	 $this->form_validation->set_rules('gender', 'Gender', 'required');

	 if ($this->form_validation->run() == TRUE) {

	 $res = $this->user_model->add_user($data);
	 if($res)
	 {
		 $this->session->set_userdata('user',$res);
		 if($this->session->userdata('redirectTo'))
		 {	
			 $re = $this->session->userdata('redirectTo');
			 $this->session->unset_userdata('redirectTo');
			 redirect($re);				
		 }
		 else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No user were found.'
            );
            $this->response($res);
        }
			 
	 }
    }
  