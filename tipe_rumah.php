<?php error_reporting(0);
include 'fuzzifikasi.php';
include 'get_rules.php';
include 'inferensi.php';
include 'defuzzyfikasi.php';
include 'koneksi.php';

//var_dump($def);
$temp_durasi = $_POST['durasi'];
$temp_gejala = $_POST['gejala'];
$temp_intensitas = $_POST['intensitas'];
$durasi = durasi($temp_durasi);
$gejala = gejala($temp_gejala);
$intensitas = intensitas($temp_intensitas);
//var_dump($gejala, $intensitas, $durasi);
//die;
//var_dump($def);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Covid-19 Web-base Test</title>

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
	<style>
		#tabel .mynumber {
			display: none;
		}

		#tabel2 .mynumber2 {
			display: none;
		}
	</style>
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
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
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

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="assets/global_assets/images/image.png" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">Administrator</div>

							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header">
							<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
						</li>
						<li class="nav-item">
							<a href="Dashboard" class="nav-link">
								<i class="icon-home4"></i>
								<span>Dashboard</span>
							</a>
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
						<hr style="border: 1px solid white !important; width:250px;">
						<!-- <li class="nav-item">
							<a href="../full/changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Covid-19 Daily Report</span>

							</a>
						</li> -->
						<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">
			<div class="card mt-5">
				<div class="card-header header-elements-inline">
					<h5 class="card-title font-weight-bold">Tabel Lokasi Rumah</h5>
					<div class="header-elements">
						<div class="list-icons">
							<a class="list-icons-item" data-action="collapse"></a>

						</div>
					</div>
				</div>

				<div class="card-body">
					<a href="" class="btn btn-primary mb-3">+ Tambah Luas Tanah</a>
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Jenis Rumah</th>
								<th scope="col">Ukuran</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							$data_rumah = mysqli_query($koneksi, "select * from tipe_rumah");
							while ($data = mysqli_fetch_array($data_rumah)) { ?>
								<tr>
									<th scope="row"><?= $no++ ?>.</th>
									<td><?= $data['jenis_tiperumah'] ?></td>
									<td><?= $data['ukuran_tipe'] ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>


			<!-- Content area -->
			<div class="content">

				<!-- Basic card -->


				<!-- Basic table -->


				<!-- Form layouts -->
				<div class="row">

					<div class="col-md-12">

						<!-- Vertical form -->
						<?php if (isset($_POST['Submit'])) : ?>
							<?php
							$temp_durasi = $_POST['durasi'];
							$temp_gejala = $_POST['gejala'];
							$temp_intensitas = $_POST['intensitas'];
							//echo $temp_durasi .' '. $temp_gejala .' '. $temp_intensitas;
							$durasi = durasi($temp_durasi);
							$gejala = gejala($temp_gejala);
							$intensitas = intensitas($temp_intensitas);
							//	$inferensi = inferensi($durasi, $gejala, $intensitas);
							//$tabel = tabel($no,$durasi,$gejala,$intensitas,$durasi);
							//var_dump($tabel);


							?>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title font-weight-bold">Nilai Input</h5>
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
													<th class="text-uppercase font-weight-bold">Durasi</th>
													<th class="text-uppercase font-weight-bold">Gejala</th>
													<th class="text-uppercase font-weight-bold">Intensitas</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><?= $temp_durasi ?></td>
													<td><?= $temp_gejala ?></td>
													<td><?= $temp_intensitas ?></td>

												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title font-weight-bold">Nilai Fuzzyfikasi</h5>
									<div class="header-elements">
										<div class="list-icons">
											<a class="list-icons-item" data-action="collapse"></a>


										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="row">
										<div class="col-md-4">
											<div class="table-responsive">
												<table class="table table-striped">
													<h3 class="text-uppercase text-center font-weight-bold">Durasi</h3>
													<thead>
														<tr>
															<th class="text-uppercase font-weight-bold">NILAI</th>
															<th class="text-uppercase font-weight-bold">OUTPUT</th>
														</tr>
													</thead>
													<tbody>
														<?php $no = 1;
														foreach ($durasi as $vals) : ?>
															<tr>
																<td class="text-uppercase"><?= $vals['nilai'] ?></td>
																<td class="text-uppercase"><?= $vals['kategori'] ?></td>
															</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-4">
											<div class="table-responsive">
												<table class="table table-striped">
													<h3 class="text-uppercase text-center font-weight-bold">Gejala</h3>
													<thead>
														<tr>
															<th class="text-uppercase font-weight-bold">NILAI</th>
															<th class="text-uppercase font-weight-bold">OUTPUT</th>
														</tr>
													</thead>
													<tbody>
														<?php $no = 1;
														foreach ($gejala as $vals) : ?>
															<tr>
																<td class="text-uppercase"><?= $vals['nilai'] ?></td>
																<td class="text-uppercase"><?= $vals['kategori'] ?></td>
															</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
										<div class="col-md-4">
											<div class="table-responsive">
												<table class="table table-striped">
													<h3 class="text-uppercase text-center font-weight-bold">intensitas</h3>
													<thead>
														<tr>
															<th class="text-uppercase font-weight-bold">NILAI</th>
															<th class="text-uppercase font-weight-bold">output</th>
														</tr>
													</thead>
													<tbody>
														<?php $no = 1;
														foreach ($intensitas as $vals) : ?>
															<tr>
																<td class="text-uppercase"><?= $vals['nilai'] ?></td>
																<td class="text-uppercase"><?= $vals['kategori'] ?></td>
															</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title font-weight-bold">Rules Yang Digunakan</h5>
									<div class="header-elements">
										<div class="list-icons">
											<a class="list-icons-item" data-action="collapse"></a>


										</div>
									</div>
								</div>

								<div class="card-body">
									<div id="tabel">
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

													<?php
													$tabel = inferensi($durasi, $gejala, $intensitas);
													$def = defuzzifikasi($tabel);

													?>


												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title font-weight-bold">Y*</h5>
									<div class="header-elements">
										<div class="list-icons">
											<a class="list-icons-item" data-action="collapse"></a>


										</div>
									</div>
								</div>

								<div class="card-body">
									<div class="table-responsive" id="tabel2">
										<table class="table table-striped">

											<thead>
												<tr>
													<th class="text-uppercase font-weight-bold">Pembilang</th>
													<th class="text-uppercase font-weight-bold">Penyebut</th>
												</tr>
											</thead>
											<tbody>

												<?php

												$penyebut = defuzzifikasi($tabel);

												?>


											</tbody>
										</table>
									</div>
								</div>
							</div>




							<div class="card">
								<div class="card-header header-elements-inline">
									<h5 class="card-title font-weight-bold">Nilai Kelayakan</h5>
									<div class="header-elements">
										<div class="list-icons">
											<a class="list-icons-item" data-action="collapse"></a>


										</div>
									</div>
								</div>

								<div class="card-body">
									<h3 class="font-weight-bold"><?php echo $def; ?></h3>
								</div>
							</div>


						<?php endif; ?>

						<!-- /vertical form -->

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
	<script>
		let divs = document.getElementById('tabel');

		for (let x = 0; x < divs.length; x++) {
			let div = divs[x];
			let content = div.innerHTML.trim();

			if (content == '65.86') {
				div.style.display = 'none';
			}
		}
	</script>
</body>

</html>