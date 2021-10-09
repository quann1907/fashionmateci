<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Product_model');
		$this->load->model('User_model');
		$this->load->model('Order_model');
		$this->load->model('Customer_model');
	}

	public function index()
	{
		if ($this->session->userdata('loggedIn')) {
			$data['product'] = $this->Product_model->count_product();
			$data['count_pending_order'] = $this->Order_model->count_pending_order();
			$data['count_customer'] = $this->Customer_model->count_customer();
			$this->load->view('backend/dashboard', $data);	
		}
		else {
			redirect('admin/Signin');
		}
	}

	public function FunctionName($value='')
	{
		// code...
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */