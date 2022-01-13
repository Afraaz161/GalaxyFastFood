<?php
/**
 * 
 */
class Item_m extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}
	function itemtype()
	{
		$this->db->select('*');
		$this->db->from('item_type');
		$this->db->where('active', 1);
        return $this->db->get()->result();
	}

	public function itemtypename($id)
	{
		$this->db->select('*');
		$this->db->from('item_type');
		$this->db->where('item_type_id', $id);
		return $this->db->get()->result();
	}

	public function item($id)
	{
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('item_type_id', $id);
		return $this->db->get()->result();
	}
	public function show_feedback()
	{
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->join('accounts','accounts.accounts_id = feedback.accounts_id');
		return $this->db->get()->result();
	}
	public function shows_itemtype()
	{
		$this->db->select('*');
		$this->db->from('item_type');
		$this->db->where('active', 1);
		return $this->db->get()->result();
	}
}