<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size_model extends CI_Model {

	public function getSize()
	{
		return $this->db->get('tbl_size')->result_array();
	}

	public function addSize($data)
	{
		$this->db->insert('tbl_size', $data);
	}

	public function getSizeByID($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_size')->result_array();
	}

	public function editSize($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_size', $data);
	}

	public function removeSize($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_size');
	}

}

/* End of file Size_model.php */
/* Location: ./application/models/Size_model.php */