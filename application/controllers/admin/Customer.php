<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
	}

	public function index()
	{
		$data['customer'] = $this->Customer_model->getCustomer();
		$this->load->view('backend/customer', $data);
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/admin/Customer.php */