-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 04:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `edisi` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `banyak_buku` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `terakhir_dipinjam` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `edisi`, `penulis`, `penerbit`, `banyak_buku`, `status`, `terakhir_dipinjam`, `deleted_at`) VALUES
(1, 'Cinta di atas pelaminan', '10', 'anas', 'mahasin', 0, 'Tersedia', NULL, '2017-08-21 07:37:04'),
(2, 'dia delete', 'botak', 'Dito', 'Si botak', 1, 'Tersedia', NULL, NULL),
(3, 'botak berambut', '10', 'yumna', 'botak', 10, 'Tersedia', NULL, NULL),
(4, 'botak polos', '10', 'yumna', 'botak', 10, 'Tersedia', NULL, NULL),
(5, 'Botak hampir polos', '10', 'Yumna', 'Botak', 10, 'Tersedia', NULL, NULL),
(6, 'Ketika ayam bertasbih', '5', '4', '3', 2, 'Tersedia', NULL, NULL),
(7, 'Cinta di atas pelaminan', '5', '3', '2', 1, 'Tersedia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_peminjaman`
--

CREATE TABLE `log_peminjaman` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `edisi_buku` varchar(100) NOT NULL,
  `status_peminjaman` varchar(100) NOT NULL DEFAULT 'Dipesan',
  `tanggal_peminjaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_diambil` timestamp NULL DEFAULT NULL,
  `tanggal_dikembalikan` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_peminjaman`
--

INSERT INTO `log_peminjaman` (`id`, `nama_peminjam`, `id_buku`, `judul_buku`, `edisi_buku`, `status_peminjaman`, `tanggal_peminjaman`, `tanggal_diambil`, `tanggal_dikembalikan`) VALUES
(3, 'Anas', 1, 'Cinta di atas pelaminan', '10', 'Dipesan', '2017-08-17 10:27:51', NULL, NULL),
(4, 'Anas', 1, 'Cinta di atas pelaminan', '10', 'Dipesan', '2017-08-17 10:28:46', NULL, NULL),
(5, 'Anas', 1, 'Cinta di atas pelaminan', '10', 'Dipesan', '2017-08-17 10:29:04', NULL, NULL),
(6, 'Anas', 1, 'Cinta di atas pelaminan', '10', 'Dipesan', '2017-08-17 10:29:36', NULL, NULL),
(7, 'Anas', 1, 'Cinta di atas pelaminan', '10', 'Dipesan', '2017-08-17 10:34:28', NULL, NULL),
(8, 'Anas', 2, 'dia delete', 'botak', 'Dipesan', '2017-08-22 13:25:04', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_peminjaman`
--
ALTER TABLE `log_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `log_peminjaman`
--
ALTER TABLE `log_peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
