<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

	function getOrder(){
		$this->db->select('tbl_order.id, fullname, orderDate, money, estimateDeliveryDate, tbl_order.note, tbl_order.status');
		$this->db->from('tbl_order');
		$this->db->join('tbl_customer','tbl_order.idCustomer = tbl_customer.id','inner');
		return $this->db->get()->result_array();
	}

	function changeStatus($id, $status){
		$this->db->set('status', $status);
		$this->db->where('id', $id);
		$this->db->update('tbl_order');
	}

	public function count_pending_order()
	{
		$this->db->where('status', 0);
		$query = $this->db->get('tbl_order')->result_array();
		return count($query);
	}

	public function insertOrder($data)
	{
		$this->db->insert('tbl_order', $data);
		return $this->db->insert_id();
	}

	public function getOrderByID($id)
	{
		$this->db->select('tbl_order.id, fullname, orderDate, money, estimateDeliveryDate, tbl_order.note, tbl_order.status');
		$this->db->from('tbl_order');
		$this->db->join('tbl_customer','tbl_order.idCustomer = tbl_customer.id','inner');
		$this->db->where('tbl_order.id', $id);
		return $this->db->get()->result_array();
	}

	public function history($idCustomer, $idOrder)
	{
		$this->db->where('idCustomer', $idCustomer);
		$this->db->where('tbl_order.id', $idOrder);
		$this->db->join('tbl_customer', 'tbl_order.idCustomer = tbl_customer.id');
		return $this->db->get('tbl_order')->result_array();
	}

	public function getOrderID($idCustomer)
	{
		$this->db->select('id');
		$this->db->where('idCustomer', $idCustomer);
		return $this->db->get('tbl_order')->result_array();
	}
}
/* End of file Order.php */
/* Location: ./application/models/Order.php */