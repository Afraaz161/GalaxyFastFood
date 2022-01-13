<?php

class ORDER_c extends CI_Controller
  {
  	
  	function __construct()
  	{
  		parent::__construct();
      $this->load->library('session');
      $this->load->model('admin/Order_m');
      $this->session->userdata('validity');
  	}
  	public function index($id = NULL)//$id_for_status)
  	{
      if($id == NULL)
      {
        $id = 1;
      }
      $data['status'] = $this->Order_m->allstatus();
      // $data['date']=$this->Order_m->date();

      $data['incart']=$this->Order_m->show_order1($id);
      //$data['']=$this->Order_m->show_order2($id);
      $my=[];
      foreach ( $data['incart'] as $a)
      {
        if(array_key_exists($a['order_id'], $my))
        {
          $my[$a['order_id']]['item_id'] = $my[$a['order_id']]['item_id'].", ".$a['item_id'];
          $my[$a['order_id']]['sname'] = $my[$a['order_id']]['sname'].", ".$a['sname'];
          $my[$a['order_id']]['price'] = $my[$a['order_id']]['price']."+".$a['price'];
        }
        else
        {
          $my[$a['order_id']] = $a;
        }
      }
      $data['my'] = $my;
      $this->load->view('admin/ORDER_v', $data);
    }
    public function order_detail($id)
    {
      $data['accounts']=$this->Order_m->show_order($id);
     
      $data['order_detail']=$this->Order_m->order_detail($id); 
     
      $this->load->view('admin/order_detail',$data);
    }
    public function item_del($id)
    {
      $this->Order_m->order_del($id);
      redirect('admin/ORDER_c/');
    }
    public function dated()
    {
      $_startdate=$this->input->post('startdate');
      $_enddate=$this->input->post('enddate'); 
      $startdate = date("Y/m/d", strtotime($_startdate));
      $enddate = date("Y/m/d", strtotime($_enddate));
      //  echo $startdate."<br/>".$enddate."<hr/>";
      $data['showdata']=$this->Order_m->dates($startdate,$enddate);
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
      // print_r($data['my']);
      // exit;
      $this->load->view('admin/history_v',$data);
    }
    public function history_order_detail($id)
    {
      $data['accounts']=$this->Order_m->show_order($id);
     
      $data['order_detail']=$this->Order_m->order_detail($id); 
     
      $this->load->view('admin/history_order_detail_v',$data);
    }
    public function update()
    {
      $stid=$this->input->post('stid');  //status ID
      $oid=$this->input->post('oid');  //order ID
      $account_id=$this->input->post('account_id');

      $this->db->select('*');
      $this->db->from('order');
      $this->db->join('order_status','order.order_status_id = order_status.order_status_id');
      $this->db->where('order.order_id',$oid);
      $data['order_status']= $this->db->get()->result(); // $this->db->get()->result();
      $ss = $data['order_status'][0]->weight;
      // weight where to go/

     

      $this->db->select('*');
      $this->db->from('order_status');
      $this->db->where('order_status_id', $stid);
      $weight_whereToGo1 = $this->db->get()->result();
      $weight_whereToGo = $weight_whereToGo1[0]->weight;
      //  echo $ss." <br/> ".$weight_whereToGo;

      $msg = $weight_whereToGo1[0]->detail;
      


      // taking the phone num of the account holder
      $this->db->select('*');
      $this->db->from('accounts');
      $this->db->where('accounts_id', $account_id);
      $accInfo = $this->db->get()->result();
      $mob1 = $accInfo[0]->phone;
      $mob2 = substr($mob1, 1, 11);
      $mob3 = "92".$mob2; // $mob3 is the number with 92 concatinate with the phone number

      //$msg = $data['order_status'][0]->detail;
      include 'Msgapi.php'; 
      sendmsg($mob3, $msg);


      if ($ss == 3)
      {
        //echo "error";
        $this->session->set_flashdata('error_msg','Record Not Found!');
        return redirect('admin/ORDER_c');

      }
      else if($weight_whereToGo - $ss == 1 )
      {
        //echo "ok";
        $this->db->set('order_status_id',$stid);
        $this->db->where('order_id', $oid);
        $this->db->update('order');
        //redirect('admin/ORDER_c');
      }
      else if ($weight_whereToGo - $ss == 2) 
      {
        //echo "error";
        $this->session->set_flashdata('error_msg','Record Not Found!');
        return redirect('admin/ORDER_c');
      }
      else if($weight_whereToGo - $ss == 3)
      {
        //echo "error";
        $this->session->set_flashdata('error_msg','Record Not Found!');
        return redirect('admin/ORDER_c');
      }
      else if($weight_whereToGo -$ss >5)
      {
        //echo "ok";
        $this->db->set('order_status_id',$stid);
        $this->db->where('order_id', $oid);
        $this->db->update('order');
       // redirect('admin/ORDER_c');
      }
      else
      {
       // echo "error";
        $this->session->set_flashdata('error_msg','Record Not Found!');
        return redirect('admin/ORDER_c');
      }
      redirect('admin/ORDER_c');
      
    }
  }
?>