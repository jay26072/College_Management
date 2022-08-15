-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2022 at 06:33 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `Name`, `Dept`, `Dob`, `Email`, `Mobile`, `Password`) VALUES
(1, 'Jay', 'BCA', '2002-07-26', 'jay26@gmail.com', '7096291554', '4ba29b9f9e5732ed33761840f4ba6c53'),
(2, 'Keval', 'BBA', '2003-07-26', 'keval03@gmail.com', '9979280211', 'a591024321c5e2bdbd23ed35f0574dde');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Rollno` varchar(255) NOT NULL,
  `Sname` varchar(255) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Depart` varchar(255) NOT NULL,
  `Sem` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Rollno`, `Sname`, `Dob`, `Email`, `Mobile`, `Depart`, `Sem`, `Address`) VALUES
(1, '20BCA86', 'Jay Patel', '2002-07-26', '20bca86@vtcbb.edu.in', '7096291554', 'BCA', '5', 'Bardoli'),
(2, '20BCA115', 'Keval', '2003-07-26', '20bca115@vtcbb.edu.in', '9979280211', 'BCA', '5', 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `tbldept`
--

DROP TABLE IF EXISTS `tbldept`;
CREATE TABLE IF NOT EXISTS `tbldept` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Department` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldept`
--

INSERT INTO `tbldept` (`Id`, `Department`) VALUES
(1, 'BCA'),
(2, 'BBA'),
(3, 'MCA'),
(4, 'MBA'),
(5, 'B.Sci'),
(6, 'M.Sci');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `email`, `Mobile`, `password`) VALUES
(1, 'jay', 'jay26@gmail.com', '7096291554', '4ba29b9f9e5732ed33761840f4ba6c53'),
(2, 'admin', 'abc@gmail.com', '9876543210', '4ba29b9f9e5732ed33761840f4ba6c53'),
(3, 'jay26', 'jay26@gmail.com', '9876543210', '4ba29b9f9e5732ed33761840f4ba6c53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
