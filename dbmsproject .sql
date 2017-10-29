-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 06:30 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `AID` int(4) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`AID`, `Username`, `Password`) VALUES
(1234, 'prakhar', 'prakhar'),
(2345, 'dwij', 'dwij'),
(3456, 'karthik', 'karthik');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `TicketID` int(6) NOT NULL,
  `F_no` varchar(5) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Cid` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Fare` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`TicketID`, `F_no`, `Source`, `Destination`, `Cid`, `Date`, `Fare`) VALUES
(3, 'V123', 'Delhi', 'Bangalore', 3, '2017-10-23', '4500'),
(4, 'V194', 'Bangalore', 'Delhi', 3, '2017-10-11', '4100'),
(5, 'V289', 'Mumbai', 'Delhi', 1, '2017-10-29', '2530'),
(6, 'V12', 'Delhi', 'Mumbai', 1, '2017-11-23', '6464'),
(7, 'V289', 'Mumbai', 'Delhi', 1, '2017-10-29', '2530'),
(8, 'V12', 'Delhi', 'Mumbai', 1, '2017-11-23', '6464'),
(9, 'V12', 'Delhi', 'Mumbai', 4, '2017-11-02', '6464'),
(10, 'V289', 'Mumbai', 'Delhi', 4, '2017-11-03', '2530');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `Customer_id` int(5) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`Customer_id`, `First_name`, `Last_name`, `email_id`, `DOB`, `Gender`, `Nationality`, `Occupation`, `Address`, `City`, `State`, `Mobile_no`, `Password`) VALUES
(3, 'Dwij', 'Sheth', 'dwijhariket@gmail.com', '1998-12-28', 'Male', 'Indian', 'Student', 'Room No-318 A Block', 'Chennai', 'Tamil Nadu', '7889037976', 'dwij'),
(4, 'Shantanu', 'Singh', 'shaneya.singh13@gmail.com', '1998-12-28', 'Male', 'Indian', 'Student', 'Room No-318 A Block', 'Chennai', 'Tamil Nadu', '9876543210', 'shantanu');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `TID` int(11) NOT NULL,
  `F_no` varchar(6) NOT NULL,
  `Origin` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Dep` varchar(10) NOT NULL,
  `Arr` varchar(10) NOT NULL,
  `Fare` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`TID`, `F_no`, `Origin`, `Destination`, `Dep`, `Arr`, `Fare`) VALUES
(1, 'V12', 'Delhi', 'Mumbai', '04:06', '06:44', 6464),
(2, 'V123', 'Delhi', 'Bangalore', '12:00', '14:45', 4500),
(3, 'V143', 'Mumbai', 'Kolkatta', '14:45', '17:00', 5500),
(4, 'V194', 'Bangalore', 'Delhi', '20:00', '22:45', 4100),
(5, 'V201', 'Chennai', 'Bangalore', '15:40', '16:30', 1465),
(6, 'V289', 'Mumbai', 'Delhi', '00:00', '02:00', 2530),
(7, 'V747', 'Chennai', 'Delhi', '2000', '2230', 3800),
(8, 'V757', 'Delhi', 'Chennai', '1630', '1900', 3800),
(9, 'V767', 'Chennai ', 'Mumbai', '1500', '1645', 4200),
(10, 'V789', 'Kolkatta', 'Bangalore', '14:55', '16:10', 7800),
(11, 'V330', 'Delhi', 'Kolkatta', '1800', '2100', 4105),
(12, 'V310', 'Chennai', 'Kolkatta', '1830', '2130', 4145),
(13, 'V300', 'Kolkatta', 'Delhi', '1200', '1500', 4105),
(14, 'V340', 'Kolkatta', 'Chennai', '1300', '1600', 4105),
(16, 'V34', 'Mumbai', 'Chennai', '15:00', '17:00', 3501),
(17, 'V312', 'Mumbai', 'Bangalore', '08:00', '10:00', 3642),
(18, 'V311', 'Bangalore', 'Mumbai', '11:00', '13:00', 3541),
(19, 'V200', 'Bangalore', 'Chennai', '14:20', '15:00', 2138),
(20, 'V788', 'Bangalore', 'Kolkatta', '12:00', '14:15', 3876),
(21, 'V142', 'Kolkatta', 'Mumbai', '10:00', '12:15', 5400),
(22, 'V717', 'Chennai', 'Mumbai', '01:00', '02:45', 4100),
(23, 'V411', 'Mumbai', 'Bangalore', '04:00', '06:00', 3754),
(24, 'V718', 'Bangalore', 'Kolkatta', '07:15', '09:30', 3655),
(26, 'V343', 'Kolkatta', 'Delhi', '10:10', '13:03', 4154),
(27, 'V989', 'Delhi', 'Kolkatta', '07:00', '10:00', 4111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`TicketID`),
  ADD UNIQUE KEY `TicketID` (`TicketID`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`Customer_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD KEY `Mobile no` (`Mobile_no`),
  ADD KEY `Mobile no_2` (`Mobile_no`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`TID`),
  ADD UNIQUE KEY `F_no` (`F_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `TicketID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `Customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
