<?php
    
    /**
     * 
     */
    class Contact_c extends CI_Controller
    {
    	
    	function __construct()
    	{
    	 parent::__construct();
    	// $this->load->model('admin/Contact_m');
    	}
    	public function index()
    	{
    		$this->load->view('admin/contact_v');
    	}
    	
    }
   ?>