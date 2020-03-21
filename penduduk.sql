-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:11 AM
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
  `nokk` varchar(100) NOT NULL,
  `kepala` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `sudah_menikah` int(11) NOT NULL,
  `belum_menikah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nokk`, `kepala`, `alamat`, `sudah_menikah`, `belum_menikah`) VALUES
('34543565653', 'ghf', 'hgf', 4, 1),
('350670207405', 'ibnu', 'Malang  jl.masuk no.8', 2, 2),
('433545667', 'trytr', 'ryeyy', 3, 2),
('4738864647832768764', 'ajat', 'Maalng swojajar ', 2, 1),
('5466673460899', 'tfyl', 'Malangg jl.pintukeluar', 3, 1),
('56367517332732523', 'hujan', 'Malang pakis sawojajar', 2, 1),
('86119179216671275', 'ahggs', 'Malang jl.masuklurus kelua no.90', 2, 2),
('908790560406', 'falah', 'Malang  jl.keluar no.13', 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nokk`),
  ADD KEY `nama_kepala_keluarga` (`kepala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
