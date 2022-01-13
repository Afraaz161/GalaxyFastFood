<?php


class Footer_m extends CI_Model
{
	
	public function __construct()
	{
	  parent::__construct();
	}
	public function show_itemtype()
	{
		$this->db->select('*');
		$this->db->from('item_type');
		return $this->db->get()->result();
	}
	public function show_gallary_img()
	{
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('active',1);
		$this->db->order_by('gallery_id','DESC');
		$this->db->limit('9');
		return $this->db->get()->result();
	}
}
?>