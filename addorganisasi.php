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
$Organisasi=$_POST['txtorganisasi'];
$jabatan=$_POST['txtjabatan'];
$tahun_bergabung=$_POST['txttahunbergabung'];
$deskripsi=$_POST['txtdeskripsi'];




// Mengeksekusi query untuk menyimpan data ke database
$sql="insert into organisasi values('1','$Organisasi','$jabatan','$tahun_bergabung','$deskripsi')";
if ($conn->query($sql) === TRUE) {
  echo "Data Berhasil disimpan";
   } else {
    echo " Error: " . $sql . "<br>" . mysqli_error($conn);
   }

?>