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

	public function loadRegister()
	{
		$this->load->view('frontend/register');
	}

	public function register()
	{
		$this->form_validation->set_rules('fullname','Họ tên','callback_checkText');
		$this->form_validation->set_rules('username','Tên đăng nhập','callback_checkText|callback_checkUsername');
		$this->form_validation->set_rules('password','Mật khẩu','callback_checkText');
		$this->form_validation->set_rules('repeat','Nhập lại mật khẩu','callback_checkText|callback_checkRepeat[password]');
		if($this->form_validation->run()==TRUE){
			$data = $this->input->post();
			$data['dateCreate'] = date('Y-m-d');
			$data['status'] = 1;
			$data['point'] = 0;
			unset($data['repeat']);
			$this->Customer_model->register($data);
			redirect('Login','refresh');
		}
		else{
			$this->load->view('frontend/register');
		}
	}

	public function checkText($str)
	{
		if ($str == null){
			$this->form_validation->set_message('checkText', '{field} không được để trống');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function checkRepeat($pwd)
	{
		if ($pwd != $_POST['password']){
			$this->form_validation->set_message('checkRepeat', 'Mật khẩu không trùng khớp');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}

	public function checkUsername($username)
	{
		$username = $this->input->post('username');
        if($this->Customer_model->checkUsername($username)){
            $this->form_validation->set_message('checkUsername', 'Tên đăng nhập đã được sử dụng');
            return FALSE;
        }
        return TRUE;
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */