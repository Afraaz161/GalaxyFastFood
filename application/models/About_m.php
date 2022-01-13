<?php

class About_m extends CI_Model
{
	
	public function __construct()
	{
	  parent::__construct();
	}
	public function show_about_data()
	{
		$this->db->select('*');
		$this->db->from('about');
		$this->db->where('active',1);
		return $this->db->get()->result();
	}
}

?>