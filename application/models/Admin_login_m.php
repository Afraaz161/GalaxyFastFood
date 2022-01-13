<?php

class Admin_login_m extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
	}
	public function check_admin($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		return $this->db->get()->num_rows();
	}
}


?>