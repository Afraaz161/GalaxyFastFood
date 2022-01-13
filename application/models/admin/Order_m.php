<?php
class Order_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		//$this->session->userdata('validity');
	}
	public function show_order($id)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->join('accounts','accounts.accounts_id = order.accounts_id');
		$this->db->where('order_id',$id);
		return $this->db->get()->result();
	}
	public function show_order1($id)//$id)
	{
		//var_dump($id);
		//exit;
		$this->db->select('*,item.name as sname,accounts.name as aname, accounts.pic as apic,order_status.name as oname');
		$this->db->from('order');
		$this->db->join('order_status','order_status.order_status_id = order.order_status_id');
		$this->db->join('accounts', 'accounts.accounts_id = order.accounts_id');
		$this->db->join('order_detail','order_detail.order_id = order.order_id');
        $this->db->join('item','order_detail.item_id = item.item_id');
        $this->db->where('order.order_status_id', $id); // this should be dynamic
        $this->db->or_where('order.order_status_id', $id); 
        // var_dump($id);
        // exit;
		$this->db->where('order.c_byuser', '0');
		$this->db->where('order.cadd_on !=', '0');
		$this->db->order_by('order.order_id', 'DESC');
        return $this->db->get()->result('array');
    }

	public function order_detail($id)
	{
		$this->db->select('*,order_detail.add_on as odaddon');
		$this->db->from('order_detail');
		$this->db->join('item','order_detail.item_id = item.item_id');
		$this->db->where('order_id',$id);
		
		return $this->db->get()->result();
	}
	public function order_del($id)
	{
		$this->db->where('order_detail_id',$id);
		$this->db->delete('order_detail');
	}

	public function allstatus()
	{
		$this->db->select('*');
		$this->db->from('order_status');
		return $this->db->get()->result();

	}
	public function dates($sdate,$edate)
	{

	  $this->db->select('*,item.name as item_name,order_status.name as status_name');
      $this->db->from('order');
      $this->db->join('order_status','order.order_status_id=order_status.order_status_id');
      $this->db->join('order_detail','order_detail.order_id = order.order_id', 'full');
      $this->db->join('item','item.item_id = order_detail.item_id');
      $this->db->join('accounts','accounts.accounts_id = order.accounts_id', 'full');
      $this->db->where('order.cadd_on >=', $sdate);
      $this->db->where('order.cadd_on <=', $edate);
     
      $this->db->order_by('order.order_id', 'DESC');
      //$this->db->group_by('order.order_id'); 
      return $this->db->get()->result('array');
    }
	public function update($stid,$oid)
	{
      $this->db->set('order_status_id',$oid);
      $this->db->where('order_id',$stid);
      $this->db->update('order');
    }
 
}

?>