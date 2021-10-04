<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('backend/login');
	}

	public function load_dashboard()
	{
		if ($this->session->userdata('loggedIn')) {
			$this->load->view('backend/dashboard');	
		}
		else {
			redirect('admin/User');
		}
	}

	public function login(){
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin/User');
		}
		else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$session = $this->User_model->user_login($username,$password);
			if(count($session) == 1){
				$session_array = array('id'=>$session[0]->id, 'fullname'=>$session[0]->fullname, 'image'=>session[0]->image);
				$this->session->set_userdata('loggedIn',$session_array);
				redirect('admin/User/load_dashboard');
			}
			else{
				$this->session->set_flashdata('error','Something went wrong');
				redirect('admin/User');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('loggedIn');
		redirect('admin','refresh');
	}

}