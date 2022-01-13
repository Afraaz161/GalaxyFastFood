 <?php
   class Sign_out_c extends CI_Controller
   {
   	public function __construct()
   	{
   		parent::__construct();
   		$this->load->helper('url');
         $this->load->library('session');
   	}
   	public function index()
   	{
         $this->session->unset_userdata('validity');
         $this->session->sess_destroy();
   	  redirect('Home_c');
   	}

   }
?>