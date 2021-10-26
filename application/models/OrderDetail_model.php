<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderDetail_model extends CI_Model {

	/*------------------------------Admin------------------------------*/

	public function getOrderDetail($idOrder)
	{
		$this->db->select('tbl_product.name as name, tbl_product.image as image, tbl_product.price, tbl_product.sale, tbl_color.name as color, tbl_size.size, tbl_orderdetail.quantity');
		$this->db->where('tbl_orderdetail.idOrder', $idOrder);
		$this->db->join('tbl_productdetail', 'tbl_orderdetail.idProductDetail = tbl_productdetail.id');
		$this->db->join('tbl_product', 'tbl_productdetail.idProduct = tbl_product.id');
		$this->db->join('tbl_color', 'tbl_productdetail.idColor = tbl_color.id');
		$this->db->join('tbl_size', 'tbl_productdetail.idSize = tbl_size.id');
		return $this->db->get('tbl_orderdetail')->result_array();
	}


	/*------------------------------Client------------------------------*/

	public function insertOrderDetail($data)
	{
		return $this->db->insert('tbl_orderdetail', $data);
	}

}

/* End of file OrderDetail_model.php */
/* Location: ./application/models/OrderDetail_model.php */