-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 07:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `baptis_bayi`
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
  `telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baptis_bayi`
--

INSERT INTO `baptis_bayi` (`id_baptis`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `nama_ayah`, `nama_ibu`, `telepon`) VALUES
(1, 6, 'Ivana', '2023-11-30', 'Mempawah', 'Siantan', 'A', 'B', '085752005641');

-- --------------------------------------------------------

--
-- Table structure for table `baptis_dewasa`
--

CREATE TABLE `baptis_dewasa` (
  `id_baptis` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baptis_dewasa`
--

INSERT INTO `baptis_dewasa` (`id_baptis`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `telepon`) VALUES
(15, 4, 'gerry topher', '2023-11-29', 'Tayan', 'Bangkam', '085752005641');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
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
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `tgl`, `waktu`, `tempat`, `perayaan`, `pastor`) VALUES
(4, 'Minggu', '2023-12-02', '06:00', 'Gereja St. Serenus Bangkam', 'Minggu Biasa XXVI', 'Yoseff'),
(5, 'Minggu', '2023-12-01', '18:00', 'Gereja St. Serenus Bangkam', '-', 'Alex');

-- --------------------------------------------------------

--
-- Table structure for table `katekumen`
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
-- Dumping data for table `katekumen`
--

INSERT INTO `katekumen` (`id_katekumen`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `telepon`) VALUES
(18, 4, 'gerry topher', '2001-11-30', 'Tayan', 'Tayan', '0857520056');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(5) NOT NULL,
  `id_baptis` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `jumlah_presensi` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_user`, `tgl_presensi`, `jumlah_presensi`) VALUES
(4, 4, '2023-11-28', '1'),
(5, 4, '2023-11-29', '1'),
(7, 4, '2023-11-30', '1'),
(8, 4, '2023-11-30', '1'),
(9, 4, '2023-11-30', '1'),
(10, 4, '0000-00-00', ''),
(11, 4, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
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
-- Indexes for table `baptis_bayi`
--
ALTER TABLE `baptis_bayi`
  ADD PRIMARY KEY (`id_baptis`);

--
-- Indexes for table `baptis_dewasa`
--
ALTER TABLE `baptis_dewasa`
  ADD PRIMARY KEY (`id_baptis`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `katekumen`
--
ALTER TABLE `katekumen`
  ADD PRIMARY KEY (`id_katekumen`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptis_bayi`
--
ALTER TABLE `baptis_bayi`
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baptis_dewasa`
--
ALTER TABLE `baptis_dewasa`
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `katekumen`
--
ALTER TABLE `katekumen`
  MODIFY `id_katekumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
