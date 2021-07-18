/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : utm_connect

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 14/07/2021 15:32:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `matrix_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`matrix_card`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('m3matric', '2020', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for aspiration
-- ----------------------------
DROP TABLE IF EXISTS `aspiration`;
CREATE TABLE `aspiration`  (
  `matrix_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_on` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspiration_subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspiration_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`matrix_no`) USING BTREE,
  UNIQUE INDEX `aspiration_division_name_unique`(`division_name`) USING BTREE,
  CONSTRAINT `aspiration_division_name_foreign` FOREIGN KEY (`division_name`) REFERENCES `division` (`division_name`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `aspiration_matrix_no_foreign` FOREIGN KEY (`matrix_no`) REFERENCES `member` (`matrix_card`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for campaign_list
-- ----------------------------
DROP TABLE IF EXISTS `campaign_list`;
CREATE TABLE `campaign_list`  (
  `campaign_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `campaign_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_participant` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`campaign_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of campaign_list
-- ----------------------------
INSERT INTO `campaign_list` VALUES (1, 'Halo', 'Ya Hallo', 69, NULL, NULL, NULL);
INSERT INTO `campaign_list` VALUES (2, 'Halo2', 'Ya Hallo2', 420, NULL, NULL, NULL);
INSERT INTO `campaign_list` VALUES (3, 'test', 'Testing', 1, '2021-06-18 08:30:26', '2021-06-18 08:30:26', NULL);
INSERT INTO `campaign_list` VALUES (4, 'Campaign', 'Coba blasting', 4, '2021-06-18 08:32:29', '2021-06-18 08:32:29', NULL);
INSERT INTO `campaign_list` VALUES (5, 'Campaign lagi', 'Testing', 1, '2021-06-18 08:46:42', '2021-06-18 08:46:42', NULL);
INSERT INTO `campaign_list` VALUES (6, 'test', 'Testing', 4, '2021-06-18 13:21:28', '2021-06-18 13:21:28', NULL);
INSERT INTO `campaign_list` VALUES (7, 'test', 'Testing', 1, '2021-06-19 12:42:23', '2021-06-19 12:42:23', NULL);
INSERT INTO `campaign_list` VALUES (8, 'Campaign lagi', 'Emsa', 1, '2021-06-19 13:23:08', '2021-06-19 13:23:08', NULL);
INSERT INTO `campaign_list` VALUES (9, 'Campaign lagi', 'Rapat andsladna', 1, '2021-06-19 13:49:43', '2021-06-19 13:49:43', NULL);
INSERT INTO `campaign_list` VALUES (10, 'test', 'Testing', 1, '2021-06-20 15:46:16', '2021-06-20 15:46:16', NULL);

-- ----------------------------
-- Table structure for division
-- ----------------------------
DROP TABLE IF EXISTS `division`;
CREATE TABLE `division`  (
  `division_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`division_name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for event
-- ----------------------------
DROP TABLE IF EXISTS `event`;
CREATE TABLE `event`  (
  `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_category` enum('Sport','Academic','Arts or Music','Strategic Studies','Human Dev') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_venue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_on` date NOT NULL,
  `open_for` enum('Participants','Committee') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `closed_on` date NOT NULL,
  `event_details` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_pic1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_pic2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `event_pic3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`event_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of event
-- ----------------------------
INSERT INTO `event` VALUES (1, 'e1title', 'Sport', 'e1venue', '2021-03-03', 'Participants', '2021-04-04', 'e1details', 'https://form.typeform.com/to/bOOqUGlh?typeform-medium=embed-snippet', '2021-05-05', 'e1pic1.PNG', 'e1pic2.PNG', 'e1pic3.PNG', NULL, NULL, NULL);
INSERT INTO `event` VALUES (2, 'e2title', 'Academic', 'e2venue', '2021-10-10', 'Committee', '2021-11-11', 'e2details', 'https://form.typeform.com/to/sWBiD0dR?typeform-medium=embed-snippet', '2021-12-12', 'e2pic1.PNG', NULL, 'e2pic3.PNG', NULL, NULL, NULL);
INSERT INTO `event` VALUES (3, 'e3title', 'Human Dev', 'e3venue', '2022-04-04', 'Committee', '2022-05-05', 'e3details', 'https://form.typeform.com/to/KFeb422q?typeform-medium=embed-snippet', '2022-06-06', 'e3pic1.PNG', 'e3pic2.PNG', NULL, NULL, NULL, NULL);
INSERT INTO `event` VALUES (4, 'contoh aja', 'Sport', 'e1venue', '2021-03-03', 'Participants', '2021-04-04', 'e1details', 'https://form.typeform.com/to/bOOqUGlh?typeform-medium=embed-snippet', '2021-05-05', 'e1pic1.PNG', 'e1pic2.PNG', 'e1pic3.PNG', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for feedback
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback`  (
  `matrix_card_feedback` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_on` date NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `feedback` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_event` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`matrix_card_feedback`) USING BTREE,
  INDEX `feedback_event_id_index`(`event_id`) USING BTREE,
  CONSTRAINT `feedback_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `feedback_matrix_card_feedback_foreign` FOREIGN KEY (`matrix_card_feedback`) REFERENCES `member` (`matrix_card`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('m1matric', '2021-05-06', 1, 'feedback1', 5, NULL, NULL, NULL);
INSERT INTO `feedback` VALUES ('m3matric', '2021-05-08', 1, 'feedback2', 4, NULL, NULL, NULL);
INSERT INTO `feedback` VALUES ('m4matric', '2021-05-07', 1, 'feedback3', 3, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for grant_access
-- ----------------------------
DROP TABLE IF EXISTS `grant_access`;
CREATE TABLE `grant_access`  (
  `grant_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `grant_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`grant_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of grant_access
-- ----------------------------
INSERT INTO `grant_access` VALUES (1, 'member', NULL, NULL, NULL);
INSERT INTO `grant_access` VALUES (2, 'management', NULL, NULL, NULL);
INSERT INTO `grant_access` VALUES (3, 'admin', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for management
-- ----------------------------
DROP TABLE IF EXISTS `management`;
CREATE TABLE `management`  (
  `management_matrix_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `management_year` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `management_role_id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`management_matrix_card`) USING BTREE,
  INDEX `management_management_role_id_index`(`management_role_id`) USING BTREE,
  CONSTRAINT `management_management_matrix_card_foreign` FOREIGN KEY (`management_matrix_card`) REFERENCES `member` (`matrix_card`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `management_management_role_id_foreign` FOREIGN KEY (`management_role_id`) REFERENCES `role` (`role_id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of management
-- ----------------------------
INSERT INTO `management` VALUES ('m2matric', '2020', 1, 'div1', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member`  (
  `matrix_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` year NOT NULL,
  `program_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_grant` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`matrix_card`) USING BTREE,
  UNIQUE INDEX `member_email_unique`(`email`) USING BTREE,
  INDEX `member_program_code_access_grant_index`(`program_code`, `access_grant`) USING BTREE,
  INDEX `member_access_grant_foreign`(`access_grant`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('m1matric', 'todopsain11@gmail.com', '$2y$10$gTRz4hjfhuUnLh6tLm/ziO.5DKbRM3ynAJuooMBUwBLDaJHqYIydu', 'm1name', 2020, 'm1program_code', 'm1degrees', 'm1address', 1, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `member` VALUES ('m2matric', 'technoinfosys05@gmail.com', '$2y$10$hSJ25a0qUyhd4S.qMVTSreN.h3qZtaSlohmu0LVfQPWfM073x0clm', 'm2name', 2020, 'm2program_code', 'm2degree', 'm2address', 2, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `member` VALUES ('m3matric', 'shikifujin11@protonmail.ch', '$2y$10$jtuD.W1Z8IaHW8yOGcQtiustaYQYXtClKFgOO/0KgTRas.zTcraxO', 'm3name', 2020, 'm3program_code', 'm3degree', 'm3address', 3, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `member` VALUES ('m4matric', 'barongobber@gmail.com', '$2y$10$Rr0F.O8QUQGYMtHALStbcuNyZtmW869JBEiihsUV7PKrD0BWvtIN.', 'm4name', 2020, 'm4program_code', 'm4degree', 'm4address', 1, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 176 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (162, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (163, '2021_05_22_000000_create_program_table', 1);
INSERT INTO `migrations` VALUES (164, '2021_05_22_013000_create_grant_access_table', 1);
INSERT INTO `migrations` VALUES (165, '2021_05_22_013001_create_member_table', 1);
INSERT INTO `migrations` VALUES (166, '2021_05_22_013024_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (167, '2021_05_22_013025_create_admin_table', 1);
INSERT INTO `migrations` VALUES (168, '2021_05_22_013026_create_division_table', 1);
INSERT INTO `migrations` VALUES (169, '2021_05_22_013040_create_aspiration_table', 1);
INSERT INTO `migrations` VALUES (170, '2021_05_22_013116_create_event_table', 1);
INSERT INTO `migrations` VALUES (171, '2021_05_22_013138_create_feedback_table', 1);
INSERT INTO `migrations` VALUES (172, '2021_05_22_013139_create_role_table', 1);
INSERT INTO `migrations` VALUES (173, '2021_05_22_013140_create_management_table', 1);
INSERT INTO `migrations` VALUES (174, '2021_05_22_013503_create_news_table', 1);
INSERT INTO `migrations` VALUES (175, '2021_06_15_010331_create_campaign_list', 1);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `news_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `news_category` enum('Sport','Academic','Arts or Music','Strategic Studies','Human Dev') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_on` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_pic1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_pic2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `news_pic3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`news_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (1, 'Sport', 'n1title', 'n1content', '2021-06-06 00:00:00', 'n1pic.PNG', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for program
-- ----------------------------
DROP TABLE IF EXISTS `program`;
CREATE TABLE `program`  (
  `program_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`program_code`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'leader', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
