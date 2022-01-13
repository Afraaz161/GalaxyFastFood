<?php

class Add_category extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('session');
	   $this->load->model('admin/Add_category_m');
	  $num = $this->session->userdata('validity');
      $this->load->library('form_validation');
      $this->load->helper('form','url');
	}

	
	public function index()
	{  
	  $num = $this->session->userdata('validity');
	  $data['show'] = $this->Add_category_m->show_category($num);
      $this->load->view('admin/add_category',$data);
	}
    public function add_do()
    {
         //$this->load->library('form_validation');
         //$this->form_validation->set_rules('item_name','Item Name','required|alpha');
        // $this->form_validation->set_rules('pic','Item Icon','required');
        // $this->form_validation->set_rules('pics','Item Banner','required');
        // if($this->form_validation->run() == false)
        // {
        //      $this->load->view('admin/add_category',$data);
        // }
        // else
        // {

        // }
        $name = $this->input->post('item_name');
		$date= date('d/m/Y h;i a');
		// file or pic uploading starts here
		 $config['allowed_types'] = 'jpg|JPG|png|PNG|jpeg|JPEG';
        $config['upload_path'] = './assets/media/icons';
        $this->load->library('upload', $config);
        $this->upload->do_upload('pic');
        $file_name = $this->upload->data();
        $name_of_file =  $file_name['file_name'];

        //
        // file uploading or file closed here
         $config['allowed_types'] = 'jpg|JPG|png|PNG|jpeg|JPEG';
        $config['upload_path'] = './assets/media/banner';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('pics');
        $file_name = $this->upload->data();
        $name_of_file_banner =  $file_name['file_name'];
        // file uploads  closed here
       

    	$data_ins = array(
    		'name'=>$name,
    		'pic'=>$name_of_file,
    		'banner'=>$name_of_file_banner, 
    		'active'=>1,
    		'add_on'=>$date
    	);

		   $this->Add_category_m->add_do($data_ins);
		   // echo "<pre>";
     //     print_r($name_of_file);
     //     exit;

		
    	redirect('admin/Food_menu_c/index');

	}
	public function category_del($id)
	{
		$this->Add_category_m->category_del($id);
		redirect('admin/Add_category/index');
	}

	public function category_edit($id)

	{
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('item_name','Item Name','required|alpha|trim');
        // if($this->form_validation->run() == false)
        // {
        //   $this->load->view('admin/category_edit',$data);
        // }
        // else
        // {

        // }
		$data['show']=$this->Add_category_m->show_specific($id);
		//var_dump($data['show']);
		//exit;
       $this->load->view('admin/category_edit',$data);
	}
	public function category_edit_do()
	 {
         $name=$this->input->post('item_name');
         $id=$this->input->post('itemtypeid');
         // echo "<pre>";
         // print_r($this->input);
         // exit();
         // file or pic uploading starts here
         $temp = array();
		 $config1['allowed_types'] = 'jpg|JPG|png|PNG|jpeg|JPEG';
        $config1['upload_path'] = './assets/media/icons';
        $this->load->library('upload');
        $this->upload->initialize($config1);
        $this->upload->do_upload('pic');
        $file_name1 = $this->upload->data();
        $name_of_file =  $file_name1['file_name'];

        //
        // file uploading or file closed here
         $config2['allowed_types'] = 'jpg|JPG|png|PNG|jpeg|JPEG';
        $config2['upload_path'] = './assets/media/banner';
        // $this->load->library('upload', $config2);
        $this->upload->initialize($config2);
        $this->upload->do_upload('pics');
        $file_name2 = $this->upload->data();
        $name_of_file_banner =  $file_name2['file_name'];
        // file uploads  closed here
         //echo $id;
         $data = array('name'=>$name);
         $this->Add_category_m->update_name($id,$data);
         $datas = array('pic'=>$name_of_file);
         $this->Add_category_m->update_icon($id,$datas);
         $datass = array('banner'=>$name_of_file_banner);
         $this->Add_category_m->update_banner($id,$datass);


         
        
  //       echo "<pre>";
		// var_dump($name);
		// exit;

        redirect('admin/Add_category/index');
	}
  public function block($status,$id)
  {
   $this->db->set('active',$status);
   $this->db->where('item_type_id',$id);
   $this->db->update('item_type');
   redirect('admin/Add_category/index');
  }

}
?>