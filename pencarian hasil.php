

<!DOCTYPE html>
<html>
<head>
  <title>tracerstudy.ac.id</title>
  <link rel="stylesheet" href="css/style2.css">
  <link rel="canonical" href="https://demo-basic.adminkit.io/p1.html" />
  <link rel="shortcut icon" href="img/icons/LOGO UNIKA.png" />
  <style>
    /* CSS untuk menampilkan tabel di tengah halaman */
    .table-container {
      display: flex;
      justify-content: center;
     
    }

    /* CSS untuk mengatur tampilan tabel */
    table {
      width: 80%;
      border-collapse: collapse;
      margin-top: 100px;
      margin-bottom:2rem;
      margin-right:12rem;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
    img{
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="logo">
    <a class="sidebar-brand" href="h.html"></a>
    <img src="image/gambar/logo1.png" width="50" height="50">
    <div class="unika">
      <h2>Universitas Katolik<br>Santo Thomas Medan</h2>
    </div>
  </div>
  <div class="nav1">
    <a href="home.html">Home</a>
    <div class="link-wrapper">
      <a href="home.html">Tracer Study</a>
      <ul class="options">
        <li><a href="Hasil Tracer Study.html">Hasil Tracer Study</a></li>
      </ul>
    </div>
    <a href="alumnijobboard.html">Alumni Job Board</a>
    <div class="link-wrapper">
      <a href="home.html">Dana Alumni Peduli </a>
      <ul class="options">
        <li><a href="laporandana.html">Laporan Dana </a></li>
      </ul>
    </div>
    <a href="topgraduates.html">Top Graduates</a>
    <a href="login.php">Login</a>
  </div>
</div>
<hr>
<?php
include 'config.php';

$per_hal = 3;
$jumlah_record = mysqli_query($koneksi, "SELECT * from hasil_tracer_study");
$jum = mysqli_num_rows($jumlah_record);
$halaman = ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;

?>
<div class="table-container">
<?php
if (isset($_GET['cari'])) {
  $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
  $query = "SELECT * FROM hasil_tracer_study WHERE Nama_laporan LIKE '%$cari%'";
  $hasil_tracer_study = mysqli_query($koneksi, $query);
  $count = mysqli_num_rows($hasil_tracer_study);

  if ($count == 0) {
    echo '<div align="center"> <h5>Laporan dengan kata kunci "' . $_GET['cari'] . '" tidak ditemukan. </h5> </div>';
  } else {
    echo '<div ><b>Hasil pencarian dengan kata kunci "' . $_GET['cari'] . '"</b></div>';

    

    $no = 1;
    while ($b = mysqli_fetch_array($hasil_tracer_study)) {
      echo '
      <table>
            <tr>
          
         
          <td>' . $b['Nama_laporan'] . '</td>
          <td>
            <img src="image/cover.jpeg" alt="Image" width="100" height="100">
          </td>
          <td>
            <a href="https://drive.google.com/drive/my-drive?hl=id"><button id="download-btn" class="btn btn-info"  >Download PDF</a> </button> 
          </td>
        </tr>';
        
    }

    echo '</table>';

  }
} else {
  $hasil_tracer_study = mysqli_query($koneksi, "SELECT * FROM hasil_tracer_study ORDER BY id_hasil DESC LIMIT $start, $per_hal");

  echo '
    <table>
      <tr>
        <th>No.</th>
        <th>ID Hasil</th>
        <th>Nama Laporan</th>
        <th>Image</th>
        <th>Download</th>
      </tr>';

  $no = 1;
  while ($b = mysqli_fetch_array($hasil_tracer_study)) {
    echo '
      <tr>
        <td>' . $no++ . '</td>
        <td>' . $b['id_hasil'] . '</td>
        <td>' . $b['Nama_laporan'] . '</td>
        <td>
          <img src="image/cover.jpeg" alt="Image" width="100" height="100">
        </td>
        <td>
          <a href="https://drive.google.com/drive/my-drive?hl=id" class="btn btn-info">Download PDF</a>
        </td>
      </tr>';
  }

  echo '</table>';

  echo '
    <center>
      <ul class="pagination">';
  for ($x = 1; $x <= $halaman; $x++) {
    echo '<li><a href="?page=' . $x . '">' . $x . '</a></li>';
  }
  echo '
      </ul>
    </center>';
}

?>
</div>

<script src="js/app.js"></script>

<div class="bawah">
  <div class="logo">
    <img src="image/gambar/logo1.png" alt="fb1" style="width: 40px; height: 40px;">
    <div class="ust">
      Omnimbus Omnia<br>
      Become All things to all people
    </div>
    <div class="paragraf1">
      Kampus I<br>
      Jalan Setia Budi No.479F, Tanjung Sari Medan<br>
      Telepon : (061)8210161<br>
      Fax : (061)8213269
    </div>
    <div class="paragraf2">
      Kampus II<br>
      Jalan Mataram No.21 Perisah Hulu, Medan Baru-Kota Medan<br>
      Telepon : (061)8210161<br>
      Fax : (061)8213269
    </div>
    <div class="sosmed">
      <div class="ust">
        Sosial Media
      </div>
      <a href="fb://page/{https://web.facebook.com/UNIKASANTOTHOMAS/?_rdc=1&_rdr}">
        <img src="image/gambar/fb1.png" alt="Facebook" width="50" height="50">
      </a>

      <a href="instagram://user?username={https://www.instagram.com/unika.santothomas/}">
        <img src="image/gambar/ig1.png" alt="Instagram" width="50" height="50">
      </a>

      <a href="https://www.youtube.com/channel/{https://www.youtube.com/channel/UCLgwjRJxA96yeVlJY5rFhEg}">
        <img src="image/gambar/yt1.png" alt="YouTube" width="50" height="50">
      </a>
    </div>
    <div class="nav2">
    </div>
</body>
</html>
