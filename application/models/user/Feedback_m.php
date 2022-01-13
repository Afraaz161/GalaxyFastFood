<?php


class Feedback_m extends CI_Model
{
	
	function __construct()
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
	public function show($num)
	{
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->where('accounts_id',$num);
		return $this->db->get()->result();
	}
	// public function ($num)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('accounts');
	// 	$this->db->where('accounts_id',$num);
	// 	return $this->db->get()->result();
	// }
	// public function update_pro($data, $num)
	// {
	// 	$this->db->where('accounts_id', $num);
	// 	$this->db->update('accounts', $data);
	// }
	public function insert_feedbacks($data)
	{
		$this->db->insert('feedback',$data);

	}
	public function delete_feedback($id)
	{
		$this->db->where('feedback_id',$id);
		$this->db->delete('feedback');
	}
	public function show_feedback($id)
	{
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->where('feedback_id',$id);
		return $this->db->get()->result();
	}
	public function update_do ($id,$data)
	{
		$this->db->where('feedback_id',$id);
		$this->db->update('feedback',$data);
	}
	
}

?>