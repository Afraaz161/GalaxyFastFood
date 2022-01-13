<?php

class Gallery_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function show_data()
	{
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('active', 1);
		return $this->db->get()->result();
	}
	public function shows_data($id)
	{
	    $this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('gallery_id',$id);
		$this->db->where('active', 1);
		return $this->db->get()->result();	
	}
}

?>