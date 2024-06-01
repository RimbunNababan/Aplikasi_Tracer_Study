<?php 
include 'config.php';
$id = $_POST['NPM'];
$agama = $_POST['Agama'];

if(isset($_POST['ubah_foto'])){
$foto = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "gambar/".$fotobaru;
if(move_uploaded_file($tmp, $path)){
$query = "SELECT * FROM alumni WHERE NPM='".$id."'";
$sql = mysqli_query($koneksi, $query)or die(mysql_error());
$data = mysqli_fetch_array($sql);
 if(is_file("gambar/".$data['gambar'])) // Jika foto ada
      unlink("gambar/".$data['gambar']);


$query = "update produk set Agama='$agama', gambar='$fotobaru', where NPM='$id'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){
 header("location: lihat_data.php"); // Redirect ke halaman index.php
    }
    else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='ubah_data.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='ubah_data.php'>Kembali Ke Form</a>";
  }
}
else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "update produk set Agama='$agama', gambar='$fotobaru', where NPM='$id'";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: lihat_data.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='ubah_data.php'>Kembali Ke Form</a>";
  }
}
?>