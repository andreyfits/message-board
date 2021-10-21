-- MySQL dump 10.13  Distrib 8.0.26, for Linux (x86_64)
--
-- Host: localhost    Database: mess_box
-- ------------------------------------------------------
-- Server version	8.0.26-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mes_categories`
--

DROP TABLE IF EXISTS `mes_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mes_categories` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes_categories`
--

LOCK TABLES `mes_categories` WRITE;
/*!40000 ALTER TABLE `mes_categories` DISABLE KEYS */;
INSERT INTO `mes_categories` VALUES (1,'Транспорт',0),(2,'Интернет',0),(3,'Дом',0),(4,'Сад,огород',0),(5,'Автомобили',1),(6,'Мото',1),(7,'Компьютеры',2),(8,'Игры',2),(9,'Мебель',3),(10,'Сантехника',3),(11,'Инструмент',4),(12,'Строй матегриалы',4);
/*!40000 ALTER TABLE `mes_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mes_post`
--

DROP TABLE IF EXISTS `mes_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mes_post` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int NOT NULL,
  `id_user` int NOT NULL,
  `id_categories` tinyint NOT NULL,
  `id_razd` tinyint NOT NULL,
  `town` varchar(255) NOT NULL,
  `img` varchar(50) NOT NULL,
  `confirm` enum('0','1') NOT NULL DEFAULT '0',
  `time_over` int NOT NULL,
  `is_actual` enum('0','1') NOT NULL DEFAULT '1',
  `price` tinyint NOT NULL,
  `img_s` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes_post`
--

LOCK TABLES `mes_post` WRITE;
/*!40000 ALTER TABLE `mes_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `mes_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mes_priv`
--

DROP TABLE IF EXISTS `mes_priv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mes_priv` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes_priv`
--

LOCK TABLES `mes_priv` WRITE;
/*!40000 ALTER TABLE `mes_priv` DISABLE KEYS */;
INSERT INTO `mes_priv` VALUES (1,'ADD_MESS'),(2,'MODER_MESS'),(3,'DEL_MESS'),(4,'RETIME_MESS'),(5,'EDIT_MESS'),(6,'ADD_CAT'),(7,'VIEW_ADMIN');
/*!40000 ALTER TABLE `mes_priv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mes_razd`
--

DROP TABLE IF EXISTS `mes_razd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mes_razd` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes_razd`
--

LOCK TABLES `mes_razd` WRITE;
/*!40000 ALTER TABLE `mes_razd` DISABLE KEYS */;
INSERT INTO `mes_razd` VALUES (1,'Предложение'),(2,'Спрос');
/*!40000 ALTER TABLE `mes_razd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mes_role`
--

DROP TABLE IF EXISTS `mes_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mes_role` (
  `id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes_role`
--

LOCK TABLES `mes_role` WRITE;
/*!40000 ALTER TABLE `mes_role` DISABLE KEYS */;
INSERT INTO `mes_role` VALUES (1,'admin'),(2,'moderator'),(3,'user'),(4,'ban');
/*!40000 ALTER TABLE `mes_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mes_role_priv`
--

DROP TABLE IF EXISTS `mes_role_priv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mes_role_priv` (
  `id_role` tinyint NOT NULL,
  `id_priv` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes_role_priv`
--

LOCK TABLES `mes_role_priv` WRITE;
/*!40000 ALTER TABLE `mes_role_priv` DISABLE KEYS */;
INSERT INTO `mes_role_priv` VALUES (3,1);
/*!40000 ALTER TABLE `mes_role_priv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mes_users`
--

DROP TABLE IF EXISTS `mes_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mes_users` (
  `user_id` int unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hash` varchar(60) NOT NULL,
  `confirm` enum('0','1') NOT NULL DEFAULT '0',
  `sess` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_role` tinyint NOT NULL DEFAULT '3',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes_users`
--

LOCK TABLES `mes_users` WRITE;
/*!40000 ALTER TABLE `mes_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `mes_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-21 12:14:46
