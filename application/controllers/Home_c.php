<?php


class Home_c extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model(array('user/Order_m','Item_m','CMS_m'));
		$this->load->model('user/Special_deal_m');
		$this->load->model('Footer_m');
		$this->session->userdata('validity');

	}
	public function index()
	{ 
	  if($this->session->userdata('validity')!= NULL)
	  { 
        $data['count'] = $this->Order_m->numoncart();
      }
        $data['show_feedback']=$this->Item_m->show_feedback();
    	$data['itemtype'] = $this->Item_m->itemtype();
    	$data['deal']= $this->Special_deal_m->show_deal();
    	$data['show_itemtype']= $this->Item_m->shows_itemtype();
    	$data['footers_item']=$this->Footer_m->show_itemtype();
    	$data['footer_img']=$this->Footer_m->show_gallary_img();
    	$data['contact']=$this->CMS_m->show_contact();
    	 // echo "<pre>";
    	 // print_r($data['show_itemtype']);
    	 // exit;
    	
        $this->load->view('home_v.php',$data);
	}
}
?>