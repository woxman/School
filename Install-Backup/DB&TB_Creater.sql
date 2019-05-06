-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2019 at 05:13 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_absenteeism`
--

DROP TABLE IF EXISTS `new_absenteeism`;
CREATE TABLE IF NOT EXISTS `new_absenteeism` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_admin`
--

DROP TABLE IF EXISTS `new_admin`;
CREATE TABLE IF NOT EXISTS `new_admin` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `new_admin`
--

INSERT INTO `new_admin` (`id`, `UserName`, `Password`) VALUES
(1, 'hekta', '692e4372b61dc200e3a7cd8c9c657acb0c28f80d2edf07802afd6b9f8ea1a727');

-- --------------------------------------------------------

--
-- Table structure for table `new_class_obligation`
--

DROP TABLE IF EXISTS `new_class_obligation`;
CREATE TABLE IF NOT EXISTS `new_class_obligation` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Rust` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_delay`
--

DROP TABLE IF EXISTS `new_delay`;
CREATE TABLE IF NOT EXISTS `new_delay` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Hour` int(2) NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_discipline_obligation`
--

DROP TABLE IF EXISTS `new_discipline_obligation`;
CREATE TABLE IF NOT EXISTS `new_discipline_obligation` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Day` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Rust` varchar(20) NOT NULL,
  `Note` varchar(250) NOT NULL,
  `SubId` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `new_encouragement`
--

DROP TABLE IF EXISTS `new_encouragement`;
CREATE TABLE IF NOT EXISTS `new_encouragement` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_reminder`
--

DROP TABLE IF EXISTS `new_reminder`;
CREATE TABLE IF NOT EXISTS `new_reminder` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_student`
--

DROP TABLE IF EXISTS `new_student`;
CREATE TABLE IF NOT EXISTS `new_student` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Family` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `FatherName` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Expertise` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `BirthDay` date NOT NULL,
  `Phone` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
