<?php

class Change_password_c extends CI_Controller
{
	
	public function __construct()
	{
	 parent::__construct();
	 $this->load->model('admin/Change_password_m');
	 //$this->load->library('session');

	}
	public function index()
	{
		$this->load->view('admin/change_password_v');
	}
	public function password_change()
	{
		
		$oldpassword=$this->input->post('old_password');
		$newpassword=$this->input->post('new_password');
		$renewpassword=$this->input->post('re_new_password');
		$valid['admin']= $this->Change_password_m->check($oldpassword);
		$count = count($valid['admin']);
		// echo "<pre>";
		// print_r($valid['admin']);
		// exit;

		
        if($count == 1)
		 {
		 	if($newpassword == $renewpassword)
		 	{
			    
		 		$data_ins = array('password'=>$newpassword);

		 		$this->Change_password_m->change($data_ins);
		 		
		 		redirect('Admin_login/index');
		 	}
		 	else
		 	{
		 	
             redirect('admin/Change_password_c/index');
			}
		}
		else
		{
         redirect('admin/Change_password_c/index');
		}
	}
}
?>