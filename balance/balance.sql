-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 04:18 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `balance`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `balance`
-- 

CREATE TABLE `balance` (
  `atm_id` varchar(4) collate utf8_unicode_ci NOT NULL,
  `balance` float NOT NULL,
  `limited` int(11) NOT NULL,
  `credit` varchar(5) collate utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `balance`
-- 

INSERT INTO `balance` VALUES ('1221', 5000, 10000, 'Yes');
INSERT INTO `balance` VALUES ('5856', 100000, 5000, 'No');
INSERT INTO `balance` VALUES ('7010', 8325, 5000, 'No');
INSERT INTO `balance` VALUES ('0412', 65325.5, 100000, 'Yes');
INSERT INTO `balance` VALUES ('9632', 200, 5000, 'No');
INSERT INTO `balance` VALUES ('0115', 100, 1000, 'Yes');
