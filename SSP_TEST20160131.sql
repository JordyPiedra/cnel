CREATE DATABASE  IF NOT EXISTS `ssp_test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ssp_test`;
-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: ssp_test
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Temporary view structure for view `applicant_resume`
--

DROP TABLE IF EXISTS `applicant_resume`;
/*!50001 DROP VIEW IF EXISTS `applicant_resume`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `applicant_resume` AS SELECT 
 1 AS `ASP_CEDU`,
 1 AS `ASP_NOM1`,
 1 AS `ASP_NOM2`,
 1 AS `ASP_APE1`,
 1 AS `ASP_APE2`,
 1 AS `ASP_DISC`,
 1 AS `ASP_ETNI`,
 1 AS `ASP_ESCI`,
 1 AS `ASP_FENA`,
 1 AS `ASP_GENE`,
 1 AS `ASP_EMAP`,
 1 AS `ASP_EMAI`,
 1 AS `ASP_ESTA`,
 1 AS `ASP_PESO`,
 1 AS `ASP_TEL1`,
 1 AS `ASP_TEL2`,
 1 AS `ASP_TILI`,
 1 AS `ASP_TISA`,
 1 AS `ASP_CAPR`,
 1 AS `ASP_CASE`,
 1 AS `ASP_NCAS`,
 1 AS `ASP_SECT`,
 1 AS `ASP_REFE`,
 1 AS `ASP_R1AP`,
 1 AS `ASP_R1NO`,
 1 AS `ASP_R1TE`,
 1 AS `ASP_R1CO`,
 1 AS `ASP_R2AP`,
 1 AS `ASP_R2NO`,
 1 AS `ASP_R2TE`,
 1 AS `ASP_R2CO`,
 1 AS `ASP_FASE`,
 1 AS `ASP_FK_ENCA`,
 1 AS `ASP_FK_LOCD`,
 1 AS `ASP_FK_LOCN`,
 1 AS `ASP_FCRE`,
 1 AS `ASP_FMOD`,
 1 AS `FAM_CEDU`,
 1 AS `FAM_NOMB`,
 1 AS `FAM_APEL`,
 1 AS `FAM_DIRE`,
 1 AS `FAM_FNAC`,
 1 AS `FAM_FEME`,
 1 AS `FAM_TEL1`,
 1 AS `FAM_TEL2`,
 1 AS `FAM_FK_INST`,
 1 AS `FAM_FK_OFIC`,
 1 AS `FAM_FK_TIFA`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `ssp_area_estudio`
--

DROP TABLE IF EXISTS `ssp_area_estudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_area_estudio` (
  `AES_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `AES_NOMB` varchar(45) NOT NULL COMMENT 'ÁREA ESTUDIO',
  PRIMARY KEY (`AES_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_area_estudio`
--

LOCK TABLES `ssp_area_estudio` WRITE;
/*!40000 ALTER TABLE `ssp_area_estudio` DISABLE KEYS */;
INSERT INTO `ssp_area_estudio` VALUES (1,'Agricultura/Pesca/Ganadería'),(2,'Arte/Diseño/Medios'),(3,'Científico/Investigación'),(4,'Dirección/ Gerencia'),(5,'Economía/Contabilidad'),(6,'Educación Básica/Cursos'),(7,'Educación/Universidad'),(8,'Entretenimiento/Deportes'),(9,'Fabricación'),(10,'Finanzas/ Banca'),(11,'Gobierno'),(12,'Hotelería/Turismo'),(13,'Informática hardware'),(14,'Informática software'),(15,'Informática/Telecomunicaciones'),(16,'Ingeniería/Técnico'),(17,'Internet'),(18,'Legal/ Asesoría'),(19,'Marketing/Ventas'),(20,'Materia prima'),(21,'Medicina/Salud'),(22,'Recursos Humanos/Personal'),(23,'Sin Área de Estudio'),(24,'Ventas al consumidor');
/*!40000 ALTER TABLE `ssp_area_estudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_area_trabajo`
--

DROP TABLE IF EXISTS `ssp_area_trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_area_trabajo` (
  `ATR_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `ATR_NOMB` varchar(45) NOT NULL COMMENT 'ÁREA TRABAJO',
  PRIMARY KEY (`ATR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_area_trabajo`
--

LOCK TABLES `ssp_area_trabajo` WRITE;
/*!40000 ALTER TABLE `ssp_area_trabajo` DISABLE KEYS */;
INSERT INTO `ssp_area_trabajo` VALUES (1,'Abastecimiento'),(2,'Administración'),(3,'Apoderado Aduanal'),(4,'Arquitectura'),(5,'Asesoría en Comercio Exterior'),(6,'Asesoría Legal Internacional'),(7,'Asistente de Tráfico'),(8,'Auditoría'),(9,'Calidad'),(10,'Call Center'),(11,'Capacitación Comercio Exterior'),(12,'Comercial'),(13,'Comercio exterior'),(14,'Compras'),(15,'Compras internacionales'),(16,'Comunicaciones externas'),(17,'Comunicaciones internas'),(18,'Construcción'),(19,'Consultoría Comercio Ext'),(20,'Contabilidad'),(21,'Control de Gestión'),(22,'Creatividad'),(23,'Dirección'),(24,'Diseño'),(25,'Distribución'),(26,'E-commerce'),(27,'Educación'),(28,'Educación especial'),(29,'Finanzas'),(30,'Finanzas Internacionales'),(31,'Gastronomía'),(32,'Gerencia / Dirección Gerencial'),(33,'Hotelería'),(34,'Idiomas'),(35,'Impuestos'),(36,'Internet'),(37,'Jóvenes Profesionales'),(38,'Laboratorio'),(39,'Legal'),(40,'Logística'),(41,'Mantenimiento'),(42,'Marketing'),(43,'Medios'),(44,'Mercadotécnia Internacional'),(45,'Multimedia'),(46,'Operaciones'),(47,'Pasantías'),(48,'Periodismo'),(49,'Producción'),(50,'Producción e Ingeniería'),(51,'Recepcionista'),(52,'Recursos Humanos'),(53,'Relaciones Públicas'),(54,'Salud'),(55,'Secretaria'),(56,'Sector Público'),(57,'Seguros'),(58,'Soporte Técnico'),(59,'Tecnología'),(60,'Tecnología de la Información'),(61,'Telecomunicaciones'),(62,'Telemarketing'),(63,'Transporte'),(64,'Turismo'),(65,'Urbanismo'),(66,'Ventas'),(67,'Ventas Internacionales');
/*!40000 ALTER TABLE `ssp_area_trabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_aspirante`
--

DROP TABLE IF EXISTS `ssp_aspirante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_aspirante` (
  `ASP_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `ASP_CEDU` varchar(15) NOT NULL COMMENT 'CÉDULA/PASAPORTE',
  `ASP_NOM1` varchar(20) NOT NULL COMMENT 'PRIMER NOMBRE ',
  `ASP_NOM2` varchar(20) DEFAULT NULL COMMENT 'SEGUNDO NOMBRE',
  `ASP_APE1` varchar(20) NOT NULL COMMENT 'PRIMER APELLIDO',
  `ASP_APE2` varchar(20) DEFAULT NULL COMMENT 'SEGUNDO APELLIDO',
  `ASP_DISC` varchar(1) DEFAULT NULL COMMENT 'DISCAPACIDAD:\nS: SI\nN: NO',
  `ASP_ETNI` varchar(1) DEFAULT NULL COMMENT 'ETNIA: A: AFROECUATORIANO/AFRODESCENDIENTE B:BLANCO/A I:INDÍGENA M:MESTIZO/A  O:MONTUBIO/A ',
  `ASP_ESCI` varchar(1) DEFAULT NULL COMMENT 'ESTADO CIVIL: D: DIVORCIADO (A) , S: SOLTERO (A), U: UNIÓN LIBRE, V: VIUDO (A)',
  `ASP_FENA` date DEFAULT NULL COMMENT 'FECHA DE NACIMIENTO',
  `ASP_GENE` varchar(1) DEFAULT NULL COMMENT 'GÉNEROMASCULINO : MFEMENINO : F',
  `ASP_EMAP` varchar(50) NOT NULL COMMENT 'EMAIL PERSONAL',
  `ASP_EMAI` varchar(50) DEFAULT NULL COMMENT 'EMAIL INSTITUCIONAL',
  `ASP_ESTA` float DEFAULT NULL COMMENT 'ESTATURA (METROS)',
  `ASP_PESO` float DEFAULT NULL COMMENT 'PESO (KILOGRAMOS)',
  `ASP_TEL1` varchar(15) DEFAULT NULL COMMENT 'TELÉFONO 1',
  `ASP_TEL2` varchar(15) DEFAULT NULL COMMENT 'TELÉFONO 2',
  `ASP_TILI` varchar(2) DEFAULT NULL COMMENT 'TIPO LICENCIA: A, A1, B, C, C1, D, D1, E, E1, F,G',
  `ASP_TISA` varchar(3) DEFAULT NULL COMMENT 'TIPO SANGRE: A+, AB-, AB+, B-, B+, O-, O+',
  `ASP_CAPR` varchar(75) DEFAULT NULL COMMENT 'CALLE PRINCIPAL',
  `ASP_CASE` varchar(75) DEFAULT NULL COMMENT 'CALLE SECUNDARIA',
  `ASP_NCAS` varchar(45) DEFAULT NULL COMMENT 'NUMERO DE CASA',
  `ASP_SECT` varchar(75) DEFAULT NULL,
  `ASP_REFE` varchar(100) DEFAULT NULL COMMENT 'REFERENCIA DONDE VIVE',
  `ASP_R1AP` varchar(50) DEFAULT NULL COMMENT 'REFERENCIA 1: APELLIDOS',
  `ASP_R1NO` varchar(50) DEFAULT NULL COMMENT 'REFERENCIA 1: NOMBRES',
  `ASP_R1TE` varchar(15) DEFAULT NULL COMMENT 'REFERENCIA 1: TELEFONO',
  `ASP_R1CO` varchar(50) DEFAULT NULL COMMENT 'REFERENCIA 1: CORREO',
  `ASP_R2AP` varchar(50) DEFAULT NULL COMMENT 'REFERENCIA 2: APELLIDOS',
  `ASP_R2NO` varchar(50) DEFAULT NULL COMMENT 'REFERENCIA 2: NOMBRES',
  `ASP_R2TE` varchar(15) DEFAULT NULL COMMENT 'REFERENCIA 2: TELEFONO',
  `ASP_R2CO` varchar(50) DEFAULT NULL COMMENT 'REFERENCIA 2: CORREO',
  `ASP_FASE` varchar(7) DEFAULT NULL COMMENT 'FASE DE SECCIONES',
  `ASP_FK_ENCA` int(2) DEFAULT NULL COMMENT 'ENFERMEDAD CATASTRÓFICA',
  `ASP_FK_LOCD` int(11) DEFAULT NULL COMMENT 'LOCALIDAD DOCIMILIO',
  `ASP_FK_LOCN` int(11) DEFAULT NULL COMMENT 'LOCALIDAD NACIMIENTO',
  `ASP_PASS` varchar(255) NOT NULL,
  `ASP_STAT` varchar(1) NOT NULL DEFAULT 'I' COMMENT 'ESTADO:\nACTIVO: A\nBLOQUEADO: B\nINACTIVO: I\n',
  `ASP_TCOD` varchar(100) DEFAULT NULL COMMENT 'TOKEN CODE',
  `ASP_FCRE` datetime NOT NULL,
  `ASP_FMOD` datetime NOT NULL,
  `ASP_APRO` varchar(1) DEFAULT NULL COMMENT 'S: SI\nN: NO',
  PRIMARY KEY (`ASP_ID`),
  UNIQUE KEY `ASP_EMAP_UNIQUE` (`ASP_EMAP`),
  KEY `ASP_IDX_ENCA` (`ASP_FK_ENCA`),
  KEY `ASP_IDX_LOCN` (`ASP_FK_LOCN`),
  KEY `ASP_IDX_LOCD` (`ASP_FK_LOCD`),
  CONSTRAINT `ASP_FK_ENCA` FOREIGN KEY (`ASP_FK_ENCA`) REFERENCES `ssp_enfermedad_catastrofica` (`ECA_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ASP_FK_LOCD` FOREIGN KEY (`ASP_FK_LOCD`) REFERENCES `ssp_localidad` (`LOC_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ASP_FK_LOCN` FOREIGN KEY (`ASP_FK_LOCN`) REFERENCES `ssp_localidad` (`LOC_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='DATOS DEL ASPIRANTE';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_aspirante`
--

LOCK TABLES `ssp_aspirante` WRITE;
/*!40000 ALTER TABLE `ssp_aspirante` DISABLE KEYS */;
INSERT INTO `ssp_aspirante` VALUES (1,'123456789','JAIME','ANDRÉS','VILCA','HUERA','N','A','S','1993-10-09','M','ja_live@live.com','JAIME_V@OUTLOOK.COM',1.8,80,'CONVENCIONAL','CELULAR','','A+','PRINCIPAL','SECUNDARIA','NCASA','SECTOR','REFERENCIA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,328,220,'$2y$10$zNnIraDw5QIqPUMMEtXBdecajrX3cekAaZJ6Ax5hyb9/Z3ewi3.IG','A',NULL,'2016-01-23 23:01:43','2016-01-31 22:39:14',NULL);
/*!40000 ALTER TABLE `ssp_aspirante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_aspirante_concurso`
--

DROP TABLE IF EXISTS `ssp_aspirante_concurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_aspirante_concurso` (
  `ACO_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `CON_ID` int(11) NOT NULL,
  `ASP_ID` int(11) NOT NULL,
  PRIMARY KEY (`ACO_ID`),
  KEY `fk_SSP_ASPIRANTE_CONCURSO_SSP_BASE_CONCURSO` (`CON_ID`),
  KEY `fk_ssp_aspirante_concurso_ssp_aspirante_idx` (`ASP_ID`),
  CONSTRAINT `fk_SSP_ASPIRANTE_CONCURSO_SSP_BASE_CONCURSO` FOREIGN KEY (`CON_ID`) REFERENCES `ssp_concurso` (`CON_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ssp_aspirante_concurso_ssp_aspirante` FOREIGN KEY (`ASP_ID`) REFERENCES `ssp_aspirante` (`ASP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_aspirante_concurso`
--

LOCK TABLES `ssp_aspirante_concurso` WRITE;
/*!40000 ALTER TABLE `ssp_aspirante_concurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_aspirante_concurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_aspirante_discapacidad`
--

DROP TABLE IF EXISTS `ssp_aspirante_discapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_aspirante_discapacidad` (
  `ADI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ADI_FK_ASID` int(11) DEFAULT NULL COMMENT 'ID ASPIRANTE',
  `ADI_FK_TIDI` int(2) DEFAULT NULL COMMENT 'ID TIPO DISCAPACIDAD',
  `ADI_CONA` varchar(45) DEFAULT NULL COMMENT 'CARNET CONADIS',
  `ADI_PORC` int(3) DEFAULT NULL COMMENT 'PORCENTAJE DISCAPACIDAD',
  `ADI_FK_TIFA` int(2) DEFAULT NULL COMMENT 'TIPO DE FAMILIAR (SUSTITUTO)',
  PRIMARY KEY (`ADI_ID`),
  KEY `ADI_IDX_TIDI` (`ADI_FK_TIDI`),
  KEY `ADI_IDX_ASID` (`ADI_FK_ASID`),
  KEY `ADI_IDX_TIFA` (`ADI_FK_TIFA`),
  CONSTRAINT `ADI_FK_ASID` FOREIGN KEY (`ADI_FK_ASID`) REFERENCES `ssp_aspirante` (`ASP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ADI_FK_TIDI` FOREIGN KEY (`ADI_FK_TIDI`) REFERENCES `ssp_tipo_discapacidad` (`TDI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ADI_FK_TIFA` FOREIGN KEY (`ADI_FK_TIFA`) REFERENCES `ssp_tipo_familiar` (`TFA_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_aspirante_discapacidad`
--

LOCK TABLES `ssp_aspirante_discapacidad` WRITE;
/*!40000 ALTER TABLE `ssp_aspirante_discapacidad` DISABLE KEYS */;
INSERT INTO `ssp_aspirante_discapacidad` VALUES (1,1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ssp_aspirante_discapacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_aspirante_idioma`
--

DROP TABLE IF EXISTS `ssp_aspirante_idioma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_aspirante_idioma` (
  `AID_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA ',
  `AID_NESC` varchar(1) NOT NULL COMMENT 'NIVEL ESCRITO',
  `AID_NHAB` varchar(1) NOT NULL COMMENT 'NIVEL HABLADO',
  `AID_FK_ASPI` int(11) NOT NULL COMMENT 'ID ASPIRANTE',
  `AID_FK_IDIO` int(11) NOT NULL COMMENT 'ID IDIOMA',
  PRIMARY KEY (`AID_ID`),
  KEY `AID_IDX_ASPI` (`AID_FK_ASPI`),
  KEY `AID_IDX_IDIO` (`AID_FK_IDIO`),
  CONSTRAINT `AID_FK_ASPI` FOREIGN KEY (`AID_FK_ASPI`) REFERENCES `ssp_aspirante` (`ASP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `AID_FK_IDIO` FOREIGN KEY (`AID_FK_IDIO`) REFERENCES `ssp_idiomas` (`IDI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_aspirante_idioma`
--

LOCK TABLES `ssp_aspirante_idioma` WRITE;
/*!40000 ALTER TABLE `ssp_aspirante_idioma` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_aspirante_idioma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_base_concurso`
--

DROP TABLE IF EXISTS `ssp_base_concurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_base_concurso` (
  `BCO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CON_ID` int(11) NOT NULL COMMENT 'BASE CONCURSO',
  `FMO_ID` int(11) NOT NULL COMMENT 'FASE MÉRITO OPOSICIÓN',
  `BCO_VALO` float NOT NULL COMMENT 'VALOR',
  `BCO_FINI` date DEFAULT NULL,
  `BCO_FFIN` date DEFAULT NULL,
  PRIMARY KEY (`BCO_ID`),
  KEY `BCO_IDX_FAMO` (`FMO_ID`),
  KEY `BCO_IDX_CONC` (`CON_ID`),
  CONSTRAINT `BCO_FK_CONC` FOREIGN KEY (`CON_ID`) REFERENCES `ssp_concurso` (`CON_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `BCO_FK_FAMO` FOREIGN KEY (`FMO_ID`) REFERENCES `ssp_fase_mo` (`FMO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_base_concurso`
--

LOCK TABLES `ssp_base_concurso` WRITE;
/*!40000 ALTER TABLE `ssp_base_concurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_base_concurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_calificacion_fase`
--

DROP TABLE IF EXISTS `ssp_calificacion_fase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_calificacion_fase` (
  `CFA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CFA_FK_POCO` int(11) NOT NULL COMMENT 'POSTULANTE CONCURSO',
  `CFA_FK_FASE` int(11) NOT NULL COMMENT 'FASE_CONCURSO',
  `CFA_VALO` float DEFAULT NULL COMMENT 'CALIFICACIÓN',
  `CFA_PATH` varchar(100) DEFAULT NULL COMMENT 'ADJUNTO',
  PRIMARY KEY (`CFA_ID`),
  KEY `fk_SSP_CALIFICACION_FASE_SSP_POSTULANTE_CONCURSO1_idx` (`CFA_FK_POCO`),
  KEY `fk_SSP_CALIFICACION_FASE_SSP_FASE_MO1_idx` (`CFA_FK_FASE`),
  CONSTRAINT `fk_SSP_CALIFICACION_FASE_SSP_FASE_MO1` FOREIGN KEY (`CFA_FK_FASE`) REFERENCES `ssp_fase_mo` (`FMO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_SSP_CALIFICACION_FASE_SSP_POSTULANTE_CONCURSO1` FOREIGN KEY (`CFA_FK_POCO`) REFERENCES `ssp_postulante_concurso` (`PCO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_calificacion_fase`
--

LOCK TABLES `ssp_calificacion_fase` WRITE;
/*!40000 ALTER TABLE `ssp_calificacion_fase` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_calificacion_fase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_concurso`
--

DROP TABLE IF EXISTS `ssp_concurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_concurso` (
  `CON_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `CON_NOMB` varchar(45) DEFAULT NULL,
  `CON_DESC` varchar(200) DEFAULT NULL,
  `CON_VALM` float DEFAULT NULL COMMENT 'VALOR MÉRITO INICIA',
  `CON_VALO` float DEFAULT NULL COMMENT 'VALOR OPOSICIÓN INICIA',
  `CON_CODI` varchar(45) DEFAULT NULL COMMENT 'CODIGO CONCURSO',
  `PTR_ID` int(11) NOT NULL COMMENT 'PUESTO TRABAJO',
  `CON_NVAC` int(11) DEFAULT NULL COMMENT 'NUMERO DE VACANTES',
  `CON_FCRE` datetime DEFAULT NULL COMMENT 'FECHA DE CRACIÓN',
  `CON_NCRE` varchar(45) DEFAULT NULL,
  `CON_FEDI` datetime DEFAULT NULL,
  `CON_NEDI` varchar(45) DEFAULT NULL,
  `CON_ESTA` varchar(1) DEFAULT NULL COMMENT 'ESTADO\nC: CREADO\nI: INICIADO //LISTO PARA RECLUTAMINTO\nP : EN PROCESO\nF: FINALIZADO\n',
  PRIMARY KEY (`CON_ID`),
  KEY `CON_IDX_PUES` (`PTR_ID`),
  CONSTRAINT `CON_FK_PUES` FOREIGN KEY (`PTR_ID`) REFERENCES `ssp_puesto_trabajo` (`PTR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_concurso`
--

LOCK TABLES `ssp_concurso` WRITE;
/*!40000 ALTER TABLE `ssp_concurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_concurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_concurso_perfil`
--

DROP TABLE IF EXISTS `ssp_concurso_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_concurso_perfil` (
  `CPE_ID` int(11) NOT NULL,
  `CPE_NOMB` varchar(45) DEFAULT NULL,
  `CPE_OBSE` varchar(200) DEFAULT NULL COMMENT 'OBSERVACIÓN REQUERIMIENTO',
  PRIMARY KEY (`CPE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_concurso_perfil`
--

LOCK TABLES `ssp_concurso_perfil` WRITE;
/*!40000 ALTER TABLE `ssp_concurso_perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_concurso_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_curso`
--

DROP TABLE IF EXISTS `ssp_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_curso` (
  `CUR_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `CUR_TITU` varchar(150) NOT NULL COMMENT 'TITULO CURSO',
  `CUR_TCER` varchar(1) NOT NULL COMMENT 'TIPO CERTIFICADO:\nAPROBACIÓN: A\nASISTENCIA: S',
  `CUR_ECAP` varchar(100) NOT NULL COMMENT 'EMPRESA CAPACITACIÓN',
  `CUR_DHOR` int(5) NOT NULL COMMENT 'DURACIÓN (HORAS)',
  `CUR_FICA` date NOT NULL COMMENT 'FECHA INICIAL CAPACITACIÓN',
  `CUR_FFCA` date NOT NULL COMMENT 'FECHA FIN CAPACITACIÓN',
  `CUR_FK_TEVE` int(11) NOT NULL COMMENT 'TIPO EVENTO',
  `CUR_FK_AEST` int(11) NOT NULL COMMENT 'AREA ESTUDIO',
  `CUR_FK_ASPI` int(11) NOT NULL COMMENT 'ID ASPIRANTE',
  `CUR_PATH` varchar(100) NOT NULL COMMENT 'RUTA ARCHIVO',
  PRIMARY KEY (`CUR_ID`),
  KEY `CUR_IDX_TEVE` (`CUR_FK_TEVE`),
  KEY `CUR_IDX_AEST` (`CUR_FK_AEST`),
  KEY `CUR_IDX_ASPI` (`CUR_FK_ASPI`),
  CONSTRAINT `CUR_FK_AEST` FOREIGN KEY (`CUR_FK_AEST`) REFERENCES `ssp_area_estudio` (`AES_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CUR_FK_ASPI` FOREIGN KEY (`CUR_FK_ASPI`) REFERENCES `ssp_aspirante` (`ASP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CUR_FK_TEVE` FOREIGN KEY (`CUR_FK_TEVE`) REFERENCES `ssp_tipo_evento` (`TEV_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_curso`
--

LOCK TABLES `ssp_curso` WRITE;
/*!40000 ALTER TABLE `ssp_curso` DISABLE KEYS */;
INSERT INTO `ssp_curso` VALUES (2,'PASANTIA2015','A','INSTITUCION',50,'2010-11-11','2010-11-30',5,3,1,''),(3,'564565','A','5',30,'1993-02-10','1993-02-11',3,18,2,'');
/*!40000 ALTER TABLE `ssp_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_enfermedad_catastrofica`
--

DROP TABLE IF EXISTS `ssp_enfermedad_catastrofica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_enfermedad_catastrofica` (
  `ECA_ID` int(2) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `ECA_NOMB` varchar(100) NOT NULL COMMENT 'ENFERMEDAD CATASTROFICA',
  PRIMARY KEY (`ECA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_enfermedad_catastrofica`
--

LOCK TABLES `ssp_enfermedad_catastrofica` WRITE;
/*!40000 ALTER TABLE `ssp_enfermedad_catastrofica` DISABLE KEYS */;
INSERT INTO `ssp_enfermedad_catastrofica` VALUES (1,'ANEURISMA TORACO-ABDOMINALES'),(2,'CANCER (DE TODO TIPO)'),(3,'INSUFICIENCIA RENAL CRÓNICA'),(4,'MALFORMACIONES ARTERIOVENOSAS CEREBRALES'),(5,'MALFORMACIONES CONGÉNITAS DE CORAZÓN (DE CUALQUIER TIPO)'),(6,'SECUELAS DE QUEMADURAS GRAVES'),(7,'TRANSPLANTES DE ÓRGANOS (RIÑÓN, MEDULA ÓSEA, HÍGADO)'),(8,'TUMOR CEREBRAL (DE CUALQUIER TIPO)');
/*!40000 ALTER TABLE `ssp_enfermedad_catastrofica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_estado_concurso`
--

DROP TABLE IF EXISTS `ssp_estado_concurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_estado_concurso` (
  `ECO_ID` int(11) NOT NULL,
  `ECO_NOMB` varchar(45) DEFAULT NULL COMMENT 'ESTADO DEL CONCURSO\nCREADO: C\nINCIADO: I\nRECLUTAMIENTO: R\nEXAMENES: E\nRESULTADOS: S\nFINALIZADO: F\n',
  PRIMARY KEY (`ECO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_estado_concurso`
--

LOCK TABLES `ssp_estado_concurso` WRITE;
/*!40000 ALTER TABLE `ssp_estado_concurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_estado_concurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_etapa_estado_concurso`
--

DROP TABLE IF EXISTS `ssp_etapa_estado_concurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_etapa_estado_concurso` (
  `EEC_FK_ESCO` int(11) NOT NULL COMMENT 'ESTADO CONCURSO',
  `EEC_FK_CONC` int(11) NOT NULL COMMENT 'BASE CONCURSO',
  `EEC_PATH` varchar(100) DEFAULT NULL,
  `EEC_FCRE` datetime DEFAULT NULL COMMENT 'FECHA CREACION',
  `EEC_OBSE` varchar(200) DEFAULT NULL COMMENT 'OBSERVACIÓN',
  PRIMARY KEY (`EEC_FK_ESCO`,`EEC_FK_CONC`),
  KEY `EEC_IDX_CONC` (`EEC_FK_CONC`),
  KEY `EEC_IDX_ESCO` (`EEC_FK_ESCO`),
  CONSTRAINT `EEC_FK_CONC` FOREIGN KEY (`EEC_FK_CONC`) REFERENCES `ssp_concurso` (`CON_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `EEC_FK_ESCO` FOREIGN KEY (`EEC_FK_ESCO`) REFERENCES `ssp_estado_concurso` (`ECO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ETAPAS, ESTADOS DEL CONCURSO';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_etapa_estado_concurso`
--

LOCK TABLES `ssp_etapa_estado_concurso` WRITE;
/*!40000 ALTER TABLE `ssp_etapa_estado_concurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_etapa_estado_concurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_experiencia_laboral`
--

DROP TABLE IF EXISTS `ssp_experiencia_laboral`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_experiencia_laboral` (
  `ELA_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `ELA_NEMP` varchar(100) NOT NULL COMMENT 'EMPRESA TRABAJO',
  `ELA_CARG` varchar(50) DEFAULT NULL COMMENT 'CARGO',
  `ELA_RELA` varchar(40) DEFAULT NULL COMMENT 'REFERENCIA LABORAL',
  `ELA_TELE` varchar(50) DEFAULT NULL COMMENT 'TELÉFONO EMPRESA',
  `ELA_SECT` varchar(1) NOT NULL COMMENT 'SECTOR:\nPÚBLICO: P\nPRIVADO: R',
  `ELA_FINI` date DEFAULT NULL,
  `ELA_FFIN` date DEFAULT NULL,
  `ELA_FK_ARTR` int(11) NOT NULL COMMENT 'ÁREA DE TRABAJO',
  `ELA_FK_ASPI` int(11) NOT NULL,
  PRIMARY KEY (`ELA_ID`),
  KEY `ELA_IDX_ARTR` (`ELA_FK_ARTR`),
  KEY `ELA_IDX_ASPI` (`ELA_FK_ASPI`),
  CONSTRAINT `ELA_FK_ARTR` FOREIGN KEY (`ELA_FK_ARTR`) REFERENCES `ssp_area_trabajo` (`ATR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ELA_FK_ASPI` FOREIGN KEY (`ELA_FK_ASPI`) REFERENCES `ssp_aspirante` (`ASP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_experiencia_laboral`
--

LOCK TABLES `ssp_experiencia_laboral` WRITE;
/*!40000 ALTER TABLE `ssp_experiencia_laboral` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_experiencia_laboral` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_familiar`
--

DROP TABLE IF EXISTS `ssp_familiar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_familiar` (
  `FAM_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `FAM_CEDU` varchar(15) NOT NULL COMMENT 'CEDULA/PASAPORTE',
  `FAM_NOMB` varchar(45) NOT NULL COMMENT 'NOMBRES',
  `FAM_APEL` varchar(45) NOT NULL COMMENT 'APELLIDOS',
  `FAM_DIRE` varchar(100) DEFAULT NULL COMMENT 'DIRECCION',
  `FAM_FNAC` date NOT NULL,
  `FAM_FEME` varchar(1) NOT NULL COMMENT 'FAMILIAR EN CASO DE EMERGENCIA\nSI : S\nNO :N',
  `FAM_TEL1` varchar(15) DEFAULT NULL COMMENT 'TELEFONO 1',
  `FAM_TEL2` varchar(15) DEFAULT NULL COMMENT 'TELEFONO 2',
  `FAM_FK_ASPI` int(11) NOT NULL COMMENT 'ASPIRANTE',
  `FAM_FK_INST` int(11) NOT NULL COMMENT 'INSTRUCCION',
  `FAM_FK_OFIC` int(11) NOT NULL COMMENT 'OFICIO',
  `FAM_FK_TIFA` int(2) NOT NULL COMMENT 'TIPO FAMILIAR',
  PRIMARY KEY (`FAM_ID`),
  KEY `FAM_IDX_OFIC` (`FAM_FK_OFIC`),
  KEY `FAM_IDX_INST` (`FAM_FK_INST`),
  KEY `FAM_IDX_ASPI` (`FAM_FK_ASPI`),
  KEY `FAM_IDX_TIFA` (`FAM_FK_TIFA`),
  CONSTRAINT `FAM_FK_ASPI` FOREIGN KEY (`FAM_FK_ASPI`) REFERENCES `ssp_aspirante` (`ASP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FAM_FK_INST` FOREIGN KEY (`FAM_FK_INST`) REFERENCES `ssp_instruccion` (`INS_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FAM_FK_OFIC` FOREIGN KEY (`FAM_FK_OFIC`) REFERENCES `ssp_oficio` (`OFI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FAM_FK_TIFA` FOREIGN KEY (`FAM_FK_TIFA`) REFERENCES `ssp_tipo_familiar` (`TFA_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_familiar`
--

LOCK TABLES `ssp_familiar` WRITE;
/*!40000 ALTER TABLE `ssp_familiar` DISABLE KEYS */;
INSERT INTO `ssp_familiar` VALUES (1,'12346','andres','jaime','DIRECCION','1993-01-02','S','tel1','tel2',1,1,16,1),(2,'8888888','juan','rodriguez','direccion','0000-00-00','S','tel1','tel2',1,1,7,1);
/*!40000 ALTER TABLE `ssp_familiar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_fase_mo`
--

DROP TABLE IF EXISTS `ssp_fase_mo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_fase_mo` (
  `FMO_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `FMO_NOMB` varchar(45) NOT NULL COMMENT 'DESCRIPCIÓN',
  `FMO_TFAS` varchar(1) NOT NULL COMMENT 'TIPO FASE:\nMÉRITO: M\nOPOSICIÓN: O',
  `FMO_TDES` varchar(1) NOT NULL COMMENT 'TIPO DESGLOSE:\nENTREVISTA: E\nPRUEBA: P \nREQUERIMIENTO: R\n',
  PRIMARY KEY (`FMO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='FASES DE MÉRITO Y OPOSICIÓN';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_fase_mo`
--

LOCK TABLES `ssp_fase_mo` WRITE;
/*!40000 ALTER TABLE `ssp_fase_mo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_fase_mo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_idiomas`
--

DROP TABLE IF EXISTS `ssp_idiomas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_idiomas` (
  `IDI_ID` int(11) NOT NULL,
  `IDI_NOMB` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IDI_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_idiomas`
--

LOCK TABLES `ssp_idiomas` WRITE;
/*!40000 ALTER TABLE `ssp_idiomas` DISABLE KEYS */;
INSERT INTO `ssp_idiomas` VALUES (1,'ACHUAR'),(2,'ALEMÁN'),(3,'ÁRABE'),(4,'CHINO (MANDARÍN)'),(5,'ESPAÑOL'),(6,'FRANCÉS'),(7,'GRIEGO'),(8,'HEBREO'),(9,'INGLÉS'),(10,'ITALIANO'),(11,'JAPONÉS'),(12,'KICHUA'),(13,'LETÓN'),(14,'LITUANO'),(15,'MALTÉS'),(16,'NEERLANDÉS'),(17,'NORUEGO'),(18,'POLACO'),(19,'PORTUGUÉS'),(20,'RUMANO'),(21,'RUSO'),(22,'SEÑAS'),(23,'SERBIO'),(24,'SHUAR'),(25,'SUECO'),(26,'TAGALO'),(27,'TAILANDÉS'),(28,'THAI'),(29,'TSAFIQUI'),(30,'TURCO'),(31,'UCRANIANO'),(32,'VIETNAMITA'),(33,'WAHO'),(34,'WAHORANI');
/*!40000 ALTER TABLE `ssp_idiomas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_institucion`
--

DROP TABLE IF EXISTS `ssp_institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_institucion` (
  `INS_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `INS_NOMB` varchar(150) NOT NULL,
  PRIMARY KEY (`INS_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_institucion`
--

LOCK TABLES `ssp_institucion` WRITE;
/*!40000 ALTER TABLE `ssp_institucion` DISABLE KEYS */;
INSERT INTO `ssp_institucion` VALUES (1,'ESCUELA POLITECNICA DEL EJERCITO'),(2,'ESCUELA POLITECNICA JAVERIANA DEL ECUADOR'),(3,'ESCUELA POLITECNICA NACIONAL'),(4,'ESCUELA SUPERIOR POLITECNICA AGROPECUARIA DE MANABI'),(5,'ESCUELA SUPERIOR POLITECNICA DE CHIMBORAZO'),(6,'ESCUELA SUPERIOR POLITECNICA DEL LITORAL'),(7,'ESCUELA SUPERIOR POLITECNICA ECOLOGICA AMAZONICA'),(8,'ESCUELA SUPERIOR POLITECNICA ECOLOGICA PROFESOR SERVIO TULIO MONTERO LUDEÑA'),(9,'FACULTAD LATINOAMERICANA DE CIENCIAS SOCIALES'),(10,'INSTITUTO DE ALTOS ESTUDIOS NACIONALES'),(11,'OTRA'),(12,'PONTIFICIA UNIVERSIDAD CATOLICA DEL ECUADOR'),(13,'UNIVERSIDAD AGRARIA DEL ECUADOR'),(14,'UNIVERSIDAD ALFREDO PEREZ GUERRERO'),(15,'UNIVERSIDAD ANDINA SIMON BOLIVAR'),(16,'UNIVERSIDAD AUTONOMA DE QUITO'),(17,'UNIVERSIDAD CASA GRANDE'),(18,'UNIVERSIDAD CATOLICA DE CUENCA'),(19,'UNIVERSIDAD CATOLICA DE SANTIAGO DE GUAYAQUIL'),(20,'UNIVERSIDAD CENTRAL DEL ECUADOR'),(21,'UNIVERSIDAD COOPERATIVA DE COLOMBIA DEL ECUADOR (EXTINGUIDA MEDIANTE MANDATO CONSTITUYENTE No 14 de fecha 22Y07Y2008)'),(22,'UNIVERSIDAD CRISTIANA LATINOAMERICANA'),(23,'UNIVERSIDAD DE CUENCA'),(24,'UNIVERSIDAD DE ESPECIALIDADES TURISTICAS'),(25,'UNIVERSIDAD DE GUAYAQUIL'),(26,'UNIVERSIDAD DE LAS AMERICAS'),(27,'UNIVERSIDAD DEL AZUAY'),(28,'UNIVERSIDAD DE LOS HEMISFERIOS'),(29,'UNIVERSIDAD DEL PACIFICO ESCUELA DE NEGOCIOS'),(30,'UNIVERSIDAD DE OTAVALO'),(31,'UNIVERSIDAD ESTATAL AMAZONICA'),(32,'UNIVERSIDAD ESTATAL DE BOLIVAR'),(33,'UNIVERSIDAD ESTATAL DEL SUR DE MANABI'),(34,'UNIVERSIDAD ESTATAL DE MILAGRO'),(35,'UNIVERSIDAD ESTATAL PENINSULA DE SANTA ELENA'),(36,'UNIVERSIDAD IBEROAMERICANA DEL ECUADOR'),(37,'UNIVERSIDAD INTERAMERICANA DEL ECUADOR'),(38,'UNIVERSIDAD INTERNACIONAL DEL ECUADOR'),(39,'UNIVERSIDAD JEFFERSON (SUSPENDIDA MEDIANTE RESOLUCION RCPS20No33108 del 28Y08Y2008 DEL PLENO DEL CONESUP)'),(40,'UNIVERSIDAD LAICA ELOY ALFARO DE MANABI'),(41,'UNIVERSIDAD LAICA VICENTE ROCAFUERTE DE GUAYAQUIL'),(42,'UNIVERSIDAD METROPOLITANA'),(43,'UNIVERSIDAD NACIONAL DE CHIMBORAZO'),(44,'UNIVERSIDAD NACIONAL DE LOJA'),(45,'UNIVERSIDAD NAVAL COMANDANTE RAFAEL MORAN VALVERDE'),(46,'UNIVERSIDAD OG MANDINO'),(47,'UNIVERSIDAD PANAMERICANA DE CUENCA'),(48,'UNIVERSIDAD PARTICULAR DE ESPECIALIDADES ESPIRITU SANTO'),(49,'UNIVERSIDAD PARTICULAR INTERNACIONAL SEK'),(50,'UNIVERSIDAD PARTICULAR SAN GREGORIO DE PORTOVIEJO'),(51,'UNIVERSIDAD POLITECNICA SALESIANA'),(52,'UNIVERSIDAD REGIONAL AUTONOMA DE LOS ANDES'),(53,'UNIVERSIDAD SAN FRANCISCO DE QUITO'),(54,'UNIVERSIDAD TECNICA DE AMBATO'),(55,'UNIVERSIDAD TECNICA DE BABAHOYO'),(56,'UNIVERSIDAD TECNICA DE COTOPAXI'),(57,'UNIVERSIDAD TECNICA DEL NORTE'),(58,'UNIVERSIDAD TECNICA DE MACHALA'),(59,'UNIVERSIDAD TECNICA DE MANABI'),(60,'UNIVERSIDAD TECNICA ESTATAL DE QUEVEDO'),(61,'UNIVERSIDAD TECNICA LUIS VARGAS TORRES DE ESMERALDAS'),(62,'UNIVERSIDAD TECNICA PARTICULAR DE CIENCIAS AMBIENTALES JOSE PERALTA'),(63,'UNIVERSIDAD TECNICA PARTICULAR DE LOJA'),(64,'UNIVERSIDAD TECNOLOGICA AMERICA'),(65,'UNIVERSIDAD TECNOLOGICA ECOTEC'),(66,'UNIVERSIDAD TECNOLOGICA EMPRESARIAL DE GUAYAQUIL'),(67,'UNIVERSIDAD TECNOLOGICA EQUINOCCIAL'),(68,'UNIVERSIDAD TECNOLOGICA INDOAMERICA'),(69,'UNIVERSIDAD TECNOLOGICA ISRAEL'),(70,'UNIVERSIDAD TECNOLOGICA SAN ANTONIO DE MACHALA');
/*!40000 ALTER TABLE `ssp_institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_instruccion`
--

DROP TABLE IF EXISTS `ssp_instruccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_instruccion` (
  `INS_ID` int(11) NOT NULL COMMENT 'CLAVE PRIMARIA',
  `INS_NOMB` varchar(45) NOT NULL COMMENT 'INSTRUCCION',
  PRIMARY KEY (`INS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_instruccion`
--

LOCK TABLES `ssp_instruccion` WRITE;
/*!40000 ALTER TABLE `ssp_instruccion` DISABLE KEYS */;
INSERT INTO `ssp_instruccion` VALUES (1,'PRIMARIA'),(2,'SECUNDARIA'),(3,'TECNICO SUPERIOR'),(4,'ESTUDIANTE UNIVERSITARIO'),(5,'TERCER NIVEL'),(6,'CUARTO NIVEL');
/*!40000 ALTER TABLE `ssp_instruccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_localidad`
--

DROP TABLE IF EXISTS `ssp_localidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_localidad` (
  `LOC_ID` int(11) NOT NULL,
  `LOC_NOMB` varchar(45) DEFAULT NULL,
  `LOC_PADR` int(11) DEFAULT NULL,
  `LOC_FK_LOID` int(11) NOT NULL,
  PRIMARY KEY (`LOC_ID`),
  KEY `LOC_IDX_PADR` (`LOC_PADR`),
  KEY `LOC_IDX_LOID` (`LOC_FK_LOID`),
  CONSTRAINT `LOC_FK_LOID` FOREIGN KEY (`LOC_FK_LOID`) REFERENCES `ssp_tipo_localidad` (`TLO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `LOC_FK_PADR` FOREIGN KEY (`LOC_PADR`) REFERENCES `ssp_localidad` (`LOC_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_localidad`
--

LOCK TABLES `ssp_localidad` WRITE;
/*!40000 ALTER TABLE `ssp_localidad` DISABLE KEYS */;
INSERT INTO `ssp_localidad` VALUES (1,'ECUADOR',NULL,1),(2,'AZUAY',1,2),(3,'BOLIVAR',1,2),(4,'CARCHI',1,2),(5,'CAÑAR',1,2),(6,'CHIMBORAZO',1,2),(7,'COTOPAXI',1,2),(8,'EL ORO',1,2),(9,'ESMERALDAS',1,2),(10,'GALÁPAGOS',1,2),(11,'GUAYAS',1,2),(12,'IMBABURA',1,2),(13,'LOJA',1,2),(14,'LOS RIOS',1,2),(15,'MANABI',1,2),(16,'MORONA SANTIAGO',1,2),(17,'NAPO',1,2),(18,'ORELLANA',1,2),(19,'PASTAZA',1,2),(20,'PICHINCHA',1,2),(21,'SANTA ELENA',1,2),(22,'STO DGO TSACHILAS',1,2),(23,'SUCUMBIOS',1,2),(24,'TUNGURAHUA',1,2),(25,'ZAMORA CHINCHIPE',1,2),(26,'CAMILO PONCE ENRIQUEZ',2,3),(27,'CHORDELEG',2,3),(28,'CUENCA',2,3),(29,'EL PAN',2,3),(30,'GIRON',2,3),(31,'GUACHAPALA',2,3),(32,'GUALACEO',2,3),(33,'NABON',2,3),(34,'OÑA',2,3),(35,'PAUTE',2,3),(36,'PUCARA',2,3),(37,'SAN FERNANDO',2,3),(38,'SANTA ISABEL',2,3),(39,'SEVILLA DE ORO',2,3),(40,'SIGSIG',2,3),(41,'CALUMA',3,3),(42,'CHILLANES',3,3),(43,'CHIMBO',3,3),(44,'ECHEANDIA',3,3),(45,'GUARANDA',3,3),(46,'LAS NAVES',3,3),(47,'SAN MIGUEL',3,3),(48,'BOLIVAR',4,3),(49,'ESPEJO',4,3),(50,'MIRA',4,3),(51,'MONTUFAR',4,3),(52,'SAN PEDRO DE HUACA',4,3),(53,'TULCAN',4,3),(54,'AZOGUES',5,3),(55,'BIBLIAN',5,3),(56,'CAÑAR',5,3),(57,'DELEG',5,3),(58,'EL TAMBO',5,3),(59,'LA TRONCAL',5,3),(60,'SUSCAL',5,3),(61,'ALAUSI',6,3),(62,'CHAMBO',6,3),(63,'CHUNCHI',6,3),(64,'COLTA',6,3),(65,'CUMANDA',6,3),(66,'GUAMOTE',6,3),(67,'GUANO',6,3),(68,'PALLATANGA',6,3),(69,'PENIPE',6,3),(70,'RIOBAMBA',6,3),(71,'LA MANA',7,3),(72,'LATACUNGA',7,3),(73,'PANGUA',7,3),(74,'PUJILI',7,3),(75,'SALCEDO',7,3),(76,'SAQUISILI',7,3),(77,'SIGCHOS',7,3),(78,'ARENILLAS',8,3),(79,'ATAHUALPA',8,3),(80,'BALSAS',8,3),(81,'CHILLA',8,3),(82,'EL GUABO',8,3),(83,'HUAQUILLAS',8,3),(84,'LAS LAJAS',8,3),(85,'MACHALA',8,3),(86,'MARCABELI',8,3),(87,'PASAJE',8,3),(88,'PIÑAS',8,3),(89,'PORTOVELO',8,3),(90,'SANTA ROSA',8,3),(91,'ZARUMA',8,3),(92,'ATACAMES',9,3),(93,'ELOY ALFARO',9,3),(94,'ESMERALDAS',9,3),(95,'MUISNE',9,3),(96,'QUININDE',9,3),(97,'RIO VERDE',9,3),(98,'SAN LORENZO',9,3),(99,'ISABELA',10,3),(100,'SAN CRISTOBAL',10,3),(101,'SANTA CRUZ',10,3),(102,'A.BAQUERIZO MORENO',11,3),(103,'BALAO',11,3),(104,'BALZAR',11,3),(105,'COLIMES',11,3),(106,'CRNL MARCELINO MARIDUENAS',11,3),(107,'DAULE',11,3),(108,'DURAN',11,3),(109,'EL EMPALME',11,3),(110,'EL TRIUNFO',11,3),(111,'GRAL. A. ELIZALDE',11,3),(112,'GUAYAQUIL',11,3),(113,'ISIDRO AYORA',11,3),(114,'LOMAS DE SARGENTILLO',11,3),(115,'MILAGRO',11,3),(116,'NARANJAL',11,3),(117,'NARANJITO',11,3),(118,'NOBOL / PIEDRAHITA',11,3),(119,'PALESTINA',11,3),(120,'PEDRO CARBO',11,3),(121,'PLAYAS',11,3),(122,'SALITRE',11,3),(123,'SAMBORONDON',11,3),(124,'SANTA LUCIA',11,3),(125,'SIMON BOLIVAR',11,3),(126,'YAGUACHI',11,3),(127,'ANTONIO ANTE',12,3),(128,'COTACACHI',12,3),(129,'IBARRA',12,3),(130,'OTAVALO',12,3),(131,'PIMAMPIRO',12,3),(132,'URCUQUI',12,3),(133,'CALVAS',13,3),(134,'CATAMAYO',13,3),(135,'CELICA',13,3),(136,'CHAGUARPAMBA',13,3),(137,'ESPINDOLA',13,3),(138,'GONZANAMA',13,3),(139,'LOJA',13,3),(140,'MACARA',13,3),(141,'OLMEDO',13,3),(142,'PALTAS',13,3),(143,'PINDAL',13,3),(144,'PUYANGO',13,3),(145,'QUILANGA',13,3),(146,'SARAGURO',13,3),(147,'SOZORANGA',13,3),(148,'ZAPOTILLO',13,3),(149,'BABA',14,3),(150,'BABAHOYO',14,3),(151,'BUENA FE',14,3),(152,'MOCACHE',14,3),(153,'MONTALVO',14,3),(154,'PALENQUE',14,3),(155,'PUEBLO VIEJO',14,3),(156,'QUEVEDO',14,3),(157,'QUINSALOMA',14,3),(158,'URDANETA',14,3),(159,'VALENCIA',14,3),(160,'VENTANAS',14,3),(161,'VINCES',14,3),(162,'24 DE MAYO',15,3),(163,'BOLIVAR',15,3),(164,'CHONE',15,3),(165,'EL CARMEN',15,3),(166,'FLAVIO ALFARO',15,3),(167,'JAMA',15,3),(168,'JARAMIJO',15,3),(169,'JIPIJAPA',15,3),(170,'JUNIN',15,3),(171,'MANTA',15,3),(172,'MONTECRISTI',15,3),(173,'OLMEDO',15,3),(174,'PAJAN',15,3),(175,'PEDERNALES',15,3),(176,'PICHINCHA',15,3),(177,'PORTOVIEJO',15,3),(178,'PUERTO LOPEZ',15,3),(179,'ROCAFUERTE',15,3),(180,'SAN VICENTE',15,3),(181,'SANTA ANA',15,3),(182,'SUCRE',15,3),(183,'TOSAGUA',15,3),(184,'GUALAQUIZA',16,3),(185,'HUAMBOYA',16,3),(186,'LIMON INDANZA',16,3),(187,'LOGROÑO',16,3),(188,'MORONA',16,3),(189,'PABLO SEXTO',16,3),(190,'PALORA',16,3),(191,'SAN JUAN BOSCO',16,3),(192,'SANTIAGO',16,3),(193,'SUCUA',16,3),(194,'TAISHA',16,3),(195,'TIWINTZA',16,3),(196,'ARCHIDONA',17,3),(197,'C. J. AROSEMENA TOLA',17,3),(198,'EL CHACO',17,3),(199,'QUIJOS',17,3),(200,'TENA',17,3),(201,'AGUARICO',18,3),(202,'FCO.DE ORELLANA',18,3),(203,'JOYA DE LOS SACHAS',18,3),(204,'LORETO',18,3),(205,'ARAJUNO',19,3),(206,'MERA',19,3),(207,'PASTAZA',19,3),(208,'SANTA CLARA',19,3),(209,'CAYAMBE',20,3),(210,'MEJIA',20,3),(211,'PEDRO MONCAYO',20,3),(212,'PEDRO VICENTE MALDONADO',20,3),(213,'PUERTO QUITO',20,3),(214,'QUITO',20,3),(215,'RUMINAHUI',20,3),(216,'SAN MIGUEL DE LOS BANCOS',20,3),(217,'LA LIBERTAD',21,3),(218,'SALINAS',21,3),(219,'SANTA ELENA',21,3),(220,'LA CONCORDIA',22,3),(221,'SANTO DOMINGO',22,3),(222,'CASCALES',23,3),(223,'CUYABENO',23,3),(224,'GONZALO PIZARRO',23,3),(225,'LAGO AGRIO',23,3),(226,'PUTUMAYO',23,3),(227,'SHUSHUFINDI',23,3),(228,'SUCUMBIOS',23,3),(229,'AMBATO',24,3),(230,'BAÑOS',24,3),(231,'CEVALLOS',24,3),(232,'MOCHA',24,3),(233,'PATATE',24,3),(234,'PELILEO',24,3),(235,'PILLARO',24,3),(236,'QUERO',24,3),(237,'TISALEO',24,3),(238,'CENTINELA DEL CONDOR',25,3),(239,'CHINCHIPE',25,3),(240,'EL PANGUI',25,3),(241,'NANGARITZA',25,3),(242,'PALANDA',25,3),(243,'PAQUISHA',25,3),(244,'YACUAMBI',25,3),(245,'YANZATZA',25,3),(246,'ZAMORA',25,3),(247,'CAMILO PONCE ENRIQUEZ',26,4),(248,'EL CARMEN DE PIJILI',26,4),(249,'CHORDELEG',27,4),(250,'LA UNION',27,4),(251,'LUIS GALARZA O. (DELEGSOL)',27,4),(252,'PRINCIPAL',27,4),(253,'SAN MARTIN DE PUZHIO',27,4),(254,'BAÑOS',28,4),(255,'BELLAVISTA',28,4),(256,'CAÑARIBAMBA',28,4),(257,'CHAUCHA / ANGAS',28,4),(258,'CHECA JIDCAY',28,4),(259,'CHIQUINTAD',28,4),(260,'CUMBE',28,4),(261,'EL BATAN',28,4),(262,'EL VECINO',28,4),(263,'HERMANO MIGUEL',28,4),(264,'HUAYNACAPAC',28,4),(265,'LLACAO',28,4),(266,'MACHANGARA',28,4),(267,'MOLLETURO',28,4),(268,'MONAY',28,4),(269,'MULTI /  NULTI',28,4),(270,'OCTAVIO CORDERO PALACIOS',28,4),(271,'PACCHA',28,4),(272,'QUINGEO',28,4),(273,'RAMIREZ DAVALOS',28,4),(274,'RICAURTE',28,4),(275,'SAGRARIO',28,4),(276,'SAN BLAS',28,4),(277,'SAN JOAQUIN',28,4),(278,'SAN SEBASTIAN',28,4),(279,'SANTA ANA',28,4),(280,'SAYAUSI',28,4),(281,'SIDCAY',28,4),(282,'SININCAY',28,4),(283,'SUCRE',28,4),(284,'TARQUI',28,4),(285,'TOTORACOCHA',28,4),(286,'TURI',28,4),(287,'VALLE',28,4),(288,'VICTORIA DEL PORTETE',28,4),(289,'YANUNCAY',28,4),(290,'EL PAN',29,4),(291,'SAN VICENTE',29,4),(292,'ASUNCION ',30,4),(293,'GIRON',30,4),(294,'SAN GERARDO',30,4),(295,'GUACHAPALA',31,4),(296,'DANIEL CORDOVA TORAL',32,4),(297,'GUALACEO',32,4),(298,'JADAN',32,4),(299,'LUIS CORDERO VEGA',32,4),(300,'MARIANO MORENO/CALLASAY',32,4),(301,'REMIGIO CRESPO TORAL',32,4),(302,'SAN JUAN',32,4),(303,'SIMON BOLIVAR',32,4),(304,'ZHIDMAD',32,4),(305,'COCHAPATA',33,4),(306,'EL PROGRESO',33,4),(307,'NABON',33,4),(308,'NIEVES',33,4),(309,'OÑA',34,4),(310,'SUSUDEL',34,4),(311,'BULAN / J. VICTOR IZQUIERDO',35,4),(312,'CHICAN / GUILLERMO ORTEGA',35,4),(313,'DUG-DUG',35,4),(314,'EL CABO',35,4),(315,'GUARAINAC',35,4),(316,'PAUTE',35,4),(317,'SAN CRISTOBAL',35,4),(318,'TOMEBAMBA',35,4),(319,'PUCARA',36,4),(320,'SAN RAFAEL DE SHARUG',36,4),(321,'CHUMBLIN',37,4),(322,'SAN FERNANDO',37,4),(323,'ABDON CALDERON / LA UNION',38,4),(324,'SAN SALVADOR DE CAÑARIBAMBA',38,4),(325,'SANTA ISABEL',38,4),(326,'SHAGLLI',38,4),(327,'AMALUZA',39,4),(328,'PALMAS',39,4),(329,'SEVILLA DE ORO',39,4),(330,'CUTCHIL',40,4),(331,'GIMA',40,4),(332,'GUEL',40,4),(333,'LUDO',40,4),(334,'SAN BARTOLOME',40,4),(335,'SAN JOSE DE RARANGA',40,4),(336,'SIGSIG',40,4),(337,'CALUMA/SAN ANTONIO',41,4),(338,'CHILLANES',42,4),(339,'SAN JOSE DE TAMBO',42,4),(340,'ASUNCION',43,4),(341,'MAGDALENA/CHAPACOTO',43,4),(342,'SAN JOSE DE CHIMBO',43,4),(343,'SAN SEBASTIAN',43,4),(344,'TELIMBELA',43,4),(345,'ECHEANDIA',44,4),(346,'ANGEL POLIVIO CHAVEZ',45,4),(347,'FACUNDO VELA',45,4),(348,'GABRIEL I VEINTIMILLA',45,4),(349,'GUANUJO',45,4),(350,'JULIO E MORENO',45,4),(351,'SALINAS',45,4),(352,'SAN LORENZO',45,4),(353,'SAN LUIS DE PAMBIL',45,4),(354,'SAN SIMON',45,4),(355,'SANTA FE',45,4),(356,'SIMIATUG',45,4),(357,'LAS MERCEDES',46,4),(358,'LAS NAVES',46,4),(359,'BALZAPAMBA',47,4),(360,'BILOVAN',47,4),(361,'REGULO DE MORA',47,4),(362,'SAN MIGUEL',47,4),(363,'SAN PABLO DE ATENAS',47,4),(364,'SAN VICENTE',47,4),(365,'SANTIAGO',47,4),(366,'BOLIVAR',48,4),(367,'GARCIA MORENO',48,4),(368,'LOS ANDES',48,4),(369,'MONTEOLIVO',48,4),(370,'SAN RAFAEL',48,4),(371,'SAN VICENTE DE PUSIR',48,4),(372,'27 DE SEPTIEMBRE',49,4),(373,'EL ANGEL',49,4),(374,'EL GOALTAL / LAS JUNTAS',49,4),(375,'LA LIBERTAD',49,4),(376,'SAN ISIDRO',49,4),(377,'JIJON Y CAAMAÑO',50,4),(378,'JUAN MONTALVO',50,4),(379,'LA CONCEPCION',50,4),(380,'MIRA',50,4),(381,'CHITAN DE NAVARRETES',51,4),(382,'CRISTOBAL COLON',51,4),(383,'FERNANDEZ SALVADOR',51,4),(384,'GONZALEZ SUAREZ',51,4),(385,'LA PAZ',51,4),(386,'PIARTAL',51,4),(387,'SAN JOSE',51,4),(388,'HUACA',52,4),(389,'MARISCAL SUCRE',52,4),(390,'EL CARMELO/EL PUN/',53,4),(391,'EL CHICAL',53,4),(392,'GONZALEZ SUAREZ',53,4),(393,'JULIO ANDRADE',53,4),(394,'MALDONADO',53,4),(395,'PIOTER',53,4),(396,'SANTA MARTHA DE CUBA',53,4),(397,'TOBAR DONOSO',53,4),(398,'TUFIÑO',53,4),(399,'TULCAN',53,4),(400,'URBINA',53,4),(401,'AURELIO BAYAS MARTINEZ',54,4),(402,'AZOGUES',54,4),(403,'BORRERO',54,4),(404,'COJITAMBO',54,4),(405,'GUAPAN',54,4),(406,'JAVIER LOYOLA / CHUQUIPATA',54,4),(407,'LUIS CORDERO',54,4),(408,'PINDILIG',54,4),(409,'RIVERA',54,4),(410,'SAN FRANCISCO',54,4),(411,'SAN MIGUEL',54,4),(412,'TADAY',54,4),(413,'BIBLIAN',55,4),(414,'JERUSALEN',55,4),(415,'NAZON',55,4),(416,'SAN FCO. DE SAGEO',55,4),(417,'TURUPAMBA',55,4),(418,'CAÑAR',56,4),(419,'CHONTAMARCA',56,4),(420,'CHOROCOPTE',56,4),(421,'DUCUR',56,4),(422,'GRAL.MORALES / SOCARTE',56,4),(423,'GUALLETURO',56,4),(424,'HONORATO VASQUEZ',56,4),(425,'INGAPIRCA',56,4),(426,'JUNCAL',56,4),(427,'SAN ANTONIO',56,4),(428,'VENTURA',56,4),(429,'ZHUD',56,4),(430,'DELEG',57,4),(431,'SOLANO',57,4),(432,'EL TAMBO',58,4),(433,'LA TRONCAL',59,4),(434,'MANUEL J. CALLE',59,4),(435,'PANCHO NEGRO',59,4),(436,'SUSCAL',60,4),(437,'ACHUPALLAS',61,4),(438,'ALAUSI',61,4),(439,'GUASUNTOS',61,4),(440,'HUIGRA',61,4),(441,'MULTITUD',61,4),(442,'PISTISHI',61,4),(443,'PUMALLACTA',61,4),(444,'SEVILLA',61,4),(445,'SIBAMBE',61,4),(446,'TIXAN',61,4),(447,'CHAMBO',62,4),(448,'CAPZOL',63,4),(449,'CHUNCHI',63,4),(450,'COMPUD',63,4),(451,'GONZOL',63,4),(452,'LLAGOS',63,4),(453,'CAJABAMBA',64,4),(454,'CANI',64,4),(455,'COLUMBE',64,4),(456,'JUAN DE VELASCO / PONGOR',64,4),(457,'SANTIAGO DE QUITO',64,4),(458,'SICALPA',64,4),(459,'CUMANDA',65,4),(460,'CEBADAS',66,4),(461,'GUAMOTE',66,4),(462,'PALMIRA',66,4),(463,'EL ROSARIO',67,4),(464,'GUANANDO',67,4),(465,'ILAPO',67,4),(466,'LA MATRIZ',67,4),(467,'LA PROVIDENCIA',67,4),(468,'SAN ANDRES',67,4),(469,'SAN GERARDO / PAQUICAHUAN',67,4),(470,'SAN ISIDRO DE PATULU',67,4),(471,'SAN JOSE DEL CHAZO',67,4),(472,'SANTA FE DE GALAN',67,4),(473,'VALPARAISO',67,4),(474,'PALLATANGA',68,4),(475,'BILBAO',69,4),(476,'EL ALTAR',69,4),(477,'LA CANDELARIA',69,4),(478,'MATUS',69,4),(479,'PENIPE',69,4),(480,'PUELA',69,4),(481,'SAN ANTONIO DE BAYUSHIG',69,4),(482,'CACHA',70,4),(483,'CALPI',70,4),(484,'CUBIJIES',70,4),(485,'FLORES',70,4),(486,'LICAN',70,4),(487,'LICTO',70,4),(488,'LIZARZABURU',70,4),(489,'MALDONADO',70,4),(490,'PUNGALA',70,4),(491,'PUNIN',70,4),(492,'QUIMIAG',70,4),(493,'SAN JUAN',70,4),(494,'SAN LUIS',70,4),(495,'VELASCO',70,4),(496,'VELOZ',70,4),(497,'YARUQUIES',70,4),(498,'EL CARMEN',71,4),(499,'EL TRIUNFO',71,4),(500,'GUASAGANDA',71,4),(501,'LA MANA',71,4),(502,'PUCAYACO',71,4),(503,'11 DE NOVIEMBRE',72,4),(504,'ALAQUEZ',72,4),(505,'BELISARIO QUEVEDO',72,4),(506,'ELOY ALFARO / SAN FELIPE',72,4),(507,'GUAYTACAMA',72,4),(508,'IGNACIO FLORES',72,4),(509,'JOSEGUANGO BAJO',72,4),(510,'JUAN MONTALVO',72,4),(511,'LA MATRIZ',72,4),(512,'MULALO',72,4),(513,'POALO',72,4),(514,'SAN BUENAVENTURA',72,4),(515,'SAN JUAN DE PASTOCALLE',72,4),(516,'TANICUCHI',72,4),(517,'TOACAZO',72,4),(518,'EL CORAZON',73,4),(519,'MORASPUNGO',73,4),(520,'PINLLOPATA',73,4),(521,'RAMON CAMPAÑA',73,4),(522,'ANGAMARCA',74,4),(523,'GUANGAJE',74,4),(524,'LA VICTORIA',74,4),(525,'PILALO',74,4),(526,'PUJILI',74,4),(527,'TINGO',74,4),(528,'ZUMBAHUA',74,4),(529,'ANTONIO J. HOLGUIN',75,4),(530,'CUSUBAMBA',75,4),(531,'MULALILLO',75,4),(532,'MULLIQUINDIL',75,4),(533,'PANZALEO',75,4),(534,'SAN MIGUEL DE SALCEDO',75,4),(535,'CANCHAGUA',76,4),(536,'CHANTILIN',76,4),(537,'COCHAPAMBA',76,4),(538,'SAQUISILI',76,4),(539,'CHUGCHILAN',77,4),(540,'ISINLIVI',77,4),(541,'LAS PAMPAS',77,4),(542,'PALO QUEMADO',77,4),(543,'SIGCHOS',77,4),(544,'ARENILLAS',78,4),(545,'CARCABON',78,4),(546,'CHACRAS',78,4),(547,'PALMARES',78,4),(548,'AYAPAMBA',79,4),(549,'CORDONCILLO',79,4),(550,'MILAGRO',79,4),(551,'PACCHA',79,4),(552,'SAN JOSE',79,4),(553,'SAN JUAN DE CERRO AZUL',79,4),(554,'BALSAS',80,4),(555,'BELLAMARIA',80,4),(556,'CHILLA',81,4),(557,'BARBONES',82,4),(558,'EL GUABO',82,4),(559,'LA IBERIA',82,4),(560,'RIO BONITO',82,4),(561,'TENDALES',82,4),(562,'ECUADOR',83,4),(563,'EL PARAISO',83,4),(564,'HUALTACO',83,4),(565,'HUAQUILLAS',83,4),(566,'MILTON REYES',83,4),(567,'UNION LOJANA',83,4),(568,'EL PARAISO',84,4),(569,'LA LIBERTAD',84,4),(570,'LA VICTORIA/LAS LAJAS',84,4),(571,'PLATANILLOS',84,4),(572,'SAN ISIDRO',84,4),(573,'9 DE MAYO',85,4),(574,'EL CAMBIO',85,4),(575,'EL RETIRO',85,4),(576,'JAMBELI',85,4),(577,'JUBONES',85,4),(578,'LA PROVIDENCIA',85,4),(579,'MACHALA',85,4),(580,'PUERTO BOLIVAR',85,4),(581,'EL INGENIO',86,4),(582,'MARCABELI',86,4),(583,'BOLIVAR',87,4),(584,'BUENAVISTA',87,4),(585,'CASACAY',87,4),(586,'CAÑAQUEMADA',87,4),(587,'LA PEAÑA',87,4),(588,'LOMA DE FRANCO',87,4),(589,'OCHOA LEON/MATRIZ',87,4),(590,'PASAJE',87,4),(591,'PROGRESO',87,4),(592,'TRES CERRITOS',87,4),(593,'UZHCURRUMI',87,4),(594,'CAPIRO',88,4),(595,'LA BOCANA',88,4),(596,'LA SUSAYA',88,4),(597,'MOROMORO',88,4),(598,'PIEDRAS',88,4),(599,'PIÑAS',88,4),(600,'PIÑAS GRANDE',88,4),(601,'SAN ROQUE',88,4),(602,'SARACAY',88,4),(603,'CURTINCAPAC',89,4),(604,'MORALES',89,4),(605,'PORTOVELO',89,4),(606,'SALATI',89,4),(607,'BALNEARIO JAMBELI',90,4),(608,'BELLAMARIA',90,4),(609,'BELLAVISTA',90,4),(610,'JAMBELI',90,4),(611,'JUMON',90,4),(612,'LA AVANZADA',90,4),(613,'NUEVO SANTA ROSA',90,4),(614,'PUERTO JELI',90,4),(615,'SAN ANTONIO',90,4),(616,'SANTA ROSA',90,4),(617,'TORATA',90,4),(618,'VICTORIA',90,4),(619,'ABANIN',91,4),(620,'ARCAPAMBA',91,4),(621,'GUANAZAN',91,4),(622,'GUIZHAGUIÑA',91,4),(623,'HUERTAS',91,4),(624,'MALVAS',91,4),(625,'MULUNCAY GRANDE',91,4),(626,'SALVIAS',91,4),(627,'SINSAO',91,4),(628,'ZARUMA',91,4),(629,'ATACAMES',92,4),(630,'LA UNION',92,4),(631,'SUA/BOCANA',92,4),(632,'TONCHIGUE',92,4),(633,'TONSUPA',92,4),(634,'ANCHAYACU',93,4),(635,'ATAHUALPA/CAMARONES',93,4),(636,'BORBON',93,4),(637,'COLON ELOY DE MARIA',93,4),(638,'LA TOLA',93,4),(639,'LUIS VARGAS TORRES',93,4),(640,'MALDONADO',93,4),(641,'PAMPANAL DE BOLIVAR',93,4),(642,'SAN FRANCISCO DE ONZOLE',93,4),(643,'SAN JOSE DE CAYAPAS',93,4),(644,'SANTA LUCIA DE LAS PEÑAS',93,4),(645,'SANTO DOMINGO DE ONZOLE',93,4),(646,'SELVA ALEGRE',93,4),(647,'TELEMBI',93,4),(648,'TIMBIRE',93,4),(649,'VALDEZ/LIMONES/',93,4),(650,'5 DE AGOSTO',94,4),(651,'BARTOLOME RUIZ',94,4),(652,'CAMARONES',94,4),(653,'CHINCA',94,4),(654,'CRNL.CARLOS CONCHA TORRES',94,4),(655,'ESMERALDAS',94,4),(656,'LUIS TELLO / LAS PALMAS /',94,4),(657,'MAJUA',94,4),(658,'SAN MATEO',94,4),(659,'SIMON PLATA TORRES',94,4),(660,'TABIAZO',94,4),(661,'TACHINA',94,4),(662,'VUELTA LARGA',94,4),(663,'BOLIVAR',95,4),(664,'DAULE',95,4),(665,'GALERA',95,4),(666,'MUISNE',95,4),(667,'QUINGUE',95,4),(668,'SALIMA',95,4),(669,'SAN FRANCISCO',95,4),(670,'SAN GREGORIO',95,4),(671,'SAN JOSE DE CHAMANGA',95,4),(672,'CHURA',96,4),(673,'CUBE / CHANCAMA',96,4),(674,'LA UNION',96,4),(675,'MALIMPIA / GUAYLLABAMBA',96,4),(676,'ROSA ZARATE',96,4),(677,'VICHE',96,4),(678,'CHONTADURO',97,4),(679,'CHUMUNDE',97,4),(680,'LAGARTO',97,4),(681,'MONTALVO / HORQUETA',97,4),(682,'RIO VERDE',97,4),(683,'ROCAFUERTE',97,4),(684,'5 DE JUNIO/HUIMBI',98,4),(685,'ALTO TAMBO/GUADAL',98,4),(686,'ANCON/PALMA REAL',98,4),(687,'CALDERON',98,4),(688,'CARONDELET',98,4),(689,'CONCEPCION',98,4),(690,'MATAJE',98,4),(691,'SAN JAVIER DE CACHABI',98,4),(692,'SAN LORENZO',98,4),(693,'SANTA RITA',98,4),(694,'TAMBILLO',98,4),(695,'TULULBI /RICAURTE',98,4),(696,'URBINA',98,4),(697,'PUERTO VILLAMIL, CABECERA CANTONAL',99,4),(698,'TOMAS DE BERLANGA (SANTO TOMAS)',99,4),(699,'EL PROGRESO',100,4),(700,'ISLA SANTA MARIA (FLOREANA) (CAB. EN  PTO. VE',100,4),(701,'PUERTO BAQUERIZO MORENO, CABECERA CANTONAL Y ',100,4),(702,'BELLAVISTA',101,4),(703,'PUERTO AYORA, CABECERA CANTONAL',101,4),(704,'SANTA ROSA (INCLUYE LA ISLA BALTRA)',101,4),(705,'A.BAQUERIZO M/JUJAN',102,4),(706,'BALAO',103,4),(707,'BALZAR',104,4),(708,'COLIMES',105,4),(709,'SAN JACINTO',105,4),(710,'CRNL MARCELINO MARIDUENAS',106,4),(711,'DAULE',107,4),(712,'EL LAUREL',107,4),(713,'JUAN BAUTISTA AGUIRRE',107,4),(714,'LA AURORA',107,4),(715,'LAS LOJAS',107,4),(716,'LIMONAL',107,4),(717,'MAGRO',107,4),(718,'DIVINO NINO',108,4),(719,'EL RECREO',108,4),(720,'ELOY ALFARO / DURAN',108,4),(721,'EL ROSARIO',109,4),(722,'GUAYAS/PUERTO NUEVO',109,4),(723,'VELASCO IBARRA',109,4),(724,'EL TRIUNFO',110,4),(725,'GRAL. ELIZALDE /BUCAY',111,4),(726,'9 DE OCTUBRE',112,4),(727,'AYACUCHO',112,4),(728,'BOLIVAR/SAGRARIO',112,4),(729,'CARBO/CONCEPCION',112,4),(730,'FEBRES CORDERO',112,4),(731,'GARCIA MORENO',112,4),(732,'JUAN GOMEZ RENDON',112,4),(733,'LETAMENDI',112,4),(734,'MORRO',112,4),(735,'OLMEDO/SAN ALEJO',112,4),(736,'PASCUALES',112,4),(737,'POSORJA',112,4),(738,'PUNA',112,4),(739,'ROCA',112,4),(740,'ROCAFUERTE',112,4),(741,'SUCRE',112,4),(742,'TARQUI',112,4),(743,'TENGUEL',112,4),(744,'URDANETA',112,4),(745,'XIMENA',112,4),(746,'ISIDRO AYORA',113,4),(747,'LOMAS DE SARGENTILLO',114,4),(748,'CHOBO',115,4),(749,'MARISCAL SUCRE/HUAQUES',115,4),(750,'MILAGRO',115,4),(751,'ROBERTO ASTUDILLO',115,4),(752,'JESUS MARIA',116,4),(753,'NARANJAL',116,4),(754,'SAN CARLOS',116,4),(755,'SANTA ROSA DE FLANDES',116,4),(756,'TAURA',116,4),(757,'NARANJITO',117,4),(758,'NARCISA DE JESUS',118,4),(759,'PALESTINA',119,4),(760,'PEDRO CARBO',120,4),(761,'SABANILLA',120,4),(762,'VALLE DE LA VIRGEN',120,4),(763,'GRAL. VILLAMIL /PLAYAS',121,4),(764,'BOCANA',122,4),(765,'CANDILEJOS',122,4),(766,'GRAL. VERNAZA',122,4),(767,'JUNQUILLAL',122,4),(768,'PARAISO',122,4),(769,'SALITRE',122,4),(770,'SAN MATEO',122,4),(771,'VICTORIA',122,4),(772,'LA PUNTILLA (SATELITE)',123,4),(773,'SAMBORONDON',123,4),(774,'TARIFA',123,4),(775,'SANTA LUCIA',124,4),(776,'CRNEL. LORENZO GARAICOA',125,4),(777,'SIMON BOLIVAR',125,4),(778,'GRAL.PEDRO MONTERO',126,4),(779,'VIRGEN DE FATIMA',126,4),(780,'YAGUACHI NUEVO',126,4),(781,'YAGUACHI VIEJO/CONE',126,4),(782,'ANDRADE MARIN/LOURDES',127,4),(783,'ATUNTAQUI',127,4),(784,'IMBAYA',127,4),(785,'SAN FCO.DE NATABUELA',127,4),(786,'SAN JOSE DE CHALTURA',127,4),(787,'SAN ROQUE',127,4),(788,'6 DE JULIO DE CUELLAJE',128,4),(789,'APUELA',128,4),(790,'GARCIA MORENO / LLURIMAGUA',128,4),(791,'IMANTAG',128,4),(792,'PEÑAHERRERA',128,4),(793,'PLAZA GUTIERREZ/CALVARIO',128,4),(794,'QUIROGA',128,4),(795,'SAGRARIO',128,4),(796,'SAN FRANCISCO',128,4),(797,'VACAS GALINDO',128,4),(798,'AMBUQUI/CHOTA',129,4),(799,'ANGOCHAGUA',129,4),(800,'CARANQUI',129,4),(801,'CAROLINA /GUALLUPI',129,4),(802,'GUAYAQUIL DE ALPACHACA',129,4),(803,'LA DOLOROSA DEL PRIORATO',129,4),(804,'LA ESPERANZA',129,4),(805,'LITA',129,4),(806,'SAGRARIO',129,4),(807,'SALINAS',129,4),(808,'SAN ANTONIO',129,4),(809,'SAN FRANCISCO',129,4),(810,'DR MIGUEL EGAS/PEGUCHE',130,4),(811,'EUGENIO ESPEJO',130,4),(812,'GONZALEZ SUAREZ',130,4),(813,'JORDAN',130,4),(814,'PATAQUI',130,4),(815,'SAN JOSE DE QUICHINCHE',130,4),(816,'SAN JUAN DE ILUMAN',130,4),(817,'SAN LUIS',130,4),(818,'SAN PABLO',130,4),(819,'SAN RAFAEL',130,4),(820,'SELVA ALEGRE',130,4),(821,'CHUGA',131,4),(822,'MARIANO ACOSTA',131,4),(823,'PIMAMPIRO',131,4),(824,'SAN FRANCISCO DE SIGSIPAMBA',131,4),(825,'CAHUASQUI',132,4),(826,'LA MERCED DE BUENOS AIRES',132,4),(827,'PABLO ARENAS',132,4),(828,'SAN BLAS',132,4),(829,'TUMBABIRO',132,4),(830,'URCUQUI',132,4),(831,'CARIAMANGA',133,4),(832,'CHILE',133,4),(833,'COLAIZACA',133,4),(834,'EL LUCERO',133,4),(835,'SAN VICENTE',133,4),(836,'SANGUILLIN',133,4),(837,'UTUANA',133,4),(838,'CATAMAYO',134,4),(839,'EL TAMBO',134,4),(840,'GUAYQUICHUMA',134,4),(841,'SAN JOSE',134,4),(842,'SAN PEDRO DE LA BENDITA',134,4),(843,'ZAMBI',134,4),(844,'CELICA',135,4),(845,'CRUZPAMBA/BUSTAMANTE',135,4),(846,'SABANILLA',135,4),(847,'SAN JUAN DE POZUL',135,4),(848,'TNTE M.RODRIGUEZ LOAYZA',135,4),(849,'AMARILLOS',136,4),(850,'BUENAVISTA',136,4),(851,'CHAGUARPAMBA',136,4),(852,'EL ROSARIO',136,4),(853,'SANTA RUFINA',136,4),(854,'27 DE ABRIL /LA NARANJA',137,4),(855,'AMALUZA',137,4),(856,'BELLAVISTA',137,4),(857,'EL AIRO',137,4),(858,'EL INGENIO',137,4),(859,'JIMBURA',137,4),(860,'SANTA TERESITA',137,4),(861,'CHANGAIMINA /LA LIBERTAD',138,4),(862,'GONZANAMA',138,4),(863,'NAMBACOLA',138,4),(864,'PURUNUMA /EGUIGUREN',138,4),(865,'SACAPALCA',138,4),(866,'CHANTACO',139,4),(867,'CHUQUIRIBAMBA',139,4),(868,'EL CISNE',139,4),(869,'EL SAGRARIO',139,4),(870,'GUALEL',139,4),(871,'JIMBILLA',139,4),(872,'MALACATOS/VALLADOLID',139,4),(873,'QUINARA',139,4),(874,'SAN LUCAS',139,4),(875,'SAN PEDRO DE VILCABAMBA',139,4),(876,'SAN SEBASTIAN',139,4),(877,'SANTIAGO',139,4),(878,'SUCRE',139,4),(879,'TAQUIL /MIGUEL RIOFRIO',139,4),(880,'VALLE',139,4),(881,'VILCABAMBA/VICTORIA',139,4),(882,'YANGANA / ARSENIO CASTILLO',139,4),(883,'GRAL.ELOY ALFARO',140,4),(884,'LA RAMA',140,4),(885,'LA VICTORIA',140,4),(886,'MACARA',140,4),(887,'SABIANGO',140,4),(888,'LA TINGUE',141,4),(889,'OLMEDO',141,4),(890,'CANGONAMA',142,4),(891,'CASANGA',142,4),(892,'CATACOCHA',142,4),(893,'GUACHANAMA',142,4),(894,'LAURO GUERRERO',142,4),(895,'LOURDES',142,4),(896,'ORIANGA',142,4),(897,'SAN ANTONIO',142,4),(898,'YAMANA',142,4),(899,'12 DE DICIEMBRE',143,4),(900,'CHAQUINAL',143,4),(901,'MILAGROS',143,4),(902,'PINDAL /FEDERICO PAEZ',143,4),(903,'ALAMOR',144,4),(904,'CIANO',144,4),(905,'EL ARENAL',144,4),(906,'EL LIMO /MARIANA DE JESUS',144,4),(907,'MERCADILLO',144,4),(908,'VICENTINO',144,4),(909,'FUNDOCHAMBA',145,4),(910,'QUILANGA /LA PAZ',145,4),(911,'SAN ANTONIO DE LAS ARADAS',145,4),(912,'EL PARAISO DE CELEN',146,4),(913,'EL TABLON',146,4),(914,'LLUZHAPA',146,4),(915,'MANU',146,4),(916,'SAN ANTONIO DE CUMBE',146,4),(917,'SAN PABLO DE TENTA',146,4),(918,'SAN SEBASTIAN DE YULOG',146,4),(919,'SARAGURO',146,4),(920,'SELVA ALEGRE',146,4),(921,'SUMAYPAMBA',146,4),(922,'URDANETA/PAQUISHAPA',146,4),(923,'NUEVA FATIMA',147,4),(924,'SOZORANGA',147,4),(925,'TACAMOROS',147,4),(926,'BOLASPAMBA',148,4),(927,'CAZADEROS',148,4),(928,'GARZAREAL',148,4),(929,'LIMONES',148,4),(930,'MANGAHURCO',148,4),(931,'PALETILLAS',148,4),(932,'ZAPOTILLO',148,4),(933,'BABA',149,4),(934,'GUARE',149,4),(935,'ISLA DE BEJUCAL',149,4),(936,'BARREIRO /SANTA RITA',150,4),(937,'CARACOL',150,4),(938,'CLEMENTE BAQUERIZO',150,4),(939,'DR. CAMILO PONCE E.',150,4),(940,'EL SALTO',150,4),(941,'FEBRES CORDERO',150,4),(942,'LA UNION',150,4),(943,'PIMOCHA',150,4),(944,'PATRICIA PILAR',151,4),(945,'SN JACINTO DE BUENA FE',151,4),(946,'MOCACHE',152,4),(947,'LA ESMERALDA',153,4),(948,'MONTALVO/SABANETA',153,4),(949,'PALENQUE',154,4),(950,'PUEBLO VIEJO',155,4),(951,'PUERTO PECHICHE',155,4),(952,'SAN JUAN',155,4),(953,'24 DE MAYO',156,4),(954,'GUAYACAN',156,4),(955,'LA ESPERANZA',156,4),(956,'NICOLAS INFANTE DIAZ',156,4),(957,'QUEVEDO',156,4),(958,'SAN CAMILO',156,4),(959,'SAN CARLOS',156,4),(960,'SAN CRISTOBAL',156,4),(961,'SIETE DE OCTUBRE',156,4),(962,'VENUS DEL RIO QUEVEDO',156,4),(963,'VIVA ALFARO',156,4),(964,'QUINSALOMA',157,4),(965,'CATARAMA',158,4),(966,'RICAURTE',158,4),(967,'VALENCIA',159,4),(968,'10 NOVIEMBRE',160,4),(969,'CHACARITA',160,4),(970,'LOS ANGELES',160,4),(971,'VENTANAS',160,4),(972,'ZAPOTAL',160,4),(973,'ANTONIO SOTOMAYOR',161,4),(974,'VINCES',161,4),(975,'ARQ.SIXTO DURAN BALLEN',162,4),(976,'BELLAVISTA',162,4),(977,'NOBOA',162,4),(978,'SUCRE',162,4),(979,'CALCETA',163,4),(980,'MEMBRILLO',163,4),(981,'QUIROGA',163,4),(982,'BOYACA',164,4),(983,'CANUTO',164,4),(984,'CHIBUNGA',164,4),(985,'CHONE',164,4),(986,'CONVENTO',164,4),(987,'ELOY ALFARO',164,4),(988,'RICAURTE',164,4),(989,'SAN ANTONIO / DEL PELUDO',164,4),(990,'SANTA RITA',164,4),(991,'4 DE DICIEMBRE',165,4),(992,'EL CARMEN',165,4),(993,'SAN PEDRO DE SUMA',165,4),(994,'WILFRIDO LOOR MOREIRA',165,4),(995,'FLAVIO ALFARO',166,4),(996,'NOVILLO',166,4),(997,'ZAPALLO',166,4),(998,'JAMA',167,4),(999,'JARAMILLO',168,4),(1000,'AMERICA /LA CERA',169,4),(1001,'DR. MIGUEL MORAN LUCIO',169,4),(1002,'EL ANEGADO',169,4),(1003,'JIPIJAPA',169,4),(1004,'JULCUY',169,4),(1005,'LA UNION',169,4),(1006,'MANUEL INOCENCIO PARRALES',169,4),(1007,'MEMBRILLAL',169,4),(1008,'PEDRO PABLO GOMEZ',169,4),(1009,'PUERTO CAYO',169,4),(1010,'SAN LORENZO DE JIPIJAPA',169,4),(1011,'JUNIN',170,4),(1012,'ELOY ALFARO',171,4),(1013,'LOS ESTEROS',171,4),(1014,'MANTA',171,4),(1015,'SAN LORENZO',171,4),(1016,'SAN MATEO',171,4),(1017,'SANTA MARIANITA',171,4),(1018,'TARQUI',171,4),(1019,'ANIBAL SAN ANDRES',172,4),(1020,'COLORADO',172,4),(1021,'GENERAL ELOY ALFARO DELGA',172,4),(1022,'LA PILA',172,4),(1023,'LEONIDAS PROAÑO',172,4),(1024,'MONTECRISTI',172,4),(1025,'OLMEDO/PUCA',173,4),(1026,'CAMPOZANO',174,4),(1027,'CASCOL',174,4),(1028,'GUALES/STO.DOMINGO',174,4),(1029,'LASCANO',174,4),(1030,'PAJAN',174,4),(1031,'10 DE AGOSTO',175,4),(1032,'ATAHUALPA',175,4),(1033,'COJIMES',175,4),(1034,'PEDERNALES',175,4),(1035,'BARRAGANETE',176,4),(1036,'PICHINCHA/GERMUD',176,4),(1037,'SAN SEBASTIAN',176,4),(1038,'12 DE MARZO',177,4),(1039,'18 DE OCTUBRE',177,4),(1040,'ABDON CALDERON',177,4),(1041,'ALHAJUELA /BAJO GRANDE',177,4),(1042,'ANDRES DE VERA',177,4),(1043,'CHIRIJOS',177,4),(1044,'COLON',177,4),(1045,'CRUCITA',177,4),(1046,'FRANCISCO PACHECO',177,4),(1047,'PICOAZA',177,4),(1048,'PORTOVIEJO',177,4),(1049,'PUEBLO NUEVO',177,4),(1050,'RIO CHICO',177,4),(1051,'SAN PABLO',177,4),(1052,'SAN PLACIDO',177,4),(1053,'SIMON BOLIVAR',177,4),(1054,'MACHALILLA',178,4),(1055,'PUERTO LOPEZ',178,4),(1056,'SALANGO',178,4),(1057,'ROCAFUERTE',179,4),(1058,'CANOA',180,4),(1059,'SAN VICENTE',180,4),(1060,'AYACUCHO',181,4),(1061,'HONORATO VASQUEZ',181,4),(1062,'LA UNION',181,4),(1063,'LODANA',181,4),(1064,'SAN PABLO',181,4),(1065,'SANTA ANA',181,4),(1066,'BAHIA DE CARAQUEZ',182,4),(1067,'CHARAPOTO',182,4),(1068,'LEONIDAS PLAZA G.',182,4),(1069,'SAN ISIDRO',182,4),(1070,'ANGEL PEDRO GILER',183,4),(1071,'BACHILLERO',183,4),(1072,'TOSAGUA',183,4),(1073,'AMAZONAS',184,4),(1074,'BERMEJOS',184,4),(1075,'BOMBOIZA',184,4),(1076,'CHIGUINDA',184,4),(1077,'EL IDEAL',184,4),(1078,'GUALAQUIZA',184,4),(1079,'MERCEDES MOLINA',184,4),(1080,'NUEVA TARQUI',184,4),(1081,'ROSARIO',184,4),(1082,'SAN MIGUEL DE CUYES',184,4),(1083,'CHIGUAZA',185,4),(1084,'HUAMBOYA',185,4),(1085,'GRAL. LEONIDAS PLAZA',186,4),(1086,'INDANZA',186,4),(1087,'SAN ANTONIO',186,4),(1088,'SAN MIGUEL DE CONCHAY',186,4),(1089,'SANTA SUSANA DE CHIVIAZA',186,4),(1090,'YUNGANZA /EL ROSARIO',186,4),(1091,'LOGROÑO',187,4),(1092,'SHIMPIS',187,4),(1093,'YAUPI',187,4),(1094,'ALSHI /9 DE OCTUBRE',188,4),(1095,'CUCHAENTZA',188,4),(1096,'GRAL. PROAÑO',188,4),(1097,'MACAS',188,4),(1098,'RIO BLANCO',188,4),(1099,'SAN ISIDRO',188,4),(1100,'SEVILLA DON BOSCO',188,4),(1101,'SINAI',188,4),(1102,'ZUNAC',188,4),(1103,'PABLO SEXTO',189,4),(1104,'16 DE AGOSTO',190,4),(1105,'ARAPICOS',190,4),(1106,'CUMANDA',190,4),(1107,'PALORA',190,4),(1108,'SANGAY',190,4),(1109,'PAN DE AZUCAR',191,4),(1110,'SAN CARLOS DE LIMON',191,4),(1111,'SAN JACINTO DE WAKAMBEIS',191,4),(1112,'SAN JUAN BOSCO',191,4),(1113,'SANTIAGO DE PANANZA',191,4),(1114,'CHUPIANZA',192,4),(1115,'COPAL',192,4),(1116,'MENDEZ',192,4),(1117,'PATUCA',192,4),(1118,'SAN FCO. DE CHINIMBIMI',192,4),(1119,'SAN LUIS DEL ACHO',192,4),(1120,'TAYUZA',192,4),(1121,'ASUNCION',193,4),(1122,'HUAMBI',193,4),(1123,'SANTA MARIANITA DE JESUS',193,4),(1124,'SUCUA',193,4),(1125,'HUASAGA /WAMPUIK',194,4),(1126,'MACUMA',194,4),(1127,'PUMPUENTSA',194,4),(1128,'TAISHA',194,4),(1129,'TUTINENTZA',194,4),(1130,'SAN JOSE DE MORONA',195,4),(1131,'SANTIAGO',195,4),(1132,'ARCHIDONA',196,4),(1133,'COTUNDO',196,4),(1134,'HATUN SUMAKU',196,4),(1135,'SAN PABLO DE USHPAYACU',196,4),(1136,'CARLOS J. AROSEMENA TOLA',197,4),(1137,'EL CHACO',198,4),(1138,'GONZALO DIAZ DE PINEDA',198,4),(1139,'LINARES',198,4),(1140,'OYACACHI',198,4),(1141,'SANTA ROSA DE QUIJOS',198,4),(1142,'SARDINAS',198,4),(1143,'BAEZA',199,4),(1144,'COSANGA',199,4),(1145,'CUYUJA',199,4),(1146,'PAPALLACTA',199,4),(1147,'SAN FRANCISCO DE BORJA',199,4),(1148,'SUMACO',199,4),(1149,'AHUANO',200,4),(1150,'CHONTAPUNTA',200,4),(1151,'PANO',200,4),(1152,'PUERTO MISAHUALLI',200,4),(1153,'PUERTO NAPO',200,4),(1154,'SAN JUAN DE MUYUNA',200,4),(1155,'TALAG',200,4),(1156,'TENA',200,4),(1157,'CAP. AUGUSTO RIVADENEIRA',201,4),(1158,'CONONACO',201,4),(1159,'NUEVO ROCAFUERTE',201,4),(1160,'STA. MARIA DE HUIRIRIMA',201,4),(1161,'TIPUTINI',201,4),(1162,'YASUNI',201,4),(1163,'ALEJANDRO LABAKA',202,4),(1164,'DAYUMA',202,4),(1165,'EL DORADO',202,4),(1166,'EL EDEN',202,4),(1167,'GARCIA MORENO',202,4),(1168,'INES ARANGO',202,4),(1169,'LA BELLEZA',202,4),(1170,'NUEVO PARAISO',202,4),(1171,'PTO. FCO. DE ORELLANA',202,4),(1172,'SAN JOSE DE GUAYUSA',202,4),(1173,'SAN LUIS DE ARMENIA',202,4),(1174,'TARACOA',202,4),(1175,'ENOKANQUI',203,4),(1176,'LA JOYA DE LOS SACHAS',203,4),(1177,'LAGO SAN PEDRO',203,4),(1178,'POMPEYA',203,4),(1179,'RUMIPAMBA',203,4),(1180,'SAN CARLOS',203,4),(1181,'SAN SEBASTIAN DE COCA',203,4),(1182,'TRES DE NOVIEMBRE',203,4),(1183,'UNION MILAGREÑA',203,4),(1184,'AVILA',204,4),(1185,'LORETO',204,4),(1186,'PUERTO MURIALDO',204,4),(1187,'SAN JOSE DE DAHUANO',204,4),(1188,'SAN JOSE DE PAYAMINO',204,4),(1189,'SAN VICENTE DE HUATICOCHA',204,4),(1190,'ARAJUNO',205,4),(1191,'CURARAY',205,4),(1192,'MADRE TIERRA',206,4),(1193,'MERA',206,4),(1194,'SHELL',206,4),(1195,'10 DE AGOSTO',207,4),(1196,'CANELOS',207,4),(1197,'EL TRIUNFO',207,4),(1198,'FATIMA',207,4),(1199,'MONTALVO/ANDOAS',207,4),(1200,'POMONA',207,4),(1201,'PUYO',207,4),(1202,'RIO CORRIENTES',207,4),(1203,'RIO TIGRE',207,4),(1204,'SIMON BOLIVAR',207,4),(1205,'TARQUI',207,4),(1206,'TNTE. HUGO ORTIZ',207,4),(1207,'VERACRUZ',207,4),(1208,'ZARAYACU',207,4),(1209,'SAN JOSE',208,4),(1210,'SANTA CLARA',208,4),(1211,'ASCAZUBI',209,4),(1212,'CANGAHUA',209,4),(1213,'CAYAMBE',209,4),(1214,'JUAN MONTALVO',209,4),(1215,'OLMEDO/PESILLO',209,4),(1216,'OTON',209,4),(1217,'SAN JOSE DE AYORA',209,4),(1218,'STA.ROSA DE CUSUBAMBA',209,4),(1219,'ALOAG',210,4),(1220,'ALOASI',210,4),(1221,'CHAUPI',210,4),(1222,'CORNEJO ASTORGA /TANDAPI',210,4),(1223,'CUTUGLAGUA',210,4),(1224,'MACHACHI',210,4),(1225,'TAMBILLO',210,4),(1226,'UYUMBICHO',210,4),(1227,'LA ESPERANZA',211,4),(1228,'MALCHINGUI',211,4),(1229,'TABACUNDO',211,4),(1230,'TOCACHI',211,4),(1231,'TUPIGACHI',211,4),(1232,'PEDRO VICENTE MALDONADO',212,4),(1233,'PUERTO QUITO',213,4),(1234,'ALANGASI',214,4),(1235,'AMAGUAÑA',214,4),(1236,'ATAHUALPA /HABASPAMBA',214,4),(1237,'BELISARIO QUEVEDO',214,4),(1238,'CALACALI',214,4),(1239,'CALDERON',214,4),(1240,'CARCELEN',214,4),(1241,'CENTRO HISTORICO',214,4),(1242,'CHAVEZPAMBA',214,4),(1243,'CHECA',214,4),(1244,'CHILIBULO',214,4),(1245,'CHILLOGALLO',214,4),(1246,'CHIMBACALLE',214,4),(1247,'COCHAPAMBA',214,4),(1248,'COMITE DEL PUEBLO',214,4),(1249,'CONOCOTO',214,4),(1250,'COTOCOLLAO',214,4),(1251,'CUMBAYA',214,4),(1252,'EL CONDADO',214,4),(1253,'GUALEA',214,4),(1254,'GUAMANI',214,4),(1255,'GUANGOPOLO',214,4),(1256,'GUAYLLABAMBA',214,4),(1257,'ITCHIMBIA',214,4),(1258,'IÑAQUITO',214,4),(1259,'JIPIJAPA',214,4),(1260,'KENNEDY',214,4),(1261,'LA ARGELIA',214,4),(1262,'LA CONCEPCION',214,4),(1263,'LA ECUATORIANA',214,4),(1264,'LA FERROVIARIA',214,4),(1265,'LA LIBERTAD',214,4),(1266,'LA MAGDALENA',214,4),(1267,'LA MENA',214,4),(1268,'LA MERCED',214,4),(1269,'LLANO CHICO',214,4),(1270,'LLOA',214,4),(1271,'MARISCAL SUCRE',214,4),(1272,'NANEGAL',214,4),(1273,'NANEGALITO',214,4),(1274,'NAYON',214,4),(1275,'NONO',214,4),(1276,'PACTO',214,4),(1277,'PERUCHO',214,4),(1278,'PIFO',214,4),(1279,'PINTAG',214,4),(1280,'POMASQUI',214,4),(1281,'PONCEANO',214,4),(1282,'PUELLARO',214,4),(1283,'PUEMBO',214,4),(1284,'PUENGASI',214,4),(1285,'QUINCHE',214,4),(1286,'QUITUMBE',214,4),(1287,'RUMIPAMBA',214,4),(1288,'SAN ANTONIO',214,4),(1289,'SAN BARTOLO',214,4),(1290,'SAN ISIDRO DEL INCA',214,4),(1291,'SAN JOSE DE MINAS',214,4),(1292,'SAN JUAN',214,4),(1293,'SOLANDA',214,4),(1294,'TABABELA',214,4),(1295,'TUMBACO',214,4),(1296,'TURUBAMBA',214,4),(1297,'YARUQUI',214,4),(1298,'ZAMBIZA',214,4),(1299,'COTOGCHOA',215,4),(1300,'RUMIPAMBA',215,4),(1301,'SAN PEDRO DE TABOADA',215,4),(1302,'SAN RAFAEL',215,4),(1303,'SANGOLQUI',215,4),(1304,'MINDO',216,4),(1305,'S. MIGUEL DE LOS BANCOS',216,4),(1306,'LA LIBERTAD',217,4),(1307,'ANCONCITO',218,4),(1308,'CARLOS ESPINOZA LARREA',218,4),(1309,'GRAL. A. E. GALLO',218,4),(1310,'JOSE LUIS TAMAYO / MUEY',218,4),(1311,'SALINAS',218,4),(1312,'SANTA ROSA',218,4),(1313,'VICENTE ROCAFUERTE',218,4),(1314,'ATAHUALPA',219,4),(1315,'BALLENITA',219,4),(1316,'CHANDUY',219,4),(1317,'COLONCHE',219,4),(1318,'MANGLARALTO',219,4),(1319,'SAN JOSE DE ANCON',219,4),(1320,'SANTA ELENA',219,4),(1321,'SIMON BOLIVAR',219,4),(1322,'LA CONCORDIA',220,4),(1323,'LA VILLEGAS',220,4),(1324,'MONTERREY',220,4),(1325,'PLAN PILOTO',220,4),(1326,'ABRAHAM CALAZACON',221,4),(1327,'ALLURIQUIN',221,4),(1328,'BOMBOLI',221,4),(1329,'CHIGUILPE',221,4),(1330,'EL ESFUERZO',221,4),(1331,'LUZ DE AMERICA',221,4),(1332,'PUERTO LIMON',221,4),(1333,'RIO TOACHI',221,4),(1334,'RIO VERDE',221,4),(1335,'SAN JACINTO DEL BUA',221,4),(1336,'SANTA MARIA DEL TOACHI',221,4),(1337,'SANTO DOMINGO',221,4),(1338,'VALLE HERMOSO',221,4),(1339,'ZARACAY',221,4),(1340,'EL DORADO DE CASCALES',222,4),(1341,'SANTA ROSA DE SUCUMBIOS',222,4),(1342,'SEVILLA',222,4),(1343,'AGUAS NEGRAS',223,4),(1344,'CUYABENO',223,4),(1345,'TARAPOA',223,4),(1346,'EL REVENTADOR',224,4),(1347,'GONZALO PIZARRO',224,4),(1348,'LUMBAQUI',224,4),(1349,'PUERTO LIBRE',224,4),(1350,'10 DE AGOSTO',225,4),(1351,'DURENO',225,4),(1352,'EL ENO',225,4),(1353,'GENERAL FARFAN',225,4),(1354,'JAMBELI',225,4),(1355,'NUEVA LOJA',225,4),(1356,'PACAYACU',225,4),(1357,'SANTA CECILIA',225,4),(1358,'EL CARMEN DE PUTUMAYO',226,4),(1359,'PALMA ROJA',226,4),(1360,'PUERTO BOLIVAR',226,4),(1361,'PUERTO RODRIGUEZ',226,4),(1362,'SANTA ELENA',226,4),(1363,'LIMONCOCHA',227,4),(1364,'PANACOCHA',227,4),(1365,'SAN PEDRO DE LOS COFANES',227,4),(1366,'SAN ROQUE',227,4),(1367,'SHUSHUFINDI CENTRAL',227,4),(1368,'SIETE DE JULIO',227,4),(1369,'EL PLAYON DE SN. FRANCISCO',228,4),(1370,'LA BONITA',228,4),(1371,'LA SOFIA',228,4),(1372,'ROSA FLORIDA',228,4),(1373,'SANTA BARBARA',228,4),(1374,'AMBATILLO',229,4),(1375,'ATAHUALPA /CHIPZALATA',229,4),(1376,'ATOCHA FICOA',229,4),(1377,'AUGUSTO N MARTINEZ',229,4),(1378,'CELIANO MONGE',229,4),(1379,'CONSTANTINO FERNANDEZ',229,4),(1380,'CUNCHIBAMBA',229,4),(1381,'HUACHI CHICO',229,4),(1382,'HUACHI GRANDE',229,4),(1383,'HUACHI LORETO',229,4),(1384,'IZAMBA',229,4),(1385,'JUAN BENIGNO VELA',229,4),(1386,'LA MATRIZ',229,4),(1387,'LA MERCED',229,4),(1388,'LA PENINSULA',229,4),(1389,'MONTALVO',229,4),(1390,'PASA',229,4),(1391,'PICAYHUA',229,4),(1392,'PILAHUIN',229,4),(1393,'PISHILATA',229,4),(1394,'QUISAPINCHA',229,4),(1395,'SAN BARTOLOME',229,4),(1396,'SAN FERNANDO',229,4),(1397,'SAN FRANCISCO',229,4),(1398,'SANTA ROSA',229,4),(1399,'TOTORAS',229,4),(1400,'UNAMUNCHO',229,4),(1401,'BAÑOS',230,4),(1402,'LLIGUA',230,4),(1403,'RIO NEGRO',230,4),(1404,'RIO VERDE',230,4),(1405,'ULBA',230,4),(1406,'CEVALLOS',231,4),(1407,'MOCHA',232,4),(1408,'PINGUILI',232,4),(1409,'EL TRIUNFO',233,4),(1410,'LOS ANDES',233,4),(1411,'PATATE',233,4),(1412,'SUCRE',233,4),(1413,'BENITEZ /PACHANLICA',234,4),(1414,'BOLIVAR',234,4),(1415,'CHIQUICHA',234,4),(1416,'COTALO',234,4),(1417,'EL ROSARIO /RUMICHACA',234,4),(1418,'GARCIA MORENO',234,4),(1419,'HUAMBALO',234,4),(1420,'PELILEO',234,4),(1421,'PELILEO GRANDE /R. MINO',234,4),(1422,'SALASACA',234,4),(1423,'BAQUERIZO MORENO',235,4),(1424,'CIUDAD NUEVA',235,4),(1425,'EMILIO MARIA TERAN',235,4),(1426,'MARCOS ESPINEL',235,4),(1427,'PILLARO',235,4),(1428,'PRESIDENTE URBINA',235,4),(1429,'SAN ANDRES',235,4),(1430,'SAN JOSE DE POALO',235,4),(1431,'SAN MIGUELITO',235,4),(1432,'QUERO',236,4),(1433,'RUMIPAMBA',236,4),(1434,'YANAYACU MOCHAPATA',236,4),(1435,'QUINCHICOTO',237,4),(1436,'TISALEO',237,4),(1437,'PANGUINTZA',238,4),(1438,'TRIUNFO DORADO',238,4),(1439,'ZUMBI',238,4),(1440,'CHITO',239,4),(1441,'EL CHORRO',239,4),(1442,'LA CHONTA',239,4),(1443,'PUCAPAMBA',239,4),(1444,'SAN ANDRES',239,4),(1445,'ZUMBA',239,4),(1446,'EL GUISMI',240,4),(1447,'EL PANGUI',240,4),(1448,'PACHICUTZA',240,4),(1449,'TUNDAYME',240,4),(1450,'GUAYZIMI',241,4),(1451,'NUEVO PARAISO',241,4),(1452,'ZURMI',241,4),(1453,'EL PORVENIR DEL CARMEN',242,4),(1454,'LA CANELA',242,4),(1455,'PALANDA',242,4),(1456,'SAN FRANCISCO DEL VERGEL',242,4),(1457,'VALLADOLID',242,4),(1458,'BELLAVISTA',243,4),(1459,'NUEVO QUITO',243,4),(1460,'PAQUISHA',243,4),(1461,'28 DE MAYO',244,4),(1462,'LA PAZ',244,4),(1463,'TUTUPALI',244,4),(1464,'CHICANA',245,4),(1465,'LOS ENCUENTROS',245,4),(1466,'YANZATZA',245,4),(1467,'CUMBARATZA',246,4),(1468,'EL LIMON',246,4),(1469,'GUADALUPE',246,4),(1470,'LA VICTORIA DE IMBANA',246,4),(1471,'SABANILLA',246,4),(1472,'SAN CARLOS DE LAS MINAS',246,4),(1473,'TIMBARA',246,4),(1474,'ZAMORA',246,4),(1475,'AFGANISTÁN',NULL,1),(1476,'ALBANIA',NULL,1),(1477,'ALEMANIA',NULL,1),(1478,'ANDORRA',NULL,1),(1479,'ANGOLA',NULL,1),(1480,'ANTIGUA Y BARBUDA',NULL,1),(1481,'ANTILLAS HOLANDESAS',NULL,1),(1482,'ARABIA SAUDÍ',NULL,1),(1483,'ARGELIA',NULL,1),(1484,'ARGENTINA',NULL,1),(1485,'ARMENIA',NULL,1),(1486,'ARUBA',NULL,1),(1487,'AUSTRALIA',NULL,1),(1488,'AUSTRIA',NULL,1),(1489,'AZERBAIYÁN',NULL,1),(1490,'BAHAMAS',NULL,1),(1491,'BAHREIN',NULL,1),(1492,'BANGLADESH',NULL,1),(1493,'BARBADOS',NULL,1),(1494,'BÉLGICA',NULL,1),(1495,'BELICE',NULL,1),(1496,'BENÍN',NULL,1),(1497,'BERMUDAS',NULL,1),(1498,'BIELORRUSIA',NULL,1),(1499,'BOLIVIA',NULL,1),(1500,'BOSNIA',NULL,1),(1501,'BOTSWANA',NULL,1),(1502,'BRASIL',NULL,1),(1503,'BRUNEI',NULL,1),(1504,'BULGARIA',NULL,1),(1505,'BURKINA FASO',NULL,1),(1506,'BURUNDI',NULL,1),(1507,'BUTÁN',NULL,1),(1508,'CABO VERDE',NULL,1),(1509,'CAMBOYA',NULL,1),(1510,'CAMERÚN',NULL,1),(1511,'CANADÁ',NULL,1),(1512,'CHAD',NULL,1),(1513,'CHEQUIA',NULL,1),(1514,'CHILE',NULL,1),(1515,'CHINA',NULL,1),(1516,'CHIPRE',NULL,1),(1517,'COLOMBIA',NULL,1),(1518,'COMORAS',NULL,1),(1519,'CONGO',NULL,1),(1520,'COREA DEL NORTE',NULL,1),(1521,'COREA DEL SUR',NULL,1),(1522,'COSTA DE MARFIL',NULL,1),(1523,'COSTA RICA',NULL,1),(1524,'CROACIA',NULL,1),(1525,'CUBA',NULL,1),(1526,'CURAZAO',NULL,1),(1527,'DINAMARCA',NULL,1),(1528,'DOMINICA',NULL,1),(1529,'DUBAI',NULL,1),(1530,'EGIPTO',NULL,1),(1531,'EL SALVADOR',NULL,1),(1532,'EMIRATOS ÁRABES UNIDOS',NULL,1),(1533,'ERITREA',NULL,1),(1534,'ESCOCIA',NULL,1),(1535,'ESLOVAQUIA',NULL,1),(1536,'ESLOVENIA',NULL,1),(1537,'ESPAÑA',NULL,1),(1538,'ESTADOS UNIDOS DE AMÉRICA',NULL,1),(1539,'ESTONIA',NULL,1),(1540,'ETIOPÍA',NULL,1),(1541,'FILIPINAS',NULL,1),(1542,'FINLANDIA',NULL,1),(1543,'FIYI',NULL,1),(1544,'FRANCIA',NULL,1),(1545,'GABÓN',NULL,1),(1546,'GAMBIA',NULL,1),(1547,'GEORGIA',NULL,1),(1548,'GHANA',NULL,1),(1549,'GRANADA',NULL,1),(1550,'GRECIA',NULL,1),(1551,'GUAM',NULL,1),(1552,'GUATEMALA',NULL,1),(1553,'GUAYANA FRANCESA',NULL,1),(1554,'GUINEA',NULL,1),(1555,'GUINEA-BISSAU',NULL,1),(1556,'GUINEA ECUATORIAL',NULL,1),(1557,'GUYANA',NULL,1),(1558,'HAITÍ',NULL,1),(1559,'HERZEGOVINA',NULL,1),(1560,'HOLANDA',NULL,1),(1561,'HONDURAS',NULL,1),(1562,'HONG KONG',NULL,1),(1563,'HUNGRÍA',NULL,1),(1564,'INDIA',NULL,1),(1565,'INDONESIA',NULL,1),(1566,'IRAK',NULL,1),(1567,'IRÁN',NULL,1),(1568,'IRLANDA',NULL,1),(1569,'ISLANDIA',NULL,1),(1570,'ISLAS CAIMÁN',NULL,1),(1571,'ISLAS MARSHALL',NULL,1),(1572,'ISLAS PITCAIRN',NULL,1),(1573,'ISLAS SALOMÓN',NULL,1),(1574,'ISRAEL',NULL,1),(1575,'ITALIA',NULL,1),(1576,'JAMAICA',NULL,1),(1577,'JAPÓN',NULL,1),(1578,'JORDANIA',NULL,1),(1579,'KAZAJSTÁN',NULL,1),(1580,'KENIA',NULL,1),(1581,'KIRGUISTÁN',NULL,1),(1582,'KIRIBATI',NULL,1),(1583,'KÓSOVO',NULL,1),(1584,'KUWAIT',NULL,1),(1585,'LAOS',NULL,1),(1586,'LESOTHO',NULL,1),(1587,'LETONIA',NULL,1),(1588,'LÍBANO',NULL,1),(1589,'LIBERIA',NULL,1),(1590,'LIBIA',NULL,1),(1591,'LIECHTENSTEIN',NULL,1),(1592,'LITUANIA',NULL,1),(1593,'LUXEMBURGO',NULL,1),(1594,'MACEDONIA',NULL,1),(1595,'MADAGASCAR',NULL,1),(1596,'MALASIA',NULL,1),(1597,'MALAWI',NULL,1),(1598,'MALDIVAS',NULL,1),(1599,'MALÍ',NULL,1),(1600,'MARIANAS DEL NORTE',NULL,1),(1601,'MARRUECOS',NULL,1),(1602,'MARTINICA',NULL,1),(1603,'MAURICIO',NULL,1),(1604,'MAURITANIA',NULL,1),(1605,'MÉXICO',NULL,1),(1606,'MICRONESIA',NULL,1),(1607,'MOLDAVIA',NULL,1),(1608,'MÓNACO',NULL,1),(1609,'MONGOLIA',NULL,1),(1610,'MONTENEGRO',NULL,1),(1611,'MONTSERRAT',NULL,1),(1612,'MOZAMBIQUE',NULL,1),(1613,'MYANMAR (ANTES BIRMANIA)',NULL,1),(1614,'NAMIBIA',NULL,1),(1615,'NAURU',NULL,1),(1616,'NEPAL',NULL,1),(1617,'NICARAGUA',NULL,1),(1618,'NÍGER',NULL,1),(1619,'NIGERIA',NULL,1),(1620,'NORUEGA',NULL,1),(1621,'NUEVA ZELANDA',NULL,1),(1622,'OMÁN',NULL,1),(1623,'ORDEN DE MALTA',NULL,1),(1624,'PAÍSES BAJOS',NULL,1),(1625,'PAKISTÁN',NULL,1),(1626,'PALAU',NULL,1),(1627,'PALESTINA',NULL,1),(1628,'PANAMÁ',NULL,1),(1629,'PAPÚA NUEVA GUINEA',NULL,1),(1630,'PARAGUAY',NULL,1),(1631,'PERÚ',NULL,1),(1632,'POLONIA',NULL,1),(1633,'PORTUGAL',NULL,1),(1634,'QATAR',NULL,1),(1635,'REINO UNIDO',NULL,1),(1636,'REPÚBLICA CENTROAFRICANA',NULL,1),(1637,'REPÚBLICA DEL CONGO',NULL,1),(1638,'REPÚBLICA DEMOCRÁTICA DEL CONGO (ANTIGUO ZAIR',NULL,1),(1639,'REPÚBLICA DOMINICANA',NULL,1),(1640,'RUANDA',NULL,1),(1641,'RUMANIA',NULL,1),(1642,'RUSIA',NULL,1),(1643,'SÁHARA OCCIDENTAL',NULL,1),(1644,'SAINT KITTS-NEVIS',NULL,1),(1645,'SAMOA',NULL,1),(1646,'SAMOA AMERICANA',NULL,1),(1647,'SAN MARINO',NULL,1),(1648,'SANTA LUCÍA (PAÍS)',NULL,1),(1649,'SANTO TOMÉ Y PRÍNCIPE',NULL,1),(1650,'SAN VICENTE Y LAS GRANADINAS',NULL,1),(1651,'SENEGAL',NULL,1),(1652,'SERBIA',NULL,1),(1653,'SEYCHELLES',NULL,1),(1654,'SIERRA LEONA',NULL,1),(1655,'SINGAPUR',NULL,1),(1656,'SIRIA',NULL,1),(1657,'SOMALIA',NULL,1),(1658,'SRI LANKA (ANTES CEILÁN)',NULL,1),(1659,'SUAZILANDIA',NULL,1),(1660,'SUDÁFRICA',NULL,1),(1661,'SUDÁN',NULL,1),(1662,'SUECIA',NULL,1),(1663,'SUIZA',NULL,1),(1664,'TAILANDIA',NULL,1),(1665,'TAIWÁN (FORMOSA) (REPÚBLICA NACIONALISTA CHIN',NULL,1),(1666,'TANZANIA',NULL,1),(1667,'TAYIKISTÁN',NULL,1),(1668,'TÍBET (ACTUALMENTE BAJO SOBERANÍA CHINA)',NULL,1),(1669,'TIMOR ORIENTAL (ANTIGUAMENTE OCUPADO POR INDO',NULL,1),(1670,'TOGO',NULL,1),(1671,'TONGA',NULL,1),(1672,'TRINIDAD Y TOBAGO',NULL,1),(1673,'TÚNEZ',NULL,1),(1674,'TURKMENISTÁN',NULL,1),(1675,'TURQUÍA',NULL,1),(1676,'TUVALU',NULL,1),(1677,'UCRANIA',NULL,1),(1678,'UGANDA',NULL,1),(1679,'URUGUAY',NULL,1),(1680,'UZBEQUISTÁN',NULL,1),(1681,'VANUATU',NULL,1),(1682,'VATICANO',NULL,1),(1683,'VENEZUELA',NULL,1),(1684,'VIETNAM',NULL,1),(1685,'WALLIS Y FUTUNA',NULL,1),(1686,'YEMEN',NULL,1),(1687,'YIBUTI',NULL,1),(1688,'ZAMBIA',NULL,1),(1689,'ZIMBABUE',NULL,1);
/*!40000 ALTER TABLE `ssp_localidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_merito_oposicion`
--

DROP TABLE IF EXISTS `ssp_merito_oposicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_merito_oposicion` (
  `MOP_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `MOP_NOMB` varchar(45) NOT NULL COMMENT 'MÉRITO OPOSICIÓN',
  `MOP_VALO` float NOT NULL COMMENT 'VALOR',
  PRIMARY KEY (`MOP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_merito_oposicion`
--

LOCK TABLES `ssp_merito_oposicion` WRITE;
/*!40000 ALTER TABLE `ssp_merito_oposicion` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_merito_oposicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_oficio`
--

DROP TABLE IF EXISTS `ssp_oficio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_oficio` (
  `OFI_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `OFI_NOMB` varchar(45) NOT NULL COMMENT 'OFICIO / SUB ACTIVIDADES',
  PRIMARY KEY (`OFI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_oficio`
--

LOCK TABLES `ssp_oficio` WRITE;
/*!40000 ALTER TABLE `ssp_oficio` DISABLE KEYS */;
INSERT INTO `ssp_oficio` VALUES (1,'ALBAÑIL'),(2,'CARPINTERO'),(3,'CERRAJERO'),(4,'CHOFER'),(5,'COLOCADOR DE CERÁMICA'),(6,'COSTURERA / SASTRE'),(7,'DIGITADORES'),(8,'ELECTRICO'),(9,'ESTIBADOR'),(10,'GUARDIA'),(11,'GUARDIAS DE SEGURIDAD'),(12,'NIÑERA'),(13,'OPERADOR DE MAQUINARIA PESADA'),(14,'OPERARIO / PRODUCCIÓN'),(15,'PANIFICADOR / PANADERO'),(16,'PEON'),(17,'PERSONAL DE LIMPIEZA'),(18,'PINTOR'),(19,'PLOMERO / GASFITERO'),(20,'POLIFUNCIONALES'),(21,'SERVICIO DOMESTICO'),(22,'SOLDADOR');
/*!40000 ALTER TABLE `ssp_oficio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_postulante_concurso`
--

DROP TABLE IF EXISTS `ssp_postulante_concurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_postulante_concurso` (
  `PCO_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `PCO_FK_CONC` int(11) NOT NULL,
  `PCO_ESTA` varchar(1) DEFAULT NULL COMMENT 'ESTADO ASPIRANTE',
  PRIMARY KEY (`PCO_ID`),
  KEY `fk_SSP_ASPIRANTE_CONCURSO_SSP_BASE_CONCURSO1` (`PCO_FK_CONC`),
  CONSTRAINT `fk_SSP_ASPIRANTE_CONCURSO_SSP_BASE_CONCURSO1` FOREIGN KEY (`PCO_FK_CONC`) REFERENCES `ssp_concurso` (`CON_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_postulante_concurso`
--

LOCK TABLES `ssp_postulante_concurso` WRITE;
/*!40000 ALTER TABLE `ssp_postulante_concurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_postulante_concurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_puesto_trabajo`
--

DROP TABLE IF EXISTS `ssp_puesto_trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_puesto_trabajo` (
  `PTR_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `PTR_NOMB` varchar(45) NOT NULL COMMENT 'NOMBRE PUESTO',
  `PTR_TIPO` varchar(1) NOT NULL COMMENT 'D: DEPARTAMENTO\nP: CARGO',
  `PTR_PADR` int(11) DEFAULT NULL COMMENT 'ID CARGO PADRE',
  `PTR_ESTA` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`PTR_ID`),
  KEY `PTR_IDX_PUID` (`PTR_PADR`),
  CONSTRAINT `PTR_FK_PUID` FOREIGN KEY (`PTR_PADR`) REFERENCES `ssp_puesto_trabajo` (`PTR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_puesto_trabajo`
--

LOCK TABLES `ssp_puesto_trabajo` WRITE;
/*!40000 ALTER TABLE `ssp_puesto_trabajo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_puesto_trabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_tipo_discapacidad`
--

DROP TABLE IF EXISTS `ssp_tipo_discapacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_tipo_discapacidad` (
  `TDI_ID` int(2) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `TDI_NOMB` varchar(45) DEFAULT NULL COMMENT 'TIPO DISCAPACIDAD',
  PRIMARY KEY (`TDI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_tipo_discapacidad`
--

LOCK TABLES `ssp_tipo_discapacidad` WRITE;
/*!40000 ALTER TABLE `ssp_tipo_discapacidad` DISABLE KEYS */;
INSERT INTO `ssp_tipo_discapacidad` VALUES (1,'AUDITIVA'),(2,'FÍSICA'),(3,'INTELECTUAL'),(4,'LENGUAJE'),(5,'MENTAL'),(6,'PSICOLÓGICA'),(7,'VISUAL'),(8,'SUSTITUTO');
/*!40000 ALTER TABLE `ssp_tipo_discapacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_tipo_evento`
--

DROP TABLE IF EXISTS `ssp_tipo_evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_tipo_evento` (
  `TEV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEV_NOMB` varchar(30) NOT NULL COMMENT 'NOMBRE EVENTO',
  PRIMARY KEY (`TEV_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_tipo_evento`
--

LOCK TABLES `ssp_tipo_evento` WRITE;
/*!40000 ALTER TABLE `ssp_tipo_evento` DISABLE KEYS */;
INSERT INTO `ssp_tipo_evento` VALUES (1,'CONFERENCIA'),(2,'CONGRESO'),(3,'JORNADA'),(4,'PANEL'),(5,'PASANTIA'),(6,'SEMINARIO'),(7,'TALLER'),(8,'VISITA DE OBSERVADOR');
/*!40000 ALTER TABLE `ssp_tipo_evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_tipo_familiar`
--

DROP TABLE IF EXISTS `ssp_tipo_familiar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_tipo_familiar` (
  `TFA_ID` int(2) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `TFA_NOMB` varchar(45) DEFAULT NULL COMMENT 'TIPO FAMILIAR',
  PRIMARY KEY (`TFA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_tipo_familiar`
--

LOCK TABLES `ssp_tipo_familiar` WRITE;
/*!40000 ALTER TABLE `ssp_tipo_familiar` DISABLE KEYS */;
INSERT INTO `ssp_tipo_familiar` VALUES (1,'ABUELO(A)'),(2,'CONYUGE'),(3,'HERMANO(A)'),(4,'HIJO(A)'),(5,'MADRE'),(6,'PADRE');
/*!40000 ALTER TABLE `ssp_tipo_familiar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_tipo_localidad`
--

DROP TABLE IF EXISTS `ssp_tipo_localidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_tipo_localidad` (
  `TLO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TLO_NOMB` varchar(45) DEFAULT NULL COMMENT 'TIPO DE LOCALIDAD\nPAIS:1\nPROVINCIA:2\nCANTON:3\nPARROQUIA:4',
  PRIMARY KEY (`TLO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_tipo_localidad`
--

LOCK TABLES `ssp_tipo_localidad` WRITE;
/*!40000 ALTER TABLE `ssp_tipo_localidad` DISABLE KEYS */;
INSERT INTO `ssp_tipo_localidad` VALUES (1,'PAIS'),(2,'PROVINCIA'),(3,'CANTÓN'),(4,'PARROQUIA');
/*!40000 ALTER TABLE `ssp_tipo_localidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_tipo_puesto`
--

DROP TABLE IF EXISTS `ssp_tipo_puesto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_tipo_puesto` (
  `TPU_ID` int(1) NOT NULL COMMENT 'CLAVE PRIMARIA',
  `TPU_NOMB` varchar(45) NOT NULL,
  PRIMARY KEY (`TPU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_tipo_puesto`
--

LOCK TABLES `ssp_tipo_puesto` WRITE;
/*!40000 ALTER TABLE `ssp_tipo_puesto` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_tipo_puesto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ssp_titulo`
--

DROP TABLE IF EXISTS `ssp_titulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ssp_titulo` (
  `TIT_ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'CLAVE PRIMARIA',
  `TIT_NOMB` varchar(150) DEFAULT NULL COMMENT 'TITULO',
  `TIT_TIEM` int(11) DEFAULT NULL COMMENT 'TIEMPO DE ESTUDIO (AÑOS)',
  `TIT_SENE` varchar(45) DEFAULT NULL COMMENT 'REGISTRO SENESCYT',
  `TIT_FGRA` date DEFAULT NULL COMMENT 'FECHA GRADUACIÓN',
  `TIT_OINS` varchar(100) DEFAULT NULL COMMENT 'OTRA INSTITUCIÓN ',
  `TIT_FK_ASPI` int(11) NOT NULL COMMENT 'ASPIRANTE',
  `TIT_FK_AEST` int(11) DEFAULT NULL COMMENT 'AREA ESTUDIO',
  `TIT_FK_INST` int(11) DEFAULT NULL COMMENT 'INSTITUCIÓN',
  `TIT_FK_NSTR` int(11) NOT NULL COMMENT 'INSTRUCCIÓN',
  PRIMARY KEY (`TIT_ID`),
  KEY `TIT_IDX_INST` (`TIT_FK_INST`),
  KEY `TIT_IDX_AEST` (`TIT_FK_AEST`),
  KEY `TIT_IDX_ASPI` (`TIT_FK_ASPI`),
  KEY `TIT_IDX_NSTR` (`TIT_FK_NSTR`),
  CONSTRAINT `TIT_FK_AEST` FOREIGN KEY (`TIT_FK_AEST`) REFERENCES `ssp_area_estudio` (`AES_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `TIT_FK_ASPI` FOREIGN KEY (`TIT_FK_ASPI`) REFERENCES `ssp_aspirante` (`ASP_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `TIT_FK_INST` FOREIGN KEY (`TIT_FK_INST`) REFERENCES `ssp_institucion` (`INS_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `TIT_FK_NSTR` FOREIGN KEY (`TIT_FK_NSTR`) REFERENCES `ssp_instruccion` (`INS_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ssp_titulo`
--

LOCK TABLES `ssp_titulo` WRITE;
/*!40000 ALTER TABLE `ssp_titulo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ssp_titulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `idtest` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idtest`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (1,'1993-01-30');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ssp_test'
--

--
-- Dumping routines for database 'ssp_test'
--
/*!50003 DROP PROCEDURE IF EXISTS `get_localidad` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_localidad`(id int, tipo varchar(1))
BEGIN


if tipo = 'D' then

	SELECT 
		t2.loc_nomb AS PROVINCIA,
		t3.loc_nomb AS CANTON,
		t4.loc_nomb AS PARROQUIA
	FROM
		ssp_localidad AS t1
			INNER JOIN
		ssp_localidad AS t2 ON t2.LOC_PADR = t1.LOC_ID
			INNER JOIN
		ssp_localidad AS t3 ON t3.LOC_PADR = t2.LOC_ID
			INNER JOIN
		ssp_localidad AS t4 ON t4.LOC_PADR = t3.LOC_ID
	where t4.loc_id  = id limit 1;

else if tipo = 'N' then
	if id > 1474 then
		SELECT LOC_NOMB AS PAIS FROM ssp_localidad where loc_id = id;
	else
    	SELECT 
			t2.loc_nomb AS PROVINCIA,
			t3.loc_nomb AS CANTON
		FROM
			ssp_localidad AS t1
				INNER JOIN
			ssp_localidad AS t2 ON t2.LOC_PADR = t1.LOC_ID
				INNER JOIN
			ssp_localidad AS t3 ON t3.LOC_PADR = t2.LOC_ID
				INNER JOIN
			ssp_localidad AS t4 ON t4.LOC_PADR = t3.LOC_ID
		where t3.loc_id  = id limit 1;
    end if;
	end if;
end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `applicant_resume`
--

/*!50001 DROP VIEW IF EXISTS `applicant_resume`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `applicant_resume` AS select `a`.`ASP_CEDU` AS `ASP_CEDU`,`a`.`ASP_NOM1` AS `ASP_NOM1`,`a`.`ASP_NOM2` AS `ASP_NOM2`,`a`.`ASP_APE1` AS `ASP_APE1`,`a`.`ASP_APE2` AS `ASP_APE2`,`a`.`ASP_DISC` AS `ASP_DISC`,`a`.`ASP_ETNI` AS `ASP_ETNI`,`a`.`ASP_ESCI` AS `ASP_ESCI`,`a`.`ASP_FENA` AS `ASP_FENA`,`a`.`ASP_GENE` AS `ASP_GENE`,`a`.`ASP_EMAP` AS `ASP_EMAP`,`a`.`ASP_EMAI` AS `ASP_EMAI`,`a`.`ASP_ESTA` AS `ASP_ESTA`,`a`.`ASP_PESO` AS `ASP_PESO`,`a`.`ASP_TEL1` AS `ASP_TEL1`,`a`.`ASP_TEL2` AS `ASP_TEL2`,`a`.`ASP_TILI` AS `ASP_TILI`,`a`.`ASP_TISA` AS `ASP_TISA`,`a`.`ASP_CAPR` AS `ASP_CAPR`,`a`.`ASP_CASE` AS `ASP_CASE`,`a`.`ASP_NCAS` AS `ASP_NCAS`,`a`.`ASP_SECT` AS `ASP_SECT`,`a`.`ASP_REFE` AS `ASP_REFE`,`a`.`ASP_R1AP` AS `ASP_R1AP`,`a`.`ASP_R1NO` AS `ASP_R1NO`,`a`.`ASP_R1TE` AS `ASP_R1TE`,`a`.`ASP_R1CO` AS `ASP_R1CO`,`a`.`ASP_R2AP` AS `ASP_R2AP`,`a`.`ASP_R2NO` AS `ASP_R2NO`,`a`.`ASP_R2TE` AS `ASP_R2TE`,`a`.`ASP_R2CO` AS `ASP_R2CO`,`a`.`ASP_FASE` AS `ASP_FASE`,`a`.`ASP_FK_ENCA` AS `ASP_FK_ENCA`,`a`.`ASP_FK_LOCD` AS `ASP_FK_LOCD`,`a`.`ASP_FK_LOCN` AS `ASP_FK_LOCN`,`a`.`ASP_FCRE` AS `ASP_FCRE`,`a`.`ASP_FMOD` AS `ASP_FMOD`,`f`.`FAM_CEDU` AS `FAM_CEDU`,`f`.`FAM_NOMB` AS `FAM_NOMB`,`f`.`FAM_APEL` AS `FAM_APEL`,`f`.`FAM_DIRE` AS `FAM_DIRE`,`f`.`FAM_FNAC` AS `FAM_FNAC`,`f`.`FAM_FEME` AS `FAM_FEME`,`f`.`FAM_TEL1` AS `FAM_TEL1`,`f`.`FAM_TEL2` AS `FAM_TEL2`,`f`.`FAM_FK_INST` AS `FAM_FK_INST`,`f`.`FAM_FK_OFIC` AS `FAM_FK_OFIC`,`f`.`FAM_FK_TIFA` AS `FAM_FK_TIFA` from (`ssp_familiar` `f` left join `ssp_aspirante` `a` on((`a`.`ASP_ID` = `f`.`FAM_FK_ASPI`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-31 23:56:31
