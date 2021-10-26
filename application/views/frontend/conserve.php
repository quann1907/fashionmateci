<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Bảo quản</title>
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
                        <h1 class="maincont-ttl" style="margin: 30px 0px 50px">Bảo quản sản phẩm</h1>
                        <div class="row prod-items prod-items-2">
                            <h1 style="font-family: Montserrat; color: #444444; font-size: 20px; line-height: 20px; padding: 10px 5%">Chúng tôi quan tâm đến chất lượng</h1>
                            <h1 style="padding: 30px 5% 68px; font-family: Montserrat; color: #444444; font-size: 14px; line-height: 30px; font-weight:200">Tất cả các sản phẩm của chúng tôi được làm ra với mong muốn được sử dụng bền lâu qua thời gian. Vì vậy, chúng tôi sẽ chia sẻ một vài kiến thức để bảo quản sản phẩm để tiết kiệm chi phí mua sắm và giúp bạn thêm tự tin khi sử dụng sản phẩm của Fashionmate.</h1>
                        </div>
                        <div class="row c-list_item">
                            <div class="col-md-4 col-sm-6 c-col_item">
                                <div class="c-item">
                                    <a href="" title="" class="c-image">
                                        <video width="600" height="800" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="" style="height: 100%; width: 100%;">
                                            <source id="mp4" src="<?= base_url()?>assets/img/cotton.mp4" type="video/mp4"></video></a>
                                    <h3 class="c-name_item">
                                        <a href="" title="Cotton" class="c-name">Cotton</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 c-col_item">
                                <div class="c-item">
                                    <a href="" title="" class="c-image">
                                        <img class="img-responsive" src="<?= base_url()?>assets/img/denim.jpg" alt="Denim"></a>
                                    <h3 class="c-name_item">
                                        <a href="" title="Denim" class="c-name">Denim</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 c-col_item">
                                <div class="c-item">
                                    <a href="" title="" class="c-image">
                                        <video width="600" height="800" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="" style="height: 100%; width: 100%;">
                                            <source id="mp4" src="<?= base_url()?>assets/img/linen.mp4" type="video/mp4"></video></a>
                                    <h3 class="c-name_item">
                                        <a href="" title="Linen" class="c-name">Linen</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 c-col_item">
                                <div class="c-item">
                                    <a href="" title="" class="c-image">
                                        <img class="img-responsive" src="<?= base_url()?>assets/img/tuytsi.jpg" alt="Tuytsi"></a>
                                    <h3 class="c-name_item">
                                        <a href="" title="Tuytsi" class="c-name">Tuytsi</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 c-col_item">
                                <div class="c-item">
                                    <a href="" title="" class="c-image">
                                        <video width="600" height="800" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="" style="height: 100%; width: 100%;">
                                            <source id="mp4" src="<?= base_url()?>assets/img/vaini.mp4" type="video/mp4"></video></a>
                                    <h3 class="c-name_item">
                                        <a href="" title="Vải nỉ" class="c-name">Vải nỉ</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 c-col_item">
                                <div class="c-item">
                                    <a href="" title="" class="c-image">
                                        <img class="img-responsive" src="<?= base_url()?>assets/img/vaida.jpg" alt="Vải dạ"></a>
                                    <h3 class="c-name_item">
                                        <a href="" title="Vải dạ" class="c-name">Vải dạ</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div></div>
            <?php include'footer.php' ?>
        </div><!-- #page -->

<style>

    .c-list_item .c-item {
    position: relative;
    }

    .c-list_item .c-name_item {
    font-size: 20px;
    margin-bottom: 0;
    }

    .c-list_item .c-name_item .c-name {
    color: #ffffff;
    text-align: center;
    display: grid;
    align-items: center;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    -webkit-transition: ease-in-out 400ms;
    -moz-transition: ease-in-out 400ms;
    -ms-transition: ease-in-out 400ms;
    -o-transition: ease-in-out 400ms;
    transition: ease-in-out 400ms;
    }

</style>
</body>
</html>