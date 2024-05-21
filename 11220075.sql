-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 05.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `11220075`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_dosen`
--

CREATE TABLE `m_dosen` (
  `id` int(11) NOT NULL,
  `id_dosen` varchar(20) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_dosen`
--

INSERT INTO `m_dosen` (`id`, `id_dosen`, `nama_dosen`) VALUES
(6, '12', 'faiz'),
(7, '13', 'putri'),
(8, '14', 'sinta'),
(9, '15', 'hasna'),
(10, '16', 'gina');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_mahasiswa`
--

CREATE TABLE `m_mahasiswa` (
  `id` int(10) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `nama mhs` varchar(100) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_mahasiswa`
--

INSERT INTO `m_mahasiswa` (`id`, `nim`, `nama mhs`, `jk`, `alamat`) VALUES
(1, '11220068', 'eka nurjanah', 'peremouan', 'nyantong'),
(2, '11220064', 'zahra', 'perempuan', 'manonjaya'),
(3, '11220069', 'anneke', 'perempuan', 'kawalu'),
(4, '11220075', 'elsa sri yuliyanti', 'perempuan', 'bebedahan'),
(5, '11220048', 'fauza julia rachma', 'perempuan', 'nyantong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_matakuliah`
--

CREATE TABLE `m_matakuliah` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `sks` int(3) NOT NULL,
  `sem` int(3) NOT NULL,
  `id_dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_matakuliah`
--

INSERT INTO `m_matakuliah` (`id`, `kode_mk`, `nama_mk`, `sks`, `sem`, `id_dosen`) VALUES
(1, '23', 'kalkulus', 2, 3, '12'),
(2, '24', 'fisika', 2, 3, '13'),
(3, '25', 'basis data', 2, 3, '14'),
(4, '26', 'agama', 2, 3, '15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_pengguna`
--

CREATE TABLE `m_pengguna` (
  `id` int(11) NOT NULL,
  `kode_op` varchar(10) NOT NULL,
  `nama_op` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `m_pengguna`
--

INSERT INTO `m_pengguna` (`id`, `kode_op`, `nama_op`, `pass`, `level`) VALUES
(1, 'admin', 'administrator', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `kode_mk` varchar(8) NOT NULL,
  `nilai` varchar(1) NOT NULL,
  `thn_akademik` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nim`, `kode_mk`, `nilai`, `thn_akademik`) VALUES
(1, '1220068', '26', '6', '2025'),
(2, '11220064', '25', '5', '2020'),
(3, '11220069', '24', '8', '2021'),
(4, '11220075', '23', '7', '2022');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_dosen`
--
ALTER TABLE `m_dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_dosen` (`id_dosen`);

--
-- Indeks untuk tabel `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indeks untuk tabel `m_matakuliah`
--
ALTER TABLE `m_matakuliah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_mk` (`kode_mk`);

--
-- Indeks untuk tabel `m_pengguna`
--
ALTER TABLE `m_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_op` (`kode_op`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_dosen`
--
ALTER TABLE `m_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `m_mahasiswa`
--
ALTER TABLE `m_mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `m_matakuliah`
--
ALTER TABLE `m_matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `m_pengguna`
--
ALTER TABLE `m_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
