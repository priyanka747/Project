<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class Forgotpassword extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('user_model');
    }
    public function index_post() {

        $this->form_validation->set_rules('email','Email','required|valid_email');

        if ($this->form_validation->run() == TRUE) {

            $email = $this->security->xss_clean($this->input->post('email'));

            $res= $this->user_model->check_email($email);
            // print_r($res);
            if($res)
            {
                $this->email_model->forget_email($email);
                $res=array(
                    'status' => '1',
                    'message' => 'password link is sent to the email address'
                    );
                $this->response($res);
            }
            else{
                $res=array(
                'status' => '0',
                'message' => 'Invalid email address seems like does not registered'
                );
                $this->response($res);
            }
        }else{
            $res=array(
                'status' => '0',
                'message' => 'Invalid email address'
            );
            $this->response($res);
        }
    }
}