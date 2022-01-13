<?php


class Food_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function count()
	{
		$this->db->select('*');
		$this->db->from('item_type');
	    return $this->db->get()->result();

	}
	public function footer_item()
	{
		$this->db->select('*');
		$this->db->from('item_type');
		return $this->db->get()->result();
	}
}
?>