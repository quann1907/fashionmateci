<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	public function getProductClient()
	{
		$this->db->select('tbl_product.name as a, tbl_category.name as b, image, price');
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$this->db->join('tbl_category', 'tbl_category.id = idCategory');
		$this->db->order_by('price', 'asc');
		return $this->db->get('tbl_product')->result_array();
	}

	public function getNewProduct()
	{
		$quantity = 6;
		$this->db->select('tbl_product.name as a, tbl_category.name as b, image, price');
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$this->db->join('tbl_category', 'tbl_category.id = idCategory');
		$this->db->order_by('tbl_product.dateCreate', 'desc');
		return $this->db->get('tbl_product', $quantity)->result_array();
	}

	public function getProductByType($type)
	{
		$this->db->select('tbl_product.name as a, tbl_category.name as b, image, price');
		$this->db->where('idCategory', $type);
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$this->db->join('tbl_category', 'tbl_category.id = idCategory');
		$this->db->order_by('price', 'asc');
		return $this->db->get('tbl_product')->result_array();
	}

	public function count_product()
	{
		$product = count($this->db->get('tbl_product')->result_array());
		return $product;
	}

	public function change_status($id, $status)
	{
		$this->db->set('status', $status);
		$this->db->update('tbl_product');
		$this->db->where('id', $id);
	}
}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */