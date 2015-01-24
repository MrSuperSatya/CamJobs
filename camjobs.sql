-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2015 at 01:12 PM
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
  `Type` tinyint(4) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `UserName`, `Password`, `Name`, `Type`, `Industry`, `EmpSize`, `Location`, `ContactPerson`, `Phone`, `Email`, `Website`, `Address`, `Description`) VALUES
(1, 'satya', '123', 'Satya Corporation', 0, 'Information Technology', '50 - 100', 'Phnom Penh', 'Chan Navy', '012 324 456', 'channavy@gmail.com', 'satya.com.kh', '#43 St. 234 Chamkamorn PP', 'NOVA is one of well- known innovative graphic design agencies engaged in the creation of\r\ncommunication and marketing materials for a wide variety of clients, including privatecompanies, \r\npublic institutions, and NGO¹s. NOVA¹s activities focus ongraphic design and advertising for print, web');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CompanyID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Term` varchar(64) NOT NULL,
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
  `Description` text NOT NULL,
  `Requirement` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ID`, `CompanyID`, `Title`, `Term`, `YearExp`, `Function`, `Hiring`, `Salary`, `Qual`, `Sex`, `Language`, `Age`, `Location`, `PostDate`, `ClosingDate`, `Description`, `Requirement`) VALUES
(1, 1, 'Android Application Developer', 'Full Time', '2', 15, 3, '300$ - $500', 0, 'Male/Female', 'English', '22 - 35', 0, '2014-12-01', '2015-01-15', '. Develop software from approved designs and / or requirements, adhering to all relevant standards and making efficient use of in house software development environment.\r\n. Software designs and ideas for new functionality, improvements and bug fixes.\r\n. Design, develop and perform Unit, System and Integration testing of software components.\r\n. Fully document any developed software and ensure code quality is in line with the relevant coding standards.', '. Male / Female, age 20-30 years old.\r\n. Bachelor’s Degree in Computer Science, or related fields.\r\n. Ability to work least unsupervised and within a team to achieve objectives within appropriate timescales.\r\n. Flexibility in working hours in line with project deadlines.\r\n. At least 2 years experience in Microsoft SQL server, C#, VB.net, Visual Studio 2005/2008, Crystal report, ASP.net, and Warehouse Software.'),
(2, 1, 'Web Developer', 'Full Time', '5', 15, 5, '$400 - $700', 0, 'Male/Female', 'English', '22 - 35', 0, '2015-01-16', '2015-03-11', '. Develop software from approved designs and / or requirements, adhering to all relevant standards and making efficient use of in house software development environment.\r\n. Software designs and ideas for new functionality, improvements and bug fixes.\r\n. Design, develop and perform Unit, System and Integration testing of software components.\r\n. Fully document any developed software and ensure code quality is in line with the relevant coding standards.', '. Male / Female, age 20-30 years old.\r\n. Bachelor’s Degree in Computer Science, or related fields.\r\n. Ability to work least unsupervised and within a team to achieve objectives within appropriate timescales.\r\n. Flexibility in working hours in line with project deadlines.\r\n. At least 2 years experience in Microsoft SQL server, C#, VB.net, Visual Studio 2005/2008, Crystal report, ASP.net, and Warehouse Software.'),
(4, 1, 'Web Designer', 'Full Time', '3 - 5', 15, 2, '$500- $700', 1, 'Male/Female', 'English, Japanese', '22', 1, '2014-12-01', '2015-01-01', '. Develop software from approved designs and / or requirements, adhering to all relevant standards and making efficient use of in house software development environment.\r\n. Software designs and ideas for new functionality, improvements and bug fixes.\r\n. Design, develop and perform Unit, System and Integration testing of software components.\r\n. Fully document any developed software and ensure code quality is in line with the relevant coding standards.', '. Male / Female, age 20-30 years old.\r\n. Bachelor’s Degree in Computer Science, or related fields.\r\n. Ability to work least unsupervised and within a team to achieve objectives within appropriate timescales.\r\n. Flexibility in working hours in line with project deadlines.\r\n. At least 2 years experience in Microsoft SQL server, C#, VB.net, Visual Studio 2005/2008, Crystal report, ASP.net, and Warehouse Software.'),
(5, 1, 'System Anaysis', 'Full Time', '2- 3 years', 15, 2, '$500 - $700', 2, 'Male', 'English', '22 - 35', 1, '2015-01-17', '2015-02-25', '- Basic and general accounting work\r\n- Documents the accounting information following accounting procedure\r\n- Keeping all company transaction, office vouchers, and accounting files\r\n- Record all transactions following accounting standard\r\n- Prepare payment for company transaction and requesting reimbursement and staff salary\r\n- Prepare accounting reports for financial manager\r\n- Accounting and taxation related\r\n- Other tasks assigned by the manager ', '- Bachelor''s degree in accounting or finance\r\n- 1-2 Year experience in Accounting Roles\r\n- Computer literate (Ms word, excel), especially Quick book\r\n- Speaking English and Chinese is a plus\r\n- Strong interpersonal skills. \r\n- Honest and hard working is a must\r\n- Self motivated\r\n- working under pressure and long hours when necessary'),
(6, 1, 'Hardware Engineer', '', '2', 15, 5, '$800 - $900', 1, 'Male', 'English', '26 - 45', 0, '0000-00-00', '0000-00-00', '', ''),
(7, 1, 'Hardware Engineer', '', '2', 15, 5, '$800 - $900', 1, 'Male', 'English', '26 - 45', 0, '0000-00-00', '0000-00-00', '', ''),
(8, 1, 'Hardware Engineer', '', '2', 15, 5, '$800 - $900', 1, 'Male', 'English', '26 - 45', 0, '0000-00-00', '0000-00-00', '', ''),
(9, 1, 'Financial Accountant', '', '2', 0, 8, '$2000 - $3000', 2, 'Male/Female', 'English', '', 0, '0000-00-00', '0000-00-00', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
