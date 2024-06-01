<?php
global $koneksi;
//$koneksi = mysql_connect("localhost", "p1d3ti06", "JysuLqMF6Qrd1Jbe");//
$koneksi = mysqli_connect("localhost", "root", "",);
	if (!$koneksi) {
		die("Database connection problem");
	}
	//$db_use = mysql_select_db("p1d3ti06_db_pa1") or die("Select db problem!!");//
	$db_use = mysqli_select_db($koneksi, "tracerstudy") or die("Select db problem !!");
?>