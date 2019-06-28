/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : admin

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-06-13 11:03:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uname` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `skin` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_uname_unique` (`uname`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'admin', '$2y$10$rmXDOWeKF24esxeq1rik.OyT.MsslTp.bLOyn694FJaPKOzM1S1xO', '1', null, '2019-06-13 01:03:02', 'layout', 'fFx0HHyowKAJqa53aruqgE5qsTSHTMGq9pwHxAdiArzRW6mv70JF7NpcYdMJ');
INSERT INTO `admins` VALUES ('10', 'ceshi', '$2y$10$Z1cktLRqK4zypWrWHHi/gOhVZveBh6YV9jv35sObJepCbAq0zSqGe', '1', '2019-06-10 08:52:32', '2019-06-12 08:28:58', 'layout', '1UUDr50Vtfe21eHVNQb5nUIZCYL0wsiGpeqXwNfoCXpt2bX2ZpDxHklY7Jc8');

-- ----------------------------
-- Table structure for auth_groups
-- ----------------------------
DROP TABLE IF EXISTS `auth_groups`;
CREATE TABLE `auth_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of auth_groups
-- ----------------------------
INSERT INTO `auth_groups` VALUES ('1', '管理员', '1');
INSERT INTO `auth_groups` VALUES ('2', 'hah', '1');

-- ----------------------------
-- Table structure for auth_group_accesses
-- ----------------------------
DROP TABLE IF EXISTS `auth_group_accesses`;
CREATE TABLE `auth_group_accesses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(9) NOT NULL,
  `group_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_group_accesses_uid_index` (`uid`),
  KEY `auth_group_accesses_group_id_index` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of auth_group_accesses
-- ----------------------------
INSERT INTO `auth_group_accesses` VALUES ('1', '1', '1');
INSERT INTO `auth_group_accesses` VALUES ('14', '8', '1');
INSERT INTO `auth_group_accesses` VALUES ('19', '10', '2');

-- ----------------------------
-- Table structure for auth_group_rules
-- ----------------------------
DROP TABLE IF EXISTS `auth_group_rules`;
CREATE TABLE `auth_group_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of auth_group_rules
-- ----------------------------
INSERT INTO `auth_group_rules` VALUES ('19', '1', '141');
INSERT INTO `auth_group_rules` VALUES ('2', '1', '1');
INSERT INTO `auth_group_rules` VALUES ('33', '1', '2');
INSERT INTO `auth_group_rules` VALUES ('4', '1', '3');
INSERT INTO `auth_group_rules` VALUES ('5', '1', '4');
INSERT INTO `auth_group_rules` VALUES ('6', '1', '5');
INSERT INTO `auth_group_rules` VALUES ('7', '1', '6');
INSERT INTO `auth_group_rules` VALUES ('8', '1', '7');
INSERT INTO `auth_group_rules` VALUES ('9', '1', '8');
INSERT INTO `auth_group_rules` VALUES ('10', '1', '11');
INSERT INTO `auth_group_rules` VALUES ('11', '1', '21');
INSERT INTO `auth_group_rules` VALUES ('12', '1', '22');
INSERT INTO `auth_group_rules` VALUES ('13', '1', '23');
INSERT INTO `auth_group_rules` VALUES ('14', '1', '126');
INSERT INTO `auth_group_rules` VALUES ('15', '1', '136');
INSERT INTO `auth_group_rules` VALUES ('16', '1', '138');
INSERT INTO `auth_group_rules` VALUES ('17', '1', '139');
INSERT INTO `auth_group_rules` VALUES ('18', '1', '140');
INSERT INTO `auth_group_rules` VALUES ('20', '1', '142');
INSERT INTO `auth_group_rules` VALUES ('21', '1', '143');
INSERT INTO `auth_group_rules` VALUES ('22', '1', '144');
INSERT INTO `auth_group_rules` VALUES ('23', '1', '145');
INSERT INTO `auth_group_rules` VALUES ('24', '1', '146');
INSERT INTO `auth_group_rules` VALUES ('25', '1', '147');
INSERT INTO `auth_group_rules` VALUES ('26', '1', '148');
INSERT INTO `auth_group_rules` VALUES ('27', '1', '149');
INSERT INTO `auth_group_rules` VALUES ('28', '2', '140');
INSERT INTO `auth_group_rules` VALUES ('35', '2', '3');
INSERT INTO `auth_group_rules` VALUES ('34', '2', '1');
INSERT INTO `auth_group_rules` VALUES ('36', '2', '5');
INSERT INTO `auth_group_rules` VALUES ('37', '2', '4');
INSERT INTO `auth_group_rules` VALUES ('38', '2', '2');
INSERT INTO `auth_group_rules` VALUES ('39', '2', '139');
INSERT INTO `auth_group_rules` VALUES ('40', '2', '138');
INSERT INTO `auth_group_rules` VALUES ('41', '2', '126');
INSERT INTO `auth_group_rules` VALUES ('42', '2', '136');
INSERT INTO `auth_group_rules` VALUES ('44', '2', '141');
INSERT INTO `auth_group_rules` VALUES ('45', '2', '144');
INSERT INTO `auth_group_rules` VALUES ('46', '2', '146');
INSERT INTO `auth_group_rules` VALUES ('47', '2', '148');
INSERT INTO `auth_group_rules` VALUES ('48', '2', '149');
INSERT INTO `auth_group_rules` VALUES ('49', '2', '147');
INSERT INTO `auth_group_rules` VALUES ('50', '2', '143');
INSERT INTO `auth_group_rules` VALUES ('51', '2', '145');
INSERT INTO `auth_group_rules` VALUES ('52', '2', '142');
INSERT INTO `auth_group_rules` VALUES ('53', '2', '23');
INSERT INTO `auth_group_rules` VALUES ('54', '2', '22');
INSERT INTO `auth_group_rules` VALUES ('55', '2', '21');
INSERT INTO `auth_group_rules` VALUES ('56', '2', '6');
INSERT INTO `auth_group_rules` VALUES ('57', '2', '8');
INSERT INTO `auth_group_rules` VALUES ('58', '2', '11');
INSERT INTO `auth_group_rules` VALUES ('59', '2', '7');

-- ----------------------------
-- Table structure for auth_rules
-- ----------------------------
DROP TABLE IF EXISTS `auth_rules`;
CREATE TABLE `auth_rules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '路由 菜单才会用到',
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `pid` int(11) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stitle` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isMenu` tinyint(4) DEFAULT '0',
  `display` tinyint(4) DEFAULT '0' COMMENT '是否显示',
  PRIMARY KEY (`id`),
  UNIQUE KEY `auth_rules_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of auth_rules
-- ----------------------------
INSERT INTO `auth_rules` VALUES ('1', 'Admin\\IndexController@index', '/admin/index', '后台首页', '1', '0', 'fa fa-home', '后台首页', '1', '1');
INSERT INTO `auth_rules` VALUES ('2', 'Admin\\MenuController@index', '/admin/menus', '菜单列表', '1', '0', 'fa fa-navicon', '菜单管理', '1', '1');
INSERT INTO `auth_rules` VALUES ('3', 'Admin\\MenuController@create', '/admin/menus/create', '添加菜单', '1', '2', 'fa-address-card-o', null, '1', '1');
INSERT INTO `auth_rules` VALUES ('4', 'Admin\\MenuController@edit', null, '菜单编辑', '1', '2', '', null, '0', '0');
INSERT INTO `auth_rules` VALUES ('5', 'Admin\\MenuController@destroy', null, '菜单删除', '1', '2', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('6', 'Admin\\AdminController@index', '/admin/admins', '管理员列表', '1', '0', 'fa fa-user-md', '管理员管理', '1', '1');
INSERT INTO `auth_rules` VALUES ('7', 'Admin\\AdminController@create', '/admin/admins/create', '管理员添加', '1', '6', 'fa fa-user-plus', null, '1', '1');
INSERT INTO `auth_rules` VALUES ('8', 'Admin\\AdminController@edit', null, '管理员编辑', '1', '6', 'fa fa-user-secret', null, '0', '0');
INSERT INTO `auth_rules` VALUES ('11', 'Admin\\AdminController@destroy', null, '管理员删除', '1', '6', 'fa fa-close', null, '0', '0');
INSERT INTO `auth_rules` VALUES ('149', 'Admin\\GroupController@permissionStore', null, '权限保存', '1', '141', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('148', 'Admin\\GroupController@permission', null, '权限分配', '1', '141', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('147', 'Admin\\GroupController@status', null, '角色状态', '1', '141', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('146', 'Admin\\GroupController@destroy', null, '角色删除', '1', '141', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('21', 'Admin\\AdminController@status', null, '改变管理员状态', '1', '6', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('22', 'Admin\\AdminController@store', null, '管理员保存', '1', '6', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('23', 'Admin\\AdminController@update', null, '管理员更新', '1', '6', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('145', 'Admin\\GroupController@update', null, '角色更新', '1', '141', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('144', 'Admin\\GroupController@edit', null, '角色编辑', '1', '141', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('143', 'Admin\\GroupController@store', null, '角色保存', '1', '141', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('142', 'Admin\\GroupController@create', '/admin/groups/create', '角色添加', '1', '141', 'fa-adjust', null, '1', '1');
INSERT INTO `auth_rules` VALUES ('141', 'Admin\\GroupController@index', '/admin/groups', '角色列表', '1', '0', 'fa fa-chain', '角色管理', '1', '1');
INSERT INTO `auth_rules` VALUES ('126', 'Admin\\MenuController@store', '/admin/menus', '菜单保存', '1', '2', '', null, '0', '0');
INSERT INTO `auth_rules` VALUES ('136', 'Admin\\MenuController@update', null, '菜单更新', '1', '2', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('138', 'Admin\\MenuController@status', null, '菜单状态', '1', '2', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('139', 'Admin\\MenuController@menu', null, '是否是菜单', '1', '2', null, null, '0', '0');
INSERT INTO `auth_rules` VALUES ('140', 'Admin\\MenuController@display', null, '是否显示', '1', '2', null, null, '0', '0');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('19', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('20', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('21', '2019_05_09_062110_create_admins_table', '1');
INSERT INTO `migrations` VALUES ('22', '2019_05_09_063914_create_auth_groups_table', '1');
INSERT INTO `migrations` VALUES ('23', '2019_05_09_064234_create_auth_group_accesses_table', '1');
INSERT INTO `migrations` VALUES ('24', '2019_05_09_070709_create_auth_rules_table', '1');
INSERT INTO `migrations` VALUES ('25', '2019_05_09_072646_update_admins_table', '1');
INSERT INTO `migrations` VALUES ('26', '2019_06_06_091207_create_auth_group_rules_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'futian', '543914283@qq.com', '$2y$10$JxPQTzwgPSvFlvtP.3xFN.k6/mqG3VN7MziXe1TUnQbqNoypFCUqO', '5meU2VshWNTsxNIRss8Vat6QYisdBLJ8j6knPcgZ4IdBQGP91YVmrKYqPB9f', '2019-05-13 03:33:43', '2019-05-13 03:33:43');
