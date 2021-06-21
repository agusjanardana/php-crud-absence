-- Adminer 4.8.1-dev MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `absendb`;
CREATE DATABASE `absendb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `absendb`;

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `waktu` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;



-- 2021-06-21 05:50:34
