<?php

class Order_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function add_order($data)
	{
		$this->db->insert('order',$data);
		return $this->db->insert_id();

	}
	public function add_order_detail($data)
	{
		$this->db->insert('order_detail',$data);

	}
	public function check_for_new($aid)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('accounts_id',$aid);
		return $this->db->get()->num_rows();
	}
	public function check_for_confirmation($aid)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('accounts_id',$aid);
		$this->db->order_by('order_id','DESC');
		$this->db->limit('1');
		return $this->db->get()->result();
	}
	public function show_category()
	{
		$this->db->select('*');
		$this->db->from('order');
		return $this->db->get()->result();
	}
	public function show_order()
	{
		$aid = $this->session->userdata('validity');
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('accounts_id', $aid);
		$this->db->order_by('order_id', 'DESC');
		$this->db->limit('1');


		$last_id = $this->db->get()->result();
		@$last_id1 = $last_id[0]->order_id;
		@$cadd_on1 = $last_id[0]->cadd_on;
		@$c_byuser = $last_id[0]->c_byuser;
		if($c_byuser == 0)
		{	//echo $last_id1;
			if($cadd_on1 == 0)
			{
				$this->db->select('*, order_detail.add_on as odaddon,item.price as item_price');// odaddon for order_detail.add_on 
				$this->db->from('order_detail');
				$this->db->join('item', 'order_detail.item_id = item.item_id');
				$this->db->where('order_detail.order_id', $last_id1);

				return $this->db->get()->result();
			}
			else
			{
				return 0;
			}
		}
		else
		{
			return 0;
		}
	}
    
    public function numoncart()
	{
		$sid = $this->session->userdata('validity'); 
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('accounts_id', $sid);
		$this->db->order_by('order_id', 'DESC');
		$this->db->limit('1');
        $data['order'] = $this->db->get()->result();
        @$oid=$data['order'][0]->order_id;
        @$c_byuser = $data['order'][0]->c_byuser;
        @$c_addon = $data['order'][0]->cadd_on;

        if($c_byuser  == 0)
        {
        	if($c_addon == 0)
        	{
	        	$this->db->select('*');
	        	$this->db->from('order_detail');
	        	$this->db->where('order_id',$oid);
	        	return  $this->db->get()->num_rows();
	        }
	        else
	        {
	        	return  0;
	        }
	    }
	    else
	    {
	    	return  0;
	    }
	}


	public function show()
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->join('accounts','order.accounts_id = accounts.accounts_id');
		return $this->db->get()->result();
	}
	public function confrim_order_btn($sid)
	{  
		$date =  date('Y/m/d H:i:s');
		$this->db->where('order_id',$sid);
		$this->db->set('cadd_on',$date);
		$this->db->set('order_status_id',1);
		$this->db->update('order');
		
	}
	public function update_order($sid)
	{
		$this->db->where('order_id',$sid);
		$this->db->set('c_byuser',1);
		$this->db->update('order');
	}
	public function item_del($id)
	{
		$this->db->where('order_detail_id',$id);
		$this->db->delete('order_detail');
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
        //var_dump($id);
        //exit;
		$this->db->where('order.c_byuser', '0');
		$this->db->where('order.cadd_on !=', '0');
		$this->db->order_by('order.order_id', 'DESC');
        return $this->db->get()->result('array');
    }
    public function allstatus()
	{
		$this->db->select('*');
		$this->db->from('order_status');
		return $this->db->get()->result();

	}
	public function order_history($stid)
	{
		$this->db->select('*, order_status.name as sname,accounts.name as aname,item.name as item_name,
			accounts.pic as apic');
		$this->db->from('order');
	    $this->db->join('accounts','accounts.accounts_id = order.accounts_id');
	    $this->db->join('order_status','order.order_status_id = order_status.order_status_id');
	    $this->db->join('order_detail','order_detail.order_id = order.order_id');
	    $this->db->join('item','item.item_id =order_detail.item_id');
	    $this->db->where('order.accounts_id',$stid);
	   // $this->db->where('order.order_status_id', $stid); // this should be dynamic
        //$this->db->or_where('order.order_status_id', $stid); 
	    // var_dump($stid);
	    // exit;
	    $this->db->order_by('order.order_id','DESC');
	    //$this->db->group_by('order.order_id'); // for same id data show in one record 
	  
		return $this->db->get()->result('array');

	}
	public function order_detail($id)
    {
    	$this->db->select('*,order_detail.add_on as odaddan');
    	$this->db->from('order_detail');
    	$this->db->join('item','order_detail.item_id = item.item_id');
    	$this->db->where('order_id',$id);
    	return $this->db->get()->result();
    }
	public function show_order_history($id)
	{
     $this->db->select('*');
     $this->db->from('order');
     $this->db->join('accounts','order.accounts_id = accounts.accounts_id');

     $this->db->where('order_id',$id);
     return $this->db->get()->result();
    }
    public function check_id($num)
    {
    	$this->db->select('*');
    	$this->db->from('accounts');
    	$this->db->where('accounts_id',$num);
    	return $this->db->get()->result();
    }
    public function dates($id,$sdate,$edate)
	{

	  $this->db->select('*,item.name as item_name,order_status.name as status_name');
      $this->db->from('order');
      $this->db->join('order_status','order.order_status_id=order_status.order_status_id');
      $this->db->join('order_detail','order_detail.order_id = order.order_id', 'full');
      $this->db->join('item','item.item_id = order_detail.item_id');
      $this->db->join('accounts','accounts.accounts_id = order.accounts_id', 'full');
      $this->db->where('order.accounts_id',$id);
//$this->db->group_by('order.order_id');
      $this->db->where('order.cadd_on >=', $sdate);
      $this->db->where('order.cadd_on <=', $edate);
       $this->db->order_by('order.order_id', 'DESC');
      return $this->db->get()->result('array');
    }
}
?>