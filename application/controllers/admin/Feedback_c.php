<?php

class Feedback_c extends CI_Controller
{
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->library('session');
	  $this->load->model('admin/Feedback_m');
	}
	public function index()
	{
		$data['feedback']=$this->Feedback_m->show_feedback();
		$this->load->view('admin/feedback_v',$data);
	}
}
?>