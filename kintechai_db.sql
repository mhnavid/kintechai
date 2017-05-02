-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 07:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kintechai_db`
--
CREATE DATABASE IF NOT EXISTS `kintechai_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kintechai_db`;

-- --------------------------------------------------------

--
-- Table structure for table `u_contacts`
--

CREATE TABLE `u_contacts` (
  `id` int(5) NOT NULL,
  `contacts` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_contacts`
--

INSERT INTO `u_contacts` (`id`, `contacts`) VALUES
(1, '3043');

-- --------------------------------------------------------

--
-- Table structure for table `u_info`
--

CREATE TABLE `u_info` (
  `id` int(5) DEFAULT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_info`
--

INSERT INTO `u_info` (`id`, `f_name`, `l_name`, `occupation`, `gender`, `type`) VALUES
(1, 'Shawan', 'Chowdhury', 'Student', 'male', 'Corporate');

-- --------------------------------------------------------

--
-- Table structure for table `u_login`
--

CREATE TABLE `u_login` (
  `id` int(5) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_login`
--

INSERT INTO `u_login` (`id`, `user_name`, `email`, `pass`) VALUES
(1, 'Shawan', 'something', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_contacts`
--
ALTER TABLE `u_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_info`
--
ALTER TABLE `u_info`
  ADD KEY `id` (`id`);

--
-- Indexes for table `u_login`
--
ALTER TABLE `u_login`
  ADD KEY `id` (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `u_info`
--
ALTER TABLE `u_info`
  ADD CONSTRAINT `u_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `u_contacts` (`id`);

--
-- Constraints for table `u_login`
--
ALTER TABLE `u_login`
  ADD CONSTRAINT `u_login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `u_contacts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
