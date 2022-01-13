<?php

class Gallary_c extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array('user/Order_m','Item_m','CMS_m'));
		$this->load->model('Footer_m');
		$this->load->model('Gallery_m');
		$this->load->library('session');
		$this->session->userdata('validity');
	}
	public function index()
	{  
		if($this->session->userdata('validity')!= NULL)
		{
           $data['count']= $this->Order_m->numoncart();
	  	}
		$data['itemtype'] = $this->Item_m->itemtype();
		$data['footers_item']=$this->Footer_m->show_itemtype();
		$data['footer_img']=$this->Footer_m->show_gallary_img();
		$data['gallery_data']=$this->Gallery_m->show_data();
		$data['contact']=$this->CMS_m->show_contact();
		// echo "<pre>";
		// print_r($data['gallery_data']);
		// exit;

		$this->load->view('gallary_v',$data);
	}

	public function gallary($id)
	 {

		if($this->session->userdata('validity')!= NULL)
		{
           $data['count']= $this->Order_m->numoncart();
	  	}
	  	$data['itemtype'] = $this->Item_m->itemtype();
	 	// $sid = $this->session->userdata('validity'); 
	 	// $this->db->select('*');
	 	// $this->db->from('order');
	 	// $this->db->where('accounts_id', $sid);
	 	// $data['count'] = $this->db->get()->num_rows();
	 	$data['footers_item']=$this->Footer_m->show_itemtype();
		$data['footer_img']=$this->Footer_m->show_gallary_img();
		$data['specific']=$this->Gallery_m->shows_data($id);
		$data['contact']=$this->CMS_m->show_contact();
		// echo "<pre>";
		// print_r($data['specific']);
		// exit;

		$this->load->view('gallary_s',$data);
	}
}
?>
