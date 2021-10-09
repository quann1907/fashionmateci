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
                                                        <div class="prod-li-favorites">
                                                            <a href="wishlist.html" class="hover-label add_to_wishlist"><i class="icon ion-heart"></i><span>Add to Wishlist</span></a>
                                                        </div>
                                                        <p class="prod-quickview">
                                                            <a href="#" class="hover-label quick-view"><i class="icon ion-plus"></i><span>Quick View</span></a>
                                                        </p>
                                                        <p class="prod-i-cart">
                                                            <a href="#" class="hover-label prod-addbtn"><i class="icon ion-android-cart"></i><span>Add to Cart</span></a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="prod-i-bot">
                                                <div class="prod-i-info">
                                                    <p><?= $value['price'] ?> VND</p>
                                                    <p class="prod-i-categ"><a href="catalog-gallery.html"><?= $value['b'] ?></a></p>
                                                </div>
                                                <h3 class="prod-i-ttl"><a href="product.html"><?= $value['a'] ?></a></h3>
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
                                                <img src="img/1/front/1.png" alt="">
                                            </p>
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
                                <div class="image-half-img" style="background-image: url(img/1/front/bg1.jpg);">
                                    <img src="img/1/front/bg1.jpg" alt="">
                                </div>
                                <div class="cont image-half-cont">
                                    <div class="image-half-inner">
                                        <p class="maincont-subttl">Best sellers</p>
                                        <h2>Best MultiShop Offers</h2>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Phasellus rhoncus, dolor ac venenatis cursus, lacus tellus gravida ipsum, at maximus est diam ut tellus. Nunc ut risus sem.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>


                        <div class="page-styling row-wrap-full front-image-half">
                            <section class="image-half image-half-left">
                                <div class="image-half-img" style="background-image: url(img/1/front/bg2.jpg);">
                                    <img src="img/1/front/bg2.jpg" alt="">
                                </div>
                                <div class="cont image-half-cont">
                                    <div class="image-half-inner">
                                        <h2>Construction Tools for Sale</h2>
                                        <form action="#" method="post" class="mb55 wpcf7 wpcf7-form">
                                            <p class="form-submit">
                                                <span class="wpcf7-form-control-wrap">
                                                    <input type="email" placeholder="E-mail address">
                                                </span>
                                                <input type="submit" value="Get a Free Bonus">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>


                        <div class="page-styling row-wrap-full align-center front-title-block">
                            <h2>Are You Ready to Get Started</h2>
                            <a class="mb40 btn-multishop" href="catalog-gallery.html">Buy Now</a>
                        </div>


                        <div class="container page-styling row-wrap-container row-wrap-nottl">
                            <div class="multishop_product_categories">
                                <div class="multishop_product_categories_item">
                                    <a href="catalog-gallery.html">
                                        <span class="frontcategs-img">
                                            <img src="img/1/front/cat1.png" alt="">
                                        </span>
                                        <p>Tools</p>
                                    </a>
                                </div>
                                <div class="multishop_product_categories_item">
                                    <a href="catalog-gallery.html">
                                        <span class="frontcategs-img">
                                            <img src="img/1/front/cat2.png" alt="">
                                        </span>
                                        <p>Sanitary Engineering</p>
                                    </a>
                                </div>
                                <div class="multishop_product_categories_item">
                                    <a href="catalog-gallery.html">
                                        <span class="frontcategs-img">
                                            <img src="img/1/front/cat3.png" alt="">
                                        </span>
                                        <p>Pipes</p>
                                    </a>
                                </div>
                                <div class="multishop_product_categories_item">
                                    <a href="catalog-gallery.html">
                                        <span class="frontcategs-img">
                                            <img src="img/1/front/cat4.png" alt="">
                                        </span>
                                        <p>Other</p>
                                    </a>
                                </div>
                                <div class="multishop_product_categories_item">
                                    <a href="catalog-gallery.html">
                                        <span class="frontcategs-img">
                                            <img src="img/1/front/cat5.png" alt="">
                                        </span>
                                        <p>Lighting</p>
                                    </a>
                                </div>
                                <div class="multishop_product_categories_item">
                                    <a href="catalog-gallery.html">
                                        <span class="frontcategs-img">
                                            <img src="img/1/front/cat6.png" alt="">
                                        </span>
                                        <p>Fasteners</p>
                                    </a>
                                </div>
                                <div class="multishop_product_categories_item">
                                    <a href="catalog-gallery.html">
                                        <span class="frontcategs-img">
                                            <img src="img/1/front/cat7.png" alt="">
                                        </span>
                                        <p>Electricity</p>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="container page-styling row-wrap-container row-wrap-nottl">
                            <div class="row">
                                <div class="cf-lg-6 col-sm-6">
                                    <div class="mb30 iconbox-item iconbox-i-4">
                                        <div class="iconbox-i-top">
                                            <p class="iconbox-i-img">
                                                <i class="fa fa-heart"></i>
                                            </p>
                                            <h3><a href="#">Aliquam erat volutpat</a></h3>
                                        </div>
                                        <p>Vivamus non viverra est. Suspendisse vitae tellus et felis ullamcorper dapibus vitae sed dui. Donec fringilla sollicitudin justo, in aliquet urna gravida vitae.</p>
                                    </div>
                                    <div class="mb30 iconbox-item iconbox-i-4">
                                        <div class="iconbox-i-top">
                                            <p class="iconbox-i-img">
                                                <i class="fa fa-plus-circle"></i>
                                            </p>
                                            <h3><a href="#"> Aenean eu mauris urna</a></h3>
                                        </div>
                                        <p>Vivamus non viverra est. Suspendisse vitae tellus et felis ullamcorper dapibus vitae sed dui. Donec fringilla sollicitudin justo, in aliquet urna gravida vitae.</p>
                                    </div>
                                </div>
                                <div class="cf-lg-6 col-sm-6">
                                    <div class="mb30 iconbox-item iconbox-i-4">
                                        <div class="iconbox-i-top">
                                            <p class="iconbox-i-img">
                                                <i class="fa fa-star"></i>
                                            </p>
                                            <h3><a href="#">Quisque non commodo augue</a></h3>
                                        </div>
                                        <p>Vivamus non viverra est. Suspendisse vitae tellus et felis ullamcorper dapibus vitae sed dui. Donec fringilla sollicitudin justo, in aliquet urna gravida vitae.</p>
                                    </div>
                                    <div class="mb30 iconbox-item iconbox-i-4">
                                        <div class="iconbox-i-top">
                                            <p class="iconbox-i-img">
                                                <i class="fa fa-check"></i>
                                            </p>
                                            <h3><a href="#">Maecenas interdum nisl non</a></h3>
                                        </div>
                                        <p>Vivamus non viverra est. Suspendisse vitae tellus et felis ullamcorper dapibus vitae sed dui. Donec fringilla sollicitudin justo, in aliquet urna gravida vitae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div><!-- .maincont.page-styling.page-full -->
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- #content -->


        <?php include 'footer.php' ?>

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

                                    <img src="img/1/product/quickview2.jpg"" alt="">

                                </li>

                                <li>

                                    <img src="img/1/product/quickview3.jpg"" alt="">

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