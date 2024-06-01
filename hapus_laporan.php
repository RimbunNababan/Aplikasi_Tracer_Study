<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi, "delete from pembayaran where id_pembayaran='$id'");
header("location:laporan_dana.php");

?>