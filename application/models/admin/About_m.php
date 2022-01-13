<?php

class About_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function add_data($data)
	{
		$this->db->insert('about',$data);
	}
	public function show()
	{
		$this->db->select('*');
		$this->db->from('about');
		return $this->db->get()->result();
	}
	public function delete_about_data($id)
	{
     $this->db->where('about_id',$id);
     $this->db->delete('about');
	}
	public function edit_about_data($id)
	{
		$this->db->select('*');
		$this->db->from('about');
		$this->db->where('about_id',$id);
		return $this->db->get()->result();

	}
	public function about_edit_update($id,$data)
	{
		$this->db->where('about_id',$id);
		$this->db->update('about',$data);

	}
}

?>