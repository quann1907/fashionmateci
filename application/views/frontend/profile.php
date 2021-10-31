<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Thông tin cá nhân</title>
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
                                    <h2 style="text-align: center;">Thông tin cá nhân</h2>
                                    <?php foreach ($customer as $value): ?>
                                        <form action="<?= base_url() ?>Customer/editCustomer" method="post">
                                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                            <p>
                                                <label for="fullname">Họ tên</label>
                                                <input type="text" id="fullname" name="fullname" value="<?= $value['fullname'] ?>">
                                            </p>
                                            <p>
                                                <label for="gender">Giới tính</label>
                                                <?php if($value['gender'] == 0){ ?>
                                                    <input type="text" id="gender" name="gender" value="Nữ" disabled>
                                                <?php } elseif ($value['gender'] == 1){ ?>
                                                    <input type="text" id="gender" name="gender" value="Nam" disabled>
                                                <?php } else { ?>
                                                    <input type="text" id="gender" name="gender" value="Lỗi" disabled>
                                                <?php } ?>
                                            </p>
                                            <p>
                                                <label for="phone">Điện thoại</label>
                                                <input type="text" id="phone" name="phone" value="<?= $value['phone'] ?>">
                                            </p>
                                            <p>
                                                <label for="email">Email</label>
                                                <input type="text" id="email" name="email" value="<?= $value['email'] ?>">
                                            </p>
                                            <p>
                                                <label for="point">Điểm tích luỹ</label>
                                                <input type="text" id="point" name="point" value="<?= $value['point'] ?>" disabled>
                                            </p>
                                            <p class="auth-submit">
                                                <input type="submit" value="Cập nhật thông tin">
                                            </p>
                                        </form>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </article>
                    </div>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- #content -->
        <?php include 'footer.php' ?>
    </div><!-- #page -->
</body>
</html>