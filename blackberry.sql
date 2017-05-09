-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2017 at 08:17 PM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cooleman_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `blackberry1`
--

CREATE TABLE IF NOT EXISTS `blackberry` (
  `id` int(11) NOT NULL,
  `source` varchar(10) NOT NULL DEFAULT 'Grid',
  `easting` int(11) NOT NULL,
  `northing` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `size` text NOT NULL,
  `density` text NOT NULL,
  `health` text NOT NULL,
  `burnt` text NOT NULL,
  `comment` text,
  `creation_date` date NOT NULL,
  `last_updated_date` date NOT NULL DEFAULT '2016-04-25',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
