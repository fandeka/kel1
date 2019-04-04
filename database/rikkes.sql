/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : rikkes

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 02/04/2019 09:47:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for casis
-- ----------------------------
DROP TABLE IF EXISTS `casis`;
CREATE TABLE `casis`  (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `no_casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_lahir` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `program` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ipk` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `panda` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelas` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `j_kel` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flag_del` int(1) NOT NULL,
  `create_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_created` datetime(6) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for rumus_stakes_casis
-- ----------------------------
DROP TABLE IF EXISTS `rumus_stakes_casis`;
CREATE TABLE `rumus_stakes_casis`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `u` int(3) NOT NULL,
  `a` int(3) NOT NULL,
  `b` int(3) NOT NULL,
  `d` int(3) NOT NULL,
  `l` int(3) NOT NULL,
  `g` int(3) NOT NULL,
  `j` int(3) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_ekg
-- ----------------------------
DROP TABLE IF EXISTS `tb_ekg`;
CREATE TABLE `tb_ekg`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `u_ekg` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nb_ekg` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flag_del` int(1) NULL DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_ergo
-- ----------------------------
DROP TABLE IF EXISTS `tb_ergo`;
CREATE TABLE `tb_ergo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `U_Ergo` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NB_Ergo` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_imt
-- ----------------------------
DROP TABLE IF EXISTS `tb_imt`;
CREATE TABLE `tb_imt`  (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `TB` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `BB` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `IMT` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `U_IMT` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NB_IMT` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`Id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_interne
-- ----------------------------
DROP TABLE IF EXISTS `tb_interne`;
CREATE TABLE `tb_interne`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `U_Interne` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NB_Interne` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_nilai_bobot
-- ----------------------------
DROP TABLE IF EXISTS `tb_nilai_bobot`;
CREATE TABLE `tb_nilai_bobot`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NB_Huruf` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NB_Angka` char(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Ket_NB_Huruf` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_nilai_bobot
-- ----------------------------
INSERT INTO `tb_nilai_bobot` VALUES (1, 'B', '1', 'MS');
INSERT INTO `tb_nilai_bobot` VALUES (2, 'C', '2', 'MS');
INSERT INTO `tb_nilai_bobot` VALUES (3, 'K1', '3', 'MMS');
INSERT INTO `tb_nilai_bobot` VALUES (4, 'K2', '4', 'TMS');

-- ----------------------------
-- Table structure for tb_rontgen
-- ----------------------------
DROP TABLE IF EXISTS `tb_rontgen`;
CREATE TABLE `tb_rontgen`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `U_Rontgen` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NB_Rontgen` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_spiro
-- ----------------------------
DROP TABLE IF EXISTS `tb_spiro`;
CREATE TABLE `tb_spiro`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `No_Casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `U_Spiro` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NB_Spiro` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_tensi
-- ----------------------------
DROP TABLE IF EXISTS `tb_tensi`;
CREATE TABLE `tb_tensi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `No_Casis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Sistol` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Diastole` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Nadi` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `U_Tensi` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `NB_Tensi` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Ket` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tim
-- ----------------------------
DROP TABLE IF EXISTS `tim`;
CREATE TABLE `tim`  (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pangkat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nrp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `korps` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kesatuan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `matra` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `flag_del` int(1) NOT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_created` datetime(6) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user_type_access
-- ----------------------------
DROP TABLE IF EXISTS `user_type_access`;
CREATE TABLE `user_type_access`  (
  `user_type_id` int(11) NOT NULL,
  `class` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `method` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `access` int(11) NOT NULL,
  UNIQUE INDEX `user_type_id`(`user_type_id`, `class`, `method`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_type_access
-- ----------------------------
INSERT INTO `user_type_access` VALUES (0, 'admin', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'casis', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'penilaian', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'personel', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'tim', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'users', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'workflow', '*', 1);
INSERT INTO `user_type_access` VALUES (0, 'workflowsurat', '*', 1);
INSERT INTO `user_type_access` VALUES (1, 'datanilaifront', '*', 1);
INSERT INTO `user_type_access` VALUES (1, 'front', '*', 1);
INSERT INTO `user_type_access` VALUES (1, 'personelfront', '*', 1);
INSERT INTO `user_type_access` VALUES (2, 'satker', '*', 1);
INSERT INTO `user_type_access` VALUES (3, 'kotama', '*', 1);
INSERT INTO `user_type_access` VALUES (4, 'mabes', '*', 1);

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types`  (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_title` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`user_type_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (1, 'Front');
INSERT INTO `user_types` VALUES (2, 'Satker');
INSERT INTO `user_types` VALUES (3, 'Kotama');
INSERT INTO `user_types` VALUES (4, 'Mabes');
INSERT INTO `user_types` VALUES (5, 'Admin');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_password` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `on_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime(0) NULL DEFAULT NULL,
  `date_updated` datetime(0) NULL DEFAULT NULL,
  `flag_del` int(1) NULL DEFAULT 0,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 103 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 1, '2016-04-11 12:04:28', NULL, NULL, NULL);
INSERT INTO `users` VALUES (23, 'dekahuha', '827ccb0eea8a706c4c34a16891f84e7b', 2, 1, '2018-11-04 06:06:32', NULL, '2018-11-07 15:37:21', 0);
INSERT INTO `users` VALUES (24, 'admindeka', '99f9b2cd7dfc324b219ac2e5ce29e5d5', 0, 1, '2018-11-04 06:07:50', NULL, NULL, 0);
INSERT INTO `users` VALUES (25, 'dualima', 'f41e3758b20e49a017b28bb069458282', 1, 1, '2018-11-04 06:24:48', '2018-11-04 01:24:48', '2018-11-25 07:36:39', 1);
INSERT INTO `users` VALUES (26, 'lola', 'fceeb9b9d469401fe558062c4bd25954', 1, 1, '2018-11-04 06:26:50', '2018-11-04 13:26:50', '2018-11-04 13:29:25', 1);
INSERT INTO `users` VALUES (27, 'to', '01b6e20344b68835c5ed1ddedf20d531', 0, 1, '2018-11-06 22:58:48', '2018-11-07 05:58:48', NULL, 0);
INSERT INTO `users` VALUES (37, 'fandeka', '54cb8eed924a212b66d986788dc18db2', 2, 1, '2018-11-19 08:34:50', '2018-11-19 15:34:50', NULL, 0);
INSERT INTO `users` VALUES (39, '116789', '29f9b600ea2ffbe9e572af61b898f12f', 1, 1, '2018-11-19 08:43:07', '2018-11-19 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (40, 'satker', '418b6672efe440cdce92f2f1233f9815', 2, 1, '2018-11-22 21:27:47', '2018-11-23 04:27:47', '2018-11-23 04:28:21', 0);
INSERT INTO `users` VALUES (41, 'kotama', '8370ff304b6240d6c7bcdf8620ca645a', 3, 1, '2018-11-22 21:36:57', '2018-11-23 04:36:57', NULL, 0);
INSERT INTO `users` VALUES (42, 'mabes', 'e166e46270d57df7c47ebba087c635f0', 4, 1, '2018-11-22 21:40:40', '2018-11-23 04:40:40', NULL, 0);
INSERT INTO `users` VALUES (43, 'kodam_jaya', 'a997839489f8953891b5719dbe470e1c', 3, 1, '2018-11-23 03:40:30', '2018-11-23 04:40:30', NULL, 0);
INSERT INTO `users` VALUES (44, 'jasdam_jaya', 'bdb9d995fe46500c42caefa13fbea1de', 2, 1, '2018-11-24 11:36:51', '2018-11-24 12:36:51', NULL, 0);
INSERT INTO `users` VALUES (45, 'kesdam_jaya', '7e8ee9b07e983997f25c278871ed2d1b', 2, 1, '2018-11-24 14:40:19', '2018-11-24 15:40:19', NULL, 0);
INSERT INTO `users` VALUES (47, '1910012130262', '418b6672efe440cdce92f2f1233f9815', 1, 1, '2018-10-26 08:43:07', '2018-10-26 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (48, '11950064060273', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-10-27 08:43:07', '2018-10-27 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (49, '32918', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-10-28 08:43:07', '2018-10-28 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (50, '31810', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-10-29 08:43:07', '2018-10-29 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (51, '33287', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-10-30 08:43:07', '2018-10-30 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (52, '1910015100963', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-10-31 08:43:07', '2018-10-31 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (53, '33754', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-01 08:43:07', '2018-11-01 15:43:07', NULL, 1);
INSERT INTO `users` VALUES (54, '33376', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-02 08:43:07', '2018-11-02 15:43:07', NULL, 1);
INSERT INTO `users` VALUES (55, '31806', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-03 08:43:07', '2018-11-03 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (56, '11950004581168', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-04 08:43:07', '2018-11-04 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (57, '31804', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-05 08:43:07', '2018-11-05 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (58, '31358', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-06 08:43:07', '2018-11-06 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (59, '11070084661285', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-07 08:43:07', '2018-11-07 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (60, '11120027931189', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-08 08:43:07', '2018-11-08 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (61, '21980126561076', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-09 08:43:07', '2018-11-09 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (62, '11070049370582', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-10 08:43:07', '2018-11-10 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (63, '548621', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-11 08:43:07', '2018-11-11 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (64, '11960046321174', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-12 08:43:07', '2018-11-12 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (65, '21960370850275', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-13 08:43:07', '2018-11-13 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (66, '21930126930871', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-14 08:43:07', '2018-11-14 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (67, '11090003211282', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-15 08:43:07', '2018-11-15 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (68, '21950329210573', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-16 08:43:07', '2018-11-16 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (69, '2920123661071', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-17 08:43:07', '2018-11-17 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (70, '2910045540668', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-18 08:43:07', '2018-11-18 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (71, '11970023530772', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-19 08:43:07', '2018-11-19 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (72, '2920123901171', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-20 08:43:07', '2018-11-20 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (73, '31810', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-21 08:43:07', '2018-11-21 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (74, '575894', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-22 08:43:07', '2018-11-22 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (75, '11950064480674', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-23 08:43:07', '2018-11-23 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (76, '11970017280171', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-24 08:43:07', '2018-11-24 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (77, '590766', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-25 08:43:07', '2018-11-25 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (78, '11010014181274', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-26 08:43:07', '2018-11-26 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (79, '33875', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-27 08:43:07', '2018-11-27 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (80, '1910000820561', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-28 08:43:07', '2018-11-28 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (81, '33649', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-29 08:43:07', '2018-11-29 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (82, '34104', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-11-30 08:43:07', '2018-11-30 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (83, '33749', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-01 08:43:07', '2018-12-01 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (84, '1910022780764', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-02 08:43:07', '2018-12-02 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (85, '2910137380671', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-03 08:43:07', '2018-12-03 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (86, '21040180520384', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-04 08:43:07', '2018-12-04 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (87, '31970568840776', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-05 08:43:07', '2018-12-05 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (88, '1910013200862', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-06 08:43:07', '2018-12-06 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (89, '11990005870771', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-07 08:43:07', '2018-12-07 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (90, '11980072371274', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-08 08:43:07', '2018-12-08 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (91, '21970265330276', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-09 08:43:07', '2018-12-09 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (92, '11980035820571', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-10 08:43:07', '2018-12-10 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (93, '548967', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-11 08:43:07', '2018-12-11 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (94, '11970026501273', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-12 08:43:07', '2018-12-12 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (95, '11980073020277', 'a997839489f8953891b5719dbe470e1c', 1, 1, '2018-12-13 08:43:07', '2018-12-13 15:43:07', NULL, 0);
INSERT INTO `users` VALUES (96, 'ainul', '110a4fa5d91e3af9ec1c099f934e6d7d', 1, 1, '2018-11-25 14:16:04', '2018-11-25 07:16:04', NULL, 0);
INSERT INTO `users` VALUES (97, 'jasdam_jayaraya', 'bdb9d995fe46500c42caefa13fbea1de', 2, 1, '2018-11-25 18:30:11', '2018-11-25 11:30:11', NULL, 0);
INSERT INTO `users` VALUES (98, 'e', 'e1671797c52e15f763380b45e841ec32', 5, 1, '2019-03-28 22:07:38', '2019-03-28 16:07:38', NULL, 1);
INSERT INTO `users` VALUES (99, 're', '12eccbdd9b32918131341f38907cbbb5', 1, 1, '2019-03-29 07:26:06', '2019-03-29 01:26:06', NULL, 0);
INSERT INTO `users` VALUES (100, 'd', '8277e0910d750195b448797616e091ad', 1, 0, '2019-03-29 07:38:30', '2019-03-29 01:38:30', NULL, 0);
INSERT INTO `users` VALUES (101, 'werwerewr', 'e130e5e618f15cee7a519d8b7b8306a0', 1, 0, '2019-03-29 07:41:07', '2019-03-29 01:41:07', NULL, 0);
INSERT INTO `users` VALUES (102, 'rtrt', '58d2eeb08d4e339138727553b3c4336b', 1, 1, '2019-03-29 07:47:59', '2019-03-29 01:47:59', NULL, 0);

SET FOREIGN_KEY_CHECKS = 1;
