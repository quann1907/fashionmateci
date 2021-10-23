<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function getCategory()
	{
		return $this->db->get('tbl_category')->result_array();
	}

	public function getCategoryByID($id)
	{
		$this->db->select('tbl1.id as id, tbl1.name as name, tbl1.level as level, tbl1.status as status, tbl1.dateCreate as dateCreate, tbl1.parentID as parentID, tbl1.note as note, tbl2.name as parentName');
		$this->db->where('tbl1.id', $id);
		$this->db->from('tbl_category as tbl1');
		$this->db->join('tbl_category as tbl2', 'tbl1.parentID = tbl2.id', 'left');
		return $this->db->get()->result_array();
	}

	public function getCategoryMenu($parentid)
	{
		$this->db->where('parentID', $parentid);
		$this->db->where('status', 1);
		$this->db->order_by('name', 'desc');
		return $this->db->get('tbl_category')->result_array();
	}

	public function addCategory($data)
	{
		return $this->db->insert('tbl_category', $data);
	}

	public function editCategory($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tbl_category', $data);
	}

	public function changeStatus($id, $status, $modifyBy)
	{
		$this->db->where('id', $id);
		$this->db->set('status', $status);
		$this->db->set('modifyBy', $modifyBy);
		return $this->db->update('tbl_category');
	}

	public function getCategoryAdmin()
	{
		$this->db->select('tbl1.id as childID, tbl1.name as childName, tbl1.status as status, tbl1.dateCreate as dateCreate, tbl2.name as parentName');
		$this->db->from('tbl_category as tbl1');
		$this->db->join('tbl_category as tbl2', 'tbl1.parentID = tbl2.id', 'left');
		return $this->db->get()->result_array();
	}

}

/* End of file Category_model.php */
/* Location: ./application/models/Category_model.php */