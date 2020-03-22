-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 06:24 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpss`
--

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `idd` int(100) NOT NULL,
  `nokk` varchar(100) NOT NULL,
  `kepala` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `sudah_menikah` int(11) NOT NULL,
  `belum_menikah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`idd`, `nokk`, `kepala`, `alamat`, `sudah_menikah`, `belum_menikah`) VALUES
(4, '1553546453663623', 'nkgitonb', 'gkitj', 3, 4),
(5, '575786989789796967', 'mnvjhjfutb', 'huhugbv', 2, 5),
(6, '2453425264352464', 'turuuty', 'ijifhuv', 2, 7),
(7, '27637644536354621', 'jjhibtu', 'jrjjhtg', 3, 6),
(8, '675632323213455', 'bubvuvhi', 'jojoygu', 2, 1),
(9, '453222131655887', 'ansu', 'njnsi', 2, 1),
(10, '343354657578764', 'jntjig', 'jniir', 2, 3),
(11, '123423425556', 'jnixti', 'jigj', 3, 3),
(12, '65874392554', 'bukan', 'mlanag', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`idd`),
  ADD KEY `nama_kepala_keluarga` (`kepala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `idd` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
