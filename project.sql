-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2023 at 04:26 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `Zip` varchar(7) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `SchoolName` varchar(150) NOT NULL,
  `SchoolStreet` varchar(100) NOT NULL,
  `SchoolZip` varchar(7) NOT NULL,
  `SchoolCountry` varchar(50) NOT NULL,
  `EFirstName` varchar(50) NOT NULL,
  `ELastName` varchar(50) NOT NULL,
  `EEmail` varchar(100) NOT NULL,
  `EPhone` varchar(12) NOT NULL,
  `RoomType` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `State` varchar(10) NOT NULL,
  `ResidentType` varchar(20) NOT NULL,
  `hasResident` int(1) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`AID`, `FirstName`, `LastName`, `Gender`, `DOB`, `Phone`, `Email`, `Street`, `Zip`, `Country`, `SchoolName`, `SchoolStreet`, `SchoolZip`, `SchoolCountry`, `EFirstName`, `ELastName`, `EEmail`, `EPhone`, `RoomType`, `Password`, `State`, `ResidentType`, `hasResident`) VALUES
(25, 'adsf', 'asdf', 'Male', '2023-04-07', '07061843610', 'admin@admin.com', 'asdf', '123', 'sad', 'sdfa', 'asdf', '123', 'sdaf', 'asdfqwer', 'wqer', 'alk@icloud.com', '1232134321f', 'Single', '123', 'Accepted', 'ragular', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE IF NOT EXISTS `resident` (
  `ResidentID` int(11) NOT NULL AUTO_INCREMENT,
  `AID` int(11) NOT NULL,
  `RoomID` varchar(11) NOT NULL,
  `Assigned_at` date NOT NULL,
  `Unassigned_at` date DEFAULT NULL,
  `Assigned` int(1) NOT NULL,
  PRIMARY KEY (`ResidentID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`ResidentID`, `AID`, `RoomID`, `Assigned_at`, `Unassigned_at`, `Assigned`) VALUES
(1, 25, '1', '2023-04-08', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `residentadvisor`
--

DROP TABLE IF EXISTS `residentadvisor`;
CREATE TABLE IF NOT EXISTS `residentadvisor` (
  `RID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residentadvisor`
--

INSERT INTO `residentadvisor` (`RID`, `FirstName`, `LastName`, `Gender`, `DOB`, `Email`, `Password`) VALUES
(1, 'firstname', 'lastname', 'Male', '2000-04-11', 'adsf@mail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Block` varchar(1) NOT NULL,
  `RoomNo` int(11) NOT NULL,
  `RoomCapacity` int(1) NOT NULL,
  `accupacyAmount` int(1) NOT NULL,
  `Type` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `Block`, `RoomNo`, `RoomCapacity`, `accupacyAmount`, `Type`) VALUES
(1, 'G', 1, 1, 1, 'Single'),
(2, 'G', 2, 2, 0, 'Double'),
(3, 'H', 3, 1, 0, 'Single'),
(4, 'H', 4, 2, 0, 'Double');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
