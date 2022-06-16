-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 06:37 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `berwashop`
--
CREATE DATABASE IF NOT EXISTS `berwashop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `berwashop`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productcode` int(11) NOT NULL,
  `productname` varchar(122) NOT NULL,
  PRIMARY KEY (`productcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productcode`, `productname`) VALUES
(1, 'rice'),
(2, 'cassava'),
(3, 'chicken'),
(4, 'irish potato');

-- --------------------------------------------------------

--
-- Table structure for table `productin`
--

CREATE TABLE IF NOT EXISTS `productin` (
  `productcode` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `quantity` varchar(122) DEFAULT NULL,
  `uniqueprice` varchar(122) DEFAULT NULL,
  `totalprice` varchar(122) DEFAULT NULL,
  KEY `productcode` (`productcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productin`
--

INSERT INTO `productin` (`productcode`, `date`, `quantity`, `uniqueprice`, `totalprice`) VALUES
(1, '2022-06-01', '24kg', '1200', '28800'),
(2, '2022-06-02', '31kg', '300', '9300');

-- --------------------------------------------------------

--
-- Table structure for table `productout`
--

CREATE TABLE IF NOT EXISTS `productout` (
  `productcode` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` varchar(122) DEFAULT NULL,
  `uniqueprice` varchar(122) DEFAULT NULL,
  `totalprice` varchar(122) DEFAULT NULL,
  KEY `productcode` (`productcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productout`
--

INSERT INTO `productout` (`productcode`, `date`, `quantity`, `uniqueprice`, `totalprice`) VALUES
(3, '2022-06-13 09:14:47', '40kg', '2000', '80000'),
(4, '2022-06-13 09:43:28', '21kg', '4000', '84000');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE IF NOT EXISTS `shopkeeper` (
  `shoopkeeperid` int(11) NOT NULL,
  `username` varchar(122) NOT NULL,
  `password` varchar(122) NOT NULL,
  PRIMARY KEY (`shoopkeeperid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`shoopkeeperid`, `username`, `password`) VALUES
(1, 'aime@gmail.com', '2003');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productin`
--
ALTER TABLE `productin`
  ADD CONSTRAINT `productin_ibfk_1` FOREIGN KEY (`productcode`) REFERENCES `product` (`productcode`);

--
-- Constraints for table `productout`
--
ALTER TABLE `productout`
  ADD CONSTRAINT `productout_ibfk_1` FOREIGN KEY (`productcode`) REFERENCES `product` (`productcode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
