<?php


class Announcements_c extends CI_Controller
{
	
	function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	   $this->load->model('user/Announcement_m');
	   $num = $this->session->userdata('validity');
	   if(!isset($num))
	   {
	   	redirect('Home_c');
	   }
	}
	public function index()
	{
		$num = $this->session->userdata('validity');
		$data['show'] = $this->Announcement_m->check_id($num);
	    $data['ano'] = $this->Announcement_m->show_anouncement($num); 
	    $this->load->view('user/announcements_v',$data);
	}
}
?>