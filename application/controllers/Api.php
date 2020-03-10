<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class APi extends CI_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('user');
    }
    
    public function user_get($id=0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        $users = $this->user_model->get_user($id);
        
        //check if the user data exists
        if(!empty($users)){
            //set the response and exit
            $this->response($users, REST_Controller::HTTP_OK);
        }else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
public function verify_login(){

}
public function register(){

}
public function get_categories(){

}
public function get_subcategories(){

}
public function get_settings(){

}
public function verify_email(){
    
}

}?>