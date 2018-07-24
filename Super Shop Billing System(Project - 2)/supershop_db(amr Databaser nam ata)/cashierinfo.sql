-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 06:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supershop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashierinfo`
--

CREATE TABLE `cashierinfo` (
  `cashier_id` int(255) NOT NULL,
  `cashier_name` varchar(80) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashierinfo`
--

INSERT INTO `cashierinfo` (`cashier_id`, `cashier_name`, `mobile_number`, `address`, `email`, `password`) VALUES
(22, '', '', '', '', ''),
(25, 'Ab', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashierinfo`
--
ALTER TABLE `cashierinfo`
  ADD PRIMARY KEY (`cashier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashierinfo`
--
ALTER TABLE `cashierinfo`
  MODIFY `cashier_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
