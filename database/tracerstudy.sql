-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2023 pada 15.59
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracerstudy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(9) NOT NULL,
  `Nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Admin_id`, `Nama`) VALUES
(1, 'Budi Galiring Nainggolan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `NPM` int(9) NOT NULL,
  `Admin_id` int(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Program_Studi` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(40) NOT NULL,
  `Tempat_lahir` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Agama` varchar(20) NOT NULL,
  `Tahun_masuk` int(4) NOT NULL,
  `Tahun_lulus` int(4) NOT NULL,
  `alamat_leng` varchar(50) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`NPM`, `Admin_id`, `Nama`, `Fakultas`, `Program_Studi`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Agama`, `Tahun_masuk`, `Tahun_lulus`, `alamat_leng`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `pendidikan_terakhir`) VALUES
(60832001, 1, 'Bona Tua Pakpahan S.H, M.H', 'Hukum', 'Ilmu Hukum', 'Laki-Laki', 'Tambun', '1994-08-22', 'Kristen Katolik', 2006, 2010, 'Jl. Lingkar Mega Kuningan Kav. E 1.2 No. 1', 'RT.5/RW.2, Kuningan,', 'SetiaBudi', 'Jakarta Selatan', 'DKI Jakarta', 'S2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galangdana`
--

CREATE TABLE `galangdana` (
  `id_galangdana` int(9) NOT NULL,
  `nama_proyek` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galangdana`
--

INSERT INTO `galangdana` (`id_galangdana`, `nama_proyek`) VALUES
(11011, 'Dana Fikomz Events'),
(11012, 'Dana Natal Unika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_tracer_study`
--

CREATE TABLE `hasil_tracer_study` (
  `id_hasil` int(11) NOT NULL,
  `Nama_laporan` varchar(50) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_tracer_study`
--

INSERT INTO `hasil_tracer_study` (`id_hasil`, `Nama_laporan`, `file`) VALUES
(1001, 'Hasil Tracer Study UST 2020', ''),
(1002, 'Hasil Tracer Study UST 2021', ''),
(10024, 'Hasil Tracer Study UST 2022', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobboard`
--

CREATE TABLE `jobboard` (
  `id_job` int(11) NOT NULL,
  `Nama_Bidang_Pekerjaan` varchar(50) NOT NULL,
  `Nama_Perusahaan` varchar(50) NOT NULL,
  `Daerah_Perusahaan` varchar(50) NOT NULL,
  `Terakhir_Posting` varchar(50) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jobboard`
--

INSERT INTO `jobboard` (`id_job`, `Nama_Bidang_Pekerjaan`, `Nama_Perusahaan`, `Daerah_Perusahaan`, `Terakhir_Posting`, `gambar`) VALUES
(201, 'Programmer Intern', 'PT Sinergy Informasi Pratama jobs ', 'Yogyakarta', '1 hari yang lalu', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_dana`
--

CREATE TABLE `laporan_dana` (
  `id_laporan` int(11) NOT NULL,
  `Nama_laporandana` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_dana`
--

INSERT INTO `laporan_dana` (`id_laporan`, `Nama_laporandana`) VALUES
(101, 'Laporan Dana Fikom Famz Event 2020'),
(102, 'Laporan Dana Natal Unika'),
(103, 'Laporan Dana Dies Natalies Unika-39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifikasi`
--

CREATE TABLE `notifikasi` (
  `notifikasi_id` int(9) NOT NULL,
  `Message` varchar(30) NOT NULL,
  `Subjek` varchar(30) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(9) NOT NULL,
  `Nama_Organisasi` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `Tahun_Bergabung` year(4) NOT NULL,
  `Deskripsi_Kegiatan` varchar(50) NOT NULL,
  `NPM` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `Nama_Organisasi`, `jabatan`, `Tahun_Bergabung`, `Deskripsi_Kegiatan`, `NPM`) VALUES
(1, 'kitabisa', 'anggota', 2021, '-', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(9) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `Tanggal_MulaiBekerja` year(4) NOT NULL,
  `Tanggal_BerhentiBekerja` year(4) NOT NULL,
  `Deskripsi` varchar(50) NOT NULL,
  `NPM` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_perusahaan`, `jabatan`, `Tanggal_MulaiBekerja`, `Tanggal_BerhentiBekerja`, `Deskripsi`, `NPM`) VALUES
(210820, 'PT ASAHAN', 'DIrektur', 2021, 2022, '-', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(9) NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL,
  `NPM` int(9) NOT NULL,
  `id_galangdana` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_Pendidikan` int(11) NOT NULL,
  `Nama_Institusi_Pendidikan` varchar(50) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Program_Studi` varchar(30) NOT NULL,
  `Tahun_Masuk` year(4) NOT NULL,
  `Tahun_lulus` year(4) NOT NULL,
  `Gelar_Pendidikan` varchar(20) NOT NULL,
  `NPM` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_Pendidikan`, `Nama_Institusi_Pendidikan`, `Fakultas`, `Program_Studi`, `Tahun_Masuk`, `Tahun_lulus`, `Gelar_Pendidikan`, `NPM`) VALUES
(212121, 'Universitas katolik santo thomas', 'Ilmu Komputer', 'Sistem Informasi', 2002, 2005, 'S1', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `username`
--

CREATE TABLE `username` (
  `username_id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Admin_id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `username`
--

INSERT INTO `username` (`username_id`, `username`, `password`, `Admin_id`) VALUES
(1, 'admin', 'admin123', 1),
(2, 'Bona Pakpahan', 'pengguna123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`NPM`);

--
-- Indeks untuk tabel `galangdana`
--
ALTER TABLE `galangdana`
  ADD PRIMARY KEY (`id_galangdana`);

--
-- Indeks untuk tabel `hasil_tracer_study`
--
ALTER TABLE `hasil_tracer_study`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `jobboard`
--
ALTER TABLE `jobboard`
  ADD PRIMARY KEY (`id_job`);

--
-- Indeks untuk tabel `laporan_dana`
--
ALTER TABLE `laporan_dana`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`notifikasi_id`);

--
-- Indeks untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_Pendidikan`);

--
-- Indeks untuk tabel `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`username_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `NPM` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210840061;

--
-- AUTO_INCREMENT untuk tabel `hasil_tracer_study`
--
ALTER TABLE `hasil_tracer_study`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10025;

--
-- AUTO_INCREMENT untuk tabel `jobboard`
--
ALTER TABLE `jobboard`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT untuk tabel `laporan_dana`
--
ALTER TABLE `laporan_dana`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT untuk tabel `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210821;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_Pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212122;

--
-- AUTO_INCREMENT untuk tabel `username`
--
ALTER TABLE `username`
  MODIFY `username_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
