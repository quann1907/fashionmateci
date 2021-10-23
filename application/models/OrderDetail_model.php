<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderDetail_model extends CI_Model {

	public function insertOrderDetail($data)
	{
		return $this->db->insert('tbl_orderdetail', $data);
	}

}

/* End of file OrderDetail_model.php */
/* Location: ./application/models/OrderDetail_model.php */