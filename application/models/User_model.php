<?php
class User_model extends CI_Model
{	
	public function __construct() { 
        parent::__construct();
        
        //load user model
        // $this->load->model('user_model');
    }
	function verify_login($email,$password)
	{
		return $res= $this->db->select('*')->from('users')->where('email',$email)->where('password',$password)->get()->result_array();
	  
	}
	function verify_admin($email,$password)
	{
		 return $this->db->select('*')->from('users')->where('email',$email)->where('password',$password)->where('user_type','admin')->get()->result_array();
	}
	function get_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_type','customer');
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	
	function add_user($data)
	{
		return $this->db->insert('users',$data);
	}
	
	function check_email($email)
	{
		return $this->db->from('users')->where('email',$email)->get()->num_rows();
		
	}
	function get_user($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_id',$id);
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	function update_user($data,$user_id)
	{
		$this->db->where('user_id',$user_id);
		return $this->db->update('users',$data);
	}
	function delete($id)
	{
		
		$this->db->set('status', 'delete');
        $this->db->where('id', $id);
		return $this->db->update('users');
	}
	function filter_result($data)
	{   
		$this->db->select('*');
        $this->db->from('users');
        $this->db->where($data);
		$this->db->order_by('created_date','desc');
		return $this->db->get()->result_array();
	}
	
}
?>