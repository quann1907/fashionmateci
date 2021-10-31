<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Information_model');
		$this->load->model('Category_model');
		$this->load->model('ProductDetail_model');
		$this->load->model('Order_model');
		$this->load->model('OrderDetail_model');
	}

	public function index()
	{
		
	}

	public function orderProduct()
	{
		try {
			$data['money'] = $this->cart->total();
			$data['orderDate'] = date('Y-m-d');
			$data['estimateDeliveryDate'] = date('Y-m-d', strtotime("+7 days"));
			$data['status'] = 0;
			$data['idCustomer'] = $_SESSION['customer']['id'];
			$idOrder = $this->Order_model->insertOrder($data);
			foreach($this->cart->contents() as $value){
				$idProductDetail = $this->ProductDetail_model->getIDProductDetail(
					$value['id'],
					$value['options']['Color'],
					$value['options']['Size']
				);
				if ($idProductDetail == null){
					echo "<script>alert('Sản phẩm không tồn tại!')</script>";
					$this->cart->destroy();
					redirect('','refresh');
				}
				else {
					$this->OrderDetail_model->insertOrderDetail(
						array(
							'idOrder' => $idOrder,
							'idProductDetail' => $idProductDetail->id,
							'quantity' => $value['qty']
						)
					);
				}
			}
			$this->cart->destroy();
			redirect('Product','refresh');
		} catch (Exception $e) {
			echo "<script>alert('Lỗi!!')</script>";
		}
	}

	public function history()
	{
		$detail = [];
		$idCustomer = $_SESSION['customer']['id'];
		$idOrder = $this->Order_model->getOrderID($idCustomer);
		foreach ($idOrder as $value) {
			$history = $this->Order_model->history($idCustomer, $value['id']);
			$result['orderDetail'] = $this->OrderDetail_model->getOrderDetail($value['id']);
			$result['history'] = $history;
			array_push($detail, $result);
		}
		$data['detail'] = $detail;
		// echo "<pre>";
		// var_dump($data);
		// echo "<pre>";
		$this->load->view('frontend/order-history', $data);
	}
}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */