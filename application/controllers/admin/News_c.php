<?php

/**
 * 
 */
class News_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
    $this->load->model('admin/News_m');
    $this->session->userdata('validity');
     $this->load->library('session');
      $this->load->helper('url','form');
	}
	public function index()
	{
		$data['show_accounts_holder']= $this->News_m->accounts_holder();
    $data['news']=$this->News_m->show_news_data();
    $this->load->view('admin/news_v',$data);
	}
	public function add_data_news()
    {
       // $this->load->library('form_validation');
      // $this->form_validation->set_rules('heading','Heading','required|trim|alpha_numeric_spaces');
      // $this->form_validation->set_rules('description','Description','required|trim|alpha_numeric_spaces');
      // $this->form_validation->set_rules('pic','Pic','required');
      // if($this->form_validation->run() == false)
      // {
      //  $this->load->view('admin/news_v',$data);
      // }
      // else
      // {

      // }
   
      $num = $this->input->post('stid');
      $heading = $this->input->post('heading');
      $description = $this->input->post('description');
      $date = date('d/m/Y h:i a');
       // up loading file starts here

       $config['allowed_types']='jpg|png|jpeg';
       $config['upload_path']='./assets/media/news/';
       $this->load->library('upload',$config);
       $this->upload->do_upload('pic');
       $file_name = $this->upload->data();
       $name_of_files =$file_name['file_name'];


      // uploading file closed here
      $data_ins =  array(
                         'heading' =>$heading,
                         'description'=>$description,
                         'pic'=>$name_of_files,
                         'add_on'=>$date,
                         'active'=>1,
                         'accounts_id'=>$num );

      $this->News_m->add_data_news($data_ins);
      redirect('admin/News_c');
    }
    public function edit_news($id)
    {
    	$data['news_edit']=$this->News_m->edit_news($id);
    	$this->load->view('admin/edit_news',$data);
    }
    public function news_edit_do()
    {
    	$heading=$this->input->post('heading');
    	$description=$this->input->post('description');
    	$id=$this->input->post('news_id');
      $data_ins = array('heading'=>$heading,
                          'description'=>$description
                        );
      $this->News_m->news_edit_update($id,$data_ins);
    	redirect('admin/News_c');
    }
	  public function delete_news($id)
	  {
		 $this->News_m->delete_news($id);
     redirect('admin/News_c');
		}
    public function block($status,$id)
    {
      $this->db->set('active',$status);
      $this->db->where('news_id',$id);
      $this->db->update('news');
      redirect('admin/News_c/index');
    }
}
?>
