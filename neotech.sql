-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2011 at 03:22 PM
-- Server version: 5.5.15
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `neotech`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `cimg` longblob NOT NULL,
  `price` int(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `ssid` int(100) NOT NULL COMMENT 'Session ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pro_no` int(50) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `details` varchar(200) NOT NULL,
  PRIMARY KEY (`pro_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_no`, `pro_name`, `category`, `price`, `company`, `image`, `details`) VALUES
(101, 'Crucial m4 drive', 'Hard Drives', 391, 'Crucial', 'C:\\inetpub\\wwwroot\\Computer\\Database\\Images\\01_Hard Drives\\Crucial m4 256 GB 2.5 Solid State Drive($390.99).jpg', 'Its a 256 GB 2.5" Solid state drive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `billadd` varchar(100) NOT NULL,
  `shipadd` varchar(100) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `bdate` date NOT NULL,
  `uname` varchar(10) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Stores customer information' AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `fname`, `mname`, `lname`, `email`, `billadd`, `shipadd`, `phno`, `bdate`, `uname`, `passwd`) VALUES
(1, 'Mr', 'Anish', 'Ninad', 'Khale', 'anishkhale@yahoo.com', 'Andheri East', 'Andheri East', 9930731928, '1990-10-17', 'anish', 'password'),
(2, 'Mr', 'Rahul', 'Ramesh', 'Kelaskar', 'rahul123@gmail.com', 'Virar West', 'Virar West', 9970796053, '1990-07-04', 'rahul', 'password'),
(9, 'ms', 'Avni', 'Nanji', 'Nagda', 'avni@nagda.com', 'Malad', 'Malad', 9773092956, '1990-11-04', 'avni', 'pichuk'),
(10, 'mr', 'Ankit', '', 'Ghosalkar', 'ankit@gho.com', 'Borivli', 'Borivli', 1234567890, '1990-11-19', 'ankit', 'ankit'),
(11, 'mr', 'a', 'b', 'c', 'anish_1170@yahoo.com', 'a', 'a', 23671467, '2004-01-01', 'a', 'a'),
(12, 'mr', 'Akshay', '', 'Jagtap', 'akshay@jaggu.com', 'a', 'a', 9876632545, '2004-01-01', 'jaggu', 'jaggu'),
(13, 'mr', 'a', 'a', 'a', 'avni@nagda.com', 'a', 'a', 69, '2004-01-01', 'a', 'a'),
(14, 'mr', 'a', 'a', 'a', 'avni@nagda.com', 'a', 'a', 69, '2004-01-01', 'a', 'a'),
(15, 'mr', 'a', 'a', 'a', 'a', 'a', 'a', 1234567890, '2004-05-01', 'a', 'a'),
(16, 'mr', 'a', 'a', 'a', 'a', 'a', 'a', 1234567890, '2004-05-01', 'a', ''),
(17, 'mr', 'Rahul', 'Ramesh', 'Kelaskar', 'rahul@gmail.com', 'Virar(West)', 'Virar(West)', 9970796053, '1990-05-04', 'rahul', 'password'),
(18, 'mr', 'RahulK', '', 'Kelaskar', 'rahul1234@gmail.com', 'Virar', 'Virar', 9970796053, '2004-01-01', 'rahulk', ''),
(19, 'mr', 'AnishK', '', 'Khale', 'anishk@yahoo.com', 'Andheri', 'Andheri', 9930731928, '2004-01-01', 'AnishK', ''),
(20, 'mr', 'AnishK', '', 'Khale', 'anishk@yahoo.com', 'andheri', 'andheri', 9930731928, '2004-01-01', 'AnishK', 'an'),
(21, 'mr', 'RahulK', '', 'Kelaskar', 'rahulk1@gmail.com', 'virar', 'virar', 9970796053, '1987-02-17', 'RahulK123', 'Rahul@1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
