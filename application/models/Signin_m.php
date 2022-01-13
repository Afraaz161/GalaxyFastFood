<?php

class Signin_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();

	}
	public function check_user($user_email,$user_password)
	{
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('email',$user_email);
		$this->db->where('password',$user_password);
		$this->db->where('active', 1);
		return $this->db->get()->result();

	}
}
?>