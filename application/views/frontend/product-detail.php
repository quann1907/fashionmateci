<!doctype html>

    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <?php foreach ($product as $value): ?>
        <title>Fashion mate - <?= $value['name'] ?></title>
        <?php endforeach ?>
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
            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="cont maincont">
                            <article>
                                <div class="prod">
                                    <?php foreach ($product as $value): ?>
                                        <div style="width: 570px; height: 545px; position: absolute; background-color: #fff; left: 0; display: flex; justify-content: center;">
                                            <img src="<?= base_url().$value['image'] ?>" alt="" style="padding: 0 10% 0; max-height:100%; max-width:100%;">
                                        </div>
                                    <?php endforeach ?>
                                    <div class="prod-cont" style="width: 570px; height: 545px">
                                        <?php foreach ($product as $value): ?>
                                            <p class="prod-categs"><a href="#"><?= $value['categoryName'] ?></a></p>
                                            <h1><?= $value['name'] ?></h1>
                                            <div class="variations_form cart">
                                                <p class="prod-price"><?= number_format($value['price'], 0, ',', '.') ?> VNĐ</p>
                                                <p class="prod-excerpt"><?= $value['shortDesc'] ?></p>
                                            <?php endforeach ?>
                                            <form action="<?= base_url()?>ProductDetail/addProductToCart" method="post">
                                            <div class="prod-add">
                                                <div class="variations">
                                                    <div class="variations-row">
                                                        <div class="label"><label >Màu sắc</label></div>
                                                        <div class="value">
                                                            <select name="Color">
                                                                <?php foreach ($color as $value): ?>
                                                                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?><div style="height: 15px; width: 15px; margin-left: 15px; border: 1px solid black; background-color: <?= $value['color'] ?>;">
                                                                    </div></option>
                                                                <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="variations" style="padding-top: 15px; padding-bottom: 20px;">
                                                    <div class="variations-row">
                                                        <div class="label"><label >Size</label></div>
                                                        <div class="value">
                                                            <select name="Size">
                                                                <?php foreach ($size as $value): ?>
                                                                <option value="<?= $value['id'] ?>"><?= $value['size'] ?></option>
                                                            <?php endforeach ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?= $id ?>">
                                                <button type="submit" class="button"><i class="icon ion-android-cart"></i> Thêm giỏ hàng</button>
                                                <p class="qnt-wrap prod-li-qnt">
                                                    <a href="#" class="qnt-plus prod-li-plus"><i class="icon ion-arrow-up-b"></i></a>
                                                    <input type="text" value="1" name='qty'>
                                                    <a href="#" class="qnt-minus prod-li-minus"><i class="icon ion-arrow-down-b"></i></a>
                                                </p>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </article>
                            </div>
                        </main><!-- #main -->
                    </div><!-- #primary -->


                    <!-- Elements -->
                    <div class="content-area width-full">
                        <div class="maincont page-styling page-full">
                            <div class="container mb20 page-styling row-wrap-container row-wrap-nottl">
                                <div class="row">
                                    <div class="cf-lg-4 col-sm-4">
                                        <div class="iconbox-item iconbox-i-3">
                                            <div class="iconbox-i-top">
                                                <p class="iconbox-i-img">
                                                    <i class="fa fa-road"></i>
                                                </p>
                                                <h3>Financing Services</h3>
                                            </div>
                                            <p>Vestibulum eu odio vitae neque blandit consequat ut nec nisi. Maecenas et velit sem. Nam egestas lectus vel fringilla accumsan.</p>
                                        </div>
                                    </div>
                                    <div class="cf-lg-4 col-sm-4">
                                        <div class="iconbox-item iconbox-i-3">
                                            <div class="iconbox-i-top">
                                                <p class="iconbox-i-img">
                                                    <i class="fa fa-truck"></i>
                                                </p>
                                                <h3>Lead Qualification</h3>
                                            </div>
                                            <p>Aliquam fermentum tortor lacus, id dictum tellus feugiat non. Donec rutrum ligula sed dui lobortis, id scelerisque sem volutpat.</p>
                                        </div>
                                    </div>
                                    <div class="cf-lg-4 col-sm-4">
                                        <div class="iconbox-item iconbox-i-3">
                                            <div class="iconbox-i-top">
                                                <p class="iconbox-i-img">
                                                    <i class="fa fa-shield"></i>
                                                </p>
                                                <h3>Security Service</h3>
                                            </div>
                                            <p>Etiam iaculis urna metus, in volutpat dolor faucibus at. Nulla vitae aliquet justo. Aenean in iaculis sapien. Vivamus rutrum hendrerit egestas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid page-styling row-wrap-full product-parallax-bg" style="background-image: url(<?= base_url() ?>assets/img/product-detail-bg.png);"></div>
                        </div>
                    </div>




                </div><!-- #content -->
                <?php include 'footer.php' ?>
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

</body>
</html>