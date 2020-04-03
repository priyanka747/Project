<?php
class Cart_model extends CI_Model
{	
	public function __construct() { 
        parent::__construct();
        
        //load user model
        $this->load->model('product_model');
    }
	
	function get_cart($user_id)
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where('user_id',$user_id);
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	function get_cart_info($cart_id,$user_id)
	{
		$this->db->select('product_id,quantity');
		$this->db->from('cart');
		$this->db->where('user_id',$user_id);
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	
	function add_cart($data)
	{
		return $this->db->insert('cart',$data);
	}
	
	function check_cart_exist($user_id)
	{
		return $this->db->from('cart')->where('user_id',$user_id)->get()->num_rows();
		
	}
	function update_cart($data,$cart_id,$user_id)
	{
		$this->db->where('cart_id',$cart_id);
		return $this->db->update('cart',$data);
	}
	function delete($id)
	{
		
		$this->db->set('status', 'delete');
        $this->db->where('cart_id', $id);
		return $this->db->update('cart');
	}	
}
?>