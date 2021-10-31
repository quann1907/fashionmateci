<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Fashionmate - Thêm dữ liệu sản phẩm</title>
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
								<h4 class="card-title">Thêm dữ liệu sản phẩm</h4>
							</div>
							<div class="card-body">
								<form action="<?= base_url() ?>admin/Product/addProduct" method="POST" enctype="multipart/form-data">
									<div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Tên sản phẩm</strong></label>
												<input type="text" name="name" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Mã danh mục sản phẩm</strong></label>
												<select class="form-control" id="inlineFormCustomSelect" name="idCategory">
													<option selected>Chọn..</option>
													<?php foreach ($category as $value): ?>
														<option value='<?= $value['id'] ?>'><?= $value['name'] ?></option>
													<?php endforeach ?>
												</select>
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Mô tả ngắn</strong></label>
												<textarea class="form-control" rows="4" id="comment" name="shortDesc"></textarea>
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Đơn giá*</strong></label>
												<input type="text" name="price" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Giá sale</strong></label>
												<input type="text" name="sale" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label"><strong>Ghi chú</strong></label>
												<textarea class="form-control" rows="4" id="comment" name="note"></textarea>
											</div>
										</div>
										<div class="col-lg-12 mb-2">
											<div class="form-group">
												<label class="text-label">Ảnh</label>
												<div class="basic-form custom_file_input">
													<div class="input-group">
														<div class="custom-file">
															<input type="file" class="custom-file-input" name="image">
															<label class="custom-file-label">Chọn ảnh</label>
														</div>
													</div>
												</div>
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