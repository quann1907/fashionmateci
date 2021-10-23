<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Category_model');
		$this->load->model('Product_model');
		$this->load->model('Customer_model');
	}

	public function index()
	{
		$this->load->view('frontend/login.php');
	}

	public function loginCustomer()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error', validation_errors());
			redirect('Login');
		}
		else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$session = $this->Customer_model->loginCustomer($username, $password);
			if(count($session) == 1){
				$session_array = array('id'=>$session->id, 'fullname'=>$session->fullname);
				$this->session->set_userdata('customer', $session_array);
				redirect('');
			}
			$this->session->set_flashdata('error','Something went wrong');
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('customer');
		redirect('','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */