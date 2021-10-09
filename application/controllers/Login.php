<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/login.php');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */