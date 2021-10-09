<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Product_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['product'] = $this->Product_model->getNewProduct();
		$this->load->view('frontend/home.php', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */