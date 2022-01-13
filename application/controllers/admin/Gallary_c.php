<?php

class Gallary_c extends CI_Controller
{
	
	public function __construct()
	{
	   parent::__construct();
	   $this->load->library('session');
	   $this->load->model('admin/Gallary_m');
	   $this->load->helper('url','form');
	   $this->load->library('form_validation');
	}
	public function index()
	{
		$data['gallary_data']=$this->Gallary_m->show_data();
		// echo "<pre>";
		// print_r($data['gallary_data']);
		// exit;
		$this->load->view('admin/gallary_v',$data);
	}
	public function add_data()
	{
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('heading','Heading','required|alpha|trim');
		// $this->form_validation->set_rules('description','Heading Description','required|trim|alpha_numeric_spaces');
		// $this->form_validation->set_rules('pic','Gallary Pic','required');
		// if($this->form_validation->run() == false)
		// {
  //        $this->load->view('admin/gallary_v',$data);
		// }
		// else
		// {

		// }
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$date = date('d/m/Y h:i a');
		// file uploading start here
		$config['allowed_types']='jpg|png|jpeg';
       $config['upload_path']='./assets/media/gallary/';
       $this->load->library('upload',$config);
       $this->upload->do_upload('pic');
       $file_name = $this->upload->data();
       $name_of_files =$file_name['file_name'];
       // file uploading closed here

       $data_ins = array('heading'=>$heading,
                          'description'=>$description,
                          'add_on'=>$date,
                          'pic'=>$name_of_files,
                          'active'=> 1);
       $this->Gallary_m->add_data($data_ins);
       redirect('admin/Gallary_c/index');
	}
	public function edit_gallary($id)
	{
		$data['edit_data']=$this->Gallary_m->edit_gallary_data($id);
		// echo "<pre>";
		// print_r($data['edit_data']);
		// exit;
		$this->load->view('admin/edit_gallary_data_v',$data);
      
	}
	public function delete_gallary($id)
	{
       $this->Gallary_m->delete_gallary_data($id);
       redirect('admin/Gallary_c/index');
	}
	public function gallary_edit_do()
	{
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$id=$this->input->post('gallery_id');
		$data_ins = array('heading'=>$heading,
                          'description'=>$description
                        );
		$this->Gallary_m->gallary_edit_update($id,$data_ins);
		redirect('admin/Gallary_c/index');
	}
	public function block($status, $id)
	{
		$this->db->set('active', $status);
    	$this->db->where('gallery_id', $id);
    	$this->db->update('gallery');
    	redirect('admin/Gallary_c/index');
	}
}
?>