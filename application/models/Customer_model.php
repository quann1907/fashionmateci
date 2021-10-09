<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function getCustomer()
	{
		return $this->db->get('tbl_customer');
	}

	public function count_customer()
	{
		$query = $this->db->get('tbl_customer')->result_array();
		return count($query);
	}

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */