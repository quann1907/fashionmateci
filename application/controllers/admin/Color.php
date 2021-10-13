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

}

/* End of file Color.php */
/* Location: ./application/controllers/admin/Color.php */