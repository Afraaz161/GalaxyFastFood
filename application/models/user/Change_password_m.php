<?php

class Change_password_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	
	}
	public function check_id($num)
	{
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('accounts_id',$num);
		return $this->db->get()->result();
	}
	public function change($num,$data)
	{
		//$this->db->select('*');
		//$this->db->from('accounts');
		$this->db->where('accounts_id',$num);
		$this->db->update('accounts',$data);

	}
	public function check($num,$oldpassword)
	{
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('accounts_id',$num);
		$this->db->where('password',$oldpassword);
		
		return $this->db->get()->result();

	}
}
?>