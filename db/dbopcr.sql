-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 02:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbopcr`
--

-- --------------------------------------------------------

--
-- Table structure for table `indicator`
--

CREATE TABLE `indicator` (
  `indicatorid` int(11) NOT NULL,
  `perspectiveid` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `order` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indicator`
--

INSERT INTO `indicator` (`indicatorid`, `perspectiveid`, `description`, `order`) VALUES
(4, 29, 'Customer ko', '321'),
(5, 33, 'Internallll', '1'),
(6, 34, 'Financiaaaaal', '2'),
(7, 33, 'Internal ko1', '223'),
(8, 34, 'Financial Ko', '2'),
(9, 35, 'Learning ko', '21');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationId` int(11) NOT NULL,
  `code` varchar(3) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationId`, `code`, `name`) VALUES
(1, 'RO', 'Regional Office'),
(2, 'BUK', 'PSTO - Bukidnon'),
(3, 'CAM', 'PSTO - Camiguin'),
(4, 'LDN', 'PSTO - Lanao del Norte'),
(5, 'MOC', 'PSTO - Misamis Occidental'),
(6, 'MOR', 'PSTO - Misamis Oriental');

-- --------------------------------------------------------

--
-- Table structure for table `perspective`
--

CREATE TABLE `perspective` (
  `perspectiveid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perspective`
--

INSERT INTO `perspective` (`perspectiveid`, `name`) VALUES
(29, 'Costumer Perspective'),
(33, 'Internal Perspective'),
(34, 'Financial Perspective'),
(35, 'Learning and Growth Perspective');

-- --------------------------------------------------------

--
-- Table structure for table `tbltarget_summary`
--

CREATE TABLE `tbltarget_summary` (
  `targetsummary_id` int(11) NOT NULL,
  `year` varchar(45) NOT NULL,
  `version` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltarget_summary`
--

INSERT INTO `tbltarget_summary` (`targetsummary_id`, `year`, `version`, `status`, `datecreated`) VALUES
(2, '2024', '1.1', 1, '2024-03-08 10:01:20'),
(3, '2017', '2.12', 0, '2024-03-08 10:01:29'),
(4, '2018', '2.0', 1, '2024-03-08 10:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `useraccountid` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`useraccountid`, `username`, `password`, `date_created`, `is_active`) VALUES
(1, '2313', '$2y$10$80jSijP2X/htv48v4a2dduufOKGMP7KF8s/3Hg7FBfnWX4zPUBwGC', '2024-03-04 00:32:05', '1'),
(2, '2020300298', '$2y$10$BYRC7owP54kCRat1ec7zOOg9B1JmkjzMAMUWJMfkPqmdxIbjzNaOy', '2024-03-04 00:32:23', '1'),
(3, 'rain', '$2y$10$IVeE6mCg0uZkGFOpjCiNR.1ZyhRpxXdZAup31f34KuxYlv6YeEgmS', '2024-03-04 00:21:21', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indicator`
--
ALTER TABLE `indicator`
  ADD PRIMARY KEY (`indicatorid`),
  ADD KEY `pers_ind_persId_FK_idx` (`perspectiveid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`);

--
-- Indexes for table `perspective`
--
ALTER TABLE `perspective`
  ADD PRIMARY KEY (`perspectiveid`);

--
-- Indexes for table `tbltarget_summary`
--
ALTER TABLE `tbltarget_summary`
  ADD PRIMARY KEY (`targetsummary_id`);

--
-- Indexes for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  ADD PRIMARY KEY (`useraccountid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indicator`
--
ALTER TABLE `indicator`
  MODIFY `indicatorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `perspective`
--
ALTER TABLE `perspective`
  MODIFY `perspectiveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbltarget_summary`
--
ALTER TABLE `tbltarget_summary`
  MODIFY `targetsummary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `useraccountid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indicator`
--
ALTER TABLE `indicator`
  ADD CONSTRAINT `pers_ind_persId_FK` FOREIGN KEY (`perspectiveid`) REFERENCES `perspective` (`perspectiveid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
