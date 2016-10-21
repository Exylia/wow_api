-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: wow_api
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
-- Table structure for table `character`
--

DROP TABLE IF EXISTS `character`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character` (
  `character_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `realm` varchar(255) NOT NULL,
  `faction` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `race` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `ilvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`character_id`),
  UNIQUE KEY `charactere_id` (`character_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character`
--

LOCK TABLES `character` WRITE;
/*!40000 ALTER TABLE `character` DISABLE KEYS */;
INSERT INTO `character` VALUES (12,'Ghiblik','EU','Uldaman',0,7,3,0,110,855),(13,'Rënya','EU','Uldaman',0,6,1,1,110,857),(14,'Djomalix','EU','Uldaman',0,3,25,1,110,NULL),(15,'Mylune','EU','Uldaman',0,10,4,1,110,NULL),(16,'Sithek','EU','Uldaman',0,8,7,0,100,NULL),(17,'Darkharley','EU','Uldaman',0,1,1,0,110,843),(18,'Understela','EU','Uldaman',0,9,1,1,100,NULL);
/*!40000 ALTER TABLE `character` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `character_stats`
--

DROP TABLE IF EXISTS `character_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `character_stats` (
  `character_id` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `powerType` varchar(255) NOT NULL,
  `power` int(11) NOT NULL,
  `str` int(11) NOT NULL,
  `agi` int(11) NOT NULL,
  `int` int(11) NOT NULL,
  `sta` int(11) NOT NULL,
  `speedRating` float NOT NULL,
  `speedRatingBonus` float NOT NULL,
  `crit` float NOT NULL,
  `critRating` int(11) NOT NULL,
  `haste` float NOT NULL,
  `hasteRating` int(11) NOT NULL,
  `hasteRatingPercent` float NOT NULL,
  `mastery` float NOT NULL,
  `masteryRating` int(11) NOT NULL,
  `leech` float NOT NULL,
  `leechRating` float NOT NULL,
  `leechRatingBonus` float NOT NULL,
  `versatility` int(11) NOT NULL,
  `versatilityDamageDoneBonus` float NOT NULL,
  `versatilityHealingDoneBonus` float NOT NULL,
  `versatilityDamageTakenBonus` float NOT NULL,
  `avoidanceRating` float NOT NULL,
  `avoidanceRatingBonus` float NOT NULL,
  `spellPen` int(11) NOT NULL,
  `spellCrit` float NOT NULL,
  `spellCritRating` int(11) NOT NULL,
  `mana5` float NOT NULL,
  `mana5Combat` float NOT NULL,
  `armor` int(11) NOT NULL,
  `dodge` float NOT NULL,
  `dodgeRating` int(11) NOT NULL,
  `parry` float NOT NULL,
  `parryRating` int(11) NOT NULL,
  `block` float NOT NULL,
  `blockRating` int(11) NOT NULL,
  `mainHandDmgMin` float NOT NULL,
  `mainHandDmgMax` float NOT NULL,
  `mainHandSpeed` float NOT NULL,
  `mainHandDps` float NOT NULL,
  `offHandDmgMin` float NOT NULL,
  `offHandDmgMax` float NOT NULL,
  `offHandSpeed` float NOT NULL,
  `offHandDps` float NOT NULL,
  `rangedDmgMin` float NOT NULL,
  `rangedDmgMax` float NOT NULL,
  `rangedSpeed` float NOT NULL,
  `rangedDps` float NOT NULL,
  UNIQUE KEY `character_id` (`character_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `character_stats`
--

LOCK TABLES `character_stats` WRITE;
/*!40000 ALTER TABLE `character_stats` DISABLE KEYS */;
INSERT INTO `character_stats` VALUES (12,2194338,'rage',100,24362,6252,5000,31802,19.68,0,25.1914,7067,21.4554,6973,21.4554,30.88,4920,0,0,0,704,1.795,1.795,0.8975,0,0,0,25.1914,7067,0,0,4012,3,0,11.5736,0,3,0,33290,37183,2.964,11888.1,16645,18592,2.964,5944.06,-1,-1,-1,-1),(13,2194338,'rage',100,24362,6252,5000,31802,19.68,0,25.1914,7067,21.4554,6973,21.4554,30.88,4920,0,0,0,704,1.795,1.795,0.8975,0,0,0,25.1914,7067,0,0,4012,3,0,11.5736,0,3,0,33290,37183,2.964,11888.1,16645,18592,2.964,5944.06,-1,-1,-1,-1),(14,2194338,'rage',100,24362,6252,5000,31802,19.68,0,25.1914,7067,21.4554,6973,21.4554,30.88,4920,0,0,0,704,1.795,1.795,0.8975,0,0,0,25.1914,7067,0,0,4012,3,0,11.5736,0,3,0,33290,37183,2.964,11888.1,16645,18592,2.964,5944.06,-1,-1,-1,-1),(15,2194338,'rage',100,24362,6252,5000,31802,19.68,0,25.1914,7067,21.4554,6973,21.4554,30.88,4920,0,0,0,704,1.795,1.795,0.8975,0,0,0,25.1914,7067,0,0,4012,3,0,11.5736,0,3,0,33290,37183,2.964,11888.1,16645,18592,2.964,5944.06,-1,-1,-1,-1),(16,2194338,'rage',100,24362,6252,5000,31802,19.68,0,25.1914,7067,21.4554,6973,21.4554,30.88,4920,0,0,0,704,1.795,1.795,0.8975,0,0,0,25.1914,7067,0,0,4012,3,0,11.5736,0,3,0,33290,37183,2.964,11888.1,16645,18592,2.964,5944.06,-1,-1,-1,-1),(17,2194338,'rage',100,24362,6252,5000,31802,19.68,0,25.1914,7067,21.4554,6973,21.4554,30.88,4920,0,0,0,704,1.795,1.795,0.8975,0,0,0,25.1914,7067,0,0,4012,3,0,11.5736,0,3,0,33290,37183,2.964,11888.1,16645,18592,2.964,5944.06,-1,-1,-1,-1),(18,2194338,'rage',100,24362,6252,5000,31802,19.68,0,25.1914,7067,21.4554,6973,21.4554,30.88,4920,0,0,0,704,1.795,1.795,0.8975,0,0,0,25.1914,7067,0,0,4012,3,0,11.5736,0,3,0,33290,37183,2.964,11888.1,16645,18592,2.964,5944.06,-1,-1,-1,-1);
/*!40000 ALTER TABLE `character_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class_id` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'Guerrier'),(2,'Paladin'),(3,'Chasseur'),(4,'Voleur'),(5,'Prêtre'),(6,'Chevalier de la mort'),(7,'Chaman'),(8,'Mage'),(9,'Démoniste'),(10,'Moine'),(11,'Druide'),(12,'Chasseur de démons');
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faction`
--

DROP TABLE IF EXISTS `faction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faction` (
  `faction_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`faction_id`),
  UNIQUE KEY `faction_id` (`faction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faction`
--

LOCK TABLES `faction` WRITE;
/*!40000 ALTER TABLE `faction` DISABLE KEYS */;
INSERT INTO `faction` VALUES (0,'Alliance'),(1,'Horde'),(2,'Neutre');
/*!40000 ALTER TABLE `faction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `race` (
  `race_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `faction_id` int(11) NOT NULL,
  PRIMARY KEY (`race_id`),
  UNIQUE KEY `race_id` (`race_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `race`
--

LOCK TABLES `race` WRITE;
/*!40000 ALTER TABLE `race` DISABLE KEYS */;
INSERT INTO `race` VALUES (1,'Humain',0),(2,'Orc',1),(3,'Nain',0),(4,'Elfe de la nuit',0),(5,'Mort-vivant',1),(6,'Tauren',1),(7,'Gnome',0),(8,'Troll',1),(9,'Gobelin',1),(10,'Elfe de sang',1),(11,'Draeneï',0),(22,'Worgen',0),(24,'Pandaren',1),(25,'Pandaren',0),(26,'Pandaren',1);
/*!40000 ALTER TABLE `race` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `realm`
--

DROP TABLE IF EXISTS `realm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `realm` (
  `realm_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `locale` varchar(255) NOT NULL,
  PRIMARY KEY (`realm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `realm`
--

LOCK TABLES `realm` WRITE;
/*!40000 ALTER TABLE `realm` DISABLE KEYS */;
INSERT INTO `realm` VALUES (1,'Aegwynn','de_DE'),(2,'Aerie Peak','en_GB'),(3,'Agamaggan','en_GB'),(4,'Aggra (Português)','pt_BR'),(5,'Aggramar','en_GB'),(6,'Ahn\'Qiraj','en_GB'),(7,'Al\'Akir','en_GB'),(8,'Alexstrasza','de_DE'),(9,'Alleria','de_DE'),(10,'Alonsus','en_GB'),(11,'Aman\'Thul','de_DE'),(12,'Ambossar','de_DE'),(13,'Anachronos','en_GB'),(14,'Anetheron','de_DE'),(15,'Antonidas','de_DE'),(16,'Anub\'arak','de_DE'),(17,'Arak-arahm','fr_FR'),(18,'Arathi','fr_FR'),(19,'Arathor','en_GB'),(20,'Archimonde','fr_FR'),(21,'Area 52','de_DE'),(22,'Argent Dawn','en_GB'),(23,'Arthas','de_DE'),(24,'Arygos','de_DE'),(25,'Ashenvale','ru_RU'),(26,'Aszune','en_GB'),(27,'Auchindoun','en_GB'),(28,'Azjol-Nerub','en_GB'),(29,'Azshara','de_DE'),(30,'Azuregos','ru_RU'),(31,'Azuremyst','en_GB'),(32,'Baelgun','de_DE'),(33,'Balnazzar','en_GB'),(34,'Blackhand','de_DE'),(35,'Blackmoore','de_DE'),(36,'Blackrock','de_DE'),(37,'Blackscar','ru_RU'),(38,'Blade\'s Edge','en_GB'),(39,'Bladefist','en_GB'),(40,'Bloodfeather','en_GB'),(41,'Bloodhoof','en_GB'),(42,'Bloodscalp','en_GB'),(43,'Blutkessel','de_DE'),(44,'Booty Bay','ru_RU'),(45,'Borean Tundra','ru_RU'),(46,'Boulderfist','en_GB'),(47,'Bronze Dragonflight','en_GB'),(48,'Bronzebeard','en_GB'),(49,'Burning Blade','en_GB'),(50,'Burning Legion','en_GB'),(51,'Burning Steppes','en_GB'),(52,'C\'Thun','es_ES'),(53,'Chamber of Aspects','en_GB'),(54,'Chants éternels','fr_FR'),(55,'Cho\'gall','fr_FR'),(56,'Chromaggus','en_GB'),(57,'Colinas Pardas','es_ES'),(58,'Confrérie du Thorium','fr_FR'),(59,'Conseil des Ombres','fr_FR'),(60,'Crushridge','en_GB'),(61,'Culte de la Rive noire','fr_FR'),(62,'Daggerspine','en_GB'),(63,'Dalaran','fr_FR'),(64,'Dalvengyr','de_DE'),(65,'Darkmoon Faire','en_GB'),(66,'Darksorrow','en_GB'),(67,'Darkspear','en_GB'),(68,'Das Konsortium','de_DE'),(69,'Das Syndikat','de_DE'),(70,'Deathguard','ru_RU'),(71,'Deathweaver','ru_RU'),(72,'Deathwing','en_GB'),(73,'Deepholm','ru_RU'),(74,'Defias Brotherhood','en_GB'),(75,'Dentarg','en_GB'),(76,'Der Mithrilorden','de_DE'),(77,'Der Rat von Dalaran','de_DE'),(78,'Der abyssische Rat','de_DE'),(79,'Destromath','de_DE'),(80,'Dethecus','de_DE'),(81,'Die Aldor','de_DE'),(82,'Die Arguswacht','de_DE'),(83,'Die Nachtwache','de_DE'),(84,'Die Silberne Hand','de_DE'),(85,'Die Todeskrallen','de_DE'),(86,'Die ewige Wacht','de_DE'),(87,'Doomhammer','en_GB'),(88,'Draenor','en_GB'),(89,'Dragonblight','en_GB'),(90,'Dragonmaw','en_GB'),(91,'Drak\'thul','en_GB'),(92,'Drek\'Thar','fr_FR'),(93,'Dun Modr','es_ES'),(94,'Dun Morogh','de_DE'),(95,'Dunemaul','en_GB'),(96,'Durotan','de_DE'),(97,'Earthen Ring','en_GB'),(98,'Echsenkessel','de_DE'),(99,'Eitrigg','fr_FR'),(100,'Eldre\'Thalas','fr_FR'),(101,'Elune','fr_FR'),(102,'Emerald Dream','en_GB'),(103,'Emeriss','en_GB'),(104,'Eonar','en_GB'),(105,'Eredar','de_DE'),(106,'Eversong','ru_RU'),(107,'Executus','en_GB'),(108,'Exodar','es_ES'),(109,'Festung der Stürme','de_DE'),(110,'Fordragon','ru_RU'),(111,'Forscherliga','de_DE'),(112,'Frostmane','en_GB'),(113,'Frostmourne','de_DE'),(114,'Frostwhisper','en_GB'),(115,'Frostwolf','de_DE'),(116,'Galakrond','ru_RU'),(117,'Garona','fr_FR'),(118,'Garrosh','de_DE'),(119,'Genjuros','en_GB'),(120,'Ghostlands','en_GB'),(121,'Gilneas','de_DE'),(122,'Goldrinn','ru_RU'),(123,'Gordunni','ru_RU'),(124,'Gorgonnash','de_DE'),(125,'Greymane','ru_RU'),(126,'Grim Batol','en_GB'),(127,'Grom','ru_RU'),(128,'Gul\'dan','de_DE'),(129,'Hakkar','en_GB'),(130,'Haomarush','en_GB'),(131,'Hellfire','en_GB'),(132,'Hellscream','en_GB'),(133,'Howling Fjord','ru_RU'),(134,'Hyjal','fr_FR'),(135,'Illidan','fr_FR'),(136,'Jaedenar','en_GB'),(137,'Kael\'thas','fr_FR'),(138,'Karazhan','en_GB'),(139,'Kargath','de_DE'),(140,'Kazzak','en_GB'),(141,'Kel\'Thuzad','de_DE'),(142,'Khadgar','en_GB'),(143,'Khaz Modan','fr_FR'),(144,'Khaz\'goroth','de_DE'),(145,'Kil\'jaeden','de_DE'),(146,'Kilrogg','en_GB'),(147,'Kirin Tor','fr_FR'),(148,'Kor\'gall','en_GB'),(149,'Krag\'jin','de_DE'),(150,'Krasus','fr_FR'),(151,'Kul Tiras','en_GB'),(152,'Kult der Verdammten','de_DE'),(153,'La Croisade écarlate','fr_FR'),(154,'Laughing Skull','en_GB'),(155,'Les Clairvoyants','fr_FR'),(156,'Les Sentinelles','fr_FR'),(157,'Lich King','ru_RU'),(158,'Lightbringer','en_GB'),(159,'Lightning\'s Blade','en_GB'),(160,'Lordaeron','de_DE'),(161,'Los Errantes','es_ES'),(162,'Lothar','de_DE'),(163,'Madmortem','de_DE'),(164,'Magtheridon','en_GB'),(165,'Mal\'Ganis','de_DE'),(166,'Malfurion','de_DE'),(167,'Malorne','de_DE'),(168,'Malygos','de_DE'),(169,'Mannoroth','de_DE'),(170,'Marécage de Zangar','fr_FR'),(171,'Mazrigos','en_GB'),(172,'Medivh','fr_FR'),(173,'Minahonda','es_ES'),(174,'Moonglade','en_GB'),(175,'Mug\'thol','de_DE'),(176,'Nagrand','en_GB'),(177,'Nathrezim','de_DE'),(178,'Naxxramas','fr_FR'),(179,'Nazjatar','de_DE'),(180,'Nefarian','de_DE'),(181,'Nemesis','it_IT'),(182,'Neptulon','en_GB'),(183,'Ner\'zhul','fr_FR'),(184,'Nera\'thor','de_DE'),(185,'Nethersturm','de_DE'),(186,'Nordrassil','en_GB'),(187,'Norgannon','de_DE'),(188,'Nozdormu','de_DE'),(189,'Onyxia','de_DE'),(190,'Outland','en_GB'),(191,'Perenolde','de_DE'),(192,'Pozzo dell\'Eternità','it_IT'),(193,'Proudmoore','de_DE'),(194,'Quel\'Thalas','en_GB'),(195,'Ragnaros','en_GB'),(196,'Rajaxx','de_DE'),(197,'Rashgarroth','fr_FR'),(198,'Ravencrest','en_GB'),(199,'Ravenholdt','en_GB'),(200,'Razuvious','ru_RU'),(201,'Rexxar','de_DE'),(202,'Runetotem','en_GB'),(203,'Sanguino','es_ES'),(204,'Sargeras','fr_FR'),(205,'Saurfang','en_GB'),(206,'Scarshield Legion','en_GB'),(207,'Sen\'jin','de_DE'),(208,'Shadowsong','en_GB'),(209,'Shattered Halls','en_GB'),(210,'Shattered Hand','en_GB'),(211,'Shattrath','de_DE'),(212,'Shen\'dralar','es_ES'),(213,'Silvermoon','en_GB'),(214,'Sinstralis','fr_FR'),(215,'Skullcrusher','en_GB'),(216,'Soulflayer','ru_RU'),(217,'Spinebreaker','en_GB'),(218,'Sporeggar','en_GB'),(219,'Steamwheedle Cartel','en_GB'),(220,'Stormrage','en_GB'),(221,'Stormreaver','en_GB'),(222,'Stormscale','en_GB'),(223,'Sunstrider','en_GB'),(224,'Sylvanas','en_GB'),(225,'Taerar','de_DE'),(226,'Talnivarr','en_GB'),(227,'Tarren Mill','en_GB'),(228,'Teldrassil','de_DE'),(229,'Temple noir','fr_FR'),(230,'Terenas','en_GB'),(231,'Terokkar','en_GB'),(232,'Terrordar','de_DE'),(233,'The Maelstrom','en_GB'),(234,'The Sha\'tar','en_GB'),(235,'The Venture Co','en_GB'),(236,'Theradras','de_DE'),(237,'Thermaplugg','ru_RU'),(238,'Thrall','de_DE'),(239,'Throk\'Feroth','fr_FR'),(240,'Thunderhorn','en_GB'),(241,'Tichondrius','de_DE'),(242,'Tirion','de_DE'),(243,'Todeswache','de_DE'),(244,'Trollbane','en_GB'),(245,'Turalyon','en_GB'),(246,'Twilight\'s Hammer','en_GB'),(247,'Twisting Nether','en_GB'),(248,'Tyrande','es_ES'),(249,'Uldaman','fr_FR'),(250,'Ulduar','de_DE'),(251,'Uldum','es_ES'),(252,'Un\'Goro','de_DE'),(253,'Varimathras','fr_FR'),(254,'Vashj','en_GB'),(255,'Vek\'lor','de_DE'),(256,'Vek\'nilash','en_GB'),(257,'Vol\'jin','fr_FR'),(258,'Wildhammer','en_GB'),(259,'Wrathbringer','de_DE'),(260,'Xavius','en_GB'),(261,'Ysera','de_DE'),(262,'Ysondre','fr_FR'),(263,'Zenedar','en_GB'),(264,'Zirkel des Cenarius','de_DE'),(265,'Zul\'jin','es_ES'),(266,'Zuluhed','de_DE');
/*!40000 ALTER TABLE `realm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roster`
--

DROP TABLE IF EXISTS `roster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roster` (
  `roster_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`roster_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roster`
--

LOCK TABLES `roster` WRITE;
/*!40000 ALTER TABLE `roster` DISABLE KEYS */;
INSERT INTO `roster` VALUES (1,'My Roster 1'),(4,'My Roster 3');
/*!40000 ALTER TABLE `roster` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roster_character`
--

DROP TABLE IF EXISTS `roster_character`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roster_character` (
  `roster_id` int(11) NOT NULL,
  `character_id` int(11) NOT NULL,
  PRIMARY KEY (`roster_id`,`character_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roster_character`
--

LOCK TABLES `roster_character` WRITE;
/*!40000 ALTER TABLE `roster_character` DISABLE KEYS */;
INSERT INTO `roster_character` VALUES (1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18);
/*!40000 ALTER TABLE `roster_character` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roster_user`
--

DROP TABLE IF EXISTS `roster_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roster_user` (
  `roster_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`roster_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roster_user`
--

LOCK TABLES `roster_user` WRITE;
/*!40000 ALTER TABLE `roster_user` DISABLE KEYS */;
INSERT INTO `roster_user` VALUES (1,1,1),(4,1,1);
/*!40000 ALTER TABLE `roster_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `acl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'exylia.s@gmail.com','Exylia','e19d5cd5af0378da05f63f891c7467af',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-20 13:44:29
