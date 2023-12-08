/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - lelang_padi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lelang_padi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `lelang_padi`;

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `role` */

insert  into `role`(`id`,`role_name`) values 
(1,'penawar'),
(2,'petani');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `no_rekening` varchar(20) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `PASSWORD` varchar(250) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`no_hp`,`no_rekening`,`email`,`alamat`,`PASSWORD`,`role_id`) values 
(1,'Suandika Napitupulu','089506304965','111111111111','suandikanapitupulu08@gmail.com','JL.Dr.T.B Silalahi KOMP Gereja Methodis Hinalang','$2y$10$7Uid7Rv6kQaBnPA59WBEd.aO0VrEfji89AhdhOVynEuOSMP8hA9xq',1),
(5,'Suandika Napitupulu','08921323112','2313123123123','suandikanapitupulu108@gmail.com','JL.Dr.T.B Silalahi KOMP Gereja Methodis Hinalang','$2y$10$wptXGpiBm4tXNcec0KbrJuURqN8CaS3el9VGgH3CV3otggCQpiX9y',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
