-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2020 at 10:17 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3
-- DB DDL

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicantinformation`
--

CREATE TABLE IF NOT EXISTS `applicantinformation` (
  `name` varchar(100) NOT NULL,
  `cv` blob NOT NULL,
  `skillset` varchar(10000) NOT NULL,
  `overall_proficiency` varchar(100) NOT NULL,
  `developmentYears` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `skillLevel` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicantinformation`
--

INSERT INTO `applicantinformation` (`name`, `cv`, `skillset`, `overall_proficiency`, `developmentYears`, `skills`, `skillLevel`, `experience`) VALUES
('', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
