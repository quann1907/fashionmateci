<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information_model extends CI_Model {

	public function getInfoByType($type)
	{
		$this->db->select('content');
		$this->db->where('type', $type);
		$this->db->where('status', 1);
		$data = $this->db->get('tbl_infomation')->result_array();
		foreach ($data as $value) {
		 	return $value['content'];
		} 
	}

}

/* End of file Infomation_model.php */
/* Location: ./application/models/Infomation_model.php */