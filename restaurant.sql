/*
SQLyog Community v12.4.2 (64 bit)
MySQL - 10.1.26-MariaDB : Database - restaurant
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`restaurant` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `restaurant`;

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` char(100) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `foto` char(100) COLLATE utf8_spanish2_ci NOT NULL,
  `id_categoria` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `blog` */

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` char(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `categoria` */

/*Table structure for table `categoria_blog` */

DROP TABLE IF EXISTS `categoria_blog`;

CREATE TABLE `categoria_blog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `categoria_blog` */

/*Table structure for table `chefs` */

DROP TABLE IF EXISTS `chefs`;

CREATE TABLE `chefs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `puesto` enum('jefe','empleado') COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'empleado',
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `chefs` */

/*Table structure for table `comentarios_clientes` */

DROP TABLE IF EXISTS `comentarios_clientes`;

CREATE TABLE `comentarios_clientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `comentarios_clientes` */

/*Table structure for table `datos_restaurante` */

DROP TABLE IF EXISTS `datos_restaurante`;

CREATE TABLE `datos_restaurante` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `h_lunes_viernes` varchar(20) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '10am - 10pm',
  `h_sabado_domingo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL DEFAULT '09am - 11pm',
  `address` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `historia` text COLLATE utf8_spanish2_ci NOT NULL,
  `video` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `datos_restaurante` */

/*Table structure for table `especialidad_chefs` */

DROP TABLE IF EXISTS `especialidad_chefs`;

CREATE TABLE `especialidad_chefs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_chef` int(11) unsigned NOT NULL,
  `id_tipo_alimento` int(4) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_chef` (`id_chef`),
  KEY `id_tipo_alimento` (`id_tipo_alimento`),
  CONSTRAINT `id_chef` FOREIGN KEY (`id_chef`) REFERENCES `chefs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_tipo_alimento` FOREIGN KEY (`id_tipo_alimento`) REFERENCES `tipo_alimento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `especialidad_chefs` */

/*Table structure for table `especialidad_dia` */

DROP TABLE IF EXISTS `especialidad_dia`;

CREATE TABLE `especialidad_dia` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `especialidad_dia` */

/*Table structure for table `eventos` */

DROP TABLE IF EXISTS `eventos`;

CREATE TABLE `eventos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `cosas_relevantes` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Igualmente, dar formato para que se muestre en forma de lista',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` date NOT NULL,
  `hora_in` time NOT NULL,
  `hora_fin` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `eventos` */

/*Table structure for table `eventos_destacados` */

DROP TABLE IF EXISTS `eventos_destacados`;

CREATE TABLE `eventos_destacados` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_evento` int(11) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_evento` (`id_evento`),
  CONSTRAINT `id_evento` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `eventos_destacados` */

/*Table structure for table `fotos_eventos` */

DROP TABLE IF EXISTS `fotos_eventos`;

CREATE TABLE `fotos_eventos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `foto` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `principal` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'para indicar si sera la principal, es decir la foto grande o la pequeña',
  `eventos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `fotos_eventos` */

/*Table structure for table `imagenes_restaurante` */

DROP TABLE IF EXISTS `imagenes_restaurante`;

CREATE TABLE `imagenes_restaurante` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `imagenes_restaurante` */

/*Table structure for table `mensajes_contactos` */

DROP TABLE IF EXISTS `mensajes_contactos`;

CREATE TABLE `mensajes_contactos` (
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `mensajes_contactos` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` double unsigned NOT NULL,
  `tipo` int(4) unsigned NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo_alimento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `menu` */

/*Table structure for table `nuestrahistoria` */

DROP TABLE IF EXISTS `nuestrahistoria`;

CREATE TABLE `nuestrahistoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` char(100) COLLATE utf8_spanish2_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  `foto` char(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `nuestrahistoria` */

/*Table structure for table `pasos_receta` */

DROP TABLE IF EXISTS `pasos_receta`;

CREATE TABLE `pasos_receta` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `orden` int(11) unsigned NOT NULL,
  `pasos` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_receta` int(11) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_receta` (`id_receta`),
  CONSTRAINT `id_receta` FOREIGN KEY (`id_receta`) REFERENCES `recetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `pasos_receta` */

/*Table structure for table `recetas` */

DROP TABLE IF EXISTS `recetas`;

CREATE TABLE `recetas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `preparacion` time NOT NULL COMMENT 'tiempo de preparacion de ingredientes',
  `termino` time NOT NULL COMMENT 'tiempo que lleva terminar la receta aproximadamente',
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `ingredientes` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'buscar forma de que enliste los ingredientes como lo requiere la pagina',
  `foto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `id_tipo` int(11) unsigned NOT NULL,
  `dificultad` int(2) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo` (`id_tipo`),
  CONSTRAINT `id_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_alimento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `recetas` */

/*Table structure for table `recetas_especiales` */

DROP TABLE IF EXISTS `recetas_especiales`;

CREATE TABLE `recetas_especiales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_receta` int(11) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `recetas_especiales` */

/*Table structure for table `reservaciones` */

DROP TABLE IF EXISTS `reservaciones`;

CREATE TABLE `reservaciones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(130) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `invitados` int(4) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `req_especiales` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `reservaciones` */

/*Table structure for table `reservaciones_especiales` */

DROP TABLE IF EXISTS `reservaciones_especiales`;

CREATE TABLE `reservaciones_especiales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_img_restaurante` int(10) unsigned NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_img_restaurante` (`id_img_restaurante`),
  CONSTRAINT `id_img_restaurante` FOREIGN KEY (`id_img_restaurante`) REFERENCES `imagenes_restaurante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `reservaciones_especiales` */

/*Table structure for table `tipo_alimento` */

DROP TABLE IF EXISTS `tipo_alimento`;

CREATE TABLE `tipo_alimento` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `icono` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `tipo_alimento` */

insert  into `tipo_alimento`(`id`,`tipo`,`icono`,`status`) values 
(1,'Desayunos',NULL,1),
(2,'Almuerzos',NULL,1),
(3,'Snack',NULL,1),
(4,'Pizza',NULL,1),
(5,'Sopas',NULL,1),
(6,'Cenas',NULL,1),
(7,'postres',NULL,1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `a_p` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `a_m` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pssw` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ultima_conexion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_registro` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(2) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
