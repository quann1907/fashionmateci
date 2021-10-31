<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['product'] = $this->Product_model->getProductAdmin();
		$this->load->view('backend/product', $data);
	}

	public function loadAddProduct()
	{
		$data['category'] = $this->Category_model->getCategory();
		$this->load->view('backend/add-product', $data);
	}

	public function addProduct()
	{
		$config['upload_path'] = './assets/img/product';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $_FILES['image']['name'];
		$this->upload->initialize($config);
		if ($this->upload->do_upload('image')) {
			$uploadData = $this->upload->data();
			$img = "assets/img/product/".$uploadData['file_name'];
		} else{
			$img = '';
		}
		$data = $this->input->post();
		$data['image'] = $img;
		$data['modifyBy'] = $this->session->userdata('loggedIn')['id'];
		$data['status'] = 0;
		$this->Product_model->addProduct($data);
		redirect('admin/Product','refresh');
		
	}

	public function changeStatus($id, $status)
	{
		$this->Product_model->changeStatus($id, $status);
		redirect('admin/Product','refresh');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/admin/Product.php */