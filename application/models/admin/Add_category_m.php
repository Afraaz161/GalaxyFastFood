<?php



class Add_category_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

		public function add_do($data)
	{
		$this->db->insert('item_type', $data);
	}
	public function show_category()
	{
        $this->db->select('*');
        $this->db->from('item_type');
        return $this->db->get()->result();
	}
	public function show_specific($id)
	{
		$this->db->select('*');
		$this->db->from('item_type');
		$this->db->where('item_type_id',$id);
		return $this->db->get()->result();
	}
	public function show_specific_id($id)
	{
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('item_type_id',$id);
		return $this->db->get()->result();
	}
	public function category_del($id)
	{
		$this->db->where('item_type_id',$id);
		$this->db->delete('item_type');
	}
	
	public function update_name($num,$data)
	{
		$this->db->where('item_type_id', $num);
		$this->db->update('item_type', $data);
	}
	public function update_icon($a,$datas)
	{
      $this->db->where('item_type_id',$a);
      $this->db->update('item_type',$datas);
	}
	public function update_banner($b,$datass)
	{
		$this->db->where('item_type_id',$b);
		$this->db->update('item_type',$datass);

	}


}



?>
