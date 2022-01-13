<?php
class Food_menu_c extends CI_Controller
{
	
	function __construct()
	{
	   parent::__construct();
       $this->load->model('admin/Add_category_m');
	}
	public function index()
  {    
    $data['show'] = $this->Add_category_m->show_category();

    $this->load->view('admin/Food_menu_v',$data);
  }
  public function item($id)
  { 
        
    $data['show'] = $this->Add_category_m->show_category();
    $data['specific']=$this->Add_category_m->show_specific($id);
    $data['specific_id']=$this->Add_category_m->show_specific_id($id);
    // echo "<pre>";
    // print_r($data['specific_id']);
    // exit;
    $this->load->view('admin/item_v',$data);
  }
}
?>