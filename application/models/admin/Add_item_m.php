<?php

class Add_item_m extends CI_Model
{
	
	function __construct()
	{
	 parent::__construct();
	}
	public function add_item($item)
	{
      $this->db->insert('item',$item);
	}
	public function show()
	{
		$this->db->select('*');
		$this->db->from('item');
		$this->db->join('item_type','item.item_type_id = item_type.item_type_id','left');
		return $this->db->get()->result();
	}
	public function show_category()
	{
		$this->db->select('*');
		$this->db->from('item_type');
		// join ok 
		return $this->db->get()->result();
	}
	
}

 ?>