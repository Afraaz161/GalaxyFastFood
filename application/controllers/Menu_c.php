<?php

class Menu_c extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model(array('user/Order_m','Item_m','Footer_m','CMS_m'));
		$this->session->userdata('validity');

	}
	public function index()
	{ 
        if($this->session->userdata('validity')!= NULL)
        {
         $data['count'] = $this->Order_m->numoncart();
        }
		$data['itemtype'] = $this->Item_m->itemtype();
        $data['footers_item']=$this->Footer_m->show_itemtype();
        $data['footer_img']=$this->Footer_m->show_gallary_img();
        $data['contact']=$this->CMS_m->show_contact();
        $this->load->view('menu_v', $data);
    }
    public function itemtype($id)
    {
        if($this->session->userdata('validity')!= NULL)
        {
         $data['count'] = $this->Order_m->numoncart();
        }
        $data['itemtype'] = $this->Item_m->itemtype();
		$data['itemtypename'] = $this->Item_m->itemtypename($id);
		$data['item'] = $this->Item_m->item($id);
        $data['footers_item']=$this->Footer_m->show_itemtype();
        $data['footer_img']=$this->Footer_m->show_gallary_img();
        $data['contact']=$this->CMS_m->show_contact();
        // echo "<pre>";
        // print_r($data['item']);
        // exit;
        $this->load->view('itemtype_v', $data);
	}
    public function add_order($id)
    {
    	$aid = $this->session->userdata('validity');
    	$date = date('Y/m/d H:i:s');
    	// following will tell me whether the user is new or not, it will see in order table and return NUM_Rows. if it eturn 0 its mean it is new to order.
    	$check_for_new = $this->Order_m->check_for_new($aid);
        
        if($check_for_new !=0)
    	{
    	// this is for is user is not the first time, the following model will see its ID in order table and return the last record, so on the behalf of cadd_on will check further.
    	$check_for_confirmation1 = $this->Order_m->check_for_confirmation($aid);
    	//exit;
    	//var_dump();
    	$check_for_confirmation_cadd_on = $check_for_confirmation1[0]->cadd_on; 
    	}
    	else
    	{
    	    // if it is new here
    		$data_ins = array('accounts_id'=>$aid,
    	                      'fadd_on'=>$date,
    	                      'cadd_on'=>0,
    	                      'order_status_id'=>0,
    	                      'c_byuser'=>0);
    		$order_id = $this->Order_m->add_order($data_ins);
    		$date_od =date('d/m/Y h:i a');
    		$data_in_od = array('order_id'=>$order_id,
    		                 	'item_id'=>$id,
    		                 	'add_on'=>$date_od
    		);
    		$this->Order_m->add_order_detail($data_in_od);
    		//echo "1";
    		redirect('Menu_c');
        }

    	if($check_for_confirmation_cadd_on == 0)
    	{
    		// var_dump($check_for_confirmation1);
    		$order_id = $check_for_confirmation1[0]->order_id;
    		//echo $order_id;
    		$date_od = date('d/m/Y h:i a');
    		$data_in_od = array('order_id'=>$order_id,
    	                         'item_id'=>$id,
    	                           'add_on'=>$date_od
    	                       );
    		   $this->Order_m->add_order_detail($data_in_od);
    		// echo "2";
    		redirect('Menu_c');
    	}
    	else
    	{
            $date_od = date('d/m/Y h:i:s a');
    		$data_ins = array('accounts_id'=>$aid,
    			              'fadd_on'=>$date,
    			              'cadd_on'=>0,
                              'order_status_id'=>0
                             );

    		$order_id = $this->Order_m->add_order($data_ins);
            $date_od = date('d/m/Y h:i a');
    		$data_in_od = array('order_id'=>$order_id,
    	                        'item_id'=>$id,
    	                        'add_on'=>$date_od
    	                       );
    		$this->Order_m->add_order_detail($data_in_od);
    		//echo "3";
    		redirect('Menu_c');
    	}
    	redirect('Menu_c');
    }
	
}
?>
