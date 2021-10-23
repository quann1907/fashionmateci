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
		$data['category'] = $this->Category_model->getCategoryAdmin();
		$this->load->view('backend/category', $data);
	}

	public function loadAddCategory()
	{
		$data['category'] = $this->Category_model->getCategory();
		$this->load->view('backend/add-category', $data);
	}

	public function addCategory()
	{
		$data = $this->input->post();
		$data['dateCreate'] = date('Y-m-d');
		$data['status'] = 1;
		$data['modifyBy'] = $_SESSION['loggedIn']['id'];
		$result = $this->Category_model->addCategory($data);
		if($result){
			echo "<script type='text/javascript'>alert('Thêm dữ liệu thành công!');</script>";
			redirect('admin/Category','refresh');
		}
		echo "<script type='text/javascript'>alert('Thêm dữ liệu thất bại!');</script>";
		redirect('admin/Category','refresh');
	}

	public function loadEditCategory($id)
	{
		$data['category'] = $this->Category_model->getCategoryByID($id);
		$data['parentID'] = $this->Category_model->getCategory();
		$this->load->view('backend/edit-category', $data);
	}

	public function editCategory()
	{
		$data = $this->input->post();
		$data['modifyBy'] = $_SESSION['loggedIn']['id'];
		$result = $this->Category_model->editCategory($data['id'], $data);
		if($result){
			echo "<script type='text/javascript'>alert('Cập nhật dữ liệu thành công!');</script>";
			redirect('admin/Category','refresh');
		}
		echo "<script type='text/javascript'>alert('Cập nhật dữ liệu thất bại!');</script>";
		redirect('admin/Category','refresh');
	}

	// public function check()
	// {
	// 	$data = $this->Category_model->getNameCategory();
	// 	echo "<pre>";
	// 	var_dump($data);
	// 	echo "<pre>";
	// }

	public function changeStatus($id, $status)
	{
		$modifyBy = $_SESSION['loggedIn']['id'];
		$result = $this->Category_model->changeStatus($id, $status, $modifyBy);
		if($result){
			echo "<script type='text/javascript'>alert('Đổi trạng thái thành công!');</script>";
			redirect('admin/Category','refresh');
		}
		echo "<script type='text/javascript'>alert('Đổi trạng thái thất bại!');</script>";
		redirect('admin/Category','refresh');
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/admin/Category.php */