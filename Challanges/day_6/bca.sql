-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 08:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bca`
--

CREATE TABLE `bca` (
  `id` int(10) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Father Name` varchar(20) NOT NULL,
  `Mother Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bca`
--

INSERT INTO `bca` (`id`, `First Name`, `Last Name`, `Father Name`, `Mother Name`, `Email`, `Phone`, `Address`, `City`, `DOB`, `Gender`, `Age`) VALUES
(1, 'Kushagra', 'Jaiswal', 'Prashant Kumar Jaisw', 'Kanak Jaiswal', 'kushagrajaiswal00@gm', 1234567899, 'orderly bazar', 'Varanasi', '2002-08-01', 'MALE', 20),
(2, 'NOOB', 'PLAYER', 'PRO', 'SARA', 'noob@gmail.com', 1234657981, 'Mylta', 'Erangel', '2010-02-12', 'MALE', 12),
(3, 'PRO', 'PLAYER', 'NOOB', 'SARA', 'pro@gmail.com', 1234657981, 'Pochinki', 'Erangel', '2010-02-20', 'MALE', 14),
(4, 'HACKER', 'PLAYER', 'SCAMMER', 'LILI', 'hacker@gmail.com', 1234657981, 'NOVO', 'Erangel', '2021-11-17', 'MALE', 13),
(5, '30FPS', 'PLAYER', 'NOKIA', 'PHONES', '30fps@gmail.com', 1234657981, 'School', 'erangel', '2021-11-04', 'MALE', 15),
(6, '90FPS', 'PLAYER', 'ROG', 'PHONES', '90fps@gmail.com', 1234657981, 'Georgopol', 'Erangel', '2013-11-03', 'MALE', 16),
(7, '60FPS', 'PLAYER', 'REDMI', 'PHONES', '60fps@gmail.com', 1234657981, 'Appartments', 'Erangel', '2012-07-05', 'FEMALE', 17),
(8, 'SERVER', 'ERROR', 'JIO', 'NETWORK', 'server@gmail.com', 1234657981, 'LOBBY', 'BGMI', '2012-11-01', 'FEMALE', 17),
(9, '400MS', 'PING', 'VODAFONE', 'NETWORK', '400ms@gmail.com', 1234657981, 'Zharki', 'Erangel', '2011-11-03', 'FEMALE', 18),
(10, '40MS', 'PING', 'AIRTEL', 'NETWORK', '40ms@gmail.com', 1234657981, 'Military Base', 'Erangel', '2013-11-15', 'MALE', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bca`
--
ALTER TABLE `bca`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bca`
--
ALTER TABLE `bca`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
