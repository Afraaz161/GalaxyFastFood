<?php

class CMS_m extends CI_Model
{
	
	public function __construct()
	{
	  parent::__construct();
	}
	public function add_data($data_ins)
	{
		$this->db->insert('contact',$data_ins);

	}
}
?>