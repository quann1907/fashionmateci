<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function getCategory()
	{
		return $this->db->get('tbl_category')->result_array();
	}

	public function getCategoryByID($id)
	{
		$this->db->where('id', $id);
		$row = $this->db->get('tbl_category')->row_array();
		return $row['name'];
	}

	public function getCategoryMenu($parentid)
	{
		$this->db->where('parentID', $parentid);
		$this->db->where('status', 1);
		$this->db->order_by('name', 'desc');
		return $this->db->get('tbl_category')->result_array();
	}
}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */