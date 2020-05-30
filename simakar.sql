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

 Date: 30/05/2020 15:44:00
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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES (1, 'Legal', '2020-05-17 21:54:15', '2020-05-30 08:20:30');
INSERT INTO `divisi` VALUES (2, 'Marketing', '2020-05-28 00:38:58', '2020-05-30 08:20:48');
INSERT INTO `divisi` VALUES (3, 'Finance', '2020-05-30 08:20:52', '2020-05-30 08:20:52');
INSERT INTO `divisi` VALUES (4, 'Development', '2020-05-30 08:21:03', '2020-05-30 08:21:03');
INSERT INTO `divisi` VALUES (5, 'Design', '2020-05-30 08:21:08', '2020-05-30 08:21:08');

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
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gaji
-- ----------------------------
INSERT INTO `gaji` VALUES (1, 10000000, '2020-05-18 10:12:53', '2020-05-18 12:01:05');
INSERT INTO `gaji` VALUES (2, 8000000, '2020-05-18 12:00:00', '2020-05-18 12:00:00');
INSERT INTO `gaji` VALUES (3, 15000000, '2020-05-28 06:23:51', '2020-05-28 06:23:51');
INSERT INTO `gaji` VALUES (4, 30000000, '2020-05-30 08:24:33', '2020-05-30 08:24:33');
INSERT INTO `gaji` VALUES (5, 20000000, '2020-05-30 08:24:44', '2020-05-30 08:24:44');
INSERT INTO `gaji` VALUES (6, 25000000, '2020-05-30 08:25:12', '2020-05-30 08:25:12');
INSERT INTO `gaji` VALUES (7, 40000000, '2020-05-30 08:25:19', '2020-05-30 08:25:19');
INSERT INTO `gaji` VALUES (8, 50000000, '2020-05-30 08:25:34', '2020-05-30 08:25:34');

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
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
INSERT INTO `jabatan` VALUES (1, 'Founder', '2020-05-17 21:34:22', '2020-05-30 08:14:54');
INSERT INTO `jabatan` VALUES (2, 'Co-founder', '2020-05-30 08:10:31', '2020-05-30 08:15:05');
INSERT INTO `jabatan` VALUES (3, 'Finance Manager', '2020-05-30 08:10:43', '2020-05-30 08:15:58');
INSERT INTO `jabatan` VALUES (4, 'HR Business Partner', '2020-05-30 08:10:58', '2020-05-30 08:17:33');
INSERT INTO `jabatan` VALUES (5, 'Marketing Manager', '2020-05-30 08:11:28', '2020-05-30 08:17:12');
INSERT INTO `jabatan` VALUES (6, 'Operational Manager', '2020-05-30 08:11:37', '2020-05-30 08:16:58');
INSERT INTO `jabatan` VALUES (7, 'Accounting Manager', '2020-05-30 08:16:28', '2020-05-30 08:16:28');
INSERT INTO `jabatan` VALUES (8, 'Marketing', '2020-05-30 08:18:03', '2020-05-30 08:18:03');
INSERT INTO `jabatan` VALUES (9, 'Accountant', '2020-05-30 08:18:10', '2020-05-30 08:18:10');
INSERT INTO `jabatan` VALUES (10, 'Engineer', '2020-05-30 08:18:16', '2020-05-30 08:18:16');
INSERT INTO `jabatan` VALUES (11, 'Recruiter', '2020-05-30 08:18:22', '2020-05-30 08:18:22');

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES (1, 'Masbro', 'masbro@gmail.com', '087627382819', 'Jl. Kumis Kucing No. 15', 'Pria', '2020-08-10', '1999-06-12', 1, 1, 1, 1, 1, 8, 22, 'pasbiru.jpg', '-7.951058438677533', '112.62014130216436', 'Rumah Kontrakan', '2020-05-18 06:50:42', '2020-05-30 08:52:28');
INSERT INTO `karyawan` VALUES (2, 'Maryati', 'maryati@rocketmail.com', '085231634076', 'Deket UM', 'Wanita', '2020-05-14', '2020-05-15', 8, 1, 3, 3, 2, 3, 22, 'avatar-5.png', '-7.962422462359967', '112.6167291725231', 'Rumah Kos', '2020-05-27 16:42:12', '2020-05-30 08:56:34');
INSERT INTO `karyawan` VALUES (3, 'Test', 'ismail_nurudin@yahoo.com', '085231634078', 'Deket Polinema', 'Pria', '2020-05-25', '2020-05-14', 10, 1, 3, 3, 5, 5, 21, 'avatar-1.png', '-7.947801650130512', '112.6166433821064', 'Rumah Kos', '2020-05-27 16:53:05', '2020-05-30 08:57:06');
INSERT INTO `karyawan` VALUES (4, 'Reza', 'rezarinaldi@gmail.com', '085899778409', 'Perum Mangliawan Permai', 'Pria', '2020-05-28', '2000-04-25', 2, 1, 2, 2, 4, 4, 20, 'default-avatar.png', '-7.950086186402067', '112.66889887072182', 'Rumah Saudara', '2020-05-28 04:29:09', '2020-05-30 08:52:05');
INSERT INTO `karyawan` VALUES (5, 'Naruto Uchiha', 'naruto@coding.coba', '085231634079', 'Desa Konoha', 'Pria', '2020-05-17', '1993-01-05', 7, 1, 4, 3, 3, 3, 23, 'news1.png', '-7.945506475302606', '112.61964658209062', 'Sebelah warung ramen', '2020-05-30 15:14:26', '2020-05-30 15:14:26');
INSERT INTO `karyawan` VALUES (6, 'Coronaldo de lima', 'crd5@coding.coba', '085231634080', 'Jl. Rusak 123', 'Pria', '2020-05-20', '1998-05-04', 8, 1, 3, 3, 2, 2, 22, 'default.png', '-7.947036593280581', '112.59750977680952', 'Rumah paling mewah', '2020-05-30 15:17:19', '2020-05-30 15:17:19');
INSERT INTO `karyawan` VALUES (7, 'Lucky Down', 'lucky@coding.coba', '085231634098', 'Jl. Palung Mariana', 'Pria', '2020-05-14', '1997-01-01', 10, 1, 1, 1, 5, 5, 23, '6tag-224658467-944769316257411586_224658467.jpg', '-7.773842296549246', '113.2229523258024', 'Rumah paling dalam', '2020-05-30 15:19:45', '2020-05-30 15:19:45');
INSERT INTO `karyawan` VALUES (8, 'Cemani', 'kintamani@coding.coba', '085231634789', 'Jl. Asleole', 'Pria', '2020-04-27', '1998-01-06', 4, 1, 2, 3, 4, 1, 23, 'avatar-1.png', '-7.945506475302606', '112.62016139151577', 'Rumah cat putih', '2020-05-30 15:29:38', '2020-05-30 15:29:38');
INSERT INTO `karyawan` VALUES (9, 'Sulis Lanang', 'sulis@coding.coba', '0852316340888', 'Jl. Rusak parah', 'Wanita', '2020-05-03', '1999-01-30', 10, 2, 7, 4, 4, 8, 21, 'avatar-1.png', '-6.972775693390861', '107.5785005008211', 'Rumah mbak sulis', '2020-05-30 15:31:44', '2020-05-30 15:31:44');
INSERT INTO `karyawan` VALUES (10, 'Mario luigi', 'super@coding.coba', '085231634780', 'Jl. Murah meriah', 'Pria', '2020-05-06', '1999-01-30', 6, 1, 4, 3, 1, 5, 22, 'avatar-1.png', '-7.945506475302606', '112.61844536009859', 'Rumah paling sultan', '2020-05-30 15:42:01', '2020-05-30 15:42:01');

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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES (1, 'Kademangan', '2020-05-18 10:28:28', '2020-05-18 10:28:28');
INSERT INTO `kecamatan` VALUES (2, 'Pakis', '2020-05-28 06:25:02', '2020-05-28 06:25:02');
INSERT INTO `kecamatan` VALUES (3, 'Lowokwaru', '2020-05-30 08:37:13', '2020-05-30 08:37:52');
INSERT INTO `kecamatan` VALUES (4, 'Blimbing', '2020-05-30 08:38:31', '2020-05-30 08:38:31');
INSERT INTO `kecamatan` VALUES (5, 'Cicalengka', '2020-05-30 08:42:24', '2020-05-30 08:42:24');
INSERT INTO `kecamatan` VALUES (6, 'Cibiru', '2020-05-30 08:42:39', '2020-05-30 08:42:39');
INSERT INTO `kecamatan` VALUES (7, 'Gedebage', '2020-05-30 08:43:26', '2020-05-30 08:43:26');
INSERT INTO `kecamatan` VALUES (8, 'Kiaracondong', '2020-05-30 08:43:40', '2020-05-30 08:43:40');
INSERT INTO `kecamatan` VALUES (9, 'Kemayoran', '2020-05-30 08:49:26', '2020-05-30 08:50:14');
INSERT INTO `kecamatan` VALUES (10, 'Gambir', '2020-05-30 08:49:33', '2020-05-30 08:49:33');
INSERT INTO `kecamatan` VALUES (11, 'Senen', '2020-05-30 08:49:36', '2020-05-30 08:49:36');
INSERT INTO `kecamatan` VALUES (12, 'Menteng', '2020-05-30 08:49:44', '2020-05-30 08:49:44');
INSERT INTO `kecamatan` VALUES (13, 'Tanah Abang', '2020-05-30 08:49:48', '2020-05-30 08:49:48');
INSERT INTO `kecamatan` VALUES (14, 'Pademangan', '2020-05-30 08:51:00', '2020-05-30 08:51:00');
INSERT INTO `kecamatan` VALUES (15, 'Cilincing', '2020-05-30 08:51:04', '2020-05-30 08:51:04');

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kt_kb
-- ----------------------------
INSERT INTO `kt_kb` VALUES (1, 'Kota Probolinggo', 17823, '2020-05-18 10:16:00', '2020-05-18 10:16:00');
INSERT INTO `kt_kb` VALUES (2, 'Kabupaten Malang', 65154, '2020-05-28 06:24:50', '2020-05-28 06:24:50');
INSERT INTO `kt_kb` VALUES (3, 'Kota Malang', 65141, '2020-05-30 08:36:46', '2020-05-30 08:36:46');
INSERT INTO `kt_kb` VALUES (4, 'Kota Bandung', 40111, '2020-05-30 08:40:47', '2020-05-30 08:40:47');
INSERT INTO `kt_kb` VALUES (5, 'Kabupaten Bandung', 40124, '2020-05-30 08:41:59', '2020-05-30 08:41:59');
INSERT INTO `kt_kb` VALUES (6, 'Kota Jakarta Barat', 11110, '2020-05-30 08:46:39', '2020-05-30 08:46:39');
INSERT INTO `kt_kb` VALUES (7, 'Kota Jakarta Pusat', 10110, '2020-05-30 08:47:01', '2020-05-30 08:47:01');
INSERT INTO `kt_kb` VALUES (8, 'Kota Jakarta Selatan', 12110, '2020-05-30 08:47:21', '2020-05-30 08:47:21');
INSERT INTO `kt_kb` VALUES (9, 'Kota Jakarta Timur', 13110, '2020-05-30 08:48:06', '2020-05-30 08:48:06');
INSERT INTO `kt_kb` VALUES (10, 'Kota Jakarta Utara', 14110, '2020-05-30 08:48:30', '2020-05-30 08:48:30');

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
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of provinsi
-- ----------------------------
INSERT INTO `provinsi` VALUES (1, 'Jawa Timur', '2020-05-18 10:14:39', '2020-05-18 10:14:39');
INSERT INTO `provinsi` VALUES (2, 'Jawa Barat', '2020-05-30 08:26:07', '2020-05-30 08:26:07');
INSERT INTO `provinsi` VALUES (3, 'Jawa Tengah', '2020-05-30 08:26:23', '2020-05-30 08:26:23');
INSERT INTO `provinsi` VALUES (4, 'Kalimantan Selatan', '2020-05-30 08:26:31', '2020-05-30 08:32:27');
INSERT INTO `provinsi` VALUES (5, 'Jakarta', '2020-05-30 08:27:28', '2020-05-30 08:27:28');
INSERT INTO `provinsi` VALUES (6, 'Kalimantan Timur', '2020-05-30 08:27:43', '2020-05-30 08:27:43');
INSERT INTO `provinsi` VALUES (7, 'Kalimantan Barat', '2020-05-30 08:27:48', '2020-05-30 08:27:48');
INSERT INTO `provinsi` VALUES (8, 'Kalimantan Utara', '2020-05-30 08:27:53', '2020-05-30 08:27:53');
INSERT INTO `provinsi` VALUES (9, 'Sumatra Barat', '2020-05-30 08:28:14', '2020-05-30 08:28:14');
INSERT INTO `provinsi` VALUES (10, 'Aceh', '2020-05-30 08:28:22', '2020-05-30 08:28:22');
INSERT INTO `provinsi` VALUES (11, 'Sumatra Utara', '2020-05-30 08:28:32', '2020-05-30 08:28:32');
INSERT INTO `provinsi` VALUES (12, 'Riau', '2020-05-30 08:28:35', '2020-05-30 08:28:35');
INSERT INTO `provinsi` VALUES (13, 'Sumatra Selatan', '2020-05-30 08:28:44', '2020-05-30 08:28:44');
INSERT INTO `provinsi` VALUES (14, 'Jambi', '2020-05-30 08:28:51', '2020-05-30 08:28:51');
INSERT INTO `provinsi` VALUES (15, 'Bengkulu', '2020-05-30 08:28:56', '2020-05-30 08:28:56');
INSERT INTO `provinsi` VALUES (16, 'Bali', '2020-05-30 08:29:54', '2020-05-30 08:29:54');
INSERT INTO `provinsi` VALUES (17, 'Nusa Tenggara Barat', '2020-05-30 08:30:12', '2020-05-30 08:30:12');
INSERT INTO `provinsi` VALUES (18, 'Nusa Tenggara Timur', '2020-05-30 08:30:16', '2020-05-30 08:30:16');
INSERT INTO `provinsi` VALUES (19, 'Papua', '2020-05-30 08:30:19', '2020-05-30 08:30:19');
INSERT INTO `provinsi` VALUES (20, 'Sulawesi Tengah', '2020-05-30 08:30:26', '2020-05-30 08:30:26');
INSERT INTO `provinsi` VALUES (21, 'Sulawesi Utara', '2020-05-30 08:30:33', '2020-05-30 08:30:33');
INSERT INTO `provinsi` VALUES (22, 'Gorontalo', '2020-05-30 08:30:39', '2020-05-30 08:30:39');
INSERT INTO `provinsi` VALUES (23, 'Kep. Bangka Belitung', '2020-05-30 08:30:46', '2020-05-30 08:30:46');
INSERT INTO `provinsi` VALUES (24, 'Sulawesi Tenggara', '2020-05-30 08:31:01', '2020-05-30 08:31:01');
INSERT INTO `provinsi` VALUES (25, 'Sulawesi Barat', '2020-05-30 08:31:16', '2020-05-30 08:31:16');
INSERT INTO `provinsi` VALUES (26, 'Sulawesi Selatan', '2020-05-30 08:31:26', '2020-05-30 08:31:26');
INSERT INTO `provinsi` VALUES (27, 'Maluku', '2020-05-30 08:31:34', '2020-05-30 08:31:34');
INSERT INTO `provinsi` VALUES (28, 'Papua Barat', '2020-05-30 08:31:40', '2020-05-30 08:31:40');
INSERT INTO `provinsi` VALUES (29, 'Maluku Utara', '2020-05-30 08:31:48', '2020-05-30 08:31:48');
INSERT INTO `provinsi` VALUES (30, 'Kalimantan Tengah', '2020-05-30 08:32:21', '2020-05-30 08:32:21');
INSERT INTO `provinsi` VALUES (31, 'Lampung', '2020-05-30 08:34:03', '2020-05-30 08:34:03');
INSERT INTO `provinsi` VALUES (32, 'Kep. Riau', '2020-05-30 08:34:16', '2020-05-30 08:34:16');
INSERT INTO `provinsi` VALUES (33, 'Banten', '2020-05-30 08:34:34', '2020-05-30 08:34:34');
INSERT INTO `provinsi` VALUES (34, 'Yogyakarta', '2020-05-30 08:34:47', '2020-05-30 08:34:47');

SET FOREIGN_KEY_CHECKS = 1;
