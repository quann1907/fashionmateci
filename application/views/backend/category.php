<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Loại sản phẩm</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh mục sản phẩm</h4>
                                <a href="<?php base_url() ?>Category/loadAddCategory"><button type="button" class="btn light btn-primary">Thêm mới</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width20">
                                                    <div class="custom-control custom-checkbox checkbox-success check-lg">
                                                        <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                                        <label class="custom-control-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th><strong>TT</strong></th>
                                                <th><strong>Tên</strong></th>
                                                <th><strong>Danh mục cha</strong></th>
                                                <th><strong>Ngày tạo</strong></th>
                                                <th><strong>Trạng thái</strong></th>
                                                <th><strong>Tác vụ</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1 ?>
                                            <?php foreach ($category as $value): ?>
                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox checkbox-success check-lg">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                                            <label class="custom-control-label" for="customCheckBox2"></label>
                                                        </div>
                                                    </td>
                                                    <td><strong><?= $i++ ?></strong></td>
                                                    <td><div class="d-flex align-items-center"><span class="w-space-no"><?= $value['childName'] ?></span></div></td>
                                                    <td>
                                                        <?php if ($value['parentName'] == null) {
                                                            echo "Không có";
                                                        }
                                                        else {
                                                            echo $value['parentName'];}
                                                        ?>
                                                        </td>
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
                                                                    <a class="dropdown-item btn <?= ($value['status']==1)?'disabled':'';?>" href="<?= base_url()?>admin/Category/changeStatus/<?= $value['childID'] ?>/1">Kích hoạt động</a>
                                                                    <a class="dropdown-item btn <?= ($value['status']==0)?'disabled':'';?>" href="<?= base_url()?>admin/Category/changeStatus/<?= $value['childID'] ?>/0">Ngừng hoạt động</a>
                                                                    <a class="dropdown-item btn" href="<?= base_url() ?>admin/Category/loadEditCategory/<?= $value['childID'] ?>">Cập nhật dữ liệu danh mục sản phẩm</a>
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
    </body>
    </html>