<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Dashboard</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link href="<?= base_url() ?>dist/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?= base_url() ?>dist/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>dist/css/style.css" rel="stylesheet">
	<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">\

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
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-none d-lg-block">
						<h3 class="text-black font-w600">Welcome to Eres!</h3>
						<p class="mb-0 fs-18">Hospital Admin Dashboard Template</p>
					</div>

					<div class="input-group search-area ml-auto d-inline-flex">
						<input type="text" class="form-control" placeholder="Search here">
						<div class="input-group-append">
							<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
						</div>
					</div>
					<a href="javascript:void(0);" class="settings-icon  ml-3"><i class="flaticon-381-settings-2 mr-0"></i></a>
				</div>
				<div class="row">	
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card text-white bg-info rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Sản phẩm</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3"><?= $product ?></h2>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card text-white bg-custom-yellow rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Đơn chờ xử lý..</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3"><?=$count_pending_order?></h2>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0"></path>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card text-white bg-custom-red rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Khách hàng</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3"><?= $count_customer ?></h2>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75" fill="white"></path>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-sm-6">
						<div class="card text-white bg-success rounded">	
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body">
										<p class="mb-1">Tổng thu nhập trong tháng</p>
										<div class="d-flex flex-wrap">
											<h2 class="fs-40 font-w600 text-white mb-0 mr-3">VNĐ</h2>
										</div>
									</div>
									<span class="border rounded-circle p-4">
										<svg width="34" height="34" viewBox="0 0 21 35" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9.21864 35H11.6667V31.7747C17.7104 31.496 21.0001 27.7133 21.0001 23.413C21.0001 17.2412 15.7596 16.0865 11.6667 14.8919V8.72014C12.7378 9.11832 13.4645 10.0341 13.6175 11.5074H20.6175C20.2733 6.45051 16.9072 3.66325 11.6667 3.22526V0H9.21864V3.22526C4.01645 3.58362 6.10352e-05 6.53015 6.10352e-05 11.5074C6.10352e-05 17.7588 5.12574 18.9534 9.21864 20.0683V26.3595C7.91809 25.9215 7.15307 24.9261 7.00006 23.2935H0.0383124C0.229569 28.43 4.01645 31.2571 9.21864 31.7349V35ZM14.1531 23.6519C14.1531 25.1251 13.1968 26.2002 11.6667 26.479V20.8248C13.1585 21.4221 14.1531 22.2184 14.1531 23.6519ZM6.92356 11.1889C6.92356 9.63595 7.80334 8.75995 9.21864 8.52105V14.0557C7.84159 13.4187 6.92356 12.5825 6.92356 11.1889Z" fill="white"/>
										</svg>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-4">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 mb-0 text-black">Revenue</h3>
								<div class="dropdown d-inline-block">
									<div class="btn-link text-primary dropdown-toggle mb-0 fs-14 text-primary" data-toggle="dropdown">
										<span class="font-w500">2020</span>
									</div>
									<div class="dropdown-menu dropdown-menu-left">
										<a class="dropdown-item" href="javascript:void(0);">2019</a>
										<a class="dropdown-item" href="javascript:void(0);">2018</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div>
									<span class="text-info fs-26 font-w600 mr-3">$41,512k</span>
									<span class="text-secondary fs-18 font-w400">$25,612k</span>
								</div>
								<div id="line-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-8">
						<div class="card">	
							<div class="card-header d-sm-flex d-block border-0 pb-0">
								<h3 class="fs-20 mb-3 mb-sm-0 text-black">Patient Statistic</h3>
								<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mt-sm-0">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#weekly" role="tab">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#today" role="tab">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div id="chartBar"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8 col-lg-7">
						<div class="card">	
							<div class="card-header border-0 pb-0">
								<h3 class="fs-20 mb-0 text-black">Top Rated Doctors</h3>
								<a href="page-review.html" class="text-primary font-w500">View more >></a>
							</div>
							<div class="card-body">
								<div class="assigned-doctor owl-carousel">
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/5.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Alexandro Jr.</a></h5>
											<span class="text-primary mb-2 d-block">Dentist</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/1.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Samantha</a></h5>
											<span class="text-primary mb-2 d-block">Physical Therapy</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/2.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Aliandro M</a></h5>
											<span class="text-primary mb-2 d-block">Nursing</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img  src="images/doctors/3.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Samuel</a></h5>
											<span class="text-primary mb-2 d-block">Gynecologist</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/4.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Melinda</a></h5>
											<span class="text-primary mb-2 d-block">Dentist</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/1.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Alexandro Jr.</a></h5>
											<span class="text-primary mb-2 d-block">Dentist</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img  src="images/doctors/2.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Aliandro M</a></h5>
											<span class="text-primary mb-2 d-block">Nursing</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
									<div class="items">
										<div class="text-center">
											<img src="images/doctors/3.jpg" alt="" >
											<div class="dr-star"><i class="las la-star"></i> 4.2</div>
											<h5 class="fs-16 mb-1 font-w600"><a class="text-black" href="page-review.html">Dr. Samuel</a></h5>
											<span class="text-primary mb-2 d-block">Gynecologist</span>
											<p class="fs-12">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
											<div class="social-media">
												<a href="javascript:void(0);"><i class="lab la-instagram"></i></a>
												<a href="javascript:void(0);"><i class="lab la-facebook-f"></i></a>
												<a href="javascript:void(0);"><i class="lab la-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-4 col-lg-5">
						<div class="card border-0 pb-0">
							<div class="card-header flex-wrap border-0 pb-0">
								<h3 class="fs-20 mb-0 text-black">Recent Patient</h3>
								<a href="patient-list.html" class="text-primary font-w500">View more >></a>
							</div>
							<div class="card-body"> 
								<div id="DZ_W_Todo2" class="widget-media dz-scroll ps ps--active-y height320">
									<ul class="timeline">
										<li>
											<div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/1.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Aziz Bakree</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
											</div>
										</li>
										<li>
											<div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/2.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Griezerman</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-info mt-2">On Recovery</a>
											</div>
										</li>
										<li>
											<div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/3.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Oconner</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-danger mt-2">Rejected</a>
											</div>
										</li>
										<li>
											<div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/5.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Uli Trumb</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-primary mt-2">Recovered</a>
											</div>
										</li>
										<li>
											<div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/1.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Aziz Bakree</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
											</div>
										</li>
										<li>
											<div class="timeline-panel flex-wrap">
												<div class="media mr-3">
													<img class="rounded-circle" alt="image" width="50" src="images/widget/2.jpg">
												</div>
												<div class="media-body">
													<h5 class="mb-1"><a class="text-black" href="patient-details.html">Aziz Bakree</a></h5>
													<span class="fs-14">24 Years</span>
												</div>
												<a href="javascript:void(0);" class="text-warning mt-2">Pending</a>
											</div>
										</li>
									</ul>
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

	<!-- Apex Chart -->
	<script src="<?= base_url() ?>dist/vendor/apexchart/apexchart.js"></script>

	<!-- Dashboard 1 -->
	<script src="<?= base_url() ?>dist/js/dashboard/dashboard-1.js"></script>
	<script>
		function assignedDoctor()
		{

			/*  testimonial one function by = owl.carousel.js */
			jQuery('.assigned-doctor').owlCarousel({
				loop:false,
				margin:30,
				nav:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				dots: false,
				navText: ['<i class="fa fa-caret-left"></i>', '<i class="fa fa-caret-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:2
					},	
					767:{
						items:3
					},			
					991:{
						items:2
					},
					1200:{
						items:3
					},
					1600:{
						items:5
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				assignedDoctor();
			}, 1000); 
		});

	</script>

</body>
</html>