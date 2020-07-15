-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2020 at 07:10 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosok`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` mediumint(9) NOT NULL,
  `berat` smallint(6) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `foto`, `nama`, `slug`, `kategori`, `deskripsi`, `harga`, `berat`, `created_at`, `updated_at`) VALUES
(30, '5.jpeg', '123', '123', 'Kardus', '123', 123123, 123, '2020-07-14', '2020-07-14'),
(31, '1.jpeg', '321', '321', 'Besi', '321', 321321, 321, '2020-07-14', '2020-07-14'),
(32, 'portfolio7.jpg', 'jere kriting', 'jere-kriting', 'Kain Perca', 'main pingpong', 123123, 22, '2020-07-14', '2020-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `slug`, `foto`, `created_at`, `updated_at`) VALUES
(56, '123', '5.jpeg', '2020-07-14', '2020-07-14'),
(57, '123', '4.jpeg', '2020-07-14', '2020-07-14'),
(58, '321', '1.jpeg', '2020-07-14', '2020-07-14'),
(59, '321', '2.jpeg', '2020-07-14', '2020-07-14'),
(60, 'jere-kriting', 'portfolio7.jpg', '2020-07-14', '2020-07-14'),
(61, 'jere-kriting', 'portfolio6.jpg', '2020-07-14', '2020-07-14'),
(64, 'jere-kriting', 'portfolio5.jpg', '2020-07-14', '2020-07-14'),
(65, '123', '3.jpeg', '2020-07-14', '2020-07-14'),
(66, '123', '2.jpeg', '2020-07-14', '2020-07-14'),
(67, '123', 'Screenshot_2020-07-14 baju celana tidur semarang ( semarangbobok) • Instagram photos and videos.png', '2020-07-14', '2020-07-14'),
(68, 'jere-kriting', '5.jpeg', '2020-07-14', '2020-07-14'),
(69, '321', 'portfolio5.jpg', '2020-07-14', '2020-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Botol Plastik'),
(2, 'Kardus'),
(3, 'Kain Perca'),
(4, 'Besi'),
(5, 'Kerajinan Plastik'),
(6, 'Kerajinan Kardus'),
(7, 'Kerajinan Kain Perca'),
(8, 'Kerajinan Besi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
