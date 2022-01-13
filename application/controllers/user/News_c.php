<?php
class News_c extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user/News_m');
		$num = $this->session->userdata('validity');
		if(!isset ($num))
		{
			redirect('Home_c');
		}
	}
	public function index()
	{
		$num = $this->session->userdata('validity');
		$data['show']=$this->News_m->check_id($num);
		$data['show_new']=$this->News_m->show_news($num);
		// echo "<pre>";
		// print_r($data['show_new']);
		// exit;

		
		$this->load->view('user/news_v',$data);
	}
	
} 
?>