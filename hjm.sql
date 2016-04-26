-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 09:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hjm`
--
CREATE DATABASE IF NOT EXISTS `hjm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hjm`;

-- --------------------------------------------------------

--
-- Table structure for table `tbldentist`
--

CREATE TABLE `tbldentist` (
  `DentistID` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `bstreet` varchar(500) NOT NULL,
  `bbrgy` varchar(100) NOT NULL,
  `bcity` varchar(100) NOT NULL,
  `shipstreet` varchar(500) NOT NULL,
  `shipcity` varchar(100) NOT NULL,
  `shipbrgy` varchar(100) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldentist`
--

INSERT INTO `tbldentist` (`DentistID`, `title`, `firstname`, `middlename`, `lastname`, `company`, `email`, `telephone`, `mobile`, `website`, `bstreet`, `bbrgy`, `bcity`, `shipstreet`, `shipcity`, `shipbrgy`, `notes`) VALUES
(1, 'Mr.', 'Linji', '', 'Rufino', 'Stoned Corpse', 'stoned@gmail.com', '123456', '09156396650', '', 'Blk. 28 Lot 67 Stoned St.', 'New Stoner', 'Manila City', 'Blk. 28 Lot 67 Stoned St.', 'Manila', 'New Stoner City', ''),
(2, 'Mr.', 'Nivlew', '', 'Medina', 'Stoned Barbs', 'Nivlew@gmailc.om', '', '09776343033', '', 'Blk. 12345 Kalantas St.', 'Western Bicutan', 'Taguig City', 'Blk. 15 Lot 1 Herbs St. Ext. P. 2-A', 'Taguig City', 'New Lower Bictuan', ''),
(3, 'Mr.', 'Ralph Lawrence', '', 'Pagayon', 'Bogus Ticketing System', 'bogus@gmail.com', '12345', '58796324', '', 'Sa may kanto ng Sucat', 'Moonwalk', 'Paranaque City', 'Sa may kanto ng Sucat', 'Paranaque City', 'Moonwalk', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldentist`
--
ALTER TABLE `tbldentist`
  ADD PRIMARY KEY (`DentistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldentist`
--
ALTER TABLE `tbldentist`
  MODIFY `DentistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
