-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2024 pada 09.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id` int(25) NOT NULL,
  `nama_tamu` varchar(255) DEFAULT NULL,
  `id_tipe` int(25) DEFAULT NULL,
  `nomor_kamar` int(15) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `total_harga` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(25) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `harga` int(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `tipe`, `harga`, `keterangan`) VALUES
(1, 'double bed', 650000, 'ada sosok hitam'),
(2, 'Single Bed', 350000, 'ada ambatron'),
(3, 'Luxury', 15000000, 'dapat tanda tangan ronaldo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_kamar`
--

CREATE TABLE `no_kamar` (
  `id` int(11) NOT NULL,
  `nomor_kamar` int(11) NOT NULL,
  `id_tipe` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `no_kamar`
--

INSERT INTO `no_kamar` (`id`, `nomor_kamar`, `id_tipe`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `surel` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `surel`) VALUES
(1, 'rega', 'gfgf@d.f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(25) NOT NULL,
  `id_tamu` int(25) DEFAULT NULL,
  `id_kamar` int(25) DEFAULT NULL,
  `tanggal_checkin` date NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `status_pembayaran` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `nomor_telepon`, `email`, `alamat_rumah`, `password`, `user_level`) VALUES
(4, 'Akmal Oktavian', 'shgsahdg', '08885960825', 'akmaloktavian111@gmail.com', 'jembangan\r\nPleret', '$2y$10$ofpidT0qPy6/qNcJcXQzUu5CCBr4uJRb0R6W3eUJcu/ocjKQz.U3S', 0),
(3, 'Admin Alok GG', 'alokjamsut', '000000000', 'admin@propleyer.com', 'jembangan\r\nPleret', '11111111', 1),
(7, 'dinda Ayu', 'dinda', '99999', 'd@g.c', 'jogja', '$2y$10$y9No.CgqiyHFP6XtzWDJ9eAmRCuuMjKhRu1mUo5DJQVeya1GhAn9y', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `no_kamar`
--
ALTER TABLE `no_kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tamu` (`id_tamu`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
