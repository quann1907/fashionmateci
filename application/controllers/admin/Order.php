<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Order_model');
	}

	public function index()
	{
		$data['order'] = $this->Order_model->getOrder();
		$this->load->view('backend/order', $data);
	}

	public function changeStatus($id, $status)
	{
		$this->Order_model->changeStatus($id, $status);
		return redirect('admin/order');
	}
}

/* End of file Order.php */
/* Location: ./application/controllers/admin/Order.php */