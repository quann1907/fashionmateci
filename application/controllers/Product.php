<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	private $productPerPage;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Category_model');
		$this->load->model('Product_model');
		$this->load->model('Color_model');
	}

	public function index()
	{
        $config = [
            'base_url' => base_url().'Product/index',
            'per_page' => 6,
            'total_rows' => $this->Product_model->countProduct(),
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

        $data_product=$this->Product_model->getProductByLimitOffset(6, $uri_seg);
        $data['product'] = $data_product;
        $data['pagination'] = $pagination;

		$this->load->view('frontend/product', $data);
	}


	public function addProductToCart($id, $qty)
	{
		$product = $this->Product_model->getProductByID($id);
		$data = array(
			'id' => $id,
			'qty' => $qty,
			'name' => $product[0]['name'],
			'price' => $product[0]['price'],
			'sale' => $product[0]['sale'],
			'shortDesc' => $product[0]['shortDesc'],
			'options' => array('image'=> $product[0]['image'])
		);
		$status = $this->cart->insert($data);
		if($status){
			echo "<script>alert('Thêm thành công! Tiếp tục mua hàng')</script>";
		}else{
			echo "<script>alert('Thêm thất bại! Thử lại sau')</script>";
		}
		redirect('Product','refresh');
	}

	public function removeProductFromCart($rowid)
	{
		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		redirect('Product','refresh');
	}

	public function getProductByCategory($idCategory)
	{
		$config = [
            'base_url' => base_url().'Product/getProductByCategory/'.$idCategory,
            'per_page' => 6,
            'total_rows' => $this->Product_model->countProductByCategory($idCategory),
            'uri_segment' => 4,
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
        $uri_seg = $this->uri->segment(4);

        $data_product = $this->Product_model->getProductByCategory($idCategory, 6, $uri_seg);
        $data['product'] = $data_product;
        $data['pagination'] = $pagination;

		$this->load->view('frontend/product', $data);
	}
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */