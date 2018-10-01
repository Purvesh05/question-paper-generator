-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 06:33 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aws`
--

-- --------------------------------------------------------

--
-- Table structure for table `it5`
--

CREATE TABLE `it5` (
  `id` int(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `quest` varchar(255) NOT NULL,
  `co` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it5`
--

INSERT INTO `it5` (`id`, `sem`, `sub`, `quest`, `co`, `marks`, `image`) VALUES
(1, '5', 'CNS', 'What is CNS?', '1', '2', 0x6665642e6a7067),
(2, '5', 'MEP', 'What is MEP?', '1', '2', 0x6a61727669732e706e67),
(4, '5', 'CNS', 'What is ARP spoofing?', '2', '2', ''),
(5, '5', 'CNS', 'what ans does sir wants?', '2', '100', 0x32303138303833305f3232303835302d6d696e2e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `it5`
--
ALTER TABLE `it5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `it5`
--
ALTER TABLE `it5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
