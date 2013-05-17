-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2013 at 05:37 AM
-- Server version: 5.1.51
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `checking`
--

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE IF NOT EXISTS `graph` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `datee` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `prof` varchar(255) NOT NULL,
  `OrderDate` date NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`id`, `datee`, `name`, `address`, `prof`, `OrderDate`, `ProductName`, `Quantity`) VALUES
(1, '2013-03-05', 'rajendra', '15', '20', '0000-00-00', '', 0),
(2, '2013-04-08', 'madhu', '20', '12', '0000-00-00', '', 0),
(3, '2013-05-05', 'mohan', '25', '45', '0000-00-00', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
