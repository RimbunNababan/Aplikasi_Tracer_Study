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
        .chat-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            

        }

        .chat-row .chat-link{
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 1rem ;

        }

        .chat-box {
            width: 200px;
            height: 200px;
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 25px;
        }
        .chat-box img{
            width: 200px;
            height: 200px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .chat-link {
            display: block;
            padding: 5px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            margin-bottom: 5px;
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
						<h1 class="h3 d-inline align-middle">AlumChat</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html"></a>
					</div>
						<nav class="navbar navbar-expand navbar-light navbar-bg">
							<div class="mb-3">
								<h1 class="h3 d-inline align-middle">Forum Alumni Chat</h1>
								</div>	
						</nav>
				</div>
			
				<div class="chat-container">
					<div class="chat-row">
						<div class="chat-box">
							<img src="image/wa2.png">
							<a class="chat-link" href="https://chat.whatsapp.com/EslS9CEAPbB7qOYiMucgse">Angkatan 2014</a>
						</div>
						<div class="chat-box">
							<img src="image/wa2.png">
							<a class="chat-link" href="https://chat.whatsapp.com/DzE65leGgFKFnjfABFjdQE">Angkatan 2017</a>
						</div>
					</div>
					<div class="chat-row">
						<div class="chat-box">
							<img src="image/wa2.png">
							<a class="chat-link" href="https://chat.whatsapp.com/CYF2kwRR5L0AimAqN4qITy">Angkatan 2018</a>
						</div>
						<div class="chat-box">
							<img src="image/wa2.png">
							<a class="chat-link" href="https://chat.whatsapp.com/BdEEUdnIdSH9qs0crFFMV4">Angkatan 2019</a>
						</div>
					</div>
				</div>
			</main>

	<script src="js/app.js"></script>

</body>

</html>