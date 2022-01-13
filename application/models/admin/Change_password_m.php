<?php

class Change_password_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->library('session');
	}
	public function check($oldpassword)
	{
		$this->db->select('*');
		$this->db->from('admin');
        $this->db->where('password',$oldpassword);
		return $this->db->get()->result();

	}
	public function change($data_ins)
	{
		$this->db->select('*,admin_id,password');
		$this->db->update('admin',$data_ins);
	}
}
?>