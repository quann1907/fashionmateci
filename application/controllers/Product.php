<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	private $productPerPage;

	public function __construct()
	{
		parent::__construct();
		$this->productPerPage = 6;
		$this->load->model('Information_model');
		$this->load->model('Category_model');
		$this->load->model('Product_model');
	}

	public function index()
	{
		$this->page(1);
	}

	public function page($page)
	{
		$offset = ($page-1)*$this->productPerPage;
		$data['product'] = $this->Product_model->productByPage($page, $this->productPerPage);
		$data['numberOfPage'] = $this->Product_model->numberOfPage($this->productPerPage);
		$this->load->view('frontend/product', $data);
	}

	// public function getProductByType($type)
	// {
	// 	$data['product'] = $this->Product_model->getProductByType($type);
	// 	redirect('','refresh', $data);
	// }

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

	public function check($value='')
	{
		echo "<pre>";
		var_dump($this->cart->contents());
		echo "<pre>";
	}

	public function removeProductFromCart($rowid)
	{
		$this->cart->update(array('rowid' => $rowid,'qty' => 0));
		redirect('Product','refresh');
	}

	public function loadCart($value='')
	{
		$this->load->view('frontend/cart');
	}
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */