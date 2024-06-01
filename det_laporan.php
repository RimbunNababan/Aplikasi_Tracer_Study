<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/LOGO UNIKA.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/laporan-dana.html" />

	<title>Dashboard>>>Notifikasi>>>Laporan Dana</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
			<img src="img/icons/LOGO UNIKA.png" width="20%" class="align-middle">
          <span class="align-middle">Tracer Study</span>
		  <span class="align-middle">UNIVERSITAS KATOLIK SANTO THOMAS MEDAN</span>
        </a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
			</li>

			<li class="sidebar-item active">
				<a class="sidebar-link" href="index.html">
	  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
	</a>
			</li>

			<li class="sidebar-header">
				Data Alumni
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="add_data.html">
	  <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Add Data</span>
	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="search_data.html">
	  <i class="align-middle" data-feather="search"></i> <span class="align-middle">Search Data</span>
	</a>
			</li>

			<li class="sidebar-header">
				Notifikasi
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="hasil-tracer-study.html">
	  <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Hasil Tracer Study</span>
	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="laporan-dana.html">
	  <i class="align-middle" data-feather="file"></i> <span class="align-middle">Laporan Dana</span>
	</a>
			</li>
		</ul>
</nav>

<div class="main">
	<nav class="navbar navbar-expand navbar-light navbar-bg">
		<a class="sidebar-toggle js-sidebar-toggle">
  <i class="hamburger align-self-center"></i>
</a>

		<div class="navbar-collapse collapse">
			<ul class="navbar-nav navbar-align">
				<li class="nav-item dropdown">
					<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
						<div class="position-relative">
							<i class="align-middle" data-feather="bell"></i>
							<span class="indicator">4</span>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
						<div class="dropdown-menu-header">
							4 New Notifications
						</div>
									<div class="list-group">
										<a href="search_data.html" class="list-group-item">
											<div class="row g-0 align-items-center">
												<div class="col-2">
													<i class="text-danger" data-feather="alert-circle"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">Update completed</div>
													<div class="text-muted small mt-1">190840057 Regina Siburian to complete the update.</div>
													<div class="text-muted small mt-1">30m ago</div>
												</div>
											</div>
										</a>
										<a href="laporan-dana.html" class="list-group-item">
											<div class="row g-0 align-items-center">
												<div class="col-2">
													<i class="text-warning" data-feather="credit-card"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">Confirm Receipt</div>
													<div class="text-muted small mt-1">Servin Oktavia Sinaga to UKST Alumni +100.000,00</div>
													<div class="text-muted small mt-1">2h ago</div>
												</div>
											</div>
										</a>
										<a href="laporan-dana.html" class="list-group-item">
											<div class="row g-0 align-items-center">
												<div class="col-2">
													<i class="text-primary" data-feather="credit-card"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">Confirm Receipt</div>
													<div class="text-muted small mt-1">Benedictius Samosir to UKST Alumni +50.000,00</div>
													<div class="text-muted small mt-1">5h ago</div>
												</div>
											</div>
										</a>
										<a href="search_data.html" class="list-group-item">
											<div class="row g-0 align-items-center">
												<div class="col-2">
													<i class="text-success" data-feather="alert-circle"></i>
												</div>
												<div class="col-10">
													<div class="text-dark">Update completed</div>
													<div class="text-muted small mt-1">190840053 Delima Sinaga to complete the update.</div>
													<div class="text-muted small mt-1">14h ago</div>
												</div>
											</div>
										</a>
									</div>
									<div class="dropdown-menu-footer">
										<a href="index.html" class="text-muted">Show all notifications</a>
									</div>
								</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
		<i class="align-middle" data-feather="settings"></i>
	  </a>

					<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
		<img src="img/avatars/photoadmin.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Budi Galiring Nainggolan(Admin)</span>
	  </a>
					<div class="dropdown-menu dropdown-menu-end">
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="home.html">Log out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<main class="content">
		<div class="container-fluid p-0">

			<div class="mb-3">
				<h1 class="h3 d-inline align-middle">Dashboard>>>Notifikasi>>>Laporan Dana</h1>
			</div>
		</div>
		<nav class="navbar navbar-expand navbar-light navbar-bg">
			<div class="mb-3">
			<h1 class="h3 d-inline align-middle">DANA MASUK DIES NATALIES UNIKA-KE-39</h1>
			</div>  
		</nav>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
				<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Penggalangan Dana</h3>
				<a class="btn" href="laporan_dana.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

				<?php
				$id_pembayaran=mysqli_real_escape_string($koneksi, $_GET['id']);


				$det=mysqli_query($koneksi, "select * from pembayaran where id_pembayaran='$id_pembayaran'")or die(mysql_error());
				while($d=mysqli_fetch_array($det)){
					?>					
					<table class="table">
							<?php
							$NPM = $d['NPM'];
							$user = mysqli_query($koneksi, "SELECT * FROM user WHERE NPM = '$NPM'") or die(mysqli_error($koneksi));
							$u = mysqli_fetch_assoc($user);
						?>
						<tr>
							<td>Nama Penggalang Dana</td>
							<td><?php echo $u['nama'] ?></td>
						</tr>
						
						<?php
							$user = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran = '$id_pembayaran'") or die(mysqli_error($koneksi));
							$u = mysqli_fetch_assoc($user);
						?>
							<tr>
							<td>Jumlah Pembayaran</td>
							<td><?php echo $u['jumlah_pembayaran'] ?></td>
						</tr>
						<tr>
							<td>Bukti Pembayaran</td>
							<td><a href="det_gambar.php?id_pembayaran=<?php echo $d['id_pembayaran']?>&bukti_pembayaran=<?php echo $d['bukti_pembayaran'] ?>"><img src="<?php echo '../'.$d['bukti_pembayaran'];?>"style="width:330px;"/></a></td>
						</tr>
						<?php
							if($d['status'] == 'Belum Dikirim'){
						?>
						<tr>
							<td></td>
						<tr>
							<td>Nama Penggalangan Dana</td>
							<td><?php
								$id_galangdana = $d['id_galangdana'];
								$dana = mysqli_query($koneksi, "SELECT * FROM penggalangan dana WHERE id_galangdana = '$id_galangdana'") or die(mysqli_error($koneksi));
								$p = mysqli_fetch_assoc($dana);
								echo $p['nama_proyek']; 
							?></td>
						</tr>
						<?php
							}
						?>
					</table>
					<?php 
				}
				?>
					</div>
					<div class="card-body">
					</div>
				</div>
			</div>
		</div>
</div>
			</main>

	<script src="js/app.js"></script>


</body>

</html>