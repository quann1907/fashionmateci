<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetail_model extends CI_Model {

	public function getProductDetail()
	{
		$this->db->select('tbl_productdetail.id, tbl_product.name as nameProduct, tbl_category.name as nameCategory, tbl_color.name as color, tbl_size.size as size, tbl_product.price as price, tbl_productdetail.quantity as quantity, tbl_productdetail.status as status, tbl_productdetail.note as note');
		$this->db->join('tbl_color', 'tbl_productdetail.idColor = tbl_color.id');
		$this->db->join('tbl_size', 'tbl_productdetail.idSize = tbl_size.id');
		$this->db->join('tbl_product', 'tbl_productdetail.idProduct = tbl_product.id');
		$this->db->join('tbl_category', 'tbl_category.id = tbl_product.idCategory');
		return $this->db->get('tbl_productdetail')->result_array();
	}

	public function changeStatus($id, $status)
	{
		$this->db->where('id', $id);
		$this->db->set('status', $status);
		$this->db->update('tbl_productdetail');
	}


// Client

	public function getProductDetailByID($id)
	{
		$this->db->where('idProduct', $id);
		return $this->db->get('tbl_productdetail');
	}

	public function getIDProductDetail($productID, $colorID, $sizeID)
	{
		$this->db->select('id');
		$this->db->where('idProduct', $productID);
		$this->db->where('idColor', $colorID);
		$this->db->where('idSize', $sizeID);
		return $this->db->get('tbl_productdetail')->row();
	}

}

/* End of file ProductDetail_model.php */
/* Location: ./application/models/ProductDetail_model.php */