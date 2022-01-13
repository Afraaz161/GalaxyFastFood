<?php
 class Announcement_c extends CI_Controller
 {
    public function __construct()
    {
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('url','form');
      $this->load->library('form_validation');
      $this->load->model('admin/Announcement_m');
      $this->session->userdata('validity');

    }
    public function index()
    {
      
      $data['announcemt']=$this->Announcement_m->show_data_announcement();//$num
      $data['accounts']=$this->Announcement_m->allaccounts();
      $this->load->view('admin/Announcement_v',$data);
    }
    public function add_data_announcement()
    {
      // $this->load->library('form_validation');
      // $this->form_validation->set_rules('heading','Heading','required|trim|alpha_numeric_spaces');
      // $this->form_validation->set_rules('description','Description','required|trim|alpha_numeric_spaces');
      // $this->form_validation->set_rules('pic','Pic','required');
      // if($this->form_validation->run() == false)
      // {
      //  $this->load->view('admin/Announcement_v',$data);
      // }
      // else
      // {

      // }

      $aid = $this->input->post('stid');
      $heading = $this->input->post('heading');
      $description = $this->input->post('description');
      $date = date('d/m/Y h:i a');

      // UPLOADING FILE STARTS HERE
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['upload_path'] = './assets/media/announcement/';
      $this->load->library('upload', $config);
      $this->upload->do_upload('pic');
      $file_name = $this->upload->data();
      $name_of_file =  $file_name['file_name'];

      // uploaidng file ends

      $data_ins =  array(
                         'heading' =>$heading,
                         'accounts_id' => $aid,
                         'description'=>$description,
                         'add_on'=>$date,
                         'pic'=>$name_of_file ,
                         'active'=>1 );
      
      $this->Announcement_m->add_data_announcement($data_ins);
      //  echo "<pre>";
      // print_r($data_ins);
      // exit;
      redirect('admin/Announcement_c');
    }
    public function add_data_news()
    {
     
      $heading = $this->input->post('heading');
      $description = $this->input->post('description');
      $date = date('d/m/Y h:i a');
      $data_ins =  array(
                         'heading' =>$heading,
                         'description'=>$description,
                         'add_on'=>$date,
                         'active'=>1 );

      $this->Announcement_m->add_data_news($data_ins);
      redirect('admin/Announcement_c');
    }
    public function delete($id)
    {
       $this->Announcement_m->delete($id);
       redirect('admin/Announcement_c');
    }
   
    public function edit($id) //   $id for announcement_id
    {
       
      $data['announcement_edit']=$this->Announcement_m->edit($id);
      $this->load->view('admin/announcemt_edit',$data);
    }
    public function announcement_edit_do()
    {
         
      $heading=$this->input->post('heading');
      $description=$this->input->post('description');
      $id=$this->input->post('announcement_id');
      $data_ins = array('heading'=>$heading,
                        'description'=>$description
                       );
       
       $this->Announcement_m->update_announcement($id,$data_ins);
       
      redirect('admin/Announcement_c');
    }
    public function block($status, $id)
    {
      $this->db->set('active',$status);
      $this->db->where('announcement_id',$id);
      $this->db->update('announcement');
      redirect('admin/Announcement_c/index');
    }
 }
?>