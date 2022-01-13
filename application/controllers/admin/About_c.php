<?php

class About_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/About_m');
		$this->load->library('session');
		$this->load->helper('url','form');
        $this->load->library('form_validation');
	}
	public function index()
	{
    $data['about_us']=$this->About_m->show();
    // echo "<pre>";
    // print_r($data['about_us']);
    // exit;
		$this->load->view('admin/about_v',$data);
	}
	public function add_data()
	{
		 // $this->load->library('form_validation');
      // $this->form_validation->set_rules('heading','Heading','required|trim|alpha_numeric_spaces');
      // $this->form_validation->set_rules('description','Description','required|trim|alpha_numeric_spaces');
      // $this->form_validation->set_rules('pic','Pic','required');
      // if($this->form_validation->run() == false)
      // {
      //  $this->load->view('admin/about_v',$data);
      // }
      // else
      // {

      // }
		$heading=$this->input->post('heading');
		$description=$this->input->post('description');
		$date = date('Y/m/d H:i a');
		// file uploading start here
		$config['allowed_types']='jpg|png|jpeg';
    $config['upload_path']='./assets/media/about/';
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
    $this->About_m->add_data($data_ins);
   redirect('admin/About_c/index');
  }
  public function edit_about($id)
  {
    $data['edit_data']=$this->About_m->edit_about_data($id);
    // echo "<pre>";
    // print_r($data['edit_data']);
    // exit;
    $this->load->view('admin/edit_about_data_v',$data);
      
  }
  public function delete_about($id)
  {
    $this->About_m->delete_about_data($id);
       redirect('admin/About_c/index');

  }
 public function about_edit_do()
  {
    $heading=$this->input->post('heading');
    $description=$this->input->post('description');
    $id=$this->input->post('about_id');
    $data_ins = array('heading'=>$heading,
                          'description'=>$description
                        );
    $this->About_m->about_edit_update($id,$data_ins);
    redirect('admin/About_c/index');
  }
  public function block($status, $id)
  {
    $this->db->set('active', $status);
      $this->db->where('about_id', $id);
      $this->db->update('about');
      redirect('admin/About_c/index');
  }
}

?>