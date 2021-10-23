<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Tuyển dụng</title>
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
                        <h1 class="maincont-ttl" style="margin: 30px 0px 50px">Cơ hội nghề nghiệp</h1>
                        <div class="row prod-items prod-items-2">
                            <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                <img src="<?= base_url() ?>assets/img/recruitment1.jpg" alt="" style="border-radius: 20px">
                                <h6 style="text-align: center; padding: 8px 10% 20px;">ONLINES SALE (PART TIME)</h6>
                            </article>
                            <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                <img src="<?= base_url() ?>assets/img/recruitment2.jpg" alt="" style="border-radius: 20px">
                                <h6 style="text-align: center; padding: 8px 10% 20px;">ONLINES SALE (FULL TIME)</h6>
                            </article>
                            <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                <img src="<?= base_url() ?>assets/img/recruitment3.jpg" alt="" style="border-radius: 20px">
                                <h6 style="text-align: center; padding: 8px 10% 20px;">ONLINES SUPERVISOR</h6>
                            </article>
                            <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                <img src="<?= base_url() ?>assets/img/recruitment4.jpg" alt="" style="border-radius: 20px">
                                <h6 style="text-align: center; padding: 8px 10% 20px;">SALE ASSISTANT (PART TIME)</h6>
                            </article>
                            <article class="cf-sm-6 cf-md-4 cf-lg-4 col-xs-6 col-sm-6 col-md-4 col-lg-4 sectgl-item">
                                <img src="<?= base_url() ?>assets/img/recruitment5.jpg" alt="" style="border-radius: 20px">
                                <h6 style="text-align: center; padding: 8px 10% 20px;">SALE ASSISTANT (FULL TIME)</h6>
                            </article>
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

.my-li {
    padding: 10px 0 0 2%;
    line-height: 1.7;
}
.my-ul {
    padding: 5px 0 5px 2%;
}
</style>

</body>
</html>