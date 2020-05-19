/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : simakar

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-18 20:05:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `divisi`
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES ('1', 'Manajerial', '2020-05-17 21:54:15', '2020-05-17 22:12:39');

-- ----------------------------
-- Table structure for `gaji`
-- ----------------------------
DROP TABLE IF EXISTS `gaji`;
CREATE TABLE `gaji` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jumlah_gaji` int(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of gaji
-- ----------------------------
INSERT INTO `gaji` VALUES ('1', '10000000', '2020-05-18 10:12:53', '2020-05-18 12:01:05');
INSERT INTO `gaji` VALUES ('2', '8000000', '2020-05-18 12:00:00', '2020-05-18 12:00:00');

-- ----------------------------
-- Table structure for `jabatan`
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES ('1', 'Direktur', '2020-05-17 21:34:22', '2020-05-17 21:34:22');

-- ----------------------------
-- Table structure for `karyawan`
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Pria','Wanita') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_jabatan` int(10) unsigned NOT NULL,
  `id_provinsi` int(10) unsigned NOT NULL,
  `id_kecamatan` int(10) unsigned NOT NULL,
  `id_kt_kb` int(10) unsigned NOT NULL,
  `id_divisi` int(10) unsigned NOT NULL,
  `id_gaji` int(10) unsigned NOT NULL,
  `umur` int(11) NOT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkKtKb` (`id_kt_kb`),
  KEY `fkProvinsi` (`id_provinsi`),
  KEY `fkJabatan` (`id_jabatan`),
  KEY `fkDivisi` (`id_divisi`),
  KEY `fkGaji` (`id_gaji`),
  KEY `fkKecamatan` (`id_kecamatan`),
  CONSTRAINT `fkDivisi` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id`),
  CONSTRAINT `fkGaji` FOREIGN KEY (`id_gaji`) REFERENCES `gaji` (`id`),
  CONSTRAINT `fkJabatan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`),
  CONSTRAINT `fkKecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`),
  CONSTRAINT `fkKtKb` FOREIGN KEY (`id_kt_kb`) REFERENCES `kt_kb` (`id`),
  CONSTRAINT `fkProvinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('1', 'Masbro', 'masbro@gmail.com', '08762738281', 'Jl. Kalimas', 'Pria', '2020-08-10', '1999-06-12', '1', '1', '1', '1', '1', '1', '22', 'default.jpg', null, null, null, '2020-05-18 13:50:42', '2020-05-18 13:50:42');

-- ----------------------------
-- Table structure for `kecamatan`
-- ----------------------------
DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES ('1', 'Kademangan', '2020-05-18 10:28:28', '2020-05-18 10:28:28');

-- ----------------------------
-- Table structure for `kt_kb`
-- ----------------------------
DROP TABLE IF EXISTS `kt_kb`;
CREATE TABLE `kt_kb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kt_kb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kt_kb
-- ----------------------------
INSERT INTO `kt_kb` VALUES ('1', 'Kota Probolinggo ', '17823', '2020-05-18 10:16:00', '2020-05-18 10:16:00');

-- ----------------------------
-- Table structure for `provinsi`
-- ----------------------------
DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE `provinsi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of provinsi
-- ----------------------------
INSERT INTO `provinsi` VALUES ('1', 'Jawa Timur', '2020-05-18 10:14:39', '2020-05-18 10:14:39');
