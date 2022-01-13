<?php
 
 class Feedback_m extends CI_Model
 {
 	
 	public function __construct()
 	{
 	parent::__construct();
 	}
 	public function show_feedback()
 	{
 		$this->db->select('*, accounts.pic as upics');
 		$this->db->from('feedback');
 		$this->db->join('accounts','accounts.accounts_id= feedback.accounts_id');
 		//$this->db->join('order','accounts.accounts_id = order.accounts_id');
 		//$this->db->join('order_detail','order_detail.order_id = order.order_id');
 		//$this->db->join('item','item.item_id = order_detail.item_id');
 		return $this->db->get()->result();

 	}
 }
 ?>