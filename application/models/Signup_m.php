<?php

class Signup_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function add_do($data)
	{
		$this->db->insert('accounts',$data);
	}
	public function show_category()
	{
		$this->db->select('*');
		$this->db->from('accounts');
		return $this->db->get()->result();
	}
}
?>