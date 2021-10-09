<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['category'] = $this->Category_model->getCategory();
		$this->load->view('backend/category', $data);

	}
}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */