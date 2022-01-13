<?php

class Profile_m extends CI_Model
{
	
	public function __construct()
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
    public function update_pro($data, $num)
    {
    	$this->db->where('accounts_id',$num);
    	$this->db->update('accounts',$data);
    }
}
?>