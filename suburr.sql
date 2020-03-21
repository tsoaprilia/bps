-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 07:12 AM
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
  `daerah` varchar(100) NOT NULL,
  `kadarair` varchar(100) NOT NULL,
  `hasilpanen` varchar(100) NOT NULL,
  `kadarkekeringan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suburr`
--

INSERT INTO `suburr` (`daerah`, `kadarair`, `hasilpanen`, `kadarkekeringan`) VALUES
('bululawang', '89%', '78hektra', '35%'),
('mojosari', '67%', '123hektar', '4%'),
('pakis', '80%', '145hektar', '`12%'),
('sawojajar', '78%', '123hektar', '14%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `suburr`
--
ALTER TABLE `suburr`
  ADD PRIMARY KEY (`daerah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
