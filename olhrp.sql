/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.42-community : Database - olhrp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`olhrp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `olhrp`;

/*Table structure for table `account_tbl` */

DROP TABLE IF EXISTS `account_tbl`;

CREATE TABLE `account_tbl` (
  `u_id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `access` int(2) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `account_tbl` */

insert  into `account_tbl`(`u_id`,`username`,`password`,`fullname`,`email`,`phone`,`access`) values (1,'mutya','masa','Mutya Nang Naval','','',1),(2,'arnold','masa','Arnold Ondev','','',2);

/*Table structure for table `announce_tbl` */

DROP TABLE IF EXISTS `announce_tbl`;

CREATE TABLE `announce_tbl` (
  `a_id` int(255) NOT NULL,
  `an_name` varchar(255) NOT NULL,
  `an_by` varchar(255) NOT NULL,
  `an_con` text NOT NULL,
  `an_venue` varchar(255) NOT NULL,
  `an_time` varchar(255) NOT NULL,
  `an_date` date NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `announce_tbl` */

/*Table structure for table `news_tbl` */

DROP TABLE IF EXISTS `news_tbl`;

CREATE TABLE `news_tbl` (
  `news_ID` int(255) NOT NULL AUTO_INCREMENT,
  `news` varchar(255) NOT NULL,
  `newsposted` varchar(255) NOT NULL,
  `newscon` text NOT NULL,
  `newspic` varchar(255) NOT NULL,
  `newsdate` datetime NOT NULL,
  PRIMARY KEY (`news_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `news_tbl` */

insert  into `news_tbl`(`news_ID`,`news`,`newsposted`,`newscon`,`newspic`,`newsdate`) values (7,'Arnold','Mutya Nang Naval','arnoldasdasdasdjascvabkcnasn nl','imahe/P Arnold.jpeg','2017-11-24 00:00:00'),(9,'Adannan','Arnold Ondev','tyagusdahsdugdyfgaudiahs','imahe/P Adannan8.jpeg','2017-11-17 00:00:00'),(10,'aspdapsdp','Mutya Nang Naval','mutya','imahe/P aspdapsdp9.jpeg','2017-11-24 00:00:00'),(11,'dsa','Mutya Nang Naval','sdahsjhagjsd','imahe/P dsa10.jpeg','2017-11-27 00:00:00');

/*Table structure for table `prayer_tbl` */

DROP TABLE IF EXISTS `prayer_tbl`;

CREATE TABLE `prayer_tbl` (
  `p_id` int(255) NOT NULL,
  `prayername` varchar(255) NOT NULL,
  `prayercon` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prayer_tbl` */

/*Table structure for table `sunday_tbl` */

DROP TABLE IF EXISTS `sunday_tbl`;

CREATE TABLE `sunday_tbl` (
  `s_id` int(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_con` text NOT NULL,
  `s_bg` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sunday_tbl` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
