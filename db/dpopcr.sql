-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbopcr
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `indicator`
--

DROP TABLE IF EXISTS `indicator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `indicator` (
  `indicatorid` int(11) NOT NULL AUTO_INCREMENT,
  `perspectiveid` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `order` varchar(45) NOT NULL,
  PRIMARY KEY (`indicatorid`),
  KEY `pers_ind_persId_FK_idx` (`perspectiveid`),
  CONSTRAINT `pers_ind_persId_FK` FOREIGN KEY (`perspectiveid`) REFERENCES `perspective` (`perspectiveid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicator`
--

LOCK TABLES `indicator` WRITE;
/*!40000 ALTER TABLE `indicator` DISABLE KEYS */;
INSERT INTO `indicator` VALUES (4,29,'Customer ko','321'),(5,33,'Internallll','1'),(6,34,'Financiaaaaal','2'),(7,33,'Internal ko1','223'),(8,34,'Financial Ko','2'),(9,35,'Learning ko','21');
/*!40000 ALTER TABLE `indicator` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location` (
  `locationId` int(11) NOT NULL,
  `code` varchar(3) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`locationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'RO','Regional Office'),(2,'BUK','PSTO - Bukidnon'),(3,'CAM','PSTO - Camiguin'),(4,'LDN','PSTO - Lanao del Norte'),(5,'MOC','PSTO - Misamis Occidental'),(6,'MOR','PSTO - Misamis Oriental');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perspective`
--

DROP TABLE IF EXISTS `perspective`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perspective` (
  `perspectiveid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`perspectiveid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perspective`
--

LOCK TABLES `perspective` WRITE;
/*!40000 ALTER TABLE `perspective` DISABLE KEYS */;
INSERT INTO `perspective` VALUES (29,'Costumer Perspective'),(33,'Internal Perspective'),(34,'Financial Perspective'),(35,'Learning and Growth Perspective');
/*!40000 ALTER TABLE `perspective` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblquarter`
--

DROP TABLE IF EXISTS `tblquarter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tblquarter` (
  `quarterid` int(11) NOT NULL AUTO_INCREMENT,
  `semid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `months` varchar(45) NOT NULL,
  PRIMARY KEY (`quarterid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblquarter`
--

LOCK TABLES `tblquarter` WRITE;
/*!40000 ALTER TABLE `tblquarter` DISABLE KEYS */;
INSERT INTO `tblquarter` VALUES (1,1,'1st Quarter','Jan - Mar'),(2,1,'2nd Quarter','Apr - Jun'),(3,2,'3rd Quarter','July - Sep'),(4,2,'4th Quarter','Oct - Dec');
/*!40000 ALTER TABLE `tblquarter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltarget_details`
--

DROP TABLE IF EXISTS `tbltarget_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbltarget_details` (
  `targetdetailsid` int(11) NOT NULL AUTO_INCREMENT,
  `targetsummaryid` int(11) DEFAULT NULL,
  `indicatorid` int(11) DEFAULT NULL,
  `locationid` int(11) DEFAULT NULL,
  `quarterid` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  PRIMARY KEY (`targetdetailsid`),
  KEY `targetsummaryid_idx` (`targetsummaryid`),
  KEY `ind_ttd_indid_fk_idx` (`indicatorid`),
  KEY `loc_ttd_locid_fk_idx` (`locationid`),
  KEY `qua_ttd_quaid_fk_idx` (`quarterid`),
  CONSTRAINT `ind_ttd_indid_fk` FOREIGN KEY (`indicatorid`) REFERENCES `indicator` (`indicatorid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `loc_ttd_locid_fk` FOREIGN KEY (`locationid`) REFERENCES `location` (`locationId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `qua_ttd_quaid_fk` FOREIGN KEY (`quarterid`) REFERENCES `tblquarter` (`quarterid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tts_ttd_ttsid_fk` FOREIGN KEY (`targetsummaryid`) REFERENCES `tbltarget_summary` (`targetsummaryid`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltarget_details`
--

LOCK TABLES `tbltarget_details` WRITE;
/*!40000 ALTER TABLE `tbltarget_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbltarget_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltarget_summary`
--

DROP TABLE IF EXISTS `tbltarget_summary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbltarget_summary` (
  `targetsummaryid` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(45) NOT NULL,
  `version` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`targetsummaryid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltarget_summary`
--

LOCK TABLES `tbltarget_summary` WRITE;
/*!40000 ALTER TABLE `tbltarget_summary` DISABLE KEYS */;
INSERT INTO `tbltarget_summary` VALUES (2,'2024','1.1',1,'2024-03-08 10:01:20'),(3,'2017','2.12',0,'2024-03-08 10:01:29'),(4,'2018','2.0',1,'2024-03-08 10:54:47');
/*!40000 ALTER TABLE `tbltarget_summary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluseraccount`
--

DROP TABLE IF EXISTS `tbluseraccount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbluseraccount` (
  `useraccountid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` enum('1','0') NOT NULL,
  `userlevel` varchar(45) DEFAULT 'user',
  PRIMARY KEY (`useraccountid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluseraccount`
--

LOCK TABLES `tbluseraccount` WRITE;
/*!40000 ALTER TABLE `tbluseraccount` DISABLE KEYS */;
INSERT INTO `tbluseraccount` VALUES (1,'userx','$2y$10$6XuTxlfIS88T2BZmDCC/qu/GtfGXHdxnXSo8J9qIKdYJ7W1WUVnAe','2024-03-04 00:32:05','1','user'),(2,'2020300298','$2y$10$BYRC7owP54kCRat1ec7zOOg9B1JmkjzMAMUWJMfkPqmdxIbjzNaOy','2024-03-04 00:32:23','1','user'),(3,'rain','$2y$10$IVeE6mCg0uZkGFOpjCiNR.1ZyhRpxXdZAup31f34KuxYlv6YeEgmS','2024-03-04 00:21:21','1','admin');
/*!40000 ALTER TABLE `tbluseraccount` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-13 15:48:39
