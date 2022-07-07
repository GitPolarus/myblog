-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour myblog_db
CREATE DATABASE IF NOT EXISTS `myblog_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `myblog_db`;

-- Listage de la structure de la table myblog_db. article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `publication_date` date NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `id_autor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_autor` (`id_autor`),
  CONSTRAINT `FK_autor` FOREIGN KEY (`id_autor`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table myblog_db.article : ~0 rows (environ)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

-- Listage de la structure de la table myblog_db. comment
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `pseudo` varchar(50) DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `comment_date` date NOT NULL,
  `id_article` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK__article` (`id_article`),
  CONSTRAINT `FK__article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table myblog_db.comment : ~0 rows (environ)
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;

-- Listage de la structure de la table myblog_db. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL DEFAULT '0',
  `last_name` varchar(50) NOT NULL DEFAULT '0',
  `pseudo` varchar(50) DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `role` varchar(50) NOT NULL,
  `activate` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table myblog_db.user : ~2 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `first_name`, `last_name`, `pseudo`, `email`, `password`, `birth_date`, `role`, `activate`) VALUES
	(1, 'Hippolyte', 'EZIAN', '', 'polarus@gmail.com', '$2y$10$l1RcTUr20PkZle9VKgPB/OqJYKghr66AKk9Sp6nkD5eGsAejKuNTS', '2022-07-06', 'admin', 1),
	(2, 'Sophia', 'TOUKRAM', '', 'sophia@gmail.com', '$2y$10$dt4UKm6kU3gV9hHQ.kUe9Ovkt/mGAnQj5WIko0gWtp3Sm4tk7lq2a', '2022-07-01', 'user', 1),
	(3, 'Abdoulaye', 'DIOLE', '', 'abdou@gmail.com', '$2y$10$hP6Ydmu1YQjoPr8SgKrZRe8460RKGu67NLYI3wMKgpdtJfBnh5daa', '2004-03-06', 'user', 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
