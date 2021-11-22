-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.15 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных my_project
CREATE DATABASE IF NOT EXISTS `my_project` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `my_project`;

-- Дамп структуры для таблица my_project.my_registration
CREATE TABLE IF NOT EXISTS `my_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы my_project.my_registration: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `my_registration` DISABLE KEYS */;
REPLACE INTO `my_registration` (`id`, `email`, `password`) VALUES
	(1, 'mail@mail.ru', 'ahalaimahalai'),
	(12, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
	(13, '123', '$2y$10$8TvjGMRdaLDjATJQlVUxFuvCXH6thNPjLxnz8xIgpGrVDFZX4isTe '),
	(20, '1234', '1234');
/*!40000 ALTER TABLE `my_registration` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
