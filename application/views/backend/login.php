<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Đăng nhập</title>
    <?php include 'lib.php';?>

</head>

<body class="h-100" style="background-image: url('<?= base_url()?>dist/images/background_login.png');">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Đăng nhập</h4>
                                    <form action="<?= base_url()?>admin/User/login" method='post'>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Tên tài khoản</strong></label>
                                            <input class="form-control" placeholder="hello@example.com" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Mật khẩu</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
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
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
                                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                                    <label class="custom-control-label" for="basic_checkbox_1">Lưu đăng nhập</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>