-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 06:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_admin`
--

CREATE TABLE `tab_admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tab_admin`
--

INSERT INTO `tab_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tab_alternatif`
--

CREATE TABLE `tab_alternatif` (
  `id_alternatif` varchar(10) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_alternatif`
--

INSERT INTO `tab_alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
('1', 'Oppo'),
('2', 'Vivo'),
('3', 'Xiaomi'),
('4', 'Samsung'),
('5', 'Sony');

-- --------------------------------------------------------

--
-- Table structure for table `tab_kriteria`
--

CREATE TABLE `tab_kriteria` (
  `id_kriteria` int(10) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_kriteria`
--

INSERT INTO `tab_kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(1, 'Harga', 5),
(2, 'Ram', 3),
(3, 'Memori', 5),
(4, 'Kamera', 5),
(5, 'Batre', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tab_poin`
--

CREATE TABLE `tab_poin` (
  `id_poin` int(10) NOT NULL,
  `poin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_poin`
--

INSERT INTO `tab_poin` (`id_poin`, `poin`) VALUES
(1, '2000000'),
(2, '3000000'),
(3, '4000000'),
(4, '5000000'),
(5, '6000000'),
(6, '2'),
(7, '4'),
(8, '6'),
(9, '8'),
(10, '12'),
(11, '4'),
(12, '8'),
(13, '16'),
(14, '32'),
(15, '64'),
(16, '8'),
(17, '16'),
(18, '24'),
(19, '32'),
(20, '40'),
(21, '2000'),
(22, '3000'),
(23, '4000'),
(24, '5000'),
(25, '6000');

-- --------------------------------------------------------

--
-- Table structure for table `tab_topsis`
--

CREATE TABLE `tab_topsis` (
  `id_alternatif` varchar(10) NOT NULL,
  `id_kriteria` varchar(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_topsis`
--

INSERT INTO `tab_topsis` (`id_alternatif`, `id_kriteria`, `nilai`) VALUES
('1', '1', 2),
('1', '2', 6),
('1', '3', 13),
('1', '4', 17),
('1', '5', 21),
('2', '1', 1),
('2', '2', 7),
('2', '3', 13),
('2', '4', 19),
('2', '5', 24),
('3', '1', 5),
('3', '2', 10),
('3', '3', 15),
('3', '4', 15),
('3', '5', 25),
('4', '1', 3),
('4', '2', 8),
('4', '3', 18),
('4', '4', 19),
('4', '5', 24),
('5', '1', 4),
('5', '2', 10),
('5', '3', 15),
('5', '4', 18),
('5', '5', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_admin`
--
ALTER TABLE `tab_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tab_alternatif`
--
ALTER TABLE `tab_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tab_kriteria`
--
ALTER TABLE `tab_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tab_poin`
--
ALTER TABLE `tab_poin`
  ADD PRIMARY KEY (`id_poin`);

--
-- Indexes for table `tab_topsis`
--
ALTER TABLE `tab_topsis`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
