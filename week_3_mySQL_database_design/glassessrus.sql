-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2019 at 08:30 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `glassessrus`
--
CREATE DATABASE IF NOT EXISTS `glassessrus` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `glassessrus`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(10) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Desription` text NOT NULL,
  `Quantiti` int(11) NOT NULL,
  `Coast` float NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`),
  KEY `Id_2` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseproduct`
--

CREATE TABLE IF NOT EXISTS `purchaseproduct` (
  `product_Id` int(11) NOT NULL,
  `purchases_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` float NOT NULL,
  KEY `product_Id` (`product_Id`),
  KEY `purchases_Id` (`purchases_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `customers_Id` int(11) NOT NULL,
  `Day` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `customers_Id` (`customers_Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchaseproduct`
--
ALTER TABLE `purchaseproduct`
  ADD CONSTRAINT `purchaseproduct_ibfk_2` FOREIGN KEY (`purchases_Id`) REFERENCES `purchases` (`Id`),
  ADD CONSTRAINT `purchaseproduct_ibfk_1` FOREIGN KEY (`product_Id`) REFERENCES `products` (`Id`);

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`customers_Id`) REFERENCES `customers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
