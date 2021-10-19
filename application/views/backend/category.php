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
                                                <th><strong>ID</strong></th>
                                                <th><strong>Tên</strong></th>
                                                <th><strong>Danh mục cha</strong></th>
                                                <th><strong>Ngày tạo</strong></th>
                                                <th><strong>Trạng thái</strong></th>
                                                <th><strong>Tác vụ</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($category as $value): ?>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox checkbox-success check-lg">
                                                        <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                                        <label class="custom-control-label" for="customCheckBox2"></label>
                                                    </div>
                                                </td>
                                                <td><strong><?= $value['id'] ?></strong></td>
                                                <td><div class="d-flex align-items-center"><span class="w-space-no"><?= $value['name'] ?></span></div></td>
                                                <td>
                                                    <?php if ($value['parentID'] == 0) {
                                                        echo "Không có";
                                                    }
                                                    else {
                                                        $nameParent = $this->Category_model->getCategoryByID($value['parentID']);
                                                        echo $nameParent;}
                                                    ?>
                                                </td>
                                                <td><?= $value['dateCreate'] ?></td>
                                                <td>
                                                    <?php if($value['status'] == 1){
                                                        echo '<div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-2"></i>Đang hoạt động</div>';
                                                    } 
                                                    elseif ($value['status'] == 0) {
                                                        echo '<div class="d-flex align-items-center"><i class="fa fa-circle text-danger mr-2"></i>Không hoạt động</div>';
                                                    }
                                                    else{
                                                        echo '<div class="d-flex align-items-center"><i class="fa fa-circle text-danger mr-2"></i>Lỗi</div>';
                                                    }?>
                                                </td>
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
</body>
</html>