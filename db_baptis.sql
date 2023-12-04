-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2023 pada 16.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

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
-- Struktur dari tabel `baptis_bayi`
--

CREATE TABLE `baptis_bayi` (
  `id_baptis` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `akta` text NOT NULL,
  `surat_nikah` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `baptis_bayi`
--

INSERT INTO `baptis_bayi` (`id_baptis`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `nama_ayah`, `nama_ibu`, `telepon`, `akta`, `surat_nikah`, `status`, `keterangan`) VALUES
(3, 6, 'Ivana', '2023-12-04', 'bangkam', 'siantan', 'QA', 'QB', '0856757575', 'keep.PNG', 'pay.jpg', 'Belum dikonfirmasi', 'Belum dikonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `baptis_dewasa`
--

CREATE TABLE `baptis_dewasa` (
  `id_baptis` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `akta` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `baptis_dewasa`
--

INSERT INTO `baptis_dewasa` (`id_baptis`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `telepon`, `akta`, `status`, `keterangan`) VALUES
(22, 4, 'gerry topher', '2023-12-01', 'Tayan Pulau', 'Pontianak Timur', '85753613718', 'keep.PNG', 'Belum dikonfirmasi', 'Belum dikonfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` varchar(5) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `perayaan` varchar(50) NOT NULL,
  `pastor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `tgl`, `waktu`, `tempat`, `perayaan`, `pastor`) VALUES
(4, 'Minggu', '2023-12-02', '06:00', 'Gereja St. Serenus Bangkam', 'Minggu Biasa XXVI', 'Yoseff'),
(5, 'Minggu', '2023-12-01', '18:00', 'Gereja St. Serenus Bangkam', '-', 'Alex');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katekumen`
--

CREATE TABLE `katekumen` (
  `id_katekumen` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `katekumen`
--

INSERT INTO `katekumen` (`id_katekumen`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `telepon`) VALUES
(20, 4, 'gerry topher', '2023-12-01', 'Tayan Pulau', 'Pontianak Timur', '85753613718'),
(21, 5, 'suhendra montek', '2023-12-01', 'kobar', 'Pontianak Timur', '85753613718');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(5) NOT NULL,
  `id_baptis` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `jumlah_presensi` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_user`, `tgl_presensi`, `jumlah_presensi`) VALUES
(18, 4, '0000-00-00', ''),
(25, 4, '2023-12-01', '1'),
(26, 4, '2023-12-01', '1'),
(27, 5, '0000-00-00', ''),
(28, 5, '2023-12-01', '1'),
(29, 4, '2023-12-04', '1'),
(30, 4, '2023-12-04', '1'),
(31, 4, '2023-12-04', '1');

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
(5, 'suhendra montek', 'suhendra@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 'user'),
(6, 'Ivana', 'ivana@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `baptis_bayi`
--
ALTER TABLE `baptis_bayi`
  ADD PRIMARY KEY (`id_baptis`);

--
-- Indeks untuk tabel `baptis_dewasa`
--
ALTER TABLE `baptis_dewasa`
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
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `baptis_bayi`
--
ALTER TABLE `baptis_bayi`
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `baptis_dewasa`
--
ALTER TABLE `baptis_dewasa`
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `katekumen`
--
ALTER TABLE `katekumen`
  MODIFY `id_katekumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
