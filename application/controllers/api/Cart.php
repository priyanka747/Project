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

    public function index_get($id) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        
            $data= $this->cart_model->get_cart_info($id);
    
        //check if the user data exists
        if(!empty($data)){
            //set the response and exit         
            $this->response($data);
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

    public function index_post($product_id,$cart_id){
    
        // collecting form data inputs
        //extra input fields will be sent as hidden
        if($userid=0){
        $user_id = $this->security->xss_clean($this->input->post("cart_id"));
        $product_id=$this->security->xss_clean($this->input->post("product_id"));
        $quantity=$this->security->xss_clean($this->input->post("quantity"));
        $quantity=$this->security->xss_clean($this->input->post("color"));
        $quantity=$this->security->xss_clean($this->input->post("size"));
        }
        else{
         
        }
        // form validation for inputs  
    
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
      }

      // DELETE
      // path : <project_url>/index.php/order

      public function index_delete($cart_id){
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

   // PUT: <project_url>/index.php/student
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
    } 
  
}    
