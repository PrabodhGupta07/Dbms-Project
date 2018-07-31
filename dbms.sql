-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2014 at 07:31 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `customer_id` int(11) NOT NULL ,
  `cname` varchar(20) NOT NULL,
  `clocation` varchar(20) NOT NULL,
  `email_id` varchar(255) COLLATE armscii8_bin NOT NULL,
  `cphone_no` int(11) NOT NULL,
  `payment` int(20) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin AUTO_INCREMENT=2 ;


--



-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `driver_id` int(15) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dage` int(5) NOT NULL,
  `dlocation` varchar(50) NOT NULL,
  `licence_no` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  PRIMARY KEY (`driver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--

-- --------------------------------------------------------
--