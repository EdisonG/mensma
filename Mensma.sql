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

-- Volcando estructura para tabla mensma.bitacoras
CREATE TABLE IF NOT EXISTS `bitacoras` (
  `CODBITACORA` int(11) NOT NULL AUTO_INCREMENT,
  `CODUSUARIO` char(10) DEFAULT NULL,
  `DESCRIPCIONBITACORA` char(255) DEFAULT NULL,
  `FECHABITACORA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`CODBITACORA`),
  KEY `FK_REGISTRA` (`CODUSUARIO`),
  CONSTRAINT `FK_REGISTRA` FOREIGN KEY (`CODUSUARIO`) REFERENCES `usuarios` (`CODUSUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mensma.bitacoras: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `bitacoras` DISABLE KEYS */;
INSERT INTO `bitacoras` (`CODBITACORA`, `CODUSUARIO`, `DESCRIPCIONBITACORA`, `FECHABITACORA`) VALUES
	(1, 'admin', 'ingreso al sistema', '2018-04-03 15:23:54'),
	(2, 'juan', 'ingreso al sistema', '2018-04-03 15:43:37'),
	(3, 'admin', 'ingreso al sistema', '2018-04-03 15:48:05'),
	(4, 'juan', 'ingreso al sistema', '2018-04-03 15:48:56'),
	(5, 'admin', 'ingreso al sistema', '2018-04-03 15:54:18'),
	(6, 'juan', 'ingreso al sistema', '2018-04-03 15:54:28'),
	(7, 'juan', 'ingreso al sistema', '2018-04-03 17:23:37'),
	(8, 'juan', 'ingreso al sistema', '2018-04-04 15:25:54'),
	(9, 'admin', 'ingreso al sistema', '2018-04-04 15:26:17'),
	(10, 'admin', 'ingreso al sistema', '2018-04-04 15:27:01'),
	(11, 'juan', 'ingreso al sistema', '2018-04-04 15:35:25'),
	(12, 'juan', 'ingreso al sistema', '2018-04-04 15:43:29'),
	(13, 'juan', 'ingreso al sistema', '2018-04-04 16:08:40'),
	(14, 'juan', 'ingreso al sistema', '2018-04-04 16:23:55'),
	(15, 'juan', 'ingreso al sistema', '2018-04-05 14:40:38'),
	(16, 'juan', 'ingreso al sistema', '2018-04-05 15:14:34'),
	(17, 'admin', 'ingreso al sistema', '2018-04-05 15:29:48'),
	(18, 'juan', 'ingreso al sistema', '2018-04-05 15:33:57'),
	(19, 'admin', 'ingreso al sistema', '2018-04-05 15:39:56'),
	(20, 'juan', 'ingreso al sistema', '2018-04-05 15:43:14'),
	(21, 'juan', 'ingreso al sistema', '2018-04-05 15:53:28'),
	(22, 'admin', 'ingreso al sistema', '2018-04-05 15:53:39');
/*!40000 ALTER TABLE `bitacoras` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mensma.campanas: ~32 rows (aproximadamente)
/*!40000 ALTER TABLE `campanas` DISABLE KEYS */;
INSERT INTO `campanas` (`CODCAMPANA`, `CODUSUARIO`, `TIPOLETRACAMPANA`, `IMAGENCAMPANA`, `GIFCAMPANA`, `BASECAMPANA`, `VIDEOCAMPANA`, `NUMCLIENTESCAMPANA`, `FECHAINICAMPANA`, `FECHAFINCAMPANA`, `PRECIOCAMPANA`, `FECHACREACIONCAMPANA`, `TITULOCAMPANA`, `ESLOGANCAMPANA`) VALUES
	(3, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:26:34', 'campana prueba', 'eslogan prueba insert'),
	(5, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:27:21', 'campana prueba', 'eslogan prueba insert'),
	(6, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:27:23', 'campana prueba', 'eslogan prueba insert'),
	(7, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:27:24', 'campana prueba', 'eslogan prueba insert'),
	(8, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:27:25', 'campana prueba', 'eslogan prueba insert'),
	(9, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:27:26', 'campana prueba', 'eslogan prueba insert'),
	(10, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:53:35', 'campana prueba', 'eslogan prueba insert'),
	(11, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:53:40', 'campana prueba', 'eslogan prueba insert'),
	(12, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 13:53:42', 'campana prueba', 'eslogan prueba insert'),
	(13, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:00:42', 'campana prueba', 'eslogan prueba insert'),
	(14, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:02:18', 'campana prueba', 'eslogan prueba insert'),
	(15, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:02:20', 'campana prueba', 'eslogan prueba insert'),
	(16, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:02:44', 'campana prueba', 'eslogan prueba insert'),
	(17, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:03:02', 'campana prueba', 'eslogan prueba insert'),
	(18, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:04:09', 'campana prueba', 'eslogan prueba insert'),
	(19, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:04:54', 'campana prueba', 'eslogan prueba insert'),
	(20, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:08:44', 'campana prueba', 'eslogan prueba insert'),
	(21, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:08:51', 'campana prueba', 'eslogan prueba insert'),
	(22, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-03-28 15:10:34', 'campana prueba', 'eslogan prueba insert'),
	(23, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-04-03 15:01:01', 'campana prueba', 'eslogan prueba insert'),
	(24, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-04-03 15:01:12', 'campana prueba', 'eslogan prueba insert'),
	(25, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-04-03 15:01:55', 'campana prueba', 'eslogan prueba insert'),
	(26, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-04-03 15:02:06', 'campana prueba', 'eslogan prueba insert'),
	(27, 'admin', 'negrilla', 'imagen.jpg', 'gif.gif', 'excel.csv', 'video.mp4', 800, '2018-01-01 00:00:00', '2018-01-01 00:00:00', 0.00, '2018-04-03 15:02:23', 'campana prueba', 'eslogan prueba insert'),
	(29, 'juan', 'eslogan', 'foto.jpg', 'gif.jpg', 'foto.jpg', 'video.jpg', 100, '2018-04-04 00:00:00', '2018-04-30 00:00:00', 0.00, '2018-04-03 17:31:26', 'campaña 111', 'eslogan'),
	(30, 'juan', 'eslogan', 'foto.jpg', 'gif.jpg', 'foto.jpg', 'video.jpg', 100, '2018-04-14 00:00:00', '2018-04-30 00:00:00', 0.00, '2018-04-03 17:32:38', 'campaña 111', 'eslogan'),
	(31, 'juan', '11', 'foto.jpg', 'gif.jpg', 'foto.jpg', 'video.jpg', 100, '2018-04-12 00:00:00', '2018-04-18 00:00:00', 0.00, '2018-04-03 17:34:32', 'campaña 111', '11'),
	(32, 'juan', 'eslogan', 'foto.jpg', 'gif.jpg', 'foto.jpg', 'video.jpg', 100, '2018-04-05 00:00:00', '2018-04-14 00:00:00', 0.00, '2018-04-04 15:36:40', 'campaña 111', 'eslogan'),
	(33, 'juan', '11', 'foto.jpg', 'gif.jpg', 'foto.jpg', 'video.jpg', 100, '2018-04-20 00:00:00', '2018-04-30 00:00:00', 0.00, '2018-04-04 15:40:25', 'campaña 1112', '11'),
	(34, 'juan', 'eslogan', 'foto.jpg', 'gif.jpg', 'foto.jpg', 'video.jpg', 100, '2018-04-18 00:00:00', '2018-04-23 00:00:00', 0.00, '2018-04-04 16:11:22', 'campaña 111', 'eslogan'),
	(35, 'juan', 'eslogan', 'foto.jpg', 'gif.jpg', 'foto.jpg', 'video.jpg', 100, '2018-04-19 00:00:00', '2018-04-26 00:00:00', 0.00, '2018-04-04 16:16:38', 'campaña 111', 'eslogan');
/*!40000 ALTER TABLE `campanas` ENABLE KEYS */;

-- Volcando estructura para tabla mensma.estadisticas
CREATE TABLE IF NOT EXISTS `estadisticas` (
  `CODESTADISTICA` int(11) NOT NULL AUTO_INCREMENT,
  `CODCAMPANA` int(11) DEFAULT NULL,
  `LEIDOESTADISTICA` int(11) DEFAULT NULL,
  `NOLEIDOESTADISTICA` int(11) DEFAULT NULL,
  `PRIVADOESTADISTICA` int(11) DEFAULT NULL,
  `INACTIVOESTADISTICA` int(11) DEFAULT NULL,
  `SPAMESTADISTICA` int(11) DEFAULT NULL,
  PRIMARY KEY (`CODESTADISTICA`),
  KEY `FK_VARIAS` (`CODCAMPANA`),
  CONSTRAINT `FK_VARIAS` FOREIGN KEY (`CODCAMPANA`) REFERENCES `campanas` (`CODCAMPANA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mensma.estadisticas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estadisticas` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadisticas` ENABLE KEYS */;

-- Volcando estructura para tabla mensma.reportes
CREATE TABLE IF NOT EXISTS `reportes` (
  `CODREPORTE` int(11) NOT NULL AUTO_INCREMENT,
  `CODCAMPANA` int(11) DEFAULT NULL,
  `EXCELREPORTE` char(150) DEFAULT NULL,
  PRIMARY KEY (`CODREPORTE`),
  KEY `FK_MUCHOS` (`CODCAMPANA`),
  CONSTRAINT `FK_MUCHOS` FOREIGN KEY (`CODCAMPANA`) REFERENCES `campanas` (`CODCAMPANA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mensma.reportes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `reportes` DISABLE KEYS */;
/*!40000 ALTER TABLE `reportes` ENABLE KEYS */;

-- Volcando estructura para tabla mensma.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `CODUSUARIO` char(10) NOT NULL,
  `USUARIOUSUARIO` char(30) DEFAULT NULL,
  `CONTRASENAUSUARIO` char(20) DEFAULT NULL,
  `NOMBREUSUARIO` varchar(150) DEFAULT NULL,
  `FECHACREACIONUSUARIO` datetime DEFAULT NULL,
  `IMAGENUSUARIO` char(50) DEFAULT NULL,
  `TIPOUSUARIO` varchar(20) DEFAULT NULL,
  `MAILUSUARIO` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CODUSUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla mensma.usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`CODUSUARIO`, `USUARIOUSUARIO`, `CONTRASENAUSUARIO`, `NOMBREUSUARIO`, `FECHACREACIONUSUARIO`, `IMAGENUSUARIO`, `TIPOUSUARIO`, `MAILUSUARIO`) VALUES
	('admin', 'administrador', 'admin', 'admin', '2018-03-26 16:20:07', 'imagen.jpg', 'administrador', NULL),
	('juan', 'juan', '123', 'juan lopez', '2018-04-03 15:19:32', 'imagen_1.jpg', 'usuario', NULL),
	('pedro', 'pedro', '123', 'pedro lopez', '2018-04-03 15:19:32', 'imagen.jpg', 'usuario', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
