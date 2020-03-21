<?php
class Email_model extends CI_Model 
{
	function __Construct()
	{
		parent:: __construct();
		$config = array();
		$config['protocol'] = 'smtp';
		$config['smtp_port'] = 587;
		$config['host'] = 'smtp.hostinger.com';
		$config['password'] = 'Admin@123';
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
		$this->email->from('mail@stylestamp.dipenoverseas.com', 'Style Stamp');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($txt);
		return $this->email->send();	
		
		
		
	}	
}
?>
