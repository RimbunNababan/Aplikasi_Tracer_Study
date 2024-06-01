 <!DOCTYPE html>
<html lang="en">

<head>
	<title> tracerstudy.ac.id</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/LOGO UNIKA.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/add_data.html" />

	<title>tracerstudy.ac.id</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
	
                            .payment-instruction {
                                width: 400px;
                                margin: 0 auto;
                                text-align: center;
                            }
                            .payment-methods {
                                margin-top: 20px;
                                text-align: center;
                            }
                            .payment-methods img {
                                width: 50px;
                                height: 50px;
                                margin: 10px;
                            }
                            .payment-container {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                gap: 20px;
                                border: 2px solid black;
                               
                            }
                    
                            .payment-method {
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                            }
                    
                            .payment-method img {
                                width: 80px;
                                height: 80px;
                            }
                    
                            .payment-method label {
                                margin-top: 10px;
                            }
                            .payment-instruction button {
                                color: brown;
                                background-color: blanchedalmond;
                            }
                      
                       
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
				<a class="sidebar-link" href="add_data.php">
	  		 <span class="align-middle">Ubah Profil</span>
	</a>
			</li>

			<li class="sidebar-item">
				<a class="sidebar-link" href="Lihat_data.php">
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

					
								<a class="dropdown-item" href="../static/galangdana.html">Log out</a>
							
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
<style>
	h3{
		color: black
	};
	.hero-unit {
	background: #fff url(img/bg-k10.png);
	border-left: 4px solid brown;
	border-right: 4px solid brown;
	border-top: 4px solid brown;
	border-bottom: 4px solid brown;
	padding: 13px 13px 13px 15px;
	font-style: italic;
	margin: 20px auto;
	-webkit-border-radius: 0px;
     -moz-border-radius: 0px;
          border-radius: 0px;
	font-size: 14px !important;
}
</style>


<div id="wrapper">
	<div class="container" style="background-color: silver; padding-top: 20px">
		<div class="table-responsive">
			<div class="title"><h3>Pembayaran Selesai</h3>
				<div class="hero-unit">Terima kasih Anda sudah Galang Dana Di Universitas Katolik Santo Thomas Medan dan berikut ini adalah data yang perlu anda catat.</div>
				<div class="hero-unit">
					<?php
					include 'config.php';
					$alumni = mysqli_query($koneksi, "SELECT * FROM alumni") or die(mysqli_error($koneksi));
					$p = mysqli_fetch_array($alumni);
					// Pastikan bahwa $_POST['finish'] telah di-set sebelum menggunakan $_POST
					if (isset($_POST['finish'])) {
						$user_id = $p['NPM'];
						$nama = $p['Nama'];
						$galangdana = mysqli_query($koneksi, "SELECT * FROM galangdana ") or die(mysqli_error($koneksi));
    					$p = mysqli_fetch_array($galangdana);
						$id_galangdana = $p['id_galangdana'];
						// Lakukan koneksi ke database sebelum menggunakan mysqli_query
						$koneksi = mysqli_connect('localhost', 'root', '', 'tracerstudy');
						if (!$koneksi) {
							die("Koneksi database gagal: " . mysqli_connect_error());
						}

						$query = "SELECT * FROM galangdana WHERE id_galangdana = '$id_galangdana'";
						$galangdana = mysqli_query($koneksi, $query);
						$p = mysqli_fetch_array($galangdana);
						$nama_galangdana = $p['nama_proyek'];
						$jumlah = $_POST['txtjumlah'];
						$tanggal = $_POST['txttgl'];
						$bukti = 'savebayar/' . $nama_galangdana . '.jpg';

						if ($_FILES['bukti']['name']) {
							move_uploaded_file($_FILES['bukti']['tmp_name'], 'savebayar/' . $nama_galangdana . '.jpg');
							$bukti = 'pembayaran/' . $nama_galangdana . '.jpg';
						}

						if (!$bukti) {
							echo "<script>alert('Bukti pembayaran belum diupload $nama_galangdana!'); window.location = 'savebayar.php'</script>";
						}

						date_default_timezone_set('Asia/Jakarta');
						$tanggal = date('Y-m-d');
						$sql = mysqli_query($koneksi, "INSERT INTO pembayaran VALUES('', '$jumlah', '$tanggal', '$bukti', '$user_id', '$id_galangdana', 'Sukses')") or die(mysqli_error($koneksi));
						$galangdana = mysqli_query($koneksi, "SELECT * FROM galangdana WHERE id_galangdana = '$id_galangdana'");
						$user_id = mysqli_query($koneksi, "SELECT * FROM alumni WHERE NPM = '$user_id'");
						$user_id = mysqli_fetch_assoc($user_id);
						$data = mysqli_fetch_array($galangdana);

						if (!$sql) {
							echo 'Gagal!';
						} else {
							echo 'Total biaya Galang Dana adalah Rp. ' . number_format($jumlah) . ',- <br>';
							echo 'Terima Kasih sudah melakukan Galang Dana<br><br>';
							echo 'NPM : ' . $user_id['NPM'] . '<br>';
							echo 'Nama Lengkap : ' . $_SESSION['Nama'] . '<br>';
							echo 'Tanggal&nbsp&nbsp&nbsp&nbsp : ' . $tanggal . '<br>';
							unset($_SESSION['NPM']);
							unset($_SESSION['id_galangdana']);
							unset($_SESSION['tanggal_pembayaran']);
							unset($_SESSION['jumlah_pembayaran']);
						}
					} else {
						header("Location: dashboard.html");
					}
					?>
				</div>
		</div>
	</div>
		<center><a href="dashboard.html" style="color: black;font-size: 12px"  class="btn btn-sm btn-primary"><b>Kembali ke Halaman Utama</b></a></center>
        </div>

        </div>
                    
                    
	<script src="js/app.js"></script>

</body>

</html>