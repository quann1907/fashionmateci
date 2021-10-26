<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Giỏ hàng</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">

        <?php include 'lib.php'?>

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
                        <h1 class="maincont-ttl">Giỏ hàng</h1>
                        <div class="page-styling" >
                            <div class="woocommerce prod-litems section-list">
                                <?php foreach ($this->cart->contents() as $value): ?>
                                    <article class="prod-li sectls">
                                        <div class="prod-li-inner">
                                            <a href="product.html" class="prod-li-img">
                                                <img src="<?= base_url() ?><?= $value['options']['image'] ?>" alt="" >
                                            </a>
                                            <div class="prod-li-cont">
                                                <div class="prod-li-ttl-wrap">
                                                    <p><a href="#"><?= $value['shortDesc']?></a></p>
                                                    <h3><a href="product.html"><?= $value['name']?></a></h3>
                                                </div><div class="prod-li-prices">
                                                    <div class="prod-li-price-wrap">
                                                        <p>Giá</p>
                                                        <p class="prod-li-price"><?= number_format($value['price'], 0, ',', '.')?> VNĐ</p>
                                                    </div>
                                                    <div class="prod-li-qnt-wrap">
                                                        <p class="qnt-wrap prod-li-qnt">
                                                            <a href="#" class="qnt-plus prod-li-plus"><i class="icon ion-arrow-up-b"></i></a>
                                                            <input type="text" value="<?= $value['qty']?>">
                                                            <a href="#" class="qnt-minus prod-li-minus"><i class="icon ion-arrow-down-b"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="prod-li-total-wrap">
                                                        <p>Thành tiền</p>
                                                        <p class="prod-li-total"><?= number_format($value['price']*$value['qty']) ?> VNĐ</p>
                                                    </div>
                                                </div></div>
                                                <div class="prod-li-info">
                                                    <p class="prod-li-add">
                                                        <a href="<?= base_url()?>ProductDetail/removeProductFromCart/<?= $value['rowid']?>" class="button hover-label prod-addbtn"><i class="icon ion-close-round"></i><span>Gỡ bỏ</span></a>
                                                    </p>
                                                    <p class="prod-li-information">
                                                        <a href="#" class="hover-label"><i class="icon ion-more"></i><span>Chi tiết sản phẩm</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="page-styling prod-li-informations">
                                                <dl class="prod-li-props">
                                                    <dt>Сolor:</dt>
                                                    <dd><a href="#" rel="tag"><?= $value['options']['Color']?></a></dd>
                                                    <dt>Size:</dt>
                                                    <dd><a href="#"><?= $value['options']['Size']?></a></dd>
                                                </dl>
                                            </div>
                                        </article>
                                    <?php endforeach ?>
                                </div>
                                <div class="cart-actions" text-align="right">
                                    <div class="cart-collaterals">
                                        <?php if(!isset($_SESSION['customer'])){ ?>
                                        <a href="<?= base_url() ?>Login" class="checkout-button button" style="margin-left: 10px;">Đặt hàng</a>
                                        <?php } else { ?>
                                        <a href="<?= ($this->cart->contents()!=null)?base_url().'Order/orderProduct':'';?>" class="checkout-button button" style="margin-left: 10px;">Đặt hàng</a>
                                        <?php } ?>
                                        <div class="order-total">
                                            <p class="cart-totals-ttl">Tổng tiền</p>
                                            <p class="cart-totals-val"><?= number_format($this->cart->total()) ?> VNĐ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
</style>
<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46016169 = new Ya.Metrika({ id:46016169, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46016169" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<?php $CI = &get_instance(); ?>

</body>
</html>