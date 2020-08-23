<?php
include 'fuzzifikasi.php';
include 'get_rules.php';
include 'inferensi.php';
include 'defuzzyfikasi.php';
$listRule = get_rules();
//var_dump($def);

//var_dump($def);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Rules - Menghitung Kelayakan Rumah</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="assets/global_assets/js/main/jquery.min.js"></script>
	<script src="assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="assets/assets/js/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class="navbar-top">
	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark fixed-top">

		<a href="index.php" class="navbar-brand">

		</a>


		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">


				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="assets/global_assets/images/image.png" class="rounded-circle mr-2" height="34" alt="">
						<span>Administrator</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="index.php" class="nav-link"><i class="icon-home4"></i><span>Dashboard</span></a>
						</li>
						<li class="nav-item">
							<a href="rules.php" class="nav-link"><i class="icon-stack"></i> <span>Rules</span></a>
						</li>
						<li class="nav-item">
							<a href="lokasi.php" class="nav-link"><i class="icon-stack"></i> <span>Lokasi</span></a>
						</li>
						<li class="nav-item">
							<a href="tipe_rumah.php" class="nav-link"><i class="icon-stack"></i> <span>Tipe Rumah</span></a>
						</li>
						<li class="nav-item">
							<a href="luas_tanah.php" class="nav-link"><i class="icon-stack"></i> <span>Luas Tanah</span></a>
						</li>
						<li class="nav-item">
							<a href="perhitungan.php" class="nav-link"><i class="icon-home4"></i> <span>Perhitungan Fuzzy</span></a>
						</li>

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">

				<!-- Form layouts -->
				<div class="row">

					<div class="col-md-12">

						<!-- Vertical form -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h3 class="card-title font-weight-bold">Rule Yang Digunakan</h3>
								<div class="header-elements">
									<div class="list-icons">
										<a class="list-icons-item" data-action="collapse"></a>

									</div>
								</div>
							</div>

							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th class="text-uppercase font-weight-bold">#</th>
												<th class="text-uppercase font-weight-bold">Durasi</th>
												<th class="text-uppercase font-weight-bold">Gejala</th>
												<th class="text-uppercase font-weight-bold">Intensitas</th>
												<th class="text-uppercase font-weight-bold">Output</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1;
											foreach ($listRule as $vals) : ?>
												<tr>
													<td><?= $no++ ?></td>
													<td class="text-uppercase"><?= $vals['lokasi'] ?></td>
													<td class="text-uppercase"><?= $vals['luas_tanah'] ?></td>
													<td class="text-uppercase"><?= $vals['tipe_rumah'] ?></td>
													<td class="text-uppercase font-weight-bold"><?= $vals['output'] ?></td>
												</tr>


											<?php endforeach; ?>



										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
					<!-- /form layouts -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<div class="navbar navbar-expand-lg navbar-light">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>

					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2020 Tubes Artificial Intelligence - Fasilitas Kesehatan ( Penentuan Covid-19 dengan Fuzzy Mamdani )
						</span>
						</ul>
					</div>
				</div>
				<!-- /footer -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

</body>

</html>