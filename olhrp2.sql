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

/*Table structure for table `about_tbl` */

DROP TABLE IF EXISTS `about_tbl`;

CREATE TABLE `about_tbl` (
  `abt_id` int(255) NOT NULL AUTO_INCREMENT,
  `mission` text,
  `vision` text,
  `corevalues` text,
  PRIMARY KEY (`abt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `about_tbl` */

insert  into `about_tbl`(`abt_id`,`mission`,`vision`,`corevalues`) values (1,'Lorem ipsum dolor sit amet,1\r\n\r\n\r\n consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

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
  `a_id` int(255) NOT NULL AUTO_INCREMENT,
  `an_name` varchar(255) DEFAULT NULL,
  `an_by` varchar(255) DEFAULT NULL,
  `an_con` text,
  `an_venue` varchar(255) DEFAULT NULL,
  `an_time` varchar(255) DEFAULT NULL,
  `an_date` date DEFAULT NULL,
  `an_posted` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `announce_tbl` */

insert  into `announce_tbl`(`a_id`,`an_name`,`an_by`,`an_con`,`an_venue`,`an_time`,`an_date`,`an_posted`) values (3,'d','12312','123123','123','09:09 PM','2018-01-19','Arnold Ondev');

/*Table structure for table `news_tbl` */

DROP TABLE IF EXISTS `news_tbl`;

CREATE TABLE `news_tbl` (
  `news_ID` int(255) NOT NULL AUTO_INCREMENT,
  `news` varchar(255) NOT NULL,
  `newsposted` varchar(255) NOT NULL,
  `newscon` text NOT NULL,
  `newspic` varchar(255) NOT NULL,
  `newsdate` date NOT NULL,
  PRIMARY KEY (`news_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `news_tbl` */

insert  into `news_tbl`(`news_ID`,`news`,`newsposted`,`newscon`,`newspic`,`newsdate`) values (7,'Arnold','Mutya Nang Naval','arnoldasdasdasdjascvabkcnasn nl','imahe/P Arnold.jpeg','2017-11-24'),(9,'Adannan','Arnold Ondev','tyagusdahsdugdyfgaudiahs','imahe/P Adannan8.jpeg','2017-11-17'),(10,'aspdapsdp','Mutya Nang Naval','mutya','imahe/P aspdapsdp9.jpeg','2017-11-24'),(11,'dsa','Mutya Nang Naval','sdahsjhagjsd','imahe/P dsa10.jpeg','2017-11-27');

/*Table structure for table `prayer_tbl` */

DROP TABLE IF EXISTS `prayer_tbl`;

CREATE TABLE `prayer_tbl` (
  `p_id` int(255) NOT NULL AUTO_INCREMENT,
  `prayername` varchar(255) DEFAULT NULL,
  `prayercon` text,
  `prayerposted` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `prayer_tbl` */

insert  into `prayer_tbl`(`p_id`,`prayername`,`prayercon`,`prayerposted`) values (1,'123123123123123','35168115\r\n\r\n\r\n16556','Arnold Ondev');

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
