<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Size_model');
	}

	public function index()
	{
		$data['size'] = $this->Size_model->getSize();
		$this->load->view('backend/size', $data);
	}

	public function loadAddSize()
	{
		$this->load->view('backend/add-size');
	}

	public function addSize()
	{
		$data = $this->input->post();
		$this->Size_model->addSize($data);
		redirect('admin/Size','refresh');
	}

	public function loadEditSize($id)
	{
		$data['size'] = $this->Size_model->getSizeByID($id);
		$this->load->view('backend/edit-size', $data);
	}

	public function editSize($id)
	{
		$data = $this->input->post();
		$this->Size_model->editSize($id, $data);
		redirect('admin/Size','refresh');
	}

	public function removeSize($id)
	{
		$this->Size_model->removeSize($id);
		redirect('admin/Size','refresh');
	}

}

/* End of file Size.php */
/* Location: ./application/controllers/admin/Size.php */