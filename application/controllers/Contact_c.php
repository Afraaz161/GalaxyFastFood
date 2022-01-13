<?php

class Contact_c extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array('user/Order_m','Item_m','CMS_m'));
		$this->load->model('Footer_m');
		$this->load->library('session');
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
		$this->load->view('contact_v',$data);
	}
}
?>
