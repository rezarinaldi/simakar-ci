/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : simakar

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 28/05/2020 00:41:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for divisi
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES (1, 'Manajer', '2020-05-17 21:54:15', '2020-05-28 00:35:20');
INSERT INTO `divisi` VALUES (3, 'Keuangan', '2020-05-28 00:38:58', '2020-05-28 00:38:58');

-- ----------------------------
-- Table structure for gaji
-- ----------------------------
DROP TABLE IF EXISTS `gaji`;
CREATE TABLE `gaji`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `jumlah_gaji` int(12) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gaji
-- ----------------------------
INSERT INTO `gaji` VALUES (1, 10000000, '2020-05-18 10:12:53', '2020-05-18 12:01:05');
INSERT INTO `gaji` VALUES (2, 8000000, '2020-05-18 12:00:00', '2020-05-18 12:00:00');

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES (1, 'Direktur', '2020-05-17 21:34:22', '2020-05-17 21:34:22');

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Pria','Wanita') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_jabatan` int(10) UNSIGNED NOT NULL,
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `id_kt_kb` int(10) UNSIGNED NOT NULL,
  `id_divisi` int(10) UNSIGNED NOT NULL,
  `id_gaji` int(10) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `latitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `longitude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `ket` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fkKtKb`(`id_kt_kb`) USING BTREE,
  INDEX `fkProvinsi`(`id_provinsi`) USING BTREE,
  INDEX `fkJabatan`(`id_jabatan`) USING BTREE,
  INDEX `fkDivisi`(`id_divisi`) USING BTREE,
  INDEX `fkGaji`(`id_gaji`) USING BTREE,
  INDEX `fkKecamatan`(`id_kecamatan`) USING BTREE,
  CONSTRAINT `fkDivisi` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fkGaji` FOREIGN KEY (`id_gaji`) REFERENCES `gaji` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fkJabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fkKecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fkKtKb` FOREIGN KEY (`id_kt_kb`) REFERENCES `kt_kb` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fkProvinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (1, 'Masbro', 'masbro@gmail.com', '08762738281', 'Jl. Kalimas', 'Wanita', '2020-08-10', '1999-06-12', 1, 1, 1, 1, 1, 1, 22, 'pasbiru.jpg', '', '', '', '2020-05-18 13:50:42', '2020-05-28 00:06:45');
INSERT INTO `karyawan` VALUES (10, 'maryati abcd', 'ismail_nurudin@yahoo.com', '85231634076', 'sadf', 'Wanita', '2020-05-14', '2020-05-15', 1, 1, 1, 1, 1, 1, 22, 'd42.png', '-7.962422462359967', '112.6167291725231', 'sadf', '2020-05-27 23:42:12', '2020-05-27 23:42:12');
INSERT INTO `karyawan` VALUES (11, 'teste', 'asubakekok@gmail.com', '085231634078', 'sadaf', 'Wanita', '2020-05-25', '2020-05-14', 1, 1, 1, 1, 1, 1, 22, 'avatar-1.png', '-7.947801650130512', '112.6166433821064', 'asdf', '2020-05-27 23:53:05', '2020-05-28 00:03:35');

-- ----------------------------
-- Table structure for kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES (1, 'Kademangan', '2020-05-18 10:28:28', '2020-05-18 10:28:28');

-- ----------------------------
-- Table structure for kt_kb
-- ----------------------------
DROP TABLE IF EXISTS `kt_kb`;
CREATE TABLE `kt_kb`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_kt_kb` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kt_kb
-- ----------------------------
INSERT INTO `kt_kb` VALUES (1, 'Kota Probolinggo ', 17823, '2020-05-18 10:16:00', '2020-05-18 10:16:00');

-- ----------------------------
-- Table structure for provinsi
-- ----------------------------
DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of provinsi
-- ----------------------------
INSERT INTO `provinsi` VALUES (1, 'Jawa Timur', '2020-05-18 10:14:39', '2020-05-18 10:14:39');

SET FOREIGN_KEY_CHECKS = 1;
