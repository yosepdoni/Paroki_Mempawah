-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 07:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `telepon` varchar(15) NOT NULL,
  `akta` text NOT NULL,
  `surat_nikah` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_baptis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baptis_bayi`
--

INSERT INTO `baptis_bayi` (`id_baptis`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `nama_ayah`, `nama_ibu`, `telepon`, `akta`, `surat_nikah`, `status`, `keterangan`, `tgl_baptis`) VALUES
(28, 6, 'Ivana', '2023-12-07', 'Mempawah', 'Bangkam', 'A', 'B', '+6285752005641', 'akta.png', 'akta.png', 'Diterima', 'yyy', '2023-12-07');

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
  `telepon` varchar(15) NOT NULL,
  `akta` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_baptis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baptis_dewasa`
--

INSERT INTO `baptis_dewasa` (`id_baptis`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `telepon`, `akta`, `status`, `keterangan`, `tgl_baptis`) VALUES
(26, 4, 'gerry topher', '2000-01-09', 'Tayan', 'Tayan', '+6285752005661', 'akta.png', 'Diterima', 'yaa', '2023-12-08');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `tgl`, `waktu`, `tempat`, `perayaan`, `pastor`) VALUES
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
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katekumen`
--

INSERT INTO `katekumen` (`id_katekumen`, `id_user`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `telepon`) VALUES
(25, 4, 'gerry topher', '2000-01-09', 'Tayan', 'Tayan', '+6285752005661'),
(26, 5, 'suhendra montek', '1999-09-18', 'kota baru', 'kota baru', '+6285752005555');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(5) NOT NULL,
  `id_baptis` int(5) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `jumlah_presensi` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id_presensi`, `id_user`, `tgl_presensi`, `jumlah_presensi`) VALUES
(35, 4, '0000-00-00', ''),
(36, 5, '0000-00-00', ''),
(37, 4, '2023-12-06', '1'),
(38, 4, '2023-12-06', '1'),
(39, 4, '2023-12-06', '1'),
(40, 4, '2023-12-06', '1'),
(41, 4, '2023-12-06', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `baptis_dewasa`
--
ALTER TABLE `baptis_dewasa`
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `katekumen`
--
ALTER TABLE `katekumen`
  MODIFY `id_katekumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id_presensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
