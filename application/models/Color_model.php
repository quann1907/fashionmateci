<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Color_model extends CI_Model {

	public function getColor()
	{
		return $this->db->get('tbl_color')->result_array();
	}

	public function addColor($data)
	{
		$this->db->insert('tbl_color', $data);
	}

	public function editColor($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_color', $data);
	}

	public function getColorByID($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_color')->result_array();
	}

	public function removeColor($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_color');
	}

}

/* End of file Color_model.php */
/* Location: ./application/models/Color_model.php */