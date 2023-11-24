-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 06:35 AM
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
-- Table structure for table `baptis`
--

CREATE TABLE `baptis` (
  `id_baptis` int(5) NOT NULL,
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
-- Dumping data for table `baptis`
--

INSERT INTO `baptis` (`id_baptis`, `jenis_baptis`, `nama`, `tgl_lahir`, `tempat_lahir`, `nama_ortu`, `alamat`, `telepon`, `gambar`, `keterangan`) VALUES
(7, 'dewasa', 'Daniel', '2023-11-13', 'Tayan', '0', 'hilir', 2147483647, '', ''),
(8, 'dewasa', 'Suhendra', '2023-11-13', 'Pontianak', '0', 'Kota baru', 2147483647, 'IMG_20230323_151705.jpg', ''),
(9, 'bayi', 'azril', '2023-11-13', 'Pontianak', 'Niko', 'Bangkam', 2147483647, '', ''),
(11, 'dewasa', 'Daniel', '2023-11-13', 'Mempawah', '', 'Bangkam', 2147483647, 'IMG_20230323_223705.jpg', ''),
(12, 'bayi', 'azril', '2023-11-13', 'Pontianak', 'Niko', 'hilir', 2147483647, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
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
-- Table structure for table `katekumen`
--

CREATE TABLE `katekumen` (
  `id_katekumen` int(5) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `katekis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katekumen`
--

INSERT INTO `katekumen` (`id_katekumen`, `hari`, `waktu`, `tempat`, `katekis`) VALUES
(1, 'Minggu', '00:00:14', 'Bangkam', 'Pak Adi'),
(2, 'Minggu', '00:00:15', 'Bangkam', 'Pak Nuan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baptis`
--
ALTER TABLE `baptis`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptis`
--
ALTER TABLE `baptis`
  MODIFY `id_baptis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `katekumen`
--
ALTER TABLE `katekumen`
  MODIFY `id_katekumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
