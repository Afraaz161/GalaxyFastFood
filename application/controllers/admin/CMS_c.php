<?php
 

class CMS_c extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('admin/CMS_m');
		$this->load->library('form_validation');
		$this->load->helper('url','form');
	}
	public function index()
	{
		$this->load->view('admin/cms_v');
	}
	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required|callback_alpha_space|trim');
		$this->form_validation->set_rules('phone1',' Phone number','required|callback_phone_special_charcter');
		$this->form_validation->set_rules('phone2',' Phone number','required|callback_phone_special_charcter');
		$this->form_validation->set_rules('mobile1',' Phone number','required|callback_phone_special_charcter');
		$this->form_validation->set_rules('mobile2',' Phone number','required|callback_phone_special_charcter');
		$this->form_validation->set_rules('whatsapp1',' Phone number','required|callback_phone_special_charcter');
		$this->form_validation->set_rules('whatsapp2',' Phone number','required|callback_phone_special_charcter');
		 $this->form_validation->set_rules('address','User Address','required|callback_alpha_num_space_special');
		if($this->form_validation->run()== TRUE)
		{
			$name=$this->input->post('name');
		$phone1=$this->input->post('phone1');
		$phone2=$this->input->post('phone2');
		$mobile1=$this->input->post('mobile1');
		$mobile2=$this->input->post('mobile2');
		$whatsapp1=$this->input->post('whatsapp1');
		$whatsapp2=$this->input->post('whatsapp2');
		$address=$this->input->post('address');

		$data_ins = array('name'=>$name,
	                      'phone_1'=>$phone1,
	                      'phone_2'=>$phone2,
	                      'mobile_1'=>$mobile1,
	                      'mobile_2'=>$mobile2,
	                       'whatsapp_1'=>$whatsapp1,
	                       'whatsapp_2'=>$whatsapp2,
	                        'address'=>$address);
		$this->CMS_m->add_data($data_ins);
		redirect('admin/CMS_c/index');

		}
		else
		{
			$this->load->view('admin/cms_v');

		}
	}
	 public function alpha_space($str)
   {
	   	if(! preg_match("/^([a-zA-Z ])+$/i",$str))
	   	{
	   		$this->form_validation->set_message('alpha_space', 'the %s field can only contains alphabets and spaces');
	   		return false;
	   	}
	   	else
	   	{
	      return true;
	   	}
    }
     public function phone_special_charcter($str)
    {
    	if(! preg_match("/^([0-9 +-])+$/i",$str))
    	{
          $this->form_validation->set_message('phone_special_charcter','the %s can only contains numbers, + and - special signs.');
          return false;
    	}
    	else
    	{
          return true;
    	}
    }
    public function alpha_num_space_special($str)
    {
    	if(! preg_match("/^([a-zA-Z0-9 #,.;])+$/i",$str))
    	{
         $this->form_validation->set_message('alpha_num_space_special','the %s can only contains alphabets,numbers,spaces and special charcter.');
         return false; 
    	}
    	else
    	{
            return true;
    	}
    }
}
?>