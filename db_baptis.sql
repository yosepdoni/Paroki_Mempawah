-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2023 pada 21.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_baptis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `kehadiran` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `id_user`, `kehadiran`) VALUES
(1, 2, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `baptis`
--

CREATE TABLE `baptis` (
  `id_baptis` int(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `jenis_baptis` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` int(12) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `baptis`
--

INSERT INTO `baptis` (`id_baptis`, `id_user`, `jenis_baptis`, `nama`, `tgl_lahir`, `tempat_lahir`, `nama_ortu`, `alamat`, `telepon`, `gambar`, `keterangan`) VALUES
(7, '', 'dewasa', 'Daniel', '2023-11-13', 'Tayan', '0', 'hilir', 2147483647, '', ''),
(8, '', 'dewasa', 'Suhendra', '2023-11-13', 'Pontianak', '0', 'Kota baru', 2147483647, 'IMG_20230323_151705.jpg', ''),
(9, '', 'bayi', 'azril', '2023-11-13', 'Pontianak', 'Niko', 'Bangkam', 2147483647, '', ''),
(11, '', 'dewasa', 'Daniel', '2023-11-13', 'Mempawah', '', 'Bangkam', 2147483647, 'IMG_20230323_223705.jpg', ''),
(12, '', 'bayi', 'azril', '2023-11-13', 'Pontianak', 'Niko', 'hilir', 2147483647, '', ''),
(13, '', 'dewasa', 'Yosep Doni Saputra', '2023-11-26', 'Ampuk', '', 'Pontianak Timur', 2147483647, '', ''),
(16, '4', 'dewasa', 'gerry topher', '2023-11-26', 'Tayan Pulau', '', 'Jl Penjara', 2147483647, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `perayaan` varchar(50) NOT NULL,
  `pastor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `katekumen`
--

CREATE TABLE `katekumen` (
  `id_katekumen` int(5) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `katekis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `katekumen`
--

INSERT INTO `katekumen` (`id_katekumen`, `hari`, `waktu`, `tempat`, `katekis`) VALUES
(1, 'Minggu', '00:00:14', 'Bangkam', 'Pak Adi'),
(2, 'Minggu', '00:00:15', 'Bangkam', 'Pak Nuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(2, 'yosep', 'yosep@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'katekis'),
(3, 'daniel', 'daniel@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'gerry topher', 'gerry@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'user'),
(5, 'suhendra montek', 'suhendra@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `baptis`
--
ALTER TABLE `baptis`
  ADD PRIMARY KEY (`id_baptis`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `katekumen`
--
ALTER TABLE `katekumen`
  ADD PRIMARY KEY (`id_katekumen`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `baptis`
--
ALTER TABLE `baptis`
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `katekumen`
--
ALTER TABLE `katekumen`
  MODIFY `id_katekumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
