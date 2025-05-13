-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: localhost    Database: reg_database
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `nptel_data`
--

DROP TABLE IF EXISTS `nptel_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nptel_data` (
  `email` varchar(50) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  `ph_number` decimal(10,0) DEFAULT NULL,
  `mage` longblob DEFAULT NULL,
  `pdf` varchar(180) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nptel_data`
--

LOCK TABLES `nptel_data` WRITE;
/*!40000 ALTER TABLE `nptel_data` DISABLE KEYS */;
INSERT INTO `nptel_data` VALUES ('238w1a0511@vrsec.ac.in','Thanu Sree','IIOT',9182464546,_binary '680f113908707_waterfall.jpeg','680f11390870e_Resume_Chekuri_Amulya.pdf','680f11390870d_Camo Recording 2024-02-16 20-50-11.mp4'),('abc@123.com','sahrudha','r software',9123344567,_binary 'C:UsersAmulya ChekuriPicturesmuggu1.jpg',NULL,NULL),('amulyachekuri@123','chekuri Amulya','Social Networks',1783920789,'',NULL,NULL),('amuuoyzg@gmail.com','nageshwari','dbms',9999999999,_binary '680f4a3b9afd6_wallpaper.webp','680f4a3b9afdb_','680f4a3b9afda_'),('Ananya89@gmail.com','Ananya','Python',5674567876,'',NULL,NULL),('ankith@gmail.com','ankith','bootstrap',8905663446,'',NULL,NULL),('anurag@gmail.com','anurag','r software',9123456456,_binary '680ec34c952a5_Screenshot 2025-04-11 213629.png','680ec34c952ab_Social Networks.pdf','680ec34c952aa_WIN_20241225_19_10_42_Pro.mp4'),('asd@gmail.com','wer','dbms',1234567890,_binary '680f80c91adb8_Helen_KellerA.jpg','680f80c91adbf_flutter.pdf','680f80c91adbe_bits.mp4'),('Chekuri123@gmail.com','Ramesh','uipath',5674567676,'',NULL,NULL),('chekurirajesh@gmail.com','rajesh','IIOT',9648439780,_binary '68208f095a590_wallpaper.webp','68208f095a5a0_Amulya(2) Resume.pdf','68208f095a59f_'),('ertygfvbnm@gmail.com','ewtuygjhkl','drtyhj',2345673456,_binary '680f4b1962b89_wallpaper.webp','680f4b1962b8e_','680f4b1962b8d_'),('fhaskjfjs@gmail.com','shdfkjsd','hsdkjf',6788987567,_binary '680f53702dad6_Amulya.jpg','680f53702dae2_Resume_Chekuri_Amulya.pdf','680f53702dae1_Camo Recording 2024-02-16 20-50-11.mp4'),('Nagesh789@gmail.com','Nagesh','ml',8905667346,'',NULL,NULL),('nageswaridasari6@gmail.com','Dasari Nageswari','Privacy and security',1234567891,'',NULL,NULL),('Nageswrao789@gmail.com','Nageswarao','pythom',8905667342,'',NULL,NULL),('Netaji56@gmail.com','Netaji subhash chandra bose','Mysql',9213456789,'',NULL,NULL),('panduranga@gmail.com','pandurangarao','Aircrafts',9023120000,_binary '6821e9a5db618_matam.jpg','6821e9a5db61e_Foundations of R Software.pdf','6821e9a5db61d_Camo Recording 2024-02-16 20-50-11.mp4'),('Pankaj@gmail.com','Pankaj','r software',9123456456,_binary '680ec4c930495_Screenshot 2025-04-11 213629.png','680ec4c93049a_Social Networks.pdf','680ec4c930499_WIN_20241225_19_10_42_Pro.mp4'),('Poorvi@gmail.com','Poorvi','r software',9123456456,_binary '680ec45ade7f6_Screenshot 2025-04-11 213629.png','680ec45ade7fc_Social Networks.pdf','680ec45ade7fb_WIN_20241225_19_10_42_Pro.mp4'),('RadhaKrishn123@gmail.com','RadhaKrishn','r software',9123456456,_binary '680ec562e1e5c_Screenshot 2025-04-11 213629.png','680ec562e1e60_Social Networks.pdf','680ec562e1e5f_WIN_20241225_19_10_42_Pro.mp4'),('Rajesh@123.com','Chekuri Rajesh','Python',1234567890,'',NULL,NULL),('Rajesh@gmail.com','Rajesh','r software',9123456456,_binary '680ec3d07da11_Screenshot 2025-04-11 213629.png','680ec3d07da17_Social Networks.pdf','680ec3d07da16_WIN_20241225_19_10_42_Pro.mp4'),('Ramarao67@gmail.com','Ramarao','php',8905678765,'',NULL,NULL),('saketh67@gmail.com','saketh','php',9234567810,_binary '680ec185ab205_f8.png','680ec185ab214_Social Networks.pdf','680ec185ab213_WIN_20241225_19_10_42_Pro.mp4'),('Srinivasarao123@gmail.com','srinivasarao','machine learning',9023478281,'',NULL,NULL),('thanusree@gmail.com','Thanu Sree Chinnam','Industry Internet Of Things',8764569875,_binary '680f5ae9dbf12_thanu.jpg','680f5ae9dbf17_flutter.pdf','680f5ae9dbf16_bits.mp4'),('thanusreechinnam@gmail.com','Thanu','IOT',9182464549,_binary '680f088bb51d3_gfggroupphoto.jpg','680f088bb51d8_Amulya(2) Resume.pdf','680f088bb51d7_Camo Recording 2024-02-16 20-50-11.mp4'),('Vanajakshi89@gmail.com','Vanajakshi','Node js',8902345678,'',NULL,NULL);
/*!40000 ALTER TABLE `nptel_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `signup` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signup`
--

LOCK TABLES `signup` WRITE;
/*!40000 ALTER TABLE `signup` DISABLE KEYS */;
INSERT INTO `signup` VALUES ('238w1a0510@vrsec.ac.','$2y$10$mmhCQMDEAOcPacL8hnopvuy1nodmrdOwCALeuS'),('238w1a0510@vrsec.ac.in','$2y$10$XHYcvKsWgSnj3muNqYG8euFSUY6TuV.oN6sHt1'),('chekuri25@gmail.com','$2y$10$EH7a.JDjs19gff/ufL2yW.9AjAvqWrDA6pxEblu4Lhueh/XeSRak6'),('chekuriamulya25@gmai','$2y$10$WcjCIaTfysaPjfakCsJ0UOumNX/sNX5CAK/ejO'),('chekuriamulya25@gmail.com','$2y$10$OQXbrYvRyrHWI2pn4crBi.gSyzA4wJLK.KwdFx'),('mandal25@gmail.com','$2y$10$Z.wDcMolQVau0T.yaj7T4.KHm.q8qIFB.HGeYuhBYVywYSFxXynt2'),('mango@gmail.com','$2y$10$rpE5q/o9mvj2oVtY9gtlBOU.9d/iiTAl6U97wFjzdoC.63RSq.lGq');
/*!40000 ALTER TABLE `signup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `url_generator`
--

DROP TABLE IF EXISTS `url_generator`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `url_generator` (
  `image` longblob NOT NULL,
  `url` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `url_generator`
--

LOCK TABLES `url_generator` WRITE;
/*!40000 ALTER TABLE `url_generator` DISABLE KEYS */;
/*!40000 ALTER TABLE `url_generator` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-13 18:28:48
