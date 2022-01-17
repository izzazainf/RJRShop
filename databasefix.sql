/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : rjrshop

 Target Server Type    : MariaDB
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 07/06/2021 19:20:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin`  (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `admin_nama` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `admin_password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES (2, 'admin', 'admin', '123');

-- ----------------------------
-- Table structure for tbl_game
-- ----------------------------
DROP TABLE IF EXISTS `tbl_game`;
CREATE TABLE `tbl_game`  (
  `game_id` int(11) NOT NULL,
  `game_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`game_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_game
-- ----------------------------
INSERT INTO `tbl_game` VALUES (1, 'Mobile Legend');
INSERT INTO `tbl_game` VALUES (2, 'PUBG');
INSERT INTO `tbl_game` VALUES (3, 'Free Fire');

-- ----------------------------
-- Table structure for tbl_item
-- ----------------------------
DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE `tbl_item`  (
  `item_id` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `item_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `game_id` int(11) NOT NULL,
  `item_harga` int(11) NOT NULL,
  PRIMARY KEY (`item_id`) USING BTREE,
  INDEX `game_id`(`game_id`) USING BTREE,
  CONSTRAINT `game_id` FOREIGN KEY (`game_id`) REFERENCES `tbl_game` (`game_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_item
-- ----------------------------
INSERT INTO `tbl_item` VALUES ('ffm001', '70 DIAMOND', 3, 10000);
INSERT INTO `tbl_item` VALUES ('ffm002', '100 Diamond', 3, 15000);
INSERT INTO `tbl_item` VALUES ('ffm003', '140 Diamond', 3, 20000);
INSERT INTO `tbl_item` VALUES ('ffm004', '210 Diamond', 3, 29000);
INSERT INTO `tbl_item` VALUES ('ffm005', '355 Diamond', 3, 48000);
INSERT INTO `tbl_item` VALUES ('ffm006', '500 Diamond', 3, 69000);
INSERT INTO `tbl_item` VALUES ('ffm007', '720 Diamond', 3, 96000);
INSERT INTO `tbl_item` VALUES ('ffm008', '860 Diamond', 3, 115000);
INSERT INTO `tbl_item` VALUES ('ffm009', '1075 Diamond', 3, 145000);
INSERT INTO `tbl_item` VALUES ('ffm010', '1440 Diamond', 3, 190000);
INSERT INTO `tbl_item` VALUES ('ffm011', '2000 Diamond', 3, 270000);
INSERT INTO `tbl_item` VALUES ('ffm012', '2720 Diamond', 3, 365000);
INSERT INTO `tbl_item` VALUES ('ffm013', '4000 Diamond', 3, 535000);
INSERT INTO `tbl_item` VALUES ('ffm014', '7290 Diamond', 3, 980000);
INSERT INTO `tbl_item` VALUES ('mlg001', '86 Diamond', 1, 20000);
INSERT INTO `tbl_item` VALUES ('mlg002', '172 Diamond', 1, 40000);
INSERT INTO `tbl_item` VALUES ('mlg003', '258 Diamond', 1, 60000);
INSERT INTO `tbl_item` VALUES ('mlg004', '344 Diamond', 1, 78000);
INSERT INTO `tbl_item` VALUES ('mlg005', '429 Diamond', 1, 98000);
INSERT INTO `tbl_item` VALUES ('mlg006', '514 Diamond', 1, 118000);
INSERT INTO `tbl_item` VALUES ('mlg007', '601 Diamond', 1, 136000);
INSERT INTO `tbl_item` VALUES ('mlg008', '706 Diamond', 1, 156000);
INSERT INTO `tbl_item` VALUES ('mlg009', '878 Diamond', 1, 194000);
INSERT INTO `tbl_item` VALUES ('mlg010', '1050 Diamond', 1, 233000);
INSERT INTO `tbl_item` VALUES ('mlg011', '1412 Diamond', 1, 310000);
INSERT INTO `tbl_item` VALUES ('mlg012', '1669 Diamond', 1, 368000);
INSERT INTO `tbl_item` VALUES ('mlg013', '2195 Diamond', 1, 460000);
INSERT INTO `tbl_item` VALUES ('mlg014', '3668 Diamond', 1, 765000);
INSERT INTO `tbl_item` VALUES ('mlg015', '5523 Diamond', 1, 1150000);
INSERT INTO `tbl_item` VALUES ('mlg016', '9288 Diamond', 1, 1900000);
INSERT INTO `tbl_item` VALUES ('pub001', '263 UC', 2, 48000);
INSERT INTO `tbl_item` VALUES ('pub002', '525 UC', 2, 95000);
INSERT INTO `tbl_item` VALUES ('pub003', '788 UC', 2, 140000);
INSERT INTO `tbl_item` VALUES ('pub004', '1050 UC', 2, 185000);
INSERT INTO `tbl_item` VALUES ('pub005', '1375 UC', 2, 230000);
INSERT INTO `tbl_item` VALUES ('pub006', '1638 UC', 2, 280000);
INSERT INTO `tbl_item` VALUES ('pub007', '1900 UC', 2, 325000);
INSERT INTO `tbl_item` VALUES ('pub008', '2163 UC', 2, 370000);
INSERT INTO `tbl_item` VALUES ('pub009', '2425 UC', 2, 415000);
INSERT INTO `tbl_item` VALUES ('pub010', '2875 UC', 2, 455000);
INSERT INTO `tbl_item` VALUES ('pub011', '3400 UC', 2, 550000);
INSERT INTO `tbl_item` VALUES ('pub012', '4250 UC', 2, 680000);
INSERT INTO `tbl_item` VALUES ('pub013', '6000 UC', 2, 930000);
INSERT INTO `tbl_item` VALUES ('pub014', '9375 UC', 2, 1400000);

-- ----------------------------
-- Table structure for tbl_metode
-- ----------------------------
DROP TABLE IF EXISTS `tbl_metode`;
CREATE TABLE `tbl_metode`  (
  `metode_id` int(11) NOT NULL,
  `metode_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`metode_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_metode
-- ----------------------------
INSERT INTO `tbl_metode` VALUES (1, 'Dana');
INSERT INTO `tbl_metode` VALUES (2, 'OVO');
INSERT INTO `tbl_metode` VALUES (3, 'GOPAY');
INSERT INTO `tbl_metode` VALUES (4, 'Shopee Pay');
INSERT INTO `tbl_metode` VALUES (5, 'BCA');
INSERT INTO `tbl_metode` VALUES (6, 'Indomaret');
INSERT INTO `tbl_metode` VALUES (7, 'Alfamart');

-- ----------------------------
-- Table structure for tbl_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pembayaran`;
CREATE TABLE `tbl_pembayaran`  (
  `pembayaran_id` int(11) NOT NULL,
  `transaksi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `metode_id` int(11) NOT NULL,
  `pembayaran_status` set('pembayaran belum','pembayaran selesai','pembayaran ditolak','menunggu konfirmasi') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pembayaran belum',
  `pembayaran_tanggal` timestamp(6) NULL DEFAULT NULL,
  `pembayaran_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembayaran_bukti` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`pembayaran_id`) USING BTREE,
  INDEX `metode_id`(`metode_id`) USING BTREE,
  INDEX `transaksi_id`(`transaksi_id`) USING BTREE,
  CONSTRAINT `metode_id` FOREIGN KEY (`metode_id`) REFERENCES `tbl_metode` (`metode_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `transaksi_id` FOREIGN KEY (`transaksi_id`) REFERENCES `user_transaksi` (`transaksi_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pembayaran
-- ----------------------------
INSERT INTO `tbl_pembayaran` VALUES (0, 'dimas0', 5, 'pembayaran belum', '2021-06-17 00:00:00.000000', 'Izza', 'dimas0ovo.jpg');
INSERT INTO `tbl_pembayaran` VALUES (1, '0', 3, 'pembayaran belum', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (2, '2', 7, 'pembayaran selesai', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (31, '31', 3, 'menunggu konfirmasi', '2021-06-08 00:00:00.000000', 'Izza', '31Screenshot (27).png');
INSERT INTO `tbl_pembayaran` VALUES (32, '32', 3, 'pembayaran selesai', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (33, '33', 5, 'pembayaran belum', '2021-06-03 00:00:00.000000', 'ASAS', 'mamamad1.png');
INSERT INTO `tbl_pembayaran` VALUES (34, '34', 5, 'pembayaran belum', '2021-06-01 00:00:00.000000', 'Izza', '34p26.PNG');
INSERT INTO `tbl_pembayaran` VALUES (12344, '12344', 5, 'pembayaran belum', '2021-06-07 00:00:00.000000', 'Izza', '12344gopay.jpg');
INSERT INTO `tbl_pembayaran` VALUES (12345, '12345', 5, 'pembayaran selesai', '2021-05-19 00:00:00.000000', 'Izza', '12345Screenshot (16).png');
INSERT INTO `tbl_pembayaran` VALUES (12346, '12346', 5, 'pembayaran selesai', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (12347, '12347', 5, 'pembayaran belum', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (12348, '12348', 5, 'pembayaran belum', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (12349, '12349', 5, 'pembayaran belum', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (123410, '123410', 5, 'pembayaran belum', NULL, NULL, NULL);
INSERT INTO `tbl_pembayaran` VALUES (123411, '123411', 5, 'pembayaran belum', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user_data
-- ----------------------------
DROP TABLE IF EXISTS `user_data`;
CREATE TABLE `user_data`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1217 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_data
-- ----------------------------
INSERT INTO `user_data` VALUES (0, 'ahmad izza zain', 'zaaaa@gmail.com', 'sandi', NULL);
INSERT INTO `user_data` VALUES (4, 'Izza', 'sasa@mail.com', '12121', NULL);
INSERT INTO `user_data` VALUES (5, 'ASAS', 'mamamnoh@mail.com', 'asas', NULL);
INSERT INTO `user_data` VALUES (6, 'Izza', 'ahmad@mail.com', '12121', NULL);
INSERT INTO `user_data` VALUES (7, 'Izza', 'araraaaa@mail.com', 'qwerty', NULL);
INSERT INTO `user_data` VALUES (8, 'ahmad', 'ahmadi@mail.com', '$2y$10$AxtTNKbiCscRFcIj.B151e9NoZepNZkkTP8RS2zz/Euf0jnAtFfEG', '');
INSERT INTO `user_data` VALUES (9, 'iiza', '123@mail.com', '$2y$10$kghwiL1oDeROR6iR2kejtuC/R8QU7ZEaYEtczAFat6UhFNICxtAqq', '');
INSERT INTO `user_data` VALUES (10, 'Izza pw mail mamamamammamamama', 'fix@mail.com', '$2y$10$4QdEr0gJldqJYHrwKSJCZepVgI2m2xv2YFxAKIkAgprVg8GKEWKru', '081252425142');
INSERT INTO `user_data` VALUES (11, 'pw nya 1234', '1234@mail.com', '$2y$10$26iaW4vpiFBMHFg0hFan.urFec5wGFZKNq73AQhJiXka1d31p8cuy', '0989898');
INSERT INTO `user_data` VALUES (21, 'user', 'user@mail.com', 'admin', NULL);
INSERT INTO `user_data` VALUES (1212, 'haiasasasasasa beb', 'maimai', 'sandi', 'mehee');
INSERT INTO `user_data` VALUES (1214, 'Izza', 'arara@mail.com', '$2y$10$Zn1WyHhfexsoFky7Lui5BeLDKL472ljAb1UELezf4ysGLbLp2hwl2', '');
INSERT INTO `user_data` VALUES (1215, 'dimas sanjaya', 'dimas@mail.com', '$2y$10$d2Npc7qdoK87BRlu15802OVjV6pe4TmW4T.B0XqGmrC8sLIm/n5g.', '');
INSERT INTO `user_data` VALUES (1216, 'Izza', 'qweqwe@mail.com', '$2y$10$YMQYktg3eLTnBoKSLz1A0.q/XSCO8exYYWI0VnIKupGDEjgmmOHhy', '');

-- ----------------------------
-- Table structure for user_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `user_transaksi`;
CREATE TABLE `user_transaksi`  (
  `transaksi_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transaksi_tanggal` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `item_id` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `transaksi_game_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `transaksi_game_zone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `transaksi_status` set('proses','selesai') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'proses',
  PRIMARY KEY (`transaksi_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `item_id`(`item_id`) USING BTREE,
  CONSTRAINT `item_id` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`item_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_data` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_transaksi
-- ----------------------------
INSERT INTO `user_transaksi` VALUES ('0', '2021-06-06 22:44:52.338791', 10, 'mlg006', '121212', '1212121', 'selesai');
INSERT INTO `user_transaksi` VALUES ('123410', '2021-06-07 14:02:42.000000', 11, 'ffm005', '12121212', NULL, 'proses');
INSERT INTO `user_transaksi` VALUES ('123411', '2021-06-07 14:04:29.000000', 11, 'ffm005', '12121212', NULL, 'proses');
INSERT INTO `user_transaksi` VALUES ('12344', '2021-06-06 22:44:45.942881', 11, 'mlg005', '12121212', '213123', 'proses');
INSERT INTO `user_transaksi` VALUES ('12345', '2021-06-06 23:05:38.949788', 11, 'mlg008', '12121212', '213123', 'selesai');
INSERT INTO `user_transaksi` VALUES ('12346', '2021-06-06 22:40:16.691551', 11, 'pub005', '12123123123', NULL, 'selesai');
INSERT INTO `user_transaksi` VALUES ('12347', '2021-06-07 13:57:31.000000', 11, 'mlg005', '12121212', '213123', 'proses');
INSERT INTO `user_transaksi` VALUES ('12348', '2021-06-07 14:01:17.000000', 11, 'ffm008', '12121212', NULL, 'proses');
INSERT INTO `user_transaksi` VALUES ('12349', '2021-06-07 14:02:11.000000', 11, 'ffm008', '12121212', NULL, 'proses');
INSERT INTO `user_transaksi` VALUES ('2', '2021-05-25 20:16:54.724385', 10, 'mlg008', '121212', '121212', 'selesai');
INSERT INTO `user_transaksi` VALUES ('31', '2021-06-06 22:44:57.880021', 11, 'mlg007', '12121212', '213123', 'selesai');
INSERT INTO `user_transaksi` VALUES ('32', '2021-06-06 22:45:24.758330', 11, 'mlg012', '12121212', '1212', 'proses');
INSERT INTO `user_transaksi` VALUES ('33', '2021-06-04 14:13:15.000000', 11, 'mlg011', '111', '222', 'proses');
INSERT INTO `user_transaksi` VALUES ('34', '2021-06-06 22:45:15.377810', 11, 'ffm001', '1212121', NULL, 'proses');
INSERT INTO `user_transaksi` VALUES ('dimas0', '2021-06-06 22:45:20.013030', 1215, 'mlg008', '123123', '123123', 'proses');

SET FOREIGN_KEY_CHECKS = 1;
