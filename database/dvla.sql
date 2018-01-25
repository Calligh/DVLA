-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: dvla
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('qSpecialE9032','admin','root');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson_details`
--

DROP TABLE IF EXISTS `lesson_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lesson_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(50000) NOT NULL,
  `lesson_topics` int(11) NOT NULL,
  `lessons` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_topics` (`lesson_topics`),
  KEY `lessons` (`lessons`),
  CONSTRAINT `lesson_details_ibfk_1` FOREIGN KEY (`lesson_topics`) REFERENCES `lesson_topics` (`id`),
  CONSTRAINT `lesson_details_ibfk_2` FOREIGN KEY (`lessons`) REFERENCES `lessons` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson_details`
--

LOCK TABLES `lesson_details` WRITE;
/*!40000 ALTER TABLE `lesson_details` DISABLE KEYS */;
INSERT INTO `lesson_details` VALUES (1,' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',3,3),(2,' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',3,2);
/*!40000 ALTER TABLE `lesson_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson_topics`
--

DROP TABLE IF EXISTS `lesson_topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lesson_topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topics` varchar(120) NOT NULL,
  `lessons` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lessons` (`lessons`),
  CONSTRAINT `lesson_topics_ibfk_1` FOREIGN KEY (`lessons`) REFERENCES `lessons` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson_topics`
--

LOCK TABLES `lesson_topics` WRITE;
/*!40000 ALTER TABLE `lesson_topics` DISABLE KEYS */;
INSERT INTO `lesson_topics` VALUES (1,'internal body parts',1),(2,'External Body Parts',1),(3,'alternator',2),(4,'Charging Systems',2),(5,'Electrical Supply Systems',2),(6,'Gauges and meters',2),(7,'Ignition electronic systems',2),(8,'Lighting and signaling systems',2),(9,'Sensors',2),(10,'Starting Systems',2),(11,'Switches',2),(12,'Wiring harnesses',2),(13,'Miscellaneous',2);
/*!40000 ALTER TABLE `lesson_topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lessons`
--

LOCK TABLES `lessons` WRITE;
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
INSERT INTO `lessons` VALUES (1,'BODY AND MAIN PARTS','public/images/seat-belt.svg'),(2,'ELECTRONICS','public/images/engine1.svg'),(3,'INTERIOR','public/images/steering-wheel.svg'),(4,'POWERTRAIN AND CHASIS','public/images/piston.svg'),(5,'MISCELLANEOUS AUTO PARTS','public/images/oil.svg');
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-12  5:08:54
