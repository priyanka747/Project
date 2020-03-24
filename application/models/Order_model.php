<?php
class Order_model extends CI_Model
{	
	//----------------------------------------------------------------------------------
	//orders join order_info
	//----------------------------------------------------------------------------------


	//get all active orders
	function get_orders()
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('order_info', 'orders.order_id = order_info.order_id', 'inner'); 
		$this->db->where('orders.status','active');
		$this->db->order_by('orders.data_create','desc');
		return $this->db->get()->result_array();
	}

	//get all active and inactive orders
	function get_all_orders()
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('order_info', 'orders.order_id = order_info.order_id', 'inner'); 
		$this->db->where('orders.status !=','delete');
		$this->db->order_by('orders.date_create','DESC');
		return $this->db->get()->result_array();
	}

	//get orders by user_id and order_id
	function get_order_by_user_id_order_id($user_id, $order_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('order_info', 'orders.order_id = order_info.order_id', 'inner');
		$this->db->where('orders.order_id',$order_id); 
		$this->db->where('orders.user_id',$user_id);
		$this->db->where('orders.status','active');
		$this->db->order_by('orders.date_create','desc');
		return $this->db->get()->result_array();
	}



	//get orders by user_id
	function get_orders_by_user_id($user_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('order_info', 'orders.order_id = order_info.order_id', 'inner'); 
		$this->db->where('orders.user_id',$user_id);
		$this->db->where('orders.status','active');
		$this->db->order_by('orders.date_create','desc');
		return $this->db->get()->result_array();
	}

	//get orders by status function
	function get_orders_by_status($status)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('order_info', 'orders.order_id = order_info.order_id', 'inner'); 
		$this->db->where('orders.status', $status);
		$this->db->order_by('orders.date_create','desc');
		return $this->db->get()->result_array();
	}

	//get order by order_id
	function get_order_by_order_id($order_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('order_info', 'orders.order_id = order_info.order_id', 'inner'); 
		$this->db->where('orders.order_id',$order_id);
		$this->db->where('orders.status','active');
		$this->db->order_by('orders.date_create','desc');
		return $this->db->get()->result_array();
	}


	//cancel order function
	function cancel_order($order_id)
	{
		
		$this->db->set('status', 'delete');
		$this->db->where('order_id', $order_id);
		$result1 = $this->db->update('orders');

		$this->db->set('status', 'delete');
		$this->db->where('order_id', $order_id);
		$result2 = $this->db->update('order_info');
		return $result1&&$result2;

	}

	//add order function
	function add_order($order_data, $order_info_data)
	{
		$result1 = $this->db->insert('orders',$order_data);
		$result2 = $this->db->insert('order_info',$order_info_data);
		return $result1&&$result2;
	}

	//update order function

	function update_order($orders_data,$order_info_data,$order_id)
	{
		$this->db->where('order_id',$order_id);
		$result1 = $this->db->update('orders',$orders_data);
		$this->db->where('order_id',$order_id);
		$result1 = $this->db->update('order_info',$order_info_data);
		return $result1&&$result2;
	}

	//filter function

	function filter_result($data)
	{   
		$this->db->select('*');
        $this->db->from('orders');
        $this->db->join('order_info', 'orders.order_id = order_info.order_id', 'inner'); 
        $this->db->where($data);
		$this->db->order_by('date_create','desc');
		return $this->db->get()->result_array();
	}
}
?>