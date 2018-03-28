-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.19-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para mensma
CREATE DATABASE IF NOT EXISTS `mensma` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mensma`;

-- Volcando estructura para tabla mensma.campanas
CREATE TABLE IF NOT EXISTS `campanas` (
  `CODCAMPANA` int(11) NOT NULL AUTO_INCREMENT,
  `CODUSUARIO` char(10) DEFAULT NULL,
  `TIPOLETRACAMPANA` char(100) DEFAULT NULL,
  `IMAGENCAMPANA` char(100) DEFAULT NULL,
  `GIFCAMPANA` char(100) DEFAULT NULL,
  `BASECAMPANA` char(100) DEFAULT NULL,
  `VIDEOCAMPANA` char(100) DEFAULT NULL,
  `NUMCLIENTESCAMPANA` int(11) DEFAULT NULL,
  `FECHAINICAMPANA` datetime DEFAULT NULL,
  `FECHAFINCAMPANA` datetime DEFAULT NULL,
  `PRECIOCAMPANA` decimal(8,2) DEFAULT NULL,
  `FECHACREACIONCAMPANA` datetime DEFAULT NULL,
  `TITULOCAMPANA` varchar(100) DEFAULT NULL,
  `ESLOGANCAMPANA` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CODCAMPANA`),
  KEY `FK_EFECTUA` (`CODUSUARIO`),
  CONSTRAINT `FK_EFECTUA` FOREIGN KEY (`CODUSUARIO`) REFERENCES `usuarios` (`CODUSUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mensma.campanas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `campanas` DISABLE KEYS */;
INSERT INTO `campanas` (`CODCAMPANA`, `CODUSUARIO`, `TIPOLETRACAMPANA`, `IMAGENCAMPANA`, `GIFCAMPANA`, `BASECAMPANA`, `VIDEOCAMPANA`, `NUMCLIENTESCAMPANA`, `FECHAINICAMPANA`, `FECHAFINCAMPANA`, `PRECIOCAMPANA`, `FECHACREACIONCAMPANA`, `TITULOCAMPANA`, `ESLOGANCAMPANA`) VALUES
	(1, 'admin', 'cursiva', 'imagen.jpg', 'gif.gif', 'excel1.csv', 'video.mp4', 400, '2018-03-27 15:30:14', '2018-03-27 15:30:16', 0.00, '2018-03-27 15:30:31', 'Campaña prueba', 'eslogan prueba'),
	(2, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel2.csv', 'video.mp4', 400, '2018-03-27 15:30:14', '2018-03-27 15:30:14', 0.00, '2018-03-27 15:30:31', 'Campaña prueba 2\r\n', 'eslogan prueba 2');
/*!40000 ALTER TABLE `campanas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
