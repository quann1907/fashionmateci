<div class="container-fluid blog-sb-widgets page-styling site-footer">
    <div class="row">
        <div class="col-sm-12 col-md-4 widget align-center-tablet f-logo-wrap">
            <a href="index.html" class="f-logo">
                <img src="img/logo.png" alt="">
            </a>
            <h2>CÔNG TY CỔ PHẦN FASHION MATE</h2>
            <p>Giấy CNĐKDN:</p>
            <p>Cơ quan cấp: Phòng đăng ký kinh doanh Sở kế hoạch và đầu tư thành phố Hà Nội</p>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">
            <h3 class="widgettitle">Về chúng tôi</h3>
            <ul class="menu">
                <li>
                    <a href="index.html">Giới thiệu</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Home/loadRecruitment">Tuyển dụng</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Home/loadContact">Liên hệ</a>
                </li>
            </ul>
        </div>
        <div class="col-xs-9 col-sm-5 col-md-3 align-center-mobile widget">
            <h3 class="widgettitle">Dịch vụ</h3>
            <ul class="menu">
                <li>
                    <a href="<?= base_url() ?>Home/loadShoppingGuilde">Hướng dẫn mua hàng</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Home/loadWarranty">Chính sách bảo hành</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Home/loadReturnGoods">Chính sách đổi trả</a>
                </li>
            </ul>
        </div>
        <div class="col-xs-9 col-sm-4 col-md-3 align-center-mobile widget">
            <h3 class="widgettitle">Hệ thống cửa hàng</h3>
            <ul class="menu">
                <?php $this->load->view('frontend/store-address') ?>
            </ul>
        </div>
    </div>
</div>