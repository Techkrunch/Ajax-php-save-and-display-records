/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.26 : Database - techkrunch-ajax
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`techkrunch-ajax` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `techkrunch-ajax`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`name`) values (1,'ian@GMAIL.COM','ian','ian');
insert  into `user`(`id`,`username`,`password`,`name`) values (2,'testing@yahoo.com','testing','testing ian');
insert  into `user`(`id`,`username`,`password`,`name`) values (3,'mike3@gmail.com','michael','mike');
insert  into `user`(`id`,`username`,`password`,`name`) values (4,'johndoe@gmail.com','john','johndoe');
insert  into `user`(`id`,`username`,`password`,`name`) values (5,'email@gmail.com','testing','testing test');
insert  into `user`(`id`,`username`,`password`,`name`) values (6,'techkrunch@gmail.com','12345','Techkrunch');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
