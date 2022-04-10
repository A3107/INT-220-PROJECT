-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 09:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblitems`
--

CREATE TABLE IF NOT EXISTS `tblitems` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `tblitems`
--

INSERT INTO `tblitems` (`id`, `name`, `code`, `price`) VALUES
(1, 'Channa Bhatura', 'cb', 50.00),
(2, 'Aloo Ki Tikki', 'akt', 30.00),
(3, 'Dhokla', 'dkl', 45.00),
(4, 'Paneer Tikka', 'ptka', 50.00),
(5, 'Bedmi Puri', 'bpuri', 50.00),
(6, 'Veg Burger', 'vb', 40.00),
(7, 'Vegetable Sandwich', 'vs', 50.00),
(8, 'Paneer Tikka Sandwich', 'pts', 60.00),
(9, 'Masala Potato Sandwich', 'mps', 45.00),
(10, 'White Sauce Cream (Fusilli)', 'wsc', 50.00),
(11, 'Pink Sauce (Red & White Mix)', 'psrw', 50.00),
(12, 'Chaat Bhalla Papri', 'cbp', 40.00),
(13, 'Raj Kachori Chaat', 'rkc', 45.00),
(14, 'Golgappa', 'golgpa', 50.00),
(15, 'Dahi Golgappa', 'dg', 60.00),
(16, 'Margherita Pizza', 'mpza', 305.00),
(17, 'Paneer Tikka Pizza', 'ptpza', 350.00),
(18, 'Deluxe Paneer Pizza', 'dpza', 399.00),
(19, 'Sambar Vada', 'svda', 60.00),
(20, 'Shahi Paneer', 'shpnr', 90.00),
(21, 'Karahi Paneer', 'kpnr', 80.00),
(22, 'Mix Veg', 'mixvg', 60.00),
(23, 'Yellow Dal', 'ydal', 50.00),
(24, 'Matar Pulao', 'mtrplo', 59.00),
(25, 'Veg Biryani', 'vgbr', 60.00),
(26, 'Jeera Rice', 'jraric', 50.00),
(27, 'Plain Curd', 'plcur', 40.00),
(28, 'Boondi Raita with Bhalla', 'brwbh', 50.00),
(29, 'Green Salad', 'slad', 35.00),
(30, 'Tandoori Roti', 'tnroti', 50.00),
(31, 'Naan', 'naan', 55.00),
(32, 'Tandoori Paratha', 'tnprta', 60.00),
(33, 'Rabri', 'rbri', 35.00),
(34, 'Gajar Halwa ', 'gjrhla', 50.00),
(35, 'Kheer', 'kheer', 55.00),
(36, 'Coffee Pudding', 'copu', 60.00),
(37, 'Special Veg Thali', 'splvg', 75.00),
(38, 'Dal Roti', 'dlrti', 50.00),
(39, 'Rajma Chawal', 'rjchw', 55.00),
(40, 'Veg Manchurian', 'vgmnu', 90.00),
(41, 'Hakka Noodles', 'hnood', 75.00),
(42, 'Mushroom Chilli', 'muschil', 70.00),
(43, 'Chilli Garlic Chowmein', 'chgcw', 65.00),
(44, 'Cold Drink', 'coldrnk', 90.00),
(45, 'Mineral Water', 'mnrlw', 35.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
