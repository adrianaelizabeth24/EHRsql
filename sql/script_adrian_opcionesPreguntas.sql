DROP TABLE IF EXISTS `opciones_preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opciones_preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(100) NOT NULL,
  `opcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `opciones_preguntas` WRITE;
/*!40000 ALTER TABLE `opciones_preguntas` DISABLE KEYS */;
INSERT INTO `opciones_preguntas` VALUES 

/* Antecedentes patológicos y no patológicos */

(1,'antecedentes_pat_nopats','Del SNC (No psiquiátricas)'),
(2,'antecedentes_pat_nopats','Trastornos convulsivos'),
(3,'antecedentes_pat_nopats','Respiratorias'),
(4,'antecedentes_pat_nopats','Cardiovasculares'),
(5,'antecedentes_pat_nopats','Hematopoyéticas/linfáticas'),
(6,'antecedentes_pat_nopats','De ojos/oídos/nariz/garganta'),
(7,'antecedentes_pat_nopats','Hepáticas'),
(8,'antecedentes_pat_nopats','Dermatológicas/del tejido conectivo'),
(9,'antecedentes_pat_nopats','Músculo-esqueléticas'),
(10,'antecedentes_pat_nopats','Endocrinas/metabólicas'),
(11,'antecedentes_pat_nopats','Gastrointestinales'),
(12,'antecedentes_pat_nopats','Renales/genitourinarias'),
(13,'antecedentes_pat_nopats','Cáncer'),
(14,'antecedentes_pat_nopats','Alergia o hipersensibilidad a medicamentos'),
(15,'antecedentes_pat_nopats','Intervenciones quirúrgicas mayores'),

(20,'tabaquismo','No fumador'),
(21,'tabaquismo','Ocasional'),
(22,'tabaquismo','Leve'),
(23,'tabaquismo','Moderado'),
(24,'tabaquismo','Alto'),

(30,'bebidas_alcoholicas_frecuencia','Nunca'),
(31,'bebidas_alcoholicas_frecuencia','Una vez al mes o menos'),
(32,'bebidas_alcoholicas_frecuencia','Entre dos y cuatro veces al mes'),
(33,'bebidas_alcoholicas_frecuencia','Entre dos y tres veces por semana'),
(34,'bebidas_alcoholicas_frecuencia','Cuatro o más veces por semana'),

(40,'bebidas_alcoholicas_cantidad','Ninguna'),
(41,'bebidas_alcoholicas_cantidad','1 ó 2'),
(42,'bebidas_alcoholicas_cantidad','3 ó 4'),
(43,'bebidas_alcoholicas_cantidad','5 ó 6'),
(44,'bebidas_alcoholicas_cantidad','7 ó 9'),
(45,'bebidas_alcoholicas_cantidad','10 ó más'),

(51,'substancias','Alcohol'),
(52,'substancias','Anfetaminas'),
(53,'substancias','Marihuana'),
(54,'substancias','Cocaína / Crack'),
(55,'substancias','Alucinógenos'),
(56,'substancias','Inhalantes'),
(57,'substancias','Opiáceos / Heroína'),
(58,'substancias','PCP'),
(59,'substancias','Sedantes, hipnóticos, ansiolíticos'),

/* PEEA */

(60,'ep_actual','Indistinguible del pasado; continuación de una condición de larga evolución'),
(61,'ep_actual','Exacerbación de un trastorno crónico'),
(62,'ep_actual','Recurrencia de una condición previa similar'),
(63,'ep_actual','Significativamente diferente de cualquier condición previa'),
(64,'ep_actual','Primera aparición sin antecedentes de enfermedades psiquiátricas previas'),

(70,'inicio_sintomas','<1 semana'),
(71,'inicio_sintomas','1-4 semana2'),
(72,'inicio_sintomas','1-3 meses'),
(73,'inicio_sintomas','3-6 meses'),
(74,'inicio_sintomas','6-12 meses'),
(75,'inicio_sintomas','1-2 años'),
(76,'inicio_sintomas','1-3 años'),
(77,'inicio_sintomas','4-5 años'),
(78,'inicio_sintomas','6-10 años'),
(79,'inicio_sintomas','>10 años'),

(80,'tratamiento','Antidepresivos Tri o tetracíclicos'),
(81,'tratamiento','ISRS'),
(82,'tratamiento','Inhibidores de la MAO'),
(83,'tratamiento','Benzodiacepinas'),
(84,'tratamiento','Antipsicóticos'),
(85,'tratamiento','ISRSN'),
(86,'tratamiento','Estabilizadores de afecto'),
(87,'tratamiento','Barbitúricos'),
(88,'tratamiento','TEC'),
(89,'tratamiento','Psicoterapia'),
(90,'tratamiento','No sabe')

;
/*!40000 ALTER TABLE `opciones_preguntas` ENABLE KEYS */;
UNLOCK TABLES;
