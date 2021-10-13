<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Color_model extends CI_Model {

	public function getColor()
	{
		return $this->db->get('tbl_color')->result_array();
	}

}

/* End of file Color_model.php */
/* Location: ./application/models/Color_model.php */