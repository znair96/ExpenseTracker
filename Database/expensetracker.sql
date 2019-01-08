-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 02:21 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expensetracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `ExpID` int(250) NOT NULL,
  `ExpName` varchar(250) NOT NULL,
  `ExpType` varchar(250) NOT NULL,
  `Cost` int(255) NOT NULL,
  `Date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`ExpID`, `ExpName`, `ExpType`, `Cost`, `Date`, `user_id`) VALUES
(9, 'Online Course - Github and Git ', 'Education', 699, '2018-11-01', 2),
(10, 'Online Course Internshala Python', 'Education', 1999, '2018-11-04', 2),
(11, 'PG Charges', 'Housing', 12500, '2018-11-01', 1),
(12, 'Wi-Fi Bill (Monthly)', 'Household', 850, '2018-11-01', 1),
(13, 'Course on Web Development', 'Education', 1999, '2018-10-10', 2),
(14, 'McD Burger', 'Others', 250, '2018-10-10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `RegisteredDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LoggedInStatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `email`, `password`, `gender`, `RegisteredDate`, `LoggedInStatus`) VALUES
(1, 'Satyam Agarwal', 'satya96', 'satyam.agr1996@gmail', '1234', 'Male', '2018-08-18 00:38:37', 0),
(2, 'Zubin Nair', 'znair96', 'znair96@gmail.com', 'zubin nair', 'Male', '2018-08-18 00:40:11', 0),
(3, 'Ravi', 'ravi123', 'ravi@gmail.com', '123456', 'Male', '2018-08-18 00:42:36', 0),
(4, 'Chaman', 'chn998', 'admin@feereport.com', 'admin', 'Female', '2018-08-25 23:30:30', 0),
(5, 'Naman', 'nam23', 'abc123@gmail.com', '123456', 'Male', '2018-08-25 23:32:47', 0),
(9, 'Raman', 'ram123', 'ram123@gmail.com', '123456', 'Male', '2018-08-25 23:42:51', 0),
(10, 'Thakur', 'tah123', 'znair23091996@gmail.com', '1234', 'Male', '2018-08-25 23:43:36', 0),
(17, 'Rajat', 'rajjo123', 'rajjo89@gmail.com', '123456', 'Male', '2018-08-25 23:55:56', 0),
(19, 'Parth', 'parth43', 'coolparth@gmail.com', '123456', 'Others', '2018-08-25 23:57:40', 0),
(20, 'Shyam', 'sha1', 'sha1@gmail.com', '123456', 'Male', '2018-08-26 11:21:47', 0),
(21, 'Kavya Nair', 'kavnair04', 'kavnair04@gmail.com', '123456', 'Female', '2018-10-07 14:36:26', 0),
(22, 'Arindam', 'ari123', 'admin123@gmail.com', 'admin', 'Male', '2018-10-07 14:38:12', 0),
(23, 'Satheesh', 'sath2300', 'satheesh1234@gmail.com', 'satheesh1234', 'Male', '2018-11-12 19:50:11', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`ExpID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `ExpID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
