-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 08:59 AM
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
  `users_id` int(11) NOT NULL,
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

INSERT INTO `barang` (`id`, `users_id`, `foto`, `nama`, `slug`, `kategori`, `deskripsi`, `harga`, `berat`, `created_at`, `updated_at`) VALUES
(43, 3, '6736931_thumb.png', 'asd', 'asd', 'Kerajinan Plastik', 'asd11', 122, 1, '2020-07-19', '2020-07-19'),
(44, 3, 'unnamed_1.png', 'asd', 'asd-1', 'Besi', '1', 1, 1, '2020-07-19', '2020-07-19'),
(45, 3, 'unnamed_2.png', 'Bumbum', 'bumbum', 'Besi', 'asd22', 122, 1, '2020-07-19', '2020-07-19');

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
(98, 'asd', '6736931_thumb.png', '2020-07-19', '2020-07-19'),
(99, 'asd', 'unnamed.png', '2020-07-19', '2020-07-19'),
(100, 'asd-1', 'unnamed_1.png', '2020-07-19', '2020-07-19'),
(101, 'bumbum', 'unnamed_2.png', '2020-07-19', '2020-07-19'),
(102, 'bumbum', 'unnamed_3.png', '2020-07-19', '2020-07-19');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'tokobesiangga', 'asd@asd.com', 'Afolosmua1', '2020-07-16', '2020-07-16'),
(2, 'asd', 'asd@asdw.com', '$2y$10$mN0nGQwCPwHR/R5ozaICmO0NSsfacrg0oaMVb2PrKSBTgI9V3E4na', '2020-07-16', '2020-07-16'),
(3, 'jere', 'jere@asd.com', '$2y$10$Ejn4pWDzY0ABe198V7LaJOBMbn6.IZ5lA2203Dj/Ga1TcDuKbB3Cq', '2020-07-16', '2020-07-17');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
