/*
 Navicat Premium Data Transfer

 Source Server         : Local Server
 Source Server Type    : MySQL
 Source Server Version : 50733 (5.7.33)
 Source Host           : localhost:3306
 Source Schema         : db_infinitacenter

 Target Server Type    : MySQL
 Target Server Version : 50733 (5.7.33)
 File Encoding         : 65001

 Date: 08/10/2025 07:50:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for banner_home
-- ----------------------------
DROP TABLE IF EXISTS `banner_home`;
CREATE TABLE `banner_home`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `content_url` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of banner_home
-- ----------------------------
INSERT INTO `banner_home` VALUES (29, 'Welton at Hiera BSD', 'Adalah hunian mewah dengan konsep Neo Classic. Dibangun dengan spesifikasi premium Full Marmer dan Kohler, Smart Home System telah tersedia. Dengan harga mulai Rp 2.4 M, Anda sudah memiliki rumah mewah di BSD CITY! Cicilan 13 Jtan/Bln & Tanpa DP, Dapatkan ekstra diskon & unit sangat terbatas.', NULL, '/storage/photos/banner/hiera-bannerhome-03.png', '1', 'active', 'https://hierabsd.net/', '2022-11-30 14:54:08', '2023-01-27 02:28:46');
INSERT INTO `banner_home` VALUES (32, 'Welton at Hiera BSD', 'Adalah hunian mewah dengan konsep Neo Classic. Dibangun dengan spesifikasi premium Full Marmer dan Kohler, Smart Home System telah tersedia. Dengan harga mulai Rp 2.4 M, Anda sudah memiliki rumah mewah di BSD CITY! Cicilan 13 Jtan/Bln & Tanpa DP, Dapatkan ekstra diskon & unit sangat terbatas.', NULL, 'https://hierabsd.net//storage/photos/banner/hiera-bannerhome-04.png', '02', 'active', 'http://hierabsd.net/about', '2023-01-27 03:02:56', NULL);

-- ----------------------------
-- Table structure for banner_page
-- ----------------------------
DROP TABLE IF EXISTS `banner_page`;
CREATE TABLE `banner_page`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 67 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of banner_page
-- ----------------------------
INSERT INTO `banner_page` VALUES (66, 'banner-hero', '\"Love is the only way to <br><strong>grasp another human being in the</strong> <br>\ninnermost core of his personality.\"', NULL, '/storage/photos/banner-home-infinita.jpg', '1', 'active', '2023-08-05 03:40:53', '2023-08-05 04:21:14');

-- ----------------------------
-- Table structure for biodata_all
-- ----------------------------
DROP TABLE IF EXISTS `biodata_all`;
CREATE TABLE `biodata_all`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `category_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `brochure` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of biodata_all
-- ----------------------------

-- ----------------------------
-- Table structure for biodata_category
-- ----------------------------
DROP TABLE IF EXISTS `biodata_category`;
CREATE TABLE `biodata_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of biodata_category
-- ----------------------------

-- ----------------------------
-- Table structure for client
-- ----------------------------
DROP TABLE IF EXISTS `client`;
CREATE TABLE `client`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of client
-- ----------------------------
INSERT INTO `client` VALUES (1, 'Aitindo', NULL, NULL, '/storage/photos/client-logo/2-infinitacenter-logo01.png', '1', 'active', '2023-08-06 13:36:54', NULL);
INSERT INTO `client` VALUES (2, 'Bank CNB', NULL, NULL, '/storage/photos/client-logo/2-infinitacenter-logo02.png', '2', 'active', '2023-08-06 13:37:30', NULL);
INSERT INTO `client` VALUES (3, 'CSfinance', NULL, NULL, '/storage/photos/client-logo/2-infinitacenter-logo03.png', '3', 'active', '2023-08-06 13:38:52', NULL);
INSERT INTO `client` VALUES (4, 'TreeHouse', NULL, NULL, '/storage/photos/client-logo/2-infinitacenter-logo04.png', '4', 'active', '2023-08-06 13:41:42', NULL);
INSERT INTO `client` VALUES (5, 'Stella Maris', NULL, NULL, '/storage/photos/client-logo/2-infinitacenter-logo05.png', '5', 'active', '2023-08-06 13:42:05', NULL);
INSERT INTO `client` VALUES (6, 'CIBUN', NULL, NULL, '/storage/photos/client-logo/2-infinitacenter-logo06.png', '6', 'active', '2023-08-06 13:42:50', NULL);

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES (1, 'Who we are', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, '1', 'active', '2023-08-07 02:49:03', NULL);
INSERT INTO `company` VALUES (2, 'Who we help', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, '2', 'active', '2023-08-07 02:49:20', NULL);
INSERT INTO `company` VALUES (3, 'How we help', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, '3', 'active', '2023-08-07 02:49:33', NULL);

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `company` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `website` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telephone` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `faximile` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `subject` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comment` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact
-- ----------------------------

-- ----------------------------
-- Table structure for download
-- ----------------------------
DROP TABLE IF EXISTS `download`;
CREATE TABLE `download`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `files` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of download
-- ----------------------------

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NULL DEFAULT NULL,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_gallery_category_id`(`category_id`) USING BTREE,
  CONSTRAINT `fk_gallery_category_id` FOREIGN KEY (`category_id`) REFERENCES `gallery_category` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES (1, 2, 'Consultation', NULL, NULL, '/storage/photos/gallery/gallery-01.jpg', '1', 'active', '2023-08-07 07:35:43', NULL);
INSERT INTO `gallery` VALUES (2, 2, 'Consultation 2', NULL, NULL, '/storage/photos/gallery/gallery-02.jpg', '2', 'active', '2023-08-07 07:36:19', NULL);
INSERT INTO `gallery` VALUES (3, 2, 'Consultation 3', NULL, NULL, '/storage/photos/gallery/gallery-03.jpg', '3', 'active', '2023-08-07 07:36:54', NULL);
INSERT INTO `gallery` VALUES (4, 1, 'Activity  1', NULL, NULL, '/storage/photos/gallery/gallery-04.jpg', '4', 'active', '2023-08-07 07:37:50', NULL);
INSERT INTO `gallery` VALUES (5, 1, 'Activity 2', NULL, NULL, '/storage/photos/gallery/gallery-05.jpg', '5', 'active', '2023-08-07 07:39:03', NULL);
INSERT INTO `gallery` VALUES (6, 3, 'Seminar', NULL, NULL, '/storage/photos/gallery/gallery-06.jpg', '6', 'active', '2023-08-07 07:39:34', NULL);

-- ----------------------------
-- Table structure for gallery_category
-- ----------------------------
DROP TABLE IF EXISTS `gallery_category`;
CREATE TABLE `gallery_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of gallery_category
-- ----------------------------
INSERT INTO `gallery_category` VALUES (1, 'Kids Activity', NULL, NULL, '1', 'active', '2023-08-07 07:14:13', NULL);
INSERT INTO `gallery_category` VALUES (2, 'Consultation', NULL, NULL, '2', 'active', '2023-08-07 07:14:28', NULL);
INSERT INTO `gallery_category` VALUES (3, 'Seminar', NULL, NULL, '3', 'active', '2023-08-07 07:14:39', NULL);
INSERT INTO `gallery_category` VALUES (4, 'Webinar', NULL, NULL, '4', 'active', '2023-08-07 07:14:50', NULL);

-- ----------------------------
-- Table structure for inquiry
-- ----------------------------
DROP TABLE IF EXISTS `inquiry`;
CREATE TABLE `inquiry`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `first_name` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_name` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_address` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `company_organization` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `website` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `position` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telephone` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `faximile` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile_phone` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `street_address` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `state` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `postcode` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `question_type` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comment` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of inquiry
-- ----------------------------

-- ----------------------------
-- Table structure for news_all
-- ----------------------------
DROP TABLE IF EXISTS `news_all`;
CREATE TABLE `news_all`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `category_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news_all
-- ----------------------------
INSERT INTO `news_all` VALUES (17, 'Inilah mengapa Anda harus memilih Hiera dalam membeli rumah idaman', NULL, NULL, '<p><strong>Why Hiera BSD City?</strong><br />\nHiera BSD berada di Kawasan 108 Ha Ekslusif yang didevelop oleh Sinarmas &amp; Mitbana dengan mengusung konsep Green Environment &amp; TOD layak nya sebuah perkotaan di Singapore. Penghijauan dan Gaya Hidup Perkotaan menjadi fokus utama untuk kenyamanan anda dalam membangun keluarga &amp; Investasi masa depan</p>\n\n<p>High Value Investment</p>\n\n<ul>\n	<li>TOD Concept</li>\n	<li>Mini Singapore Living</li>\n	<li>Business District</li>\n	<li>Complete Facilities</li>\n</ul>\n\n<p>Holistic Facilities</p>\n\n<ul>\n	<li>Great Lake</li>\n	<li>Green Street</li>\n	<li>Bird Feeding Area</li>\n	<li>Central Garden</li>\n</ul>\n\n<p>Marvelous Design &amp; Features</p>\n\n<ul>\n	<li>Marmer</li>\n	<li>Premium Kitchen Set</li>\n	<li>Smart Home System</li>\n	<li>Sanitary by Kohler</li>\n</ul>', '<p><strong>Why Hiera BSD City?</strong><br />\nHiera BSD berada di Kawasan 108 Ha Ekslusif yang didevelop oleh Sinarmas &amp; Mitbana dengan mengusung konsep Green Environment &amp; TOD layak nya sebuah perkotaan di Singapore. Penghijauan dan Gaya Hidup Perkotaan menjadi fokus utama untuk kenyamanan anda dalam membangun keluarga &amp; Investasi masa depan</p>\n\n<p>High Value Investment</p>\n\n<ul>\n	<li>TOD Concept</li>\n	<li>Mini Singapore Living</li>\n	<li>Business District</li>\n	<li>Complete Facilities</li>\n</ul>\n\n<p>Holistic Facilities</p>\n\n<ul>\n	<li>Great Lake</li>\n	<li>Green Street</li>\n	<li>Bird Feeding Area</li>\n	<li>Central Garden</li>\n</ul>\n\n<p>Marvelous Design &amp; Features</p>\n\n<ul>\n	<li>Marmer</li>\n	<li>Premium Kitchen Set</li>\n	<li>Smart Home System</li>\n	<li>Sanitary by Kohler</li>\n</ul>', 'https://hierabsd.net/storage/photos/news/hiera-img-news-01.png', 'active', '2023-01-06 06:45:50', '2023-01-06 07:14:09');
INSERT INTO `news_all` VALUES (18, 'Merchant yang tergabung dengan kami', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor, quam id varius vehicula, nisi lacus placerat ipsum, sed bibendum lorem est quis dolor. Pellentesque in hendrerit quam, nec vulputate magna. Phasellus faucibus hendrerit felis ut dapibus. Proin tincidunt sit amet nunc in mollis. Donec a arcu gravida, sollicitudin nisl vel, rutrum magna. Nulla facilisi. Pellentesque tempor felis volutpat dui elementum eleifend. Etiam placerat quam nisi, a ornare est tempor in. Nunc sollicitudin massa non consectetur condimentum. Etiam pretium vestibulum dui, et sagittis odio convallis ac.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor, quam id varius vehicula, nisi lacus placerat ipsum, sed bibendum lorem est quis dolor. Pellentesque in hendrerit quam, nec vulputate magna. Phasellus faucibus hendrerit felis ut dapibus. Proin tincidunt sit amet nunc in mollis. Donec a arcu gravida, sollicitudin nisl vel, rutrum magna. Nulla facilisi. Pellentesque tempor felis volutpat dui elementum eleifend. Etiam placerat quam nisi, a ornare est tempor in. Nunc sollicitudin massa non consectetur condimentum. Etiam pretium vestibulum dui, et sagittis odio convallis ac.</p>', 'https://hierabsd.net/storage/photos/news/hiera-img-news-02.png', 'active', '2023-01-11 07:01:05', NULL);
INSERT INTO `news_all` VALUES (19, 'Suasana nyaman untuk keluarga', NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor, quam id varius vehicula, nisi lacus placerat ipsum, sed bibendum lorem est quis dolor. Pellentesque in hendrerit quam, nec vulputate magna. Phasellus faucibus hendrerit felis ut dapibus. Proin tincidunt sit amet nunc in mollis. Donec a arcu gravida, sollicitudin nisl vel, rutrum magna. Nulla facilisi. Pellentesque tempor felis volutpat dui elementum eleifend. Etiam placerat quam nisi, a ornare est tempor in. Nunc sollicitudin massa non consectetur condimentum. Etiam pretium vestibulum dui, et sagittis odio convallis ac.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor, quam id varius vehicula, nisi lacus placerat ipsum, sed bibendum lorem est quis dolor. Pellentesque in hendrerit quam, nec vulputate magna. Phasellus faucibus hendrerit felis ut dapibus. Proin tincidunt sit amet nunc in mollis. Donec a arcu gravida, sollicitudin nisl vel, rutrum magna. Nulla facilisi. Pellentesque tempor felis volutpat dui elementum eleifend. Etiam placerat quam nisi, a ornare est tempor in. Nunc sollicitudin massa non consectetur condimentum. Etiam pretium vestibulum dui, et sagittis odio convallis ac.</p>', 'https://hierabsd.net/storage/photos/news/hiera-img-news-03.png', 'active', '2023-01-11 07:05:40', NULL);

-- ----------------------------
-- Table structure for news_category
-- ----------------------------
DROP TABLE IF EXISTS `news_category`;
CREATE TABLE `news_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news_category
-- ----------------------------
INSERT INTO `news_category` VALUES (1, 'News', '<p><br></p>', '', '', '1', 'active', '2020-01-30 14:16:49', '');
INSERT INTO `news_category` VALUES (2, 'Events', '<p><br></p>', '', '', '2', 'active', '2020-01-30 14:17:04', '');
INSERT INTO `news_category` VALUES (3, 'Press Release', '<p><br></p>', '', '', '3', 'active', '2020-01-30 14:17:14', '');
INSERT INTO `news_category` VALUES (4, 'Exhibition', '<p><br></p>', '', '', '4', 'active', '2020-01-30 14:17:22', '');

-- ----------------------------
-- Table structure for our_company
-- ----------------------------
DROP TABLE IF EXISTS `our_company`;
CREATE TABLE `our_company`  (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of our_company
-- ----------------------------

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pages
-- ----------------------------

-- ----------------------------
-- Table structure for partisipasi
-- ----------------------------
DROP TABLE IF EXISTS `partisipasi`;
CREATE TABLE `partisipasi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `umur` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelurahan` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `peran` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of partisipasi
-- ----------------------------

-- ----------------------------
-- Table structure for product_all
-- ----------------------------
DROP TABLE IF EXISTS `product_all`;
CREATE TABLE `product_all`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `brochure` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `category` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image_mode` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `text_images` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type_id` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 254 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_all
-- ----------------------------
INSERT INTO `product_all` VALUES (234, 'Welton by Hiera (Welton Type 7x14)', NULL, '6', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-07a.png', '1', 'active', '2022-12-21 06:30:45', '2022-12-21 06:30:45');
INSERT INTO `product_all` VALUES (235, 'Welton by Hiera (Welton Type 7x14)', NULL, '6', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-07b.png', '2', 'active', '2022-12-21 06:31:03', '2022-12-21 06:31:03');
INSERT INTO `product_all` VALUES (236, 'Welton by Hiera (Welton Type 7x14)', NULL, '6', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-07c.png', '3', 'active', '2022-12-21 06:31:21', '2022-12-21 06:31:21');
INSERT INTO `product_all` VALUES (237, 'Welton by Hiera (Welton Type 7x14)', NULL, '6', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-07d.png', '4', 'active', '2022-12-21 06:31:42', '2022-12-21 06:31:42');
INSERT INTO `product_all` VALUES (238, 'Welton by Hiera (Welton Type 7x14)', NULL, '6', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-07e.png', '5', 'active', '2022-12-21 06:32:04', '2022-12-21 06:32:04');
INSERT INTO `product_all` VALUES (239, 'Welton by Hiera (Welton Type 7x14)', NULL, '6', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-07f.png', '6', 'active', '2022-12-21 06:32:31', '2022-12-21 06:32:31');
INSERT INTO `product_all` VALUES (240, 'Welton by Hiera (Welton Type 8x16)', NULL, '7', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-08a.png', '7', 'active', '2022-12-21 06:33:31', '2022-12-21 06:33:31');
INSERT INTO `product_all` VALUES (241, 'Welton by Hiera (Welton Type 8x16)', NULL, '7', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-08b.png', '8', 'active', '2022-12-21 06:33:54', '2022-12-21 06:33:54');
INSERT INTO `product_all` VALUES (242, 'Welton by Hiera (Welton Type 8x16)', NULL, '7', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-08c.png', '9', 'active', '2022-12-21 06:34:21', '2022-12-21 06:34:21');
INSERT INTO `product_all` VALUES (243, 'Welton by Hiera (Welton Type 8x16)', NULL, '7', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-08d.png', '10', 'active', '2022-12-21 06:34:43', '2022-12-21 06:34:43');
INSERT INTO `product_all` VALUES (244, 'Welton by Hiera (Welton Type 8x16)', NULL, '7', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-08e.png', '11', 'active', '2022-12-21 06:35:05', '2022-12-21 06:35:05');
INSERT INTO `product_all` VALUES (245, 'Welton by Hiera (Welton Type 8x16)', NULL, '7', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-08f.png', '12', 'active', '2022-12-21 06:35:29', '2022-12-21 06:35:52');
INSERT INTO `product_all` VALUES (246, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09a.png', '13', 'active', '2022-12-21 06:36:32', '2022-12-21 06:36:32');
INSERT INTO `product_all` VALUES (247, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09b.png', '14', 'active', '2022-12-21 06:37:05', '2022-12-21 06:37:05');
INSERT INTO `product_all` VALUES (248, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09c.png', '15', 'active', '2022-12-21 06:37:27', '2022-12-21 06:37:27');
INSERT INTO `product_all` VALUES (249, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09d.png', '16', 'active', '2022-12-21 06:38:08', '2022-12-21 06:38:08');
INSERT INTO `product_all` VALUES (250, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09e.png', '17', 'active', '2022-12-21 06:38:39', '2022-12-21 06:38:39');
INSERT INTO `product_all` VALUES (251, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09f.png', '18', 'active', '2022-12-21 06:39:00', '2022-12-21 06:39:00');
INSERT INTO `product_all` VALUES (252, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09g.png', '19', 'active', '2022-12-21 06:39:26', '2022-12-21 06:39:26');
INSERT INTO `product_all` VALUES (253, 'Welton by Hiera (Welton Type 9x16)', NULL, '8', NULL, NULL, NULL, '<p>-</p>', '<p>-</p>', 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09h.png', '20', 'active', '2022-12-21 06:39:56', '2022-12-21 06:39:56');

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `land_area` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `building_area` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bedroom` int(15) NULL DEFAULT NULL,
  `bathroom` int(15) NULL DEFAULT NULL,
  `listrik` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tangga` int(12) NULL DEFAULT NULL,
  `kamar_pembantu` int(12) NULL DEFAULT NULL,
  `pondasi` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `atap` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `lantai` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pintu` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jendela` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sanita_air` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `air` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_category
-- ----------------------------
INSERT INTO `product_category` VALUES (6, 'Welton Type 7x14', 'In the prime location of BSD, a new neighbourhood blossomed. Hiera is the 108-Ha heart-shaped mixed-use development created with heart that is strategically located with direct access to BSD and toll to Jakarta.', NULL, '/storage/photos/product/hiera-propertygallery-07a.png', '1', 'active', '98', '116', 3, 3, '2200', 2, 1, 'Mini Pile', 'Exterior : Plaster With Exterior Paint & Plaster With Interior Paint', 'Living & Dining Area Staircase Bedroom Bathroom Garage & Car Port Service Area : Marble : Marble & Homogeneous Tile : Laminated Wood : Homogeneous Tile : Homogeneous Tile : Ceramic Tile', 'Main Door External Doors & Window Internal Door Maid’s Bathroom Door : Solid Engineered Wood : Clear Glass With Alluminium Frame : Engineered Wood : PVC', 'Clear Glass With Alluminium Frame', 'Kohler/equivalent Service area by American Standart/equivalent Fixed Glass Partition Shower Screen', 'Standard PDAM', '2022-12-01 15:01:38', '2023-01-11 07:21:39');
INSERT INTO `product_category` VALUES (7, 'Welton Type 8x16', 'In the prime location of BSD, a new neighbourhood blossomed. Hiera is the 108-Ha heart-shaped mixed-use development created with heart that is strategically located with direct access to BSD and toll to Jakarta.', NULL, 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-08a.png', '2', 'active', '166', '128', 4, 4, '3500', 2, 1, 'Mini Pile', NULL, 'Living & Dining Area Staircase Bedroom Bathroom Garage & Car Port Service Area : Marble : Marble & Homogeneous Tile : Laminated Wood : Homogeneous Tile : Homogeneous Tile : Ceramic Tile', 'Main Door External Doors & Window Internal Door Maid’s Bathroom Door : Solid Engineered Wood : Clear Glass With Alluminium Frame : Engineered Wood : PVC', 'Clear Glass With Alluminium Frame', 'Kohler/equivalen Service area by American Standart/equivalent Fixed Glass Partition Shower Screen', 'Standard PDAM', '2022-12-01 15:01:59', '2023-01-11 07:21:53');
INSERT INTO `product_category` VALUES (8, 'Welton Type 9x18 - 9x16', 'In the prime location of BSD, a new neighbourhood blossomed. Hiera is the 108-Ha heart-shaped mixed-use development created with heart that is strategically located with direct access to BSD and toll to Jakarta.', NULL, 'https://hierabsd.net/storage/photos/product/hiera-propertygallery-09a.png', '3', 'active', '165', '225', 5, 6, '4400', 3, 2, 'Mini Pile', NULL, 'Living & Dining Area Staircase Bedroom Bathroom Garage & Car Port Service Area : Marble : Marble & Homogeneous Tile : Laminated Wood : Homogeneous Tile : Homogeneous Tile : Ceramic Tile', 'Main Door External Doors & Window Internal Door Maid’s Bathroom Door : Solid Engineered Wood : Clear Glass With Alluminium Frame : Engineered Wood : PVC', 'Clear Glass With Alluminium Frame', 'Kohler/equivalen Service area by American Standart/equivalent Fixed Glass Partition Shower Screen', 'Standard PDAM', '2022-12-01 15:02:19', '2023-01-18 06:35:26');

-- ----------------------------
-- Table structure for product_image
-- ----------------------------
DROP TABLE IF EXISTS `product_image`;
CREATE TABLE `product_image`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `products_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_update` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_image
-- ----------------------------

-- ----------------------------
-- Table structure for product_type
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_type
-- ----------------------------

-- ----------------------------
-- Table structure for project
-- ----------------------------
DROP TABLE IF EXISTS `project`;
CREATE TABLE `project`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `project_name` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `year` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_id` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc_en` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image_mode` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `text_images` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project
-- ----------------------------

-- ----------------------------
-- Table structure for project_image
-- ----------------------------
DROP TABLE IF EXISTS `project_image`;
CREATE TABLE `project_image`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `projects_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sort` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_update` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of project_image
-- ----------------------------

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sort` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (15, 'bxl-dribbble', 'Assessment', '<p>Assessment plays a crucial role in our approach, as it allow us to gain a comprehensive understanding of our clients need and challenges</p>', NULL, '1', 'active', '2023-08-07 02:16:19', '2023-08-07 02:27:31');
INSERT INTO `services` VALUES (16, 'bx-file', 'Counseling', '<p>Our counseling services offer a safe and supportive environment where individuals can openly express their throughts and emotions</p>', NULL, '2', 'active', '2023-08-07 02:21:08', '2023-08-07 02:27:44');
INSERT INTO `services` VALUES (17, 'bx-layer', 'Psychotherapy', '<p>Psychotherapy, a fundamental aspect of our services, involves a collaborative and therapeutic process where our trained psychologists work closely</p>', NULL, '3', 'active', '2023-08-07 02:22:45', '2023-08-07 02:27:56');

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `youtube_id` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `status` varchar(155) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_create` datetime NULL DEFAULT NULL,
  `date_update` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES (14, 'Hiera BSD City - Welton', '-', 'EGtbdt6qNvU', NULL, 1, 'active', '2023-01-04 06:04:47', '2023-01-04 06:15:40');
INSERT INTO `video` VALUES (17, 'Hiera Welton BSD City', '-', 'cPrBp7ggxE4', NULL, 2, 'active', '2023-01-06 03:12:08', NULL);
INSERT INTO `video` VALUES (18, 'Hiera - 108 H rumah BSD City', '-', 'iPn20bobg9E', NULL, 3, 'active', '2023-01-06 03:13:47', NULL);
INSERT INTO `video` VALUES (19, 'Hiera - Rumah mewah BSD City', '-', 'WSgQ41_W6Ww', NULL, 4, 'active', '2023-01-06 03:14:38', NULL);
INSERT INTO `video` VALUES (20, 'Hiera rumah mewah BSD City', '-', 'dofHiOZqKL0', NULL, 5, 'active', '2023-01-06 03:15:20', NULL);
INSERT INTO `video` VALUES (21, 'Hiera rumah baru di BSD City', '-', 'ZwGN9XjWp9I', NULL, 6, 'active', '2023-01-06 03:15:51', NULL);

-- ----------------------------
-- Table structure for webmin_access
-- ----------------------------
DROP TABLE IF EXISTS `webmin_access`;
CREATE TABLE `webmin_access`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `add` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `delete` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `edit` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `page_action` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `page_title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of webmin_access
-- ----------------------------

-- ----------------------------
-- Table structure for webmin_activity
-- ----------------------------
DROP TABLE IF EXISTS `webmin_activity`;
CREATE TABLE `webmin_activity`  (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activity_user` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `activity_type` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `activity_action` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `activity_item` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `activity_assign_to` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `activity_assign_type` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`activity_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of webmin_activity
-- ----------------------------

-- ----------------------------
-- Table structure for webmin_profile
-- ----------------------------
DROP TABLE IF EXISTS `webmin_profile`;
CREATE TABLE `webmin_profile`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `telephone` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `fax` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mobile_phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email_2` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address_2` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `caption` varchar(155) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `footer_text` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `logo_footer` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NULL DEFAULT NULL,
  `favicon` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_keyword` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `contactus` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `website` varchar(150) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `twitter` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `whatsapp` varchar(155) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `pinterest` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `instagram` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `skype` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `caption_skype` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `paypal_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `currency` varchar(155) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of webmin_profile
-- ----------------------------
INSERT INTO `webmin_profile` VALUES (3, 'Infinita Center', '+62 811-1688-872', '021', '+62 811-1688-872', 'info@infinitacenter.com', 'info@infinitacenter.com', 'Ruko golden 8 blok K no. 21, Gading Serpong,\nTangerang, Indonesia', 'Ruko golden 8 blok K no. 21, Gading Serpong,\nTangerang, Indonesia', NULL, NULL, 'infinitacenter.com, infinitacenter, infinita counseling', '© Copyright, 2023. Infinitacenter. Ltd, All Rights Reserved', 'https://hierabsd.net/storage/photos/logo-hiera-white.png', NULL, '/storage/photos/favicon.png', 'infinitacenter.com, infinitacenter, infinita counseling', 'infinitacenter.com, infinitacenter, infinita counseling', '-', 'www.infinitacenter.com', 'www.facebook.com', 'www.twitter.com', 'www.youtube.com', '+62 811-1688-872', 'www.pinterest.com', 'www.instagram.com', 'www.skype.com', '-', '-', '-');

-- ----------------------------
-- Table structure for webmin_rolenpermission
-- ----------------------------
DROP TABLE IF EXISTS `webmin_rolenpermission`;
CREATE TABLE `webmin_rolenpermission`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `menu` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of webmin_rolenpermission
-- ----------------------------
INSERT INTO `webmin_rolenpermission` VALUES (1, 'Admin', '', '1', '2020-01-30 11:55:02', '');

-- ----------------------------
-- Table structure for webmin_user
-- ----------------------------
DROP TABLE IF EXISTS `webmin_user`;
CREATE TABLE `webmin_user`  (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `admin_photo` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `admin_password` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `admin_level` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cookie` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `update` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`admin_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of webmin_user
-- ----------------------------
INSERT INTO `webmin_user` VALUES (1, 'admin', '', '975a5447cc69737e1b8750ec01895af2', '1', 'active', 'FY6ZlI2yc7RB5oMXUNzMT9o1sYHJIGmQW0pzifgWkZEtVuJhL1VOCwxha8FKPrpy', '2020-01-30 11:57:12', '2020-01-31 01:13:27');
INSERT INTO `webmin_user` VALUES (2, 'admin2', '', '975a5447cc69737e1b8750ec01895af2', '1', 'active', 'DCj1FJmGQjMZNHVvwqB5ZA83m721niAJQ0y9SEPk52f9t4oUzXsgUwx4KNWkSHWp', '2020-03-10 06:28:31', '2020-12-22 01:42:04');
INSERT INTO `webmin_user` VALUES (3, 'pras', '', '975a5447cc69737e1b8750ec01895af2', '1', 'active', 'WZGtAkcPNoxSQqhlCp3mdRaKEnw4JezzbD2ySjkr597Zng6QsBLXmGp9uq23eUXT', '2020-12-22 01:42:53', '');

SET FOREIGN_KEY_CHECKS = 1;
