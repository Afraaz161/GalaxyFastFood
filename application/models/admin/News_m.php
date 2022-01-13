<?php

class News_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function add_data_news($data)
	{
        $this->db->insert('news',$data);
	}
	public function show_news_data()
	{
		$this->db->select('*');
		$this->db->from('news');
		return $this->db->get()->result();
	}
	public function accounts_holder()
	{
		$this->db->select('*');
		$this->db->from('accounts');
		return $this->db->get()->result();
	}
	public function edit_news($id)
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('news_id',$id);
		return $this->db->get()->result();
    }
	public function news_edit_update($id,$data)
	{
        $this->db->where('news_id',$id);
        $this->db->update('news',$data);
	}
	public function delete_news($id)
	{
	 	$this->db->where('news_id',$id);
	 	$this->db->delete('news');
	}
}
?>