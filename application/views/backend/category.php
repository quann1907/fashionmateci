<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loại sản phẩm</title>
	<?php include 'lib.php'; include 'nav-header.php'; include 'header.php'; include 'sidebar.php'; include 'chatbox.php' ?>
</head>
<body>
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
							<h4 class="card-title">Exam Toppers</h4>
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
</body>
</html>