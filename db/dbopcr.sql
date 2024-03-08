-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 01:31 AM
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
(4, 29, 'daw', '321');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationId` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(29, 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `tbltarget`
--

CREATE TABLE `tbltarget` (
  `targetid` int(11) NOT NULL,
  `year` varchar(45) NOT NULL,
  `version` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `tbltarget`
--
ALTER TABLE `tbltarget`
  ADD PRIMARY KEY (`targetid`);

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
  MODIFY `indicatorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `perspective`
--
ALTER TABLE `perspective`
  MODIFY `perspectiveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
