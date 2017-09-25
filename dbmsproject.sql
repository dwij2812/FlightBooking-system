-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2017 at 02:33 PM
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
(2345, 'dwij', 'dwij');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `F_no` varchar(6) NOT NULL,
  `CID` varchar(6) NOT NULL,
  `TicketID` varchar(6) NOT NULL,
  `P_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Yash', 'Jain', 'yashjain.2016@vitstudent.ac.in', '1998-08-28', 'Male', 'Indian', 'Student', 'My Home Address', 'Hissar', 'Haryana', '9467533303', 'jains');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `F_no` varchar(6) NOT NULL,
  `Origin` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Dep` int(4) NOT NULL,
  `Arr` int(4) NOT NULL,
  `Fare` int(5) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`F_no`, `Origin`, `Destination`, `Dep`, `Arr`, `Fare`, `Date`) VALUES
('V678', 'Chennai', 'Mumbai', 650, 830, 2500, '2017-09-21'),
('V747', 'Chennai', 'Delhi', 2000, 2230, 3800, '2017-09-20'),
('V757', 'Delhi', 'Chennai', 1630, 1900, 3800, '2017-09-20'),
('V767', 'Chennai ', 'Mumbai', 1500, 1645, 4200, '2017-09-20'),
('V777', 'Mumbai', 'Chennai', 1700, 1840, 4500, '2017-09-20');

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
  ADD PRIMARY KEY (`F_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `Customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
