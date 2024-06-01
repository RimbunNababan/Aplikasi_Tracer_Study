<!DOCTYPE html>
<html lang="en">

<head>
	<title> tracerstudy.ac.id</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/LOGO UNIKA.png" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link rel="canonical" href="https://demo-basic.adminkit.io/add_data.html" />

	<title>Dashboard>>>Data Alumni>>>ubah Data</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
	
	</style>
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
				<a class="sidebar-link" href="dashboard.php">
	   <span class="align-middle">Dashboard</span>
	</a>
			</li>

			<li class="sidebar-header">
				Profil 
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="ubah_data.php">
	  		 <span class="align-middle">Ubah Profil</span>
	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="lihat_data.php">
	  </i> <span class="align-middle">lihat Profil</span>
	</a>
			</li>

			
			<li class="sidebar-header">
				Chat
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="alumchat.php">
	   <span class="align-middle">AlumChat</span>
	</a>
			</li>
			<li class="sidebar-header">
				Dana Alumni Peduli 
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="galangdana.php">
	   <span class="align-middle">Metode Pembayaran</span>
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
									
									
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								
											<div class="list-group">
												<a href="#" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-2">
															<i class="text-danger" data-feather="alert-circle"></i>
														</div>
														
													</div>
												</a>
												<a href="#" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-2">
															<i class="text-warning" data-feather="credit-card"></i>
														</div>
														
													</div>
												</a>
												<a href="#" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-2">
															<i class="text-primary" data-feather="credit-card"></i>
														</div>
														
													</div>
												</a>
												<a href="#" class="list-group-item">
													<div class="row g-0 align-items-center">
														<div class="col-2">
															<i class="text-success" data-feather="alert-circle"></i>
														</div>
														
													</div>
												</a>
											</div>
											
										</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

					
								<a class="dropdown-item" href="../static/home.html">Log out</a>
							
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Dashboard>>>Profil>>>Ubah Profil</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html"></a>
					</div>
						<nav class="navbar navbar-expand navbar-light navbar-bg">
							<div class="mb-3">
							<i class="align-middle" data-feather="folder-plus"></i>
							<h1 class="h3 d-inline align-middle">Data Alumni</h1>
							</div>	
						</nav>
						<?php
							include 'config.php';
							$alumni = mysqli_query($koneksi, "SELECT * FROM alumni") or die(mysqli_error($koneksi));
							$p = mysqli_fetch_array($alumni);
						?>
						<form id="myForm">
						<form action="NPM=<?php echo $p['NPM'];?>" method="POST">
							<div class="form-group">
							<form action="update_data.php" method="post">
							  <label for="npm">NPM *</label><br>
                              <input disabled="disabled" type="" name="" value="<?php echo  $p['NPM']?>">
							</div>
							<div class="form-group">
							  <label for="nama">Nama *</label><br>
                              <td><input disabled="disabled" type="" name="" value="<?php echo  $p['Nama']?>"></td>
							</div>
							<div class="form-group">
							  <label for="fakultas">Fakultas *</label><br>
							  <td><input disabled="disabled" type="" name="" value="<?php echo  $p['Fakultas']?>"></td>
							</div>
							<div class="form-group">
							  <label for="prodi">Program Studi *</label><br>
							  <td><input disabled="disabled" type="" name="" value="<?php echo  $p['Program_Studi']?>"></td>
							</div>
							<div class="form-group">
							  <label>Jenis Kelamin *</label><br>
							  <td><input disabled="disabled" type="" name="" value="<?php echo  $p['Jenis_kelamin']?>"></td>
							</div>
							<div class="form-group">
							  <label for="tempatlahir">Tempat Lahir *</label><br>
							  <td><input disabled="disabled" type="" name="" value="<?php echo  $p['Tempat_lahir']?>"></td>
							</div>
							<div class="form-group">
							  <label for="tanggallahir">Tanggal Lahir *</label><br>
							  <td><input disabled="disabled" type="" name="" value="<?php echo  $p['Tanggal_lahir']?>"></td>
							</div>
							<div class="form-group">
							  <label>Agama *</label><br>
							  <td><input type="text" name="Agama" value="<?php echo  $p['Agama']?>"></td>
							</div>
							
							  Tahun Masuk *<br><td><input disabled="disabled" type="" name="" value="<?php echo  $p['Tahun_masuk']?>"></td><br>
							  <label for="tahunlulus" >Tahun Lulus *</label><br>
							  <td><input disabled="disabled" type="" name="" value="<?php echo  $p['Tahun_lulus']?>"></td>
							
							<div>
							  <label for="alamat" class="form-label">Alamat Lengkap *</label><br>
							  <td><input disabled="disabled" type="" name="" value="<?php echo  $p['alamat_leng']?>"></td>
							</div>
								<div class="form-group">
								<label for="Kelurahan/desa">Kelurahan/desa *</label><br>
								<td><input disabled="disabled" type="" name="" value="<?php echo  $p['kelurahan']?>"></td>
								</div>
							</div>
							<div class="form-group">
								<label for="Kecamatan">Kecamatan *</label><br>
								<td><input disabled="disabled" type="" name="" value="<?php echo  $p['kecamatan']?>"></td>
							</div>
							<div class="form-group">
							<label for="Kota/Kabupaten">Kota/Kabupaten *</label><br>
							<td><input disabled="disabled" type="" name="" value="<?php echo  $p['kabupaten']?>"></td>
						</div>
						<div class="form-group">
							<label for="Provinsi">Provinsi *</label><br>
							<td><input disabled="disabled" type="" name="" value="<?php echo  $p['provinsi']?>"></td>
						</div>
						<div class="form-group">
							<label for="Pendidikanterakhir">Pendidikan Terakhir *</label><br>
							<td><input disabled="disabled" type="" name="" value="<?php echo  $p['pendidikan_terakhir']?>"></td>
						</div>
									 <label for="foto">Pilih Foto:</label>
									<input type="file" id="foto" name="foto">
									<br>
									<button class="btn btn-success">Simpan</button>
								</form>	  

									 <nav class="navbar navbar-expand navbar-light navbar-bg">
										<div class="mb-3">
										<i class="align-middle" data-feather="folder-plus"></i>
										<h1 class="h3 d-inline align-middle">Pendidikan</h1>
										</div>	
									</nav>
								<div class="row">
									<div class="col-12 col-lg-6">
										<form method="post" action="addpendidikan.php">
										<div class="card">
											<div class="card-body">
										Nama Institusi Pendidikan *<input type="text" class="form-control" placeholder="Universitas Katolik Santo Thomas" name="txtnama">
										Fakultas *<input type="text" class="form-control" placeholder="masukkan fakultas" name="txtfakultas">
										Program Studi *<input type="text" class="form-control" placeholder="masukkan prodi" name="txtprodi">
										Tahun Masuk *<input type="text" class="form-control" placeholder="masukkan tahun masuk" name="txtmasuk">
										Tahun Lulus *<input type="text" class="form-control" placeholder="masukkan tahun lulus" name="txtlulus">
										Gelar Pendidikan *<input type="text" class="form-control" placeholder="masukkan gelar terakhir" name="txtgelar">
										<button class="btn btn-success">Simpan</button>
										</div>
										</div>
									</form>
										</div>
										</div>
									
									
										<nav class="navbar navbar-expand navbar-light navbar-bg">
											
											<i class="align-middle" data-feather="folder-plus"></i>
											<h1 class="h3 d-inline align-middle">Riwayat Pekerjaan </h1>
												
										</nav>
									<div class="row">
										<form method="post" action="addkerja.php">
										
											<div class="card">
												<div class="card-body">
													Nama Perusahaan<input type="text" class="form-control" placeholder="Nama Perusahaan" name="txtperusahaan">
													Jabatan<input type="text" class="form-control" placeholder="Jabatan" name="txtjabatan">
													Tahun Mulai Bekerja <input type="text" class="form-control" placeholder="Tahun Mulai Bekerja" name="txttahunmulai">
													Tahun berhenti bekerja(jika ada) <input type="text" class="form-control" placeholder="" name="txttahunhenti">
													Deskripsi pekerjaan<input type="text" class="form-control" placeholder="" name="txtdeskripsi">
													<button class="btn btn-success">Simpan</button>
											</div>
											</div>
										</form>
											</div>
											<nav class="navbar navbar-expand navbar-light navbar-bg">
											
												<i class="align-middle" data-feather="folder-plus"></i>
												<h1 class="h3 d-inline align-middle">Riwayat Organisasi </h1>
													
											</nav>
										<div class="row">
											<form method="post" action="addorganisasi.php">
												<div class="card">
													<div class="card-body">
										Nama Organisasi<input type="text" class="form-control" placeholder="Nama Organisasi" name="txtorganisasi">		
										Jabatan<input type="text" class="form-control" placeholder="Jabatan" name="txtjabatan">
										Tahun Bergabung <input type="text" class="form-control" placeholder="Tahun Bergabung" name="txttahunbergabung">
										Deskripsi<input type="text" class="form-control" placeholder="" name="txtdeskripsi">
										<button class="btn btn-success">Simpan</button>
									
								</div>
							</div>
						</form>
						</form>
					</form>
						
						
						</form>
					</body>
					</html>
	<script src="js/app.js"></script>

</body>

</html>