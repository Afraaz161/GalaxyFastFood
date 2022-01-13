<?php


 
 class Order_c extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->library('session');
 		$this->load->model('user/Order_m');
 		$num = $this->session->userdata('validity');
 		if(!isset ($num))
 		{
 			redirect('Home_c');
 		} 
 	}
 	public function index()
 	{
 		$num = $this->session->userdata('validity');
 		$data['show']= $this->Order_m->check_id($num);
 		//$data['show1']= $this->Order_m->show_category($num);
 		$data['incart']=$this->Order_m->show_order();
 		// echo "<pre>";
 		// var_dump($data['incart']);
 		// exit;
 		$this->load->view('user/order_v',$data);
 	}
 	public function confrim_order($oid)
 	{ 
 		 $sid = $this->session->userdata('validity');
 		 $this->db->select('*');
 		 $this->db->from('order');
 		 $this->db->where('accounts_id',$sid);
 		 $this->db->order_by('order_id', 'DESC');
 		 $this->db->limit('1');
         $data['order']=$this->db->get()->result();
 		 $cid= $data['order'][0]->cadd_on;
 		 echo $cid."-";
 		 if($cid == 0)
 		 {
			$this->Order_m->confrim_order_btn($oid);
 	     }
 	     redirect('user/Order_c');
 	}
 	public function cancel_order($did)
 	{
 		$sid = $this->session->userdata('validity');
 		$this->db->select('*');
 		$this->db->from('order');
 		$this->db->where('accounts_id',$sid);
 		$this->db->order_by('order_id','DESC');
 		$this->db->limit('1');
 		$data['order']=$this->db->get()->result();
 		$co=$data['order'][0]->c_byuser;
 		if($co == 0)
 		{
 			$this->Order_m->update_order($did);
 		}
 		redirect('user/Order_c');
 	}
 	public function item_del($id)
 	{
 		$this->Order_m->item_del($id);
 		redirect('user/Order_c');

 	}
 	public function history()
 	{
        
    $stid = $this->session->userdata('validity');
    $num = $this->session->userdata('validity');
    $data['show']= $this->Order_m->check_id($num);
 		$data['history_show']=$this->Order_m->order_history($stid);

      $my=[];
      foreach ( $data['history_show'] as $a)
      {
        if(array_key_exists($a['order_id'], $my))
        {
          $my[$a['order_id']]['item_id'] = $my[$a['order_id']]['item_id'].", ".$a['item_id'];
          $my[$a['order_id']]['item_name'] = $my[$a['order_id']]['item_name'].", ".$a['item_name'];
          
          $my[$a['order_id']]['price'] = $my[$a['order_id']]['price']."+".$a['price'];
        }
        else
        {
          $my[$a['order_id']] = $a;
        }
      }
      $data['my'] = $my;
     
 		$this->load->view('user/history_v',$data);
 	}
 	public function order_detail($id)
 	{
       $num = $this->session->userdata('validity');
       $data['accounts'] = $this->Order_m->show_order_history($id);
       $data['show']= $this->Order_m->check_id($num);
       $data['order_detail'] = $this->Order_m->order_detail($id);
       // echo "<pre>";
       // print_r($data['accounts']);
       // exit;
       $this->load->view('user/order_detail',$data);
 	}

    public function history_order_detail($id)
  {
       $num = $this->session->userdata('validity');
       $data['accounts'] = $this->Order_m->show_order_history($id);
       $data['show']= $this->Order_m->check_id($num);
       $data['order_detail'] = $this->Order_m->order_detail($id);
       // echo "<pre>";
       // print_r($data['accounts']);
       // exit;
       $this->load->view('user/history_order_detail_v',$data);
  }
   public function dated()
    {
      $_startdate=$this->input->post('startdate');
      $_enddate=$this->input->post('enddate'); 
      $id = $this->session->userdata('validity');
      $num = $this->session->userdata('validity');
      $startdate = date("Y/m/d", strtotime($_startdate));
      $enddate = date("Y/m/d", strtotime($_enddate));
      //  echo $startdate."<br/>".$enddate."<hr/>";
      $data['show']= $this->Order_m->check_id($num);
      $data['showdata']=$this->Order_m->dates($id,$startdate,$enddate);
      // echo "<pre>";
      // print_r($data['showdata']);
      // exit;
    $my=[];
      foreach ( $data['showdata'] as $a)
      {
        if(array_key_exists($a['order_id'], $my))
        {
          $my[$a['order_id']]['item_id'] = $my[$a['order_id']]['item_id'].", ".$a['item_id'];
          $my[$a['order_id']]['item_name'] = $my[$a['order_id']]['item_name'].", ".$a['item_name'];
          $my[$a['order_id']]['price'] = $my[$a['order_id']]['price']."+".$a['price'];
        }
        else
        {
          $my[$a['order_id']] = $a;
        }
      }
      $data['my'] = $my;
      // echo "<pre>";
      // print_r($my);
      // exit;
      $this->load->view('user/order_history_v',$data);
    }
 }
?>