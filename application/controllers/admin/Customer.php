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

	public function loadAddCustomer()
	{
		$this->load->view('backend/add-customer');
	}

	public function addCustomer()
	{
		$data = $this->input->post();
		$data['password'] = '000000';
		$data['dateCreate'] = date('Y-m-d');
		$data['status'] = 1;
		$this->Customer_model->addCustomer($data);
		redirect('admin/Customer','refresh');
	}

	public function loadEditCustomer($id)
	{
		$data['customer'] = $this->Customer_model->getCustomerByID($id);
		$this->load->view('backend/edit-customer', $data);
	}

	public function editCustomer()
	{
		$data = $this->input->post();
		$this->Customer_model->editCustomer($data['id'], $data);
		redirect('admin/Customer','refresh');
	}

	public function changeStatus($id, $status)
	{
		$this->Customer_model->changeStatus($id, $status);
		redirect('admin/Customer','refresh');
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/admin/Customer.php */