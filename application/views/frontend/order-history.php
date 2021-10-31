<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Lịch sử đặt hàng</title>
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
                        <h1 class="maincont-ttl">Lịch sử đặt hàng</h1>
                        <div class="page-styling" >
                            <div class="woocommerce prod-litems section-list">
                                <?php foreach ($detail as $details => $key): ?>
                                    <article class="prod-li sectls" style="border-radius: 20px">
                                        <div>
                                            <div style="padding: 2% 3%;">
                                                <div>
                                                    <p>Ngày đặt hàng: <?= $key['history'][0]['orderDate']?></p>
                                                        <?php foreach ($key['orderDetail'] as $product): ?>
                                                            <h5 style="width: 33%; float: left"><?= $product['name']?></h5>
                                                            <h5 style="width: 33%; float: left">Màu: <?= $product['color']?></h5>
                                                            <h5 style="width: 33%; float: left">Size: <?= $product['size']?></h5>
                                                        <?php endforeach ?>
                                                </div>
                                                <div class="prod-li-prices">
                                                    <div>
                                                        <p style="width: 50%; float: left">Tổng tiền</p>
                                                        <p style="width: 50%; float: left; color: #6BC67B; font-weight: bold"><?= number_format($key['history'][0]['money'],0,',','.') ?> VNĐ</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <?php include'footer.php' ?>
    </div><!-- #page -->
</body>
</html>