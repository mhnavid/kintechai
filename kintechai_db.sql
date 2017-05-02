-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 10:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `ucontacts`
--

CREATE TABLE `ucontacts` (
  `id` int(5) NOT NULL,
  `contactno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ucontacts`
--

INSERT INTO `ucontacts` (`id`, `contactno`) VALUES
(1, 123456789),
(2, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `uinformation`
--

CREATE TABLE `uinformation` (
  `ucontacts_id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uinformation`
--

INSERT INTO `uinformation` (`ucontacts_id`, `fname`, `lname`, `occupation`, `gender`, `type`) VALUES
(1, 'shahid', 'islam', 'student', 'male', ''),
(2, 'Shahidul', 'Islam', 'student', 'male', '');

-- --------------------------------------------------------

--
-- Table structure for table `ulogin`
--

CREATE TABLE `ulogin` (
  `ucontacts_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulogin`
--

INSERT INTO `ulogin` (`ucontacts_id`, `username`, `email`, `password`) VALUES
(1, 'shawon', 'shawonis08@gmial.com', '789456123'),
(2, 'shawonis', 'shahid@hotmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ucontacts`
--
ALTER TABLE `ucontacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uinformation`
--
ALTER TABLE `uinformation`
  ADD PRIMARY KEY (`ucontacts_id`);

--
-- Indexes for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD PRIMARY KEY (`ucontacts_id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ucontacts`
--
ALTER TABLE `ucontacts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uinformation`
--
ALTER TABLE `uinformation`
  MODIFY `ucontacts_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ulogin`
--
ALTER TABLE `ulogin`
  MODIFY `ucontacts_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `uinformation`
--
ALTER TABLE `uinformation`
  ADD CONSTRAINT `infocontacts` FOREIGN KEY (`ucontacts_id`) REFERENCES `ucontacts` (`id`);

--
-- Constraints for table `ulogin`
--
ALTER TABLE `ulogin`
  ADD CONSTRAINT `contact` FOREIGN KEY (`ucontacts_id`) REFERENCES `ucontacts` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
