<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	private $productPerPage;

	public function __construct()
	{
		parent::__construct();
		$this->productPerPage = 6;
		$this->load->model('Information_model');
		$this->load->model('Category_model');
		$this->load->model('Product_model');
	}

	public function index()
	{
		$this->page(1);
	}

	public function page($page)
	{
		$offset = ($page-1)*$this->productPerPage;
		$data['product'] = $this->Product_model->productByPage($page, $this->productPerPage);
		$data['numberOfPage'] = $this->Product_model->numberOfPage($this->productPerPage);
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