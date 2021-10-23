<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
            <div id="content" class="site-content"><div id="primary" class="content-area width-normal">
                <main id="main" class="site-main">
                    <div class="cont maincont">
                        <article class="page-cont">
                            <div class="page-styling">
                                <div class="auth-wrap" style="padding-left: 25%; padding-right: 25%;">
                                    <h2 style="text-align: center;">Đăng nhập</h2>
                                    <form action="<?= base_url() ?>Login/loginCustomer" method="post" class="login">
                                        <p>
                                            <label for="username">Tên tài khoản <span class="required">*</span></label>
                                            <input type="text" id="username" name="username">
                                        </p>
                                        <p>
                                            <label for="password">Mật khẩu <span class="required">*</span></label>
                                            <input type="password" id="password" name="password">
                                        </p>
                                        <?php
                                            if($this->session->flashdata('error')){
                                                echo '<div class="form-group">';
                                                echo $this->session->flashdata('error');
                                                echo '</div>';
                                            }
                                            else {
                                                echo '';
                                            }
                                        ?>
                                        <p class="auth-submit">
                                            <input type="submit" value="Đăng nhập">
                                            <input type="checkbox" id="rememberme" value="forever">
                                            <label for="rememberme">Lưu đăng nhập</label>
                                        </p>
                                        <p class="auth-lost_password">
                                            <a href="#">Quên mật khẩu?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </article>
                    </div>
                </main><!-- #main -->
            </div><!-- #primary -->
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