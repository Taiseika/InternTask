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


-- Дамп структуры базы данных registr
CREATE DATABASE IF NOT EXISTS `registr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `registr`;

-- Дамп структуры для таблица registr.adbook
CREATE TABLE IF NOT EXISTS `adbook` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы registr.adbook: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `adbook` DISABLE KEYS */;
INSERT INTO `adbook` (`id`, `firstname`, `secondname`) VALUES
	(1, 'Mike', 'Nikelson'),
	(5, 'Sergei', 'Mironov'),
	(6, 'Mila', 'Rodnaja'),
	(7, 'Egor', 'Nazarov'),
	(8, 'Habiba', 'Murmagovedova'),
	(9, 'Дядя', 'Федор'),
	(10, 'Роман', 'Григорьевич'),
	(11, 'Влад', 'Поляков'),
	(12, 'Jin', 'Jonston');
/*!40000 ALTER TABLE `adbook` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
