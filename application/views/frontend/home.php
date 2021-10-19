<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <title>MultiShop - eCommerce HTML Template</title>
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
            <div id="content" class="site-content"><div id="primary" class="content-area width-full">
                <main id="main" class="site-main">
                    <div class="maincont page-styling page-full">
                        <div class="heroblock" style="background-image: url(<?= base_url() ?>assets/img/slider.png)">
                            <p class="heroblock-subttl"><a href="catalog-gallery.html">Store</a></p>
                            <h3 class="heroblock-ttl">Free Shipping Anywhere</h3>
                            <a href="catalog-gallery.html" class="btn">Read More</a>
                        </div>
                        <div class="container mb60 page-styling row-wrap-container row-wrap-nottl">
                            <h3 class="mb35" style="color:#6bc67c; font-family:Montserrat;">SẢN PHẨM MỚI</h3>
                            <div class="row prod-items prod-items-3">
                                <?php foreach ($product as $value): ?>
                                    <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                        <div class="sectgl prod-i">
                                            <div class="prod-i-top">
                                                <a class="prod-i-img" href="product.html">
                                                    <img src="<?= base_url() ?><?= $value['image'] ?>">
                                                </a>
                                                <div class="prod-i-actions">
                                                    <div class="prod-i-actions-in">
                                                        <p class="prod-quickview">
                                                            <a href="#" class="hover-label quick-view"><i class="icon ion-plus"></i><span>Chi tiết sản phẩm</span></a>
                                                        </p>
                                                        <p class="prod-i-cart">
                                                            <a href="<?= base_url() ?>Product/addProductToCart/<?= $value['id'] ?>/1" class="hover-label prod-addbtn"><i class="icon ion-android-cart"></i><span>Thêm vào giỏ hàng</span></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="prod-i-bot">
                                                <div class="prod-i-info">
                                                    <p><?= number_format($value['price'], 0, ',', '.') ?> VND</p>
                                                    <p class="prod-i-categ"><a><?= $value['b'] ?></a></p>
                                                </div>
                                                <h3 class="prod-i-ttl"><a><?= $value['a'] ?></a></h3>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach ?>
                            </div>
                            <p class="special-more">
                                <a class="special-more-btn" href="<?= base_url() ?>Product">Show More Products</a>
                            </p>
                        </div>

                        <div class="container mb40 page-styling row-wrap-container row-wrap-nottl front-icons">
                            <div class="row">
                                <div class="cf-lg-4 col-sm-4">
                                    <div class="iconbox-item iconbox-i">
                                        <div class="iconbox-i-top">
                                            <p class="iconbox-i-img withimg">
                                                <img src="img/1/front/1.png" alt=""></p>
                                                <h3>Search!</h3>
                                            </div>
                                            <p>Vivamus non viverra est. Suspendisse vitae tellus et felis ullamcorper dapibus vitae sed dui. Donec fringilla sollicitudin justo, in aliquet urna gravida vitae.</p>
                                        </div>
                                    </div>
                                    <div class="cf-lg-4 col-sm-4">
                                        <div class="iconbox-item iconbox-i">
                                            <div class="iconbox-i-top">
                                                <p class="iconbox-i-img withimg">
                                                    <img src="img/1/front/2.png" alt="">
                                                </p>
                                                <h3>Order!</h3>
                                            </div>
                                            <p>Etiam malesuada lacus non nulla venenatis, vel maximus lacus porttitor. Suspendisse consectetur nec velit in efficitur. Suspendisse cursus gravida felis</p>
                                        </div>
                                    </div>
                                    <div class="cf-lg-4 col-sm-4">
                                        <div class="iconbox-item iconbox-i">
                                            <div class="iconbox-i-top">
                                                <p class="iconbox-i-img withimg">
                                                    <img src="img/1/front/3.png" alt="">
                                                </p>
                                                <h3>Get it!</h3>
                                            </div>
                                            <p>Aenean vulputate blandit dolor, in porta dolor ullamcorper in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel commodo ante.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-styling row-wrap-full front-image-half">
                                <section class="image-half image-half-right">
                                    <div class="image-half-img" style="background-image: url(<?= base_url() ?>assets/img/body-home-1.jpg);">
                                    </div>
                                    <div class="cont image-half-cont">
                                        <div class="image-half-inner">
                                            <p class="maincont-subttl">Luôn đi đầu</p>
                                            <h2>Gian hàng trực tuyến tuyệt vời nhất</h2>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>Fashionmate - chúng tôi luôn mong muốn đem lại cho khách hàng những sản phẩm chất lượng và trải nghiệm dịch vụ tích cực nhất</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <div class="page-styling row-wrap-full front-image-half">
                                <section class="image-half image-half-left">
                                    <div class="image-half-img" style="background-image: url(<?= base_url() ?>assets/img/body-home-2.jpg);">
                                    </div>
                                    <div class="cont image-half-cont">
                                        <div class="image-half-inner">
                                            <h2>Theo dõi</h2>
                                            <form action="#" method="post" class="mb55 wpcf7 wpcf7-form">
                                                <p class="form-submit">
                                                    <span class="wpcf7-form-control-wrap">
                                                        <input type="email" placeholder="Nhập email">
                                                    </span>
                                                    <input type="submit" value="Đăng ký nhận ưu đãi">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div><!-- .maincont.page-styling.page-full -->
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- #content -->
            <?php include 'footer.php' ?>
        </div><!-- #page -->



<!-- <script src="js/jquery-1.12.3.min.js"></script>

<script src="js/jquery-plugins.js"></script>

<script src="js/main.js"></script>


<script src="1extra/js/jquery-ui.min.js"></script> -->
<script>
    jQuery(document).ready(function ($) {
    // Modal Form
    $('#free-psd').fancybox({
        padding: 0,
        content: $('#modal-form-psd'),
        helpers: {
            overlay: {
                locked: false
            }
        },
        tpl: {
            closeBtn: '<a title="Close" class="fancybox-item fancybox-close modal-form-close" href="javascript:;"></a>'
        }
    });
});
</script>
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
</style>

<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46016169 = new Ya.Metrika({ id:46016169, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46016169" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

</body>
</html>