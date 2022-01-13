<?php

class Special_deal_m extends CI_Model
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
	public function show_deal()
	{
		$this->db->select('*, item.name as iname, item.pic as itempic');
		$this->db->from('item');
		$this->db->join('item_type', 'item.item_type_id = item_type.item_type_id');
		$this->db->where('item_type.name','Deals');
		return $this->db->get()->result();
	}
	public function show_deal_1()
	{
		$this->db->select('*, item.name as iname, item.pic as itempic');
		$this->db->from('item');
		$this->db->join('item_type', 'item.item_type_id = item_type.item_type_id');
		$this->db->where('item_type.name','Deals');
		return $this->db->get()->result();

	}
	public function description_deal($id)
	{
		$this->db->select('*');
		$this->db->from('deals');
		$this->db->where('deal_id',$id);
		return $this->db->get()->result();
	}
}
?>