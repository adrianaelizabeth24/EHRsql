-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ehr
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.26-MariaDB

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
-- Table structure for table `abuso_de_substancias`
--

DROP TABLE IF EXISTS `abuso_de_substancias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abuso_de_substancias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abuso_de_substancias`
--

LOCK TABLES `abuso_de_substancias` WRITE;
/*!40000 ALTER TABLE `abuso_de_substancias` DISABLE KEYS */;
/*!40000 ALTER TABLE `abuso_de_substancias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antecedentes_ginecobstetricos`
--

DROP TABLE IF EXISTS `antecedentes_ginecobstetricos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antecedentes_ginecobstetricos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `ritmo_cardiaco` int(11) DEFAULT NULL,
  `tension_premenstrual` tinyint(4) DEFAULT NULL,
  `vida_sexual` tinyint(4) DEFAULT NULL,
  `numero_compañeros_sexuales` int(11) DEFAULT NULL,
  `antecedentes_obstreticos` tinyint(4) DEFAULT NULL,
  `embarazo_actual` tinyint(4) DEFAULT NULL,
  `lactancia` tinyint(4) DEFAULT NULL,
  `posibilidad_embarazo` tinyint(4) DEFAULT NULL,
  `histerectomia` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_pacien_idx` (`id_paciente`),
  CONSTRAINT `fk_pacien` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antecedentes_ginecobstetricos`
--

LOCK TABLES `antecedentes_ginecobstetricos` WRITE;
/*!40000 ALTER TABLE `antecedentes_ginecobstetricos` DISABLE KEYS */;
/*!40000 ALTER TABLE `antecedentes_ginecobstetricos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ehr`
--

DROP TABLE IF EXISTS `ehr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ehr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `id_tratamiento` int(11) NOT NULL,
  `numero_de_episodios` int(11) DEFAULT NULL,
  `problemas_psiquiatricos` longtext,
  `tratamientos_anteriores` longtext,
  `antecedentes_psicologicos` longtext,
  `notas_antecedentes` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_p_idx` (`id_paciente`),
  KEY `fk_tratamiento_idx` (`id_tratamiento`),
  CONSTRAINT `fk_p` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tratamiento` FOREIGN KEY (`id_tratamiento`) REFERENCES `historial_tratamiento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ehr`
--

LOCK TABLES `ehr` WRITE;
/*!40000 ALTER TABLE `ehr` DISABLE KEYS */;
/*!40000 ALTER TABLE `ehr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examen_mental`
--

DROP TABLE IF EXISTS `examen_mental`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examen_mental` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `escalas` longtext,
  `hallazgos` longtext,
  `diagnostico_primario` longtext,
  `diagnostico_secundario` longtext,
  `plan_tratamiento` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_paciente_idx` (`id_paciente`),
  KEY `id_paciente` (`id_paciente`),
  KEY `fk_id_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examen_mental`
--

LOCK TABLES `examen_mental` WRITE;
/*!40000 ALTER TABLE `examen_mental` DISABLE KEYS */;
/*!40000 ALTER TABLE `examen_mental` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exploracion_fisica`
--

DROP TABLE IF EXISTS `exploracion_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exploracion_fisica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `condicion_general` mediumtext,
  `piel` mediumtext,
  `cabeza` mediumtext,
  `ojos` mediumtext,
  `oidos_nariz_garganta` mediumtext,
  `cuello_tiroides` mediumtext,
  `pulmones` mediumtext,
  `corazon` mediumtext,
  `gastro` mediumtext,
  `lineaticos` mediumtext,
  `higado` mediumtext,
  `musculo_esqueletico` mediumtext,
  `neurologico` mediumtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_pa` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exploracion_fisica`
--

LOCK TABLES `exploracion_fisica` WRITE;
/*!40000 ALTER TABLE `exploracion_fisica` DISABLE KEYS */;
INSERT INTO `exploracion_fisica` VALUES (2,4,'ponchito es una cosa fea :(','su piel tiene ampollas','está mal de la cabeza','sus ojos tienen lombrices','su garganta está hnachada','padece de tiroides','fuma mucho','su corazón está roto','tiene limbrices en la panza','khéeeeeeee?!','epatitits',NULL,'pobrecito está loquito :(','2017-10-14 07:48:18','2017-10-14 08:24:42','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `exploracion_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historia_psiquiatrica_fam`
--

DROP TABLE IF EXISTS `historia_psiquiatrica_fam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historia_psiquiatrica_fam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `ezquizofrenia` tinyint(4) DEFAULT NULL,
  `bipolar` tinyint(4) DEFAULT NULL,
  `alcoholismo` tinyint(4) DEFAULT NULL,
  `drogas` tinyint(4) DEFAULT NULL,
  `depresion` tinyint(4) DEFAULT NULL,
  `disimia` tinyint(4) DEFAULT NULL,
  `panico` tinyint(4) DEFAULT NULL,
  `agorafobia` tinyint(4) DEFAULT NULL,
  `obsesivo_compulsivo` tinyint(4) DEFAULT NULL,
  `fobia_social` tinyint(4) DEFAULT NULL,
  `fobia_especifica` tinyint(4) DEFAULT NULL,
  `ansiedad` tinyint(4) DEFAULT NULL,
  `demencia` tinyint(4) DEFAULT NULL,
  `retraso_mental` tinyint(4) DEFAULT NULL,
  `transtorno_personalidad` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_paciente_idx` (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historia_psiquiatrica_fam`
--

LOCK TABLES `historia_psiquiatrica_fam` WRITE;
/*!40000 ALTER TABLE `historia_psiquiatrica_fam` DISABLE KEYS */;
INSERT INTO `historia_psiquiatrica_fam` VALUES (2,4,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'2017-10-17 07:01:45','2017-10-17 07:01:45','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `historia_psiquiatrica_fam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historiapsiquiatricaprevia`
--

DROP TABLE IF EXISTS `historial_tratamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historial_tratamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `quien_lo_trato` varchar(70) DEFAULT NULL,
  `hospitalizacion` tinyint(4) DEFAULT NULL,
  `primera_hospitalizacion` date DEFAULT NULL,
  `no_hospitalizaciones` int(11) DEFAULT NULL,
  `duracion_hospitalizacion` varchar(45) DEFAULT NULL,
  `motivo_hospitalizacion` varchar(90) DEFAULT NULL,
  `tratamiento` varchar(45) DEFAULT NULL,
  `id_ehr` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_pac_idx` (`id_paciente`),
  CONSTRAINT `fk_pac` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historiapsiquiatricaprevia`
--

LOCK TABLES `historial_tratamiento` WRITE;
/*!40000 ALTER TABLE `historiapsiquiatricaprevia` DISABLE KEYS */;
INSERT INTO `historial_tratamiento` VALUES (1,4,'nadie por que es tan feo que asust+o a todos',1,'2017-10-03',4,'5','por que es feo','cirugia plastica',0,'2017-10-19 21:36:28','2017-10-19 21:43:29','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `historiapsiquiatricaprevia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NOT NULL,
  `sexo` char(1) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `nacimiento` date NOT NULL,
  `estado_civil` varchar(45) NOT NULL,
  `religion` varchar(45) NOT NULL,
  `escolaridad` varchar(45) NOT NULL,
  `sustento` varchar(45) NOT NULL,
  `ocupacion_sustento` varchar(45) DEFAULT NULL,
  `ocupacion_paciente` varchar(45) DEFAULT NULL,
  `cafe_te_numero_tasas` int(11) NOT NULL,
  `bebidas_alcoholicas` varchar(45) DEFAULT NULL,
  `dudas_alcoholismo` varchar(45) DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `id_exploracion_fisica` int(11) DEFAULT '0',
  `id_examen_mental` int(11) DEFAULT '0',
  `id_historia_psiquiatrica_fam` int(11) DEFAULT '0',
  `id_historial_tratamiento` int(11) DEFAULT '0',
  `id_antecedentes_ginecobstetricos` int(11) DEFAULT '0',
  `id_ehr` int(11) DEFAULT '0',
  `id_reporte_consulta` int(11) DEFAULT '0',
  `id_abuso_de_substancias` int(11) DEFAULT '0',
  `id_peea` int(11) DEFAULT '0',
  `id_pat_nopat` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (4,'Roberto','Ruiz','Reyes','H','direccion1','8915739','0000-00-00','soltero','ateo','licenciatura','Padres','ninguna','programador',20,'ningina','ninguna',23,2,0,2,1,0,0,0,0,'2017-10-06 05:09:25','2017-10-23 00:50:40','0000-00-00 00:00:00'),(5,'Adrian','Martinez','Gonzalez','H','direccion1','8915739','0000-00-00','soltero','ateo','licenciatura','Padres','ninguna','programador',20,'ningina','ninguna',22,0,0,0,0,0,0,0,0,'2017-10-06 05:09:25','2017-10-14 08:11:14','0000-00-00 00:00:00'),(6,'Javier','Cuellar','Sandoval','H','direccion1','8915739','2017-10-11','Casado','ateo','licenciatura','Igualmente compartido','ninguna','programador',20,'ningina','ninguna',23,0,0,0,0,0,0,0,0,'2017-10-06 05:09:25','2017-10-10 03:31:53','0000-00-00 00:00:00'),(7,'Mayra','Ruiz','Rodriguez','M','hjjkl','23456789','4927-03-31','Soltero','budismo','licenciatura','Padres','trabaja','programacion',4,'tequila','que es el vodka',23,0,0,0,0,0,0,0,0,'2017-10-06 10:16:56','2017-10-06 10:16:56','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte_consulta`
--

DROP TABLE IF EXISTS `reporte_consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte_consulta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `interrogatorio` varchar(200) DEFAULT NULL,
  `motivo` varchar(200) DEFAULT NULL,
  `episodio` tinyint(4) NOT NULL,
  `numero_de_episodios` int(11) DEFAULT NULL,
  `edad_primer_episodio` int(11) DEFAULT NULL,
  `fecha_ultimo_episodio` datetime DEFAULT NULL,
  `tratamiento_actual` varchar(256) DEFAULT NULL,
  `tratamiento_anterior` varchar(200) DEFAULT NULL,
  `id_paciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_paciente_consulta` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte_consulta`
--

LOCK TABLES `reporte_consulta` WRITE;
/*!40000 ALTER TABLE `reporte_consulta` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte_consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `substancia_abusada`
--

DROP TABLE IF EXISTS `substancia_abusada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `substancia_abusada` (
  `id_abuso_de_substancias` int(11) NOT NULL,
  `id_substancia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_abuso_de_substancias`,`id_substancia`),
  KEY `fk_substancia_idx` (`id_substancia`),
  CONSTRAINT `fk_abuso_de_substancia` FOREIGN KEY (`id_abuso_de_substancias`) REFERENCES `abuso_de_substancias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_substancia` FOREIGN KEY (`id_substancia`) REFERENCES `substancias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `substancia_abusada`
--

LOCK TABLES `substancia_abusada` WRITE;
/*!40000 ALTER TABLE `substancia_abusada` DISABLE KEYS */;
/*!40000 ALTER TABLE `substancia_abusada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `substancias`
--

DROP TABLE IF EXISTS `substancias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `substancias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `substancias`
--

LOCK TABLES `substancias` WRITE;
/*!40000 ALTER TABLE `substancias` DISABLE KEYS */;
INSERT INTO `substancias` VALUES (1,'Cocaina','2017-10-23 02:47:54','2017-10-23 02:47:54','0000-00-00 00:00:00'),(2,'Alcohol','2017-10-23 02:48:03','2017-10-23 02:48:03','0000-00-00 00:00:00'),(3,'Marihuana','2017-10-23 02:48:12','2017-10-23 02:48:12','0000-00-00 00:00:00'),(4,'Metanfetamina','2017-10-23 02:48:21','2017-10-23 02:48:21','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `substancias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-22 20:36:48



DROP TABLE IF EXISTS `peea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `ep_actual` mediumtext,
  `epPrevios` mediumtext,
  `edadIni` mediumtext,
  `inicio_sintomas` mediumtext,
  `inicioEpisodio` mediumtext,
  `tratamiento` mediumtext,
  `psicofármacos` mediumtext,

  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_paciente_peea` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;