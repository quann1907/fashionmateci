<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

	function load_order(){
		$this->db->select('tbl_order.id, fullname, orderDate, money, estimateDeliveryDate, tbl_order.note, tbl_order.status');
		$this->db->from('tbl_order');
		$this->db->join('tbl_customer','tbl_order.idCustomer = tbl_customer.id','inner');
		return $this->db->get()->result_array();
	}

	function change_status($id, $status){
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
}

/* End of file Order.php */
/* Location: ./application/models/Order.php */