<?php



class Contact_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function add_do($data)
	{
		$this->db->insert('accounts', $data);
	}
}

?>