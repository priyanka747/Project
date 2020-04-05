<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class Product extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('product_model');
    }
    public function index_get($id=0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        if($id==0){
            $data['products']= $this->product_model->get_product_image();
        }
        else{
            $data['product'] = $this->product_model->get_products_image($id);
        }
        //check if the user data exists
        if(!empty($data)){
            //set the response and exit
         
             $this->response($data);
        }else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No product were found.'
            );
            $this->response($res);
        }
    }
}