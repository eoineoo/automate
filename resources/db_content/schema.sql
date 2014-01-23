-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2014 at 09:06 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `automate`
--
CREATE DATABASE IF NOT EXISTS `automate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `automate`;

-- --------------------------------------------------------

--
-- Table structure for table `ajaxtest`
--

CREATE TABLE IF NOT EXISTS `ajaxtest` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajaxtest`
--

INSERT INTO `ajaxtest` (`id`) VALUES
(123),
(4534);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` varchar(255) NOT NULL,
  `purchase_order_number` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=208 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `serial`, `purchase_order_number`, `owner`, `email`, `timestamp`, `contents`) VALUES
(140, '0048KJ', '2011', 'Xander Dixon', 'eoinmc@gmail.com', '2013-12-11 19:37:05', 'Hello <b>Xander Dixon</b>. Your laptop (<b>0048KJ</b>) is due to be returned.</b>'),
(141, '2048HV', '2011', 'Melvin Acevedo', 'eoinmc@gmail.com', '2013-12-11 19:37:07', 'Hello <b>Melvin Acevedo</b>. Your laptop (<b>2048HV</b>) is due to be returned.</b>'),
(142, '2992LK', '2011', 'Rafael Carson', 'eoinmc@gmail.com', '2013-12-11 19:37:08', 'Hello <b>Rafael Carson</b>. Your laptop (<b>2992LK</b>) is due to be returned.</b>'),
(143, '8377JX', '2011', 'Kareem Whitley', 'eoinmc@gmail.com', '2013-12-11 19:37:09', 'Hello <b>Kareem Whitley</b>. Your laptop (<b>8377JX</b>) is due to be returned.</b>'),
(144, '2011XB', '2011', 'Nash Sanders', 'eoinmc@gmail.com', '2013-12-11 19:37:10', 'Hello <b>Nash Sanders</b>. Your laptop (<b>2011XB</b>) is due to be returned.</b>'),
(145, '7213GR', '2011', 'Leo Kennedy', 'eoin.mccrann@kpmg.ie', '2013-12-11 19:37:12', 'Hello <b>Leo Kennedy</b>. Your laptop (<b>7213GR</b>) is due to be returned.</b>'),
(146, '2302AC', '2011', 'Harper Poole', 'eoinmc@gmail.com', '2013-12-11 19:37:13', 'Hello <b>Harper Poole</b>. Your laptop (<b>2302AC</b>) is due to be returned.</b>'),
(147, '8606KY', '2011', 'Patrick Cole', 'eoinmc@gmail.com', '2013-12-11 19:37:14', 'Hello <b>Patrick Cole</b>. Your laptop (<b>8606KY</b>) is due to be returned.</b>'),
(148, '2051EO', '2011', 'Damian Alvarado', 'eoinmc@gmail.com', '2013-12-11 19:37:15', 'Hello <b>Damian Alvarado</b>. Your laptop (<b>2051EO</b>) is due to be returned.</b>'),
(149, '3761YV', '2011', 'Eric Beach', 'eoinmc@gmail.com', '2013-12-11 19:37:16', 'Hello <b>Eric Beach</b>. Your laptop (<b>3761YV</b>) is due to be returned.</b>'),
(150, '6755SM', '2011', 'Gregory Ayers', 'eoinmc@gmail.com', '2013-12-11 19:37:16', 'Hello <b>Gregory Ayers</b>. Your laptop (<b>6755SM</b>) is due to be returned.</b>'),
(151, '3001YJ', '2011', 'Wyatt Acevedo', 'eoinmc@gmail.com', '2013-12-11 19:37:18', 'Hello <b>Wyatt Acevedo</b>. Your laptop (<b>3001YJ</b>) is due to be returned.</b>'),
(152, '4278IL', '2011', 'Vernon Eaton', 'eoinmc@gmail.com', '2013-12-11 19:37:19', 'Hello <b>Vernon Eaton</b>. Your laptop (<b>4278IL</b>) is due to be returned.</b>'),
(153, '0513KI', '2011', 'Calvin Mercado', 'eoinmc@gmail.com', '2013-12-11 19:37:19', 'Hello <b>Calvin Mercado</b>. Your laptop (<b>0513KI</b>) is due to be returned.</b>'),
(154, '0515VW', '2011', 'Kennan Randolph', 'eoinmc@gmail.com', '2013-12-11 19:37:20', 'Hello <b>Kennan Randolph</b>. Your laptop (<b>0515VW</b>) is due to be returned.</b>'),
(155, '9384QQ', '2011', 'Macaulay Bradley', 'eoinmc@gmail.com', '2013-12-11 19:37:21', 'Hello <b>Macaulay Bradley</b>. Your laptop (<b>9384QQ</b>) is due to be returned.</b>'),
(156, '7739AH', '2011', 'Kenneth Wolf', 'eoinmc@gmail.com', '2013-12-11 19:37:22', 'Hello <b>Kenneth Wolf</b>. Your laptop (<b>7739AH</b>) is due to be returned.</b>'),
(174, '0048KJ', '2011', 'Xander Dixon', 'eoinmc@gmail.com', '2014-01-22 18:42:14', 'Hello <b>Xander Dixon</b>. Your laptop (<b>0048KJ</b>) is due to be returned.</b>'),
(175, '2048HV', '2011', 'Melvin Acevedo', 'eoinmc@gmail.com', '2014-01-22 18:42:15', 'Hello <b>Melvin Acevedo</b>. Your laptop (<b>2048HV</b>) is due to be returned.</b>'),
(176, '2992LK', '2011', 'Rafael Carson', 'eoinmc@gmail.com', '2014-01-22 18:42:16', 'Hello <b>Rafael Carson</b>. Your laptop (<b>2992LK</b>) is due to be returned.</b>'),
(177, '8377JX', '2011', 'Kareem Whitley', 'eoinmc@gmail.com', '2014-01-22 18:42:17', 'Hello <b>Kareem Whitley</b>. Your laptop (<b>8377JX</b>) is due to be returned.</b>'),
(178, '2011XB', '2011', 'Nash Sanders', 'eoinmc@gmail.com', '2014-01-22 18:42:18', 'Hello <b>Nash Sanders</b>. Your laptop (<b>2011XB</b>) is due to be returned.</b>'),
(179, '7213GR', '2011', 'Leo Kennedy', 'eoin.mccrann@kpmg.ie', '2014-01-22 18:42:20', 'Hello <b>Leo Kennedy</b>. Your laptop (<b>7213GR</b>) is due to be returned.</b>'),
(180, '2302AC', '2011', 'Harper Poole', 'eoinmc@gmail.com', '2014-01-22 18:42:21', 'Hello <b>Harper Poole</b>. Your laptop (<b>2302AC</b>) is due to be returned.</b>'),
(181, '8606KY', '2011', 'Patrick Cole', 'eoinmc@gmail.com', '2014-01-22 18:42:22', 'Hello <b>Patrick Cole</b>. Your laptop (<b>8606KY</b>) is due to be returned.</b>'),
(182, '2051EO', '2011', 'Damian Alvarado', 'eoinmc@gmail.com', '2014-01-22 18:42:23', 'Hello <b>Damian Alvarado</b>. Your laptop (<b>2051EO</b>) is due to be returned.</b>'),
(183, '3761YV', '2011', 'Eric Beach', 'eoinmc@gmail.com', '2014-01-22 18:42:24', 'Hello <b>Eric Beach</b>. Your laptop (<b>3761YV</b>) is due to be returned.</b>'),
(184, '6755SM', '2011', 'Gregory Ayers', 'eoinmc@gmail.com', '2014-01-22 18:42:26', 'Hello <b>Gregory Ayers</b>. Your laptop (<b>6755SM</b>) is due to be returned.</b>'),
(185, '3001YJ', '2011', 'Wyatt Acevedo', 'eoinmc@gmail.com', '2014-01-22 18:42:27', 'Hello <b>Wyatt Acevedo</b>. Your laptop (<b>3001YJ</b>) is due to be returned.</b>'),
(186, '4278IL', '2011', 'Vernon Eaton', 'eoinmc@gmail.com', '2014-01-22 18:42:28', 'Hello <b>Vernon Eaton</b>. Your laptop (<b>4278IL</b>) is due to be returned.</b>'),
(187, '0513KI', '2011', 'Calvin Mercado', 'eoinmc@gmail.com', '2014-01-22 18:42:29', 'Hello <b>Calvin Mercado</b>. Your laptop (<b>0513KI</b>) is due to be returned.</b>'),
(188, '0515VW', '2011', 'Kennan Randolph', 'eoinmc@gmail.com', '2014-01-22 18:42:31', 'Hello <b>Kennan Randolph</b>. Your laptop (<b>0515VW</b>) is due to be returned.</b>'),
(189, '9384QQ', '2011', 'Macaulay Bradley', 'eoinmc@gmail.com', '2014-01-22 18:42:32', 'Hello <b>Macaulay Bradley</b>. Your laptop (<b>9384QQ</b>) is due to be returned.</b>'),
(190, '7739AH', '2011', 'Kenneth Wolf', 'eoinmc@gmail.com', '2014-01-22 18:42:33', 'Hello <b>Kenneth Wolf</b>. Your laptop (<b>7739AH</b>) is due to be returned.</b>'),
(191, '0048KJ', '2011', 'Xander Dixon', 'eoinmc@gmail.com', '2014-01-23 20:25:31', 'Hello <b>Xander Dixon</b>. Your laptop (<b>0048KJ</b>) is due to be returned.</b>'),
(192, '2048HV', '2011', 'Melvin Acevedo', 'eoinmc@gmail.com', '2014-01-23 20:25:33', 'Hello <b>Melvin Acevedo</b>. Your laptop (<b>2048HV</b>) is due to be returned.</b>'),
(193, '2992LK', '2011', 'Rafael Carson', 'eoinmc@gmail.com', '2014-01-23 20:25:34', 'Hello <b>Rafael Carson</b>. Your laptop (<b>2992LK</b>) is due to be returned.</b>'),
(194, '8377JX', '2011', 'Kareem Whitley', 'eoinmc@gmail.com', '2014-01-23 20:25:36', 'Hello <b>Kareem Whitley</b>. Your laptop (<b>8377JX</b>) is due to be returned.</b>'),
(195, '2011XB', '2011', 'Nash Sanders', 'eoinmc@gmail.com', '2014-01-23 20:25:37', 'Hello <b>Nash Sanders</b>. Your laptop (<b>2011XB</b>) is due to be returned.</b>'),
(196, '7213GR', '2011', 'Leo Kennedy', 'eoin.mccrann@kpmg.ie', '2014-01-23 20:25:39', 'Hello <b>Leo Kennedy</b>. Your laptop (<b>7213GR</b>) is due to be returned.</b>'),
(197, '2302AC', '2011', 'Harper Poole', 'eoinmc@gmail.com', '2014-01-23 20:25:40', 'Hello <b>Harper Poole</b>. Your laptop (<b>2302AC</b>) is due to be returned.</b>'),
(198, '8606KY', '2011', 'Patrick Cole', 'eoinmc@gmail.com', '2014-01-23 20:25:41', 'Hello <b>Patrick Cole</b>. Your laptop (<b>8606KY</b>) is due to be returned.</b>'),
(199, '2051EO', '2011', 'Damian Alvarado', 'eoinmc@gmail.com', '2014-01-23 20:25:42', 'Hello <b>Damian Alvarado</b>. Your laptop (<b>2051EO</b>) is due to be returned.</b>'),
(200, '3761YV', '2011', 'Eric Beach', 'eoinmc@gmail.com', '2014-01-23 20:25:43', 'Hello <b>Eric Beach</b>. Your laptop (<b>3761YV</b>) is due to be returned.</b>'),
(201, '6755SM', '2011', 'Gregory Ayers', 'eoinmc@gmail.com', '2014-01-23 20:25:44', 'Hello <b>Gregory Ayers</b>. Your laptop (<b>6755SM</b>) is due to be returned.</b>'),
(202, '3001YJ', '2011', 'Wyatt Acevedo', 'eoinmc@gmail.com', '2014-01-23 20:25:45', 'Hello <b>Wyatt Acevedo</b>. Your laptop (<b>3001YJ</b>) is due to be returned.</b>'),
(203, '4278IL', '2011', 'Vernon Eaton', 'eoinmc@gmail.com', '2014-01-23 20:25:46', 'Hello <b>Vernon Eaton</b>. Your laptop (<b>4278IL</b>) is due to be returned.</b>'),
(204, '0513KI', '2011', 'Calvin Mercado', 'eoinmc@gmail.com', '2014-01-23 20:25:47', 'Hello <b>Calvin Mercado</b>. Your laptop (<b>0513KI</b>) is due to be returned.</b>'),
(205, '0515VW', '2011', 'Kennan Randolph', 'eoinmc@gmail.com', '2014-01-23 20:25:49', 'Hello <b>Kennan Randolph</b>. Your laptop (<b>0515VW</b>) is due to be returned.</b>'),
(206, '9384QQ', '2011', 'Macaulay Bradley', 'eoinmc@gmail.com', '2014-01-23 20:25:50', 'Hello <b>Macaulay Bradley</b>. Your laptop (<b>9384QQ</b>) is due to be returned.</b>'),
(207, '7739AH', '2011', 'Kenneth Wolf', 'eoinmc@gmail.com', '2014-01-23 20:25:52', 'Hello <b>Kenneth Wolf</b>. Your laptop (<b>7739AH</b>) is due to be returned.</b>');

-- --------------------------------------------------------

--
-- Table structure for table `csv_details`
--

CREATE TABLE IF NOT EXISTS `csv_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `db_name` varchar(4) NOT NULL,
  `orig_name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `num_entries` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `csv_details`
--

INSERT INTO `csv_details` (`id`, `db_name`, `orig_name`, `new_name`, `timestamp`, `user`, `num_entries`, `description`, `url`) VALUES
(1, 'CMDB', '_assets_hp.csv', 'cmdb_529ceb0c64297_assets_hp.csv', '2013-12-02 20:18:21', 'emccrann', 30, 'Original import of older assets', '/automate/csv/cmdb_529ceb0c64297_assets_hp.csv'),
(32, 'CMDB', '_assets_dell.csv', 'cmdb_52e17480684f1_assets_dell.csv', '2014-01-23 19:58:57', 'emccrann', 30, 'Dell import - 2013', '/automate/import/cmdb/csv/cmdb_52e17480684f1_assets_dell.csv');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_tasks`
--

CREATE TABLE IF NOT EXISTS `scheduled_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `invoice` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `schedule` varchar(7) NOT NULL,
  `run_time` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `scheduled_tasks`
--

INSERT INTO `scheduled_tasks` (`id`, `user`, `name`, `invoice`, `timestamp`, `schedule`, `run_time`, `start_date`, `end_date`) VALUES
(125, 'emccrann', '2011 Lease Return', '2011', '2014-01-23 21:01:46', 'weekly', '21:01', '27/01/2014', '31/03/2014');
--
-- Database: `swdata`
--
CREATE DATABASE IF NOT EXISTS `swdata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `swdata`;

-- --------------------------------------------------------

--
-- Table structure for table `asset_details`
--

CREATE TABLE IF NOT EXISTS `asset_details` (
  `id` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `it_owner` varchar(255) NOT NULL,
  `it_admin` varchar(255) NOT NULL,
  `encryption_level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asset_details`
--

INSERT INTO `asset_details` (`id`, `serial`, `name`, `model`, `it_owner`, `it_admin`, `encryption_level`) VALUES
(1, '0048KJ', 'IE0048KJ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(2, '2048HV', 'IE2048HV', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(3, '2992LK', 'IE2992LK', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(4, '8377JX', 'IE8377JX', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(5, '2011XB', 'IE2011XB', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(6, '7213GR', 'IE7213GR', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(7, '2302AC', 'IE2302AC', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(8, '8606KY', 'IE8606KY', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(9, '2051EO', 'IE2051EO', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(10, '8754YP', 'IE8754YP', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(11, '4536UB', 'IE4536UB', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(12, '7354VP', 'IE7354VP', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(13, '3761YV', 'IE3761YV', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(14, '8596QD', 'IE8596QD', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(15, '3585TJ', 'IE3585TJ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(16, '6755SM', 'IE6755SM', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(17, '3001YJ', 'IE3001YJ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(18, '4685WT', 'IE4685WT', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(19, '4278IL', 'IE4278IL', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(20, '0360WX', 'IE0360WX', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(21, '7547GI', 'IE7547GI', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(22, '0513KI', 'IE0513KI', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(23, '6235DL', 'IE6235DL', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(24, '0940HM', 'IE0940HM', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(25, '0515VW', 'IE0515VW', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(26, '9384QQ', 'IE9384QQ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(27, '9348HM', 'IE9348HM', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(28, '1722DF', 'IE1722DF', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(29, '3406OK', 'IE3406OK', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(30, '7739AH', 'IE7739AH', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(63, 'JF27', 'IEJF27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(64, 'G517', 'IEG517', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(65, '7D17', 'IE7D17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(66, 'DF17', 'IEDF17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(67, 'B627', 'IEB627', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(68, '5S07', 'IE5S07', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(69, '7627', 'IE7627', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(70, 'J727', 'IEJ727', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(71, '1717', 'IE1717', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(72, '3F17', 'IE3F17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(73, 'BV17', 'IEBV17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(74, '6N27', 'IE6N27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(75, 'D637', 'IED637', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(76, '9127', 'IE9127', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(77, '9727', 'IE9727', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(78, 'HR17', 'IEHR17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(79, '1S17', 'IE1S17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(80, '2C17', 'IE2C17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(81, '3527', 'IE3527', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(82, 'C717', 'IEC717', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(83, 'BR17', 'IEBR17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(84, '8S07', 'IE8S07', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(85, '2D17', 'IE2D17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(86, 'CK27', 'IECK27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(87, '9N27', 'IE9N27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(88, '5037', 'IE5037', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(89, 'B209', 'IEB209', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(90, '7P09', 'IE7P09', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(91, '7P49', 'IE7P49', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(92, '7P50', 'IE7P50', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `impacted` varchar(255) NOT NULL,
  `deactivated` varchar(255) NOT NULL,
  `faulty` varchar(255) NOT NULL,
  `baseline` int(11) NOT NULL,
  `urgency_level` varchar(255) NOT NULL,
  `activebaseline` varchar(255) NOT NULL,
  `impact_level` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `hardware_type` varchar(255) NOT NULL,
  `serial_num` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status_level` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `purchase_order_number` varchar(255) NOT NULL,
  `asset_tag` varchar(255) NOT NULL,
  `cmdb_status` varchar(255) NOT NULL,
  `purchase_date` int(11) NOT NULL,
  `warranty_expires_date` int(11) NOT NULL,
  `last_logon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `serial_num_2` (`serial_num`),
  KEY `serial_num` (`serial_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `impacted`, `deactivated`, `faulty`, `baseline`, `urgency_level`, `activebaseline`, `impact_level`, `manufacturer`, `hardware_type`, `serial_num`, `username`, `status_level`, `owner`, `email_address`, `active`, `comp_name`, `purchase_order_number`, `asset_tag`, `cmdb_status`, `purchase_date`, `warranty_expires_date`, `last_logon`) VALUES
(1, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0048KJ', 'xdixon', 'Assigned', 'Xander Dixon', 'eoinmc@gmail.com', 'Yes', 'IE0048KJ', '2011', '15000', 'Active', 1288569600, 1385856000, '16/11/2013'),
(2, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2048HV', 'macevedo', 'Assigned', 'Melvin Acevedo', 'eoinmc@gmail.com', 'Yes', 'IE2048HV', '2011', '15001', 'Active', 1288569600, 1385856000, '01/12/2013'),
(3, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2992LK', 'rcarson', 'Assigned', 'Rafael Carson', 'eoinmc@gmail.com', 'Yes', 'IE2992LK', '2011', '15002', 'Active', 1288569600, 1385856000, '01/10/2013'),
(4, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8377JX', 'kwhitley', 'Assigned', 'Kareem Whitley', 'eoinmc@gmail.com', 'Yes', 'IE8377JX', '2011', '15003', 'Active', 1288569600, 1385856000, '03/10/2013'),
(5, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2011XB', 'nsanders', 'Assigned', 'Nash Sanders', 'eoinmc@gmail.com', 'Yes', 'IE2011XB', '2011', '15004', 'Active', 1288569600, 1385856000, '05/10/2013'),
(6, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7213GR', 'lkennedy', 'Assigned', 'Leo Kennedy', 'eoin.mccrann@kpmg.ie', 'Yes', 'IE7213GR', '2011', '15005', 'Active', 1288569600, 1385856000, '07/10/2013'),
(7, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2302AC', 'hpoole', 'Assigned', 'Harper Poole', 'eoinmc@gmail.com', 'Yes', 'IE2302AC', '2011', '15006', 'Active', 1288569600, 1385856000, '09/10/2013'),
(8, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8606KY', 'pcole', 'Assigned', 'Patrick Cole', 'eoinmc@gmail.com', 'Yes', 'IE8606KY', '2011', '15007', 'Active', 1288569600, 1385856000, '11/10/2013'),
(9, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2051EO', 'dalvarado', 'Assigned', 'Damian Alvarado', 'eoinmc@gmail.com', 'Yes', 'IE2051EO', '2011', '15008', 'Active', 1288569600, 1385856000, '13/10/2013'),
(10, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8754YP', 'bcarey', 'Assigned', 'Brendan Carey', 'eoinmc@gmail.com', 'Yes', 'IE8754YP', '2011', '15009', 'Active', 1288569600, 1385856000, '02/12/2013'),
(11, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '4536UB', 'rallen', 'Assigned', 'Rajah Allen', 'eoinmc@gmail.com', 'Yes', 'IE4536UB', '2011', '15010', 'Active', 1288569600, 1385856000, '02/12/2013'),
(12, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7354VP', 'lhenson', 'Assigned', 'Lawrence Henson', 'eoinmc@gmail.com', 'Yes', 'IE7354VP', '2011', '15011', 'Active', 1288569600, 1385856000, '02/12/2013'),
(13, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3761YV', 'ebeach', 'Assigned', 'Eric Beach', 'eoinmc@gmail.com', 'Yes', 'IE3761YV', '2011', '15012', 'Active', 1288569600, 1385856000, '02/12/2013'),
(14, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8596QD', 'aquigley', 'Assigned', 'Alex Quigley', 'quigley.alex@gmail.com', 'Yes', 'IE8596QD', '2011', '15013', 'Active', 1288569600, 1385856000, '02/12/2013'),
(15, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3585TJ', 'czimmerman', 'Assigned', 'Connor Zimmerman', 'eoinmc@gmail.com', 'Yes', 'IE3585TJ', '2011', '15014', 'Active', 1288569600, 1385856000, '02/12/2013'),
(16, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '6755SM', 'gayers', 'Assigned', 'Gregory Ayers', 'eoinmc@gmail.com', 'Yes', 'IE6755SM', '2011', '15015', 'Active', 1288569600, 1385856000, '02/12/2013'),
(17, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3001YJ', 'wacevedo', 'Assigned', 'Wyatt Acevedo', 'eoinmc@gmail.com', 'Yes', 'IE3001YJ', '2011', '15016', 'Active', 1288569600, 1385856000, '02/12/2013'),
(18, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '4685WT', 'bmcmahon', 'Assigned', 'Baxter Mcmahon', 'eoinmc@gmail.com', 'Yes', 'IE4685WT', '2011', '15017', 'Active', 1288569600, 1385856000, '01/04/2013'),
(19, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '4278IL', 'veaton', 'Assigned', 'Vernon Eaton', 'eoinmc@gmail.com', 'Yes', 'IE4278IL', '2011', '15018', 'Active', 1288569600, 1385856000, '02/05/2013'),
(20, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0360WX', 'acalhoun', 'Assigned', 'Austin Calhoun', 'eoinmc@gmail.com', 'Yes', 'IE0360WX', '2011', '15019', 'Active', 1288569600, 1385856000, '03/06/2013'),
(21, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7547GI', 'jrodriquez', 'Assigned', 'Joshua Rodriquez', 'eoinmc@gmail.com', 'Yes', 'IE7547GI', '2011', '15020', 'Active', 1288569600, 1385856000, '14/01/2013'),
(22, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0513KI', 'cmercado', 'Assigned', 'Calvin Mercado', 'eoinmc@gmail.com', 'Yes', 'IE0513KI', '2011', '15021', 'Active', 1288569600, 1385856000, '03/12/2013'),
(23, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '6235DL', 'gbuckley', 'Assigned', 'Graiden Buckley', 'eoinmc@gmail.com', 'Yes', 'IE6235DL', '2011', '15022', 'Active', 1288569600, 1385856000, '03/12/2013'),
(24, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0940HM', 'rstuart', 'Assigned', 'Ross Stuart', 'eoinmc@gmail.com', 'Yes', 'IE0940HM', '2011', '15023', 'Active', 1288569600, 1385856000, '03/12/2013'),
(25, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0515VW', 'krandolph', 'Assigned', 'Kennan Randolph', 'eoinmc@gmail.com', 'Yes', 'IE0515VW', '2011', '15024', 'Active', 1288569600, 1385856000, '03/12/2013'),
(26, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '9384QQ', 'mbradley', 'Assigned', 'Macaulay Bradley', 'eoinmc@gmail.com', 'Yes', 'IE9384QQ', '2011', '15025', 'Active', 1288569600, 1385856000, '03/12/2013'),
(27, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '9348HM', 'mrose', 'Assigned', 'Mark Rose', 'eoinmc@gmail.com', 'Yes', 'IE9348HM', '2011', '15026', 'Active', 1288569600, 1385856000, '03/12/2013'),
(28, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '1722DF', 'zreilly', 'Assigned', 'Zeph Reilly', 'eoinmc@gmail.com', 'Yes', 'IE1722DF', '2011', '15027', 'Active', 1288569600, 1385856000, '03/12/2013'),
(29, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3406OK', 'lcruz', 'Assigned', 'Luke Cruz', 'eoinmc@gmail.com', 'Yes', 'IE3406OK', '2011', '15028', 'Active', 1288569600, 1385856000, '03/12/2013'),
(30, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7739AH', 'kwolf', 'Assigned', 'Kenneth Wolf', 'eoinmc@gmail.com', 'Yes', 'IE7739AH', '2011', '15029', 'Active', 1288569600, 1385856000, '03/12/2013'),
(63, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'JF27', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEJF27', '2013', '18140', 'Active', 1376006400, 1470700800, ''),
(64, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'G517', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEG517', '2013', '18141', 'Active', 1376006400, 1470700800, ''),
(65, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7D17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE7D17', '2013', '18142', 'Active', 1376006400, 1470700800, ''),
(66, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'DF17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEDF17', '2013', '18143', 'Active', 1376006400, 1470700800, ''),
(67, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'B627', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEB627', '2013', '18144', 'Active', 1376006400, 1470700800, ''),
(68, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '5S07', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE5S07', '2013', '18145', 'Active', 1376006400, 1470700800, ''),
(69, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7627', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE7627', '2013', '18146', 'Active', 1376006400, 1470700800, ''),
(70, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'J727', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEJ727', '2013', '18147', 'Active', 1376006400, 1470700800, ''),
(71, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '1717', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE1717', '2013', '18148', 'Active', 1376006400, 1470700800, ''),
(72, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '3F17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE3F17', '2013', '18149', 'Active', 1376006400, 1470700800, ''),
(73, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'BV17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEBV17', '2013', '18150', 'Active', 1376006400, 1470700800, ''),
(74, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '6N27', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE6N27', '2013', '18151', 'Active', 1376006400, 1470700800, ''),
(75, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'D637', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IED637', '2013', '18152', 'Active', 1376006400, 1470700800, ''),
(76, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9127', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE9127', '2013', '18153', 'Active', 1376006400, 1470700800, ''),
(77, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9727', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE9727', '2013', '18154', 'Active', 1376006400, 1470700800, ''),
(78, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'HR17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEHR17', '2013', '18155', 'Active', 1376006400, 1470700800, ''),
(79, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '1S17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE1S17', '2013', '18156', 'Active', 1376006400, 1470700800, ''),
(80, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '2C17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE2C17', '2013', '18157', 'Active', 1376006400, 1470700800, ''),
(81, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '3527', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE3527', '2013', '18158', 'Active', 1376006400, 1470700800, ''),
(82, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'C717', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEC717', '2013', '18159', 'Active', 1376006400, 1470700800, ''),
(83, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'BR17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEBR17', '2013', '18160', 'Active', 1376006400, 1470700800, ''),
(84, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '8S07', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE8S07', '2013', '18161', 'Active', 1376006400, 1470700800, ''),
(85, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '2D17', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE2D17', '2013', '18162', 'Active', 1376006400, 1470700800, ''),
(86, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'CK27', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IECK27', '2013', '18163', 'Active', 1376006400, 1470700800, ''),
(87, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9N27', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE9N27', '2013', '18164', 'Active', 1376006400, 1470700800, ''),
(88, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '5037', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE5037', '2013', '18165', 'Active', 1376006400, 1470700800, ''),
(89, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'B209', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IEB209', '2013', '18166', 'Active', 1376006400, 1470700800, ''),
(90, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P09', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE7P09', '2013', '18167', 'Active', 1376006400, 1470700800, ''),
(91, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P49', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE7P49', '2013', '18168', 'Active', 1376006400, 1470700800, ''),
(92, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P50', 'Spares', 'Unassigned', 'Spares', '', 'Yes', 'IE7P50', '2013', '18168', 'Active', 1376006400, 1470700800, '');

-- --------------------------------------------------------

--
-- Table structure for table `opencall`
--

CREATE TABLE IF NOT EXISTS `opencall` (
  `callref` int(10) unsigned NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `cust_id` varchar(64) DEFAULT NULL,
  `cust_name` varchar(124) DEFAULT NULL,
  `cust_username` varchar(255) DEFAULT NULL,
  `logdate` varchar(20) DEFAULT NULL,
  `closedby` varchar(64) DEFAULT NULL,
  `closedate` varchar(20) DEFAULT NULL,
  `prob_text` varchar(255) NOT NULL,
  `last_text` varchar(255) NOT NULL,
  PRIMARY KEY (`callref`),
  UNIQUE KEY `callref` (`callref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opencall`
--

INSERT INTO `opencall` (`callref`, `status`, `cust_id`, `cust_name`, `cust_username`, `logdate`, `closedby`, `closedate`, `prob_text`, `last_text`) VALUES
(69235, 2, '5500041', 'Brendan Carey', 'bcarey', '03/04/2013 10:17', 'Dieter', '05/04/2013 15:37', 'at', ' nisi. Cum sociis natoque penatibus et magnis dis parturient montes'),
(76910, 2, '5500013', 'Rajah Allen', 'rallen', '09/04/2013 13:00', 'Mason', '11/04/2013 09:00', 'ut', ' pellentesque eget'),
(81603, 2, '5500027', 'Lawrence Henson', 'lhenson', '12/04/2013 14:39', 'Bruno', '14/04/2013 15:46', 'facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor', ' dictum eu'),
(146602, 2, '5500104', 'Alex Quigley', 'aquigley', '12/04/2013 10:14', 'Chase', '14/04/2013 09:00', 'nec', ' mollis vitae'),
(150089, 1, '5500048', 'Connor Zimmerman', 'czimmerman', '15/04/2013 10:58', 'Vincent', '17/04/2013 15:51', 'et magnis dis parturient montes', ' nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed'),
(163939, 1, '5500031', 'Baxter Mcmahon', 'bmcmahon', '21/04/2013 15:20', 'Rafael', '23/04/2013 14:09', 'quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', 'dolor dapibus gravida. Aliquam tincidunt'),
(183537, 1, '5500033', 'Austin Calhoun', 'acalhoun', '27/04/2013 11:06', 'Wesley', '29/04/2013 10:37', 'Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna', ' malesuada vel'),
(189903, 1, '5500045', 'Joshua Rodriquez', 'jrodriquez', '27/04/2013 15:44', 'Cain', '29/04/2013 09:31', 'urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu.', 'Aliquam tincidunt'),
(192530, 1, '5500100', 'Graiden Buckley', 'gbuckley', '02/05/2013 15:47', 'Jamal', '04/05/2013 08:22', 'aliquet', ' sem ut cursus luctus'),
(195648, 1, '5500030', 'Ross Stuart', 'rstuart', '03/05/2013 13:07', 'Wallace', '05/05/2013 13:42', 'dapibus id', ' blandit at'),
(238187, 1, '5500032', 'Mark Rose', 'mrose', '06/05/2013 09:24', 'Theodore', '08/05/2013 10:04', 'at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat', 'sociis natoque penatibus et magnis dis parturient montes'),
(255250, 1, '5500077', 'Zeph Reilly', 'zreilly', '07/05/2013 11:16', 'Logan', '09/05/2013 12:40', 'In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci', 'ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula.'),
(260056, 1, '5500015', 'Luke Cruz', 'lcruz', '08/05/2013 09:57', 'Elijah', '10/05/2013 11:57', 'ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede', ' nonummy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
