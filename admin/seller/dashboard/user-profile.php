<?php
	
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<!-- <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" /> -->
	<!--plugins-->
	<!-- <link href="assets/plugins/notifications/css/lobibox.min.css" rel="stylesheet"/> -->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
	<!-- FONT_AWESOME -->
	<!-- <link href="../../asset/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"> -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="assets/css/custom.css">

	<title>PropertyZone Seller</title>
</head>

<body onload="info_noti()">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<!-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> -->
				</div>
				<div>
					<h4 class="logo-text">Property Zone</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>

			<!--navigation-->
			<?php include("functions/admin_sidebar.php"); ?>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include("functions/admin_header.php"); ?>
		<!--end header -->

		<!--start page wrapper -->
		<div class="page-wrapper">

			<div class="page-content ">
				<h5 class="my-2">User Profile</h5>

			

				<div class="card">
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Full Name</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" class="form-control shadow-none" placeholder="Full Name" />
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Email</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" class="form-control shadow-none" placeholder="Email"  />
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Phone</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" class="form-control shadow-none"  placeholder="Phone" />
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">D.O.B</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="date" class="form-control shadow-none text-secondary" placeholder="Date of Birth " name="" id="">
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Address</h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<input type="text" class="form-control shadow-none" placeholder="Full address" />
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-sm-3">
								<h6 class="mb-0">Identity Proof </h6>
							</div>
							<div class="col-sm-9 text-secondary">
								<div class=" image-upload my-2 p-2 border  bg-white " id="user-file">
									<div class="preview-container">
										<img src="assets/images/icons/upload_icon.svg">
										<span class="fileName d-block my-2">No file chosen</span>
										<div class="icon-container bg-secondary ">
											<i class="fas fa-times icon text-white"></i>
										</div>
									</div>
									<input type="file" class="form-control w-100 my-2 shadow-none user-fileUpload">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-3"></div>
							<div class="col-sm-9 text-secondary">
								<input type="button" class="btn btn-primary px-4 submitBtn" value="Save" />
							</div>
						</div>
					</div>
				</div>

				<!-- end row -->
			</div>
		</div>
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<!-- custom js -->
	<script src="assets/js/custom.js"></script>

	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<!--notification js -->
	<!-- <script src="assets/plugins/notifications/js/lobibox.min.js"></script> -->
	<!-- <script src="assets/plugins/notifications/js/notifications.min.js"></script> -->
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>


</body>

</html>