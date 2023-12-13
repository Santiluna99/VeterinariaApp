/*
 Navicat Premium Data Transfer

 Source Server         : local_xampp
 Source Server Type    : MariaDB
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : lp2_portal

 Target Server Type    : MariaDB
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 05/10/2023 17:02:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mascota
-- ----------------------------
DROP TABLE IF EXISTS `mascota`;
CREATE TABLE `mascota`  (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `especie` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `raza` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `edad` int(11) NOT NULL ,
  `turno` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`codigo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mascota
-- ----------------------------
INSERT INTO `mascota` VALUES (1, 'Diva', 'Perro', 'Pitbull',3, '2020-06-06 14:59:59');
INSERT INTO `mascota` VALUES (2, 'Copito', 'Conejo', 'S/R',1, '2023-04-04 20:59:59');
INSERT INTO `mascota` VALUES (3, 'Michi', 'Gato', 'Callejero',9, '2021-06-11 10:59:59');

-- ----------------------------
-- Table structure for tipo_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario`  (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_rol`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)  USING BTREE,
  FOREIGN KEY (`id_rol`) REFERENCES tipo_usuario(`id_rol`)
)  ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

INSERT INTO `usuarios` VALUES (1, 1, 'Admin', 'admin@gmail.com', 'admin123');
SET FOREIGN_KEY_CHECKS = 1;

-- ----------------------------
-- Table structure for productos
-- ----------------------------
CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_prod` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `precio_prod` float(11) NOT NULL,
  `imgURL` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_categoria` int(11),
  PRIMARY KEY (`id_prod`)  USING BTREE,
  FOREIGN KEY (`id_categoria`) REFERENCES categorias(`id_categoria`) 
)  ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- INSERT INTO productos (id_prod, nombre_prod, precio_prod, imgURL, categoria) VALUES (2, "Hunger For Words Talking Pet Essential Words", 21.75, "https://m.media-amazon.com/images/W/MEDIAX_792452-T1/images/I/81L4RDzTT8L._AC_UL320_.jpg", "Jugetes");

-- ----------------------------
-- Table structure for veterinarios
-- ----------------------------

CREATE TABLE `veterinarios` (
  `id_veterinario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dni` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `especialidad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_veterinario`)  USING BTREE
)  ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for categorias 
-- ----------------------------

CREATE TABLE categorias(
`id_categoria` int(11) NOT NULL AUTO_INCREMENT,
`nombre_categoria` varchar(100)  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
PRIMARY KEY (`id_categoria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for compras 
-- ----------------------------

/* CREATE TABLE compras (
    `id_compra` INT(11) NOT NULL AUTO_INCREMENT,
    `id_user` INT(11) NOT NULL,
    `id_prod` INT(11) NOT NULL,
    PRIMARY KEY (`id_compra`) USING BTREE,
    FOREIGN KEY (`id_user`) REFERENCES usuarios(`id_user`), 
    FOREIGN KEY (`id_prod`) REFERENCES productos(`id_prod`) 
); */

CREATE TABLE compras (
    `id_compra` INT(11) NOT NULL AUTO_INCREMENT,
    `id_usuario` INT(11) NOT NULL,
    `id_prod` INT(11) NOT NULL,
    PRIMARY KEY (`id_compra`) USING BTREE, 
    FOREIGN KEY (`id_prod`) REFERENCES productos(`id_prod`) 
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;
