<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/dashboard');
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */