-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2019 at 12:12 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carparking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contact`, `email`, `address`, `username`, `password`) VALUES
(1, 'Aman Kumar', '987456123', 'admin@gmail.com', 'Delhi', 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `checkinout`
--

DROP TABLE IF EXISTS `checkinout`;
CREATE TABLE IF NOT EXISTS `checkinout` (
  `carno` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `slotid` varchar(20) NOT NULL,
  `floorid` varchar(20) NOT NULL,
  `intime` varchar(20) NOT NULL,
  `outtime` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkinout`
--

INSERT INTO `checkinout` (`carno`, `date`, `slotid`, `floorid`, `intime`, `outtime`, `status`) VALUES
('UK041234', '2019-03-26', 'slot2', 'base1', '15:56', '', 'checkedin'),
('UK048833', '2019-03-26', 'slot1', 'base1', '15:54', '', 'checkedin'),
('UK042345', '2019-03-26', 'slot3', 'base1', '15:58', '', 'checkedin'),
('UK044567', '2019-03-26', 'slot4', 'base1', '15:59', '', 'checkedin'),
('UK044567', '2019-03-26', 'slot5', 'base1', '16:00', '', 'checkedin'),
('UK045678', '2019-03-26', 'slot5', 'base2', '16:00', '', 'checkedin'),
('UK043456', '2019-03-27', 'slot1', 'base1', '10:08', '13:05', 'checkedout'),
('UK043456', '2019-03-27', 'slot1', 'base1', '13:06', '13:09', 'checkedout'),
('UK043456', '2019-03-27', 'slot1', 'base1', '13:11', '13:14', 'checkedout'),
('123456', '2019-03-27', 'slot1', 'base1', '16:55', '16:56', 'checkedout'),
('UK042345', '2019-03-28', 'slot1', 'base1', '10:36', '10:37', 'checkedout'),
('uk5555', '2019-03-28', 'slot10', 'base3', '17:24', '', 'checkedin'),
('', '', '', '', '', '', 'checkedin'),
('UK2023', '2019-04-09', 'slot1', 'base1', '23:24', '', 'checkedin'),
('UK4578', '2019-04-10', 'slot1', 'base1', '10:22', '', 'checkedin'),
('suk5566', '2019-04-13', 'slot1', 'base1', '19:27', '', 'checkedin'),
('UK4545', '2019-04-18', 'slot1', 'base1', '11:47', '', 'checkedin'),
('UK4512', '2019-04-20', 'slot5', 'base2', '11:21', '', 'checkedin'),
('UK4545', '2019-04-23', 'slot1', 'base1', '13:38', '13:39', 'checkedout'),
('UK8052', '2019-05-22', 'slot10', 'base1', '18:48', '', 'checkedin');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

DROP TABLE IF EXISTS `floor`;
CREATE TABLE IF NOT EXISTS `floor` (
  `floorid` varchar(30) NOT NULL,
  `no_of_slots` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`floorid`, `no_of_slots`) VALUES
('base1', 10),
('base2', 10),
('base3', 10);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logindate` varchar(255) NOT NULL,
  `logintime` varchar(255) NOT NULL,
  `logoutdate` varchar(255) NOT NULL,
  `logouttime` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `logindate`, `logintime`, `logoutdate`, `logouttime`) VALUES
('karan', 'karan@123', '17/04/2019', '05.44.20pm', '27/05/2019', '03.30.56am'),
('raman', 'raman@123', '17/04/2019', '05.46.02pm', '17/04/2019', '01.36.59pm'),
('karan', 'karan@123', '17/04/2019', '06.06.49pm', '27/05/2019', '03.30.56am'),
('karan', 'karan@123', '17/04/2019', '06.09.53pm', '27/05/2019', '03.30.56am'),
('karan', 'karan@123', '17/04/2019', '06.58.58pm', '27/05/2019', '03.30.56am'),
('raman', 'raman@123', '17/04/2019', '07.02.59pm', '17/04/2019', '01.36.59pm'),
('karan', 'karan@123', '20/04/2019', '01.27.57pm', '27/05/2019', '03.30.56am'),
('karan', 'karanrathor', '04/05/2019', '08.53.46am', '27/05/2019', '03.30.56am'),
('karan', 'karanrathor', '04/05/2019', '09.15.24am', '27/05/2019', '03.30.56am'),
('karan', 'karan', '04/05/2019', '10.33.14pm', '27/05/2019', '03.30.56am'),
('karan', 'tonystark', '05/05/2019', '01.44.28pm', '27/05/2019', '03.30.56am'),
('karan', 'tony', '05/05/2019', '03.29.42pm', '27/05/2019', '03.30.56am'),
('karan', 'tony', '05/05/2019', '03.32.28pm', '27/05/2019', '03.30.56am'),
('karan', 'tony', '05/05/2019', '03.37.31pm', '27/05/2019', '03.30.56am'),
('karan', 'karan', '05/05/2019', '03.44.35pm', '27/05/2019', '03.30.56am'),
('karan', 'tonystark', '06/05/2019', '10.30.29am', '27/05/2019', '03.30.56am'),
('karan', 'tonystark', '06/05/2019', '04.09.17pm', '27/05/2019', '03.30.56am'),
('karan', 'tonystark', '06/05/2019', '04.41.35pm', '27/05/2019', '03.30.56am'),
('karan', 'tony', '07/05/2019', '03.03.48pm', '27/05/2019', '03.30.56am'),
('karan', 'tony', '07/05/2019', '03.17.06pm', '27/05/2019', '03.30.56am'),
('karan', 'tony', '17/05/2019', '12.59.50pm', '27/05/2019', '03.30.56am'),
('karan', 'tonystark', '23/05/2019', '08.45.05pm', '27/05/2019', '03.30.56am'),
('karan', 'tonystark', '23/05/2019', '10.39.47pm', '27/05/2019', '03.30.56am'),
('karan', 'tonystark', '23/05/2019', '10.42.05pm', '27/05/2019', '03.30.56am'),
('karan', 'tony', '23/05/2019', '10.45.39pm', '27/05/2019', '03.30.56am'),
('karan', 'kanny', '23/05/2019', '10.46.56pm', '27/05/2019', '03.30.56am'),
('karan', 'kanny', '24/05/2019', '08.21.07am', '27/05/2019', '03.30.56am'),
('karan', 'karan@123', '27/05/2019', '08.44.07am', '27/05/2019', '03.30.56am');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

DROP TABLE IF EXISTS `operators`;
CREATE TABLE IF NOT EXISTS `operators` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateofjoin` varchar(255) NOT NULL,
  `petname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `firstname`, `lastname`, `DOB`, `age`, `contact`, `email`, `username`, `password`, `address`, `gender`, `dateofjoin`, `petname`) VALUES
(1, 'karan', 'rathor', '1999-01-01', 20, '545454', 'karan@gmail.com', 'karan', 'karan@123', 'tikonia, haldwani', 'male', '2013-05-01', 'kannu'),
(2, 'raman', 'gupta', '2000-03-10', 19, '789845', 'raman@gmail.com', 'raman', 'raman@123', 'gujrat', 'male', '2006-09-05', 'ramu'),
(3, 'nitin', 'rastogi', '1996-04-19', 23, '784565', 'nitin@gmail.com', 'nitin', 'nitin@123', 'mukhani, haldwani', 'male', '2004-01-02', 'nitin'),
(4, 'rakesh', 'joshi', '1995-07-07', 24, '456545', 'rakesh@gmail.com', 'rakesh', 'rakesh@123', 'punjab', 'male', '2007-05-28', 'rock'),
(6, 'ram', 'kumar', '1996-02-01', 23, '858585', 'ram@gmail.com', 'ram', 'ram@123', 'halduchaur', 'male', '2008-04-17', 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

DROP TABLE IF EXISTS `slot`;
CREATE TABLE IF NOT EXISTS `slot` (
  `slotid` varchar(20) NOT NULL,
  `floorid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slotid`, `floorid`) VALUES
('slot1', 'base1'),
('slot2', 'base1'),
('slot3', 'base1'),
('slot4', 'base1'),
('slot5', 'base1'),
('slot6', 'base1'),
('slot7', 'base1'),
('slot8', 'base1'),
('slot9', 'base1'),
('slot10', 'base1'),
('slot1', 'base2'),
('slot2', 'base2'),
('slot3', 'base2'),
('slot4', 'base2'),
('slot5', 'base2'),
('slot6', 'base2'),
('slot7', 'base2'),
('slot8', 'base2'),
('slot9', 'base2'),
('slot10', 'base2'),
('slot1', 'base3'),
('slot2', 'base3'),
('slot3', 'base3'),
('slot4', 'base3'),
('slot5', 'base3'),
('slot6', 'base3'),
('slot7', 'base3'),
('slot8', 'base3'),
('slot9', 'base3'),
('slot10', 'base3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
