-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 06:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Email`, `Telephone`, `Message`) VALUES
(1, 'sajith', 's@gmail.com', 710215311, 'send feedback'),
(2, 'gayaru', 'd@gmail.com', 714256844, 'good'),
(3, 'chathuranga', 'd@gmail.com', 714658264, 'well');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `User_id` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`User_id`, `Username`, `Password`, `Email`, `First_name`, `Last_name`) VALUES
(1, 'kasun', '7c4a8d09ca3', 'd@gmail.com', 'kasun', 'pradeep'),
(2, 'suranga', 'd54b76b2bad', 's@gmail.com', 'suranga', 'pradeep');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Newspaper` varchar(20) NOT NULL,
  `Magazine` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Province` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`User_id`, `Username`, `Password`, `Newspaper`, `Magazine`, `Address`, `Province`, `City`, `Phone`) VALUES
(1, 'amal', '7c4a8d09ca3', 'Daily Mirror', 'Vogue', 'matara,srilanka', 'southern', 'matara', 710235685),
(2, 'rukshan', 'f18f057ea44', 'USA Today', 'The Economist', 'matara,srilanka', 'southern', 'matara', 710235684),
(3, 'thilan', '7110eda4d09', 'Daily Mail', 'The Economist', 'galle,srilanka', 'southern', 'galle', 710235685);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `User_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
