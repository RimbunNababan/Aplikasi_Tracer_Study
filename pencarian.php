<?php
// Koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tracerstudy';
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Mengambil data NPM dari parameter GET
    $NPM = $_GET['NPM'];

    // Query untuk mencari data berdasarkan NPM
    $sql = "SELECT * FROM alumni WHERE NPM = '$NPM'";
    $result = $conn->query($sql);

    // Ambil data dan simpan dalam array
    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    // Mengirimkan data dalam format JSON
    echo json_encode($data);
}

// Menutup koneksi database
$conn->close();
?>
