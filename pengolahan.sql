-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 08:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengolahan`
--

CREATE TABLE `pengolahan` (
  `id_pengolahan` int(11) NOT NULL,
  `tanggal_pengolahan` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_lahan` int(11) NOT NULL,
  `id_alat` int(11) NOT NULL,
  `id_kelompok_tani` int(11) NOT NULL,
  `keterengan` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengolahan`
--

INSERT INTO `pengolahan` (`id_pengolahan`, `tanggal_pengolahan`, `id_anggota`, `id_lahan`, `id_alat`, `id_kelompok_tani`, `keterengan`) VALUES
(1, '02022024', 1, 1, 1, 1, 'suksses selalu'),
(2, '02022024', 2, 2, 3, 2, 'bismiilah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengolahan`
--
ALTER TABLE `pengolahan`
  ADD PRIMARY KEY (`id_pengolahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengolahan`
--
ALTER TABLE `pengolahan`
  MODIFY `id_pengolahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
