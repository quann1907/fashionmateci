<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Category_model');
		$this->load->model('Customer_model');
		$this->load->model('Order_model');
		$this->load->model('OrderDetail_model');
	}

	public function index()
	{
		
	}

	public function loadEditCustomer($id)
	{
		$data['customer'] = $this->Customer_model->getCustomerByID($id);
		$this->load->view('frontend/profile', $data);
	}

	public function editCustomer()
	{
		$data = $this->input->post();
		$this->Customer_model->editCustomer($data['id'], $data);
		redirect('','refresh');
	}
}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */