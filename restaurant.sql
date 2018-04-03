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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `blog` */

insert  into `blog`(`id`,`titulo`,`contenido`,`fecha`,`foto`,`id_categoria`,`status`) values 
(1,'prueba 1 blog','contenido prueba 1 blog','2018-03-26','pizza.jpg',3,1),
(2,'noche de velas','este contenido es para la noche de velas','2018-03-30','res5.jpg',1,1),
(3,'hotcakes','un hotcake como nunca lo imaginaste','2018-03-12','hotcakes.jpg',4,1),
(4,'ratauil','de la pelicula a la mesa','2018-04-06','ratatui.jpg',4,1),
(5,'intento','intento de envio','2015-12-31','sd.jpg',5,1),
(6,'gtgtgtgt','redes','2018-12-31','IMG-20180110-WA0000.jpg',12,0),
(7,'nuevo post','otra foto para hacer mas cosas','2018-03-28','Screenshot_(2).png',4,1),
(28,'fondo negr','tan oscuro como lo vez','2018-03-28','Screenshot_(18).png',13,1),
(29,'cmd','este es ventana de cmd','2018-12-31','Screenshot_(23).png',14,1);

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
  `selected` enum('activo','none') COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'none',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `categoria_blog` */

insert  into `categoria_blog`(`id`,`titulo`,`status`,`selected`) values 
(1,'all foods',1,'activo'),
(2,'vegetables',1,'none'),
(3,'delicious food',1,'none'),
(4,'special dishes',1,'none'),
(5,'juices',1,'none'),
(11,'fr',1,'none'),
(12,'nueva cat',1,'none'),
(13,'prueba categoria nueva',1,'none'),
(14,'codigo',1,'none');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `chefs` */

insert  into `chefs`(`id`,`nombre`,`foto`,`puesto`,`descripcion`,`status`) values 
(1,'jose','chef1.jpg','jefe','wwww',1),
(2,'pepe','chef2.jpg','empleado','rrrr',1),
(3,'arturo','chef3.jpg','empleado','asldkjnaskdjnasdkj',1),
(4,'alfonso','chef4.jpg','empleado','ttttttttttttttttttttttt',1),
(5,'carlos','chef5.jpg','empleado','soy carlos',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `comentarios_clientes` */

insert  into `comentarios_clientes`(`id`,`titulo`,`descripcion`,`foto`,`nombre`,`status`) values 
(1,'excelente trato','buen trato por parte de todos los meceros','c1.jpg','jose pedro',1),
(2,'hola','esta es otra descripcion bien padre','c3.jpg','alfonsa',1),
(3,'tercer titulo','se supone que soy la ultima publicacion','c2.jpg','rodolfo',1);

/*Table structure for table `datos_restaurante` */

DROP TABLE IF EXISTS `datos_restaurante`;

CREATE TABLE `datos_restaurante` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `historia` text COLLATE utf8_spanish2_ci NOT NULL,
  `video` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `hi_lv` time NOT NULL,
  `hf_lv` time NOT NULL,
  `hi_sd` time NOT NULL,
  `hf_sd` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `datos_restaurante` */

insert  into `datos_restaurante`(`id`,`address`,`telefono`,`email`,`status`,`historia`,`video`,`hi_lv`,`hf_lv`,`hi_sd`,`hf_sd`) values 
(1,'Avenida insurgentes, calle aldama 34958','669 4367 201','luxury@gmail.com',1,'aqui va la historia, no se que inventar pero pues la escribo para que exista un poco de texto.','','10:00:00','22:00:00','11:00:00','23:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `especialidad_dia` */

insert  into `especialidad_dia`(`id`,`id_menu`,`status`) values 
(1,1,1),
(2,2,1);

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
  `extra_info` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `eventos` */

insert  into `eventos`(`id`,`titulo`,`descripcion`,`cosas_relevantes`,`status`,`fecha`,`hora_in`,`hora_fin`,`extra_info`) values 
(1,'La fiesta de los peces','Ven y disfruta de la gran variedad de pllatillos preparado con lo mejor del mundo marino, todo lo que puedas comer en este gran bufet del pescador.','Filetes de pescado al mojo de ajo,Variedades de sushis,Aleta de atun a la parrilla',1,'2018-03-24','09:00:00','19:00:00','No te pierdas lo mejor de la vida marina para tu paladar.'),
(2,'Tarde mexicana','Todos los tacos reunidos en un mismo lugar, prueba todo tipo de taco en todos los estilo que mexico te ofrece.','Tacos al pastor,Tacos de asada,Tacos de cabeza,Taquisa',1,'2018-03-28','14:30:00','19:30:00','Come todo lo que puedas a precios excelentes.'),
(3,'prueba 1','texto 1','sub text 1',1,'2018-03-31','15:45:00','20:00:00','info extra 1'),
(4,'prueba 2','texto p 2','sub text p 2',1,'2018-03-07','08:00:00','20:30:00','info prueba 2'),
(5,'qwesd','adaskdjasjdjasb','fdfsdfsdfsdf',1,'2018-03-26','08:25:00','14:00:00','sdasasdasd'),
(15,'pacman','el juego','fantasma 1,fantasma 2,fantasma 3',1,'2018-03-28','01:48:00','21:49:00','de pacman'),
(16,'asd','sdf','df',0,'2018-03-31','10:57:00','22:58:00','df'),
(17,'ricardo','awebo que si','el ricardo,esta,feo',1,'2018-03-30','08:57:00','23:58:00','sdsd'),
(18,'dddd','sd','sdfsd,df',1,'2018-03-29','10:46:00','22:57:00','dfdsd'),
(19,'bbbbbb','fgh','asd,df,fgh',1,'2018-03-29','11:58:00','12:59:00','fgh'),
(20,'evento de prueba despues del push actual','la descripcion del evento bien interesante va aquí','esta es una prueba,para ver,que todo,lo haga,bien',1,'2018-03-30','12:59:00','12:59:00','leelo, se que te va a encantar.'),
(21,'a','dfdf','asd,sd',1,'2018-12-31','00:59:00','12:57:00','sdfsdf'),
(22,'prueba de mas de 5','vfvfvf','fer1,un osu,o,que,firulais :v,extra',1,'2018-12-31','12:59:00','12:59:00','vfvfvfvfvfvfvfvfv'),
(23,'hhhhhhhhhhhhhhhhhhhhhhhhhhhh','ddd','dde,dede,deded,edede',1,'2018-03-14','12:59:00','10:59:00','f');

/*Table structure for table `eventos_destacados` */

DROP TABLE IF EXISTS `eventos_destacados`;

CREATE TABLE `eventos_destacados` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_evento` int(11) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `id_evento` (`id_evento`),
  CONSTRAINT `id_evento` FOREIGN KEY (`id_evento`) REFERENCES `eventos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `eventos_destacados` */

insert  into `eventos_destacados`(`id`,`id_evento`,`status`) values 
(1,4,1),
(2,2,1),
(3,1,1);

/*Table structure for table `fotos_eventos` */

DROP TABLE IF EXISTS `fotos_eventos`;

CREATE TABLE `fotos_eventos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `foto` char(200) COLLATE utf8_spanish2_ci NOT NULL,
  `principal` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'para indicar si sera la principal, es decir la foto grande o la pequeña',
  `eventos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `fotos_eventos` */

insert  into `fotos_eventos`(`id`,`foto`,`principal`,`eventos_id`) values 
(1,'fish-dish.jpg',1,1),
(2,'tacos.jpg',1,2),
(3,'camarones.jpg',1,3),
(4,'pollo.jpg',1,4),
(5,'sandwich.jpg',1,5),
(8,'Screenshot_(4).png',1,15),
(9,'Screenshot_(8).png',0,15),
(10,'Screenshot_(22).png',1,16),
(11,'',0,16),
(12,'Screenshot_(24).png',1,17),
(13,'Screenshot_(7).png',1,18),
(14,'Screenshot_(5).png',0,18),
(15,'Screenshot_(28).png',1,19),
(16,'Screenshot_(6).png',0,19),
(17,'Screenshot_(25).png',1,20),
(18,'Screenshot_(7)1.png',0,20),
(19,'Screenshot_(11).png',1,21),
(20,'Screenshot_(14).png',0,21),
(21,'Screenshot_(12).png',1,22),
(22,'Screenshot_(6)1.png',0,22),
(23,'Screenshot_(14)1.png',1,23),
(24,'Screenshot_(4)1.png',0,23);

/*Table structure for table `fotos_restaurante` */

DROP TABLE IF EXISTS `fotos_restaurante`;

CREATE TABLE `fotos_restaurante` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `tipo` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `fotos_restaurante` */

insert  into `fotos_restaurante`(`id`,`foto`,`status`,`tipo`) values 
(1,'res4.jpg',1,1),
(2,'res1.jpg',1,2),
(3,'res2.jpg',1,2),
(4,'res3.jpg',1,2),
(5,'res4.jpg',1,2),
(6,'res5.jpg',1,2),
(7,'res6.jpg',1,2),
(8,'res7.jpg',1,2),
(9,'res8.jpg',1,2),
(10,'res9.jpg',1,2),
(11,'res10.jpg',1,2);

/*Table structure for table `galeria` */

DROP TABLE IF EXISTS `galeria`;

CREATE TABLE `galeria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rutaName` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_galeria` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tipo_galeria` (`tipo_galeria`),
  CONSTRAINT `tipo_galeria` FOREIGN KEY (`tipo_galeria`) REFERENCES `galeria_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `galeria` */

insert  into `galeria`(`id`,`rutaName`,`tipo_galeria`,`status`) values 
(1,'assets/sources/img/restaurant/res1.jpg',2,1),
(2,'assets/sources/img/food/pizza.jpg',3,1),
(3,'assets/sources/img/restaurant/res2.jpg',2,1),
(4,'assets/sources/img/restaurant/res3.jpg',2,1),
(5,'assets/sources/img/restaurant/res4.jpg',2,1),
(6,'assets/sources/img/food/pizza2.jpg',3,1),
(9,'assets/sources/img/food/mollete.jpg',3,1),
(10,'assets/sources/img/food/chilaquiles.jpg',3,1),
(11,'assets/sources/img/food/ratatui.jpg',3,1),
(12,'assets/sources/img/food/sopa.jpg',3,1),
(13,'assets/sources/img/food/mollete.jpg',3,1),
(21,'assets/uploads/newFolder/Screenshot_(7)1.png',8,1),
(22,'assets/uploads/newFolder/Screenshot_(2).png',8,1);

/*Table structure for table `galeria_tipo` */

DROP TABLE IF EXISTS `galeria_tipo`;

CREATE TABLE `galeria_tipo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) CHARACTER SET latin1 NOT NULL,
  `icono` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `folder` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='PAra la galeria pues';

/*Data for the table `galeria_tipo` */

insert  into `galeria_tipo`(`id`,`categoria`,`icono`,`status`,`default`,`folder`) values 
(1,'All photos','i-all.png',1,1,''),
(2,'Restaurant','i-restaurant.png',1,1,''),
(3,'Food','i-food.png',1,1,''),
(4,'Desserts','i-desserts.png',1,1,''),
(8,'nueva cat','Screenshot_(8).png',0,0,'newFolder');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `mensajes_contactos` */

insert  into `mensajes_contactos`(`nombre`,`id`,`email`,`mensaje`,`status`) values 
('asdasd',1,'sds@asd','asdas',1),
('rrr',2,'rr@rr.com','rrrttrtr',1),
('fffff',3,'ffff@fff','fffffffffffffffffffff',0);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `menu` */

insert  into `menu`(`id`,`nombre`,`precio`,`tipo`,`descripcion`,`imagen`,`status`) values 
(1,'pizza',34,4,'piasdaskj','pizza.jpg',1),
(2,'mollete',25,1,'pan con frijol','mollete.jpg',1),
(3,'sopa',50,2,'sopa','sopa.jpg',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `recetas` */

insert  into `recetas`(`id`,`titulo`,`preparacion`,`termino`,`descripcion`,`ingredientes`,`foto`,`status`,`id_tipo`,`dificultad`) values 
(1,'aAAA','00:00:00','00:00:00','a','a','a',1,1,2);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `reservaciones` */

insert  into `reservaciones`(`id`,`nombre`,`email`,`fecha`,`hora`,`telefono`,`invitados`,`status`,`req_especiales`) values 
(1,'jesus daniel','dan@dan.com','2018-03-24','13:01:00','1231231232',3,1,'viva las americas'),
(2,'w','e@e.ccom','2018-12-31','00:59:00','34',5,0,'r'),
(3,'qwe','eqw','2018-12-31','12:59:00','234',3,1,'none'),
(4,'dfg','dfgd','2018-12-31','12:59:00','43534534',4,1,'none'),
(5,'fernanda','fer@fer.com','2018-12-31','12:59:00','12386',3,1,'que sea todo nice');

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
  CONSTRAINT `id_img_restaurante` FOREIGN KEY (`id_img_restaurante`) REFERENCES `fotos_restaurante` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `reservaciones_especiales` */

insert  into `reservaciones_especiales`(`id`,`id_img_restaurante`,`descripcion`,`titulo`,`status`) values 
(1,1,'sdfkjsdflksd lsdflksdj','sdfsdf',1),
(2,2,'ffffff','eeeee',1),
(3,3,'efefef','kkkk',1);

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

/*Table structure for table `tipo_foto_restaurante` */

DROP TABLE IF EXISTS `tipo_foto_restaurante`;

CREATE TABLE `tipo_foto_restaurante` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `tipo_foto_restaurante` */

insert  into `tipo_foto_restaurante`(`id`,`titulo`,`status`) values 
(1,'historia',1),
(2,'general',1);

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
