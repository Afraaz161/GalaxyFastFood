<?php

class Signin_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Signin_m');
		$this->load->model('Footer_m');
		$this->load->model('CMS_m');
		$this->load->library('session');
		$this->load->library('form_validation');

	}
	public function index()
	{
		$data['footers_item']=$this->Footer_m->show_itemtype();
		$data['footer_img']=$this->Footer_m->show_gallary_img();
		$data['contact']=$this->CMS_m->show_contact();
		$this->load->view('login_v',$data);
	}
    public function sign_do()
	{
		//$this->load->library('form_validation');
		//$this->form_validation->set_rules('user_email','User Email','valid_email');
		$email = $this->input->post('user_email');
		$password = $this->input->post('user_password');
		$valid['customer'] = $this->Signin_m->check_user($email,$password);
		$count = count($valid['customer']);
        if($count == 1)
		{
		 $login = $valid['customer'][0]->accounts_id; 
		 $this->session->set_userdata('validity', $login);
		 $_SESSION['alert_msg'][]  = array('notify' => 'success', 'msg' => 'successfylly done');
		 redirect('user/Home_c');
		}
		else 
		{
		$_SESSION['alert_msg'][]  = array('notify' => 'error', 'msg' => 'Email and password not matched!');
		redirect('Signin_c');
		}
	}
}
?>
