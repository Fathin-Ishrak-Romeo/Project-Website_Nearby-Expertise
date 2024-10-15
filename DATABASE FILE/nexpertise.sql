-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 02:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexpertise`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(25) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('Juna', 'juni');

-- --------------------------------------------------------

--
-- Table structure for table `alc`
--

CREATE TABLE `alc` (
  `spID` int(10) NOT NULL,
  `serial_no` int(10) NOT NULL,
  `name` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alc`
--

INSERT INTO `alc` (`spID`, `serial_no`, `name`, `location`, `contact`, `date`, `time`, `status`) VALUES
(1, 7, '', '', 0, '0000-00-00', '00:00:00', 'Done'),
(0, 0, 'hcfgisuhc', '', 8988, '2024-05-01', '19:43:00', ''),
(1, 8, '', '', 0, '0000-00-00', '00:00:00', ''),
(0, 0, 'hcfgisuhc', '', 8988, '2024-04-20', '17:02:00', ''),
(1, 7, '', '', 0, '0000-00-00', '00:00:00', 'Done'),
(0, 0, 'hcfgisuhc', '', 8988, '2024-05-01', '19:43:00', ''),
(1, 7, '', '', 0, '0000-00-00', '00:00:00', 'Done'),
(0, 0, 'hcfgisuhc', '', 8988, '2024-05-01', '19:43:00', ''),
(1, 7, '', '', 0, '0000-00-00', '00:00:00', 'Done'),
(0, 0, 'hcfgisuhc', '', 8988, '2024-05-01', '19:43:00', ''),
(8, 12, '', '', 0, '0000-00-00', '00:00:00', ''),
(0, 0, 'hcfgisuhc', 'Dhanmondi', 8988, '2024-04-09', '17:04:00', ''),
(7, 11, '', '', 0, '0000-00-00', '00:00:00', ''),
(7, 11, 'hcfgisuhc', 'Wari', 8988, '2024-04-05', '05:04:00', ''),
(1, 9, 'hcfgisuhc', 'Kaltabazar', 8988, '2024-04-20', '17:02:00', 'Done'),
(1, 8, 'hcfgisuhc', '', 8988, '2024-04-20', '17:02:00', ''),
(1, 8, 'hcfgisuhc', '', 8988, '2024-04-20', '17:02:00', ''),
(2, 10, 'hcfgisuhc', 'Kaptanbazar', 8988, '2024-04-05', '05:04:00', ''),
(2, 10, 'hcfgisuhc', 'Kaptanbazar', 8988, '2024-04-05', '05:04:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `serial_no` int(11) NOT NULL,
  `cus_name` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `cus_phone` varchar(15) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `service_type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` text NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`serial_no`, `cus_name`, `location`, `cus_phone`, `cus_email`, `service_type`, `date`, `time`, `status`, `fees`) VALUES
(2, 'hcfgisuhc', '', '0008988', '', '', '2024-04-12', '04:34:00', '', 100),
(3, 'hcfgisuhc', '', '0008988', '', '', '2024-04-17', '19:37:00', '', 0),
(4, 'hcfgisuhc', '', '0008988', '', '', '2024-04-17', '19:37:00', '', 0),
(5, 'hcfgisuhc', '', '0293023', '', '', '2024-04-19', '19:41:00', '', 0),
(6, 'hcfgisuhc', '', '0293023', '', '', '2024-04-19', '19:41:00', '', 0),
(7, 'hcfgisuhc', '', '0008988', '', 'Circuit Installation', '2024-05-01', '19:43:00', 'Allocated', 0),
(8, 'hcfgisuhc', '', '0008988', '', 'Water Pipe Fix', '2024-04-20', '17:02:00', 'Allocated', 0),
(9, 'hcfgisuhc', 'Kaltabazar', '0008988', 'patkheterbatija@gmail.com', 'Water Pipe Fix', '2024-04-20', '17:02:00', 'Allocated', 0),
(10, 'hcfgisuhc', 'Kaptanbazar', '0008988', 'patkheterbatija@gmail.com', 'AC Servicing', '2024-04-05', '05:04:00', 'Allocated', 192),
(11, 'hcfgisuhc', 'Wari', '0008988', 'patkheterbatija@gmail.com', 'AC Servicing', '2024-04-05', '05:04:00', 'Allocated', 0),
(12, 'hcfgisuhc', 'Dhanmondi', '0008988', 'patkheterbatija@gmail.com', 'Water Pipe Fix', '2024-04-09', '17:04:00', 'Allocated', 0),
(13, 'Zonayed', '', '01973468545', 'patkheterbatija@gmail.com', 'Painting', '2024-04-30', '18:40:00', '', 0),
(14, 'Navid', 'Wari', '01913468545', 'patkheterbatija@gmail.com', 'Water Line Installat', '2024-04-20', '23:43:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `serial_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`serial_no`, `name`, `username`, `email`, `phone`, `message`) VALUES
(1, 'Fathin ', 'fathin007@', 'fathin@gmail.com', '0124354565765', 'I need a plumber to fix my basin.');

-- --------------------------------------------------------

--
-- Table structure for table `spnfo`
--

CREATE TABLE `spnfo` (
  `spID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` char(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `service_type` varchar(15) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spnfo`
--

INSERT INTO `spnfo` (`spID`, `name`, `username`, `password`, `phone`, `service_type`, `reg_date`) VALUES
(1, 'rob', 'rob.stark@79', 'leora', '0192454667654', 'Electrician ', '2024-04-24 07:11:58'),
(2, 'Nazmul', 'dendi', 'chodek', '01973468453', 'Prostitute', '2024-04-25 19:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `serial_no` int(11) NOT NULL,
  `name` char(20) NOT NULL,
  `password` char(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`serial_no`, `name`, `password`, `email`, `phone`, `reg_date`) VALUES
(1, 'Fathin', 'fathin09', 'fathin@gmail.com', '01521549804', '2024-04-24 07:02:08'),
(2, 'Zonayed', 'chodek', 'patkheterbatija@gmail.com', '0191346865', '2024-04-25 15:26:41'),
(3, 'HUlulu', 'chodek', 'damahadan415@gmail.com', '0191346865', '2024-04-25 15:42:04'),
(4, 'sjkbck', 'ammiami', 'bcksbc@gmail', '01188888hv', '2024-04-25 20:40:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`serial_no`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `spnfo`
--
ALTER TABLE `spnfo`
  ADD PRIMARY KEY (`spID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`serial_no`),
  ADD UNIQUE KEY `fname` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spnfo`
--
ALTER TABLE `spnfo`
  MODIFY `spID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
