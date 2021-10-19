<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['user'] = $this->User_model->getUser();
		$this->load->view('backend/user', $data);
	}

	public function addUser()
	{
		$this->form_validation->set_rules('fullname','fullname','required');
		$this->form_validation->set_rules('username','username','required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('backend/add-user');
		}
		else{
			// Up load ảnh
			$config['upload_path'] = './dist/images/user';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['file_name'] = $_FILES['image']['name'];
			$this->upload->initialize($config);
			if ($this->upload->do_upload('image')) {
				$uploadData = $this->upload->data();
				$img = "dist/images/user/".$uploadData['file_name'];
			} else{
				$img = '';
			}
			$data = $this->input->post();
			$data['dateCreate'] = date("Y-m-d");
			$data['password'] = '000000';
			$data['status'] = 1;
			$data['image'] = $img;
			$this->User_model->addUser($data);
			redirect('admin/User');
		}
	}

	public function loadAddUser()
	{
		$this->load->view('backend/add-user');
	}

	public function loadEditUser($id)
	{
		$data['user'] = $this->User_model->getUserByID($id);
		$this->load->view('backend/edit-user', $data);
	}

	public function editUser()
	{
		$config['upload_path'] = './dist/images/user';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $_FILES['image']['name'];
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->upload->do_upload('image')) {
			$uploadData = $this->upload->data();
			$img = "dist/images/user/".$uploadData['file_name'];
		}
		else{
			$img = $this->input->post('old_image');
		}
		$data = $this->input->post();
		$data['image'] = $img;
		unset($data['old_image']);
		$this->User_model->editUser($data['id'], $data);
		redirect('admin/User', 'refresh');
	}

	public function changeStatus($id, $status)
	{
		$this->User_model->changeStatus($id, $status);
		redirect('admin/User','refresh');
	}

}