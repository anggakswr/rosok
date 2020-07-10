-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2020 at 02:48 PM
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
(1, '', 'Botol Plastik Aqua', 'botol-plastik-aqua', '', 'Beli 1 ikat isi 10 botol.\r\nCOD Semarang Utara.', 12000, 1000, '2020-07-07', '2020-07-08'),
(2, '', 'Selimut Kain Perca', 'selimut-kain-perca', '', 'Ukuran 1,5 m x 1,5 m.\r\nDari kain sisa jahit korden.\r\nAdem, lembut, tebal.', 95000, 2000, '2020-07-08', '2020-07-09'),
(5, '', 'Sarung Bantal', 'sarung-bantal', '', 'Ukuran 50 cm x 50 cm.\r\nDari kain sisa jahit gorden.\r\nAdem dan nyaman.', 30000, 500, '2020-07-08', '2020-07-08'),
(7, '', 'Plastik Daur Ulang 2', 'plastik-daur-ulang-2', '', 'Terbuat dari berbagai macam sampah plastik.', 10000, 1000, '2020-07-09', '2020-07-09'),
(8, 'citosan.jpg', 'Miniatur Motor', 'miniatur-motor', 'Botol Plastik', 'Dari berbagai besi bekas.', 100000, 1200, '2020-07-09', '2020-07-09'),
(9, 'New Project.jpg', 'Knalpot Racing', 'knalpot-racing', '', 'Dari besi bekas berkualitas.', 120000, 4000, '2020-07-09', '2020-07-09'),
(10, 'New Project(1)(1).jpg', 'Knalpot Mobil', 'knalpot-mobil', 'Besi Kiloan', 'Bukan kaleng-kaleng.', 190000, 5000, '2020-07-09', '2020-07-09'),
(11, 'grape.jpg', 'Botol Minum', 'botol-minum', 'Botol Plastik', 'Botol minum anggur.', 10000, 150, '2020-07-10', '2020-07-10'),
(12, '105945043_2169416189871470_3513695429123377615_o.jpg', 'Poster Kardus', 'poster-kardus', 'Besi Kiloan', 'Poster laundry.', 15000, 150, '2020-07-10', '2020-07-10'),
(13, 'citosan_1.jpg', 'Botol Miras', 'botol-miras', 'Botol Plastik', 'Congyang cap gomeh.', 50000, 500, '2020-07-10', '2020-07-10'),
(14, 'krupuk(1).jpg', 'Bungkus Plastik', 'bungkus-plastik', 'Botol Plastik', 'Bungkus krupuk.', 10000, 1000, '2020-07-10', '2020-07-10'),
(15, '105684456_2169416016538154_852472287609745643_n.jpg', 'Batik Kain Perca', 'batik-kain-perca', 'Kain Perca', 'Batik jahitan uwak.', 50000, 1000, '2020-07-10', '2020-07-10'),
(16, '73197522_2169416103204812_2326113321266451019_n.jpg', 'Tas Makanan Cantik', 'tas-makanan-cantik', 'Kain Perca', 'Berkualitas, murah, aman.', 20000, 1000, '2020-07-10', '2020-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
