-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2015 at 06:45 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.2-1ubuntu4.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE IF NOT EXISTS `gps` (
  `host` varchar(30) NOT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `active` int(20) NOT NULL,
  `BatteryStatus` int(10) NOT NULL,
  `Model` varchar(20) NOT NULL,
  PRIMARY KEY (`host`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gps`
--

INSERT INTO `gps` (`host`, `lastupdate`, `lat`, `lng`, `active`, `BatteryStatus`, `Model`) VALUES
('192.168.1.33', '2015-01-20 18:37:21', 25.805538, 160.967235, 1, 20, 'Samsung Galaxy Duos'),
('192.168.1.80', '2015-01-20 18:37:36', 44.805685, 101.966995, 0, 0, 'Nokia');
