/*
Navicat MySQL Data Transfer

Source Server         : localhost_new
Source Server Version : 50726
Source Host           : 127.0.0.1:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-11-04 13:40:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_comment
-- ----------------------------
DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `like` int(11) DEFAULT '0',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_comment
-- ----------------------------
INSERT INTO `tbl_comment` VALUES ('13', '的地方的', '我说的是', '2', '2020-11-04 11:56:49');
INSERT INTO `tbl_comment` VALUES ('14', '杀手啥事', '是的是的', '4', '2020-11-04 13:23:40');
INSERT INTO `tbl_comment` VALUES ('16', '顶顶顶顶', '杀手啥事', '1', '2020-11-04 11:56:42');
INSERT INTO `tbl_comment` VALUES ('17', 'system', '我的博客点赞总数', '3', '2020-11-04 13:23:44');
