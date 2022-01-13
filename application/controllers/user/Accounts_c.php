<?php

class Accounts_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user/Accounts_m');
	}
	public function index()
	{
		$this->load->view('user/accounts_v');
	}
	public function add_do()
	{
		$name  =    $this->input->post('user_name');
		$phone =    $this->input->post('user_phone');
		 $pic  =    $this->input->post('user_pic');
	    $email =	$this->input->post('user_email');
	   $password =  $this->input->post('user_password');
	   $confirm_password=$this->input->post('user_con-password'); 
	    $address = $this->input->post('user_address');

	    if($password == $confirm_password)
	    {
	
		$data_ins = array('name'=>$name,
	                        'phone'=>$phone,
	                        'pic'=>$pic,
	                        'email'=>$email,
	                        'password'=>$password,
	                        'active'=>1,
	                        'address'=>$address);
		
         $this->Accounts_m->add_do($data_ins);
         redirect('Signin_c/index');
     }
     else 
     {
     	redirect('Signup_c/index');
     }
 
	}
}
?>