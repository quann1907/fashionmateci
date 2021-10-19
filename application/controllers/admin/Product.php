<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
	}

	public function index()
	{
		$data['product'] = $this->Product_model->getProductAdmin();
		$this->load->view('backend/product', $data);
	}

	public function changeStatus($id, $status)
	{
		$this->Product_model->changeStatus($id, $status);
		redirect('admin/Product','refresh');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/admin/Product.php */