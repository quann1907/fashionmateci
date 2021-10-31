<!doctype html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8">
        <title>Fashionmate - Đăng ký</title>
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
                                    <h2 style="text-align: center;">Đăng kí</h2>
                                    <form action="<?= base_url() ?>Login/register" method="post" class="login">
                                        <p>
                                            <label for="fullname"><strong>Họ tên </strong><span class="required">*</span></label>
                                            <input type="text" id="fullname" name="fullname">
                                        </p>
                                        <p>
                                            <label for="username"><strong>Tên tài khoản </strong><span class="required">*</span></label>
                                            <input type="text" id="username" name="username">
                                        </p>
                                        <p>
                                            <label for="password"><strong>Mật khẩu </strong><span class="required">*</span></label>
                                            <input type="password" id="password" name="password">
                                        </p>
                                        <p>
                                            <label for="repeat"><strong>Nhập lại mật khẩu </strong><span class="required">*</span></label>
                                            <input type="password" id="repeat" name="repeat">
                                        </p>
                                        <p>
                                            <label><strong>Giới tính </strong><span class="required">*</span></label>
                                            <select name="gender" style="padding: 0 2%;">
                                                <option value="1"><strong>Nam</strong></option>
                                                <option value="0"><strong>Nữ</strong></option>
                                            </select>
                                        </p>
                                        <p>
                                            <label for="phone"><strong>Điện thoại</strong><span class="required"></span></label>
                                            <input type="text" id="phone" name="phone">
                                        </p>
                                        <p>
                                            <label for="Email"><strong>Email</strong><span class="required"></span></label>
                                            <input type="text" id="Email" name="Email">
                                        </p>
                                        <?php echo validation_errors(); ?>
                                        <p class="auth-submit">
                                            <input type="submit" value="Đăng kí">
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
</body>
</html>