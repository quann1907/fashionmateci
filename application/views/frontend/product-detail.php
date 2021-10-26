<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <?php foreach ($product as $value): ?>
            <title>Fashionmate - <?= $value['name'] ?></title>
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
                                                <?php if($value['sale'] == 0){ ?>
                                                    <p class="prod-price"><?= number_format($value['price'], 0, ',', '.') ?> VNĐ</p>
                                                <?php } else { ?>
                                                    <p class="prod-price"><?= number_format($value['sale'], 0, ',', '.') ?> VNĐ<del style="margin-left: 15px;"><?= number_format($value['price'], 0, ',', '.') ?> VNĐ</del></p>
                                                <?php } ?>
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
    </body>
    </html>