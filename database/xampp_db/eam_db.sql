-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: eam_db
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `Business`
--

DROP TABLE IF EXISTS `Business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Business` (
  `Business_id` int NOT NULL,
  PRIMARY KEY (`Business_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Business`
--

LOCK TABLES `Business` WRITE;
/*!40000 ALTER TABLE `Business` DISABLE KEYS */;
/*!40000 ALTER TABLE `Business` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employees`
--

DROP TABLE IF EXISTS `Employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Employees` (
  `User_id` int NOT NULL,
  `Business_Business_id` int NOT NULL,
  PRIMARY KEY (`Business_Business_id`),
  KEY `fk_Employees_Users1_idx` (`User_id`),
  CONSTRAINT `fk_Employees_Business1` FOREIGN KEY (`Business_Business_id`) REFERENCES `Business` (`Business_id`),
  CONSTRAINT `fk_Employees_Users1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employees`
--

LOCK TABLES `Employees` WRITE;
/*!40000 ALTER TABLE `Employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `Employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employers`
--

DROP TABLE IF EXISTS `Employers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Employers` (
  `User_id` int NOT NULL,
  PRIMARY KEY (`User_id`),
  KEY `fk_Employers_Users1_idx` (`User_id`),
  CONSTRAINT `fk_Employers_Users1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employers`
--

LOCK TABLES `Employers` WRITE;
/*!40000 ALTER TABLE `Employers` DISABLE KEYS */;
/*!40000 ALTER TABLE `Employers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employers_has_Business`
--

DROP TABLE IF EXISTS `Employers_has_Business`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Employers_has_Business` (
  `Employers_User_id` int NOT NULL,
  `Business_Business_id` int NOT NULL,
  PRIMARY KEY (`Employers_User_id`,`Business_Business_id`),
  KEY `fk_Employers_has_Business_Business1_idx` (`Business_Business_id`),
  KEY `fk_Employers_has_Business_Employers1_idx` (`Employers_User_id`),
  CONSTRAINT `fk_Employers_has_Business_Business1` FOREIGN KEY (`Business_Business_id`) REFERENCES `Business` (`Business_id`),
  CONSTRAINT `fk_Employers_has_Business_Employers1` FOREIGN KEY (`Employers_User_id`) REFERENCES `Employers` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employers_has_Business`
--

LOCK TABLES `Employers_has_Business` WRITE;
/*!40000 ALTER TABLE `Employers_has_Business` DISABLE KEYS */;
/*!40000 ALTER TABLE `Employers_has_Business` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employers_has_Employees`
--

DROP TABLE IF EXISTS `Employers_has_Employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Employers_has_Employees` (
  `Employers_User_id` int NOT NULL,
  `Employees_Business_Business_id` int NOT NULL,
  PRIMARY KEY (`Employers_User_id`,`Employees_Business_Business_id`),
  KEY `fk_Employers_has_Employees_Employees1_idx` (`Employees_Business_Business_id`),
  KEY `fk_Employers_has_Employees_Employers1_idx` (`Employers_User_id`),
  CONSTRAINT `fk_Employers_has_Employees_Employees1` FOREIGN KEY (`Employees_Business_Business_id`) REFERENCES `Employees` (`Business_Business_id`),
  CONSTRAINT `fk_Employers_has_Employees_Employers1` FOREIGN KEY (`Employers_User_id`) REFERENCES `Employers` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employers_has_Employees`
--

LOCK TABLES `Employers_has_Employees` WRITE;
/*!40000 ALTER TABLE `Employers_has_Employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `Employers_has_Employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Unempolyed`
--

DROP TABLE IF EXISTS `Unempolyed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Unempolyed` (
  `User_id` int NOT NULL,
  KEY `fk_Unempolyed_Users1_idx` (`User_id`),
  CONSTRAINT `fk_Unempolyed_Users1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Unempolyed`
--

LOCK TABLES `Unempolyed` WRITE;
/*!40000 ALTER TABLE `Unempolyed` DISABLE KEYS */;
/*!40000 ALTER TABLE `Unempolyed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Users` (
  `User_id` int NOT NULL,
  `User_nm` varchar(45) DEFAULT NULL,
  `User_psswrd_MD5` varchar(45) DEFAULT NULL,
  `User_email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'mike','12patates','mple'),(2,'rania','mango','kokkino'),(3,'krikor','pop','roz');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'eam_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-12 18:54:50
