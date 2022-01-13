<?php
/**
 *
 */
class News_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function check_id($num)
	{
		$this->db->select('*');
		$this->db->from('accounts');
		$this->db->where('accounts_id',$num);
		return $this->db->get()->result();
	}
	public function show_news($num)
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('accounts_id',$num);
		$this->db->where('active', 1);
		$this->db->or_where('accounts_id','0');
		return $this->db->get()->result();
	}
}
?>