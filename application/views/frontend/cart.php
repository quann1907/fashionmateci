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
                        <h1 class="maincont-ttl">Cart</h1>
                        <ul class="b-crumbs">
                            <li><a href="index.html">Home</a></li>
                            <li>Cart</li>
                        </ul>
                        <div class="page-styling">
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
                                                        <a href="<?= base_url()?>Product/removeProductFromCart/<?= $value['rowid']?>" class="button hover-label prod-addbtn"><i class="icon ion-close-round"></i><span>Gỡ bỏ</span></a>
                                                    </p>
                                                    <p class="prod-li-information">
                                                        <a href="#" class="hover-label"><i class="icon ion-more"></i><span>Chi tiết sản phẩm</span></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="page-styling prod-li-informations">
                                                <dl class="prod-li-props">
                                                    <dt>Brand:</dt> 
                                                    <dd><a href="#">AIR</a></dd>
                                                    <dt>Weight:</dt>
                                                    <dd>1 kg</dd>
                                                    <dt>Dimensions:</dt>
                                                    <dd>4 x 50 cm</dd>
                                                    <dt>Сolor:</dt>
                                                    <dd><a href="#" rel="tag">Black</a>, <a href="#" rel="tag">Green</a></dd>
                                                    <dt>Manufacturer:</dt>
                                                    <dd><a href="#">France</a></dd>
                                                    <dt>Material:</dt>
                                                    <dd><a href="#" rel="tag">Metall</a>, <a href="#" rel="tag">Plastic</a>, <a href="#" rel="tag">Rubber</a></dd>
                                                </dl>
                                            </div>
                                        </article>
                                    <?php endforeach ?>
                                </div>
                                <div class="cart-actions" text-align="right">
                                    <div class="cart-collaterals">
                                        <a href="#" class="checkout-button button" style="margin-left: 10px;">Đặt hàng</a>
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
            <div class="container-fluid blog-sb-widgets page-styling site-footer">

                <div class="row">

                    <div class="col-sm-12 col-md-4 widget align-center-tablet f-logo-wrap">

                        <a href="index.html" class="f-logo">

                            <img src="img/logo.png" alt="">

                        </a>

                        <p>Modern eCommerce HTML Template</p>

                        <button class="btn callback">Contact Us</button>

                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">

                        <h3 class="widgettitle">Company</h3>

                        <ul class="menu">

                            <li>

                                <a href="index.html">Front Page</a>

                            </li>

                            <li>

                                <a href="about.html">About Us</a>

                            </li>

                            <li>

                                <a href="contacts.html">Contacts</a>

                            </li>

                            <li>

                                <a href="index.html">Gallery</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">

                        <h3 class="widgettitle">Shop</h3>

                        <ul class="menu">

                            <li>

                                <a href="catalog-list.html">Electricity</a>

                            </li>

                            <li>

                                <a href="catalog-gallery.html">Fasteners</a>

                            </li>

                            <li>

                                <a href="catalog-gallery-full.html">Lighting</a>

                            </li>

                            <li>

                                <a href="catalog-gallery.html">Pipes</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">

                        <h3 class="widgettitle">Account</h3>

                        <ul class="menu">

                            <li>

                                <a href="wishlist.html">Wishlist</a>

                            </li>

                            <li>

                                <a href="compare.html">Compare</a>

                            </li>

                            <li>

                                <a href="cart.html">Cart</a>

                            </li>

                            <li>

                                <a href="auth.html">My Account</a>

                            </li>

                        </ul>

                    </div>

                    <div class="col-xs-6 col-sm-3 col-md-2 align-center-mobile widget">

                        <h3 class="widgettitle">Blog</h3>

                        <ul class="menu">

                            <li>

                                <a href="blog.html">All Posts</a>

                            </li>

                            <li>

                                <a href="post.html">News</a>

                            </li>

                            <li>

                                <a href="post-slider.html">Articles</a>

                            </li>

                            <li>

                                <a href="blog.html">Reviews</a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>



            <div class="modal-form" id="modal-form-psd">
                <form action="#" method="POST" class="form-validate">
                    <h4>Get PSD Link</h4>
                    <input type="text" placeholder="Your email" data-required="text" data-required-email="email" name="email">
                    <input class="btn1" type="submit" value="Send">
                </form>
            </div>
            <div class="form-validate modal-form" id="modal-form">

                <form action="#" method="POST" class="form-validate">

                    <h4>Contact Us</h4>

                    <input type="text" placeholder="Your name" data-required="text" name="name">

                    <input type="text" placeholder="Your phone" data-required="text" name="phone">

                    <input type="text" placeholder="Your email" data-required="text" data-required-email="email" name="email">

                    <input class="btn1" type="submit" value="Send">

                </form>

            </div>



            <div class="cont maincont quick-view-modal">

                <article>

                    <div class="prod">

                        <div class="prod-slider-wrap prod-slider-shown">

                            <div class="flexslider prod-slider" id="prod-slider">

                                <ul class="slides">

                                    <li>

                                        <a data-fancybox-group="qprod" class="fancy-img" href="img/1/product/quickview1-full.jpg">

                                            <img src="img/1/product/quickview1.jpg" alt="">

                                        </a>

                                    </li>

                                    <li>

                                        <a data-fancybox-group="qprod" class="fancy-img" href="img/1/product/quickview2-full.jpg">

                                            <img src="img/1/product/quickview2.jpg" alt="">

                                        </a>

                                    </li>

                                    <li>

                                        <a data-fancybox-group="qprod" class="fancy-img" href="img/1/product/quickview3-full.jpg">

                                            <img  src="img/1/product/quickview3.jpg" alt="">

                                        </a>

                                    </li>

                                </ul>

                                <div class="prod-slider-count"><p><span class="count-cur">1</span> / <span class="count-all">3</span></p><p class="hover-label prod-slider-zoom"><i class="icon ion-search"></i><span>Zoom In</span></p></div>

                            </div>

                            <div class="flexslider prod-thumbs" id="prod-thumbs">

                                <ul class="slides">

                                    <li>

                                        <img src="img/1/product/quickview1.jpg" alt="">

                                    </li>

                                    <li>

                                        <img src="img/1/product/quickview2.jpg" alt="">

                                    </li>

                                    <li>

                                        <img src="img/1/product/quickview3.jpg" alt="">

                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="prod-cont">

                            <div class="prod-rating-wrap">

                                <p data-rating="4" class="prod-rating">

                                    <i class="rating-ico" title="1"></i><i class="rating-ico" title="2"></i><i class="rating-ico" title="3"></i><i class="rating-ico" title="4"></i><i class="rating-ico" title="5"></i>

                                </p>

                                <p class="prod-rating-count">7</p>

                            </div>

                            <p class="prod-categs"><a href="#">Lighting</a>, <a href="#">Tools</a></p>

                            <h2>Belt Sanders</h2>

                            <p class="prod-price">$25.00</p>

                            <p class="stock in-stock">7 in stock</p>

                            <p class="prod-excerpt">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget...</p>

                            <div class="prod-add">

                                <button type="submit"

                                class="button"><i class="icon ion-android-cart"></i> Add to cart

                            </button>

                            <p class="qnt-wrap prod-li-qnt">

                                <a href="#" class="qnt-plus prod-li-plus"><i class="icon ion-arrow-up-b"></i></a>

                                <input type="text" value="1">

                                <a href="#" class="qnt-minus prod-li-minus"><i class="icon ion-arrow-down-b"></i></a>

                            </p>

                            <div class="prod-li-favorites">

                                <a href="wishlist.html" class="hover-label add_to_wishlist"><i class="icon ion-heart"></i><span>Add to Wishlist</span></a>

                            </div>

                            <p class="prod-li-compare">

                                <a href="compare.html" class="hover-label prod-li-compare-btn"><span>Compare</span><i class="icon ion-arrow-swap"></i></a>

                            </p>

                        </div>

                    </div>

                </div>

            </article>

        </div>


    </div><!-- #page -->



    <script src="js/jquery-1.12.3.min.js"></script>

    <script src="js/jquery-plugins.js"></script>

    <script src="js/main.js"></script>


    <script src="1extra/js/jquery-ui.min.js"></script>
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