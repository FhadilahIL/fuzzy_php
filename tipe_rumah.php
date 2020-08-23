<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tipe Rumah - Menghitung Kelayakan Rumah</title>

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
							<a href="perhitungan.php" class="nav-link"><i class="icon-home4"></i><span>Perhitungan Fuzzy</span></a>
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
			<div class="card mt-5">
				<div class="card-header header-elements-inline">
					<h5 class="card-title font-weight-bold">Tabel Tipe Rumah</h5>
					<div class="header-elements">
						<div class="list-icons">
							<a class="list-icons-item" data-action="collapse"></a>

						</div>
					</div>
				</div>

				<div class="card-body">
					<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#staticT">+ Tambah Tipe Rumah</button>
					<table class="table table-bordered">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Jenis Rumah</th>
								<th scope="col">Ukuran</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							$data_rumah = mysqli_query($koneksi, "select * from tipe_rumah");
							while ($data = mysqli_fetch_array($data_rumah)) { ?>
								<tr>
									<th scope="row"><?= $no++ ?>.</th>
									<td><?= $data['jenis_tiperumah'] ?></td>
									<td><?= $data['ukuran_tipe'] ?> M<sup>2</sup></td>
									<td>
										<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#staticE<?= $data['id_tipe_rumah'] ?>">Edit</button>
										<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticD<?= $data['id_tipe_rumah'] ?>">Delete</button>
									</td>
									<!-- Modal Edit -->
									<div class="modal fade" id="staticE<?= $data['id_tipe_rumah'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Ubah Data Tipe Rumah <strong><?= $data['jenis_tiperumah'] ?></strong></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form method="POST" action="update_tipe_rumah.php">
														<div class="form-group row">
															<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Tipe Rumah</label>
															<div class="col-sm-10">
																<input type="text" class="form-control" name="jenis_tipe_rumah" value="<?= $data['jenis_tiperumah'] ?>" required>
																<input type="hidden" class="form-control" name="id_tipe_rumah" value="<?= $data['id_tipe_rumah'] ?>" required>
															</div>
														</div>
														<div class="form-group row">
															<label for="inputEmail3" class="col-sm-2 col-form-label">Luas Rumah</label>
															<div class="col-sm-10">
																<input type="number" class="form-control" name="luas_rumah" value="<?= $data['ukuran_tipe'] ?>" required>
															</div>
														</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Ya, Update</button>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- Modal Hapus -->
									<div class="modal fade" id="staticD<?= $data['id_tipe_rumah'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel">Hapus Data Tipe Rumah <strong><?= $data['jenis_tiperumah'] ?></strong></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p>Apakah Anda Yakin Ingin Menghapus Data Tipe Rumah <strong><?= $data['jenis_tiperumah'] ?></strong> dengan Luas Rumah <strong><?= $data['ukuran_tipe'] ?> M<sup>2</sup></strong> ?</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<a href="delete_tipe_rumah.php?id=<?= $data['id_tipe_rumah'] ?>" class="btn btn-primary">Ya, Delete</a>
												</div>
											</div>
										</div>
									</div>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<!-- Modal Tambah -->
					<div class="modal fade" id="staticT" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Tambah Data Tipe Rumah</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form method="POST" action="tambah_tipe_rumah.php">
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Tipe Rumah</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="jenis_tipe_rumah" required>
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">Luas Rumah</label>
											<div class="col-sm-10">
												<input type="number" class="form-control" name="luas_rumah" required>
											</div>
										</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Ya, Simpan Data</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

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