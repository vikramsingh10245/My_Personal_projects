-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 06:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `contact`, `email`, `address`, `username`, `password`) VALUES
(1, 'Vikram Singh', '987456123', 'admin@gmail.com', 'Haldwani', 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `checkinout`
--

CREATE TABLE `checkinout` (
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
('MP4456', '2020-06-18', 'slot3', 'base1', '12:29', '12:31', 'checkedout'),
('mmk34', '2020-06-18', 'slot5', 'base2', '12:33', '12:34', 'checkedout'),
('UK1155', '2020-06-18', 'slot4', 'base2', '10:56', '10:57', 'checkedout'),
('uk1123', '2020-06-16', 'slot9', 'base2', '10:48', '10:50', 'checkedout'),
('uk1123', '2020-06-16', 'slot9', 'base2', '10:50', '10:51', 'checkedout'),
('uk1123', '2020-06-16', 'slot2', 'base1', '10:53', '10:55', 'checkedout'),
('UK0411', '2020-06-17', 'slot3', 'base1', '09:45', '09:46', 'checkedout'),
('UK1143', '2020-06-18', 'slot3', 'base1', '10:53', '10:54', 'checkedout'),
('UK4432', '2020-06-18', 'slot3', 'base1', '11:14', '11:15', 'checkedout'),
('MP441p', '2020-06-18', 'slot4', 'base2', '11:17', '11:18', 'checkedout'),
('', '', '', '', '', '', 'checkedin');

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
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

CREATE TABLE `login` (
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
('vikram', 'vikram@123', '17/06/2020', '08.38.37pm', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '18/06/2020', '10.34.39am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '18/06/2020', '11.17.15am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '18/06/2020', '12.32.51pm', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@1234', '18/06/2020', '12.35.44pm', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '09.45.30am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '10.50.30am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '10.59.04am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '11.10.14am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '11.13.44am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '11.14.32am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '11.15.51am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '11.16.57am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@123', '17/06/2020', '11.59.39am', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@1234', '17/06/2020', '12.17.40pm', '18/06/2020', '09.06.26am'),
('vikram', 'vikram@1234', '17/06/2020', '05.37.45pm', '18/06/2020', '09.06.26am');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id` int(10) NOT NULL,
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
  `petname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `firstname`, `lastname`, `DOB`, `age`, `contact`, `email`, `username`, `password`, `address`, `gender`, `dateofjoin`, `petname`) VALUES
(1, 'vikram', 'singh', '1999-01-01', 20, '545454', 'Vikram@gmail.com', 'vikram', 'vikram@1234', 'dehradun', 'male', '2013-05-01', 'vicky'),
(18, 'karan', 'rathore', '1998-12-22', 22, '464443464', 'karan@123', 'karan', 'karan@123', 'haldwani', 'male', '2020-12-11', 'karr');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
