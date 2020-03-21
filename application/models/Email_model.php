<?php
class Email_model extends CI_Model 
{
	function __Construct()
	{
		parent:: __construct();
		$this->load->library('email');

		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'smtp.hostinger.com';
		$config['smtp_port']    = '587';
		$config['smtp_timeout'] = '7';
		$config['smtp_user']    = 'mail@stylestamp.dipenoverseas.com';
		$config['smtp_pass']    = 'Admin@123';
		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'text'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not      

		$this->email->initialize($config);
	}
	
	function forget_email($email,$newtPass)
	{	
		$data=array('password'=>sha1($newtPass));
		$this->db->where('email',$email);
		$this->db->update('users',$data);

		$to=$email;
		$subject= "new temporary password";
		$txt = "Your new temporary password is ".$newtPass;		
		$this->email->from('mail@stylestamp.dipenoverseas.com', 'Style Stamp');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($txt);
		return $this->email->send();	
		
		
		
	}	
}
?>
