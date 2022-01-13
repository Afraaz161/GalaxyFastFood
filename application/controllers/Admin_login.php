<?php

class Admin_login extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_login_m');
		
	}

	public function index()
	{			
		$this->load->view('admin/login');
	}

	public function signin_do()
	{
		
		$user = $this->input->post('user-my');
		$pass = $this->input->post('pass-my');

		$valid = $this->Admin_login_m->check_admin($user, $pass);
		
		if ($valid == 1)

		{
			$_SESSION['alert_msg'][]  = array('notify' => 'success', 'msg' => 'successfylly done' );
			redirect('admin/Home_c');
		}
		else
		{
			
			redirect('Admin_login/index');
		}
	}
}