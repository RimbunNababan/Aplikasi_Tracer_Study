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
$Perusahaan=$_POST['txtperusahaan'];
$jabatan=$_POST['txtjabatan'];
$tahun_mulai=$_POST['txttahunmulai'];
$tahun_henti=$_POST['txttahunhenti'];
$deskripsi=$_POST['txtdeskripsi'];




// Mengeksekusi query untuk menyimpan data ke database
$sql="insert into pekerjaan values('210820','$Perusahaan','$jabatan','$tahun_mulai','$tahun_henti','$deskripsi')";
if ($conn->query($sql) === TRUE) {
  echo "Data Berhasil disimpan";
   } else {
    echo " Error: " . $sql . "<br>" . mysqli_error($conn);
   }

?>