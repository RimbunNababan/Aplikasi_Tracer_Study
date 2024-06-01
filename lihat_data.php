<!DOCTYPE html>
<html lang="en">

<head>
	<title> tracerstudy.ac.id </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/LOGO UNIKA.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/add_data.html" />

	<title>Dashboard>>>Data Alumni>>>Add Data</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
        body {
            font-family: Arial, sans-serif;
        }
        
        h1 {
            text-align: center;
        }
        
        .profile-container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        
        .profile-picture {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .profile-picture img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        
        .profile-info {
            margin-bottom: 20px;
        }
        
        .profile-info label {
            font-weight: bold;
        }
        
        .profile-info input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        .profile-bio {
            text-align: justify;
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
				<a class="sidebar-link" href="ubah_data.php">
	   <span class="align-middle">Ubah Profil</span>
	</a>
			</li>

			<li class="sidebar-item">
            <a class="sidebar-link" href="lihat_data.php">
	  <span class="align-middle">lihat Profil</span>
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
						<h1 class="h3 d-inline align-middle">Dashboard>>>Profil>>>Lihat Profil</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html"></a>
					</div>
						<nav class="navbar navbar-expand navbar-light navbar-bg">
							<div class="mb-3">
							<h1 class="h3 d-inline align-middle">Lihat Profil</h1>
							</div>	
						</nav>
				</div>
                <?php 
                        include 'config.php';
                        ?>
                        <a class="btn" href="dashboard.html"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
                                <?php
                                $det=mysqli_query($koneksi, "select * from alumni")or die(mysql_error());
                                while($d=mysqli_fetch_array($det)){
                                    ?>					
                                    <table class="table">
                                        <tr>
                                            <td>NPM</td>
                                            <td><?php echo $d['NPM'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?php echo $d['Nama'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Fakultas</td>
                                            <td><?php echo $d['Fakultas'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Program Studi</td>
                                            <td><?php echo $d['Program_Studi'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><?php echo $d['Jenis_kelamin']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Lahir</td>
                                            <td><?php echo $d['Tempat_lahir']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td><?php echo $d['Tanggal_lahir']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Agama</td>
                                            <td><?php echo $d['Agama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Masuk</td>
                                            <td><?php echo $d['Tahun_masuk']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Lulus</td>
                                            <td><?php echo $d['Tahun_lulus']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Lengkap</td>
                                            <td><?php echo $d['alamat_leng']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kelurahan</td>
                                            <td><?php echo $d['kelurahan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td><?php echo $d['kecamatan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kabupaten</td>
                                            <td><?php echo $d['kabupaten']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi</td>
                                            <td><?php echo $d['provinsi']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pendidikan Terakhir</td>
                                            <td><?php echo $d['pendidikan_terakhir']; ?></td>
                                        </tr>
                                    </table>
                                    <?php 
                                }
                                ?>
			</main>

	<script src="js/app.js"></script>

</body>

</html>
