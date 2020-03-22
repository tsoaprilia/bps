-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 06:25 AM
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
-- Table structure for table `suburr`
--

CREATE TABLE `suburr` (
  `idurut` int(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `kadarair` varchar(100) NOT NULL,
  `hasilpanen` varchar(100) NOT NULL,
  `kadarkekeringan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suburr`
--

INSERT INTO `suburr` (`idurut`, `daerah`, `kadarair`, `hasilpanen`, `kadarkekeringan`) VALUES
(3, 'pakis', '80%', '145hektar', '`12%'),
(4, 'pakis', '78%', '123hektar', '14%'),
(5, 'wajak', '76%', '125hektar', '5%'),
(6, 'pok', '35%', '13hektar', '25%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suburr`
--
ALTER TABLE `suburr`
  ADD PRIMARY KEY (`idurut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suburr`
--
ALTER TABLE `suburr`
  MODIFY `idurut` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
