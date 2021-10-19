<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function getCustomer()
	{
		return $this->db->get('tbl_customer')->result_array();
	}

	public function count_customer()
	{
		$query = $this->db->get('tbl_customer')->result_array();
		return count($query);
	}

	public function getCustomerByID($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_customer')->result_array();
	}

	public function addCustomer($data)
	{
		$this->db->insert('tbl_customer', $data);
	}

	public function editCustomer($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_customer', $data);
	}

	public function changeStatus($id, $status)
	{
		$this->db->where('id', $id);
		$this->db->set('status', $status);
		$this->db->update('tbl_customer');
	}

}

/* End of file Customer_model.php */
/* Location: ./application/models/Customer_model.php */