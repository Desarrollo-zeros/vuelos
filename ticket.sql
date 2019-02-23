-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: ticket
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `avion`
--

DROP TABLE IF EXISTS `avion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avion` (
  `idAvion` int(11) NOT NULL AUTO_INCREMENT,
  `nombreAvion` varchar(50) NOT NULL,
  `nAsientoParticular` int(11) NOT NULL,
  `nAsientosEjecutivo` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idAvion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avion`
--

LOCK TABLES `avion` WRITE;
/*!40000 ALTER TABLE `avion` DISABLE KEYS */;
INSERT INTO `avion` VALUES (1,'hercules 0006',100,54,1),(2,'zeros',10,10,1),(3,'xVx',10,10,1);
/*!40000 ALTER TABLE `avion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `nombreDepartamento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (8,'ATLÁNTICO'),(11,'BOGOTÁ, D.C.'),(13,'BOLÍVAR'),(15,'BOYACÁ'),(17,'CALDAS'),(18,'CAQUETÁ'),(19,'CAUCA'),(20,'CESAR'),(23,'CÓRDOBA'),(25,'CUNDINAMARCA'),(27,'CHOCÓ'),(41,'HUILA'),(44,'LA GUAJIRA'),(47,'MAGDALENA'),(50,'META'),(52,'NARIÑO'),(54,'NORTE DE SANTANDER'),(63,'QUINDIO'),(66,'RISARALDA'),(68,'SANTANDER'),(70,'SUCRE'),(73,'TOLIMA'),(76,'VALLE DEL CAUCA'),(81,'ARAUCA'),(85,'CASANARE'),(86,'PUTUMAYO'),(88,'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'),(91,'AMAZONAS'),(94,'GUAINÍA'),(95,'GUAVIARE'),(97,'VAUPÉS'),(99,'VICHADA'),(100,'ANTIOQUIA');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios` (
  `idMunicipio` int(11) NOT NULL,
  `nombreMunicipio` varchar(50) DEFAULT NULL,
  `idDepartamento` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMunicipio`),
  KEY `idDepartamento` (`idDepartamento`),
  CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamento` (`idDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios`
--

LOCK TABLES `municipios` WRITE;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` VALUES (1,'Valledupar',20,1),(2,'Bogota',11,1),(3,'Barranquilla',8,1),(4,'Santa Marta',47,1),(5,'Medellin',100,1),(6,'Cartagena',13,1);
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `idPersona` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(11) NOT NULL,
  `primerNombre` varchar(20) CHARACTER SET latin5 NOT NULL,
  `segundoNombre` varchar(20) DEFAULT NULL,
  `primerApellido` varchar(20) NOT NULL,
  `segundoApellido` varchar(20) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPersona`),
  UNIQUE KEY `cedula` (`cedula`),
  KEY `idUsuario` (`idUsuario`),
  CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (3,'1234567891','carlos','andres','castilla','garcia',1,'3043651232'),(5,'1234567888','carlos','andres','castilla','garcia',9,'3043651232');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `precios`
--

DROP TABLE IF EXISTS `precios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `precios` (
  `idPrecios` int(11) NOT NULL AUTO_INCREMENT,
  `primerClase` int(11) NOT NULL,
  `segundaClase` int(11) NOT NULL,
  `equipajeU` int(11) NOT NULL,
  PRIMARY KEY (`idPrecios`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `precios`
--

LOCK TABLES `precios` WRITE;
/*!40000 ALTER TABLE `precios` DISABLE KEYS */;
INSERT INTO `precios` VALUES (1,5000,0,2000);
/*!40000 ALTER TABLE `precios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rol` int(11) DEFAULT '1',
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `usuario` (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'zeros','toor','carloscastilla31@gmail.com',3),(9,'tpia','12345','tpia@tpia.com',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vueloXpersona`
--

DROP TABLE IF EXISTS `vueloXpersona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vueloXpersona` (
  `idVueloXPersona` int(11) NOT NULL AUTO_INCREMENT,
  `numeroAsiento` int(11) NOT NULL,
  `clases` int(11) NOT NULL,
  `equipajes` int(11) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idVuelo` int(11) NOT NULL,
  `estado` int(11) DEFAULT '1',
  `valorTotal` int(11) DEFAULT NULL,
  `asiento` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVueloXPersona`),
  KEY `idPersona` (`idPersona`),
  KEY `idVuelo` (`idVuelo`),
  CONSTRAINT `idVuelo` FOREIGN KEY (`idVuelo`) REFERENCES `vuelos` (`idVuelo`),
  CONSTRAINT `vueloXpersona_ibfk_1` FOREIGN KEY (`idPersona`) REFERENCES `personas` (`idPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vueloXpersona`
--

LOCK TABLES `vueloXpersona` WRITE;
/*!40000 ALTER TABLE `vueloXpersona` DISABLE KEYS */;
INSERT INTO `vueloXpersona` VALUES (7,2,2,0,5,1,1,60000,1);
/*!40000 ALTER TABLE `vueloXpersona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vuelos`
--


DROP TABLE IF EXISTS `piloto`;

CREATE TABLE `piloto` (
	`idPiloto` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	`nombre` varchar(255) NOT NULL,
	`estado` int not null
);


INSERT INTO `piloto` VALUES (1,'zeros',1);


DROP TABLE IF EXISTS `vuelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vuelos` (
  `idVuelo` int(11) NOT NULL AUTO_INCREMENT,
  `fechaVuelo` date NOT NULL,
  `vueloOrigen` int(11) NOT NULL,
  `vueloDestino` int(11) NOT NULL,
  `hSalidad` varchar(11) NOT NULL,
  `valorVuelo` float DEFAULT NULL,
  `maxEquipaje` int(11) DEFAULT NULL,
  `TiempoEstimado` int(11) DEFAULT NULL,
  `idAvion` int(11) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `idPiloto` int(11) NOT NULL,
  PRIMARY KEY (`idVuelo`),
  KEY `vueloOrigen` (`vueloOrigen`),
  KEY `vueloDestino` (`vueloDestino`),
  KEY `idAvion_ibfk` (`idAvion`),
  KEY `idPiloto_ibfk` (`idPiloto`),
  CONSTRAINT `idAvion_ibfk` FOREIGN KEY (`idAvion`) REFERENCES `avion` (`idAvion`),
  CONSTRAINT `vuelos_ibfk_1` FOREIGN KEY (`vueloOrigen`) REFERENCES `municipios` (`idMunicipio`),
  CONSTRAINT `vuelos_ibfk_2` FOREIGN KEY (`vueloDestino`) REFERENCES `municipios` (`idMunicipio`),
	CONSTRAINT `vuelos_ibfk_3` FOREIGN KEY (`idPiloto`) REFERENCES `piloto` (`idPiloto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vuelos`
--

LOCK TABLES `vuelos` WRITE;
/*!40000 ALTER TABLE `vuelos` DISABLE KEYS */;
INSERT INTO `vuelos` VALUES (1,'2019-02-21',4,1,'14:22',30000,2,1,1,1,1),(3,'2019-02-22',2,1,'14:02',60000,10,2,2,1,1);
/*!40000 ALTER TABLE `vuelos` ENABLE KEYS */;
UNLOCK TABLES;


use ticket;

select vx.idVueloXPersona, p.cedula, p.primerNombre, p.primerApellido,p.segundoNombre, p.segundoApellido, p.telefono,

			 o.nombreMunicipio as origen, d.nombreMunicipio as destino, v.fechavuelo, v.valorVuelo,vx.valorTotal, v.hsalidad,
			 vx.numeroAsiento, vx.clases, vx.equipajes, a.nombreAvion, vx.estado
from personas p
			 inner join vueloXpersona vx on vx.idPersona = p.idPersona
			 inner join vuelos v on v.idVuelo = vx.idVuelo
			 inner join avion a on a.idAvion = v.idAvion
			 inner join municipios o on o.idMunicipio = v.vueloOrigen
			 inner join municipios d on d.idMunicipio = v.vueloDestino where vx.estado = 1 and v.estado = 1 and p.idUsuario  = 9;
