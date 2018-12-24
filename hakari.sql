/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100129
 Source Host           : localhost:3306
 Source Schema         : hakari

 Target Server Type    : MySQL
 Target Server Version : 100129
 File Encoding         : 65001

 Date: 23/12/2018 16:22:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for kategori_sub
-- ----------------------------
DROP TABLE IF EXISTS `kategori_sub`;
CREATE TABLE `kategori_sub`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` smallint(6) NOT NULL,
  `id_parents` smallint(6) NOT NULL DEFAULT 0,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `filez` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'fa fa-cog',
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'fa fa-cog',
  `sort` varchar(6) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '100',
  `is_active` enum('Active','InActive') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Active',
  `modify_user_id` int(11) NOT NULL,
  `modify_date` datetime(0) NOT NULL,
  `create_user_id` int(11) NOT NULL,
  `create_date` datetime(0) NOT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for produk
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) DEFAULT NULL,
  `kategori_sub_id` int(11) DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_date` datetime(0) DEFAULT NULL,
  `modified_date` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for produk_image
-- ----------------------------
DROP TABLE IF EXISTS `produk_image`;
CREATE TABLE `produk_image`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_id` int(11) DEFAULT NULL,
  `filename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tentang
-- ----------------------------
DROP TABLE IF EXISTS `tentang`;
CREATE TABLE `tentang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tentang
-- ----------------------------
INSERT INTO `tentang` VALUES (1, '<p>PT. Graha Utama Timber (GUT) yang bisnis utamanya adalah memasarkan produk kayu siap pakai dan menerima pesanan dalam berbagai bentuk produk seperti : Kusen, Pintu, Jendela, List Profil, Lambrezering, Flooring, Dll. Menyediakan Kayu oven dan basah: Merbau, Nyatoh, Damar Laut, Kamper Samarinda dll atau berbagai produk lainnya sesuai dengan kebutuhan dan kepuasan pelanggan.</p>\r\n<p><strong>Visi </strong></p>\r\n<p>Menjadi perusahaan produsen kayu yang berkualitas dengan selalu mematuhi semua kebijakan dari pemerintah dan ramah lingkungan sehingga dapat memberikan manfaat bagi masyarakat luas.</p>\r\n<p><strong>Misi </strong></p>\r\n<p>Menjadi Perusahaan produsen kayu lokal yang mampu memproduksi kayu berkualitas tinggi dengan harga yang sangat kompetitif sehingga dapat diterima dan menjadi pilihan sebagai produsen kayu yang berkesinambungan yang dibutuhkan masyarakat secara luas baik didalam negeri maupun diluar negeri.</p>\r\n<p> </p>');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users_permission
-- ----------------------------
DROP TABLE IF EXISTS `users_permission`;
CREATE TABLE `users_permission`  (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `create` tinyint(4) DEFAULT NULL,
  `view` tinyint(4) DEFAULT NULL,
  `update` tinyint(4) DEFAULT NULL,
  `delete` tinyint(4) DEFAULT NULL,
  `created_by` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_date` datetime(0) DEFAULT NULL,
  `edited_by` char(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `edited_on` datetime(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
