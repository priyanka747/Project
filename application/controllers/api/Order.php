<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class Order extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('Order_model');
    }
    public function index_get($id=0) {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        if($id==0){
            $orders= $this->Order_model->get_all_orders();
        }
        else{
            $orders = $this->Order_model->get_order_by_order_id($id);
        }
        //check if the user data exists
        if(!empty($orders)){
            //set the response and exit
         
             $this->response($orders);
        }else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No orders were found.'
            );
            $this->response($res);
        }
    }
}