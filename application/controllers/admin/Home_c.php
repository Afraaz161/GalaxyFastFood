<?php

class Home_c extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
     }
	public function index()
	{
    
      $this->load->view('admin/home_v');

	}
}