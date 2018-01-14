# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.20)
# Database: home13
# Generation Time: 2018-01-14 09:08:06 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table site_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_users`;

CREATE TABLE `site_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `last_name` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `gender` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `age` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `hobbies` text COLLATE utf8mb4_unicode_520_ci,
  `username` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `date_of_birth` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `card_number` char(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_520_ci,
  `categories` text COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

LOCK TABLES `site_users` WRITE;
/*!40000 ALTER TABLE `site_users` DISABLE KEYS */;

INSERT INTO `site_users` (`id`, `first_name`, `last_name`, `gender`, `age`, `hobbies`, `username`, `password`, `date_of_birth`, `card_number`, `about`, `categories`)
VALUES
	(30,'John','Doe','male','25','football, hockey','johndoe','$2y$10$jk6FBQ.7QZEKgcj7vbqq2.GkG4LqhFxxCF6ccJMhlsv7/MIfYPaeG','1989-03-02','1111222233334444','I am John Doe','art, travel'),
	(31,'Mary','Poppins','female','16','football, basketball, hockey, ski','mary','$2y$10$O2xfB36QLX298e6P9Mp.Ce64VVD/zLurDMLa2i4bkjJ6qfSjaVtVK','2006-01-04','2222333344445555','My name is Mary','art, work'),
	(32,'Mister','Twister','male','60','hockey, ski','mrtwist','$2y$10$JvD6KJqwMjkfWJFqG3SIJemVaHC/765b553H36fa0mmYyRiNgbwNu','1996-05-03','9999888877776666','I love business and watching TV','work, travel, family');

/*!40000 ALTER TABLE `site_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
