-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 10:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plan_my_night`
--
CREATE DATABASE IF NOT EXISTS `plan_my_night` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `plan_my_night`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `idcomment` int(11) NOT NULL AUTO_INCREMENT,
  `idplace` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idcomment`),
  UNIQUE KEY `idcomment_UNIQUE` (`idcomment`),
  KEY `id_user_comm_idx` (`iduser`),
  KEY `id_place_comm_idx` (`idplace`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `idmark` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idplace` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`idmark`),
  KEY `id_place_mark_idx` (`idplace`),
  KEY `id_user_mark` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`idmark`, `iduser`, `idplace`, `mark`) VALUES
(4, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `iduser` int(11) NOT NULL,
  `jmbg` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `jmbg_UNIQUE` (`jmbg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`iduser`, `jmbg`, `license`, `address`) VALUES
(1, '12342', '1234', 'Bulevar kralja Aleksandra 191');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `idplace` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricing` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`idplace`),
  UNIQUE KEY `idplace_UNIQUE` (`idplace`),
  KEY `id_user_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`idplace`, `name`, `address`, `pricing`, `iduser`) VALUES
(1, 'Kafana Ona Moja', 'Bulevar kralja Aleksandra 191', '$$$$', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `idplan` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`idplan`),
  KEY `id_user_plan_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`idplan`, `date`, `iduser`) VALUES
(1, '2021-06-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plan_place`
--

DROP TABLE IF EXISTS `plan_place`;
CREATE TABLE IF NOT EXISTS `plan_place` (
  `idplan_place` int(11) NOT NULL AUTO_INCREMENT,
  `idplan` int(11) NOT NULL,
  `idplace` int(11) NOT NULL,
  PRIMARY KEY (`idplan_place`),
  KEY `id_place_conn_idx` (`idplace`),
  KEY `id_plan_conn` (`idplan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_place`
--

INSERT INTO `plan_place` (`idplan_place`, `idplan`, `idplace`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

DROP TABLE IF EXISTS `preferences`;
CREATE TABLE IF NOT EXISTS `preferences` (
  `iduser` int(11) NOT NULL,
  `musictype` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `party_start` time NOT NULL,
  `party_end` time DEFAULT NULL,
  `changelocation` int(10) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`iduser`, `musictype`, `money`, `party_start`, `party_end`, `changelocation`) VALUES
(1, 'live jazz', 12000, '20:20:00', '02:20:00', 0000000000);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE IF NOT EXISTS `program` (
  `idplace` int(11) NOT NULL,
  `monday` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuesday` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wednesday` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thursday` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friday` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturday` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sunday` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `week_date` date NOT NULL,
  `work_time_start` time NOT NULL,
  `work_time_end` time NOT NULL,
  `programcol` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idplace`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`idplace`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `week_date`, `work_time_start`, `work_time_end`, `programcol`) VALUES
(1, 'jazz', 'jazz', 'jazz', 'jazz', 'jazz', 'jazz', 'jazz', '2021-06-07', '20:00:00', '04:23:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `name`, `surname`, `username`, `password`, `email`, `role`) VALUES
(1, 'Jovan', 'Ivkovic', 'joca', '123456', 'jovanivko@gmail.com', 0000000000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `id_place_comm` FOREIGN KEY (`idplace`) REFERENCES `place` (`idplace`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_comm` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `id_place_mark` FOREIGN KEY (`idplace`) REFERENCES `place` (`idplace`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_mark` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `id_user_owner` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `id_user_place` FOREIGN KEY (`iduser`) REFERENCES `owner` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `id_user_plan` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_place`
--
ALTER TABLE `plan_place`
  ADD CONSTRAINT `id_place_conn` FOREIGN KEY (`idplace`) REFERENCES `place` (`idplace`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_plan_conn` FOREIGN KEY (`idplan`) REFERENCES `plan` (`idplan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `preferences`
--
ALTER TABLE `preferences`
  ADD CONSTRAINT `id_user_pref` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `id_place_prog` FOREIGN KEY (`idplace`) REFERENCES `place` (`idplace`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
