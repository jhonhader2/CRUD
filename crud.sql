-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.0.0.6518
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para personas
CREATE DATABASE IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci */;
USE `crud`;

-- Volcando estructura para tabla personas.ciudades
CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Volcando datos para la tabla personas.ciudades: ~0 rows (aproximadamente)
DELETE FROM `ciudades`;

-- Volcando estructura para tabla personas.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `primer_nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundo_nombre` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `primer_apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `segundo_apellido` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `id_sexo` bigint(20) unsigned NOT NULL,
  `id_ciudad` bigint(20) unsigned NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_personas_ciudades` (`id_ciudad`),
  KEY `FK_personas_sexo` (`id_sexo`),
  CONSTRAINT `FK_personas_ciudades` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id`),
  CONSTRAINT `FK_personas_sexo` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Volcando datos para la tabla personas.personas: ~0 rows (aproximadamente)
DELETE FROM `personas`;

-- Volcando estructura para tabla personas.sexo
CREATE TABLE IF NOT EXISTS `sexo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Volcando datos para la tabla personas.sexo: ~0 rows (aproximadamente)
DELETE FROM `sexo`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
