/*
Navicat MySQL Data Transfer

Source Server         : PHP local
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : fileupload

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-06-09 08:01:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ci_image`
-- ----------------------------
DROP TABLE IF EXISTS `ci_image`;
CREATE TABLE `ci_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `order_by` varchar(255) DEFAULT NULL,
  `default_thumb` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_image
-- ----------------------------
INSERT INTO `ci_image` VALUES ('1', '', '4e58e2104217cc8dda605a629e0e26ee.png', '0', '0', '2015-06-09 12:24:18', '2015-06-09 03:24:18');
INSERT INTO `ci_image` VALUES ('2', '', 'a79e09aee2d8a6f0a19635fa65b109a3.jpg', '0', '0', '2015-06-09 12:24:18', '2015-06-09 03:24:18');
INSERT INTO `ci_image` VALUES ('3', '', '479bf719d773623a5d86146a94123757.png', '0', '0', '2015-06-09 12:28:45', '2015-06-09 03:28:45');
INSERT INTO `ci_image` VALUES ('4', '', '473c95ee1eacac25f12e0584a0536b74.jpg', '0', '0', '2015-06-09 12:28:45', '2015-06-09 03:28:45');
INSERT INTO `ci_image` VALUES ('5', '', 'fc9188632537cc29ce5917134a31ea00.jpg', '0', '0', '2015-06-09 12:42:05', '2015-06-09 03:42:05');
INSERT INTO `ci_image` VALUES ('6', '', 'c362f463bc825ec6e461e8f3dcf58f83.jpg', '0', '0', '2015-06-09 12:42:05', '2015-06-09 03:42:05');
INSERT INTO `ci_image` VALUES ('7', '', '44c0a753b6db026537a1f0e673c33053.png', '0', '0', '2015-06-09 12:42:05', '2015-06-09 03:42:05');
INSERT INTO `ci_image` VALUES ('8', '', '2b73b42866f1eeca5c2777993df70427.jpg', '0', '0', '2015-06-09 12:42:05', '2015-06-09 03:42:05');
INSERT INTO `ci_image` VALUES ('9', '', 'e580f50548d2f161285c3a07e2ab7056.png', '0', '0', '2015-06-09 12:43:10', '2015-06-09 03:43:10');
INSERT INTO `ci_image` VALUES ('10', '', 'bf675017639d9668c3d53c0dee9b5716.jpg', '0', '0', '2015-06-09 12:43:10', '2015-06-09 03:43:10');
INSERT INTO `ci_image` VALUES ('11', '', '5e1fe1f733ca8cdeca279799b1cc334d.png', '0', '0', '2015-06-09 12:46:38', '2015-06-09 03:46:38');
INSERT INTO `ci_image` VALUES ('12', '', '31070c60b5233b2248bfd037685d18af.jpg', '0', '0', '2015-06-09 12:46:38', '2015-06-09 03:46:38');
INSERT INTO `ci_image` VALUES ('13', '', 'f056106b57bccfbbd64489b87060cdef.png', '0', '0', '2015-06-09 12:47:00', '2015-06-09 03:47:00');
INSERT INTO `ci_image` VALUES ('14', '', '9b1f8f2a55ca53612527e907dfd6cd67.jpg', '0', '0', '2015-06-09 12:48:47', '2015-06-09 03:48:47');
INSERT INTO `ci_image` VALUES ('15', '', 'e55eceb6f28414eead56951436158eb3.jpg', '0', '0', '2015-06-09 12:49:26', '2015-06-09 03:49:26');
INSERT INTO `ci_image` VALUES ('16', '', '44b6406be13bbd3ba7fcf4c795e97aef.png', '0', '0', '2015-06-09 12:51:46', '2015-06-09 03:51:46');
INSERT INTO `ci_image` VALUES ('17', '', 'a72d96b921e26d5241647d26c673a59a.jpg', '0', '0', '2015-06-09 12:54:54', '2015-06-09 03:54:54');
INSERT INTO `ci_image` VALUES ('18', '', '63288788fd8542c308d7f30a15dcddfc.png', '0', '0', '2015-06-09 12:55:31', '2015-06-09 03:55:31');
INSERT INTO `ci_image` VALUES ('19', '', '77410fbe99550cfb1d8fe0dbdd63c08d.jpg', '0', '0', '2015-06-09 01:03:45', '2015-06-09 04:03:45');
INSERT INTO `ci_image` VALUES ('20', '', '3dba095e752b6c57ea79ad355674340e.png', '0', '0', '2015-06-09 01:04:20', '2015-06-09 04:04:20');
INSERT INTO `ci_image` VALUES ('21', '', '8c3c0fa250a34e64d89cda21365b488f.jpg', '0', '0', '2015-06-09 01:04:20', '2015-06-09 04:04:20');
INSERT INTO `ci_image` VALUES ('22', '', '1380b41d2697f6977b10113d0b3c854d.jpg', '0', '0', '2015-06-09 01:04:20', '2015-06-09 04:04:20');
INSERT INTO `ci_image` VALUES ('23', '', 'd8cb95e981b4d61682b056b5c16f201f.png', '0', '0', '2015-06-09 01:06:36', '2015-06-09 04:06:36');
INSERT INTO `ci_image` VALUES ('24', '', '7ea9b100e85fec041337180dcd335f34.jpg', '0', '0', '2015-06-09 01:06:37', '2015-06-09 04:06:37');
INSERT INTO `ci_image` VALUES ('25', '', '6f00b247f05c2106fcbf81f8ac64ed90.jpg', '0', '0', '2015-06-09 01:10:02', '2015-06-09 04:10:02');
INSERT INTO `ci_image` VALUES ('26', '', 'fa232258b6bf921358a6b76cd6d5e3a4.png', '0', '0', '2015-06-09 01:10:02', '2015-06-09 04:10:02');
INSERT INTO `ci_image` VALUES ('27', '', 'b98c48c5e79d83d43b99e73fcc948232.png', '0', '0', '2015-06-09 01:10:02', '2015-06-09 04:10:02');
INSERT INTO `ci_image` VALUES ('28', '', '4bcfc287f1c9d7a62e6a2e60353e2381.png', '0', '0', '2015-06-09 01:10:35', '2015-06-09 04:10:35');
INSERT INTO `ci_image` VALUES ('29', '', '431b8321523aa9afafe99fd792146abc.jpg', '0', '0', '2015-06-09 01:10:35', '2015-06-09 04:10:35');
INSERT INTO `ci_image` VALUES ('30', '', '84ae3f0d99ed2396f99d24f41302dd2d.jpg', '0', '0', '2015-06-09 01:12:14', '2015-06-09 04:12:14');
INSERT INTO `ci_image` VALUES ('31', '', '982c6c25c5de6c92f60460da52558806.jpg', '0', '0', '2015-06-09 01:14:57', '2015-06-09 04:14:57');
INSERT INTO `ci_image` VALUES ('32', '', '0999e3c020592d7a56b8b935556be23f.jpg', '0', '0', '2015-06-09 01:14:57', '2015-06-09 04:14:57');
INSERT INTO `ci_image` VALUES ('33', '', 'aaf14f2682d5c8c2404e34b0d4cb21e1.jpg', '0', '0', '2015-06-09 01:16:36', '2015-06-09 04:16:36');
INSERT INTO `ci_image` VALUES ('34', '', '246f7b4b11c644e6be0184aa747494b4.jpg', '0', '0', '2015-06-09 01:27:06', '2015-06-09 04:27:06');
INSERT INTO `ci_image` VALUES ('35', '', '52aab2db435aef9e8a840aa835b776a8.png', '0', '0', '2015-06-09 01:36:16', '2015-06-09 04:36:16');
INSERT INTO `ci_image` VALUES ('36', '', '35eea413f982614dcff741b151d0093a.png', '0', '0', '2015-06-09 01:41:36', '2015-06-09 04:41:36');
INSERT INTO `ci_image` VALUES ('37', '', '9bba5e19c6454e69162d4c97fc6a0d79.png', '0', '0', '2015-06-09 01:46:03', '2015-06-09 04:46:03');
INSERT INTO `ci_image` VALUES ('38', '', 'b49b6b897687c319b876843239c7bc50.jpg', '0', '0', '2015-06-09 01:52:39', '2015-06-09 04:52:39');
INSERT INTO `ci_image` VALUES ('39', '', '7331b807b08affe631bb456134c076d3.jpg', '0', '0', '2015-06-09 01:57:57', '2015-06-09 04:57:57');
INSERT INTO `ci_image` VALUES ('40', '', '85e5eae055ecc04614c90dc610bf6efa.jpg', '0', '0', '2015-06-09 02:06:34', '2015-06-09 05:06:34');
INSERT INTO `ci_image` VALUES ('41', '', '1285eea89bec605d33c23431f43cc010.jpg', '0', '0', '2015-06-09 02:35:09', '2015-06-09 05:35:09');
INSERT INTO `ci_image` VALUES ('42', '', '76c8dba9638de938e19a2be1aecb6a16.jpg', '0', '0', '2015-06-09 02:44:33', '2015-06-09 05:44:33');
INSERT INTO `ci_image` VALUES ('43', '', '7e7d88ae0f267171e605bcaced10961f.jpg', '0', '0', '2015-06-09 02:44:52', '2015-06-09 05:44:52');
INSERT INTO `ci_image` VALUES ('44', '', 'f95b5c5bbcfc3386ba69c06ffc3bb1fb.jpg', '0', '0', '2015-06-09 02:46:43', '2015-06-09 05:46:43');
INSERT INTO `ci_image` VALUES ('45', '', '496cb3b7221c9ead00dfec5d538da342.jpg', '0', '0', '2015-06-09 02:48:43', '2015-06-09 05:48:43');
INSERT INTO `ci_image` VALUES ('46', '', '1f345591d366b29a924061ed5be29fe7.jpg', '0', '0', '2015-06-09 02:49:19', '2015-06-09 05:49:19');
INSERT INTO `ci_image` VALUES ('47', '', '08853584c5d5927b81dba0cd7945d09d.jpg', '0', '0', '2015-06-09 02:57:08', '2015-06-09 05:57:08');
INSERT INTO `ci_image` VALUES ('48', '', '3c67c4c88bd075c7d2a3265336630c5f.jpg', '0', '0', '2015-06-09 02:57:09', '2015-06-09 05:57:09');
INSERT INTO `ci_image` VALUES ('49', '', '1d754565aee848b3e216067ca95d29d4.png', '0', '0', '2015-06-09 02:57:09', '2015-06-09 05:57:09');
INSERT INTO `ci_image` VALUES ('50', '', 'ad9ccc6a60a97c2164066db5a23b66d9.jpg', '0', '0', '2015-06-09 02:57:09', '2015-06-09 05:57:09');
INSERT INTO `ci_image` VALUES ('51', '', '0b27a88e5de0f575e1c402ef33560150.jpg', '0', '0', '2015-06-09 02:57:09', '2015-06-09 05:57:09');
INSERT INTO `ci_image` VALUES ('52', '', '2f121b6b096f7feaa07f1a8ebc2e7cd1.png', '0', '0', '2015-06-09 02:57:09', '2015-06-09 05:57:09');
INSERT INTO `ci_image` VALUES ('53', '', '37c28de5fc7557cbfcc2c97bd9295687.jpg', '0', '0', '2015-06-09 02:57:09', '2015-06-09 05:57:09');
INSERT INTO `ci_image` VALUES ('54', '', '4b10deb2220b9bf5856a4f9ec8b9bd1d.jpg', '0', '0', '2015-06-09 02:57:09', '2015-06-09 05:57:09');
INSERT INTO `ci_image` VALUES ('55', '', '29d0afc1fe0b19b780e9d50c3c5cd679.jpg', '0', '0', '2015-06-09 02:59:50', '2015-06-09 05:59:50');
INSERT INTO `ci_image` VALUES ('56', '', 'f36264cf2eac9d9c720ebe9e6ec826a7.jpg', '0', '0', '2015-06-09 03:04:27', '2015-06-09 06:04:27');
INSERT INTO `ci_image` VALUES ('57', '', '44a9ec709d9ebd79b99d29089e9ad709.jpg', '0', '0', '2015-06-09 03:26:43', '2015-06-09 06:26:43');
INSERT INTO `ci_image` VALUES ('58', '', '9b6c66bb9d60f7399a9e9ac6c677e587.jpg', '0', '0', '2015-06-09 03:26:43', '2015-06-09 06:26:43');
INSERT INTO `ci_image` VALUES ('59', '', '06db9d529fb9550a4367b17dc6e4208d.jpg', '0', '0', '2015-06-09 03:26:43', '2015-06-09 06:26:43');
INSERT INTO `ci_image` VALUES ('60', '', '156f615f33910915a6d2bab0197c0c67.jpg', '0', '0', '2015-06-09 03:26:43', '2015-06-09 06:26:43');
INSERT INTO `ci_image` VALUES ('61', '', '057252001ff888c5c42dd2ba32355baf.jpg', '0', '0', '2015-06-09 03:27:51', '2015-06-09 06:27:51');
INSERT INTO `ci_image` VALUES ('62', '', '7ce2b87a4b15fd4aec9a28390ffb0c14.jpg', '0', '0', '2015-06-09 03:27:51', '2015-06-09 06:27:51');
INSERT INTO `ci_image` VALUES ('63', '', '606041d87dc1ea0eaeec9edb660f4ee3.jpg', '0', '0', '2015-06-09 03:29:17', '2015-06-09 06:29:17');
INSERT INTO `ci_image` VALUES ('64', '', '99bce24ec0ffc7d6deea1dc9aad286c2.jpg', '0', '0', '2015-06-09 03:35:11', '2015-06-09 06:35:11');
INSERT INTO `ci_image` VALUES ('65', '', '13dd1985feab0a34d9ccfa9d1844b6ca.png', '0', '0', '2015-06-09 03:35:32', '2015-06-09 06:35:32');
INSERT INTO `ci_image` VALUES ('66', '', '8da37f7891bf3ebfd915f3018832efb2.jpg', '0', '0', '2015-06-09 04:58:21', '2015-06-09 07:58:21');
INSERT INTO `ci_image` VALUES ('67', '', '23e7b1045088fe6eeee2e2eeed11e534.jpg', '0', '0', '2015-06-09 04:58:21', '2015-06-09 07:58:21');
INSERT INTO `ci_image` VALUES ('68', '', '3ca1b7eddf13a6207ac892cf2a92ab4b.png', '0', '0', '2015-06-09 04:59:01', '2015-06-09 07:59:01');

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
