-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 09:51 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `psw` int(11) DEFAULT NULL,
  `cont` int(11) DEFAULT NULL,
  `addrs` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `psw`, `cont`, `addrs`) VALUES
('ks saini', 'whatsapplife173@gmail.com', 11111, 99999999, 'D20 kalka Green , Shanti kunj'),
('ks saini', 'whatsapplife173@gmail.com', 11111, 99999999, 'D20 kalka Green , Shanti kunj'),
('rahul', 'rahul188@gmail.com', 222222, 2147483647, 'ZIRAKPUR'),
('ks saini', 'whatsapplife173@gmail.com', 11111, 2147483647, 'D20 kalka Green , Shanti kunj'),
('mohan', 'mohan123@gmail.com', 11111, 2147483647, 'chandigarh'),
('harry', 'harry123@gmail.com', 12345, 2147483647, 'chandigarh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
