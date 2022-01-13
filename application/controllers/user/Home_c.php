<?php

class Home_C extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->library('session');
		$this->load->model('user/Profile_m');
		$num = $this->session->userdata('validity');
		if(!isset ($num))
		{
			redirect('Home_c');
		}
	}

	public function index()
	{
		$num = $this->session->userdata('validity');
		$data['show'] = $this->Profile_m->check_id($num);
		$this->load->view('user/home_v',$data);
	}
	public function to_do()
	{
		$this->load->view('user/profile_v');
	}
}
?>