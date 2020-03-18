<?php
class Emailhelper extends CI_Model 
{
	function __Construct()
	{
		parent:: __construct();
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'xxx';
		$config['smtp_user'] = 'xxx';
		$config['smtp_pass'] = 'xxx';
		$config['smtp_port'] = 25;
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
	}
	
	function forget_email($email,$newtPass)
	{	
		$data=array('password'=>$newtPass);
		$this->db->where('email',$email);
		$this->db->update('users',$data);

		$to=$email;
		$subject= "new temporary password";
		$txt = "Your new temporary password is $newtPass";
		$headers = "From : info.techspeck@gmail.com";			
		$this->email->from('info.techspeck@gmail.com', 'priyanka thakker');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($txt);
		$this->email->send();			
		
		
	}	
}
