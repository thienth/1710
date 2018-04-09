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

 Date: 04/02/2018 18:40:28 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'admin', 'admin@gmail.com', '$2y$10$.Ys5xN9Ro1.x0tTnEWlI0.GRqXMSC73WDn93c7U6fF5vWdahfWwG.', null, '900'), ('2', 'member', 'member@gmail.com', '$2y$10$.Ys5xN9Ro1.x0tTnEWlI0.GRqXMSC73WDn93c7U6fF5vWdahfWwG.', null, '100'), ('3', 'mod', 'mod@gmail.com', '$2y$10$.Ys5xN9Ro1.x0tTnEWlI0.GRqXMSC73WDn93c7U6fF5vWdahfWwG.', null, '500');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
