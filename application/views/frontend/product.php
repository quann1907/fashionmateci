<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Sản phẩm</title>
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
                            <div class="section-top">
                                <h1 class="maincont-ttl">Sản Phẩm</h1>
                                <div class="section-top-sort">
                                    <div class="section-sort">
                                        <p>Sort</p>
                                        <div class="dropdown-wrap">
                                            <p class="dropdown-title section-sort-ttl">Newness</p>
                                            <ul class="dropdown-list">
                                                <li><a href="#">Popularity</a></li>
                                                <li><a href="#">Average rating</a></li>
                                                <li class="active"><a href="#">Newness</a></li>
                                                <li><a href="#">Price: low to high</a></li>
                                                <li><a href="#">Price: high to low</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row prod-items prod-items-3" style="padding-top: 50px;">
                                <?php foreach($product as $value): ?>
                                    <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                        <div class="sectgl prod-i" style="border-radius: 20px;">
                                            <div class="prod-i-top">
                                                <a class="prod-i-img" href="<?= base_url() ?>ProductDetail/productDetail/<?= $value['id']?>">
                                                    <img src="<?= base_url() ?><?= $value['image']?>" alt="">
                                                </a>
                                            </div>
                                            <div class="prod-i-bot" style="border-radius: 0 0 20px 20px;">
                                                <div class="prod-i-info">
                                                    <?php if($value['sale'] == 0){ ?>
                                                        <p class="prod-i-price"><?= number_format($value['price'], 0, ',', '.') ?> VNĐ</p>
                                                    <?php } else { ?>
                                                        <p class="prod-i-price"><?= number_format($value['sale'], 0, ',', '.') ?> VNĐ<del style="margin-left: 15px;"><?= number_format($value['price'], 0, ',', '.') ?> VNĐ</del></p>
                                                    <?php } ?>
                                                    <p class="prod-i-categ"><a href=""><?= $value['b'] ?></a></p>
                                                </div>
                                                <h3 class="prod-i-ttl"><a href="<?= base_url() ?>ProductDetail/productDetail/<?= $value['id']?>"><?= $value['a'] ?></a></h3>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach ?>
                            </div>
                            <ul class="page-numbers">
                                <?= (isset($pagination))?$pagination:''?>
                            </ul>
                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- #content -->

            <div class="form-validate modal-form" id="modal-form">

                <form action="#" method="POST" class="form-validate">
                    <h4>Contact Us</h4>
                    <input type="text" placeholder="Your name" data-required="text" name="name">
                    <input type="text" placeholder="Your phone" data-required="text" name="phone">
                    <input type="text" placeholder="Your email" data-required="text" data-required-email="email" name="email">
                    <input class="btn1" type="submit" value="Send">
                </form>
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

</body>
</html>