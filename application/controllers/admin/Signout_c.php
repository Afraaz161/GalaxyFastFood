<?php 
class Signout_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('session');
	}
	public function index()
	{
		redirect('Admin_login/index');
	}
}
?>