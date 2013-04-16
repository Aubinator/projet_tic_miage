/*
SQLyog Community Edition- MySQL GUI v6.52
MySQL - 5.5.20-log : Database - projet_tic_miage
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

create database if not exists `projet_tic_miage`;

USE `projet_tic_miage`;

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `numContact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) DEFAULT NULL,
  `prenom` varchar(80) DEFAULT NULL,
  `adresse` varchar(80) DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `lieunaissance` varchar(80) DEFAULT NULL,
  `telephoneFixe` varchar(80) DEFAULT NULL,
  `telephonePortable` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`numContact`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`numContact`,`nom`,`prenom`,`adresse`,`datenaissance`,`lieunaissance`,`telephoneFixe`,`telephonePortable`,`email`) values (1,'NDiaye','Alioune','Dakar','1978-11-09','Dakar','33 825 14 78','77 689 67 90','ndiaye_a@gmail.com'),(2,'FALL','Harouna','Saint-Louis','1980-09-12','Dakar','33 878 90 12','77 678 90 23','fall.hars@hotmail.com'),(3,'SALL','Ramata','Dakar','1970-09-07','Saint-Louis','33 856 78 12','70 567 89 01','ruios@gmail.com'),(4,'DIALLO','Mamour','Thies','1956-09-08','Dakar','33 867 23 90','76 890 34 51','diallo.mamour');

/*Table structure for table `debutprojet` */

DROP TABLE IF EXISTS `debutprojet`;

CREATE TABLE `debutprojet` (
  `codeProjet` varchar(80) NOT NULL,
  `dateDebut` date DEFAULT NULL,
  PRIMARY KEY (`codeProjet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `debutprojet` */

insert  into `debutprojet`(`codeProjet`,`dateDebut`) values ('','2012-12-04'),('4242','0000-00-00'),('PR001',NULL),('PR002','2012-01-07'),('PR003','2011-02-15'),('PR513','2013-01-29'),('PR51536','2013-02-28');

/*Table structure for table `developpeur` */

DROP TABLE IF EXISTS `developpeur`;

CREATE TABLE `developpeur` (
  `matricule` varchar(80) NOT NULL,
  `nom` varchar(80) DEFAULT NULL,
  `prenom` varchar(80) DEFAULT NULL,
  `adresse` varchar(80) DEFAULT NULL,
  `nationalite` varchar(80) DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `specialite` varchar(80) DEFAULT NULL,
  `dernier_diplome` varchar(80) DEFAULT NULL,
  `date_embauche` date DEFAULT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `developpeur` */

insert  into `developpeur`(`matricule`,`nom`,`prenom`,`adresse`,`nationalite`,`datenaissance`,`specialite`,`dernier_diplome`,`date_embauche`) values ('DEV001','DIAW','Amadou','Dakar','MAURITANIENNE','1976-11-11','Developpeur Web','BAC+4','2010-11-09'),('DEV002','GAYE','Abibou','Dakar','SENEGALAISE','1980-12-09','Designer','BAC+5','2009-09-09'),('DEV003','KOUAME','Arnaud','Lome','TOGOLAISE','1980-09-14','Concepteur','BAC+5','2004-09-08'),('DEV004','Sarr','Aissatou','Saint-Louis','SENEGALAISE','1980-09-07','Architecte/Developpeur','BAC+8','2008-09-09'),('DEV005','Sagna','Alain','Dakar','SENEGALAISE','1990-10-09','Analyste/Programmeur','BAC+5','2010-09-08'),('DEV006','Ba','Moctar','Dakar','SENEGALAISE','1990-09-12','Designer','BAC+4','2011-09-09'),('DEV007','Hotim','Ivon','Dakar','TCHADIENNE','1990-09-09','Developpeur J2EE','BAC+5','2009-09-01'),('DEV008','Ba','Maouloud','Saint-Louis','SENEGALAISE','1967-11-09','Concepteur','BAC+3','2009-09-09'),('DEV009','Kane','Issa','Thies','SENEGALAISE','1978-09-09','Ingénieur Robotique','BAC+5','2009-07-12'),('DEV010','Thiam','Ibrahima','Saint-Louis','SENEGALAISE','1987-10-09','Développeur Web','BAC+5','2008-12-09'),('DEV011','me','gfbfg','ertgr','ryhr','0000-00-00','ryjhjf','eyhyryh',NULL),('DEV019','me','gfbfg','ertgr','ryhr','0000-00-00','ryjhjf','eyhyryh',NULL),('DEV077','Kientega','landry','ouagadougou','Burkinabe','2007-01-30','python','BAC+2','2013-02-05'),('','','','','','0000-00-00','','','0000-00-00'),('DEV-2366','Kientega','Landry','plateau 70 rue kleber','Burkinabe','2010-03-08','dabali','BAC+80','2012-03-09'),('PR00221','DIOP','MAMADOU','Ouakam','Africain','1978-09-03','Design','Master','2010-03-01');

/*Table structure for table `entreprise` */

DROP TABLE IF EXISTS `entreprise`;

CREATE TABLE `entreprise` (
  `codeEntreprise` varchar(80) NOT NULL,
  `nom` varchar(80) DEFAULT NULL,
  `raisonSociale` varchar(80) DEFAULT NULL,
  `adresse` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `siteweb` varchar(80) DEFAULT NULL,
  `telephone` varchar(80) DEFAULT NULL,
  `fax` varchar(80) DEFAULT NULL,
  `numContact` int(11) DEFAULT NULL,
  PRIMARY KEY (`codeEntreprise`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `entreprise` */

insert  into `entreprise`(`codeEntreprise`,`nom`,`raisonSociale`,`adresse`,`email`,`siteweb`,`telephone`,`fax`,`numContact`) values ('ET001','BCA','Entreprise courtage','Dakar Plateau','bca@gmail.com','www.bca.com','33 865 32 11','33 890 56 17',1),('ET002','BICIS','Banque','Dakar sac','bicis@hotmail?com','www.bicis.sn','33','33',1),('ET003','BAMIS','Banque','Saint-Louis','bamis@gmail.com','www.bamis.mr','33897 90 12','33 695 43 19',3),('ET004','SUPDECO','Ecole','Dakar Faidherbe','supdeco@supdec.sn','www.supdeco.sn','33 876 43 12','33 890 56 78',4),('ET005','Interpol','securite','Burkina','testmoi@gmail.com','dddd.com','755564','4899',1),('ff','csdff','dfvdfvdf','FVFDVDF','FDVDFFB','VDFFD','VDFVFV','FRGR',3),('bfgf','kllkkl','lgdgr','sfdezf','rgytjiuk','rgtrhty','gfgfhfg','bnhgnhg',1),('ET013','BISCRE','Belly a faim !','dakar','bisc@gmail.com','www.bisc.com','000221636996','6568464',1),('ET5239','MGold',' minier','dakar','balzd@gmail.com','cz.com','257','58775',1),('','','','','','','','',1),('BELIOO','fgjtyj','','','','drghhtr','','',2),('ET5222','SISpff','pfff','dakar','ddsvv','www.pff.com','2665959','5656',1);

/*Table structure for table `lesdates` */

DROP TABLE IF EXISTS `lesdates`;

CREATE TABLE `lesdates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=latin1;

/*Data for the table `lesdates` */

insert  into `lesdates`(`id`,`dates`) values (0,'2013-02-11'),(1,'2013-02-11'),(2,'2013-02-11'),(3,'2013-02-11'),(4,'2013-02-11'),(5,'2013-02-11'),(6,'2013-02-11'),(7,'2013-02-11'),(8,'2013-02-11'),(9,'2013-02-11'),(10,'2013-02-11'),(11,'2013-02-11'),(12,'2013-02-11'),(13,'2013-02-11'),(14,'2013-02-11'),(15,'2013-02-11'),(16,'2013-02-11'),(17,'2013-02-11'),(18,'2013-02-11'),(19,'2013-02-11'),(20,'2013-02-11'),(21,'2013-02-11'),(22,'2013-02-11'),(23,'2013-02-11'),(24,'2013-02-11'),(25,'2013-02-11'),(26,'2013-02-11'),(27,'2013-02-11'),(28,'2013-02-11'),(29,'2013-02-11'),(30,'2013-02-11'),(31,'2013-02-11'),(32,'2013-02-11'),(33,'2013-02-11'),(34,'2013-02-11'),(35,'2013-02-11'),(36,'2013-02-11'),(37,'2013-02-11'),(38,'2013-02-11'),(39,'2013-02-11'),(40,'2013-02-11'),(41,'2013-02-11'),(42,'2013-02-11'),(43,'2013-02-11'),(44,'2013-02-11'),(45,'2013-02-11'),(46,'2013-02-11'),(47,'2013-02-11'),(48,'2013-02-11'),(49,'2013-02-11'),(50,'2013-02-11'),(51,'2013-02-11'),(52,'2013-02-11'),(53,'2013-02-11'),(54,'2013-02-11'),(55,'2013-02-11'),(56,'2013-02-11'),(57,'2013-02-11'),(58,'2013-02-11'),(59,'2013-02-11'),(60,'2013-02-11'),(61,'2013-02-11'),(62,'2013-02-11'),(63,'2013-02-11'),(64,'2013-02-11'),(65,'2013-02-11'),(66,'2013-02-11'),(67,'2013-02-11'),(68,'2013-02-11'),(69,'2013-02-11'),(70,'2013-02-11'),(71,'2013-02-11'),(72,'2013-02-11'),(73,'2013-02-11'),(74,'2013-02-11'),(75,'2013-02-11'),(76,'2013-02-11'),(77,'2013-02-11'),(78,'2013-02-11'),(79,'2013-02-11'),(80,'2013-02-11'),(81,'2013-02-11'),(82,'2013-02-11'),(83,'2013-02-11'),(84,'2013-02-11'),(85,'2013-02-11'),(86,'2013-02-11'),(87,'2013-02-11'),(88,'2013-02-11'),(89,'2013-02-11'),(90,'2013-02-11'),(91,'2013-02-11'),(92,'2013-02-11'),(93,'2013-02-11'),(94,'2013-02-11'),(95,'2013-02-11'),(96,'2013-02-11'),(97,'2013-02-11'),(98,'2013-02-11'),(99,'2013-02-11'),(100,'2013-02-11'),(101,'2013-02-11'),(102,'2013-02-11'),(103,'2013-02-11'),(104,'2013-02-11'),(105,'2013-02-11'),(106,'2013-02-11'),(107,'2013-02-11'),(108,'2013-02-11'),(109,'2013-02-11'),(110,'2013-02-11'),(111,'2013-02-11'),(112,'2013-02-11'),(113,'2013-02-11'),(114,'2013-02-11'),(115,'2013-02-11'),(116,'2013-02-11'),(117,'2013-02-11'),(118,'2013-02-11'),(119,'2013-02-11'),(120,'2013-02-11'),(121,'2013-02-11'),(122,'2013-02-11'),(123,'2013-02-11'),(124,'2013-02-11'),(125,'2013-02-11'),(126,'2013-02-11'),(127,'2013-02-11'),(128,'2013-02-11'),(129,'2013-02-11'),(130,'2013-02-11'),(131,'2013-02-11'),(132,'2013-02-11'),(133,'2013-02-11'),(134,'2013-02-11'),(135,'2013-02-11'),(136,'2013-02-11'),(137,'2013-02-11'),(138,'2013-02-11'),(139,'2013-02-11'),(140,'2013-02-11'),(141,'2013-02-11'),(142,'2013-02-11'),(143,'2013-02-11'),(144,'2013-02-11'),(145,'2013-02-11'),(146,'2013-02-11'),(147,'2013-02-11'),(148,'2013-02-11'),(149,'2013-02-11'),(150,'2013-02-11'),(151,'2013-02-11'),(152,'2013-02-11'),(153,'2013-02-11'),(154,'2013-02-11'),(155,'2013-02-11'),(156,'2013-02-11'),(157,'2013-02-11'),(158,'2013-02-11'),(159,'2013-02-11'),(160,'2013-02-11'),(161,'2013-02-11'),(162,'2013-02-11'),(163,'2013-02-11'),(164,'2013-02-11'),(165,'2013-02-11'),(166,'2013-02-11'),(167,'2013-02-11'),(168,'2013-02-11'),(169,'2013-02-11'),(170,'2013-02-11'),(171,'2013-02-11'),(172,'2013-02-11'),(173,'2013-02-11'),(174,'2013-02-11'),(175,'2013-02-11'),(176,'2013-02-11'),(177,'2013-02-11'),(178,'2013-02-11'),(179,'2013-02-11'),(180,'2013-02-11'),(181,'2013-02-11'),(182,'2013-02-11'),(183,'2013-02-11'),(184,'2013-02-11'),(185,'2013-02-11'),(186,'2013-02-11');

/*Table structure for table `logiciel` */

DROP TABLE IF EXISTS `logiciel`;

CREATE TABLE `logiciel` (
  `numLogiciel` int(11) NOT NULL AUTO_INCREMENT,
  `nomLogiciel` varchar(80) DEFAULT NULL,
  `typeLogiciel` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`numLogiciel`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `logiciel` */

insert  into `logiciel`(`numLogiciel`,`nomLogiciel`,`typeLogiciel`) values (1,'Power AMC','Conception'),(2,'Rational Rose','Conception'),(3,'Star UML','Conception'),(4,'Wamp Server','Developpement'),(5,'Tomcat','Developpement'),(6,'JBOSS','Developpement'),(7,'Eclipse','Developpement'),(8,'Oracle','Developpement'),(9,'Visual Studio','Developpement'),(10,'MS Project','Redaction'),(11,'MS Word','Redaction'),(12,'Dream Weaver','Developpement'),(13,'SQLYOG','Developpement');

/*Table structure for table `logiciels_tache` */

DROP TABLE IF EXISTS `logiciels_tache`;

CREATE TABLE `logiciels_tache` (
  `num_utilisation` int(11) NOT NULL AUTO_INCREMENT,
  `numlogiciel` int(11) DEFAULT NULL,
  `numtache` int(11) DEFAULT NULL,
  PRIMARY KEY (`num_utilisation`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `logiciels_tache` */

insert  into `logiciels_tache`(`num_utilisation`,`numlogiciel`,`numtache`) values (1,1,2),(2,2,8),(3,4,3),(4,5,3),(5,6,3),(6,7,3),(13,2,2),(14,13,8),(15,13,3),(16,13,4);

/*Table structure for table `participation_tache` */

DROP TABLE IF EXISTS `participation_tache`;

CREATE TABLE `participation_tache` (
  `numParticipation` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(80) DEFAULT NULL,
  `numtache` int(11) DEFAULT NULL,
  PRIMARY KEY (`numParticipation`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `participation_tache` */

insert  into `participation_tache`(`numParticipation`,`matricule`,`numtache`) values (1,'DEV001',1),(2,'DEV002',1),(3,'DEV001',2),(4,'DEV003',2),(5,'DEV003',3),(6,'DEV004',4),(7,'DEV005',6),(8,'DEV002',6),(9,'DEV007',8),(10,'DEV003',8),(11,'DEV009',9),(12,'DEV003',9),(13,'DEV001',6),(14,'DEV001',7),(15,'DEV001',8),(16,'DEV001',9),(17,'DEV001',10),(18,'DEV001',11),(19,'DEV003',11),(20,'DEV003',8),(21,'DEV077',7),(22,'DEV077',14),(23,'',0),(24,'DEV003',7),(25,'DEV005',6),(26,'DEV077',6);

/*Table structure for table `projet` */

DROP TABLE IF EXISTS `projet`;

CREATE TABLE `projet` (
  `codeProjet` varchar(80) NOT NULL,
  `nomProjet` varchar(80) DEFAULT NULL,
  `dateEnregistrement` date DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `montantPrevu` double DEFAULT NULL,
  `matriculeChef` varchar(80) DEFAULT NULL,
  `codeEntreprise` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`codeProjet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `projet` */

insert  into `projet`(`codeProjet`,`nomProjet`,`dateEnregistrement`,`dateDebut`,`dateFin`,`montantPrevu`,`matriculeChef`,`codeEntreprise`) values ('PR001','SISUPDECO','2011-01-01','2011-02-01','2011-10-01',6262848,'DEV001','ET001'),('PR002','SICOMPTA','2012-02-15','2012-02-20','2012-08-30',5000000,'DEV002','ET001'),('PR003','SIPAIEMENT','2012-02-10','2012-02-15','0000-00-00',8000000,'DEV003','ET002'),('PR004','SIBELLY','0000-00-00','0000-00-00','0000-00-00',0,'gbf','vfgf'),('PR513','SiWATMETO','2013-01-29','2013-02-01','2013-02-07',55999,'','ddrg'),('PR5133','SiWATMETO2','2011-02-08','2013-02-01','2013-02-17',586,'DEV005','ET001'),('PR515','SIAUBIN','2010-01-26','2013-01-22','2013-02-22',5646866,'','hhgh'),('PR51536','SIfriday','2012-03-06','2012-03-25','2014-03-09',5638552,'DEV-2366','ET013'),('PR51562','SIKientega','2009-02-10','2013-01-29','2013-02-17',6232688,'DEV001','ET001'),('PR516','SiWAT','2009-12-09','2013-01-14','2013-02-14',651548,'','ET563'),('PR518','SiWATMET','2013-01-29','2013-02-01','2013-02-07',55999,'DEV001','ET001');

/*Table structure for table `projetlogiciel` */

DROP TABLE IF EXISTS `projetlogiciel`;

CREATE TABLE `projetlogiciel` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `codeProjet` varchar(80) NOT NULL,
  `numLogiciel` int(11) NOT NULL,
  PRIMARY KEY (`num`),
  UNIQUE KEY `num` (`num`),
  KEY `FK_projetlogiciel_numLogiciel` (`numLogiciel`),
  KEY `FK_projetlogiciel_codeProjet` (`codeProjet`),
  CONSTRAINT `FK_projetlogiciel_codeProjet` FOREIGN KEY (`codeProjet`) REFERENCES `projet` (`codeProjet`),
  CONSTRAINT `FK_projetlogiciel_numLogiciel` FOREIGN KEY (`numLogiciel`) REFERENCES `logiciel` (`numLogiciel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `projetlogiciel` */

insert  into `projetlogiciel`(`num`,`codeProjet`,`numLogiciel`) values (1,'PR515',3),(2,'PR51562',11);

/*Table structure for table `tache` */

DROP TABLE IF EXISTS `tache`;

CREATE TABLE `tache` (
  `numtache` int(11) NOT NULL AUTO_INCREMENT,
  `nomtache` varchar(80) DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `codeProjet` varchar(80) NOT NULL,
  PRIMARY KEY (`numtache`,`codeProjet`),
  UNIQUE KEY `numtache` (`numtache`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

/*Data for the table `tache` */

insert  into `tache`(`numtache`,`nomtache`,`dateDebut`,`dateFin`,`codeProjet`) values (1,'Redaction Dossier d\'analyse','2011-02-01','2011-03-01','PR001'),(2,'Conception','2011-03-05','2011-04-01','PR001'),(3,'Developpement','2011-04-05','2011-08-04','PR001'),(4,'Test','2011-08-05','2011-09-05','PR001'),(5,'Maintenance','2011-09-10','2011-09-30','PR001'),(6,'Rencontre avec les acteurs','2012-03-15','2012-04-15','PR002'),(7,'Rédaction Dossier d\'analyse','2012-04-20','2012-05-20','PR002'),(8,'Conception','2012-05-25','2012-06-25','PR002'),(9,'Developpement','2012-07-01','2012-11-30','PR002'),(10,'Test','2012-12-01','2012-12-25','PR002'),(11,'Maintenance','2012-12-25','2012-12-31','PR002'),(13,'Conception','2012-05-02','2012-08-08','PR001'),(12,'Conception','2012-01-01','2012-03-04','PR001'),(14,'Conception','2012-05-02','2012-08-08','PR001'),(15,'Conception','2012-05-02','2012-08-08','PR001'),(20,'Conception','2012-05-02','2012-08-08','PR001'),(25,'Test','2012-01-07','2012-05-09','PR001'),(29,'Test','2012-01-07','2012-05-09','PR001'),(35,'Test','2012-01-07','2012-05-09','PR002'),(45,'Test','2012-01-07','2012-05-09','PR002'),(61,'pause','2013-03-06','2013-03-14','PR001');

/*Table structure for table `utilisation_logiciels` */

DROP TABLE IF EXISTS `utilisation_logiciels`;

CREATE TABLE `utilisation_logiciels` (
  `numLogiciel` int(11) NOT NULL,
  `nbutilisations` int(11) DEFAULT NULL,
  PRIMARY KEY (`numLogiciel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `utilisation_logiciels` */

insert  into `utilisation_logiciels`(`numLogiciel`,`nbutilisations`) values (13,3);

/* Trigger structure for table `logiciel` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `init_utilisations_logiciel` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `init_utilisations_logiciel` AFTER INSERT ON `logiciel` FOR EACH ROW BEGIN
insert into utilisation_logiciels(numLogiciel, nbutilisations) values(NEW.numLogiciel,0);
    END */$$


DELIMITER ;

/* Trigger structure for table `logiciels_tache` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `update_utilisation_logiciel` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `update_utilisation_logiciel` AFTER INSERT ON `logiciels_tache` FOR EACH ROW BEGIN
UPDATE utilisation_logiciels SET
nbutilisations =nbutilisations+1
where numLogiciel=new.numLogiciel;
    END */$$


DELIMITER ;

/* Trigger structure for table `tache` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `trigger_debut_projet` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `trigger_debut_projet` AFTER INSERT ON `tache` FOR EACH ROW BEGIN
insert into debutProjet values(NEW.codeProjet,NEW.dateDebut);
    END */$$


DELIMITER ;

/*!50106 set global event_scheduler = 1*/;

/* Event structure for event `date_mise_a_jour` */

/*!50106 DROP EVENT IF EXISTS `date_mise_a_jour`*/;

DELIMITER $$

/*!50106 CREATE DEFINER=`root`@`localhost` EVENT `date_mise_a_jour` ON SCHEDULE EVERY 1 MINUTE STARTS '2013-02-11 14:48:09' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
	    INSERT INTO lesdates(dates) Values(SYSDATE());
	END */$$
DELIMITER ;

/* Event structure for event `update_semaine` */

/*!50106 DROP EVENT IF EXISTS `update_semaine`*/;

DELIMITER $$

/*!50106 CREATE DEFINER=`root`@`localhost` EVENT `update_semaine` ON SCHEDULE EVERY 7 DAY STARTS '2013-02-13 04:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
	   INSERT INTO lesdates(dates) Values(SYSDATE());
	END */$$
DELIMITER ;

/* Function  structure for function  `developpeur_of_projet` */

/*!50003 DROP FUNCTION IF EXISTS `developpeur_of_projet` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `developpeur_of_projet`(nomduprojet varchar(80)) RETURNS int(11)
    READS SQL DATA
BEGIN
declare nbdeveloppeurs int;
select count(matricule) into nbdeveloppeurs 
 from participation_tache where numtache in
(select numtache from tache where codeProjet =
(select codeProjet from projet where nomProjet=nomduprojet));
return nbdeveloppeurs;
    END */$$
DELIMITER ;

/* Function  structure for function  `logiciel_nb_of_projet` */

/*!50003 DROP FUNCTION IF EXISTS `logiciel_nb_of_projet` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `logiciel_nb_of_projet`(nomlogiciel varchar (80)) RETURNS int(11)
    READS SQL DATA
BEGIN
declare nb int;
select count(l.numLogiciel) into nb
 from logiciels_tache lt,logiciel l, tache t, projet p 
where l.numLogiciel = lt.numLogiciel
and  lt.numtache = t.numtache
and t.codeProjet=p.codeProjet
and l.nomLogiciel=nomlogiciel;
return nb;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `deloppeur_tache` */

/*!50003 DROP PROCEDURE IF EXISTS  `deloppeur_tache` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `deloppeur_tache`(in nomduprojet varchar(80))
BEGIN
select d.matricule,d.nom,d.prenom,d.adresse,d.nationalite,d.datenaissance,d.specialite,d.dernier_diplome,d.date_embauche,pt.numtache,t.nomtache
from developpeur d,tache t, participation_tache  pt,projet p
 where d.matricule=pt.matricule 
and pt.numtache=t.numtache and p.codeProjet=t.codeProjet and
p.nomProjet=nomduprojet;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `process_logiciels_for_projet` */

/*!50003 DROP PROCEDURE IF EXISTS  `process_logiciels_for_projet` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `process_logiciels_for_projet`(in nomduprojet varchar(80))
BEGIN
select DISTINCT l.nomlogiciel
from logiciels_tache lt, logiciel l, projet p, tache t
where t.codeProjet=p.codeProjet
and t.numtache=lt.numtache 
and l.numLogiciel=lt.numlogiciel 
and p.nomProjet=nomduprojet;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `projet_and_tache` */

/*!50003 DROP PROCEDURE IF EXISTS  `projet_and_tache` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `projet_and_tache`(in numero_tache int)
BEGIN
select p.nomProjet,t.nomtache from projet p ,tache t 
where p.codeProjet = t.codeProjet
and t.numtache=numero_tache;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
