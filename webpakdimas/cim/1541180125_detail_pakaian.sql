-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 09:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1541180125`
--

-- --------------------------------------------------------

--
-- Table structure for table `1541180125_detail_pakaian`
--

CREATE TABLE `1541180125_detail_pakaian` (
  `id_pakaian` int(11) NOT NULL,
  `id_jenis_pakaian` int(11) NOT NULL,
  `nama_pakaian` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` decimal(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1541180125_detail_pakaian`
--

INSERT INTO `1541180125_detail_pakaian` (`id_pakaian`, `id_jenis_pakaian`, `nama_pakaian`, `harga`, `diskon`) VALUES
(1, 1, 'celana panjang', 399000, '0.000'),
(2, 1, 'celana pendek', 199000, '0.100'),
(3, 2, 'kemeja panjang', 299000, '0.000'),
(4, 2, 'kemeja pendek', 259000, '0.250'),
(5, 4, 'jaket bulu', 599000, '0.000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
