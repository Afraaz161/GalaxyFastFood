<?php
/**
 * 
 */
class Profile_c extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('user/Profile_m');
		$this->load->library('session');
		$num = $this->session->userdata('validity');
		if(!isset ($num))
		{
			redirect('Home_c');
		}
		// $this->load->helper('url');
	}

	public function index()
	{
		$num = $this->session->userdata('validity');
     	$data['show'] = $this->Profile_m->check_id($num);
     	// echo "<pre>";
     	// print_r($data['show']);
     	// exit;
		$this->load->view('user/profile_v',$data);
	}

	public function Profile_edit()
	{ 
		$num = $this->session->userdata('validity');
		$data['show'] = $this->Profile_m->check_id($num); 
		//  echo "<pre>";
		//  print_r($data['show']);
		//  echo "</pre>";
		//  exit();

		$this->load->view('user/profile_edit_v',$data);

	}
	
	public function profile_edit_do()
	{
		$num = $this->session->userdata('validity');
		
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		// echo "<pre>";
		// print_r($this->input->post('name') .$this->input->post('email') );
		// echo "<br>";
		// print_r($num);
		// echo "</pre>";
		// exit();
		//$password = $this->input->post('password');
		$data = array('name'=>$name,
	           				'phone'=>$phone,
	           			     'email'=>$email);

		$this->Profile_m->update_pro($data, $num);
		redirect('user/Home_c');
	}
}

?>