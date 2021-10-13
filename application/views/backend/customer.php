<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Khách hàng</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Datatable -->
    <link href="<?= base_url() ?>dist/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url() ?>dist/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>dist/css/style.css" rel="stylesheet">
</head>

<body>
    <!--******************* Preloader start ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--******************* Preloader end ********************-->

    <!--********************************** Main wrapper start ***********************************-->
    <div id="main-wrapper">

        <!--********************************** Nav header start ***********************************-->
        <?php include 'nav-header.php'; ?>
        <!--********************************** Nav header end ***********************************-->

        <!--********************************** Chat box start ***********************************-->
        <?php include 'chatbox.php'; ?>
        <!--********************************** Chat box End ***********************************-->

        <!--********************************** Header start ***********************************-->
        <?php include 'header.php'; ?>
        <!--********************************** Header end ti-comment-alt ***********************************-->

        <!--********************************** Sidebar start ***********************************-->
        <?php include 'sidebar.php'; ?>
        <!--********************************** Sidebar end ***********************************-->

        <!--********************************** Content body start ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Khách hàng</h4>
                                <button type="button" class="btn light btn-primary">Thêm mới</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                                        <label class="custom-control-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th>TT</th>
                                                <th>Họ tên</th>
                                                <th>Tên tài khoản</th>
                                                <th>Giới tính</th>
                                                <th>Điện thoại</th>
                                                <th>Email</th>
                                                <th>Điểm tích luỹ</th>
                                                <th>Ngày đăng ký</th>
                                                <th>Trạng thái</th>
                                                <th>Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($customer as $value): ?>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                                        </div>
                                                    </td>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $value['fullname'] ?></td>
                                                    <td><?= $value['username'] ?></td>
                                                    <?php if($value['gender'] == 0){ 
                                                        echo '<td>Nữ</td>';
                                                    }
                                                    elseif($value['gender'] == 1){
                                                        echo '<td>Nam</td>';  
                                                    }
                                                    else{
                                                        echo'<td>Lỗi</td>';
                                                    }
                                                    ?>
                                                    <td><?= $value['phone'] ?></td>
                                                    <td><?= $value['email'] ?></td>
                                                    <td><?= $value['point'] ?></td>
                                                    <td><?= $value['dateCreate'] ?></td>
                                                    <?php if($value['status'] == 1) {
                                                        echo '<td><span class="badge light badge-success">Hoạt động</span></td>';
                                                    }
                                                    elseif($value['status'] == 0) {
                                                        echo '<td><span class="badge light badge-danger">Ngừng hoạt động</span></td>';
                                                    }
                                                    ?>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--********************************** Content body end ***********************************-->

        <!--********************************** Footer start ***********************************-->
        <?php include 'footer.php' ?>
        <!--********************************** Footer end ***********************************-->

    </div>
    <!--********************************** Main wrapper end ***********************************-->

    <!--********************************** Scripts ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>dist/vendor/global/global.min.js"></script>
    <script src="<?= base_url() ?>dist/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>dist/js/custom.min.js"></script>
    <script src="<?= base_url() ?>dist/js/deznav-init.js"></script>

    <!-- Datatable -->
    <script src="<?= base_url() ?>dist/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>dist/js/plugins-init/datatables.init.js"></script>
</body>
</html>