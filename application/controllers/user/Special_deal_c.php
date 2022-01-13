<?php


 
 class Special_deal_c extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('user/Special_deal_m');
 		$this->load->library('session');
 		$num = $this->session->userdata('validity');
 		if(!isset($num))
 		{
 			redirect('Home_c');
 		}
 	}
 	public function index()
 	{
 		$num = $this->session->userdata('validity');
        $data['show'] = $this->Special_deal_m->check_id($num);
        $data['deal']= $this->Special_deal_m->show_deal_1();
        
        // echo "<pre>";
        // print_r($data['deal']);
        // exit;
 		$this->load->view('user/special_deal_v',$data);
 	}
 }

?>