-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2011 at 11:44 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Stores customer information' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `fname`, `mname`, `lname`, `email`, `billadd`, `shipadd`, `phno`, `bdate`, `uname`, `passwd`) VALUES
(1, 'Mr', 'Anish', 'Ninad', 'Khale', 'anishkhale@yahoo.com', 'Andheri East', 'Andheri East', 9930731928, '1990-10-17', 'anish', 'password'),
(2, 'Mr', 'Rahul', 'Ramesh', 'Kelaskar', 'rahul123@gmail.com', 'Virar West', 'Virar West', 9970796053, '1990-07-04', 'rahul', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
