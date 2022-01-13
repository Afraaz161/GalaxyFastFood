<?php


class Change_password_c extends CI_Controller
{
	
    public 	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user/Change_password_m');
		$num = $this->session->userdata('validity');
		if(!isset ($num))
		{
			redirect('Home_c');
		}
	}
	public function index()
	{
	  $num = $this->session->userdata('validity');
	  $data['show']= $this->Change_password_m->check_id($num);
	  
      $this->load->view('user/change_password_v',$data);
	}
	
	public function password_change()
	{
		$num = $this->session->userdata('validity');
		$oldpassword = $this->input->post('oldpass');
		 $newpass = $this->input->post('new-password');
		 $renewpass= $this->input->post('re-new-password');
		$valid['user'] =$this->Change_password_m->check($num,$oldpassword);
        $count = count($valid['user']);
        
		if($count == 1)
		{
			if($newpass == $renewpass)
			{
				$num = $this->session->userdata('validity');
				$data_ins = array('password'=>$newpass);
	            $this->Change_password_m->change($num,$data_ins);
		        $this->session->unset_userdata('validity');
		        $this->session->sess_destroy();	
		        redirect('Signin_c/index');
            }
            else
            {
            	redirect('user/Change_password_c/index');
            }
		} 
		 else
		 {
		 	redirect('user/Change_password_c/index');
		 }
		
		
		
	}
}
?>