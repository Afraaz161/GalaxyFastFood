<?php

class Gallary_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function add_data($data_ins)
	{
		$this->db->insert('gallery',$data_ins);

	}
	public function show_data()
	{
		$this->db->select('*');
		$this->db->from('gallery');
		return $this->db->get()->result();
	}
	public function delete_gallary_data($id)
	{
		$this->db->where('gallery_id',$id);
		$this->db->delete('gallery');
	}
	public function edit_gallary_data($id)
	{
     $this->db->select('*');
     $this->db->from('gallery');
     $this->db->where('gallery_id',$id);
     return $this->db->get()->result();
	}
	public function gallary_edit_update($id,$data_ins)
	{
		$this->db->where('gallery_id',$id);
		$this->db->update('gallery',$data_ins);
	}
}
?>