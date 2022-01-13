<?php


class Feedback_c extends CI_Controller
{
	
	 public function __construct()
	{
	parent::__construct();
	$this->load->library('session');
		$this->load->model('user/Feedback_m');
		$num = $this->session->userdata('validity');
		if(!isset ($num))
		{
			redirect('Home_c');
		}
	}
	public function index()
	{
		$num = $this->session->userdata('validity');
		$data['show'] = $this->Feedback_m->check_id($num);
		$data['feedback_show'] = $this->Feedback_m->show($num);
		$this->load->view('user/feedback_v',$data);
	}
	public function insert_feedback()
	{
		$num = $this->session->userdata('validity');
		$review = $this->input->post('review');
		$star=$this->input->post('optionsRadios');
		$date=date('y/m/d H:i a');
		$data_ins = array('accounts_id'=>$num,
	                      'review'=>$review,
	                      'add_on'=>$date,
	                      'features'=>1,
	                      'stars'=>$star
	                  );
		$this->Feedback_m->insert_feedbacks($data_ins);
		redirect('user/Feedback_c');

	}
	public function delete($id)
	{
     $this->Feedback_m->delete_feedback($id);
     // var_dump($id);
     // exit;
     redirect('user/Feedback_c');
	}
	public function change_feedback($id)
	{
		$num = $this->session->userdata('validity');
		$data['show'] = $this->Feedback_m->check_id($num);
		$data['shows']=$this->Feedback_m->show_feedback($id);
		
		$this->load->view('user/update_feedback_v',$data);
	}
	public function update_do()
	{
		$review = $this->input->post('name');
		$id = $this->input->post('feedbackid');
		$data_ins = array('review'=>$review);
		$this->Feedback_m->update_do($id,$data_ins);
		redirect('user/Feedback_c/index');

	}
}

?>