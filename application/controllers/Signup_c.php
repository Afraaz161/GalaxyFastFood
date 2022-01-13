<?php

class Signup_c extends CI_Controller
{
	function __construct()
	{
	    parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Footer_m');
		$this->load->model('CMS_m');
		$this->load->model('Signup_m');
		$this->load->library('form_validation');
    }
	public function index()
	{
		$data['footers_item']=$this->Footer_m->show_itemtype();
		$data['footer_img']=$this->Footer_m->show_gallary_img();
		$data['contact']=$this->CMS_m->show_contact();
		$this->load->view('signup_new_v',$data);
	}
    public function add_do()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_message('is_unique','Email address already exist, please try another');
		$this->form_validation->set_rules('user_name','User Name','required|callback_alpha_space');
		$this->form_validation->set_rules('user_phone','User Phone','required|callback_phone_special_charcter');
		//$this->form_validation->set_rules('pic','User Pic','required');
		$this->form_validation->set_rules('user_email','User Email','required|valid_email|is_unique[accounts.email]');
		$this->form_validation->set_rules('user_password','User Password','required|callback_alpha_num_special|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('user_con-password','User Password again','required|callback_alpha_num_special|min_length[8]|max_length[20]');
		$this->form_validation->set_rules('user_address','User Address','required|callback_alpha_num_space_special');

    

		if($this->form_validation->run() == TRUE)
		{

           
           $name=$this->input->post('user_name');
		    $phone =$this->input->post('user_phone');

		    // file uploads starts here
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['upload_path'] = './assets/media/accounts/';
            $this->load->library('upload', $config);
            $this->upload->do_upload('pic');

            $file_name = $this->upload->data();
            $name_of_file =  $file_name['file_name'];
            // uploading file closed


	        $email =	$this->input->post('user_email');
	        $password =  $this->input->post('user_password');
	        $confirm_password=$this->input->post('user_con-password'); 
	        $address = $this->input->post('user_address');

	        if($password == $confirm_password)
	        {
	
		        $data_ins = array('name'=>$name,
	                        'phone'=>$phone,
	                        'pic'=>$name_of_file,
	                        'email'=>$email,
	                        'password'=>$password,
	                        'active'=>1,
	                        'address'=>$address);
		
                $this->Signup_m->add_do($data_ins);
                //$this->session->set_flashdata('msg','Your account has been created successfylly.');
                $_SESSION['alert_msg'][]  = array('notify' => 'success', 'msg' => 'Signup successfylly done' );
                //$_SESSION['alert_msg'][]  = array('notify' => 'error',  'msg' => 'successfylly done' );
               // $_SESSION['alert_msg'][]  = array('notify' => 'warning', 'msg' => 'successfylly done' );
                redirect('Signin_c/index');
            }
            else 
            {
              redirect('Signup_c/index');
            }
		}
		else
		{
			$data['footers_item']=$this->Footer_m->show_itemtype();
		$data['footer_img']=$this->Footer_m->show_gallary_img();
		$data['contact']=$this->CMS_m->show_contact();
			$this->load->view('signup_new_v',$data);
		}
   }
   public function alpha_space($str)
   {
	   	if(! preg_match("/^([a-zA-Z ])+$/i",$str))
	   	{
	   		$this->form_validation->set_message('alpha_space', 'the %s field can only contains alphabets
	   			and spaces');
	   		return false;
	   	}
	   	else
	   	{
	      return true;
	   	}
    }
    public function alpha_num_special($str)
    {
      if(! preg_match("/^([a-zA-Z0-9.,\/%*()!@#$%^&* ])+$/i",$str) )
      {
       $this->form_validation->set_message('alpha_num_special','the %s can only contains alphabets, numbers and spaces.');
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
