-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: plan_my_night
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS comment;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment` (
  idcomment int NOT NULL AUTO_INCREMENT,
  idplace int NOT NULL,
  iduser int NOT NULL,
  `comment` varchar(500) NOT NULL,
  PRIMARY KEY (idcomment),
  UNIQUE KEY idcomment_UNIQUE (idcomment),
  KEY id_user_comm_idx (iduser),
  KEY id_place_comm_idx (idplace),
  CONSTRAINT id_place_comm FOREIGN KEY (idplace) REFERENCES place (idplace) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT id_user_comm FOREIGN KEY (iduser) REFERENCES `user` (iduser) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

/*!40000 ALTER TABLE comment DISABLE KEYS */;
/*!40000 ALTER TABLE comment ENABLE KEYS */;

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS mark;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE mark (
  iduser int NOT NULL,
  idplace int NOT NULL,
  mark int NOT NULL,
  PRIMARY KEY (iduser,idplace),
  KEY id_place_mark_idx (idplace),
  CONSTRAINT id_place_mark FOREIGN KEY (idplace) REFERENCES place (idplace) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT id_user_mark FOREIGN KEY (iduser) REFERENCES `user` (iduser) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark`
--

/*!40000 ALTER TABLE mark DISABLE KEYS */;
/*!40000 ALTER TABLE mark ENABLE KEYS */;

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS owner;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `owner` (
  iduser int NOT NULL,
  jmbg varchar(45) NOT NULL,
  license varchar(90) NOT NULL,
  address varchar(90) NOT NULL,
  PRIMARY KEY (iduser),
  UNIQUE KEY jmbg_UNIQUE (jmbg),
  CONSTRAINT id_user_owner FOREIGN KEY (iduser) REFERENCES `user` (iduser) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `owner`
--

/*!40000 ALTER TABLE owner DISABLE KEYS */;
/*!40000 ALTER TABLE owner ENABLE KEYS */;

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS place;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE place (
  idplace int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  address varchar(90) NOT NULL,
  pricing varchar(90) NOT NULL,
  iduser int NOT NULL,
  PRIMARY KEY (idplace),
  UNIQUE KEY idplace_UNIQUE (idplace),
  KEY id_user_idx (iduser),
  CONSTRAINT id_user_place FOREIGN KEY (iduser) REFERENCES `owner` (iduser) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `place`
--

/*!40000 ALTER TABLE place DISABLE KEYS */;
/*!40000 ALTER TABLE place ENABLE KEYS */;

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS plan;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE plan (
  idplan int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  iduser int NOT NULL,
  PRIMARY KEY (idplan),
  UNIQUE KEY idplan_UNIQUE (idplan),
  KEY id_user_plan_idx (iduser),
  CONSTRAINT id_user_plan FOREIGN KEY (iduser) REFERENCES `user` (iduser) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan`
--

/*!40000 ALTER TABLE plan DISABLE KEYS */;
/*!40000 ALTER TABLE plan ENABLE KEYS */;

--
-- Table structure for table `plan_place`
--

DROP TABLE IF EXISTS plan_place;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE plan_place (
  idplan int NOT NULL,
  idplace int NOT NULL,
  PRIMARY KEY (idplan,idplace),
  KEY id_place_conn_idx (idplace),
  CONSTRAINT id_place_conn FOREIGN KEY (idplace) REFERENCES place (idplace) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT id_plan_conn FOREIGN KEY (idplan) REFERENCES plan (idplan) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_place`
--

/*!40000 ALTER TABLE plan_place DISABLE KEYS */;
/*!40000 ALTER TABLE plan_place ENABLE KEYS */;

--
-- Table structure for table `preferences`
--

DROP TABLE IF EXISTS preferences;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE preferences (
  iduser int NOT NULL,
  musictype varchar(150) DEFAULT NULL,
  money int DEFAULT NULL,
  party_start time NOT NULL,
  party_end time DEFAULT NULL,
  changelocation int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (iduser),
  CONSTRAINT id_user_pref FOREIGN KEY (iduser) REFERENCES `user` (iduser) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preferences`
--

/*!40000 ALTER TABLE preferences DISABLE KEYS */;
/*!40000 ALTER TABLE preferences ENABLE KEYS */;

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS program;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE program (
  idplace int NOT NULL,
  monday varchar(45) DEFAULT NULL,
  tuesday varchar(45) DEFAULT NULL,
  wednesday varchar(45) DEFAULT NULL,
  thursday varchar(45) DEFAULT NULL,
  friday varchar(45) DEFAULT NULL,
  saturday varchar(45) DEFAULT NULL,
  sunday varchar(45) DEFAULT NULL,
  week_date date NOT NULL,
  work_time_start time NOT NULL,
  work_time_end time NOT NULL,
  PRIMARY KEY (idplace),
  CONSTRAINT id_place_prog FOREIGN KEY (idplace) REFERENCES place (idplace) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `program`
--

/*!40000 ALTER TABLE program DISABLE KEYS */;
/*!40000 ALTER TABLE program ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS user;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  iduser int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  surname varchar(45) NOT NULL,
  username varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  `role` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (iduser),
  UNIQUE KEY username_UNIQUE (username),
  UNIQUE KEY email_UNIQUE (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE user DISABLE KEYS */;
/*!40000 ALTER TABLE user ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
