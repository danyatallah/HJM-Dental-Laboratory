-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2016 at 05:26 AM
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
-- Table structure for table `tblcase`
--

CREATE TABLE `tblcase` (
  `CaseID` int(11) NOT NULL,
  `DentistID` int(11) NOT NULL,
  `patient` varchar(50) NOT NULL,
  `duedate` varchar(15) NOT NULL,
  `duetime` varchar(15) NOT NULL,
  `orderdatetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` varchar(15) NOT NULL,
  `age` int(11) NOT NULL,
  `notes` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcase`
--

INSERT INTO `tblcase` (`CaseID`, `DentistID`, `patient`, `duedate`, `duetime`, `orderdatetime`, `gender`, `age`, `notes`, `file`) VALUES
(1, 2, 'Linji Onifur', '2016-05-12', '15:03', '2016-04-30 09:45:00', 'Male', 19, 'Ganja Ring', 'bakery1.png'),
(2, 3, 'Gideon Flores', '2016-05-18', '21:00', '2016-04-30 11:07:31', 'Male', 18, 'Horse Type', 'horse.JPG');

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
  `shipbrgy` varchar(100) NOT NULL,
  `shipcity` varchar(100) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldentist`
--

INSERT INTO `tbldentist` (`DentistID`, `title`, `firstname`, `middlename`, `lastname`, `company`, `email`, `telephone`, `mobile`, `website`, `bstreet`, `bbrgy`, `bcity`, `shipstreet`, `shipbrgy`, `shipcity`, `notes`) VALUES
(2, 'Mr.', 'Nivlew', 'Olamit', 'Medina', 'Stoned Barber Shop', 'Nivlew@gmail.com', '5432101', '09776343033', 'www.barbs.com', 'Blk. 12345 Kalantas St.', 'Western Bicutan', 'Taguig City', 'Blk. 12345 Kalantas St.', 'Western Bicutan', 'Taguig City', ''),
(3, 'Mr.', 'Ralph Lawrence', '', 'Pagayon', 'Bogus Ticketing System', 'bogus@gmail.com', '5478962', '58796324', '', '#420 Tagaytay Hills Road', 'Damuhan', 'Tagaytay CIty', '#420 Tagaytay Hills Road', 'Damuhan', 'Tagaytay CIty', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcase`
--
ALTER TABLE `tblcase`
  ADD PRIMARY KEY (`CaseID`);

--
-- Indexes for table `tbldentist`
--
ALTER TABLE `tbldentist`
  ADD PRIMARY KEY (`DentistID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcase`
--
ALTER TABLE `tblcase`
  MODIFY `CaseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbldentist`
--
ALTER TABLE `tbldentist`
  MODIFY `DentistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
