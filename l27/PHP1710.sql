/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : 127.0.0.1
 Source Database       : PHP1710

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : utf-8

 Date: 03/19/2018 19:03:56 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `students`
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `address` text,
  `gender` tinyint(4) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `students`
-- ----------------------------
BEGIN;
INSERT INTO `students` VALUES ('2', 'nguyen hong quang', 'quangnh@gmail.com', '1996-01-01', 'lao cai', '3', 'cong nghe'), ('3', 'cao quang ganh', 'khanhcq@gmail.com', '1997-09-21', null, null, null), ('4', 'duong van giang', 'giangdv@gmail.com', '1997-10-21', null, null, null), ('6', 'nguyen thi hau', 'haunguyen@gmail.com', '1998-01-02', 'Lao cai', '2', 'thuy loi'), ('7', 'nguyen thi thuy', 'thuynguyen@gmail.com', '1998-01-02', 'Lao cai,', '2', 'thuy loi');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
