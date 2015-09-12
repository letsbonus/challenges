-- phpMyAdmin SQL Dump
-- version 4.1.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2015 at 01:23 AM
-- Server version: 5.6.22
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `challenges`
--
CREATE DATABASE IF NOT EXISTS `challenges` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `challenges`;

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=158 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(101, NULL, NULL, NULL, 'controllers', 1, 112),
(102, 101, NULL, NULL, 'Groups', 2, 13),
(103, 102, NULL, NULL, 'admin_index', 3, 4),
(104, 102, NULL, NULL, 'admin_view', 5, 6),
(105, 102, NULL, NULL, 'admin_add', 7, 8),
(106, 102, NULL, NULL, 'admin_edit', 9, 10),
(107, 102, NULL, NULL, 'admin_delete', 11, 12),
(108, 101, NULL, NULL, 'Merchants', 14, 37),
(109, 108, NULL, NULL, 'index', 15, 16),
(110, 108, NULL, NULL, 'view', 17, 18),
(111, 108, NULL, NULL, 'add', 19, 20),
(112, 108, NULL, NULL, 'edit', 21, 22),
(113, 108, NULL, NULL, 'delete', 23, 24),
(114, 108, NULL, NULL, 'admin_list', 25, 26),
(115, 108, NULL, NULL, 'admin_index', 27, 28),
(116, 108, NULL, NULL, 'admin_view', 29, 30),
(117, 108, NULL, NULL, 'admin_add', 31, 32),
(118, 108, NULL, NULL, 'admin_edit', 33, 34),
(119, 108, NULL, NULL, 'admin_delete', 35, 36),
(120, 101, NULL, NULL, 'Pages', 38, 45),
(121, 120, NULL, NULL, 'admin_display', 39, 40),
(122, 120, NULL, NULL, 'display', 41, 42),
(123, 120, NULL, NULL, 'sendmail', 43, 44),
(124, 101, NULL, NULL, 'Products', 46, 65),
(125, 124, NULL, NULL, 'admin_upload', 47, 48),
(126, 124, NULL, NULL, 'admin_index', 49, 50),
(127, 124, NULL, NULL, 'admin_list', 51, 52),
(128, 124, NULL, NULL, 'admin_view', 53, 54),
(129, 124, NULL, NULL, 'admin_add', 55, 56),
(130, 124, NULL, NULL, 'admin_fileupload', 57, 58),
(131, 124, NULL, NULL, 'admin_edit', 59, 60),
(132, 124, NULL, NULL, 'delete', 61, 62),
(133, 124, NULL, NULL, 'admin_delete', 63, 64),
(134, 101, NULL, NULL, 'Users', 66, 87),
(135, 134, NULL, NULL, 'initDB', 67, 68),
(136, 134, NULL, NULL, 'admin_login', 69, 70),
(137, 134, NULL, NULL, 'login', 71, 72),
(138, 134, NULL, NULL, 'logout', 73, 74),
(139, 134, NULL, NULL, 'admin_logout', 75, 76),
(140, 134, NULL, NULL, 'admin_index', 77, 78),
(141, 134, NULL, NULL, 'admin_view', 79, 80),
(142, 134, NULL, NULL, 'admin_add', 81, 82),
(143, 134, NULL, NULL, 'admin_edit', 83, 84),
(144, 134, NULL, NULL, 'admin_delete', 85, 86),
(145, 101, NULL, NULL, 'AclExtras', 88, 89),
(146, 101, NULL, NULL, 'AclManager', 90, 105),
(147, 146, NULL, NULL, 'Acl', 91, 104),
(148, 147, NULL, NULL, 'drop', 92, 93),
(149, 147, NULL, NULL, 'drop_perms', 94, 95),
(150, 147, NULL, NULL, 'index', 96, 97),
(151, 147, NULL, NULL, 'permissions', 98, 99),
(152, 147, NULL, NULL, 'update_acos', 100, 101),
(153, 147, NULL, NULL, 'update_aros', 102, 103),
(154, 101, NULL, NULL, 'Sitemap', 106, 111),
(155, 154, NULL, NULL, 'Sitemaps', 107, 110),
(156, 155, NULL, NULL, 'display', 108, 109),
(157, NULL, NULL, NULL, 'controllers', 113, 114);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(16, NULL, 'Group', 1, NULL, 1, 2),
(17, NULL, 'Group', 2, NULL, 3, 4),
(18, NULL, 'Group', 3, NULL, 5, 6),
(19, NULL, 'Group', 1, NULL, 7, 10),
(20, 19, 'User', 1, NULL, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `idx_aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=353 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(130, 16, 157, '1', '1', '1', '1'),
(131, 17, 157, '-1', '-1', '-1', '-1'),
(132, 18, 157, '-1', '-1', '-1', '-1'),
(133, 16, 102, '0', '0', '0', '0'),
(134, 17, 102, '0', '0', '0', '0'),
(135, 18, 102, '0', '0', '0', '0'),
(136, 16, 103, '0', '0', '0', '0'),
(137, 17, 103, '0', '0', '0', '0'),
(138, 18, 103, '0', '0', '0', '0'),
(139, 16, 104, '0', '0', '0', '0'),
(140, 17, 104, '0', '0', '0', '0'),
(141, 18, 104, '0', '0', '0', '0'),
(142, 16, 105, '0', '0', '0', '0'),
(143, 17, 105, '0', '0', '0', '0'),
(144, 18, 105, '0', '0', '0', '0'),
(145, 16, 106, '0', '0', '0', '0'),
(146, 17, 106, '0', '0', '0', '0'),
(147, 18, 106, '0', '0', '0', '0'),
(148, 16, 107, '0', '0', '0', '0'),
(149, 17, 107, '0', '0', '0', '0'),
(150, 18, 107, '0', '0', '0', '0'),
(151, 16, 108, '0', '0', '0', '0'),
(152, 17, 108, '1', '1', '1', '1'),
(153, 18, 108, '0', '0', '0', '0'),
(154, 16, 109, '0', '0', '0', '0'),
(155, 17, 109, '0', '0', '0', '0'),
(156, 18, 109, '0', '0', '0', '0'),
(157, 16, 110, '0', '0', '0', '0'),
(158, 17, 110, '0', '0', '0', '0'),
(159, 18, 110, '0', '0', '0', '0'),
(160, 16, 111, '0', '0', '0', '0'),
(161, 17, 111, '0', '0', '0', '0'),
(162, 18, 111, '0', '0', '0', '0'),
(163, 16, 112, '0', '0', '0', '0'),
(164, 17, 112, '0', '0', '0', '0'),
(165, 18, 112, '0', '0', '0', '0'),
(166, 16, 113, '0', '0', '0', '0'),
(167, 17, 113, '0', '0', '0', '0'),
(168, 18, 113, '0', '0', '0', '0'),
(169, 16, 114, '0', '0', '0', '0'),
(170, 17, 114, '0', '0', '0', '0'),
(171, 18, 114, '0', '0', '0', '0'),
(172, 16, 115, '0', '0', '0', '0'),
(173, 17, 115, '0', '0', '0', '0'),
(174, 18, 115, '0', '0', '0', '0'),
(175, 16, 116, '0', '0', '0', '0'),
(176, 17, 116, '0', '0', '0', '0'),
(177, 18, 116, '1', '1', '1', '1'),
(178, 16, 117, '0', '0', '0', '0'),
(179, 17, 117, '0', '0', '0', '0'),
(180, 18, 117, '0', '0', '0', '0'),
(181, 16, 118, '0', '0', '0', '0'),
(182, 17, 118, '0', '0', '0', '0'),
(183, 18, 118, '0', '0', '0', '0'),
(184, 16, 119, '0', '0', '0', '0'),
(185, 17, 119, '0', '0', '0', '0'),
(186, 18, 119, '0', '0', '0', '0'),
(187, 16, 120, '0', '0', '0', '0'),
(188, 17, 120, '0', '0', '0', '0'),
(189, 18, 120, '0', '0', '0', '0'),
(190, 16, 121, '0', '0', '0', '0'),
(191, 17, 121, '0', '0', '0', '0'),
(192, 18, 121, '0', '0', '0', '0'),
(193, 16, 122, '0', '0', '0', '0'),
(194, 17, 122, '0', '0', '0', '0'),
(195, 18, 122, '0', '0', '0', '0'),
(196, 16, 123, '0', '0', '0', '0'),
(197, 17, 123, '0', '0', '0', '0'),
(198, 18, 123, '0', '0', '0', '0'),
(199, 16, 124, '0', '0', '0', '0'),
(200, 17, 124, '1', '1', '1', '1'),
(201, 18, 124, '0', '0', '0', '0'),
(202, 16, 125, '0', '0', '0', '0'),
(203, 17, 125, '0', '0', '0', '0'),
(204, 18, 125, '0', '0', '0', '0'),
(205, 16, 126, '0', '0', '0', '0'),
(206, 17, 126, '0', '0', '0', '0'),
(207, 18, 126, '0', '0', '0', '0'),
(208, 16, 127, '0', '0', '0', '0'),
(209, 17, 127, '0', '0', '0', '0'),
(210, 18, 127, '0', '0', '0', '0'),
(211, 16, 128, '0', '0', '0', '0'),
(212, 17, 128, '0', '0', '0', '0'),
(213, 18, 128, '1', '1', '1', '1'),
(214, 16, 129, '0', '0', '0', '0'),
(215, 17, 129, '0', '0', '0', '0'),
(216, 18, 129, '0', '0', '0', '0'),
(217, 16, 130, '0', '0', '0', '0'),
(218, 17, 130, '0', '0', '0', '0'),
(219, 18, 130, '0', '0', '0', '0'),
(220, 16, 131, '0', '0', '0', '0'),
(221, 17, 131, '0', '0', '0', '0'),
(222, 18, 131, '0', '0', '0', '0'),
(223, 16, 132, '0', '0', '0', '0'),
(224, 17, 132, '0', '0', '0', '0'),
(225, 18, 132, '0', '0', '0', '0'),
(226, 16, 133, '0', '0', '0', '0'),
(227, 17, 133, '0', '0', '0', '0'),
(228, 18, 133, '0', '0', '0', '0'),
(229, 16, 134, '0', '0', '0', '0'),
(230, 17, 134, '0', '0', '0', '0'),
(231, 18, 134, '0', '0', '0', '0'),
(232, 16, 135, '0', '0', '0', '0'),
(233, 17, 135, '0', '0', '0', '0'),
(234, 18, 135, '0', '0', '0', '0'),
(235, 16, 136, '0', '0', '0', '0'),
(236, 17, 136, '0', '0', '0', '0'),
(237, 18, 136, '0', '0', '0', '0'),
(238, 16, 137, '0', '0', '0', '0'),
(239, 17, 137, '0', '0', '0', '0'),
(240, 18, 137, '0', '0', '0', '0'),
(241, 16, 138, '0', '0', '0', '0'),
(242, 17, 138, '0', '0', '0', '0'),
(243, 18, 138, '1', '1', '1', '1'),
(244, 16, 139, '0', '0', '0', '0'),
(245, 17, 139, '0', '0', '0', '0'),
(246, 18, 139, '0', '0', '0', '0'),
(247, 16, 140, '0', '0', '0', '0'),
(248, 17, 140, '0', '0', '0', '0'),
(249, 18, 140, '0', '0', '0', '0'),
(250, 16, 141, '0', '0', '0', '0'),
(251, 17, 141, '0', '0', '0', '0'),
(252, 18, 141, '0', '0', '0', '0'),
(253, 16, 142, '0', '0', '0', '0'),
(254, 17, 142, '0', '0', '0', '0'),
(255, 18, 142, '0', '0', '0', '0'),
(256, 16, 143, '0', '0', '0', '0'),
(257, 17, 143, '0', '0', '0', '0'),
(258, 18, 143, '0', '0', '0', '0'),
(259, 16, 144, '0', '0', '0', '0'),
(260, 17, 144, '0', '0', '0', '0'),
(261, 18, 144, '0', '0', '0', '0'),
(262, 16, 145, '0', '0', '0', '0'),
(263, 17, 145, '0', '0', '0', '0'),
(264, 18, 145, '0', '0', '0', '0'),
(265, 16, 146, '0', '0', '0', '0'),
(266, 17, 146, '0', '0', '0', '0'),
(267, 18, 146, '0', '0', '0', '0'),
(268, 16, 147, '0', '0', '0', '0'),
(269, 17, 147, '0', '0', '0', '0'),
(270, 18, 147, '0', '0', '0', '0'),
(271, 16, 148, '0', '0', '0', '0'),
(272, 17, 148, '0', '0', '0', '0'),
(273, 18, 148, '0', '0', '0', '0'),
(274, 16, 149, '0', '0', '0', '0'),
(275, 17, 149, '0', '0', '0', '0'),
(276, 18, 149, '0', '0', '0', '0'),
(277, 16, 150, '0', '0', '0', '0'),
(278, 17, 150, '0', '0', '0', '0'),
(279, 18, 150, '0', '0', '0', '0'),
(280, 16, 151, '0', '0', '0', '0'),
(281, 17, 151, '0', '0', '0', '0'),
(282, 18, 151, '0', '0', '0', '0'),
(283, 16, 152, '0', '0', '0', '0'),
(284, 17, 152, '0', '0', '0', '0'),
(285, 18, 152, '0', '0', '0', '0'),
(286, 16, 153, '0', '0', '0', '0'),
(287, 17, 153, '0', '0', '0', '0'),
(288, 18, 153, '0', '0', '0', '0'),
(289, 16, 154, '0', '0', '0', '0'),
(290, 17, 154, '0', '0', '0', '0'),
(291, 18, 154, '0', '0', '0', '0'),
(292, 16, 155, '0', '0', '0', '0'),
(293, 17, 155, '0', '0', '0', '0'),
(294, 18, 155, '0', '0', '0', '0'),
(295, 16, 156, '0', '0', '0', '0'),
(296, 17, 156, '0', '0', '0', '0'),
(297, 18, 156, '0', '0', '0', '0'),
(298, 19, 102, '0', '0', '0', '0'),
(299, 19, 103, '0', '0', '0', '0'),
(300, 19, 104, '0', '0', '0', '0'),
(301, 19, 105, '0', '0', '0', '0'),
(302, 19, 106, '0', '0', '0', '0'),
(303, 19, 107, '0', '0', '0', '0'),
(304, 19, 108, '0', '0', '0', '0'),
(305, 19, 109, '0', '0', '0', '0'),
(306, 19, 110, '0', '0', '0', '0'),
(307, 19, 111, '0', '0', '0', '0'),
(308, 19, 112, '0', '0', '0', '0'),
(309, 19, 113, '0', '0', '0', '0'),
(310, 19, 114, '0', '0', '0', '0'),
(311, 19, 115, '0', '0', '0', '0'),
(312, 19, 116, '0', '0', '0', '0'),
(313, 19, 117, '0', '0', '0', '0'),
(314, 19, 118, '0', '0', '0', '0'),
(315, 19, 119, '0', '0', '0', '0'),
(316, 19, 120, '0', '0', '0', '0'),
(317, 19, 121, '0', '0', '0', '0'),
(318, 19, 122, '0', '0', '0', '0'),
(319, 19, 123, '0', '0', '0', '0'),
(320, 19, 124, '0', '0', '0', '0'),
(321, 19, 125, '0', '0', '0', '0'),
(322, 19, 126, '0', '0', '0', '0'),
(323, 19, 127, '0', '0', '0', '0'),
(324, 19, 128, '0', '0', '0', '0'),
(325, 19, 129, '0', '0', '0', '0'),
(326, 19, 130, '0', '0', '0', '0'),
(327, 19, 131, '0', '0', '0', '0'),
(328, 19, 132, '0', '0', '0', '0'),
(329, 19, 133, '0', '0', '0', '0'),
(330, 19, 134, '0', '0', '0', '0'),
(331, 19, 135, '0', '0', '0', '0'),
(332, 19, 136, '0', '0', '0', '0'),
(333, 19, 137, '0', '0', '0', '0'),
(334, 19, 138, '0', '0', '0', '0'),
(335, 19, 139, '0', '0', '0', '0'),
(336, 19, 140, '0', '0', '0', '0'),
(337, 19, 141, '0', '0', '0', '0'),
(338, 19, 142, '0', '0', '0', '0'),
(339, 19, 143, '0', '0', '0', '0'),
(340, 19, 144, '0', '0', '0', '0'),
(341, 19, 145, '0', '0', '0', '0'),
(342, 19, 146, '0', '0', '0', '0'),
(343, 19, 147, '0', '0', '0', '0'),
(344, 19, 148, '0', '0', '0', '0'),
(345, 19, 149, '0', '0', '0', '0'),
(346, 19, 150, '0', '0', '0', '0'),
(347, 19, 151, '0', '0', '0', '0'),
(348, 19, 152, '0', '0', '0', '0'),
(349, 19, 153, '0', '0', '0', '0'),
(350, 19, 154, '0', '0', '0', '0'),
(351, 19, 155, '0', '0', '0', '0'),
(352, 19, 156, '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Administrators', '2015-09-11 13:45:26', '2015-09-11 13:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

DROP TABLE IF EXISTS `merchants`;
CREATE TABLE IF NOT EXISTS `merchants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `init_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(155) DEFAULT NULL,
  `name` varchar(155) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `fk_users_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `username`, `email`, `name`, `password`, `group_id`) VALUES
(1, '2015-09-11 13:47:29', '2015-09-11 13:47:29', 'root', 'root@gmail.com', 'name', '115b3ad90afee8c617b79166ef6744ef939a1ca0', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
