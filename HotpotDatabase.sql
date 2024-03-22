-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2024 at 08:44 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotpotdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerID` int(3) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `customerGender` varchar(100) NOT NULL,
  `customerAge` int(3) NOT NULL,
  `paxNumber` int(2) NOT NULL,
  `customerPhoneNumber` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `cuisineType` varchar(255) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerName`, `password`, `customerGender`, `customerAge`, `paxNumber`, `customerPhoneNumber`, `customerEmail`, `cuisineType`) VALUES
(10, 'Suah Li Jea Richie', 's', 'male', 20, 0, '0123456789', 'suahswag24@gmail.com', 'Malaysian Hot Pot');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE IF NOT EXISTS `ordertable` (
  `orderID` int(255) NOT NULL AUTO_INCREMENT,
  `customerID` varchar(255) NOT NULL,
  `packageNum` varchar(5) NOT NULL,
  `seatNum` varchar(255) NOT NULL,
  `totalPrice` double NOT NULL,
  `bookingStatus` varchar(255) NOT NULL,
  `bookingDate` date NOT NULL,
  `bookingStartTime` time NOT NULL,
  `bookingEndTime` time NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderID`, `customerID`, `packageNum`, `seatNum`, `totalPrice`, `bookingStatus`, `bookingDate`, `bookingStartTime`, `bookingEndTime`) VALUES
(10, '10', '1', '1,2', 90, 'pending', '2024-03-22', '15:53:00', '18:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `packagetable`
--

CREATE TABLE IF NOT EXISTS `packagetable` (
  `packageNum` varchar(255) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packageItem` longtext NOT NULL,
  `packagePrice` double NOT NULL,
  `packageImage` varchar(255) NOT NULL,
  `packageCuisine` varchar(255) NOT NULL,
  `recommendedPax` int(11) NOT NULL,
  PRIMARY KEY (`packageNum`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagetable`
--

INSERT INTO `packagetable` (`packageNum`, `packageName`, `packageItem`, `packagePrice`, `packageImage`, `packageCuisine`, `recommendedPax`) VALUES
('ATest', 'Test', 'Test', 20, '5', 'Others', 5),
('A-Test2', 'Sandwich', 'Ham', 50, '', 'Others', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
