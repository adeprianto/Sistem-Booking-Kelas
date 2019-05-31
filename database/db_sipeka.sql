/*
 Navicat Premium Data Transfer

 Source Server         : Localhost (MySQL)
 Source Server Type    : MySQL
 Source Server Version : 100139
 Source Host           : localhost:3306
 Source Schema         : db_sipeka

 Target Server Type    : MySQL
 Target Server Version : 100139
 File Encoding         : 65001

 Date: 31/05/2019 13:20:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for t_admin
-- ----------------------------
DROP TABLE IF EXISTS `t_admin`;
CREATE TABLE `t_admin`  (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_admin
-- ----------------------------
INSERT INTO `t_admin` VALUES (1, 'Ade', 'admin', 'admin');

-- ----------------------------
-- Table structure for t_akun_mhs
-- ----------------------------
DROP TABLE IF EXISTS `t_akun_mhs`;
CREATE TABLE `t_akun_mhs`  (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_mhs` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_akun`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  INDEX `FK_AKUN_MHS`(`id_mhs`) USING BTREE,
  CONSTRAINT `FK_AKUN_MHS` FOREIGN KEY (`id_mhs`) REFERENCES `t_mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_akun_mhs
-- ----------------------------
INSERT INTO `t_akun_mhs` VALUES (5, 'adeprianto21', '123456', 8);
INSERT INTO `t_akun_mhs` VALUES (6, 'admin', '123456', 9);

-- ----------------------------
-- Table structure for t_booking_kelas
-- ----------------------------
DROP TABLE IF EXISTS `t_booking_kelas`;
CREATE TABLE `t_booking_kelas`  (
  `id_booking` int(255) NOT NULL AUTO_INCREMENT,
  `id_ruangan` int(255) NULL DEFAULT NULL,
  `id_mahasiswa` int(255) NULL DEFAULT NULL,
  `berita_kegiatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `waktu_mulai` time(6) NULL DEFAULT NULL,
  `waktu_akhir` time(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id_booking`) USING BTREE,
  INDEX `FK_RUANGAN_BOOKING`(`id_ruangan`) USING BTREE,
  INDEX `FK_MHS_BOOKING`(`id_mahasiswa`) USING BTREE,
  CONSTRAINT `FK_MHS_BOOKING` FOREIGN KEY (`id_mahasiswa`) REFERENCES `t_mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_RUANGAN_BOOKING` FOREIGN KEY (`id_ruangan`) REFERENCES `t_ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_booking_kelas
-- ----------------------------
INSERT INTO `t_booking_kelas` VALUES (9, 5, 8, 'TES', '2019-05-30', '15:00:00.000000', '16:00:00.000000');
INSERT INTO `t_booking_kelas` VALUES (10, 5, 8, 'Tes', '2019-05-30', '16:00:00.000000', '17:10:00.000000');
INSERT INTO `t_booking_kelas` VALUES (11, 7, 8, 'Tes', '2019-05-30', '18:45:00.000000', '19:00:00.000000');
INSERT INTO `t_booking_kelas` VALUES (12, 5, 8, 'Ngepet', '2019-05-30', '22:00:00.000000', '23:00:00.000000');
INSERT INTO `t_booking_kelas` VALUES (13, 5, 8, 'Kuliah', '2019-05-31', '13:00:00.000000', '14:00:00.000000');

-- ----------------------------
-- Table structure for t_hari
-- ----------------------------
DROP TABLE IF EXISTS `t_hari`;
CREATE TABLE `t_hari`  (
  `id_hari` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hari` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_hari`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_hari
-- ----------------------------
INSERT INTO `t_hari` VALUES (1, 'Senin');
INSERT INTO `t_hari` VALUES (2, 'Selasa');
INSERT INTO `t_hari` VALUES (3, 'Rabu');
INSERT INTO `t_hari` VALUES (4, 'Kamis');
INSERT INTO `t_hari` VALUES (5, 'Jum\'at');
INSERT INTO `t_hari` VALUES (6, 'Sabtu');
INSERT INTO `t_hari` VALUES (7, 'Minggu');

-- ----------------------------
-- Table structure for t_jadwal_matkul
-- ----------------------------
DROP TABLE IF EXISTS `t_jadwal_matkul`;
CREATE TABLE `t_jadwal_matkul`  (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruangan` int(11) NULL DEFAULT NULL,
  `id_matkul` int(11) NULL DEFAULT NULL,
  `id_hari` int(11) NULL DEFAULT NULL,
  `nama_dosen` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jurusan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelas` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `angkatan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jam_masuk` time(6) NULL DEFAULT NULL,
  `jam_keluar` time(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`) USING BTREE,
  INDEX `FK_KULIAH_KELAS`(`id_ruangan`) USING BTREE,
  INDEX `FK_KULIAH_MATKUL`(`id_matkul`) USING BTREE,
  INDEX `FK_KULIAH_HARI`(`id_hari`) USING BTREE,
  CONSTRAINT `FK_KULIAH_HARI` FOREIGN KEY (`id_hari`) REFERENCES `t_hari` (`id_hari`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_KULIAH_KELAS` FOREIGN KEY (`id_ruangan`) REFERENCES `t_ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_KULIAH_MATKUL` FOREIGN KEY (`id_matkul`) REFERENCES `t_matkul` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for t_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `t_mahasiswa`;
CREATE TABLE `t_mahasiswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nim` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jurusan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `angkatan` int(4) NULL DEFAULT NULL,
  `fakultas` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_mahasiswa
-- ----------------------------
INSERT INTO `t_mahasiswa` VALUES (8, 'Ade Prianto', '1700502', 'Ilmu Komputer', 2017, 'FPMIPA', 'adeprianto21@upi.edu');
INSERT INTO `t_mahasiswa` VALUES (9, 'Eka', '12344', 'ilkom', 2017, 'mipa', 'ekabudih@gmail.com');

-- ----------------------------
-- Table structure for t_matkul
-- ----------------------------
DROP TABLE IF EXISTS `t_matkul`;
CREATE TABLE `t_matkul`  (
  `id_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `nama_matkul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_matkul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sks` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_matkul`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_matkul
-- ----------------------------
INSERT INTO `t_matkul` VALUES (1, 'Jaringan Komputer', 'IK370', 3);
INSERT INTO `t_matkul` VALUES (2, 'Rekayasa Perangkat Lunak', 'IK301', 3);

-- ----------------------------
-- Table structure for t_ruangan
-- ----------------------------
DROP TABLE IF EXISTS `t_ruangan`;
CREATE TABLE `t_ruangan`  (
  `id_ruangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kapasitas` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ruangan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of t_ruangan
-- ----------------------------
INSERT INTO `t_ruangan` VALUES (4, 'IK-206', 30);
INSERT INTO `t_ruangan` VALUES (5, 'IK-202', 30);
INSERT INTO `t_ruangan` VALUES (7, 'IK-205', 30);
INSERT INTO `t_ruangan` VALUES (8, 'IK-208', 30);

SET FOREIGN_KEY_CHECKS = 1;
