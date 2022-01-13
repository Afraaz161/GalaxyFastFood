<?php

/**
 * 
 */
class Inquriy_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/Inquriy_v');
	}
}
?>