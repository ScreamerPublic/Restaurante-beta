# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-04-24 22:34:53
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "datos_empresa"
#

DROP TABLE IF EXISTS `datos_empresa`;
CREATE TABLE `datos_empresa` (
  `id_datos_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(255) DEFAULT NULL,
  `numero_fijo` varchar(255) DEFAULT NULL,
  `numero_celular` varchar(255) DEFAULT NULL,
  `correo_empresa` varchar(255) DEFAULT NULL,
  `direccion_empresa` varchar(255) DEFAULT NULL,
  `direccion_mapa` varchar(255) DEFAULT NULL,
  `horarios_atencion` text DEFAULT NULL,
  PRIMARY KEY (`id_datos_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "datos_empresa"
#

INSERT INTO `datos_empresa` VALUES (1,'Restaurante','+503 2535-1526','+503 7358-2967','restaurante@gmail.com','Calle norte col. escalon casa #3',NULL,'Lunes - Sábado:\n\t\t\t  11:00 AM - 2300 PM');

#
# Structure for table "descenso_sub_menu"
#

DROP TABLE IF EXISTS `descenso_sub_menu`;
CREATE TABLE `descenso_sub_menu` (
  `id_descenso_sub_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub_menu` int(11) NOT NULL,
  `nombre_descenso_sub_menu` varchar(255) NOT NULL,
  `direccion_descenso_sub_menu` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1 COMMENT '0 eliminado, 1 activo',
  PRIMARY KEY (`id_descenso_sub_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

#
# Data for table "descenso_sub_menu"
#

INSERT INTO `descenso_sub_menu` VALUES (1,2,'descenso profundo 1','#',1),(2,2,'descenso profundo 2','#',1),(3,2,'descenso profundo 3','#',1),(4,2,'descenso profundo 4','#',1),(5,2,'descenso profundo 5','#',1);

#
# Structure for table "menu"
#

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_menu` varchar(255) DEFAULT NULL,
  `direccion_menu` varchar(255) DEFAULT NULL,
  `id_tipo_opcion` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1 COMMENT '0 eliminado, 1 activo',
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "menu"
#

INSERT INTO `menu` VALUES (1,'Inicio','#hero',1,1),(2,'Acerca de','#about',1,1),(3,'Menu','#menu',1,1),(4,'Especiales','#specials',1,1),(5,'Eventos','#events',1,1),(6,'Conineros','#chefs',1,1),(7,'Galería','#gallery',1,1),(8,'Desplegable','#',2,1),(9,'Contacte con','#contact',1,1),(10,'Reserva una mesa','#book-a-table',3,1);

#
# Structure for table "sub_menu"
#

DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE `sub_menu` (
  `id_sub_menu` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `nombre_sub_menu` varchar(255) NOT NULL,
  `direccion_sub_menu` varchar(255) NOT NULL,
  `id_tipo_opcion` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1 COMMENT '0 eliminado, 1 activo',
  PRIMARY KEY (`id_sub_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

#
# Data for table "sub_menu"
#

INSERT INTO `sub_menu` VALUES (1,8,'Desplegable 1','#',1,1),(2,8,'descenso profundo','#',2,1),(3,8,'Desplegable 2','#',1,1),(4,8,'Desplegable 3','#',1,1),(5,8,'Desplegable 4','#',1,1);

#
# Structure for table "tipo_opcion"
#

DROP TABLE IF EXISTS `tipo_opcion`;
CREATE TABLE `tipo_opcion` (
  `id_tipo_opcion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_opcion` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1 COMMENT '0 eliminado, 1 activo',
  PRIMARY KEY (`id_tipo_opcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

#
# Data for table "tipo_opcion"
#

INSERT INTO `tipo_opcion` VALUES (1,'Unico',1),(2,'Desplegable',1),(3,'Botón',1);
