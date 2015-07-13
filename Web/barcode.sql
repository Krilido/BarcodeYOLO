-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jul 2015 pada 09.45
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barcode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kantor`
--

CREATE TABLE IF NOT EXISTS `kantor` (
  `id_kantor` int(11) NOT NULL,
  `nama_kantor` varchar(25) NOT NULL,
  `kode_kantor` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kantor`
--

INSERT INTO `kantor` (`id_kantor`, `nama_kantor`, `kode_kantor`) VALUES
(1, 'kantor 1', 'K1'),
(3, 'kantor 2', 'K2'),
(4, 'kantor 3', 'K3'),
(6, 'kantor 4', 'K4'),
(7, 'kantor 5', 'K5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id_test` int(11) NOT NULL,
  `nama_kantor` varchar(30) NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `test`
--

INSERT INTO `test` (`id_test`, `nama_kantor`, `waktu_masuk`) VALUES
(1, 'K1', '2015-07-13 07:29:58'),
(2, '', '2015-07-13 07:29:58'),
(3, '', '2015-07-13 07:29:58'),
(4, '', '2015-07-13 07:29:58'),
(5, 'Array', '2015-07-13 07:29:58'),
(6, '', '2015-07-13 07:29:58'),
(7, '', '2015-07-13 07:29:58'),
(8, '', '2015-07-13 07:29:58'),
(9, '', '2015-07-13 07:29:58'),
(10, '', '2015-07-13 07:29:58'),
(11, '', '2015-07-13 07:29:58'),
(12, 'K1', '2015-07-13 07:29:58'),
(13, 'K6', '2015-07-13 07:29:58'),
(14, 'K200', '2015-07-13 07:29:58'),
(15, 'kantor 3', '2015-07-13 07:29:58'),
(16, 'kantor 3', '2015-07-13 07:29:58'),
(17, 'kantor 4', '2015-07-13 07:29:58'),
(18, 'kantor 4', '2015-07-13 07:32:13'),
(19, 'kantor 2', '2015-07-13 07:32:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id_kantor`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id_kantor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
