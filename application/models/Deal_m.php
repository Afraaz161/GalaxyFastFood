<?php

class Deal_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function show_deal()
	{
		$this->db->select('*');
		$this->db->from('deals');
		return $this->db->get()->result();
	}
}
?>