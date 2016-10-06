/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : excel_test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-10-06 10:40:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Isaías', 'Caamal García', 'isaiascaamal', '$2a$05$oecO86tLFk.N7hSnQktE3.ZsLXL.bj/ypKFxuqrinjkf0LDGW.1u.', '2016-10-06 01:26:39', '2016-10-06 02:18:20', 'NIufTUx3k2wzUvLl3loVqETbRhTWY55Qx7pHjl4ue1Bmeqbuma9tb1i4ylh6');
INSERT INTO `users` VALUES ('2', 'Ricardo', 'Caamal García', 'ricardocaamal', '$2a$05$mW/07miEu.U/EdaViHsov.ShoQspy7Q5HnP1h/6AmafdVp/HxHiOy', '2016-10-06 01:29:45', '2016-10-06 01:51:05', 'TXbsxRPQ0RU84fSXG9Q22NDgUZ78wZ91Mx7wYveRUfnVd0FVao1q8qNXWmdq');
INSERT INTO `users` VALUES ('3', 'Alejandro', 'Can Tepal', 'alexcan', '$2y$10$iONJPuIHiYxZBrPwFdyBA.Ku2efzdsdaa9ypkAZA3J4nsVTlQat2G', '2016-10-06 15:20:30', '2016-10-06 15:20:30', null);
INSERT INTO `users` VALUES ('4', 'Guadalupe', 'García Cortés', 'lupitagarcia', '$2y$10$RO6Tp.arAK6g7ozglLKBAeMRetXlxE0a1cteQuLkH5EHXt/LwxX/a', '2016-10-06 15:27:54', '2016-10-06 15:27:54', null);
INSERT INTO `users` VALUES ('5', 'Isaías', 'Caamal Pat', 'isaiaspat', '$2y$10$phFyenHBze9VA2lsYoAA2OzVo5is.hiVr5.5d0BtX1m48hA0nkwIG', '2016-10-06 15:30:13', '2016-10-06 15:30:13', null);
INSERT INTO `users` VALUES ('6', 'Rodrigo', 'Caamal Santoyo', 'rodrigocaamal', '$2y$10$H5ySmC8YViIHXsr.sHupcebNwmcKhPlENH3o54w.kxVCmfXW6y7BC', '2016-10-06 15:35:05', '2016-10-06 15:35:05', null);
INSERT INTO `users` VALUES ('7', 'David', 'Caamal Santoyo', 'davidsantoyo', '$2y$10$lPngKrRktcUzSoh.//a8FuOyCgk3sD3bKN/CRl1OJTPr1GNmjFNR.', '2016-10-06 15:36:12', '2016-10-06 15:36:12', null);
INSERT INTO `users` VALUES ('8', 'Jhoany', 'Santoyo Medina', 'anitamedina', '$2y$10$c13Wq/VYxa6ga2JapmXxvusnx59RBCoAiZTEdI6mSVp/JHQFEsaq6', '2016-10-06 15:37:50', '2016-10-06 15:37:59', '25VusxjXXPExK1dfiENI951ySRvDpkV9kl6sXepDrBdaOkhkO3FOQOwavTlA');
