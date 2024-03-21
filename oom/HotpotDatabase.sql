-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2024 at 04:07 PM
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
  `customerGender` varchar(100) NOT NULL,
  `customerAge` int(3) NOT NULL,
  `paxNumber` int(2) NOT NULL,
  `customerPhoneNumber` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerName`, `customerGender`, `customerAge`, `paxNumber`, `customerPhoneNumber`, `customerEmail`) VALUES
(1, '22', 'male', 2, 1111, '2', '2'),
(2, '2', 'female', 2, 2, '2', '2');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`orderID`, `customerID`, `packageNum`, `seatNum`, `totalPrice`, `bookingStatus`, `bookingDate`, `bookingStartTime`, `bookingEndTime`) VALUES
(5, '2', '1', '4,5,6,7', 90, 'pending', '2024-03-21', '11:57:00', '14:57:00'),
(4, '2', '1', '1,2', 90, 'pending', '2024-03-21', '11:47:00', '12:48:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
