<?php
// Membuat koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$database = "tracerstudy";

$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama = $_POST['Nama'];
$email = $_POST['email'];
// ... mengambil field input lainnya sesuai kebutuhan

// Query untuk update data di database
$sql = "UPDATE alumni SET Nama='$nama', email='$email' WHERE id=1";
// ... sesuaikan "nama_tabel" dengan nama tabel yang sesuai di database
// ... sesuaikan "id=1" dengan kondisi yang sesuai untuk mengupdate data yang diinginkan

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Mengirim notifikasi ke admin via email
$adminEmail = "admin@example.com";
$subject = "Data berhasil diupdate";
$message = "Data dengan ID 1 berhasil diupdate.";

// Mengirim email
mail($adminEmail, $subject, $message)

$conn->close();
?>