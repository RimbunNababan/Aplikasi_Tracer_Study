<?php
// Konfigurasi koneksi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tracerstudy';

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}


// Mengambil data dari form
$Nama=$_POST['nama'];


// Mengeksekusi query untuk menyimpan data ke database
$sql="insert into penggalangan dana values('1','$Nama')";
if ($conn->query($sql) === TRUE) {
  echo "Data Berhasil disimpan";
   } else {
    echo " Error: " . $sql . "<br>" . mysqli_error($conn);
   }

?>