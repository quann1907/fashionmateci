<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
				}
				else {
					$result = $this->OrderDetail_model->insertOrderDetail(
						array(
							'idOrder' => $idOrder,
							'idProductDetail' => $idProductDetail->id,
							'quantity' => $value['qty']
						));
					if($result){
						$this->cart->destroy();
						echo "<script>alert('Đặt hàng thành công..chờ xác nhận đơn..')</script>";
						redirect('','refresh');
					}
					else{
						echo "<script>alert('Lỗi!!')</script>";
						redirect('Product/loadCart','refresh');
					}
				}
			}
		} catch (Exception $e) {
			echo "<script>alert('Lỗi!!')</script>";
		}
	}
}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */