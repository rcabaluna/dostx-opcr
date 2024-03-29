-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 07:02 AM
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
  `order` varchar(45) NOT NULL,
  `input` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indicator`
--

INSERT INTO `indicator` (`indicatorid`, `perspectiveid`, `description`, `order`, `input`) VALUES
(4, 29, 'Customer ko1', '321', 1),
(5, 33, 'Internallll', '1', 1),
(6, 34, 'Financiaaaaal', '2', 0),
(7, 33, 'Internal ko1', '223', 0),
(8, 34, 'Financial Ko', '2', 0),
(10, 35, 'I want to be learning', '21', 0),
(11, 29, 'hehe', '111', 0);

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
-- Table structure for table `tblquarter`
--

CREATE TABLE `tblquarter` (
  `quarterid` int(11) NOT NULL,
  `semid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `months` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblquarter`
--

INSERT INTO `tblquarter` (`quarterid`, `semid`, `name`, `months`) VALUES
(1, 1, '1st Quarter', 'Jan - Mar'),
(2, 1, '2nd Quarter', 'Apr - Jun'),
(3, 2, '3rd Quarter', 'July - Sep'),
(4, 2, '4th Quarter', 'Oct - Dec');

-- --------------------------------------------------------

--
-- Table structure for table `tblsemester`
--

CREATE TABLE `tblsemester` (
  `semid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsemester`
--

INSERT INTO `tblsemester` (`semid`, `name`) VALUES
(1, '1st Sem'),
(2, '2nd Sem');

-- --------------------------------------------------------

--
-- Table structure for table `tbltarget_details`
--

CREATE TABLE `tbltarget_details` (
  `targetdetailsid` int(11) NOT NULL,
  `targetsummaryid` int(11) DEFAULT NULL,
  `indicatorid` int(11) DEFAULT NULL,
  `locationid` int(11) DEFAULT NULL,
  `quarterid` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltarget_details`
--

INSERT INTO `tbltarget_details` (`targetdetailsid`, `targetsummaryid`, `indicatorid`, `locationid`, `quarterid`, `value`) VALUES
(45, 2, 4, 1, 1, 4),
(46, 2, 4, 1, 2, 1),
(47, 2, 4, 1, 3, 2),
(48, 2, 4, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbltarget_summary`
--

CREATE TABLE `tbltarget_summary` (
  `targetsummaryid` int(11) NOT NULL,
  `year` varchar(45) NOT NULL,
  `version` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltarget_summary`
--

INSERT INTO `tbltarget_summary` (`targetsummaryid`, `year`, `version`, `status`, `datecreated`) VALUES
(2, '2024', '1.121', 1, '2024-03-08 10:01:20'),
(3, '2017', '2.12', 0, '2024-03-08 10:01:29'),
(5, '2014', '1.23', 0, '2024-03-15 10:47:59'),
(7, '2023', '1', 0, '2024-03-20 11:09:04'),
(8, '2018', '1.23', 0, '2024-03-20 11:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbluseraccount`
--

CREATE TABLE `tbluseraccount` (
  `useraccountid` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` enum('1','0') NOT NULL,
  `userlevel` varchar(45) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluseraccount`
--

INSERT INTO `tbluseraccount` (`useraccountid`, `username`, `password`, `date_created`, `is_active`, `userlevel`) VALUES
(1, '2313', '$2y$10$80jSijP2X/htv48v4a2dduufOKGMP7KF8s/3Hg7FBfnWX4zPUBwGC', '2024-03-04 00:32:05', '1', 'user'),
(2, '2020300298', '$2y$10$BYRC7owP54kCRat1ec7zOOg9B1JmkjzMAMUWJMfkPqmdxIbjzNaOy', '2024-03-04 00:32:23', '1', 'user'),
(3, 'rain', '$2y$10$IVeE6mCg0uZkGFOpjCiNR.1ZyhRpxXdZAup31f34KuxYlv6YeEgmS', '2024-03-04 00:21:21', '1', 'admin'),
(4, 'userx', '$2y$10$MGani8XBQOq6QJlCVHXfg.g/k6.i6cct0.DApSu5pZ8e5URPKOw2.', '2024-03-12 00:09:11', '1', 'user');

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
-- Indexes for table `tblquarter`
--
ALTER TABLE `tblquarter`
  ADD PRIMARY KEY (`quarterid`),
  ADD KEY `semid_idx` (`semid`);

--
-- Indexes for table `tblsemester`
--
ALTER TABLE `tblsemester`
  ADD PRIMARY KEY (`semid`);

--
-- Indexes for table `tbltarget_details`
--
ALTER TABLE `tbltarget_details`
  ADD PRIMARY KEY (`targetdetailsid`),
  ADD KEY `targetsummaryid_idx` (`targetsummaryid`),
  ADD KEY `ind_ttd_indid_fk_idx` (`indicatorid`),
  ADD KEY `loc_ttd_locid_fk_idx` (`locationid`),
  ADD KEY `qua_ttd_quaid_fk_idx` (`quarterid`);

--
-- Indexes for table `tbltarget_summary`
--
ALTER TABLE `tbltarget_summary`
  ADD PRIMARY KEY (`targetsummaryid`);

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
  MODIFY `indicatorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `perspective`
--
ALTER TABLE `perspective`
  MODIFY `perspectiveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tblquarter`
--
ALTER TABLE `tblquarter`
  MODIFY `quarterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsemester`
--
ALTER TABLE `tblsemester`
  MODIFY `semid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltarget_details`
--
ALTER TABLE `tbltarget_details`
  MODIFY `targetdetailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbltarget_summary`
--
ALTER TABLE `tbltarget_summary`
  MODIFY `targetsummaryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluseraccount`
--
ALTER TABLE `tbluseraccount`
  MODIFY `useraccountid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `indicator`
--
ALTER TABLE `indicator`
  ADD CONSTRAINT `pers_ind_persId_FK` FOREIGN KEY (`perspectiveid`) REFERENCES `perspective` (`perspectiveid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblquarter`
--
ALTER TABLE `tblquarter`
  ADD CONSTRAINT `sem_qua_semid_fk` FOREIGN KEY (`semid`) REFERENCES `tblsemester` (`semid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbltarget_details`
--
ALTER TABLE `tbltarget_details`
  ADD CONSTRAINT `ind_ttd_indid_fk` FOREIGN KEY (`indicatorid`) REFERENCES `indicator` (`indicatorid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `loc_ttd_locid_fk` FOREIGN KEY (`locationid`) REFERENCES `location` (`locationId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `qua_ttd_quaid_fk` FOREIGN KEY (`quarterid`) REFERENCES `tblquarter` (`quarterid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tts_ttd_ttsid_fk` FOREIGN KEY (`targetsummaryid`) REFERENCES `tbltarget_summary` (`targetsummaryid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
