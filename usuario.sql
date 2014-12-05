/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.16 : Database - usuario
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`usuario` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `usuario`;

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_alumno` int(6) DEFAULT NULL,
  `id_grupo` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `alumno_grupo` */

insert  into `alumno_grupo`(`id`,`id_alumno`,`id_grupo`) values (1,5,2),(3,10,3),(4,7,1);

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

insert  into `grupo`(`id`,`nombre`) values (1,'TIC 71'),(2,'TIC 72'),(3,'TIC 73');

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(6) DEFAULT NULL,
  `id_materia` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

insert  into `maestro_materia`(`id`,`id_maestro`,`id_materia`) values (7,4,4),(9,3,4),(10,3,1),(11,4,1),(13,8,4),(14,8,1),(18,1,1),(19,3,5),(21,3,3);

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `orden` varchar(250) DEFAULT NULL,
  `estatus` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

insert  into `materia`(`id`,`nombre`,`avatar`,`orden`,`estatus`) values (1,'Matemáticas',NULL,NULL,1),(2,'Español',NULL,NULL,1),(3,'Inglés',NULL,NULL,1),(4,'POO',NULL,NULL,1),(5,'Admin. del tiempo',NULL,NULL,1);

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `idp` int(11) DEFAULT NULL,
  `pregunta` varchar(200) DEFAULT NULL,
  `respuesta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

insert  into `preguntas`(`idp`,`pregunta`,`respuesta`) values (1,'¿Cuanto es 35 -45?','-10'),(2,'¿Cuanto es 32 -5?','27'),(3,'¿Cuanto es 35 -100?','-65'),(4,'¿Cuanto es -5 -65?','-70'),(5,'¿Cuanto es 35 +45?','80'),(6,'¿Cuanto es 35 +5?','40'),(7,'¿Cuanto es 35 +9?','44'),(8,'¿Cuanto es 33 /3?','11'),(9,'¿Cuanto es 30 *5?','150'),(10,'¿Cuanto es 44 /2?','22'),(11,'¿Cuanto es 44 /1?','44'),(12,'¿Cuanto es 224 /2?','112'),(13,'¿Cuanto es 46 *2?','92'),(14,'¿Cuanto es 12 +6?','18'),(15,'¿Cuanto es 4 *22?','88');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(250) DEFAULT NULL,
  `ApellidoPaterno` varchar(250) DEFAULT NULL,
  `ApellidoMaterno` varchar(250) DEFAULT NULL,
  `Telefono` varchar(250) DEFAULT NULL,
  `Calle` varchar(250) DEFAULT NULL,
  `NumeroExterior` int(5) DEFAULT NULL,
  `NumeroInterior` int(5) DEFAULT NULL,
  `Colonia` varchar(250) DEFAULT NULL,
  `Municipio` varchar(250) DEFAULT NULL,
  `Estado` varchar(250) DEFAULT NULL,
  `CP` int(6) DEFAULT NULL,
  `Correo` varchar(250) DEFAULT NULL,
  `Usuario` varchar(250) DEFAULT NULL,
  `Contrasena` varchar(250) DEFAULT NULL,
  `Nivel` varchar(250) DEFAULT NULL,
  `Estatus` varchar(250) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `aciertos` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`Telefono`,`Calle`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Municipio`,`Estado`,`CP`,`Correo`,`Usuario`,`Contrasena`,`Nivel`,`Estatus`,`pass`,`aciertos`) values (1,'Angelica','López','Ramirez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Angelica','angy','2','1','angy',8),(3,'Raúl','García','Martinez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Raul','123','2','1','123',6),(4,'Alberto','Colín','Eusebio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Alberto','beto','1','1','beto',9),(5,'Miriam','Castro','Pérez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Miriam',NULL,'3','1',NULL,6),(7,'Jose','López','Reyes',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Jose',NULL,'3','1',NULL,6),(8,'Carlos','Colín','Eusebio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Carlos','car','2','1','car',6),(10,'Juan','Sanchez','Juarez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Juan',NULL,'3','1',NULL,6);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(6) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  KEY `id_user` (`id`),
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`pass`) values (4,'beto','alberto'),(7,'car','carlos');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
