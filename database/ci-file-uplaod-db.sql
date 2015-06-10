/*
Navicat MySQL Data Transfer

Source Server         : PHP local
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : fileupload

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-06-10 06:46:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ci_image`
-- ----------------------------
DROP TABLE IF EXISTS `ci_image`;
CREATE TABLE `ci_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_image
-- ----------------------------

-- ----------------------------
-- Table structure for `ci_image_setting`
-- ----------------------------
DROP TABLE IF EXISTS `ci_image_setting`;
CREATE TABLE `ci_image_setting` (
  `id` int(11) NOT NULL DEFAULT '0',
  `maintain_ratio` tinyint(4) DEFAULT NULL,
  `thumbnail` int(10) DEFAULT NULL,
  `medium` int(11) DEFAULT NULL,
  `large` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_image_setting
-- ----------------------------
INSERT INTO `ci_image_setting` VALUES ('1', '0', '200', '300', '640');
