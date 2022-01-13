<?php

class Logout_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	
	}
	public function index()
	{
		$this->session->unset_userdata('validity');
		$this->session->sess_destroy();
		redirect('Home_c');
	}
}

?>