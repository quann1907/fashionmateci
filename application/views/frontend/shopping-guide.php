<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Giỏ hàng</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">

        <?php include 'lib.php' ?>

    </head>
    <body>
        <div id="page" class="site">
            <?php
            $this->load->view('frontend/top-header');
            $this->load->view('frontend/header');
            ?>
            <div id="content" class="site-content"><div id="primary" class="content-area width-normal">
                <main id="main" class="site-main">
                    <div class="cont maincont">
                        <h1 class="maincont-ttl">Hướng dẫn mua hàng</h1>
                        <img src="<?= base_url() ?>assets/img/shopping-guide.jpg" alt="" style="padding: 39px 20% 10px;">
                        <div style="padding: 20px 20% 10px;">
                            <p><strong>BƯỚC 1: TÌM KIẾM VÀ LỰA CHỌN SẢN PHẨM TẠI WEBSITE.</strong></p>
                            <ul class="my-ul">
                                <li class="my-li">Tìm kiếm các sản phẩm muốn mua thông qua các tab danh mục sản phẩm của Fashionmate</li>
                                <li class="my-li">Lựa chọn màu sắc, size phù hợp (tham khảo bản <strong>Hướng dẫn chọn kích cỡ</strong>), đọc mô tả <strong>thông tin sản phẩm</strong> và <strong>Hướng dẫn bảo quản</strong>.</li>
                            </ul>
                        </div>
                        <div style="padding: 20px 20% 10px;">
                            <p><strong>BƯỚC 2: THÊM SẢN PHẨM MUỐN MUA VÀO GIỎ HÀNG.</strong></p>
                            <ul class="my-ul">
                                <li class="my-li">Nhấn <strong>Thêm giỏ hàng</strong> để thêm sản phẩm vào giỏ hàng của bạn</li>
                                <li class="my-li">Thêm các sản phẩm nếu bạn muốn tiếp tục lựa chọn</li>
                            </ul>
                        </div>
                        <div style="padding: 20px 20% 10px;">
                            <p><strong>BƯỚC 3: TIẾN HÀNH ĐẶT HÀNG.</strong></p>
                            <ul class="my-ul">
                                <li class="my-li">Kiểm tra kĩ thông tin sản phẩm đã thêm tại <strong>giỏ hàng</strong></li>
                                <li class="my-li">Nhấn <strong>Đặt hàng</strong> để hoàn tất đặt hàng.</li>
                            </ul>
                        </div>
                        <h5 style="padding: 30px 10% 20px; line-height: 2;">Sau khi đặt hàng thành công qua website, Fashionmate sẽ liên hệ trực tiếp qua số điện thoại của bạn để hoàn tất các thủ tục còn lại vì vậy xin lưu ý nghe máy để xác nhận đặt hàng từ chúng tôi.</h5>
                    </div>
                </main>
            </div>
        </div>
        <?php include'footer.php' ?>
    </div><!-- #page -->

    <style>
    .buy-btn-wrap {
     position: fixed;
     bottom: 50px;
     right: 50px;
     width: 70px;
     height: 70px;
     border-radius: 70px;
     z-index: 3;
 }
 .buy-btn {
     width: 100%;
     height: 100%;
     border-radius: 100%;
     line-height: 64px;
     background: #34a5ed;
     text-align: center;
     color: #fff !important;
     display: block;
     transition: all 0.3s;
 }
 .buy-btn .buy-btn-val {
    font-size: 20px;
    line-height: 1;
    margin: 0;
    padding: 0;
    display: inline-block;
    vertical-align: middle;
    font-weight: 700;
    letter-spacing: 1px;
}
.buy-btn .buy-btn-val span {
    font-weight: 300;
    font-size: 15px;
    margin: 0 1px 0px 0;
    display: block;
    vertical-align: top;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.buy-btn:hover:before {
 opacity: 1;
}
.buy-btn:hover:after {
 display: none;
}
.buy-btn:after {
    pointer-events: none;
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    content: '';
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    top: 0;
    left: 0;
    padding: 0;
    z-index: -1;
    box-shadow: 0 0 0 2px rgba(255,255,255,0.1);
    opacity: 0;
    -webkit-transform: scale(0.9);
    -ms-transform: scale(0.9);
    transform: scale(0.9);
    -webkit-transform-style: preserve-3d;

    animation-iteration-count:infinite;
}
.buy-btn:after {
    -webkit-animation: sonarEffect 10s ease-out;
    animation: sonarEffect 10s ease-out;
    animation-iteration-count:infinite;
}
/*sonar effect*/
@-webkit-keyframes sonarEffect {
    0% {opacity: 0.3;}
    10% {opacity: 0.5;box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #34a5ed, 0 0 0 10px rgba(255,255,255,0.5);}
    10% {box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #34a5ed, 0 0 0 10px rgba(255,255,255,0.5);-webkit-transform: scale(1.3);opacity: 0;}
    100% {box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #34a5ed, 0 0 0 10px rgba(255,255,255,0.5);-webkit-transform: scale(1.3);opacity: 0;}
}
@keyframes sonarEffect {
    0% {opacity: 0.3;}
    4% {opacity: 0.5;box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #34a5ed, 0 0 0 10px rgba(255,255,255,0.5);}
    10% {box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #34a5ed, 0 0 0 10px rgba(255,255,255,0.5);transform: scale(1.3);opacity: 0;}
    100% {box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #34a5ed, 0 0 0 10px rgba(255,255,255,0.5);transform: scale(1.3);opacity: 0;}
}

@media only screen and (max-width : 600px) {
    .buy-btn {
        bottom: 40px;
        right: 40px;
        width: 60px;
        height: 60px;
        border-radius: 60px;
        line-height: 65px;
    }
}
@media only screen and (max-width : 380px) {
    .buy-btn {
        bottom: 30px;
        right: 30px;
    }
}

.my-li {
    padding: 10px 0 0 2%;
    line-height: 2;
}
.my-ul {
    padding: 5px 0 5px 2%;
}
</style>
<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46016169 = new Ya.Metrika({ id:46016169, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46016169" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

</body>
</html>