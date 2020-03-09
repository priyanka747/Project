<?php
class User_model extends CI_Model
{	
	function verify_login($email,$password)
	{
		$res= $this->db->select('*')->from('users')->where('email',$email)->where('password',$password)->get()->result();
	  
		return json_decode(json_encode($res),true);
	}
	function get_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_type','candidate');
		$this->db->order_by('date_created','desc');
		return $this->db->get()->result();
	}
	
	function register($data)
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
		$this->db->where('id',$id);
		$this->db->order_by('date_created','desc');
		return $this->db->get()->result();
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
		$this->db->order_by('date_created','desc');
		return $this->db->get()->result();
	}
	
}
?>