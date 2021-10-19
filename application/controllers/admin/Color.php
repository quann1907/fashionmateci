<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Color extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Color_model');
	}

	public function index()
	{
		$data['color'] = $this->Color_model->getColor();
		$this->load->view('backend/color', $data);
	}

	public function loadAddColor()
	{
		$this->load->view('backend/add-color');
	}

	public function addColor()
	{
		$data = $this->input->post();
		$this->Color_model->addColor($data);
		redirect('admin/Color', 'refresh');
	}

	public function loadEditColor($id)
	{
		$data['color'] = $this->Color_model->getColorByID($id);
		$this->load->view('backend/edit-color', $data);
	}

	public function editColor($id)
	{
		$data = $this->input->post();
		$this->Color_model->editColor($id, $data);
		redirect('admin/Color', 'refresh');
	}

	public function removeColor($id)
	{
		$this->Color_model->removeColor($id);
		redirect('admin/Color','refresh');
	}

}

/* End of file Color.php */
/* Location: ./application/controllers/admin/Color.php */