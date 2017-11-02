DROP TABLE IF EXISTS `pat_nopat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pat_nopat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,

  `id_antecedentes` int(11),

  `antecedentes_notas` mediumtext,

  `tazasCafé` mediumtext,

  `tabaquismo` mediumtext,

  `consumoDiario` mediumtext,

  `añosTabaquismo` mediumtext,
  `edadInicio` mediumtext,
  `edadSuspendió` mediumtext,

  `alcohol_frecuencia` bool,
  `alcohol_cantidad` bool,

  `dejarTomar` bool,
  `formaTomar` bool,
  `tomarMañana` bool,

  `historiaAbuso` bool,
  `dependencia` bool,

  `abusoActual` mediumtext,
  `abusoAnterior` mediumtext,
  `depActual` mediumtext,
  `depAnterior` mediumtext,

  `problemas` mediumtext,

  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',

  PRIMARY KEY (`id`),
  KEY `fk_patnopat_id` (`id_paciente`),
  CONSTRAINT `fk_paciente_pat_nopat` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;



DROP TABLE IF EXISTS `antecedentes_pat_pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antecedentes_pat_pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_paciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',

  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_pat_paciente_idx` (`id_paciente`),
  CONSTRAINT `fk_pat_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;





DROP TABLE IF EXISTS `antecedentes_pat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antecedentes_pat` (

  `id_antecedentes_pat_pacientes` int(11) NOT NULL,
  `id_antecedente` int(11) NOT NULL,

  `valor` mediumtext,
  `detalles` mediumtext,

  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',

  PRIMARY KEY (`id_antecedentes_pat_pacientes`,`id_antecedente`),
  KEY `fk_antecedente_id` (`id_antecedente`),
  CONSTRAINT `fk_antecedentes_pat_pacientes` FOREIGN KEY (`id_antecedentes_pat_pacientes`) REFERENCES `antecedentes_pat_pacientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_antecedente` FOREIGN KEY (`id_antecedente`) REFERENCES `opciones_preguntas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;