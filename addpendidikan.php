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
$PT=$_POST['txtnama'];
$Fakultas=$_POST['txtfakultas'];
$Prodi=$_POST['txtprodi'];
$Tahun_Masuk=$_POST['txtmasuk'];
$Tahun_Lulus=$_POST['txtlulus'];
$Gelar=$_POST['txtgelar'];



// Mengeksekusi query untuk menyimpan data ke database
$sql="insert into pendidikan values('212121','$PT','$Fakultas','$Prodi','$Tahun_Masuk','$Tahun_Lulus','$Gelar')";
if ($conn->query($sql) === TRUE) {
  echo "Data Berhasil disimpan";
   } else {
    echo " Error: " . $sql . "<br>" . mysqli_error($conn);
   }

?>