CREATE DATABASE /*!32312 IF NOT EXISTS*/ `level1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `level1`;

--
-- Table structure for table `secrets`
--

DROP TABLE IF EXISTS `secrets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secrets` (
  `session_id` varchar(50) DEFAULT NULL,
  `secret` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secrets`
--

LOCK TABLES `secrets` WRITE;
/*!40000 ALTER TABLE `secrets` DISABLE KEYS */;
INSERT INTO `secrets` VALUES ('Corb3nik_the_admin','FLAG-8a94da5963c1634274dcaad6f4c09349');
/*!40000 ALTER TABLE `secrets` ENABLE KEYS */;
UNLOCK TABLES;
