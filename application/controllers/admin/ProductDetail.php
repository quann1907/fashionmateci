<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['productDetail'] = $this->Product_model->getProductDetail();
		$this->load->view('backend/product-detail', $data);
	}

}

/* End of file ProductDetail.php */
/* Location: ./application/controllers/admin/ProductDetail.php */