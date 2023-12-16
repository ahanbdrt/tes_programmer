/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : test_junior_programmer

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 16/12/2023 17:55:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'L QUEENLY');
INSERT INTO `kategori` VALUES (2, 'L MTH AKSESORIS (IM)');
INSERT INTO `kategori` VALUES (3, 'L MTH TABUNG (LK)');
INSERT INTO `kategori` VALUES (4, 'SP MTH SPAREPART (LK)');
INSERT INTO `kategori` VALUES (5, 'CI MTH TINTA LAIN (IM)');
INSERT INTO `kategori` VALUES (6, 'L MTH AKSESORIS (LK)');
INSERT INTO `kategori` VALUES (7, 'S MTH STEMPEL (IM)');

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `kategori_id` int NULL DEFAULT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES (6, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', 1, '12500', 1);
INSERT INTO `produk` VALUES (9, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 2, '1000', 1);
INSERT INTO `produk` VALUES (11, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 2, '1000', 1);
INSERT INTO `produk` VALUES (12, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 2, '12500', 2);
INSERT INTO `produk` VALUES (15, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 2, '12500', 1);
INSERT INTO `produk` VALUES (17, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 2, '1000', 1);
INSERT INTO `produk` VALUES (18, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 2, '13000', 2);
INSERT INTO `produk` VALUES (19, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 2, '1000', 2);
INSERT INTO `produk` VALUES (22, 'ARM PENDEK MODEL U', 2, '13000', 1);
INSERT INTO `produk` VALUES (23, 'ARM SUPPORT KECIL', 3, '13000', 2);
INSERT INTO `produk` VALUES (24, 'ARM SUPPORT KOTAK PUTIH', 2, '13000', 2);
INSERT INTO `produk` VALUES (26, 'ARM SUPPORT PENDEK POLOS', 3, '13000', 1);
INSERT INTO `produk` VALUES (27, 'ARM SUPPORT S IM', 2, '1000', 2);
INSERT INTO `produk` VALUES (28, 'ARM SUPPORT T (IMPORT)', 2, '13000', 1);
INSERT INTO `produk` VALUES (29, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 3, '10000', 1);
INSERT INTO `produk` VALUES (50, 'BLACK LASER TONER FP-T3 (100gr)', 2, '13000', 2);
INSERT INTO `produk` VALUES (56, 'BODY PRINTER CANON IP2770', 4, '500', 1);
INSERT INTO `produk` VALUES (58, 'BODY PRINTER T13X', 4, '15000', 1);
INSERT INTO `produk` VALUES (59, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 5, '10000', 1);
INSERT INTO `produk` VALUES (60, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 5, '10000', 2);
INSERT INTO `produk` VALUES (61, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 5, '1500', 1);
INSERT INTO `produk` VALUES (62, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 5, '1500', 2);
INSERT INTO `produk` VALUES (63, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 5, '1500', 2);
INSERT INTO `produk` VALUES (64, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 5, '1000', 1);
INSERT INTO `produk` VALUES (65, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 5, '1500', 2);
INSERT INTO `produk` VALUES (66, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 5, '1500', 1);
INSERT INTO `produk` VALUES (67, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 5, '1000', 2);
INSERT INTO `produk` VALUES (68, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 5, '1500', 2);
INSERT INTO `produk` VALUES (70, 'BOTOL KOTAK 100ML LK', 6, '1000', 1);
INSERT INTO `produk` VALUES (72, 'BOTOL 10ML IM', 7, '1000', 2);

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_status`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES (1, 'bisa dijual');
INSERT INTO `status` VALUES (2, 'tidak bisa dijual');

SET FOREIGN_KEY_CHECKS = 1;
