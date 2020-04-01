<?php
class Cart_model extends CI_Model
{	
	public function __construct() { 
        parent::__construct();
        
        //load user model
        // $this->load->model('user_model');
    }
	function validate()
	{
		$arr['email'] = $this->input->post('lemail');
		$arr['password'] = sha1($this->input->post('lpassword'));
		$arr['user_type'] = 'admin';
		return $this->db->get_where('cart',$arr)->row();
	}
	function verify_login($email,$password)
	{
		return $res= $this->db->select('*')->from('cart')->where('email',$email)->where('password',$password)->where('user_type','customer')->get()->result_array();
	  
	}
	function verify_admin($email,$password)
	{
		 return $this->db->select('*')->from('cart')->where('email',$email)->where('password',$password)->where('user_type','admin')->get()->result_array();
	}
	function get_cart()
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where('user_type','customer');
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	
	function add_user($data)
	{
		return $this->db->insert('cart',$data);
	}
	
	function check_email($email)
	{
		return $this->db->from('cart')->where('email',$email)->get()->num_rows();
		
	}
	function check_admin_email($email)
	{
		return $this->db->from('cart')->where('email',$email)->where('user_type','admin')->get()->num_rows();
		
	}
	function get_user($id)
	{
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where('user_id',$id);
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	function update_user($data,$user_id)
	{
		$this->db->where('user_id',$user_id);
		return $this->db->update('cart',$data);
	}
	function delete($id)
	{
		
		$this->db->set('status', 'delete');
        $this->db->where('id', $id);
		return $this->db->update('cart');
	}
	function get_customer_profile($id, $data)
	{
		$this->db->select('cart.user_id, cart.first_name, cart.last_name, cart.contact, cart.D_O_B, cart.status, cart.gender');
		$this->db->from('cart');
		$this->db->where($data);
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}

	function filter_result($data)
	{   
		$this->db->select('*');
        $this->db->from('cart');
        $this->db->where($data);
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	
}
?>