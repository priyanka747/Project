<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productapi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->library('form_validation');
	}

	function index()
	{
		$data = $this->Product_model->get_products();
		echo json_encode($data);
	}

	function getproductbycategoryid()
	{
		$category_id =  $this->uri->segment(4);

		$array = array('product.category_id' => $category_id);
		$data = $this->Product_model->get_sorted_products($array);

		//$data = $this->Product_model->get_products();
		echo json_encode($data);
	}
	//'product_stocks.stock_level >'=>'1'

	function getproductbypricegreater()
	{
		$price =  $this->uri->segment(4);

		$array = array('product.price >' => $price);
		$data = $this->Product_model->get_sorted_products($array);

		//$data = $this->Product_model->get_products();
		echo json_encode($data);
	}

	function insert()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		if($this->form_validation->run())
		{
			$data = array(
				'first_name'	=>	$this->input->post('first_name'),
				'last_name'		=>	$this->input->post('last_name')
			);

			$this->api_model->insert_api($data);

			$array = array(
				'success'		=>	true
			);
		}
		else
		{
			$array = array(
				'error'					=>	true,
				'first_name_error'		=>	form_error('first_name'),
				'last_name_error'		=>	form_error('last_name')
			);
		}
		echo json_encode($array);
	}
	
	function fetch_single()
	{
		if($this->input->post('id'))
		{
			$data = $this->api_model->fetch_single_user($this->input->post('id'));

			foreach($data as $row)
			{
				$output['first_name'] = $row['first_name'];
				$output['last_name'] = $row['last_name'];
			}
			echo json_encode($output);
		}
	}

	function update()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');

		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		if($this->form_validation->run())
		{	
			$data = array(
				'first_name'		=>	$this->input->post('first_name'),
				'last_name'			=>	$this->input->post('last_name')
			);

			$this->api_model->update_api($this->input->post('id'), $data);

			$array = array(
				'success'		=>	true
			);
		}
		else
		{
			$array = array(
				'error'				=>	ture,
				'first_name_error'	=>	form_error('first_name'),
				'last_name_error'	=>	form_error('last_name')
			);
		}
		echo json_encode($array);
	}

	function delete()
	{
		if($this->input->post('product_id'))
		{
			if($this->order_model->delete_product($this->input->post('product_id')))
			{
				$array = array(

					'success'	=>	true
				);
			}
			else
			{
				$array = array(
					'error'		=>	true
				);
			}
			echo json_encode($array);
		}
	}

}


?>