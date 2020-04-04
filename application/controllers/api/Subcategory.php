<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';


class Subcategory extends REST_Controller {

    public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('category_model');
    }
    public function index_get() {
        //returns all rows if the id parameter doesn't exist,
        //otherwise single row will be returned
        // if($id==0){
            $subCategories= $this->category_model->get_all_sub_categories();
        // }
        // else{
        //     $subCategories = $this->category_model->get_category($id);
        // }
        //check if the user data exists
        if(!empty($subCategories)){
            //set the response and exit
         
             $this->response($subCategories);
        }else{
            //set the response and exit
            $res=array(
                'status' => FALSE,
                'message' => 'No sub category were found.'
            );
            $this->response($res);
        }
    }
  
}
