<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class APi extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('user_model');
    }
    
    public function user_get($id=0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        $users = $this->user_model->get_user($id);
        
        //check if the user data exists
        if(!empty($users)){
            //set the response and exit
         
             $this->response($users);
        }else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No user were found.'
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
public function verify_login(){

}
public function register(){

}
public function get_categories(){

}
public function get_products(){
    //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        $products = $this->user_model->get_user($id);
        
        //check if the user data exists
        if(!empty($users)){
            //set the response and exit
            $this->response($products, REST_Controller::HTTP_OK);
        }
        else{
            //set the response and exit
            $this->response([
                'status' => FALSE,
                'message' => 'No products were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
}
public function get_settings(){

}
public function verify_email(){
    
}
public function index_post()
{
	try{   
		$id = $this->input->post('id');
		if ($id != '')
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('oldPassword','Old Password','required|max_length[20]');
			$this->form_validation->set_rules('newPassword','New Password','required|max_length[20]');
			$this->form_validation->set_rules('cNewPassword','Confirm new Password','required|matches[newPassword]|max_length[20]');

			if($this->form_validation->run() == false)
			{
				echo validation_errors();
			}
			else
			{
				$oldPassword = $this->input->post('oldPassword');
				$newPassword = $this->input->post('newPassword');

				$resultPas = $this->user_model->matchOldPassword($id, $oldPassword);

				if($resultPas)
				{

					$this->set_response("password no match.", REST_Controller::HTTP_BAD_REQUEST);
				}
				else
				{
					$changeData = array('password'=>md5($newPassword));

					$result = $this->user_model->changePassword($id, $changeData);

					if($result > 0) { $this->set_response([
										'message' => 'password changed successful.',
										'data' => $changeData
										], REST_Controller::HTTP_OK); }
					else { $this->set_response("enter password first.", REST_Controller::HTTP_BAD_REQUEST); }

				}
			}
		}
		else
		{
			throw new Exception("The Data Already Register or The Data is Empty");
		}             
	}
	catch (Exception $e)
	{
	   $error = array($e->getmessage());
	   $errormsg = json_encode($error);
	   echo $errormsg;
	}
}
?>
