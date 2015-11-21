-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2015 at 03:16 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letsbonus`
--

-- --------------------------------------------------------

--
-- Table structure for table `MERCHANTS`
--

CREATE TABLE IF NOT EXISTS `MERCHANTS` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ADDRESS` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCTS`
--

CREATE TABLE IF NOT EXISTS `PRODUCTS` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `DESCRIPTION` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `PRICE` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `INIT_DATE` datetime NOT NULL,
  `EXPIRY_DATE` datetime NOT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `MERCHANT_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MERCHANTS`
--
ALTER TABLE `MERCHANTS`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MERCHANTS`
--
ALTER TABLE `MERCHANTS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
