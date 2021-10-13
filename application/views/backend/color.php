<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Nhân viên</title>
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
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                    </ol>
                </div>
                <!-- row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Màu sắc</th>
                                                <th>Mã màu</th>
                                                <th>Ghi chú</th>
                                                <th>Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($color as $value): ?>
                                                <tr>
                                                    <td><?= $value['id'] ?></td>
                                                    <td><?= $value['name'] ?></td>
                                                    <td><?= $value['color'] ?></td>
                                                    <td><?= $value['note'] ?></td>
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
    <script src="<?= base_url() ?>dist/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?= base_url() ?>dist/js/custom.min.js"></script>
    <script src="<?= base_url() ?>dist/js/deznav-init.js"></script>
    <script src="<?= base_url() ?>dist/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Datatable -->
    <script src="<?= base_url() ?>dist/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>dist/js/plugins-init/datatables.init.js"></script>
</body>
</html>