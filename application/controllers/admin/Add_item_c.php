<?php

class Add_item_c extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Add_item_m');
        $this->load->library('form_validation');
        $this->load->helper('form','url');
	}
	public function index($id)
	{   
		 $data['item_type_id_my1'] = $id;
		$data['cat_show'] = $this->Add_item_m->show_category();
        $data['show_item'] = $this->Add_item_m->show();
        // echo "<pre>";
        // print_r($data['cat_show']);
        // exit;
		$this->load->view('admin/add_item_v', $data);
	}
	public function add_item()
	{  
        // $this->load->library('form_validation');
        // $this->form_validation->set_rules('item_name','Item Name','required|trim|alpha_numeric_spaces');
        // $this->form_validation->set_rules('item_price','Item Price','required|is_natural_no_zero');
        // $this->form_validation->set_rules('item_description','Item Description','required|alpha|trim');
        // $this->form_validation->set_rules('pic','Item Pic','required');
        // if($this->form_validation->run() == false)
        // {
        //   $this->load->view('admin/add_item_v',$data);
        // }
        // else
        // {

        // }
		$id= $this->input->post('item_id');
		$name = $this->input->post('item_name');
        $price= $this->input->post('item_price');
        $description = $this->input->post('item_description');
        // file uploads starts here 
        $config['allowed_types']='jpg|JPG|png|PNG|jpeg|JPEG';
        $config['upload_path']='./assets/media/items';
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $this->upload->do_upload('pic');
        $file_name=$this->upload->data();
        $name_of_file = $file_name['file_name'];
        // var_dump($name_of_file);
        // exit;
        $date=date('d/m/Y h:i a');
        $data_ins = array(
        	'item_type_id'=>$id,
        	'name'=>$name,
        	'pic'=>$name_of_file,
        	'price'=>$price,
        	'description'=>$description,
        	'add_on'=>$date,
        	'active'=>1,
        	'feature'=>0
                   );
        $this->Add_item_m->add_item($data_ins);
        redirect('admin/Food_menu_c');
	}
}
?>