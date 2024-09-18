-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 18, 2024 at 12:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time(6) NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `appointment_date`, `appointment_time`, `status`) VALUES
(1, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(2, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(3, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(4, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(5, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(6, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(7, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'rejected'),
(8, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(9, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-08-28', '15:17:00.000000', 'approved'),
(12, 'vimal', 'rkdaksh123@gmail.com', '8006357434', '2024-08-29', '22:40:00.000000', 'rejected'),
(13, 'naveen', 'rkdaksh123@gmail.com', '8800229127', '2024-09-06', '20:20:00.000000', 'rejected'),
(14, 'ram kumar', 'ram8006357434@gmail.com', '8006357434', '2024-09-05', '11:08:00.000000', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `firstname`, `lastname`, `country`, `message`) VALUES
(1, 'mm', 'mm', 'india', 'kklk'),
(2, 'mm', 'mm', 'india', 'kklk');

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE `studentreg` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `day` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `ClassX_Board` varchar(20) NOT NULL,
  `ClassX_Percentage` decimal(5,2) NOT NULL,
  `ClassX_YrOfPassing` int(10) NOT NULL,
  `ClassXII_Board` varchar(20) NOT NULL,
  `ClassXII_Percentage` decimal(5,2) NOT NULL,
  `ClassXII_YrOfPassing` int(8) NOT NULL,
  `Other_name` varchar(20) NOT NULL,
  `courses` varchar(20) NOT NULL,
  `status` enum('pending','approved','approve','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`id`, `firstname`, `lastname`, `password`, `day`, `month`, `year`, `email`, `mobile`, `gender`, `address`, `city`, `pincode`, `state`, `country`, `ClassX_Board`, `ClassX_Percentage`, `ClassX_YrOfPassing`, `ClassXII_Board`, `ClassXII_Percentage`, `ClassXII_YrOfPassing`, `Other_name`, `courses`, `status`) VALUES
(5, 'vimal', 'kumar', '', 1, 'January', 2012, 'rkdaksh56@gmail.com', '2147483647', 'Male', 'naga', 'ghaziabad', 201009, 'uttar pradesh', 'India', 'up board', '72.00', 2015, 'up board', '67.00', 2017, 'bca', 'B.Com', ''),
(6, 'vimal', 'kumar', '', 1, 'January', 2012, 'rkdaksh56@gmail.com', '2147483647', 'Male', 'naga', 'ghaziabad', 201009, 'uttar pradesh', 'India', 'up board', '71.50', 2015, 'up board', '67.40', 2017, 'bca', 'B.Com', 'approved'),
(7, 'vimal', 'kumar', 'ramsingh123', 1, 'February', 2010, '971797naveen@gmail.com', '2147483647', 'Male', 'scc', 'ghaziabad', 201009, 'up', 'India', 'up board', '71.50', 2015, 'up board', '67.40', 2017, 'bca', 'B.C.A.', 'pending'),
(8, 'ram', 'kumar', 'rkdaksh', 5, 'June', 2000, 'ram8006357434@gmail.com', '2147483647', 'Male', 'naga', 'agra', 283102, 'uttar pradesh', 'India', 'up board', '71.50', 2015, 'up board', '67.40', 2017, '', 'B.C.A.', 'pending'),
(9, 'ram', 'kumar', 'rkdaksh12', 5, 'June', 2000, 'ram8006357434@gmail.com', '2147483647', 'Male', 'naga', 'agra', 283102, 'uttar pradesh', 'India', 'up board', '71.50', 2015, 'up board', '67.40', 2017, '', 'B.C.A.', 'pending'),
(10, 'ram', 'kumar', 'rkdaksh12', 5, 'June', 2000, 'ram8006357434@gmail.com', '9761025142', 'Male', 'naga', 'agra', 283102, 'uttar pradesh', 'India', 'up board', '71.50', 2015, 'up board', '67.40', 2017, '', 'B.C.A.', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `teacherre`
--

CREATE TABLE `teacherre` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `day` int(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `depart` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherre`
--

INSERT INTO `teacherre` (`id`, `fname`, `lname`, `password`, `day`, `month`, `year`, `email`, `mobile`, `gender`, `subject`, `address`, `city`, `pin`, `state`, `country`, `qualification`, `depart`) VALUES
(37, 'vimal', 'kumar', 'jjnm', 1, 'January', 2012, 'ram8006357434@gmail.com', '8006357434', 'Male', 'arts', 'nmnhj', 'ghaziabad', 201009, 'up', 'India', 'Graduation', 'Computer Science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentreg`
--
ALTER TABLE `studentreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherre`
--
ALTER TABLE `teacherre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentreg`
--
ALTER TABLE `studentreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacherre`
--
ALTER TABLE `teacherre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
