<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductDetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Product_model');
		$this->load->model('Category_model');
		$this->load->model('ProductDetail_model');
		$this->load->model('Color_model');
		$this->load->model('Size_model');
	}

	public function index()
	{
		
	}

	public function productDetail($id)
	{
		$data['id'] = $id;
		$data['product'] = $this->Product_model->getProductByID($id);
		$data['productDetail'] = $this->ProductDetail_model->getProductDetailByID($id);
		$data['color'] = $this->Color_model->getColorProduct($id);
		$data['size'] = $this->Size_model->getSize();
		$this->load->view('frontend/product-detail', $data);
	}

	public function addProductToCart()
	{
		$get = $this->input->post();
		$product = $this->Product_model->getProductByID($get['id']);
		if($product[0]['sale'] == 0){
			$price = $product[0]['price'];
		}
		else{
			$price = $product[0]['sale'];
		}
		$data = array(
			'id' => $get['id'],
			'qty' => $get['qty'],
			'name' => $product[0]['name'],
			'price' => $price,
			'sale' => $product[0]['sale'],
			'shortDesc' => $product[0]['shortDesc'],
			'options' => array('image'=> $product[0]['image'], 'Size' => $get['Size'], 'Color' => $get['Color'])
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

	public function checkCart()
	{
		echo "<pre>";
		var_dump($this->cart->contents());
		echo "<pre>";
	}

}

/* End of file ProductDetail.php */
/* Location: ./application/controllers/ProductDetail.php */