<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

	/*------------------------------Admin------------------------------*/

	public function countProductAdmin()
	{
		return count($this->db->get('tbl_product')->result_array());
	}

	public function getProductAdmin()
	{
		return $this->db->get('tbl_product')->result_array();
	}

	// public function getProductByType($type)
	// {
	// 	$this->db->select('tbl_product.name as a, tbl_category.name as b, image, price');
	// 	$this->db->where('idCategory', $type);
	// 	$this->db->where('tbl_product.status', 1);
	// 	$this->db->where('tbl_category.status', 1);
	// 	$this->db->join('tbl_category', 'tbl_category.id = idCategory');
	// 	$this->db->order_by('price', 'asc');
	// 	return $this->db->get('tbl_product')->result_array();
	// }

	public function addProduct($data)
	{
		return $this->db->insert('tbl_product', $data);
	}

	public function changeStatus($id, $status)
	{
		$this->db->where('tbl_product.id', $id);
		$this->db->set('tbl_product.status', $status);
		$this->db->update('tbl_product');

		$this->db->where('tbl_productdetail.idProduct', $id);
		$this->db->set('tbl_productdetail.status', $status);
		$this->db->update('tbl_productdetail');
	}

	public function getProductDetail()
	{
		$this->db->select('tbl_productdetail.id, tbl_product.name as nameProduct, tbl_category.name as nameCategory, tbl_color.name as color, tbl_size.size as size, tbl_product.price as price, tbl_productdetail.quantity as quantity, tbl_productdetail.status as status, tbl_productdetail.note as note');
		$this->db->join('tbl_color', 'tbl_productdetail.idColor = tbl_color.id');
		$this->db->join('tbl_size', 'tbl_productdetail.idSize = tbl_size.id');
		$this->db->join('tbl_product', 'tbl_productdetail.idProduct = tbl_product.id');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		return $this->db->get('tbl_productdetail')->result_array();
	}

	/*------------------------------Client------------------------------*/

	public function getNewProduct()
	{
		$quantity = 6;
		$this->db->select('tbl_product.id, tbl_product.name as a, tbl_category.name as b, image, price, sale');
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$this->db->join('tbl_category', 'tbl_category.id = idCategory');
		$this->db->order_by('tbl_product.dateCreate', 'desc');
		return $this->db->get('tbl_product', $quantity)->result_array();
	}

	public function getProductClient()
	{
		$this->db->select('tbl_product.id as id, tbl_product.name as a, tbl_category.name as b, image, price, sale');
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$this->db->join('tbl_category', 'tbl_category.id = idCategory');
		$this->db->order_by('price', 'asc');
		return $this->db->get('tbl_product')->result_array();
	}

	public function getProductByID($id)
	{
		$this->db->select('tbl_product.id, tbl_product.idCategory, tbl_product.name as name, tbl_product.shortDesc, tbl_product.image, tbl_product.price, tbl_product.sale, tbl_product.dateCreate, tbl_product.modifyBy, tbl_product.status, tbl_product.note, tbl_category.name as categoryName');
		$this->db->where('tbl_product.id', $id);
		$this->db->join('tbl_category', 'tbl_product.idCategory = tbl_category.id');
		return $this->db->get('tbl_product')->result_array();
	}

	public function countProduct()
	{
		$this->db->where('status', 1);
		return $this->db->get('tbl_product')->num_rows();
	}

	public function getProductByLimitOffset($limit, $offset)
	{
		$this->db->select('tbl_product.id as id, tbl_product.name as a, tbl_category.name as b, image, price, sale');
		$this->db->where('tbl_product.status', 1);
		$this->db->where('tbl_category.status', 1);
		$this->db->join('tbl_category', 'tbl_category.id = idCategory');
		$this->db->order_by('price', 'asc');
		return $this->db->get('tbl_product', $limit, $offset)->result_array();
	}

	public function countProductByCategory($idCategory)
	{
		$this->db->where('status', 1);
		$this->db->where('idCategory', $idCategory);
		return $this->db->get('tbl_product')->num_rows();
	}

	public function getProductByCategory($idCategory, $limit, $offset)
	{
		$this->db->select('tbl_product.id, tbl_product.name as a, tbl_category.name as b, image, price, sale');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		$this->db->where('tbl_product.idCategory', $idCategory);
		$this->db->where('tbl_product.status', 1);
		$this->db->order_by('price', 'asc');
		return $this->db->get('tbl_product', $limit, $offset)->result_array();
	}

	public function countProductOnSale()
	{
		$this->db->where('status', 1);
		$this->db->where('sale !=', 0);
		return $this->db->get('tbl_product')->num_rows();
	}

	public function getSpecialDeal($limit, $offset)
	{
		$this->db->select('tbl_product.id, tbl_product.name as a, tbl_category.name as b, image, price, sale');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		$this->db->where('sale !=', 0);
		$this->db->where('tbl_product.status', 1);
		$this->db->order_by('sale', 'asc');
		return $this->db->get('tbl_product', $limit, $offset)->result_array();
	}

	public function countProductSearch($name)
	{
		$this->db->like('name', $name);
		$this->db->where('status', 1);
		return $this->db->get('tbl_product')->num_rows();
	}

	public function searchProduct($name, $limit, $offset)
	{
		$this->db->like('tbl_product.name', $name);
		$this->db->select('tbl_product.id, tbl_product.name as a, tbl_category.name as b, image, price, sale');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		$this->db->where('tbl_product.status', 1);
		$this->db->order_by('price', 'asc');
		return $this->db->get('tbl_product', $limit, $offset)->result_array();
	}
}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */