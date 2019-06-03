-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 11:36 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smecreditportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `fi`
--

CREATE TABLE IF NOT EXISTS `fi` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `typeoffi` varchar(20) NOT NULL,
  `regstatus` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `scorelimit` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fi`
--

INSERT INTO `fi` (`ID`, `name`, `email`, `username`, `password`, `confirm`, `phone`, `typeoffi`, `regstatus`, `location`, `scorelimit`) VALUES
(1, 'stanbic', 'phoebe.tina70@gmail.com', 'dkh', 'hfgjh', '', 31425, 'Bank', 'yes', 'kikoni', 24),
(2, 'stand chart', 'phoebe.tina@yahoo.com', 'pheebz', 'rtyi', '', 782456525, 'Bank', 'yes', 'kampala', 7),
(3, 'equity', 'phoebe.tina@yahoo.com', 'mima', '436', '', 89465, 'Bank', 'yes', 'kampala', 78),
(4, 'bank', 'phoebe.tina70@gmail.com', 'enid', 'uhj', 'jvbkn', 65879, 'Sacco', 'yes', 'kampala', 78);

-- --------------------------------------------------------

--
-- Table structure for table `sme`
--

CREATE TABLE IF NOT EXISTS `sme` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmpassword` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `nameofenterprise` varchar(30) NOT NULL,
  `regstat` varchar(4) NOT NULL,
  `typeofbusiness` varchar(15) NOT NULL,
  `dateofestablishment` date NOT NULL,
  `location` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `account_status` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `sme`
--

INSERT INTO `sme` (`ID`, `username`, `password`, `confirmpassword`, `email`, `phone`, `nameofenterprise`, `regstat`, `typeofbusiness`, `dateofestablishment`, `location`, `date_created`, `account_status`) VALUES
(15, 'phoebe', 'tibaingana', 'tibaingana', 'phoebe.tina70@gmail.com', 700304792, 'happy Dogs foundation', 'Yes', 'sole', '2019-05-13', 'kampala', '2019-05-30', 'Active'),
(16, 'damalie', 'derma', 'derma', 'namatovu12@gmail.com', 772406699, 'Zilitwawula enterprise', 'Yes', 'partnership', '2004-09-20', 'wakiso', '2019-05-30', 'Active'),
(17, 'tibamanya', 'enid', 'enid', 'enidangel@gmail.com', 701376969, 'koi koi distillers limited', 'No', 'corporation', '2019-05-20', 'gulu', '2019-05-30', 'Active'),
(18, 'ivan', 'gilbert', 'gilbert', 'ivangilbert37@gmail.com', 754406006, 'push and pull limited', 'Yes', 'sole', '2012-04-05', 'kikoni', '2019-05-30', 'Active'),
(19, 'angellah', 'berna', 'berna', 'bernaangella@yahoo.com', 701501963, 'andela designers', 'No', 'sole', '2019-05-14', 'wakiso', '2019-05-30', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `sme_data`
--

CREATE TABLE IF NOT EXISTS `sme_data` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `TypeOfEnterprise` int(2) NOT NULL,
  `Ownership` int(2) NOT NULL,
  `Age` int(5) NOT NULL,
  `Employees` int(5) NOT NULL,
  `TypeOfBusiness` int(2) NOT NULL,
  `SalesInventory` int(15) NOT NULL,
  `FixedAssets` int(10) NOT NULL,
  `turnover` int(10) NOT NULL,
  `CreditHistory` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sme_data`
--

INSERT INTO `sme_data` (`ID`, `TypeOfEnterprise`, `Ownership`, `Age`, `Employees`, `TypeOfBusiness`, `SalesInventory`, `FixedAssets`, `turnover`, `CreditHistory`) VALUES
(1, 1, 2, 2, 1, 1, 0, 500000, 400000, 1),
(2, 1, 2, 2, 6, 3, 0, 700000, 500000, 2),
(3, 1, 3, 3, 1, 3, 0, 600000, 400000, 1),
(4, 0, 0, 0, 345, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 34, 0, 0, 0, 0, 0),
(6, 1, 2, 4, 2, 2, 0, 600000, 50000, 1),
(7, 1, 2, 2, 4, 2, 5000000, 6000000, 500000, 1),
(8, 2, 1, 5, 4, 2, 5000000, 10000000, 600000, 1),
(9, 1, 1, 7, 4, 3, 7000000, 9000000, 400000, 2),
(10, 1, 3, 9, 5, 3, 9000000, 10000000, 600000, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
