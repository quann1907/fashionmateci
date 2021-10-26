<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Product_model');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['product'] = $this->Product_model->getNewProduct();
		$this->load->view('frontend/home.php', $data);
	}

	public function loadCart()
	{
		$this->load->view('frontend/cart');
	}

	public function loadSpecialDeal()
	{
		$result = $this->Product_model->countProductOnSale();
		$config = [
            'base_url' => base_url().'Home/loadSpecialDeal',
            'per_page' => 6,
            'total_rows' => $this->Product_model->countProductOnSale(),
            'uri_segment' => 3,
            'attributes' => array('class' => 'page-numbers'),
        ];

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li><span class="page-numbers current">';
        $config['cur_tag_close'] = '</span></li>';

        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] =  '<';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li><br>';
        
        $this->pagination->initialize($config);
        
        $pagination = $this->pagination->create_links();
        $uri_seg = $this->uri->segment(3);

        $data_product=$this->Product_model->getSpecialDeal(6, $uri_seg);
        $data['product'] = $data_product;
        $data['pagination'] = $pagination;

		$this->load->view('frontend/product', $data);
	}

	public function loadConserve()
	{
		$this->load->view('frontend/conserve');
	}

	public function loadRecruitment()
	{
		$result = $this->Information_model->getInfoByType('recruitment');
		$data['recruitment'] = json_decode($result, true);
		$this->load->view('frontend/recruitment', $data);
	}

	public function loadAboutus()
	{
		$result = $this->Information_model->getInfoByType('aboutus');
		$data['aboutus'] = json_decode($result, true);
		$this->load->view('frontend/about-us', $data);
	}

	public function loadContact()
	{
		$this->load->view('frontend/contact');
	}

	public function loadShoppingGuilde()
	{
		$this->load->view('frontend/shopping-guide');
	}

	public function loadWarranty()
	{
		$this->load->view('frontend/warranty');
	}

	public function loadReturnGoods()
	{
		$this->load->view('frontend/return-goods');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */