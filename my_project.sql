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

-- Дамп данных таблицы my_project.my_registration: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `my_registration` DISABLE KEYS */;
REPLACE INTO `my_registration` (`id`, `email`, `password`) VALUES
	(1, 'mail@mail.ru', 'ahalaimahalai'),
	(12, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
	(13, '123', '$2y$10$8TvjGMRdaLDjATJQlVUxFuvCXH6thNPjLxnz8xIgpGrVDFZX4isTe '),
	(20, '1234', '1234');
/*!40000 ALTER TABLE `my_registration` ENABLE KEYS */;

-- Дамп структуры для таблица my_project.my_table
CREATE TABLE IF NOT EXISTS `my_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы my_project.my_table: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `my_table` DISABLE KEYS */;
REPLACE INTO `my_table` (`id`, `text`) VALUES
	(1, 'Lorem ipsum'),
	(28, '123'),
	(35, '333'),
	(36, '321'),
	(37, '334'),
	(38, '1234');
/*!40000 ALTER TABLE `my_table` ENABLE KEYS */;

-- Дамп структуры для таблица my_project.people
CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `image_alt` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `twitter_link_href` varchar(255) DEFAULT NULL,
  `twitter_link_text` varchar(255) DEFAULT NULL,
  `email_link_href` varchar(255) DEFAULT NULL,
  `email_link_text` varchar(255) DEFAULT NULL,
  `email_link_title` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы my_project.people: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `people` DISABLE KEYS */;
REPLACE INTO `people` (`id`, `image`, `image_alt`, `name`, `job_title`, `twitter_link_href`, `twitter_link_text`, `email_link_href`, `email_link_text`, `email_link_title`, `status`) VALUES
	(1, 'img/demo/authors/sunny.png', 'Sunny A.', 'Sunn A. (UI/UX Expert)', 'Lead Author', 'https://twitter.com/@myplaneticket', '@myplaneticket', 'https://wrapbootstrap.com/user/myorange', '<i class="fal fa-envelope"></i>', 'Contact Sunny', 'active'),
	(2, 'img/demo/authors/josh.png', 'Jos K.', 'Jos K. ASP.NET Developer', 'Partner &amp Contrubutor', 'https://twitter.com/@atlantez', '@atlantez', 'https://wrapbootstrap.com/user/Walapa', '<i class="fal fa-envelope"></i>', 'Contact Jos', 'active'),
	(3, 'img/demo/authors/jovanni.png', 'Jovanni Lo', 'Jovanni L. (PHP Developer)', 'Partner &amp Contrubutor', 'https://twitter.com/@lodev09', '@lodev09', 'https://twitter.com/@lodev09', '<i class="fal fa-envelope"></i>', 'Contact Jovanni', 'banned'),
	(4, 'img/demo/authors/roberto.png', 'Roberto R.', 'Roberto R. (Rails Developer)', 'Partner &amp Contrubutor', 'https://wrapbootstrap.com/user/sildur', '@sildur', 'https://twitter.com/@sildur', '<i class="fal fa-envelope"></i>', 'Contact Roberto', 'banned');
/*!40000 ALTER TABLE `people` ENABLE KEYS */;

-- Дамп структуры для таблица my_project.tasks
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы my_project.tasks: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
REPLACE INTO `tasks` (`id`, `first_name`, `last_name`, `username`) VALUES
	(1, ' 	Mark', 'Otto', '@mdo'),
	(2, ' 	Jacob', 'Thornton', '@fat'),
	(3, ' 	Larry', 'the Bird	the Bird', '@twitter'),
	(4, 'Larry the Bird', 'Bird', '@twitter');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
