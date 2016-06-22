CREATE DATABASE /*!32312 IF NOT EXISTS*/`zendTest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `zendTest`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
