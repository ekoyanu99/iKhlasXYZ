-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2023 pada 15.24
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ikhlas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_wisata`
--

CREATE TABLE `daftar_wisata` (
  `id` int(100) NOT NULL,
  `nama_tempat` varchar(200) NOT NULL,
  `harga_tiket` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_wisata`
--

INSERT INTO `daftar_wisata` (`id`, `nama_tempat`, `harga_tiket`) VALUES
(1, 'Pantai Widuri', 10000),
(2, 'Pemandian Kali Suci Moga', 5000),
(3, 'Rainbow Rafting', 110000),
(4, 'Curug Sibedil', 5000),
(5, 'Gunung Gajah', 500000),
(6, 'Waterboom Zatobay', 25000),
(7, 'Benowo Park', 3000),
(8, 'Bukit Tangkeban', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung_wisata`
--

CREATE TABLE `pengunjung_wisata` (
  `id` int(100) NOT NULL,
  `nama_pemesan` char(100) NOT NULL,
  `nomor_identitas` char(16) NOT NULL,
  `no_hp` char(20) NOT NULL,
  `tempat_wisata` char(100) NOT NULL,
  `tgl_kunjungan` char(100) NOT NULL,
  `pengunjung_dewasa` int(100) NOT NULL,
  `pengunjung_anak` int(100) NOT NULL,
  `harga_tiket` char(100) NOT NULL,
  `total_bayar` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengunjung_wisata`
--

INSERT INTO `pengunjung_wisata` (`id`, `nama_pemesan`, `nomor_identitas`, `no_hp`, `tempat_wisata`, `tgl_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`, `harga_tiket`, `total_bayar`) VALUES
(1, 'Yanuarso', '32012929392077', '85787719292', 'Widuri', '2023-01-30', 4, 2, 'Rp. 10.000', 'Rp. 50.000'),
(2, 'Agus', '3113031410200001', '88812341233', 'Waterboom', '2023-01-25', 2, 3, 'Rp. 25.000', 'Rp. 87.500');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengunjung_wisata`
--
ALTER TABLE `pengunjung_wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengunjung_wisata`
--
ALTER TABLE `pengunjung_wisata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
