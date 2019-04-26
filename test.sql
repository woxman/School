-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 08:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(50) NOT NULL,
  `Name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Family` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `FatherName` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Expertise` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `BirthDay` date NOT NULL,
  `Phone` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `Address` varchar(300) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `Family`, `FatherName`, `Expertise`, `BirthDay`, `Phone`, `Address`) VALUES
(57, 'امیرحسین', 'بهرامی', 'محمد', 'دوازدهم مکانیک', '2018-03-24', '09184899437', 'ساوه-آوینی'),
(60, 'امیرحسین', 'رافعی', 'علی', 'دوازدهم مکانیک', '2014-01-21', '09136499536', 'ساوه-آوینی');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
