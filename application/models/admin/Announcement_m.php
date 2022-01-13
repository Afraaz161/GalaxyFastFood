<?php
class Announcement_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add_data_announcement($data)
	{
		$this->db->insert('announcement',$data);
	}
	public function show_data_announcement()//$num
	{
		$this->db->select('*');
		$this->db->from('announcement');
		return $this->db->get()->result();
	}
	public function delete($id)
	{
	 	$this->db->where('announcement_id',$id);
	 	$this->db->delete('announcement');
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('announcement');
		$this->db->where('announcement_id',$id);
		
		return $this->db->get()->result();

	}
    public function update_announcement($id,$data)
	{
		
	 	$this->db->where('announcement_id',$id);
	 	$this->db->update('announcement',$data);
	}
	public function allaccounts()
	{
	 	$this->db->select('*');
	 	$this->db->from('accounts');
	    return $this->db->get()->result();
	}
}
?>