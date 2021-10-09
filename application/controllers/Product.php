<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Category_model');
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['product'] = $this->Product_model->getProductClient();
		$this->load->view('frontend/product', $data);
	}

	// public function getProductByType($type)
	// {
	// 	$data['product'] = $this->Product_model->getProductByType($type);
	// 	redirect('','refresh', $data);
	// }
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */