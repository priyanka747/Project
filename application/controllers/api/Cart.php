<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class Cart extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('cart_model');
    }

    // GET

    public function index_get($id=0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        if($id==0){
            $cart= $this->cart_model->get_all_cart();
        }
        else{
            $cart = $this->cart_model->get_cart_by_cart_id($id);
        }
        //check if the user data exists
        if(!empty($cart)){
            //set the response and exit
         
             $this->response($cart);
        }else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No cart were found.'
            );
            $this->response($res);
        }
    }

    // POST

    public function index_post(){
    
        // collecting form data inputs
        //extra input fields will be sent as hidden
        $cart_id = $this->security->xss_clean($this->input->post("cart_id"));
        $user_id = $this->security->xss_clean($this->input->post("user_id"));
        $status = $this->security->xss_clean($this->input->post("status"));
		$date_created = $this->security->xss_clean($this->input->post("date_created"));
		$date_modified = $this->security->xss_clean($this->input->post("date_modified"));
  
  
  //  ----------------
  
      
        //$shipped_status = $this->security->xss_clean($this->input->post("shipped_status")); 
        // $date_created = $date_create;   
  
        // form validation for inputs
		$this->form_validation->set_rules("cart_id", "Cart id", "required");
		$this->form_validation->set_rules("user_id", "User id", "required");
        $this->form_validation->set_rules("status", "Status", "required");
        $this->form_validation->set_rules("date_created", "Date", "required");
        $this->form_validation->set_rules("date_modified", "Modified Date", "required");
  
       
       
    
        // checking form submittion have any error or not
        if($this->form_validation->run() === FALSE){
  
          // we have some errors
          $this->response(array(
            "status" => 0,
            "message" => "All fields are needed"
          ) , REST_Controller::HTTP_NOT_FOUND);
        }else{
  
          if(
            !empty($cart_id) && !empty($user_id) && !empty($status) && !empty($date_created) && !empty($date_modified) 
        ){
            // all values are available
            $cart = array(
              "cart_id" => $cart_id,
              "user_id" => $user_id,
              "status" => $status,
			  "date_created" => $date_created,
			  "date_modified" => $date_modified
  
              
            );

            $cart_info = array(
              "cart_id" => $order_id,
              "product_id" => $product_id,
              "quantity" => $quantity,
              "status" => $status,
              "date_created" => $date_create,
              "date_modified" => $date_modified,
                
            );
  
            if($this->cart_model->add_cart($cart, $cart_info)){
  
              $this->response(array(
                "status" => 1,
                "message" => "Cart added Successfully"
              ), REST_Controller::HTTP_OK);
            }else{
  
              $this->response(array(
                "status" => 0,
                "message" => "Failed to add Cart"
              ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
            }
          }else{
            // we have some empty field
            $this->response(array(
              "status" => 0,
              "message" => "All fields are needed"
            ), REST_Controller::HTTP_NOT_FOUND);
          }
        }
  
        /*$data = json_decode(file_get_contents("php://input"));
  
        $name = isset($data->name) ? $data->name : "";
        $email = isset($data->email) ? $data->email : "";
        $mobile = isset($data->mobile) ? $data->mobile : "";
        $course = isset($data->course) ? $data->course : "";*/
      }

      // DELETE
      // path : <project_url>/index.php/order

      public function index_delete($cart_id){
        // delete data method
        //$data = json_decode(file_get_contents("php://input"));
        //$cart_id = $this->security->xss_clean($data->cart_id);
  
      if($this->cart_model->cancel_cart($cart_id)){
        // retruns true
        $this->response(array(
          "status" => 1,
          "message" => "Cart has been deleted"
        ), REST_Controller::HTTP_OK);
      }else{
        // return false
        $this->response(array(
          "status" => 0,
          "message" => "Failed to delete cart"
        ), REST_Controller::HTTP_NOT_FOUND);
      }
    }

    /*  // PUT: <project_url>/index.php/student
    public function index_put(){
      // updating data method
      //echo "This is PUT Method";
      //$data = json_decode(file_get_contents("php://input"));

     if(isset($data->id) && isset($data->name) && isset($data->email) && isset($data->mobile) && isset($data->course)){
  
          $cart_id = $data->cart_id;
          $order = array(
            "cart_id" => $data->name,
            "email" => $data->email,
            "mobile" => $data->mobile,
            "course" => $data->course,

            "order_id" => $data->name,
            "email" => $data->email,
            "mobile" => $data->mobile,
            "course" => $data->course,

            "order_id" => $data->name,
            "email" => $data->email,
            "mobile" => $data->mobile,
            "course" => $data->course,
            

          );
          $student_info = array(
            "name" => $data->name,
            "email" => $data->email,
            "mobile" => $data->mobile,
            "course" => $data->course
          );
  
      $cart_id = $data->cart_id;
	  $user_id = $data->user_id;
	  $status = $status->status;
      $date_created = $data_created->date;
      $date_modified = $date_modified->date;
  
     
      //  ----------------
  
      


  
          if($this->student_model->update_student_information($student_id, $student_info)){
  
              $this->response(array(
                "status" => 1,
                "message" => "Student data updated successfully"
              ), REST_Controller::HTTP_OK);
          }else{
  
            $this->response(array(
              "status" => 0,
              "messsage" => "Failed to update student data"
            ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
          }
        }else{
  
          $this->response(array(
            "status" => 0,
            "message" => "All fields are needed"
          ), REST_Controller::HTTP_NOT_FOUND);
        }
    }  */
  
}    
