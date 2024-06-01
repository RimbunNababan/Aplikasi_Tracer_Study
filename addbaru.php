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
$npm=$_POST['txtnpm'];
$Nama=$_POST['txtnama'];
$Fakultas=$_POST['txtfakultas'];
$prodi=$_POST['txtprodi'];
$jenis_kelamin=$_POST['jeniskelamin'];
$Tempat_Lahir=$_POST['txttempatlahir'];
$Tanggal_Lahir=$_POST['txttanggallahir'];
$Agama=$_POST['txtagama'];
$Tahun_Masuk=$_POST['txtmasuk'];
$Tahun_Lulus=$_POST['txtlulus'];
$Alamat=$_POST['txtalamat'];
$Desa=$_POST['txtdesa'];
$Kecamatan=$_POST['txtkecamatan'];
$Kota=$_POST['txtkota'];
$Provinsi=$_POST['txtprovinsi'];
$Pendidikan=$_POST['txtpendidikan'];

// Mengeksekusi query untuk menyimpan data ke database
$sql="insert into alumni values('$npm','1','$Nama','$Fakultas','$prodi','$jenis_kelamin','$Tempat_Lahir','$Tanggal_Lahir','$Agama','$Tahun_Masuk','$Tahun_Lulus','$Alamat','$Desa','$Kecamatan','$Kota','$Provinsi','$Pendidikan')";
if ($conn->query($sql) === TRUE) {
  echo "Data Berhasil disimpan";
   } else {
    echo " Error: " . $sql . "<br>" . mysqli_error($conn);
   }

?>