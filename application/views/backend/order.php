<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Xử lý đơn hàng</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->

    <?php
    include 'lib.php';
    include 'sidebar.php';
    include 'nav-header.php';
    include 'chatbox.php';
    include 'header.php';
    ?>
</head>

<body>

    <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
    <!--*******************
        Preloader end
        ********************-->


    <!--**********************************
        Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

        <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">
                <div class="container-fluid">
                    <div class="page-titles">
                     <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                  </ol>
              </div>
              <!-- row -->

              <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Đơn hàng</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th class="width80"><strong>ID</strong></th>
                                            <th><strong>Tên khách hàng</strong></th>
                                            <th><strong>Ngày đặt hàng</strong></th>
                                            <th><strong>Tổng số tiền</strong></th>
                                            <th><strong>Ngày giao hàng dự kiến</strong></th>
                                            <th><strong>Ghi chú</strong></th>
                                            <th><strong>Trạng thái</strong></th>
                                            <th><strong>Tác vụ</strong></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($order as $value): ?>
                                        <tr>
                                            <td><strong><?= $value['id'] ?></strong></td>
                                            <td><?= $value['fullname'] ?></td>
                                            <td><?= $value['orderDate'] ?></td>
                                            <td><?= $value['money'] ?></td>
                                            <td><?= $value['estimateDeliveryDate'] ?></td>
                                            <td><?= $value['note'] ?></td>
                                            <?php
                                            if ($value['status'] == 0){
                                              echo '<td><span class="badge light badge-warning">Chờ xác nhận</span></td>';
                                          }
                                          elseif ($value['status'] == 1){
                                              echo '<td><span class="badge light badge-success">Xác nhận đặt hàng thành công</span></td>';
                                          }
                                          elseif ($value['status'] == 2){
                                              echo '<td><span class="badge light badge-danger">Đơn hàng huỷ</span></td>';
                                          }
                                          else {
                                              echo '<td><span class="badge light badge-danger">Lỗi</span></td>';
                                          }
                                          ?>
                                          <td>
                                             <div class="dropdown">
                                              <button type="button" class="btn btn-success light sharp" data-toggle="dropdown">
                                               <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                           </button>
                                           <div class="dropdown-menu">
                                               <a class="dropdown-item btn <?= ($value['status']==1)?'disabled':'';?>" href="<?= base_url()?>admin/Order/change_status/<?= $value['id'] ?>/1">Xác nhận cho đặt hàng</a>
                                               <a class="dropdown-item btn <?= ($value['status']==2)?'disabled':'';?>" href="<?= base_url()?>admin/Order/change_status/<?= $value['id'] ?>/2">Huỷ đơn hàng</a>
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
        <!--**********************************
            Content body end
            ***********************************-->


        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
                </div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->

        <!--**********************************
           Support ticket button start
           ***********************************-->

        <!--**********************************
           Support ticket button end
           ***********************************-->

           
       </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        
        <script src="<?= base_url() ?>dist/vendor/global/global.min.js"></script>
        <script src="<?= base_url() ?>dist/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="<?= base_url() ?>dist/vendor/chart.js/Chart.bundle.min.js"></script>
        <script src="<?= base_url() ?>dist/js/custom.min.js"></script>
        <script src="<?= base_url() ?>dist/js/deznav-init.js"></script>
        <script src="<?= base_url() ?>dist/vendor/owl-carousel/owl.carousel.js"></script>
    </body>

    </html>