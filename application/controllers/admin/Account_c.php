<?php

class Account_c extends CI_Controller
{
	
	function __construct()
	{
	  parent::__construct();
	  $this->load->model('admin/Accounts_m');
	}
	public function index()
	{   
		$data['show']=$this->Accounts_m->show_category();
		//echo "<pre>";
		//var_dump($data['show']);
		//exit;
		$this->load->view('admin/account_v',$data);
	}
		 public function add_item()
	 {
	 	$name = $this->input->post('item-name');
	 	 $price = $this->input->post('item-price');
  	 	 $des = $this->input->post('item-description');
   
          // $date= date('d/m/Y h;i a');
    	$data_ins = array(
    		'name'=>$name,
    		'price'=>$price,
    		'description'=>$des, 
    		//'active'=>1,
    		//'add_on'=>$date
    	);
    	 $this->Add_item_m->add_item($data_ins);
    }

    public function block($status, $id)
    {
    	$this->db->set('active', $status);
    	$this->db->where('accounts_id', $id);
    	$this->db->update('accounts');
    	redirect('admin/Account_c/index');
    }

}
?>