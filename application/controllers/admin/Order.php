<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Order_model');
		$this->load->model('OrderDetail_model');
	}

	public function index()
	{
		$data['order'] = $this->Order_model->getOrder();
		$this->load->view('backend/order', $data);
	}

	public function changeStatus($id, $status)
	{
		$this->Order_model->changeStatus($id, $status);
        // $this->send($id, $status);
		return redirect('admin/order');
	}

	public function getOrderDetail($id)
	{
		$data['orderDetail'] = $this->OrderDetail_model->getOrderDetail($id);
		$this->load->view('backend/order-detail', $data);
	}

	public function send($id, $status){
        $data = $this->Order_model->getOrderByID($id);

        /* Load PHPMailer library */
        $this->load->library('phpmail');
       
        /* PHPMailer object */
        $mail = $this->phpmail->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hungquan6311@gmail.com';
        $mail->Password = 'jspvilgiivaxrgzl';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        $mail->setFrom('info@example.com', 'Fashion Mate');
        $mail->addReplyTo('info@example.com', 'Fashion Mate');
       
        /* Add a recipient */
        $mail->addAddress('quann1907@gmail.com');
       
        /* Add cc or bcc */
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
       
        /* Email subject */
        $mail->Subject = 'Xác nhận đặt hàng từ Fashion Mate';
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        if($status == 1){
            $mail->Subject = 'Xác nhận đặt hàng từ Fashion Mate';
            $mailContent = '<h1>Chào '. $data[0]['fullname'] .'. Đơn hàng của bạn đang được chuẩn bị gửi đi</h1>
            <p>Nhận hàng dự kiến vào ngày '. $data[0]['estimateDeliveryDate'] .'. Tổng giá trị đơn hàng là '. number_format($data[0]['money'], 0, ',', '.') .' VNĐ. Cảm ơn bạn đã tin tưởng và đồng hành cùng Fashion Mate!</p>';
        }
        elseif($status == 2) {
            $mail->Subject = 'Đơn hàng đặt không thành công';
            $mailContent = "<h1>Đơn hàng đặt không thành công</h1>
            <p>Cảm ơn bạn đã tin tưởng và đồng hành cùng Fashion Mate.</p>";
        }
        else{
            $mail->Subject = 'Lỗi';
            $mailContent = "<h1>Lỗi rồi</h1>";
        }
        $mail->Body = $mailContent;
        $mail->CharSet = 'UTF-8';

        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }
    }
}

/* End of file Order.php */
/* Location: ./application/controllers/admin/Order.php */