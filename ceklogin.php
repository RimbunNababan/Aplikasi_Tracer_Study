<?php
	session_start();
	include 'config.php';
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$query = mysqli_query($koneksi, "SELECT * FROM username WHERE username='$username' AND password='$pass'")or die(mysql_error());
	if(mysqli_num_rows($query)==0){
		echo "<script>alert('Username dan Password tidak valid.'); window.location = 'login.php'</script>";
	}else{
		$_SESSION['username']=$username;
		$_SESSION['masuk']=TRUE;
		$row=mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['username_id']=$row['username_id'];

		if ($row['username_id']==1) {
			echo "<script>alert('Selamat datang $username'); window.location = 'admin.php'</script>";	
		}
		if ($row['username_id']==2) {
			echo "<script>alert('Selamat datang $username'); window.location = 'dashboard.php'</script>";
	}else{
		echo "<script>alert('Username dan Password tidak valid.'); window.location = 'login.php'</script>";
	}
}
	?>