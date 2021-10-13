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

	public function changeStatus($id, $status)
	{
		$this->db->set('status', $status);
		$this->db->update('tbl_product');
		$this->db->where('id', $id);
	}

	public function numberOfPage($productPerPage)
	{
		$this->db->select('*');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$numberOfProduct = count($this->db->get('tbl_product')->result_array());
		$numberOfPage = ceil($numberOfProduct/$productPerPage);
		return $numberOfPage;
	}

	public function productByPage($page, $productPerPage)
	{
		$this->db->select('tbl_product.name as a, tbl_category.name as b, image, price');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$offset = ($page-1)*$productPerPage;
		return $this->db->get('tbl_product', $productPerPage, $offset)->result_array();
	}

	public function getProductDetail()
	{
		$this->db->select('tbl_product.name as nameProduct, tbl_category.name as nameCategory, tbl_color.name as color, tbl_size.size as size, tbl_product.price as price, tbl_productdetail.quantity as quantity, tbl_productdetail.status as status, tbl_productdetail.note as note');
		$this->db->join('tbl_color', 'tbl_productdetail.idColor = tbl_color.id');
		$this->db->join('tbl_size', 'tbl_productdetail.idSize = tbl_size.id');
		$this->db->join('tbl_product', 'tbl_productdetail.idProduct = tbl_product.id');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		return $this->db->get('tbl_productdetail')->result_array();
	}
}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */