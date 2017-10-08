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
  `id_paciente` int(11) DEFAULT NULL,
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
  `id` int(11) NOT NULL,
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
  `id_doctor` int(11) NOT NULL,
  `escalas` longtext,
  `hallazgos` longtext,
  `diagnostico_primario` longtext,
  `diagnostico_secundario` longtext,
  `pla_tratamiento` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_paciente_idx` (`id_paciente`),
  KEY `id_doctor_idx` (`id_doctor`),
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
  `id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`),
  KEY `fk_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_pa` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exploracion_fisica`
--

LOCK TABLES `exploracion_fisica` WRITE;
/*!40000 ALTER TABLE `exploracion_fisica` DISABLE KEYS */;
/*!40000 ALTER TABLE `exploracion_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historia_psiquiatrica_fam`
--

DROP TABLE IF EXISTS `historia_psiquiatrica_fam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historia_psiquiatrica_fam` (
  `id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`),
  KEY `fk_paciente_idx` (`id_paciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historia_psiquiatrica_fam`
--

LOCK TABLES `historia_psiquiatrica_fam` WRITE;
/*!40000 ALTER TABLE `historia_psiquiatrica_fam` DISABLE KEYS */;
/*!40000 ALTER TABLE `historia_psiquiatrica_fam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial_tratamiento`
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_pac_idx` (`id_paciente`),
  CONSTRAINT `fk_pac` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial_tratamiento`
--

LOCK TABLES `historial_tratamiento` WRITE;
/*!40000 ALTER TABLE `historial_tratamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial_tratamiento` ENABLE KEYS */;
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
  `nacimiento` datetime NOT NULL,
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (4,'Roberto','Ruiz','Reyes','H','direccion1','8915739','0000-00-00 00:00:00','soltero','ateo','licenciatura','nadie','ninguna','programador',20,'ningina','ninguna',23,'2017-10-06 05:09:25','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'Adrian','Martinez','Gonzalez','H','direccion1','8915739','0000-00-00 00:00:00','soltero','ateo','licenciatura','nadie','ninguna','programador',20,'ningina','ninguna',22,'2017-10-06 05:09:25','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'Javier','Cuellar','Sandoval','H','direccion1','8915739','0000-00-00 00:00:00','soltero','ateo','licenciatura','nadie','ninguna','programador',20,'ningina','ninguna',23,'2017-10-06 05:09:25','0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'Mayra','Ruiz','Rodriguez','M','hjjkl','23456789','4927-03-31 23:59:00','Soltero','budismo','licenciatura','Padres','trabaja','programacion',4,'tequila','que es el vodka',23,'2017-10-06 10:16:56','2017-10-06 10:16:56','0000-00-00 00:00:00'),(8,'Myriam','Gutierrez','Aburto','M','fghjk','567890','1999-04-02 12:59:00','Soltero','cristianismo','licenciatura','Padres','trabaja','desarrollo',9,'vodka','no',20,'2017-10-06 10:21:38','2017-10-06 10:21:38','0000-00-00 00:00:00'),(9,'Juan','Rodriguez','Martinez','H','hjjkl','567890','1983-11-28 23:58:00','Casado','judio','preparatoria','Hermano','vender drogas','nini',5,'bebidas preparadas','no',40,'2017-10-06 10:26:18','2017-10-06 10:26:18','0000-00-00 00:00:00'),(10,'Norma','Hernandez','Flores','O','hjjkl','7890','2016-08-10 10:39:00','Viudo','ateo','secundaria','Parientes','no se','apostar',7,'todo','no',29,'2017-10-06 10:30:35','2017-10-06 10:30:35','0000-00-00 00:00:00');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `id_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_paciente_consulta` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `substancias`
--

LOCK TABLES `substancias` WRITE;
/*!40000 ALTER TABLE `substancias` DISABLE KEYS */;

INSERT INTO `substancias` VALUES 

(1,'Alcohol'),
(2,'Anfetaminas'),
(3,'Marihuana'),
(4,'Cocaína / Crack'),
(5,'Alucinógenos'),
(6,'Inhalantes'),
(7,'Opiáceos / Heroína'),
(8,'PCP'),
(9,'Sedantes, hipnóticos, ansiolíticos')

;
/*!40000 ALTER TABLE `substancias` ENABLE KEYS */;
UNLOCK TABLES;



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

-- Dump completed on 2017-10-06  0:35:17




DROP TABLE IF EXISTS `antecedentes_pat_nopats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antecedentes_pat_nopats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `antecedente` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `antecedentes_pat_nopats` WRITE;
/*!40000 ALTER TABLE `antecedentes_pat_nopats` DISABLE KEYS */;
INSERT INTO `antecedentes_pat_nopats` VALUES 

(1,'Del SNC (No psiquiátricas)'),
(2,'Trastornos convulsivos'),
(3,'Respiratorias'),
(4,'Cardiovasculares'),
(5,'Hematopoyéticas/linfáticas'),
(6,'De ojos/oídos/nariz/garganta'),
(7,'Hepáticas'),
(8,'Dermatológicas/del tejido conectivo'),
(9,'Músculo-esqueléticas'),
(10,'Endocrinas/metabólicas'),
(11,'Gastrointestinales'),
(12,'Renales/genitourinarias'),
(13,'Cáncer'),
(14,'Alergia o hipersensibilidad a medicamentos'),
(15,'Intervenciones quirúrgicas mayores')

;
/*!40000 ALTER TABLE `antecedentes_pat_nopats` ENABLE KEYS */;
UNLOCK TABLES;



DROP TABLE IF EXISTS `tabaquismo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabaquismo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `tabaquismo` WRITE;
/*!40000 ALTER TABLE `tabaquismo` DISABLE KEYS */;
INSERT INTO `tabaquismo` VALUES 

(1,'No fumador'),
(2,'Ocasional'),
(3,'Leve'),
(4,'Moderado'),
(5,'Alto')

;
/*!40000 ALTER TABLE `tabaquismo` ENABLE KEYS */;
UNLOCK TABLES;



DROP TABLE IF EXISTS `bebidas_alcoholicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bebidas_alcoholicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `texto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `bebidas_alcoholicas` WRITE;
/*!40000 ALTER TABLE `bebidas_alcoholicas` DISABLE KEYS */;
INSERT INTO `bebidas_alcoholicas` VALUES 

(0,'frecuencia','Nunca'),
(1,'frecuencia','Una vez al mes o menos'),
(2,'frecuencia','Entre dos y cuatro veces al mes'),
(3,'frecuencia','Entre dos y tres veces por semana'),
(4,'frecuencia','Cuatro o más veces por semana'),

(10,'cantidad','Ninguna'),
(11,'cantidad','1 ó 2'),
(12,'cantidad','3 ó 4'),
(13,'cantidad','5 ó 6'),
(14,'cantidad','7 ó 9'),
(15,'cantidad','10 ó más')

;
/*!40000 ALTER TABLE `bebidas_alcoholicas` ENABLE KEYS */;
UNLOCK TABLES;