-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 06:02 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_absenteeism`
--

CREATE TABLE IF NOT EXISTS `new_absenteeism` (
  `Id` int(50) NOT NULL,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_admin`
--

CREATE TABLE IF NOT EXISTS `new_admin` (
  `id` int(2) NOT NULL,
  `UserName` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `Licens` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `new_admin`
--

INSERT INTO `new_admin` (`id`, `UserName`, `Password`, `Licens`) VALUES
(1, 'hekta', '692e4372b61dc200e3a7cd8c9c657acb0c28f80d2edf07802afd6b9f8ea1a727', 79122100);

-- --------------------------------------------------------

--
-- Table structure for table `new_class_obligation`
--

CREATE TABLE IF NOT EXISTS `new_class_obligation` (
  `Id` int(50) NOT NULL,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Rust` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_decrease_score`
--

CREATE TABLE IF NOT EXISTS `new_decrease_score` (
  `Title` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `Valuee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `new_decrease_score`
--

INSERT INTO `new_decrease_score` (`Title`, `Valuee`) VALUES
('Ghey', 0.25),
('Takh', 0.25),
('Taz', 0.25),
('Td', 0.25),
('Te', 0.25),
('Tsh', 0.25);

-- --------------------------------------------------------

--
-- Table structure for table `new_delay`
--

CREATE TABLE IF NOT EXISTS `new_delay` (
  `id` int(50) NOT NULL,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Hour` int(2) NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_discipline_obligation`
--

CREATE TABLE IF NOT EXISTS `new_discipline_obligation` (
  `id` int(50) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Rust` varchar(20) NOT NULL,
  `Note` varchar(250) NOT NULL,
  `SubId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `new_encouragement`
--

CREATE TABLE IF NOT EXISTS `new_encouragement` (
  `Id` int(50) NOT NULL,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_reminder`
--

CREATE TABLE IF NOT EXISTS `new_reminder` (
  `Id` int(50) NOT NULL,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_student`
--

CREATE TABLE IF NOT EXISTS `new_student` (
  `id` int(50) NOT NULL,
  `Name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Family` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `FatherName` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Expertise` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `BirthDay` date NOT NULL,
  `Phone` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE IF NOT EXISTS `new_record` (
  `id` int(50) NOT NULL,
  `Day` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `Date` date NOT NULL,
  `Item` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `Note` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `SubId` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_absenteeism`
--
ALTER TABLE `new_absenteeism`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `new_admin`
--
ALTER TABLE `new_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_class_obligation`
--
ALTER TABLE `new_class_obligation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `new_decrease_score`
--
ALTER TABLE `new_decrease_score`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `new_delay`
--
ALTER TABLE `new_delay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_discipline_obligation`
--
ALTER TABLE `new_discipline_obligation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_encouragement`
--
ALTER TABLE `new_encouragement`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `new_reminder`
--
ALTER TABLE `new_reminder`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `new_student`
--
ALTER TABLE `new_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_absenteeism`
--
ALTER TABLE `new_absenteeism`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_admin`
--
ALTER TABLE `new_admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `new_class_obligation`
--
ALTER TABLE `new_class_obligation`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_delay`
--
ALTER TABLE `new_delay`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_discipline_obligation`
--
ALTER TABLE `new_discipline_obligation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_encouragement`
--
ALTER TABLE `new_encouragement`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_reminder`
--
ALTER TABLE `new_reminder`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_student`
--
ALTER TABLE `new_student`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
