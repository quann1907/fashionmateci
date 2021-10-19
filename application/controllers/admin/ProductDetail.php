<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductDetail_model');
	}

	public function index()
	{
		$data['productDetail'] = $this->ProductDetail_model->getProductDetail();
		$this->load->view('backend/product-detail', $data);
	}

	public function changeStatus($id, $status)
	{
		$this->ProductDetail_model->changeStatus($id, $status);
		redirect('admin/ProductDetail','refresh');
	}

}

/* End of file ProductDetail.php */
/* Location: ./application/controllers/admin/ProductDetail.php */