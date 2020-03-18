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
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');
        
        if ($this->form_validation->run() == TRUE) {
            
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
        
            $res= $this->user_model->verify_login($email,$password);
            // print_r($res);
            if($res)
            {
                $this->response($res);
            }
            else{
                $res=array(
                'status' => FALSE,
                'login_status' => 'failed',
                'message' => 'Invalid credentials!.'
                );
                $this->response($res);
            }

        }else {

            $res=array(
                'status' => FALSE,
                'login_status' => 'failed',
                'message' => 'Login Unsuccessful.'
            );
            $this->response($res);
        }
    }
  


    public function users_get() {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        $users = $this->user_model->get_users();
                
        //check if the user data exists
        if(!empty($users)){
            $this->response($users, REST_Controller::HTTP_OK);
        }else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}