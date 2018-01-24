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
  `isDeleted` int(2) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `account_tbl` */

insert  into `account_tbl`(`u_id`,`username`,`password`,`fullname`,`email`,`phone`,`access`,`isDeleted`) values (1,'mutya','masa','Mutya Nang Naval','','',1,0),(2,'arnold','masa','Arnold Ondev','123@gmail.com','',2,0),(3,'Arno','123123123','123123 123123','123@gmail.com','123123123',2,0);

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

/*Table structure for table `feedback_tbl` */

DROP TABLE IF EXISTS `feedback_tbl`;

CREATE TABLE `feedback_tbl` (
  `f_id` int(255) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) DEFAULT NULL,
  `f_email` varchar(255) DEFAULT NULL,
  `f_message` text,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `feedback_tbl` */

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

insert  into `news_tbl`(`news_ID`,`news`,`newsposted`,`newscon`,`newspic`,`newsdate`) values (7,'Arnold','Mutya Nang Naval','Lorem ipsum dolor sit amet,1\r\n\r\n\r\n consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','imahe/P Arnold.jpeg','2018-01-20'),(9,'Adannan','Arnold Ondev','Lorem ipsum dolor sit amet,1\r\n\r\n\r\n consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','imahe/P Adannan8.jpeg','2018-01-20'),(10,'aspdapsdp','Mutya Nang Naval','Lorem ipsum dolor sit amet,1\r\n\r\n\r\n consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','imahe/P aspdapsdp9.jpeg','2018-01-20'),(11,'dsa','Mutya Nang Naval','Lorem ipsum dolor sit amet,1\r\n\r\n\r\n consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','imahe/P dsa10.jpeg','2018-01-20');

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

/*Table structure for table `reserve_tbl` */

DROP TABLE IF EXISTS `reserve_tbl`;

CREATE TABLE `reserve_tbl` (
  `r_id` int(255) NOT NULL AUTO_INCREMENT,
  `u_id` int(255) DEFAULT NULL,
  `r_name` varchar(255) DEFAULT NULL,
  `v_id` varchar(255) DEFAULT NULL,
  `r_date` date DEFAULT NULL,
  `t_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  KEY `FK_reserve_tbl` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `reserve_tbl` */

insert  into `reserve_tbl`(`r_id`,`u_id`,`r_name`,`v_id`,`r_date`,`t_id`) values (1,2,'sadasdasd','1','2018-01-21',1);

/*Table structure for table `sunday_tbl` */

DROP TABLE IF EXISTS `sunday_tbl`;

CREATE TABLE `sunday_tbl` (
  `s_id` int(255) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `s_con` text,
  `s_bg` varchar(255) DEFAULT NULL,
  `s_posted` varchar(255) DEFAULT NULL,
  `s_date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `sunday_tbl` */

insert  into `sunday_tbl`(`s_id`,`s_name`,`s_con`,`s_bg`,`s_posted`,`s_date`) values (2,'a','asd','imahe/P a.jpeg','Arnold Ondev','2018-01-16'),(3,'ab','asdasd','imahe/P ab2.jpeg','Arnold Ondev','2018-01-15');

/*Table structure for table `time_tbl` */

DROP TABLE IF EXISTS `time_tbl`;

CREATE TABLE `time_tbl` (
  `t_id` int(255) NOT NULL AUTO_INCREMENT,
  `t_start` varchar(255) DEFAULT NULL,
  `t_end` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `time_tbl` */

insert  into `time_tbl`(`t_id`,`t_start`,`t_end`) values (1,'08:00 AM','11:00 AM'),(2,'12:00 PM','03:00 PM'),(3,'04:00 PM','07:00 PM');

/*Table structure for table `venue_tbl` */

DROP TABLE IF EXISTS `venue_tbl`;

CREATE TABLE `venue_tbl` (
  `v_id` int(255) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `venue_tbl` */

insert  into `venue_tbl`(`v_id`,`v_name`) values (1,'Parish'),(2,'Parish Hall'),(3,'Kitchen'),(4,'Youth Center'),(5,'Formation Hall');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
