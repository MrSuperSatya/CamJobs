-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2014 at 04:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `camjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Industry` varchar(255) NOT NULL,
  `EmpSize` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `ContactPerson` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `UserName`, `Password`, `Name`, `Industry`, `EmpSize`, `Location`, `ContactPerson`, `Phone`, `Email`, `Website`, `Address`, `Description`) VALUES
(1, 'satya', '123', 'Satya Corporation', 'Information Technology', '50 - 100', 'Phnom Penh', 'Chan Navy', '012 324 456', 'channavy@gmail.com', 'satya.com.kh', '#43 St. 234 Chamkamorn PP', 'NOVA is one of well- known innovative graphic design agencies engaged in the creation of\r\ncommunication and marketing materials for a wide variety of clients, including privatecompanies, \r\npublic institutions, and NGO¹s. NOVA¹s activities focus ongraphic design and advertising for print, web');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CompanyID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `YearExp` varchar(255) NOT NULL,
  `Function` tinyint(4) NOT NULL,
  `Hiring` tinyint(4) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `Qual` tinyint(4) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Location` tinyint(4) NOT NULL,
  `PostDate` date NOT NULL,
  `ClosingDate` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ID`, `CompanyID`, `Title`, `YearExp`, `Function`, `Hiring`, `Salary`, `Qual`, `Sex`, `Language`, `Age`, `Location`, `PostDate`, `ClosingDate`) VALUES
(1, 1, 'Mobile App Developer', '2', 15, 3, '300$ - $500', 0, '', 'English', '22 - 35', 0, '2014-12-01', '2015-01-15'),
(2, 1, 'Web Developer', '5', 15, 5, '$400 - $700', 0, '', 'English', '22 - 35', 0, '2014-12-01', '2015-03-11'),
(4, 1, 'Web Designer', '3 - 5', 15, 2, '$500- $700', 1, 'both', 'English, Japanese', '22', 1, '2014-12-01', '2015-01-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
