<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('backend/signin');
	}

	public function login(){
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin/Signin');
		}
		else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$session = $this->User_model->user_login($username, $password);
			if(count($session) == 1){
				$session_array = array('id'=>$session->id, 'fullname'=>$session->fullname, 'image'=>$session->image);
				$this->session->set_userdata('loggedIn',$session_array);
				redirect('admin/Dashboard');
			}
				$this->session->set_flashdata('error','Something went wrong');
				redirect('admin/Signin');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('loggedIn');
		redirect('admin/Signin','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */