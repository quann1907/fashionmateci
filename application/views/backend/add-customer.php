<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Thêm khách hàng</title>
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
		<!--********************************** Header end ***********************************-->

		<!--********************************** Sidebar start ***********************************-->
		<?php include 'sidebar.php'; ?>
		<!--********************************** Sidebar end ***********************************-->

		<!--********************************** Content body start ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Thêm khách hàng</h4>
							</div>
							<div class="card-body">
								<form action="<?= base_url() ?>admin/Customer/addCustomer" method="POST" enctype="multipart/form-data">
									<div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Họ tên*</strong></label>
												<input type="text" name="fullname" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Tên tài khoản*</strong></label>
												<input type="text" name="username" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Giới tính*</strong></label>
												<div class="form-group" style="margin-top: 6px">
													<label class="radio-inline mr-3"><input type="radio" name="gender" value="1"> Nam</label>
													<label class="radio-inline mr-3"><input type="radio" name="gender" value="0"> Nữ</label>
												</div>
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Điện thoại</strong></label>
												<input type="text" name="phone" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Email</strong></label>
												<input type="text" name="email" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong><strong>Ghi chú</strong></strong></label>
												<textarea class="form-control" rows="4" id="comment" name="note"></textarea>
											</div>
										</div>
									</div>
									<input type="submit" class="btn btn-primary" value="Thêm mới" style="margin-top: 20px; margin-left: 15px;">
								</form>
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