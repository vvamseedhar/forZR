-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2013 at 05:53 AM
-- Server version: 5.5.16
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

-- --------------------------------------------------------

--
-- Table structure for table `movieprofits`
--

CREATE TABLE IF NOT EXISTS `movieprofits` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `movie_id` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `movieprofits`
--

INSERT INTO `movieprofits` (`id`, `movie_id`, `date`, `profit`) VALUES
(1, 1, '2013-05-05', '40'),
(2, 1, '2013-05-06', '65'),
(3, 1, '2013-05-07', '57'),
(4, 1, '2013-05-08', '85'),
(5, 1, '2013-05-09', '90'),
(6, 2, '2013-05-05', '90'),
(7, 2, '2013-05-06', '40'),
(8, 2, '2013-05-07', '20'),
(9, 2, '2013-05-08', '70'),
(10, 2, '2013-05-09', '75'),
(11, 3, '2013-05-05', '60'),
(12, 3, '2013-05-06', '90'),
(13, 3, '2013-05-07', '50'),
(14, 3, '2013-05-08', '60'),
(15, 3, '2013-05-09', '20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
