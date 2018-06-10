-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: dvla
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
  `firstname` varchar(60) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `picture` longtext,
  `created_at` date DEFAULT '1999-01-01',
  `updated_at` date DEFAULT '1999-01-01',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('qSpecialE9032','admin','','63a9f0ea7bb98050796b649e85481845','','','1999-01-01','1999-01-01');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_login`
--

LOCK TABLES `admin_login` WRITE;
/*!40000 ALTER TABLE `admin_login` DISABLE KEYS */;
INSERT INTO `admin_login` VALUES (1,'admin','admin'),(2,'erpankaj182','admin');
/*!40000 ALTER TABLE `admin_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_personal_info`
--

DROP TABLE IF EXISTS `admin_personal_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_personal_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hint_q` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_personal_info`
--

LOCK TABLES `admin_personal_info` WRITE;
/*!40000 ALTER TABLE `admin_personal_info` DISABLE KEYS */;
INSERT INTO `admin_personal_info` VALUES (1,'erpankaj182','123456','Pankaj Agrawal','erpankaj182@gmail.com','7737042061','Green Park, Dadi Ka Phatak, Benar Road, Jhotwara','Mother\'s Middle Name','Devi'),(2,'admin','iloveBigData','Vikash Kumar Jangid','vikash32@yahoomail.com','2765632135','Delhi VasantVihar, NCR','School Name','St.Anslem Public School'),(6,'yaashi123','mepagalhu','Yaashi Pagal','pagalchori@zyx.com','0000000000','Laptaganj, Chinese colony, Chaina -989800','Fav Hobby ','Watching Cartoon ');
/*!40000 ALTER TABLE `admin_personal_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Java Quiz '),(2,'PHP Quiz'),(3,'SQL Quiz');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
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
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_topics` (`lesson_topics`),
  KEY `lessons` (`lessons`),
  CONSTRAINT `lesson_details_ibfk_1` FOREIGN KEY (`lesson_topics`) REFERENCES `lesson_topics` (`id`),
  CONSTRAINT `lesson_details_ibfk_2` FOREIGN KEY (`lessons`) REFERENCES `lessons` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson_details`
--

LOCK TABLES `lesson_details` WRITE;
/*!40000 ALTER TABLE `lesson_details` DISABLE KEYS */;
INSERT INTO `lesson_details` VALUES (1,' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',3,3,3),(2,' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',3,2,3),(3,'This will contain the external body parts',2,1,3),(4,'safsdafsdfasfddsadsfvcfdsfsdfsdfsdfsd',1,1,3);
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
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lessons` (`lessons`),
  CONSTRAINT `lesson_topics_ibfk_1` FOREIGN KEY (`lessons`) REFERENCES `lessons` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson_topics`
--

LOCK TABLES `lesson_topics` WRITE;
/*!40000 ALTER TABLE `lesson_topics` DISABLE KEYS */;
INSERT INTO `lesson_topics` VALUES (1,'internal body parts',1,3),(2,'External Body Parts',1,3),(3,'alternator',2,3),(4,'Charging Systems',2,3),(5,'Electrical Supply Systems',2,3),(6,'Gauges and meters',2,3),(7,'Ignition electronic systems',2,3),(8,'Lighting and signaling systems',2,3),(9,'Sensors',2,3),(10,'Starting Systems',2,3),(11,'Switches',2,3),(12,'Wiring harnesses',2,3),(13,'Miscellaneous',2,3),(14,'Sample Road Signs',6,1),(15,'feedback',8,1);
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
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lessons`
--

LOCK TABLES `lessons` WRITE;
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
INSERT INTO `lessons` VALUES (1,'BODY AND MAIN PARTS','public/images/seat-belt.svg',3),(2,'ELECTRONICS','public/images/engine1.svg',3),(3,'INTERIOR','public/images/steering-wheel.svg',3),(4,'POWERTRAIN AND CHASIS','public/images/piston.svg',3),(5,'MISCELLANEOUS AUTO PARTS','public/images/oil.svg',3),(6,'Introductions','public/images/basketball.svg',1),(7,'INTRODUCTION','public/images/alarm.svg',2),(8,'Signs - The Imperative','public/images/package.svg',1);
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `url` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Road Signs','public/images/sign.svg','road-signs','2018-03-13 11:30:13','2018-03-13 11:30:13'),(2,'Motor Law','public/images/package.svg','motor-law','2018-03-13 11:30:39','2018-03-13 11:30:39'),(3,'Vehicle Knowledge','public/images/dashboard.svg','collections','2018-03-13 11:31:13','2018-03-13 11:31:13'),(4,'Safe Driving','public/images/steering-wheel.svg','safe-driving','2018-03-13 11:31:46','2018-03-13 11:31:46'),(5,'First Aid Toolkit','public/images/first-aid-kit.svg','toolkit/first-aid','2018-03-13 11:32:14','2018-03-13 11:32:14'),(6,'License Exams','public/images/books.svg','license/exams','2018-03-13 11:32:37','2018-03-13 11:32:37');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `qno` int(3) NOT NULL AUTO_INCREMENT,
  `ques` text,
  `a` text,
  `b` text,
  `c` text,
  `d` text,
  `ans` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Java programs are  ','Faster than others\r\n','Platform independent\r\n','Not reusable\r\n','Not scalable\r\n','b\r\n'),(2,'Java has its origin in\r\n','C programming language\r\n','PERRL\r\n','COBOL\r\n','Oak programming language\r\n','d\r\n'),(3,'Which one of the following is true for Java\r\n','Java is object oriented and interpreted\r\n','Java is efficient and faster than C\r\n','Java is the choice of everyone.\r\n','Java is not robust.\r\n','a\r\n'),(4,'The command javac is used to\r\n','debug a java program\r\n','compile a java program\r\n','interpret a java program\r\n','execute a java program\r\n','b\r\n'),(5,'Java servlets are an efficient and powerful solution for creating ______ for the web.\r\n','Dynamic content\r\n','Static content\r\n','Hardware\r\n','Both a and b\r\n','a\r\n'),(7,'Which of the following is not the java primitive type\r\n','Byte\r\n','Float\r\n','Character\r\n','Long double\r\n','d\r\n'),(8,'Command to execute compiled java program is\r\n','java\r\n','javac\r\n','run\r\n','javaw\r\n','a\r\n'),(9,'Inner classes are\r\n','anonymous classes\r\n','nested classes\r\n','sub classes\r\n','derived classes\r\n','b\r\n'),(10,'All java classes are derived from\r\n','java.lang.Class\r\n','java.util.Name\r\n','java.lang.Object\r\n','java.awt.Window\r\n','c\r\n'),(11,'What would happen if \"String[]args\" is not included as argument in the main method.\r\n','No error\r\n','Compilation error\r\n','Program won\'t run\r\n','Program exit\r\n','c\r\n'),(12,'For execution of DELETE SQL query in JDBC  _____. method must be used.\r\n','executeQuery()\r\n','executeDeleteQuery()\r\n','executeUpdate()\r\n','executeDelete()\r\n','c\r\n'),(13,'Which of the following is not mandatory in variable declaration?','a semicolon\r\n','an identifier\r\n','an assignment\r\n','a data type\r\n','c\r\n'),(14,'The out object is an object encapsulated inside the _______. class and represents the standard output device.\r\n','standard\r\n','local\r\n','globlal\r\n','system\r\n','d\r\n'),(15,'The third type of comment is used by a tool called ______ for automatic generation of documentation.\r\n','Java commenting\r\n','Java generator\r\n','Java doc\r\n','Java loc\r\n','c\r\n'),(16,'In the second type the information written in java after // is ignored by the ________.\r\n','Interpreter\r\n','Compiler\r\n','Programmer\r\n','All of the above\r\n','b\r\n'),(17,'In JDBC _______ imports all Java classes concerned with database connectivity.\r\n','javax.sql.*\r\n','java.mysql.*\r\n','java.sql.*\r\n','com.*\r\n','c\r\n'),(18,'The class at the top of exception class hierarchy is _________.\r\n','ArithmeticException\r\n','Throwable\r\n','Class\r\n','Exception\r\n','b\r\n'),(19,'The class string belongs to _________ package.\r\n','java.awt\r\n','java.lang\r\n','java.applet\r\n','java.string\r\n','b\r\n'),(20,'________ package is used by compiler itself. So it does not need to be imported for use.\r\n','java.math\r\n','java.awt\r\n','java.applet\r\n','java.lang\r\n','d\r\n'),(21,'A package is a collection of\r\n','classes\r\n','interfaces\r\n','editing tools\r\n','classes and interfaces\r\n','d\r\n'),(22,'Which of the following methods belong to the string class?\r\n','length( )\r\n','compare To ( )\r\n','equals ( )\r\n','All of them\r\n','d\r\n'),(23,'If m and n are int type variables what will be the result of the expression m%n when m=5 and n=2 ?\r\n','0\r\n','1\r\n','2\r\n','None of the above\r\n','b\r\n'),(24,'The concept of multiple inheritance is implemented in Java by\r\n','extending two or more classes\r\n','extending one class and implementing one or more interfaces\r\n','implementing two or more interfaces\r\n','both B and C\r\n','d\r\n'),(25,'Using which keyword we can access value of the instance variables and class variables of that class inside the method of that class itself.\r\n','super\r\n','final\r\n','this\r\n','either super or this\r\n','c\r\n'),(26,'If a variable is declared final it must include ________ value.\r\n','integer\r\n','no\r\n','initial\r\n','float\r\n','c\r\n'),(27,'In java string is a ________.\r\n','primitive data type\r\n','abstract data type\r\n','combination of boolean\r\n','None of the above\r\n','b\r\n'),(28,'Each method in a java class must have a unique name .\r\n','Not necessary\r\n','True\r\n','False\r\n','None of the above\r\n','a\r\n'),(29,'It is important feature of java that it always provides a default constructor to a class.\r\n','Not supported\r\n','False\r\n','True\r\n','None of the above\r\n','c\r\n\r\n'),(30,'Java was developed by the company\r\n','Sun Micro systems\r\n','Microsoft\r\n','Micro tech\r\n','IBM\r\n','a\r\n'),(31,'What is the file extension of compiled java program?\r\n','.class\r\n','.java\r\n','.css\r\n','.html\r\n','a\r\n'),(32,'________ keyword is used to invoke the current object.\r\n','New\r\n','That\r\n','This\r\n','Me\r\n','c\r\n'),(33,'Which of the function is used to convert string to Number in java program?\r\n','to Number()\r\n','conString()\r\n','valueOf()\r\n','toString()\r\n','c\r\n'),(34,'What are the part in executing a Java program and their purposes?\r\n','Java Compiler\r\n','Java Interpreter\r\n','Java Preprocessor\r\n','Directive Preprocessor\r\n','a\r\n'),(35,'Method overloading is one of the way that Java supports ________\r\n','encapsulation\r\n','class\r\n','inheritence\r\n','polymorphism\r\n','d\r\n'),(36,'Java support RMI. What does this RMI stands for?\r\n','Random Memory Interface\r\n','Remote Method Invocation\r\n','Random Method Invocation\r\n','Remote Memory Interface\r\n','b\r\n'),(37,'Which of the following represent legal flow control statements?\r\n','break;\r\n','break();\r\n','continue(inner);\r\n','exit();\r\n','b\r\n'),(38,'The keywords reserved but used in the initial version of Java are\r\n','union\r\n','const\r\n','inner\r\n','goto\r\n','a\r\n'),(39,'What is the default return type of main() ..\r\n','void\r\n','double\r\n','float\r\n','int\r\n','d\r\n'),(40,'Which of the following is not keyword?\r\n','NULL\r\n','implements\r\n','protected\r\n','switch\r\n','a\r\n'),(41,'Object is an ________ of class.\r\n','instance\r\n','implement\r\n','inheritance\r\n','invoke\r\n','a\r\n'),(42,'________ is the wrapper class.\r\n','Random\r\n','Byte\r\n','Vector\r\n','String\r\n','b\r\n'),(43,'Class is a ________ entity.\r\n','logical\r\n','Physical\r\n','up normal\r\n','collection of\r\n','a\r\n'),(44,'Which of the following denotes a javadoc comment?\r\n','//#\r\n','/*\r\n','/**\r\n','//**\r\n','c\r\n'),(45,'Object is a ________ entity.\r\n','normal\r\n','physical\r\n','logical\r\n','normal\r\n','b\r\n'),(46,'One interface can inherit another by use of the keyword ________\r\n','public\r\n','extends\r\n','method name\r\n','class name\r\n','b\r\n'),(47,'________ must be the first non comment statement in the file\r\n','package\r\n','class\r\n','object\r\n','declaration\r\n','a\r\n'),(48,'Every method of a ________ is implicitly final.\r\n','static class\r\n','dynamic class\r\n','final class\r\n','abstract class\r\n','c\r\n'),(49,'The string is defined in ________ name space.\r\n','java.Lang\r\n','java.String\r\n','java.Char\r\n','java.Awt\r\n','a\r\n'),(50,'A ________ object cannot be modified after it is created.\r\n','double\r\n','int\r\n','string\r\n','main\r\n','c\r\n'),(51,'________ is a special member function.\r\n','method\r\n','class\r\n','use defined function\r\n','constructor\r\n','d\r\n'),(52,'A ________ class may not have any abstract method.\r\n','abstract\r\n','static\r\n','final\r\n','public\r\n','c\r\n'),(53,'Keyword ________ is always a reference to the object.\r\n','new\r\n','this\r\n','invoke\r\n','class\r\n','b\r\n'),(54,'________ is a small unit of process.\r\n','method\r\n','thread\r\n','applet\r\n','steam\r\n','b\r\n'),(55,'________ is valid for if statement?\r\n','An integer expression\r\n','A Boolean expression\r\n','A character expression\r\n','A legal expression\r\n','b\r\n'),(56,'Wrapper class is a wrapper around a ________ data type.\r\n','normal\r\n','central\r\n','primitive\r\n','concrete\r\n','c\r\n'),(57,'________ statement is valid for array declaration.\r\n','int number();\r\n','float number();\r\n','float number[];\r\n','count int[];\r\n','c\r\n'),(58,'________ operators which concatenates two strings.\r\n','+\r\n','++\r\n','?\r\n','--\r\n','a\r\n'),(59,'What is the range of short data type in Java?\r\n','-128 to 127\r\n','-32768 to 32767\r\n','-2147483648 to 2147483647\r\n','None of the mentioned\r\n','b\r\n'),(60,'What is the range of byte data type in Java?\r\n','-128 to 127\r\n','-32768 to 32767\r\n','-2147483648 to 2147483647\r\n','None of the mentioned\r\n','a\r\n'),(61,'An expression involving byte and int and literal numbers is promoted to which of these?\r\n','int\r\n','long\r\n','byte\r\n','float\r\n','a\r\n'),(62,'An expression involving byte and int and literal numbers is promoted to which of these?\r\n','int\r\n','long\r\n','byte\r\n','float\r\n','a\r\n'),(63,'What is the numerical range of a char data type in Java?\r\n','-128 to 127\r\n','0 to 256\r\n','0 to 32767\r\n','0 to 65535\r\n','d\r\n'),(64,'Which of these coding types is used for data type characters in Java?\r\n','ASCII\r\n','ISO-LATIN-1\r\n','UNICODE\r\n','None of the mentioned\r\n','c\r\n'),(65,'Which of these values can a boolean variable contain?\r\n','True & False\r\n','0 & 1\r\n','Any integer value\r\n','true\r\n','a\r\n'),(66,'Which one is a valid declaration of a boolean?\r\n','boolean b1 = 1;\r\n','boolean b2 = \'false\';\r\n','boolean b3 = false;\r\n','boolean b4 = \'true\'\r\n','c\r\n'),(67,'Which of these is necessary condition for automatic type conversion in Java?\r\n','The destination type is smaller than source type.\r\n','The destination type is larger than source type.\r\n','The destination type can be larger or smaller than source type.\r\n','None of the mentioned\r\n','b\r\n'),(68,'If an expression contains double and int and float and long then whole expression will promoted into which of these data types?\r\n','long\r\n','int\r\n','double\r\n','float\r\n','c\r\n'),(69,'What is Truncation is Java?\r\n','Floating-point value assigned to an integer type.\r\n','Integer value assigned to floating type.\r\n','Floating-point value assigned to an Floating type.\r\n','Integer value assigned to floating type.\r\n','a\r\n'),(70,'Which of these operators is used to allocate memory to array variable in Java?\r\n','malloc\r\n','alloc\r\n','new\r\n','new malloc\r\n','c\r\n'),(71,'Which of these is necessary to specify at time of array initialization?\r\n','Row\r\n','Column\r\n','Both Row and Column\r\n','None of the mentioned\r\n','a\r\n'),(72,'Which of the following can be operands of arithmetic operators?\r\n','Numeric\r\n','Boolean\r\n','Characters\r\n','Both Numeric & Characters\r\n','d\r\n'),(73,'Modulus operator % can be applied to which of these?\r\n','Integers\r\n','Floating ? point numbers\r\n','Both Integers and floating ? point numbers.\r\n','None of the mentioned\r\n','c\r\n'),(74,'Decrement operator -- decreases value of variable by what number?\r\n','1\r\n','2\r\n','3\r\n','4\r\n','a\r\n'),(75,'Which of these is not a bitwise operator?\r\n','&\r\n','&=\r\n','|=\r\n','<=\r\n','d\r\n'),(76,'Which operator is used to invert all the digits in binary representation of a number?\r\n','~\r\n','<<<\r\n','>>>\r\n','^\r\n','a\r\n'),(77,'What is the output of relational operators?\r\n','Integer\r\n','Boolean\r\n','Characters\r\n','Double\r\n','b\r\n'),(78,'Which of these is returned by \"greater than\" and \"less than\" and \"equal to\" operators?\r\n','Integers\r\n','Floating ? point numbers\r\n','Boolean\r\n','None of the mentioned\r\n','c\r\n'),(79,'Which of these operators can skip evaluating right hand operand?\r\n','!\r\n','|\r\n','&\r\n','&&\r\n','d\r\n'),(80,'Which of these statement is correct?\r\n','true and false are numeric values 1 and 0.\r\n','true and false are numeric values 0 and 1.\r\n','true is any non zero value and false is 0.\r\n','true and false are non numeric values.\r\n','d\r\n'),(81,'Which of these have highest precedence?\r\n','()\r\n','++\r\n','*\r\n','>>\r\n','a\r\n'),(82,'Which of these selection statements test only for equality?\r\n','if\r\n','switch\r\n','if & switch\r\n','None of the mentioned\r\n','b\r\n'),(83,'Which of these are selection statements in Java?\r\n','if()\r\n','for()\r\n','continue\r\n','break\r\n','a\r\n'),(84,'Which of the following loops will execute the body of loop even when condition controlling the loop is initially false?\r\n','do-while\r\n','while\r\n','for\r\n','None of the mentioned\r\n','a\r\n'),(85,'Which of these jump statements can skip processing remainder of code in its body for a particular iteration?\r\n','break\r\n','return\r\n','exit\r\n','continue\r\n','d\r\n'),(86,'Which of these keywords is used to make a class?\r\n','class\r\n','struct\r\n','int\r\n','None of the mentioned\r\n','a\r\n'),(87,'Which of the following is a valid declaration of an object of class Box?\r\n','Box obj = new Box();\r\n','Box obj = new Box;\r\n','obj = new Box();\r\n','new Box obj;\r\n','a\r\n'),(88,'Which of these operators is used to allocate memory for an object?\r\n','malloc\r\n','alloc\r\n','new\r\n','give\r\n','c\r\n'),(89,'Which of these statement is incorrect?\r\n','Every class must contain a main() method.\r\n','Applets do not require a main() method at all.\r\n','There can be only one main() method in a program.\r\n','main() method must be made public.\r\n','a\r\n'),(90,'What is the return type of a method that does not returns any value?\r\n','int\r\n','float\r\n','void\r\n','double\r\n','c\r\n'),(91,'What is the process of defining more than one method in a class differentiated by method signature?\r\n','Function overriding\r\n','Function overloading\r\n','Function doubling\r\n','None of the mentioned\r\n','b\r\n'),(92,'Which of the following is a method having same name as that of it?s class?\r\n','finalize\r\n','delete\r\n','class\r\n','constructor\r\n','d\r\n'),(93,'Which method can be defined only once in a program?\r\n','main method\r\n','finalize method\r\n','static method\r\n','private method\r\n','a\r\n'),(94,'What is the return type of Constructors?\r\n','int\r\n','float\r\n','void\r\n','None of the mentioned\r\n','d\r\n'),(95,'Which keyword is used by method to refer to the object that invoked it?\r\n','import\r\n','catch\r\n','abstract\r\n','this\r\n','d\r\n'),(96,'Which of these can be overloaded?\r\n','Methods\r\n','Constructors\r\n','All of the mentioned\r\n','None of the mentioned\r\n','c\r\n'),(97,'What is the process of defining a method in terms of itself i.e. a method that calls itself?\r\n','Polymorphism\r\n','Abstraction\r\n','Encapsulation\r\n','Recursion\r\n','d\r\n'),(98,'Which of these access specifiers must be used for main() method?\r\n','private\r\n','public\r\n','protected\r\n','None of the mentioned\r\n','b\r\n'),(99,'Which of these is used to access member of class before object of that class is created?\r\n','public\r\n','private\r\n','static\r\n','protected\r\n','c\r\n'),(100,'What is the process by which we can control what parts of a program can access the members of a class?\r\n','Polymorphism\r\n','Abstraction\r\n','Encapsulation\r\n','Recursion\r\n','c\r\n'),(101,'Arrays in Java are implemented as?\r\n','class\r\n','object\r\n','variable\r\n','None of the mentioned\r\n','b\r\n'),(102,'Which of these keywords is used to prevent content of a variable from being modified?\r\n','final\r\n','last\r\n','constant\r\n','static\r\n','a\r\n'),(103,'Which of these methods must be made static?\r\n','main()\r\n','delete()\r\n','run()\r\n','finalize()\r\n','a\r\n'),(104,'String in Java is a?\r\n','class\r\n','object\r\n','variable\r\n','character array\r\n','a\r\n'),(105,'Which of these method of String class is used to obtain character at specified index?\r\n','char()\r\n','Charat()\r\n','charat()\r\n','charAt()\r\n','d\r\n'),(106,'Which of these keywords is used to refer to member of base class from a sub class?\r\n','upper\r\n','super\r\n','this\r\n','None of the mentioned\r\n','b\r\n'),(107,'Which of these method of String class can be used to test to strings for equality?\r\n','isequal()\r\n','isequals()\r\n','equal()\r\n','equals()\r\n','d\r\n'),(108,'Which of the following statements are incorrect?\r\n','String is a class.\r\n','Strings in java are mutable.\r\n','Every string is an object of class String.\r\n','Java defines a peer class of String called StringBuffer which allows string to be altered.\r\n','b\r\n'),(109,'Which of these keyword must be used to inherit a class?\r\n','super\r\n','this\r\n','extent\r\n','extends\r\n','d\r\n'),(110,'Which of these is correct way of inheriting class A by class B?\r\n','class B + class A {}\r\n','class B inherits class A {}\r\n','class B extends A {}\r\n','class B extends class A {}\r\n','c\r\n'),(111,'Which of these keyword can be used in subclass to call the constructor of superclass?\r\n','super\r\n','this\r\n','extent\r\n','extends\r\n','a\r\n'),(112,'Which of these keywords can be used to prevent Method overriding?\r\n','static\r\n','constant\r\n','protected\r\n','final\r\n','d\r\n'),(113,'Which of these is correct way of calling a constructor having no parameters of superclass A by subclass B?\r\n','super(void);\r\n','superclass.();\r\n','super.A();\r\n','super();\r\n','d\r\n'),(114,'Which of these class is superclass of every class in Java?\r\n','String class\r\n','Object class\r\n','Abstract class\r\n','ArrayList class\r\n','b\r\n'),(115,'Which of these method of Object class is used to obtain class of an object at run time?\r\n','get()\r\n','void getclass()\r\n','Class getclass()\r\n','None of the mentioned\r\n','c\r\n'),(116,'Which of these keywords can be used to prevent inheritance of a class?\r\n','super\r\n','constant\r\n','Class\r\n','final\r\n','d\r\n'),(117,'Which of these keywords cannot be used for a class which has been declared final?\r\n','abstract\r\n','extends\r\n','abstract and extends\r\n','None of the mentioned\r\n','a\r\n'),(118,'Which of these class relies upon its subclasses for complete implementation of its methods?\r\n','Object class\r\n','abstract class\r\n','ArrayList class\r\n','None of the mentioned\r\n','b\r\n'),(119,'Which of these class is superclass of String and StringBuffer class?\r\n','java.util\r\n','java.lang\r\n','ArrayList\r\n','None of the mentioned\r\n','b\r\n'),(120,'Which of these operators can be used to concatenate two or more String objects?\r\n','+\r\n','+=\r\n','&\r\n','||\r\n','a\r\n'),(121,'Which of these method of class String is used to obtain length of String object?\r\n','get()\r\n','Sizeof()\r\n','lengthof()\r\n','length()\r\n','d\r\n'),(122,'Which of these method of class String is used to check weather a given object starts with a particular string literal?\r\n','startsWith()\r\n','endsWith()\r\n','Starts()\r\n','ends()\r\n','a\r\n'),(123,'What is the value returned by function compareTo() if the invoking string is less than the string compared?\r\n','zero\r\n','value less than zero\r\n','value greater than zero\r\n','None of the mentioned\r\n','b\r\n'),(124,'Which of these data type value is returned by equals() method of String class?\r\n','char\r\n','int\r\n','boolean\r\n','All of the mentioned\r\n','c\r\n'),(125,'Which of these method of class String is used to extract a substring from a String object?\r\n','substring()\r\n','Substring()\r\n','SubString()\r\n','None of the mentioned\r\n','a\r\n'),(126,'Which of these method of class String is used to remove leading and trailing whitespaces?\r\n','startsWith()\r\n','trim()\r\n','Trim()\r\n','doTrim()\r\n','b\r\n'),(127,'Which of these class is used to create an object whose character sequence is mutable?\r\n','String()\r\n','StringBuffer()\r\n','Both of the mentioned\r\n','None of the mentioned\r\n','b\r\n'),(128,'Which of these method of class StringBuffer is used to concatenate the string representation to the end of invoking string?\r\n','concat()\r\n','append()\r\n','join()\r\n','concatenate()\r\n','b\r\n'),(129,'Which of these method of class StringBuffer is used to reverse sequence of characters?\r\n','reverse()\r\n','reverseall()\r\n','Reverse()\r\n','reverseAll()\r\n','a\r\n'),(130,'Which of the following are incorrect form of StringBuffer class constructor?\r\n','StringBuffer()\r\n','StringBuffer(int size)\r\n','StringBuffer(String str)\r\n','StringBuffer(int size , String str)\r\n','d\r\n'),(131,'Which of these keywords is used to define packages in Java?\r\n','pkg\r\n','Pkg\r\n','package\r\n','Package\r\n','c\r\n'),(132,'Which of the following is correct way of importing an entire package ?pkg??\r\n','import pkg.\r\n','Import pkg.\r\n','import pkg.*\r\n','Import pkg.*\r\n','c\r\n'),(133,'Which of these keywords is used to define interfaces in Java?\r\n','interface\r\n','Interface\r\n','intf\r\n','Intf\r\n','a\r\n'),(134,'Which of these keywords is used by a class to use an interface defined previously?\r\n','import\r\n','Import\r\n','implements\r\n','Implements\r\n','c\r\n'),(135,'Which of these class is superclass of all other classes?\r\n','Math\r\n','Process\r\n','System\r\n','Object\r\n','d\r\n'),(136,'Which of these method of Object class can generate duplicate copy of the object on which it is called?\r\n','clone()\r\n','copy()\r\n','dublicate()\r\n','dito()\r\n','a\r\n'),(137,'Which of these method is a rounding function of Math class?\r\n','max()\r\n','min()\r\n','abs()\r\n','All of the mentioned\r\n','d\r\n'),(138,'Which of these class contains only floating point functions?\r\n','Math\r\n','Process\r\n','System\r\n','Object\r\n','a\r\n'),(139,'Which of these keywords is not a part of exception handling?\r\n','try\r\n','finally\r\n','thrown\r\n','catch\r\n','c\r\n'),(140,'Which of these keywords must be used to monitor for exceptions?\r\n','try\r\n','finally\r\n','throw\r\n','catch\r\n','a\r\n'),(141,'Which of these keywords must be used to handle the exception thrown by try block in some rational manner?\r\n','try\r\n','finally\r\n','throw\r\n','catch\r\n','d\r\n'),(142,'Which of these keywords is used to manually throw an exception?\r\n','try\r\n','finally\r\n','throw\r\n','catch\r\n','c\r\n'),(143,'Which of these class is related to all the exceptions that can be caught by using catch?\r\n','Error\r\n','Exception\r\n','RuntimeExecption\r\n','All of the mentioned\r\n','b\r\n'),(144,'Which of these methods can be used to output a sting in an applet?\r\n','display()\r\n','print()\r\n','drawString()\r\n','transient()\r\n','c\r\n'),(145,'What does AWT stands for?\r\n','All Window Tools\r\n','All Writing Tools\r\n','Abstract Window Toolkit\r\n','Abstract Writing Toolkit\r\n','c\r\n'),(146,'Which of these operators can be used to get run time information about an object?\r\n','getInfo\r\n','Info\r\n','instanceof\r\n','getinfoof\r\n','c\r\n'),(147,'Which of these package is used for graphical user interface?\r\n','java.applet\r\n','java.awt\r\n','java.awt.image\r\n','java.io\r\n','b\r\n'),(149,'sdfsdfd pankaj','seg','b','a','a','a'),(150,'What of the following is correct way of importing an entire package ?pkg?','a','b','c ','d','a');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionsmongodb`
--

DROP TABLE IF EXISTS `questionsmongodb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionsmongodb` (
  `qno` int(11) DEFAULT NULL,
  `ques` text,
  `a` text,
  `b` text,
  `c` text,
  `d` text,
  `ans` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionsmongodb`
--

LOCK TABLES `questionsmongodb` WRITE;
/*!40000 ALTER TABLE `questionsmongodb` DISABLE KEYS */;
INSERT INTO `questionsmongodb` VALUES (1,'Which of the following language is MongoDB written in ?','Javascript','C','C++','All of the mentioned','d'),(2,'Point out the correct statement :','MongoDB is classified as a NoSQL database','MongoDB favours XML format more than JSON','MongoDB is column oriented database store','All of the mentioned','a'),(3,'Which of the following format is supported by MongoDB ?\r\n','SQL','XML','BSON','All of the mentioned','c'),(4,'MongoDB Queries can return specific fields of documents which also include user-defined __________ functions.','Javascript','C','C++\r\n','All of the mentioned','a'),(5,'Point out the wrong statement :','Secondary indices is not available in MongoDB','MongoDB supports search by field, range queries, regular expression searches','MongoDB can store the business subject in the minimal number of documents','All of the mentioned','a'),(6,'Initial release of MongoDB was in the year :','2000','2005','2009','2011','c'),(7,'MongoDB has been adopted as ________ software by a number of major websites and services.','frontend','backend','proprietary','All of the mentioned','b'),(8,'MongoDB is a _________ database that provides high performance, high availability, and easy scalability.','graph','key value','document','All of the mentioned','c'),(9,'Dynamic schema in MongoDB makes ____________ easier for applications.\r\n','inheritance','polymorphism','encapsulation','None of the mentioned','b'),(10,'With ________, MongoDB supports a complete backup solution and full deployment monitoring.','MMS','AMS','CMS','DMS','a');
/*!40000 ALTER TABLE `questionsmongodb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionsphp`
--

DROP TABLE IF EXISTS `questionsphp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionsphp` (
  `qno` int(11) NOT NULL AUTO_INCREMENT,
  `ques` text,
  `a` text,
  `b` text,
  `c` text,
  `d` text,
  `ans` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionsphp`
--

LOCK TABLES `questionsphp` WRITE;
/*!40000 ALTER TABLE `questionsphp` DISABLE KEYS */;
INSERT INTO `questionsphp` VALUES (1,'What does PHP stand for?i) Personal Home Pageii) Hypertext Preprocessoriii) Pretext Hypertext Processoriv) Preprocessor Home Page ','Both i) and iii)','Both ii) and iv)','Only ii)','Both i) and ii)','d'),(2,'PHP files have a default file extension of.','.html','.xml','.php','.ph','c'),(3,'A PHP script should start with ___ and end with ___:\r\n','< php >','< ? php ?>','<? ?> or <?php ?>','<>','c'),(4,'Which version of PHP introduced Try/catch Exception?\r\n','PHP 4','PHP 5','PHP 5.3','PHP 6','b'),(5,'What will be the output of the following php code?\r\n\r\n    <?php\r\n    $num  = 1;\r\n    $num1 = 2;\r\n    print $num . \"+\". $num1;\r\n    ?>','3','1+2','1.+.2','Error','b'),(6,'What will be the output of the following php code?\r\n\r\n    <?php\r\n    $num  = \"1\";\r\n    $num1 = \"2\";\r\n    print $num+$num1;\r\n    ?>','3\r\n','1+2\r\n','Error\r\n','12','a'),(7,'Which of the below symbols is a newline character?\r\n','\\r\r\n','\\n\r\n','/n\r\n','/r','b'),(8,'3. What will be the output of the following PHP code?\r\n\r\n    <?php\r\n    $num = 10;\r\n    echo \'What is her age? \\n She is $num years old\';\r\n    ?>\r\n','What is her age? \\n She is $num years old\r\n','What is her age?\r\nShe is $num years old','What is her age? She is 10 years old','What is her age?\r\nShe is 10 years old','a'),(9,'Which of the looping statements is/are supported by PHP?\r\ni) for loop\r\nii) while loop\r\niii) do-while loop\r\niv) foreach loop','i) and ii)','i), ii) and iii)','All of the mentioned','None of the mentioned','c'),(10,' If $a = 12 what will be returned when ($a == 12) ? 5 : 1 is executed?\r\n','12','1','Error','5','d'),(11,'mysql_connect( ) does not take following parameter\r\n','database host\r\n','user ID','password\r\n','database name','d'),(12,'For integer data type PHP 5 and earlier supported\r\n','8 bit integer value','16 bit integer value','32 bit integer value\r\n','64 bit integer value','c'),(13,'If a boolean variable $ alive= 5;\r\n','$ alive is false\r\n','$ alive is true\r\n','$ alive is overflow\r\n','the statement is snot valid','b'),(14,'Which of the following data type is compound datatype supported by PHP\r\n','Array\r\n','String\r\n','Float\r\n','Boolean','a'),(15,'Which of the following data type is not seal or datetype supported by PHP\r\n','Array','String\r\n','Float','Boolean','a'),(16,'Which of the following function can assign the output to a string variable  ','echo ( )','print ( )','print f ( )','s print f ( )','d'),(17,'WHat is your name ','plshopify1.2','a','a','d','a');
/*!40000 ALTER TABLE `questionsphp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionssql`
--

DROP TABLE IF EXISTS `questionssql`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionssql` (
  `qno` int(11) NOT NULL AUTO_INCREMENT,
  `ques` text,
  `a` text,
  `b` text,
  `c` text,
  `d` text,
  `ans` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionssql`
--

LOCK TABLES `questionssql` WRITE;
/*!40000 ALTER TABLE `questionssql` DISABLE KEYS */;
INSERT INTO `questionssql` VALUES (1,'You can add a row using SQL in a database with which of the following?\r\n','ADD','CREATE','INSERT','MAKE','c'),(2,'The command to remove rows from a table \'CUSTOMER\' is:\r\n','REMOVE FROM CUSTOMER ...','DROP FROM CUSTOMER ...','DELETE FROM CUSTOMER WHERE ...','UPDATE FROM CUSTOMER ...','c'),(3,'The SQL WHERE clause:\r\n','limits the column data that are returned.','limits the row data are returned.','Both A and B are correct.','Neither A nor B are correct.','b'),(4,'Which of the following is the original purpose of SQL?','To specify the syntax and semantics of SQL data definition language','To specify the syntax and semantics of SQL manipulation language','To define the data structures','All of the above.','d'),(5,'The wildcard in a WHERE clause is useful when?','An exact match is necessary in a SELECT statement.','An exact match is not possible in a SELECT statement.','An exact match is necessary in a CREATE statement.','An exact match is not possible in a CREATE statement.','b'),(6,'A view is which of the following?\r\n','A virtual table that can be accessed via SQL commands','A virtual table that cannot be accessed via SQL commands','A base table that can be accessed via SQL commands	\r\n','A base table that cannot be accessed via SQL commands','a'),(7,'The command to eliminate a table from a database is:','REMOVE TABLE CUSTOMER;','DROP TABLE CUSTOMER;','DELETE TABLE CUSTOMER;\r\n','UPDATE TABLE CUSTOMER;','b'),(8,'ON UPDATE CASCADE ensures which of the following?','Normalization','Data Integrity','Materialized Views','All of the above.','b'),(9,'SQL data definition commands make up a(n) ________ .\r\n','DDL','DML','HTML	','XML','a'),(10,'Which of the following is valid SQL for an Index?','CREATE INDEX ID;','CHANGE INDEX ID;','ADD INDEX ID;','REMOVE INDEX ID;','a');
/*!40000 ALTER TABLE `questionssql` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `reg_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `country` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `region` varchar(20) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `name_school` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `hostel` varchar(50) NOT NULL,
  `student_schoolid` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `picture` blob NOT NULL,
  `mm_SelectNetwork` varchar(15) NOT NULL,
  `mm_Number` int(13) NOT NULL,
  `mm_confNumber` int(11) NOT NULL,
  `mm_Amt` float(255,19) NOT NULL,
  `mm_RefNumber` int(10) NOT NULL,
  `created_at` date NOT NULL DEFAULT '2017-01-01',
  `updated_at` date NOT NULL DEFAULT '2017-02-02',
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES (1,'Kofi','Sanders','Offei','2017-11-03','Male','safd','jsalkfj',20090099,209090930,'off@gmail.com','63a9f0ea7bb98050796b649e85481845','Accra','Lapaz','Accra Institute of Technology',300,'asfsdfsd','214cs01001248','jlkj','data:image/png;base64,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','MTN',559400612,559400612,50.0000000000000000000,559400612,'2017-01-01','2018-01-28');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tertiary_schools`
--

DROP TABLE IF EXISTS `tertiary_schools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tertiary_schools` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tertiary_schools`
--

LOCK TABLES `tertiary_schools` WRITE;
/*!40000 ALTER TABLE `tertiary_schools` DISABLE KEYS */;
INSERT INTO `tertiary_schools` VALUES (1,'University of Ghana'),(2,'Kwame Nkrumah University of Science and Technology'),(3,'University of Cape Coast'),(4,'University of Education, Winneba'),(5,'University for Development Studies'),(6,'University of Professional Studies'),(7,'University of Mines and Technology'),(8,'University of Health and Allied Sciences'),(9,'University Of Energy And Natural Resources'),(10,'Accra Technical University'),(11,'Cape Coast Technical University'),(12,'Kumasi Technical University'),(13,'Koforidua Technical University'),(14,'Tamale Technical University'),(15,'Ho Technical University'),(16,'Takoradi Technical University'),(17,'Sunyani Technical University'),(18,'Ghana Armed Forces Command and Staff College'),(19,'Ghana Institute of Journalism'),(20,'Ghana Institute of Languages'),(21,'Ghana Institute of Management and Public Administr'),(22,'Ghana Institute of Surveying and Mapping'),(23,'Institution of Local Government Studies'),(24,'University of Professional Studies, Accra'),(25,'Kofi Annan International Peacekeeping Training Cen'),(26,'National Film and Television Institute'),(27,'Regional Maritime University'),(28,'Valley View University'),(29,'Akrofi-Christaller Institute of Theology, Mission '),(30,'Accra Institute of Technology'),(31,'African University College of Communications'),(32,'Anglican University College of Technology'),(33,'Catholic University College of Ghana'),(34,'Christian Service University College'),(35,'Family Health Medical School'),(36,'Good News Theological Seminary'),(37,'Islamic University College'),(38,'Knutsford University College'),(39,'Lancaster University'),(40,'Methodist University College Ghana'),(41,'Pentecost University College'),(42,'Presbyterian University College'),(43,'Wisconsin International University College'),(44,'Central University College'),(45,'Catholic Institute of Business and Technology'),(46,'National Film and Television Institute'),(47,'Institute Of Accountancy Training'),(48,'Narh-Bita School Of Nursing'),(49,'Ghana Institute of Languages'),(50,'St. Victor’s Seminary'),(51,'St. Peters Seminary'),(52,'St. Paul Seminary'),(53,'Ghana Armed Forces Command and Staff College - Mas'),(54,'Regional Maritime University'),(55,'Blue Crest College'),(56,'Accra Institute of Technology'),(57,'Osei Tutu II Institute for Advanced ICT Studies'),(58,'KAAF University College'),(59,'All Nations University College'),(60,'Radford University College'),(61,'Garden City University College'),(62,'Regent University College of Science and Technolog'),(63,'Technical University College'),(64,'Spiritan University College'),(65,'Data Link University College'),(66,'Mountcrest University College'),(67,'University College of Agriculture and Environmenta'),(68,'Central University College'),(69,'Ashesi University'),(70,'Entrepreneurship Training Institute'),(71,'Deltas University College'),(72,'Evangelical Presbyterian University College'),(73,'Ghana Baptist University College['),(74,'Kings University College'),(75,'Maranatha University College'),(76,'Meridian (Insaaniyya) University College'),(77,'Pan African Christian University College'),(78,'Wisconsin International University College'),(79,'Advanced Business University College'),(80,'BlueCrest University College'),(81,'Jayee University College'),(82,'University College of Management Studies'),(83,'Webster University Ghana Campus'),(84,'Sikkim Manipal University Ghana LC'),(85,'Sikkim Manipal University, Kumasi'),(86,'Ghana Christian University College'),(87,'Zenith University College'),(88,'China Europe International Business School'),(89,'Ghana Christian University College'),(90,'The Bible University College of Ghana'),(91,'Catholic Institute of Business and Technology'),(92,'Ghana Telecom University College'),(93,'North American Center for Professional Studies'),(94,'Premier Institute of Law Enforcement Management an');
/*!40000 ALTER TABLE `tertiary_schools` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('Aa','M','vvu','aa@yahoo.com',1234567898,'035a564be61ef2b8a9c67ba8376d4be5');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_feedback`
--

DROP TABLE IF EXISTS `user_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_feedback`
--

LOCK TABLES `user_feedback` WRITE;
/*!40000 ALTER TABLE `user_feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_feedback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-16 19:44:29
