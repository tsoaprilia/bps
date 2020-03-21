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
-- Table structure for table `produksii`
--

CREATE TABLE `produksii` (
  `produk` varchar(100) NOT NULL,
  `a2019` varchar(100) NOT NULL,
  `a2018` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksii`
--

INSERT INTO `produksii` (`produk`, `a2019`, `a2018`) VALUES
('gula', '135123', '456675'),
('kayu', '506987', '768900'),
('padi', '345', '567'),
('susu', '1236', '5678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produksii`
--
ALTER TABLE `produksii`
  ADD PRIMARY KEY (`produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
