<?php

class CMS_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function show_contact()
	{
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->limit(1);
		return $this->db->get()->result();
	}
}
?>