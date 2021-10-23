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

	public function getColorProduct($id)
	{
		$this->db->select('tbl_color.id, tbl_color.name, tbl_color.color');
		$this->db->join('tbl_productdetail','tbl_productdetail.idColor = tbl_color.id' );
		$this->db->where('tbl_productdetail.idProduct', $id);
		$this->db->where('tbl_productdetail.idSize', 1);
		return $this->db->get('tbl_color')->result_array();
	}

	public function getNameColor($id)
	{
		$this->db->select('name');
		$this->db->where('id', $id);
		return $this->db->get('tbl_color')->row();
	}

}

/* End of file Color_model.php */
/* Location: ./application/models/Color_model.php */