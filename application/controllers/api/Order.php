<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class Order extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('order_model');
    }
    public function index_get($id=0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        if($id==0){
            $data['orders']= $this->order_model->get_orders();
        }
        else{
            $data['order'] = $this->order_model->get_order($id);
        }
        //check if the user data exists
        if(!empty($data)){
            //set the response and exit
         
             $this->response($data);
        }else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No order were found.'
            );
            $this->response($res);
        }
    }
}