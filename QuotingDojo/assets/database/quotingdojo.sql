CREATE DATABASE  IF NOT EXISTS `quoting_dojo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `quoting_dojo`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: quoting_dojo
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `dojo_quotes`
--

DROP TABLE IF EXISTS `dojo_quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dojo_quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `quote` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dojo_quotes`
--

LOCK TABLES `dojo_quotes` WRITE;
/*!40000 ALTER TABLE `dojo_quotes` DISABLE KEYS */;
INSERT INTO `dojo_quotes` VALUES (1,'Elder D. Todd Christofferson, \"The Resurrection of Jesus Christ\"','Given the reality of the Resurrection of Christ, doubts about the omnipotence, omniscience, and benevolence of God the Fatherâ€”who gave His Only Begotten Son for the redemption of the worldâ€”are groundless. ... Given the reality of the Resurrection of Christ, death is not our end, and though â€œskin worms destroy [our bodies], yet in [our] flesh shall [we] see God.','2018-09-20 12:54:29','2018-09-20 12:54:29'),(2,'Elder Dieter F. Uchtdorf, \"Bearers of Heavenly Light\"','But just because spiritual trials are real does not mean that they are incurable. We can heal spiritually. Even the deepest spiritual woundsâ€”yes, even those that may appear to be incurableâ€”can be healed. The Saviorâ€™s healing touch can transform lives in our day just as it did in His.','2018-09-20 12:54:48','2018-09-20 12:54:48'),(3,'President Dallin H. Oaks, \"Good, Better, Best\"','Some uses of individual and family time are better, and others are best. We have to forego some good things in order to choose others that are better or best because they develop faith in the Lord Jesus Christ and strengthen our families.','2018-09-20 12:57:38','2018-09-20 12:57:38'),(4,'Spencer W. Kimball, \"Strenghtening Our Families\"','The home should be a place where reliance on the Lord is a matter of common experience, not reserved for special occasions. One way of establishing that is by regular, earnest prayer. It is not enough just to pray. It is essential that we really speak to the Lord, having faith that he will reveal to us as parents what we need to know and do for the welfare of our families.','2018-09-20 12:57:55','2018-09-20 12:57:55'),(5,'Jerryco','Yow','2018-09-20 18:45:27','2018-09-20 18:45:27');
/*!40000 ALTER TABLE `dojo_quotes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-21  9:25:40
