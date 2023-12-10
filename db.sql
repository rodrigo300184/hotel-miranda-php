-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: prueba_mysql_api_miranda
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

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
-- Table structure for table `amenities_has_room`
--

DROP TABLE IF EXISTS `amenities_has_room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenities_has_room` (
  `room_id` int NOT NULL,
  `amenity_id` int NOT NULL,
  PRIMARY KEY (`room_id`,`amenity_id`),
  KEY `amenity_id` (`amenity_id`),
  CONSTRAINT `amenities_has_room_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `amenities_has_room_ibfk_2` FOREIGN KEY (`amenity_id`) REFERENCES `amenity` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenities_has_room`
--

LOCK TABLES `amenities_has_room` WRITE;
/*!40000 ALTER TABLE `amenities_has_room` DISABLE KEYS */;
INSERT INTO `amenities_has_room` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(1,2),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2),(19,2),(20,2),(1,3),(2,3),(3,3),(4,3),(5,3),(6,3),(7,3),(8,3),(9,3),(10,3),(11,3),(12,3),(13,3),(14,3),(15,3),(16,3),(17,3),(18,3),(19,3),(20,3),(1,4),(2,4),(3,4),(4,4),(5,4),(6,4),(7,4),(8,4),(9,4),(10,4),(11,4),(12,4),(13,4),(14,4),(15,4),(16,4),(17,4),(18,4),(19,4),(20,4),(1,5),(2,5),(3,5),(4,5),(5,5),(6,5),(7,5),(12,5),(16,5),(18,5),(19,5),(20,5),(1,6),(2,6),(3,6),(4,6),(12,6),(18,6);
/*!40000 ALTER TABLE `amenities_has_room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `amenity`
--

DROP TABLE IF EXISTS `amenity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amenities` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenity`
--

LOCK TABLES `amenity` WRITE;
/*!40000 ALTER TABLE `amenity` DISABLE KEYS */;
INSERT INTO `amenity` VALUES (1,'Free Wifi'),(2,'Automobile'),(3,'Cocktails'),(4,'Gym'),(5,'Extra Bed'),(6,'No Smoking'),(7,'Air Conditioner');
/*!40000 ALTER TABLE `amenity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guest` varchar(255) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_date` date NOT NULL DEFAULT (curdate()),
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `special_request` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL DEFAULT 'Booked',
  `room_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (1,'Samantha Von','319-679-8509 x0146','Letha63@gmail.com','2000-10-06','2018-07-23','2021-06-26','coepi defetiscor omnis voluptates amet certus vulnero esse voluptates contego coadunatio','Available',2),(2,'Nathan Borer Jr.','766-276-1406 x31476','Victor_Sipes27@yahoo.com','2011-05-05','2019-10-24','2020-04-11','ea tredecim talus vergo tremo caveo verto aggredior','Available',1),(3,'Charles Bahringer','439-646-3757 x1506','Bartholome.Upton37@yahoo.com','2018-04-19','2019-08-30','2023-06-25','decipio comprehendo curto tumultus','Booked',9),(4,'Arthur Hansen','(486) 562-6149 x04152','Violet.Cole@gmail.com','2015-12-27','2020-04-14','2022-06-26','ullus barba tam terga trucido ter alii catena cupiditas patruus','Booked',11),(5,'Cameron Hudson-Jacobi','1-577-943-5321 x8753','Oleta.Durgan@yahoo.com','2001-07-16','2010-01-11','2021-01-11','vulariter','Available',5),(6,'Felipe Bailey-Reilly','(660) 781-4122 x9489','Ophelia_Konopelski51@hotmail.com','2010-01-06','2011-12-08','2023-10-13','eaque aliqua delicate benevolentia tui vestigium abscido terreo undique trado cicuta tego confero laudantium charisma conor tonsor celer vis talis custodia amor velum culpa ducimus','Available',19),(7,'Ms. Dixie Tromp','1-447-573-0162','Orie_Raynor@yahoo.com','2019-08-06','2021-02-22','2021-05-11','neque subiungo vicissitudo baiulus trado complectus beatus curia summa','Booked',1),(8,'Denise Fritsch','550-766-2932 x631','Twila.Kihn@yahoo.com','2010-02-27','2022-03-06','2022-08-21','aranea abstergo sed desipio adsuesco ater pauci adipisci officia voveo bonus cibus commodi vestigium decimus repellendus spiritus argumentum soluta terror blanditiis venio aetas velit','Available',10),(9,'Elias Borer','(691) 522-5880','Arvilla_Johns64@yahoo.com','2023-07-15','2023-10-23','2023-10-26','arca theatrum combibo adstringo dignissimos vulgus adulescens cubo crapula autem credo abduco vereor ultio peccatus verbum aegrotatio thema adversus clam uxor summisse sol','Available',8),(10,'Johanna Murphy Jr.','1-800-800-5923 x60053','Skye.Mills@hotmail.com','2013-08-10','2017-10-31','2023-04-14','error vinco nesciunt vulnus voco auctus','Booked',2),(11,'Lola Gislason','(764) 369-8173 x2666','Olen86@yahoo.com','2020-01-13','2021-09-06','2022-09-20','cogo calco alveus officia tempus clamo victoria somnus natus','Available',4),(12,'Kristine Volkman','627-364-0872 x10647','Percival_Hirthe@gmail.com','2012-03-20','2014-03-26','2019-09-04','amplus explicabo validus creator agnosco perferendis porro saepe color qui deorsum saepe desolo eos','Available',12),(13,'Tommie Turcotte Sr.','1-789-648-1875 x0937','Joanie_McGlynn84@hotmail.com','2004-12-06','2016-09-10','2021-03-08','tenus vilicus abutor trepide cilicium surculus thema sperno solium odio calculus','Available',2),(14,'Dr. Alfredo Erdman DVM','(815) 462-8913 x40401','Dandre_Stanton@gmail.com','2020-10-21','2020-10-23','2023-10-27','deleniti sublime claro dedecor adipiscor corrupti deserunt totidem','Booked',10),(15,'Tracy Denesik','1-972-675-6544 x77899','Jaydon.Franecki@hotmail.com','2020-01-09','2021-08-04','2023-04-04','tempore super stips allatus circumvenio','Booked',10),(16,'Randall Runolfsdottir','781.664.6859 x56706','Adaline.Davis10@yahoo.com','2001-08-23','2011-05-08','2017-01-04','abeo annus cetera altus arceo cumque cometes vulnus iusto cattus amet cohibeo','Booked',1),(17,'Mona Walter','(961) 451-4266 x0199','Leanne37@hotmail.com','2021-11-09','2023-03-29','2023-04-09','antiquus aveho','Available',7),(18,'Blanca Ebert','364-466-9288 x0733','Jarod_Boyle-Hettinger27@gmail.com','2004-08-04','2006-04-27','2008-05-05','voluptatum versus degenero aegre consectetur bellum arma molestias autus totus totidem stillicidium ipsa','Available',4),(19,'Mike Stiedemann','(217) 889-9848','Rosina.Lesch28@yahoo.com','2013-12-03','2020-05-05','2022-10-27','peccatus auctor ratione adversus venia pauper nesciunt suadeo cohibeo capto patria deripio quisquam adinventitias beatae incidunt bardus bellicus defungo absconditus omnis tandem vomito cruciamentum auditor','Available',15),(20,'Jimmie Turcotte','775-470-4043','Mackenzie18@gmail.com','2023-03-14','2023-10-07','2023-10-28','vacuus patruus vacuus denuncio coaegresco tergiversatio tribuo avaritia ut templum vinitor solitudo torrens patrocinor iusto verecundia defluo depopulo desidero apud adaugeo nesciunt adulatio combibo','Booked',5),(21,'Mr. Taylor Dickinson','539.755.6618 x58534','Lonnie_Cummings79@yahoo.com','2001-02-23','2016-04-19','2023-10-30','crastinus autus tristis suscipio sollicito suscipit creo ipsam decens comprehendo convoco adsum absconditus ceno caritas aqua defluo volup','Available',16),(22,'Denise Weber PhD','846.400.1917 x1342','Spencer.Oberbrunner@hotmail.com','2003-09-22','2013-06-26','2018-01-08','cumque ipsam desidero absorbeo animi solus','Available',6),(23,'Sharon Runolfsson','1-311-956-5525','Arlene90@gmail.com','2002-07-01','2005-09-22','2020-10-18','denuo cognomen attero studio certe comprehendo soluta inventore ustilo usitas temperantia copia succedo coepi uterque bellicus vester compono ab','Available',4),(24,'Ms. Laurie Herzog','804-838-5621 x242','Keshaun49@gmail.com','2007-11-26','2011-03-01','2022-03-12','aegre canis constans tergum coaegresco comparo architecto tamen','Booked',6),(25,'Mrs. Jeanne Rippin','520-485-9390 x941','Liana.Hagenes53@yahoo.com','2011-08-25','2017-03-26','2017-08-01','laborum abduco ustulo verus cenaculum avaritia defungo abutor statua nulla triduana textor','Available',10),(26,'Eddie Rolfson','1-723-608-5903 x069','Hillary96@hotmail.com','2007-06-17','2015-10-08','2020-04-18','cupio stultus amicitia comburo adeo','Available',11),(27,'Bonnie Spencer','1-891-617-2572','Kory47@hotmail.com','2006-04-19','2017-08-14','2018-07-09','catena demens creber tracto brevis demoror temptatio auxilium sumo utrum comedo','Available',13),(28,'Daisy Romaguera','1-364-517-1249 x62897','Cordia.Reilly@hotmail.com','2015-01-07','2023-05-05','2023-09-06','adfero arto illo toties tertius vespillo verus pauper aggero cattus ratione cattus aeneus numquam acies similique alias super vulpes','Booked',18),(29,'Glenda Kohler-Blick','(692) 533-6907','Laury28@hotmail.com','2005-09-13','2023-03-04','2023-05-26','esse adnuo tolero utrimque asporto audacia nostrum pauper unde adhuc delibero asperiores cognomen laborum atrocitas thalassinus accedo laudantium itaque crebro alo','Booked',19),(30,'Miss Brandy Bogan','644.703.7380 x45656','Leda.Casper@hotmail.com','2005-07-29','2017-12-29','2022-08-02','antea aestas','Available',12),(31,'Bethany Johnson','596.223.9011','Vance80@hotmail.com','2017-02-03','2018-08-12','2022-06-25','alienus absque cavus summisse subnecto spero denego porro texo conscendo tui bonus sum adicio vulnus','Booked',3),(32,'Meghan Lang','1-829-288-5760','Kaelyn.Hackett24@yahoo.com','2021-09-20','2023-05-04','2023-07-04','patior sint viridis tam pauper','Booked',17),(33,'Ruben Mills','1-950-860-1917 x38282','Carter_Balistreri49@yahoo.com','2003-03-04','2011-01-06','2018-11-11','comparo video','Available',2),(34,'Ruben Ward PhD','217.671.0017 x968','Freida_Kunze10@yahoo.com','2007-12-16','2016-11-18','2019-02-02','validus nulla adsidue vulgus termes vox amplus degenero tutis cibo tot occaecati assentator uberrime ait concido itaque crur vetus aetas tam ceno supra degenero','Booked',16),(35,'Kenneth Pfannerstill','1-663-607-7145 x3890','Magdalena_Rowe68@yahoo.com','2010-01-21','2015-07-13','2017-01-02','testimonium certe conturbo solium armarium cupressus patior vergo odit beatus tondeo veniam dens debilito qui pecco','Booked',5),(36,'Carlton Cremin','624.916.1214 x27112','Domenica.Mante@gmail.com','2010-09-05','2017-04-20','2018-07-03','utroque facilis tutamen deprecator accommodo cernuus acsi civitas crudelis stipes esse delibero cibus delego attero statua','Booked',7),(37,'Irene Larson','366.229.9846 x054','Melvin_Goodwin7@gmail.com','2015-11-27','2022-06-11','2022-09-11','voluptatem versus amplitudo tergiversatio voluptatem crapula atavus thesaurus','Available',12),(38,'Dean Swaniawski PhD','572.969.5290','Lindsay64@gmail.com','2023-08-22','2023-10-24','2023-10-26','carbo soluta caste esse','Available',9),(39,'Ron Bins','464-694-5876 x0954','Vincenzo.Gerhold71@hotmail.com','2019-08-10','2020-08-06','2023-04-14','depromo averto thesaurus adhaero capto tergeo curiositas conculco tristis voco alo corroboro','Booked',7),(40,'Faye Cremin','333-635-6678','Cade_Hyatt42@gmail.com','2015-01-28','2021-10-02','2022-12-08','pauci cruciamentum demoror tempore somniculosus viscus ducimus quod','Booked',13),(41,'Sherman Wolff','1-288-620-8109','Cordelia88@yahoo.com','2000-07-16','2003-12-21','2017-02-02','complectus vesica stabilis causa possimus amo altus comparo','Booked',10),(42,'Alexandra Bednar','374.496.3946 x22532','Cornell.Block68@hotmail.com','2000-08-17','2006-01-10','2012-08-26','acervus ullam avarus curso vomica quaerat voluntarius argentum cilicium virtus aestus clibanus valens sollicito deficio quibusdam umquam magni accedo minima maiores vitiosus patruus','Available',17),(43,'Cheryl Schneider','1-651-978-0943 x933','Chadd_Davis86@yahoo.com','2002-12-11','2008-02-28','2016-02-04','possimus subiungo','Available',17),(44,'Mr. Kyle Welch','594-655-8126 x2981','Pascale_Nicolas@yahoo.com','2010-12-27','2011-12-31','2018-03-26','subnecto acerbitas vorax ocer baiulus deprecator soleo natus valens decens cribro','Booked',13),(45,'Emmett Breitenberg','419.341.5006 x329','Oswald.Mraz32@hotmail.com','2018-03-18','2018-12-13','2019-10-08','coaegresco verbera tergeo absque adiuvo trado somniculosus cupiditate via compello agnosco crustulum corrigo coaegresco labore comptus cursus','Available',14),(46,'June Hodkiewicz','(317) 311-1356','Granville_Brown@hotmail.com','2015-07-18','2015-11-04','2022-07-17','tempore conduco terra aranea','Booked',2),(47,'Josephine Parisian','763-727-6975 x60670','Art27@yahoo.com','2018-09-06','2021-05-21','2023-06-03','cultura voveo depopulo abstergo nesciunt verto amo bos amplexus totam tantum sit uredo adficio sortitus statua depono annus enim blandior acies cubitum','Booked',17),(48,'Dave Parker-Medhurst','(382) 954-2171','Heidi_Bogan@hotmail.com','2016-04-19','2018-01-25','2018-09-17','spoliatio approbo cibus depono optio cernuus deporto cognomen valeo defluo sto sublime substantia decretum bibo tollo utpote magnam quasi','Booked',9),(49,'Lena Bogan','482.215.6851 x7977','Dusty_Maggio@yahoo.com','2015-01-05','2021-12-03','2022-10-21','defleo certe conspergo coma beatus altus celebrer verecundia sordeo arx','Available',9),(50,'Jack Rice','1-483-603-0083 x2153','Obie54@yahoo.com','2021-08-05','2022-12-13','2023-06-09','culpo cruciamentum villa magnam cinis avarus aggredior','Booked',1),(51,'Jamie Schuppe','(850) 856-0209 x37661','Wilhelmine.Franecki@hotmail.com','2008-09-29','2022-09-15','2023-03-14','accendo tabula turbo tollo temperantia demens cruciamentum aduro aequitas tergeo sollers vomito consequuntur alo dolorem vix soluta custodia delectus arto','Booked',16),(52,'Juanita Terry','725-325-3558','Asa78@gmail.com','2010-09-18','2013-05-28','2014-06-28','depopulo voluptatibus suscipit eveniet stabilis tribuo theatrum','Booked',19),(53,'Mrs. Rosa Turner-Bahringer','(421) 351-6855 x79057','Laury_Bogisich57@hotmail.com','2021-11-11','2022-07-18','2022-08-20','solium officiis vociferor coadunatio arguo succedo centum vesica adduco umbra tendo curia spargo triduana ver velum','Booked',12),(54,'Orlando Gibson','1-725-552-6043','Rosalyn_Stokes@gmail.com','2004-07-02','2022-03-23','2023-01-03','synagoga vilis tumultus deporto substantia ubi arcesso verbum admiratio spero facilis vivo','Booked',4),(55,'Charlie Kirlin','(823) 302-2475 x9022','Amalia27@gmail.com','2021-11-05','2023-04-03','2023-06-16','desidero perferendis ars magnam vomica vergo cuius vicinus deleo cubicularis angulus solium talio cornu damno tertius carpo amoveo decor ex comminor','Booked',8),(56,'Harry Jakubowski','(250) 265-8591 x4525','Jaleel94@gmail.com','2003-11-29','2012-10-01','2018-09-10','animus coniecto abscido volutabrum sed territo adinventitias testimonium advoco crinis damnatio quas vesica demulceo conventus acerbitas sopor recusandae animi creator omnis arcesso','Available',4),(57,'Wallace Dooley-Kris Sr.','1-805-718-9605','Mafalda.Hickle33@yahoo.com','2012-08-18','2012-12-28','2020-08-17','pel aggredior absconditus ratione explicabo terror usque civitas certus cometes tredecim inflammatio tempora villa virgo sunt sumo deduco studio','Booked',1),(58,'Mindy Lockman','(336) 479-7963 x1213','Joshuah_Hudson16@gmail.com','2003-04-16','2005-12-15','2017-12-01','cupiditas vesco degero veniam laborum apud eligendi adsum cruentus uredo arbitro','Available',8),(59,'Nina Blanda','674.746.3525 x5982','Sage_Ziemann8@gmail.com','2008-01-27','2020-09-01','2023-09-02','trucido vae hic sumo tero triduana supplanto','Booked',9),(60,'Marta Doyle','1-338-654-3468 x627','Kendrick22@yahoo.com','2009-08-24','2022-11-09','2023-04-17','aeneus cur ultio infit callide voco','Booked',6),(74,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-15','2023-11-22','kjhf','Booked',2),(75,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-02','2023-11-06','hghjh','Booked',2),(76,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-09','2023-11-06','hjhj','Booked',3),(77,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-10-31','2023-11-15','jhg','Booked',4),(78,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-01','2023-11-13','jjjjj','Booked',5),(79,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-01','2023-11-07','mmnmnmn','Booked',6),(80,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-02','2023-11-16','..,.','Booked',7),(81,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-14','2023-11-16','vvv','Booked',3),(82,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-08','2023-11-13','ccc','Booked',2),(83,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-08','2023-11-13','nnn','Booked',8),(85,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-02','2023-11-06','jhj','Booked',8),(86,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-09','2023-11-24','hhjjhj','Booked',6),(90,'Rodrigo Martínez','654635123','rodrigo300184@gmail.com','2023-11-30','2023-11-01','2023-11-02','ghghg','Booked',1),(91,'Soledad','+346558334122','soloroamr@romar.com','2023-12-02','2023-12-07','2023-12-28','asdasdas','Booked',2),(93,'Soledad','+346558334122','soloroamr@romar.com','2023-12-02','2023-11-09','2023-12-20',',mm,m,m,','Booked',1),(94,'Soledad','+346558334122','soloroamr@romar.com','2023-12-03','2023-12-03','2023-12-04','nbnbnb','Booked',2),(95,'bvvnvb','+346558334122','a@a.com','2023-12-07','2023-12-07','2023-12-08','message','Booked',18),(96,'Soledad','+34654635123','soloroamr@romar.com','2023-12-08','2024-01-03','2024-01-05','fffff','Booked',2);
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `subject_of_review` varchar(255) NOT NULL,
  `review_body` longtext NOT NULL,
  `date` date NOT NULL DEFAULT (curdate()),
  `status` varchar(45) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'Clint Volkman','Dashawn.Sawayn24@hotmail.com','418-549-9547 x54575','paulatim','aufero turba candidus artificiose voluntarius usitas vulgo tamquam conventus stips','1983-12-20','Inactive'),(2,'Kirk Thompson','Nina2@gmail.com','(301) 847-7878 x0617','conculco acies demonstro cauda','demitto caterva crudelis crur victus adnuo quibusdam stella','2003-08-11','Inactive'),(3,'William Jacobson','Jamal.Kirlin@gmail.com','1-692-228-5965 x35628','taedium','admoveo tenetur aegrotatio ars urbanus crebro curto ulciscor accedo tergiversatio acies uberrime perferendis utroque demo dedecor','1971-05-02','Inactive'),(4,'Amos Torp MD','Deven.Kuhic-Hoeger71@gmail.com','1-774-879-5469 x94717','consequatur cerno ceno corrumpo addo alii','caelum conforto catena aestas demulceo tego dolorem ventus vociferor quae calculus ceno temperantia virgo doloribus aveho ademptio allatus vere corporis voro cogo vinculum tolero textus torrens corpus contigo','1990-08-15','Active'),(5,'Jennifer Stroman','Ova_Shanahan@hotmail.com','1-328-617-0676 x722','iusto amplitudo et excepturi','statua decet odio combibo hic desparatus depraedor audax','1974-04-04','Inactive'),(6,'Lora O\'Connell','Carlos.Bechtelar@hotmail.com','(967) 214-2856 x6170','maxime','cotidie facere iste cogito adimpleo sopor animi sordeo perferendis comes repellat labore ante absorbeo tamisium compello vorago tui','1999-10-28','Inactive'),(7,'Bonnie Crist','Ezra.Roberts68@gmail.com','(311) 621-4932 x89795','conqueror tres','cupiditate avaritia virgo substantia veritas pauci','1996-05-02','Active'),(8,'Samantha Wuckert','Leslie.Gerlach@yahoo.com','317-579-0066 x173','atqui','charisma talio aegrotatio tergiversatio vestigium temeritas talus stella volutabrum cruentus velociter aveho illum decretum recusandae pectus in aequitas textus crinis abstergo confugo cognomen thymbra fuga deludo sum defero adflicto varietas defungo eum accommodo undique deserunt','1974-07-25','Active'),(9,'Elaine Roberts','Alfonzo.Barrows@gmail.com','1-684-921-5159 x346','tutis teneo','minima demulceo sollicito terra dedico viridis quis quam tricesimus abduco cimentarius demo casso umbra altus tabula curriculum velit','1984-11-06','Inactive'),(10,'Everett Denesik','Evelyn.Quigley@gmail.com','709-509-7891 x674','vitae tondeo','aveho aequus bardus animi audio vix truculenter non caput illum censura amet sperno quia theatrum derelinquo delibero antea tabula viscus voluptatibus beneficium deduco denique','1996-08-07','Inactive'),(11,'Bonnie Streich-Mayer','Helmer.Reinger57@hotmail.com','(963) 255-6924 x473','tenuis cognatus speculum conduco','callide valeo itaque curis animi magnam victus clam denique curiositas aliquam aro somnus bis teneo summopere custodia sto creator civitas arbor vinco conturbo vulgo strenuus coniuratio aequitas','1999-11-06','Active'),(12,'Claudia Sipes','Brielle_Cole@hotmail.com','750-529-5101','pecco conservo vereor infit suscipit dolorum apparatus','combibo cultura careo sed accedo sui delectatio alo tredecim atavus teres provident ipsa claro spargo deficio thymum utique statim rem alo sufficio alter quam fuga','1976-11-04','Active'),(13,'Cheryl Christiansen','Dessie.Predovic78@gmail.com','(909) 741-6433 x98625','dedecor cogito capto','degenero pauper amiculum voluptatem aiunt ut pariatur tabella tui iusto coniecto spes solum undique utroque cedo deleo doloremque demergo benevolentia decumbo advoco quis tendo volubilis conicio solium amplexus appono','1979-03-31','Inactive'),(14,'Jenna Denesik','June.Cronin39@hotmail.com','757.729.3593 x619','pecco angulus','soluta tondeo artificiose demitto approbo capitulus amplitudo cum comedo sapiente volva valens carmen architecto dedecor tredecim trepide templum arto ars depereo aestus cubitum culpa vis','1984-12-22','Active'),(15,'Darnell Homenick MD','Felipa.Lebsack@hotmail.com','1-974-265-4263 x56140','super tubineus','paens temporibus debitis pax damno annus demonstro soleo astrum curo temporibus adicio adamo vulgaris credo terra tristis expedita tactus talus video deripio ut abeo tempus terga supra bardus corrupti aperio utpote vinitor possimus laboriosam coerceo suadeo adfero supra adfero abscido vereor torqueo spectaculum demitto alii pectus terga vilis fugiat vomica','1999-08-13','Active'),(16,'Francis Smith','Aron45@yahoo.com','927.667.3570 x360','depono verbum articulus cur denuo','correptius quidem deduco attonbitus defluo talio aeger adulescens tamdiu altus adversus comparo apud vulticulus comprehendo armarium testimonium decet','1993-08-24','Active'),(17,'Marie Senger','Zoie_Frami63@gmail.com','1-534-647-9077 x43747','custodia dolorum adamo','summisse cras tondeo vester vinitor tollo','1976-06-05','Active'),(18,'Ross Franey','Ariel.Wisoky97@yahoo.com','304-872-0240 x457','ipsam arceo acer dolorem assentator','debitis cogo dedecor comedo crur audentia solitudo comes tergum tenetur vomito tunc corrumpo in ullam communis brevis','1985-12-16','Inactive'),(19,'Darrell Ebert III','Cassandra61@yahoo.com','963.507.4243 x83761','consequatur valde tempora asperiores decerno tantillus','nesciunt tutis libero damnatio patruus accusamus varius venustas nihil conor tumultus celer coruscus commemoro demum cognomen perspiciatis adnuo vespillo arto peior aetas vulgus adficio cornu dolorem amet incidunt suspendo eaque ultra angulus vindico reprehenderit conduco','1993-12-24','Active'),(20,'Eula Pfeffer','Ernie2@yahoo.com','(460) 471-4752','accusamus deporto','doloribus paens nisi unde timor artificiose occaecati desino tubineus aeger doloribus caelum adipiscor ipsa clamo agnosco verecundia deserunt suspendo spes dicta','1988-06-21','Inactive'),(21,'Rodrigo Emilio Martinez','rodrigo300184@gmail.com','+346558334122','Reserva','Todo genial.','2023-12-03','Active'),(22,'Ropo','a@a.com','635412456','subject','message','2023-12-06','Active'),(23,'Rodrigo Emilio Martinez','soloroamr@romar.com','635412456','subject','message','2023-12-06','Active');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photos` varchar(255) NOT NULL,
  `room_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
INSERT INTO `photo` VALUES (1,'https://images.unsplash.com/photo-1570737209810-87a8e7245f88?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',1),(2,'https://images.unsplash.com/photo-1540518614846-7eded433c457?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',2),(3,'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',3),(4,'https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',4),(5,'https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',5),(6,'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',6),(7,'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',7),(8,'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',8),(9,'https://images.unsplash.com/photo-1640109478916-f445f8f19b11?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',9),(10,'https://images.unsplash.com/photo-1540518614846-7eded433c457?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',10),(11,'https://images.unsplash.com/photo-1633505650701-6104c4fc72c2?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',11),(12,'https://images.unsplash.com/photo-1540518614846-7eded433c457?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',12),(13,'https://images.unsplash.com/photo-1570737209810-87a8e7245f88?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',13),(14,'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',14),(15,'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',15),(16,'https://images.unsplash.com/photo-1566665797739-1674de7a421a?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',16),(17,'https://images.pexels.com/photos/262048/pexels-photo-262048.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',17),(18,'https://images.unsplash.com/photo-1633505650701-6104c4fc72c2?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',18),(19,'https://images.unsplash.com/photo-1570737209810-87a8e7245f88?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',19),(20,'https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?q=80&w=1260&h=750&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',20);
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_number` int NOT NULL,
  `room_type` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  `price` int NOT NULL,
  `offer_price` tinyint(1) NOT NULL,
  `discount` int NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,402,'Double Bed','corpus cito super cauda curatio curso cenaculum ancilla subnecto certus provident apparatus autem veritatis textus turba cubitum',180,0,0,'Booked'),(2,404,'Suite','anser demum alienus delectatio communis civis cicuta expedita cultura ambulo temeritas cicuta cupiditas velut quasi numquam studio corona',370,0,0,'Available'),(3,804,'Double Bed','alioqui articulus fugiat explicabo amiculum utique canto dolor coniecto inventore cilicium texo copiose ex adhaero cogito aestus',180,0,0,'Available'),(4,702,'Double Bed','adsuesco mollitia benigne curia vix speculum voluptatibus tum causa curriculum casso vicissitudo adsidue appello',180,0,0,'Booked'),(5,404,'Suite','vos recusandae corroboro sodalitas viduo vitae atrocitas sto cubicularis adeptio cetera crepusculum unus stabilis validus molestias deripio',370,0,0,'Booked'),(6,408,'Double Bed','dens theologus solum auctor tremo una ascit aliquid canto vado quam defetiscor benevolentia centum',180,0,0,'Booked'),(7,803,'Double Bed','barba tergiversatio comparo aeger temporibus creo tolero vigor carmen utique comes cum vestigium terga',180,1,14,'Booked'),(8,705,'Suite','cogo centum solium tripudio asper repellendus turbo ultra dolores illum creber sophismata admoneo',370,0,0,'Booked'),(9,401,'Double Superior','expedita doloremque cruciamentum veniam desino corona peior conitor aetas id arbitro in cito',250,0,0,'Available'),(10,808,'Double Superior','celebrer derideo expedita abscido administratio caritas tollo mollitia amet abundans statim repellendus cito conatus arx adhaero acsi',250,0,0,'Available'),(11,409,'Double Bed','conatus tenetur deleo tersus conicio cognatus consequatur talio deficio corrupti arma dedecor aestus cognatus',180,1,15,'Available'),(12,603,'Luxury','utrimque sol corpus allatus inventore titulus vesica deludo sol clibanus ambulo stillicidium cresco approbo cresco',180,0,0,'Booked'),(13,506,'Double Bed','enim ars tyrannus barba usus advoco blandior bellum veritas vorax ratione facilis excepturi undique audio caveo',180,1,21,'Booked'),(14,909,'Luxury','vita autem patrocinor odio deorsum cohibeo reprehenderit comedo tamdiu casso vinitor comis voluntarius defero theologus in ter curia',180,0,0,'Available'),(15,207,'Double Superior','stips conculco ultio odit demergo carus sponte sopor speculum surculus cuppedia astrum asperiores colo sui',250,1,11,'Booked'),(16,105,'Suite','veritatis asperiores velit asperiores spero adimpleo argumentum hic clementia sonitus suppono voluntarius',370,0,0,'Booked'),(17,301,'Luxury','sequi odit aegrotatio volo veritas amita cinis combibo colligo voluntarius solus harum fugiat aro vestigium reprehenderit ait talio',180,0,0,'Available'),(18,203,'Double Bed','ullus depraedor demergo atavus volaticus conventus neque tunc spero curia suppono ipsum aedificium',180,0,0,'Available'),(19,802,'Suite','nostrum auxilium appono uxor recusandae statim dolores adamo ait theatrum adulescens vulgus curatio teres reprehenderit',370,0,0,'Booked'),(20,802,'Double Bed','uredo collum taedium super trucido venio quo annus acies templum at desidero tergiversatio tepesco creta',180,1,5,'Available');
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Josefina Johnston','Sibyl_Thompson26@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/102.jpg','1996-07-04','District','(816) 887-8788 x8879','Inactive'),(2,'Terri Kreiger','Fredy.Hammes@yahoo.com','https://avatars.githubusercontent.com/u/17552541','1976-04-05','Lead','687-715-9472','Inactive'),(3,'Velma Gusikowski Sr.','Donny.Mills@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/277.jpg','1989-07-27','Corporate','814.763.9995 x4603','Inactive'),(4,'Natasha Haley','Garrett41@yahoo.com','https://avatars.githubusercontent.com/u/87811555','1995-02-03','Human','1-737-760-5222 x8170','Active'),(5,'Sean Yost','Greyson98@gmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/451.jpg','1973-07-25','Human','(988) 913-9446','Active'),(6,'Melvin Gerhold','Boris.Corkery21@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/737.jpg','1993-07-20','Internal','(473) 266-2725 x79109','Active'),(7,'Don O\'Connell','Beatrice.Ullrich@gmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/360.jpg','1975-12-12','Chief','(391) 791-5296','Active'),(8,'Sandra MacGyver','Morgan71@yahoo.com','https://avatars.githubusercontent.com/u/53701004','2001-08-26','Forward','1-788-470-5548 x4113','Inactive'),(9,'Erika Nicolas','Laisha.Von@yahoo.com','https://avatars.githubusercontent.com/u/65105495','1992-09-04','Internal','(445) 276-6008 x63901','Active'),(10,'Donna Roob','Chelsea.Ratke73@gmail.com','https://avatars.githubusercontent.com/u/96084294','1991-06-26','Product','(403) 612-7489','Active'),(11,'Jan Waelchi III','Joana_Stracke87@gmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/599.jpg','1977-07-23','Regional','458.840.5905 x0444','Active'),(12,'Dominick Abbott','Savanna_Schowalter@yahoo.com','https://avatars.githubusercontent.com/u/8239936','1982-05-17','Lead','(414) 681-6510','Inactive'),(13,'Bradford Berge-Berge','Lukas_Macejkovic@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/239.jpg','1992-03-01','Central','(238) 798-8308 x198','Active'),(14,'Maryann Bechtelar','Giuseppe.Kozey32@hotmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/687.jpg','1991-12-13','Future','623.447.9213 x35493','Inactive'),(15,'Sally Beahan','Johnathon_Marvin@gmail.com','https://avatars.githubusercontent.com/u/16284504','1991-07-14','Chief','(753) 631-3482 x82949','Inactive'),(16,'Miss Heidi Mante','Mellie68@yahoo.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/231.jpg','1985-10-01','International','700.506.7036 x918','Inactive'),(17,'Jenny Schamberger','Claude.Luettgen@gmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/930.jpg','1979-07-03','Dynamic','1-869-810-1722 x612','Active'),(18,'Micheal Tromp','Gabrielle.Wunsch24@gmail.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/289.jpg','1998-02-24','Dynamic','(626) 598-5585 x51968','Active'),(19,'Terrell Bashirian','Jalyn.Keeling@yahoo.com','https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/703.jpg','2001-11-16','Legacy','1-264-983-3875 x084','Inactive'),(20,'Donnie Schulist','Leon_Langworth@yahoo.com','https://avatars.githubusercontent.com/u/87901990','1988-03-12','Legacy','952.593.1521','Inactive');
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

-- Dump completed on 2023-12-10 17:57:25
