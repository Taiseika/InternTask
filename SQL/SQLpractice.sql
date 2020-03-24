-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных practic
CREATE DATABASE IF NOT EXISTS `practic` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `practic`;

-- Дамп структуры для таблица practic.company
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы practic.company: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` (`id`, `comp_name`) VALUES
	(1, 'Моя компания'),
	(2, 'Дочерняя  компания');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;

-- Дамп структуры для таблица practic.depart
CREATE TABLE IF NOT EXISTS `depart` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `departmen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_comp` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы practic.depart: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `depart` DISABLE KEYS */;
INSERT INTO `depart` (`id`, `departmen`, `id_comp`) VALUES
	(1, 'экономисты', 1),
	(2, 'бухгалтера', 1),
	(3, 'програмисты', 2),
	(4, 'логисты', 1);
/*!40000 ALTER TABLE `depart` ENABLE KEYS */;

-- Дамп структуры для таблица practic.workes
CREATE TABLE IF NOT EXISTS `workes` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `SecondName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `id_depart` int(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы practic.workes: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `workes` DISABLE KEYS */;
INSERT INTO `workes` (`Id`, `name`, `SecondName`, `id_depart`) VALUES
	(1, 'Ivan', 'Ivanov', 2),
	(2, 'Dima', 'Dmitrov', 2),
	(3, 'Petro', 'Petrovna', 1),
	(4, 'Fara', 'Ferovna', 3),
	(5, 'Anna', 'Viktorovna', 4);
/*!40000 ALTER TABLE `workes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
