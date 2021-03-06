<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Fashionmate - Nhân viên</title>
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
                                <h4 class="card-title">Nhân viên</h4>
                                <a href="<?php base_url() ?>User/loadAddUser"><button type="button" class="btn light btn-primary">Thêm mới</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Họ tên</th>
                                                <th>Chức vụ</th>
                                                <th>Giới tính</th>
                                                <th>Điện thoại</th>
                                                <th>Email</th>
                                                <th>Ngày bắt đầu</th>
                                                <th>Status</th>
                                                <th>Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($user as $value): ?>
                                                <tr>
                                                    <td><img class="rounded-circle" width="35" src="<?= base_url() ?><?= $value['image'] ?>" alt=""></td>
                                                    <td><?= $value['fullname'] ?></td>
                                                    <?php if($value['role'] == 1){ 
                                                        echo '<td>Quản trị viên</td>';
                                                    }
                                                    elseif($value['role'] == 2){
                                                        echo '<td>Quản lý</td>';  
                                                    }
                                                    elseif($value['role'] == 3){
                                                        echo '<td>Nhân viên</td>';  
                                                    }
                                                    else{
                                                        echo'<td>Lỗi</td>';
                                                    }
                                                    ?>
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
                                                    <td><a href="javascript:void(0);"><strong><?= $value['phone'] ?></strong></a></td>
                                                    <td><a href="javascript:void(0);"><strong><?= $value['email'] ?></strong></a></td>
                                                    <td><?= $value['dateCreate'] ?></td>
                                                    <?php if($value['status'] == 1) {
                                                        echo '<td><span class="badge light badge-success">Hoạt động</span></td>';
                                                    }
                                                    elseif($value['status'] == 0) {
                                                        echo '<td><span class="badge light badge-danger">Đóng băng</span></td>';
                                                    }
                                                    else {
                                                        echo '<td><span class="badge light badge-warning">Lỗi</span></td>';
                                                    }
                                                    ?>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item btn <?= ($value['status']==1)?'disabled':'';?>" href="<?= base_url()?>admin/User/changeStatus/<?= $value['id'] ?>/1">Kích hoạt động</a>
                                                                <a class="dropdown-item btn <?= ($value['status']==0)?'disabled':'';?>" href="<?= base_url()?>admin/User/changeStatus/<?= $value['id'] ?>/0">Ngừng hoạt động</a>
                                                                <a class="dropdown-item btn" href="<?= base_url() ?>admin/User/loadEditUser/<?= $value['id'] ?>">Cập nhật thông tin nhân viên</a>
                                                            </div>
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