<?php
//Задание 1 Сформировать массив элементов, вывести при помощи цикла foreach
$itemsTsk01 = array(
    array(
        'title' => 'Reports',
        'tags'  => 'reports asd',
    ),
    array(
        'title' => 'Analytics',
        'tags'  => 'analytics graphs',
    ),
    array(
        'title' => 'Export',
        'tags'  => 'export download',
    ),
    array(
        'title' => 'Storage',
        'tags'  => 'storage',
    ),
);

//Задание 2 Сформировать массив элементов Privacy/Cookies and other similar technologies,
// вывести при помощи цикла foreach

$itemsTsk02 = array(
    array(
        'title' => 'Privacy',
        'tags'  => 'Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns. We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this). We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations. We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law. ',
    ),
    array(
        'title' => 'Cookies and other similar technologies',
        'tags'  => 'We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website, content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings. ',
    ),
);

//Задание 3 Вывод по условию. Сформировать массив элементов. Вывести при помощи цикла foreach.

$itemsTsk03 = [
    [
        "title" => "Главная",
        "href" => "example.com/",
        "is_link" => true
    ],

    [
        "title" => "PHP",
        "href" => "example.com/php",
        "is_link" => true
    ],

    [
        "title" => "Функции",
        "href" => "",
        "is_link" => false
    ],
];

//Задание 4. Сформировать массив элементов. Вывести при помощи цикла foreach.
//Дополнительные пояснения. При формирования массива берите все что формирует элемент:
// атрибуты тегов, значения стилей и др.

$itemsTsk04 = [
    [
        "title" => "My Tasks",
        "value" => "130 / 500",
        "bg" => "bg-fusion-400",
        "width" => "65%",
        "valuenow" => "65",
        "valuemin" => "0",
        "valuemax" => "100",
        "dFlex" => "mt-2",
        "MbOrMt" => "mb-3",
    ],

    [
        "title" => "Transfered",
        "value" => "440 TB",
        "bg" => "bg-success-500",
        "width" => "34%",
        "valuenow" => "34",
        "valuemin" => "0",
        "valuemax" => "100",
        "dFlex" => "",
        "MbOrMt" => "mb-3",
    ],

    [
        "title" => "Bugs Squashed",
        "value" => "77%",
        "bg" => "bg-info-400",
        "width" => "77%",
        "valuenow" => "77",
        "valuemin" => "0",
        "valuemax" => "100",
        "dFlex" => "",
        "MbOrMt" => "mb-3",
    ],

    [
        "title" => "User Testing",
        "value" => "7 days",
        "bg" => "bg-primary-300",
        "width" => "84%",
        "valuenow" => "84",
        "valuemin" => "0",
        "valuemax" => "100",
        "dFlex" => "",
        "MbOrMt" => "mb-g",
    ],
];

//Задание 5. Сформировать массив элементов. Вывести при помощи цикла foreach.

$itemsTsk05 = [
    [
        "image" => "img/demo/authors/sunny.png",
        "image_alt" => "Sunny A.",
        "name" => "Sunn A. (UI/UX Expert)",
        "job_title" => "Lead Author",
        "twitter_link_href" => "https://twitter.com/@myplaneticket",
        "twitter_link_text" => "@myplaneticket",
        "email_link_href" => "https://wrapbootstrap.com/user/myorange",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Sunny",
        "status" => "active"
    ],

    [
        "image" => "img/demo/authors/josh.png",
        "image_alt" => "Jos K.",
        "name" => "Jos K. ASP.NET Developer",
        "job_title" => "Partner &amp Contrubutor",
        "twitter_link_href" => "https://twitter.com/@atlantez",
        "twitter_link_text" => "@atlantez",
        "email_link_href" => "https://wrapbootstrap.com/user/Walapa",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Jos",
        "status" => "active"
    ],

    [
        "image" => "img/demo/authors/jovanni.png",
        "image_alt" => "Jovanni Lo",
        "name" => "Jovanni L. (PHP Developer)",
        "job_title" => "Partner &amp Contrubutor",
        "twitter_link_href" => "https://twitter.com/@lodev09",
        "twitter_link_text" => "@lodev09",
        "email_link_href" => "https://wrapbootstrap.com/user/lodev09",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Jovanni",
        "status" => "active"
    ],

    [
        "image" => "img/demo/authors/roberto.png",
        "image_alt" => "Roberto R.",
        "name" => "Roberto R. (Rails Developer)",
        "job_title" => "Partner &amp Contrubutor",
        "twitter_link_href" => "https://twitter.com/@sildur",
        "twitter_link_text" => "@sildur",
        "email_link_href" => "https://wrapbootstrap.com/user/sildur",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Roberto",
        "status" => "active"
    ],
];

//Задание 6. Дополнение к заданию 5.
//Представим, что два пользователя были забанены. Внесите изменения в результат предыдущего задания и доработайте задание.

$itemsTsk06 = [
    [
        "image" => "img/demo/authors/sunny.png",
        "image_alt" => "Sunny A.",
        "name" => "Sunn A. (UI/UX Expert)",
        "job_title" => "Lead Author",
        "twitter_link_href" => "https://twitter.com/@myplaneticket",
        "twitter_link_text" => "@myplaneticket",
        "email_link_href" => "https://wrapbootstrap.com/user/myorange",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Sunny",
        "status" => "active"
    ],

    [
        "image" => "img/demo/authors/josh.png",
        "image_alt" => "Jos K.",
        "name" => "Jos K. ASP.NET Developer",
        "job_title" => "Partner &amp Contrubutor",
        "twitter_link_href" => "https://twitter.com/@atlantez",
        "twitter_link_text" => "@atlantez",
        "email_link_href" => "https://wrapbootstrap.com/user/Walapa",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Jos",
        "status" => "active"
    ],

    [
        "image" => "img/demo/authors/jovanni.png",
        "image_alt" => "Jovanni Lo",
        "name" => "Jovanni L. (PHP Developer)",
        "job_title" => "Partner &amp Contrubutor",
        "twitter_link_href" => "https://twitter.com/@lodev09",
        "twitter_link_text" => "@lodev09",
        "email_link_href" => "https://wrapbootstrap.com/user/lodev09",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Jovanni",
        "status" => "banned"
    ],

    [
        "image" => "img/demo/authors/roberto.png",
        "image_alt" => "Roberto R.",
        "name" => "Roberto R. (Rails Developer)",
        "job_title" => "Partner &amp Contrubutor",
        "twitter_link_href" => "https://twitter.com/@sildur",
        "twitter_link_text" => "@sildur",
        "email_link_href" => "https://wrapbootstrap.com/user/sildur",
        "email_link_text" => '<i class="fal fa-envelope"></i>',
        "email_link_title" => "Contact Roberto",
        "status" => "banned"
    ],
];

//Задание 7. Дополнение к заданию 6.
//Реализуйте то же самое задание, но при помощи базы данных.
//Дополнительные пояснения. Нужно просто перенести сформированный массив в таблицу. А затем вывести эти данные как прежде.
//И задание 8. Сфомируйте таблицу в базе данных и выведите данные при помощи цикла.


//SQL для задания 7 и 8 / убрать комменты
//
//-- --------------------------------------------------------
//-- Хост:                         127.0.0.1
//-- Версия сервера:               8.0.15 - MySQL Community Server - GPL
//-- Операционная система:         Win64
//-- HeidiSQL Версия:              10.1.0.5464
//-- --------------------------------------------------------
//
///*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
///*!40101 SET NAMES utf8 */;
///*!50503 SET NAMES utf8mb4 */;
///*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
///*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
//
//
//-- Дамп структуры базы данных my_project
//CREATE DATABASE IF NOT EXISTS `my_project` /*!40100 DEFAULT CHARACTER SET utf8 */;
//USE `my_project`;
//
//-- Дамп структуры для таблица my_project.people
//CREATE TABLE IF NOT EXISTS `people` (
//`id` int(11) NOT NULL AUTO_INCREMENT,
//  `image` varchar(255) DEFAULT NULL,
//  `image_alt` varchar(255) DEFAULT NULL,
//  `name` varchar(255) DEFAULT NULL,
//  `job_title` varchar(255) DEFAULT NULL,
//  `twitter_link_href` varchar(255) DEFAULT NULL,
//  `twitter_link_text` varchar(255) DEFAULT NULL,
//  `email_link_href` varchar(255) DEFAULT NULL,
//  `email_link_text` varchar(255) DEFAULT NULL,
//  `email_link_title` varchar(255) DEFAULT NULL,
//  `status` varchar(255) DEFAULT NULL,
//  PRIMARY KEY (`id`)
//) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
//
//-- Дамп данных таблицы my_project.people: ~4 rows (приблизительно)
//    /*!40000 ALTER TABLE `people` DISABLE KEYS */;
//REPLACE INTO `people` (`id`, `image`, `image_alt`, `name`, `job_title`, `twitter_link_href`, `twitter_link_text`, `email_link_href`, `email_link_text`, `email_link_title`, `status`) VALUES
//(1, 'img/demo/authors/sunny.png', 'Sunny A.', 'Sunn A. (UI/UX Expert)', 'Lead Author', 'https://twitter.com/@myplaneticket', '@myplaneticket', 'https://wrapbootstrap.com/user/myorange', '<i class="fal fa-envelope"></i>', 'Contact Sunny', 'active'),
//	(2, 'img/demo/authors/josh.png', 'Jos K.', 'Jos K. ASP.NET Developer', 'Partner &amp Contrubutor', 'https://twitter.com/@atlantez', '@atlantez', 'https://wrapbootstrap.com/user/Walapa', '<i class="fal fa-envelope"></i>', 'Contact Jos', 'active'),
//	(3, 'img/demo/authors/jovanni.png', 'Jovanni Lo', 'Jovanni L. (PHP Developer)', 'Partner &amp Contrubutor', 'https://twitter.com/@lodev09', '@lodev09', 'https://twitter.com/@lodev09', '<i class="fal fa-envelope"></i>', 'Contact Jovanni', 'banned'),
//	(4, 'img/demo/authors/roberto.png', 'Roberto R.', 'Roberto R. (Rails Developer)', 'Partner &amp Contrubutor', 'https://wrapbootstrap.com/user/sildur', '@sildur', 'https://twitter.com/@sildur', '<i class="fal fa-envelope"></i>', 'Contact Roberto', 'banned');
///*!40000 ALTER TABLE `people` ENABLE KEYS */;
//
//-- Дамп структуры для таблица my_project.tasks
//CREATE TABLE IF NOT EXISTS `tasks` (
//`id` int(11) NOT NULL AUTO_INCREMENT,
//  `first_name` varchar(255) DEFAULT NULL,
//  `last_name` varchar(255) DEFAULT NULL,
//  `username` varchar(255) DEFAULT NULL,
//  PRIMARY KEY (`id`)
//) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
//
//-- Дамп данных таблицы my_project.tasks: ~4 rows (приблизительно)
//    /*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
//REPLACE INTO `tasks` (`id`, `first_name`, `last_name`, `username`) VALUES
//(1, ' 	Mark', 'Otto', '@mdo'),
//	(2, ' 	Jacob', 'Thornton', '@fat'),
//	(3, ' 	Larry', 'the Bird	the Bird', '@twitter'),
//	(4, 'Larry the Bird', 'Bird', '@twitter');
///*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
//
///*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
///*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
///*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;




//Задание 9. Напишите скрипт, который запишет данные из поля Text в таблицу Базы данных.
//Дополнительные пояснения. Также, нужно доработать ссылки.
// То есть при клике мы должны попадать на страницу show.php?id=5,
// где 5 это значение поля id. И так для каждого элемента.
//То же самое касательно ссылок Изменить и Удалить.

//Задание 10-15 Закинул в папку tasks экспорт базы данных my_project.sql