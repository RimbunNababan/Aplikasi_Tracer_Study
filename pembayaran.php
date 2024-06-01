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

					
								<a class="dropdown-item" href="../static/index.php">Log out</a>
							
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					
                        
                            
                            <div id="wrapper">
								<div class="container" style="background-color: silver">
									<div class="table-responsive">
										<div class="title"><h3 style="margin-top: 70px;">Silahkan Isi Data Anda</h3></div>
										<div class="hero-unit">
										   <div class="unit"> Harap isi form ini sesuai dengan data anda</div>
                                           <?php
                                            include 'config.php';
											$galangdana = mysqli_query($koneksi, "SELECT * FROM galangdana ") or die(mysqli_error($koneksi));
    										$p = mysqli_fetch_array($galangdana);
                                           ?>
										   <h4>Jenis kegiatan  <?php echo $p['nama_proyek']?><h4>
										    <form method="POST" action="savebayar.php"> 
											Total dana anda RP. <input type="text" class="form-control" name="txtjumlah">
											Tanggal Pembayaran<input type="date" class="form-control" name="txttgl">
											<?php
                                            include 'config.php';
											$alumni = mysqli_query($koneksi, "SELECT * FROM alumni") or die(mysqli_error($koneksi));
											$p = mysqli_fetch_array($alumni);
											?>
											NPM <input disabled="disabled" type="" name="" value="<?php echo  $p['NPM']?>"><br>
											<?php
                                            include 'config.php';
											$galangdana = mysqli_query($koneksi, "SELECT * FROM galangdana ") or die(mysqli_error($koneksi));
    										$p = mysqli_fetch_array($galangdana);
                                           ?>
											ID_Galang Dana  <input disabled="disabled" type="" name="" value="<?php echo  $p['id_galangdana']?>"><br>
											<a href="galangdana.php" class="btn btn-primary" style="background: #4CAF50; margin-top: 10px;">Kembali</a>
											<button class="btn btn-success" style="background: #4CAF50; margin-top: 10px;">bayar</button>
											</div>
										</form>
										
									</div>
								</div>  
							</div>
							</div>      
							<style>
							  
							 .cont {
							  background-color: #f2f2f2;
							  padding: 5px 20px 15px 20px;
							  border: 1px solid lightgrey;
							  border-radius: 3px;
							}
							
							input[type=text] {
							  width: 100%;
							  margin-bottom: 20px;
							  padding: 12px;
							  border: 1px solid #ccc;
							  border-radius: 3px;
							}
							
							</style>
                    
                    
	<script src="js/app.js"></script>

</body>

</html>