/*
SQLyog Professional v12.5.1 (32 bit)
MySQL - 10.1.19-MariaDB : Database - wpu_rest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wpu_rest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `wpu_rest`;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Gender` enum('M','F') NOT NULL COMMENT 'M: MALE, F:FEMALE',
  `Is_married` enum('Y','N') NOT NULL COMMENT 'Y: Yes, N: No',
  `Address` varchar(200) NOT NULL,
  `Last_login` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`ID`,`Name`,`Email`,`Password`,`Gender`,`Is_married`,`Address`,`Last_login`) values 
(10,'admin','admin@yahoo.com','0192023a7bbd73250516f069df18b500','M','Y','indonesia','0000-00-00 00:00:00'),
(11,'bismar','bismar_gazali@yahoo.co.id','66bab6414f27e1849265139ca5bba711','M','Y','jakarta timur','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
