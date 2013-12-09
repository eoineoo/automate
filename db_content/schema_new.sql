-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2013 at 07:57 PM
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
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` varchar(255) NOT NULL,
  `purchase_order_number` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `csv_details`
--

CREATE TABLE IF NOT EXISTS `csv_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orig_name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(255) NOT NULL,
  `num_entries` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `csv_details`
--

INSERT INTO `csv_details` (`id`, `orig_name`, `new_name`, `timestamp`, `user`, `num_entries`, `description`, `url`) VALUES
(1, '_assets_new.csv', 'cmdb_5293b7811043c_assets_new.csv', '2013-11-25 20:48:02', 'emccrann', 30, 'asset test final\r\n', '/automate/csv/cmdb_5293b7811043c_assets_new.csv'),
(2, '_mdt_import.csv', 'mdt_5293b79cbf7cc_mdt_import.csv', '2013-11-25 20:48:29', 'emccrann', 31, 'mdt test final', '/automate/csv/mdt_5293b79cbf7cc_mdt_import.csv'),
(3, '_assets_new.csv', 'cmdb_5297b3cfd18d6_assets_new.csv', '2013-11-28 21:21:20', 'emccrann', 30, '123', '/automate/csv/cmdb_5297b3cfd18d6_assets_new.csv'),
(4, '_mdt_import.csv', 'cmdb_5297b56b9737b_mdt_import.csv', '2013-11-28 21:28:12', 'emccrann', 31, '123', '/automate/csv/cmdb_5297b56b9737b_mdt_import.csv'),
(5, '_mdt_import.csv', 'mdt_5297b588bf4fc_mdt_import.csv', '2013-11-28 21:28:41', 'emccrann', 31, 'haaa', '/automate/csv/mdt_5297b588bf4fc_mdt_import.csv'),
(6, '_mdt_import.csv', 'mdt_5297b604bd0c0_mdt_import.csv', '2013-11-28 21:30:45', 'emccrann', 31, 'naming test', '/automate/csv/mdt_5297b604bd0c0_mdt_import.csv'),
(7, '_mdt_import.csv', 'mdt_5297b6905af70_mdt_import.csv', '2013-11-28 21:33:05', 'emccrann', 31, '1231321', '/automate/csv/mdt_5297b6905af70_mdt_import.csv'),
(8, '_mdt_import.csv', 'mdt_5297b69859eb9_mdt_import.csv', '2013-11-28 21:33:13', 'emccrann', 31, '', '/automate/csv/mdt_5297b69859eb9_mdt_import.csv'),
(9, '_mdt_import.csv', 'mdt_5297b6a0eab65_mdt_import.csv', '2013-11-28 21:33:21', 'emccrann', 31, '', '/automate/csv/mdt_5297b6a0eab65_mdt_import.csv'),
(10, '_assets_new.csv', 'cmdb_5297b75730904_assets_new.csv', '2013-11-28 21:36:24', 'emccrann', 30, 'asdf', '/automate/csv/cmdb_5297b75730904_assets_new.csv'),
(11, '_assets_new.csv', 'cmdb_5297b7eaa7263_assets_new.csv', '2013-11-28 21:38:51', 'emccrann', 30, 'lol', '/automate/csv/cmdb_5297b7eaa7263_assets_new.csv'),
(12, '_assets_new.csv', 'cmdb_5297b8021bb88_assets_new.csv', '2013-11-28 21:39:15', 'emccrann', 30, '', '/automate/csv/cmdb_5297b8021bb88_assets_new.csv'),
(13, '_assets_new.csv', 'cmdb_5297b80f06991_assets_new.csv', '2013-11-28 21:39:28', 'emccrann', 30, '', '/automate/csv/cmdb_5297b80f06991_assets_new.csv'),
(14, '_mdt_import.csv', 'mdt_5297b82b1de10_mdt_import.csv', '2013-11-28 21:39:56', 'emccrann', 31, '', '/automate/csv/mdt_5297b82b1de10_mdt_import.csv'),
(15, '_assets_hp.csv', 'cmdb_529ceb0c64297_assets_hp.csv', '2013-12-02 20:18:21', 'emccrann', 30, 'Older assets', '/automate/csv/cmdb_529ceb0c64297_assets_hp.csv'),
(16, '_assets_lenovo.csv', 'cmdb_529cee44e73ac_assets_lenovo.csv', '2013-12-02 20:32:05', 'emccrann', 30, 'Lenovo import - 2013', '/automate/csv/cmdb_529cee44e73ac_assets_lenovo.csv'),
(17, '_mdt_import.csv', 'mdt_52a07bfb1c2ec_mdt_import.csv', '2013-12-05 13:13:32', 'emccrann', 31, '', '/automate/csv/mdt_52a07bfb1c2ec_mdt_import.csv'),
(18, '_mdt_import.csv', 'mdt_52a07c27141e8_mdt_import.csv', '2013-12-05 13:14:16', 'emccrann', 31, '', '/automate/csv/mdt_52a07c27141e8_mdt_import.csv'),
(19, '_mdt_import.csv', 'mdt_52a081d54ed0d_mdt_import.csv', '2013-12-05 13:38:30', 'emccrann', 31, '', '/automate/csv/mdt_52a081d54ed0d_mdt_import.csv'),
(20, '_assets_dell.csv', 'cmdb_52a3159215822_assets_dell.csv', '2013-12-07 12:33:23', 'emccrann', 30, '', '/automate/csv/cmdb_52a3159215822_assets_dell.csv'),
(26, 'Original Name', 'New Name', '2013-12-07 17:17:19', 'User', 100, 'Description', 'url'),
(27, 'Original Name', 'New Name', '2013-12-07 17:20:30', 'User', 100, 'Description', 'url'),
(28, 'Original Name', 'New Name', '2013-12-09 09:36:46', 'User', 100, 'Description', 'url');
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
(1, 'JF27', 'IEJF27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(2, 'G517', 'IEG517', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(3, '7D17', 'IE7D17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(4, 'DF17', 'IEDF17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(5, 'B627', 'IEB627', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(6, '5S07', 'IE5S07', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(7, '7627', 'IE7627', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(8, 'J727', 'IEJ727', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(9, '1717', 'IE1717', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(10, '3F17', 'IE3F17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(11, 'BV17', 'IEBV17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(12, '6N27', 'IE6N27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(13, 'D637', 'IED637', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(14, '9127', 'IE9127', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(15, '9727', 'IE9727', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(16, 'HR17', 'IEHR17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(17, '1S17', 'IE1S17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(18, '2C17', 'IE2C17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(19, '3527', 'IE3527', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(20, 'C717', 'IEC717', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(21, 'BR17', 'IEBR17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(22, '8S07', 'IE8S07', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(23, '2D17', 'IE2D17', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(24, 'CK27', 'IECK27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(25, '9N27', 'IE9N27', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(26, '5037', 'IE5037', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(27, 'B209', 'IEB209', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(28, '7P09', 'IE7P09', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(29, '7P49', 'IE7P49', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(30, '7P50', 'IE7P50', 'Latitude E6430', 'Padraig McNamara', 'Max Power', 'Yes'),
(31, '0048KJ', 'IE0048KJ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(32, '2048HV', 'IE2048HV', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(33, '2992LK', 'IE2992LK', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(34, '8377JX', 'IE8377JX', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(35, '2011XB', 'IE2011XB', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(36, '7213GR', 'IE7213GR', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(37, '2302AC', 'IE2302AC', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(38, '8606KY', 'IE8606KY', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(39, '2051EO', 'IE2051EO', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(40, '8754YP', 'IE8754YP', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(41, '4536UB', 'IE4536UB', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(42, '7354VP', 'IE7354VP', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(43, '3761YV', 'IE3761YV', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(44, '8596QD', 'IE8596QD', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(45, '3585TJ', 'IE3585TJ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(46, '6755SM', 'IE6755SM', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(47, '3001YJ', 'IE3001YJ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(48, '4685WT', 'IE4685WT', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(49, '4278IL', 'IE4278IL', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(50, '0360WX', 'IE0360WX', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(51, '7547GI', 'IE7547GI', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(52, '0513KI', 'IE0513KI', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(53, '6235DL', 'IE6235DL', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(54, '0940HM', 'IE0940HM', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(55, '0515VW', 'IE0515VW', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(56, '9384QQ', 'IE9384QQ', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(57, '9348HM', 'IE9348HM', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(58, '1722DF', 'IE1722DF', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(59, '3406OK', 'IE3406OK', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(60, '7739AH', 'IE7739AH', 'ProBook 6550b', 'Padraig McNamara', 'Max Power', 'Yes'),
(64, 'TMQI', 'IETMQI', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(65, 'SEFK', 'IESEFK', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(66, 'EKPB', 'IEEKPB', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(67, 'ZUMB', 'IEZUMB', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(68, 'NFSZ', 'IENFSZ', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(69, 'HTTZ', 'IEHTTZ', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(70, 'ODME', 'IEODME', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(71, 'BMGI', 'IEBMGI', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(72, 'GWVH', 'IEGWVH', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(73, 'MRJL', 'IEMRJL', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(74, 'HHOD', 'IEHHOD', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(75, 'TJAF', 'IETJAF', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(76, 'HQIU', 'IEHQIU', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(77, 'NSTH', 'IENSTH', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(78, 'JEYL', 'IEJEYL', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(79, 'FVDR', 'IEFVDR', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(80, 'XAPY', 'IEXAPY', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(81, 'CKMV', 'IECKMV', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(82, 'EUFN', 'IEEUFN', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(83, 'XIRY', 'IEXIRY', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(84, 'CDLT', 'IECDLT', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(85, 'UAUX', 'IEUAUX', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(86, 'BBEO', 'IEBBEO', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(87, 'POLT', 'IEPOLT', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(88, 'AAQN', 'IEAAQN', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(89, 'WQZD', 'IEWQZD', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(90, 'TRHN', 'IETRHN', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(91, 'CIGG', 'IECIGG', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(92, 'QQOG', 'IEQQOG', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes'),
(93, 'ZTEF', 'IEZTEF', 'ThunkPud T440', 'Padraig McNamara', 'Max Power', 'Yes');

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
(1, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'JF27', 'mmorgan', 'Assigned', 'Mufutau Morgan', 'eoinmc@gmail.com', 'Yes', 'IEJF27', '2013', '18140', 'Active', 1376006400, 1470700800, '03/12/2013'),
(2, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'G517', 'rrosario', 'Assigned', 'Rajah Rosario', 'eoinmc@gmail.com', 'Yes', 'IEG517', '2013', '18141', 'Active', 1376006400, 1470700800, '03/12/2013'),
(3, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7D17', 'mlott', 'Assigned', 'Malcolm Lott', 'eoinmc@gmail.com', 'Yes', 'IE7D17', '2013', '18142', 'Active', 1376006400, 1470700800, '03/12/2013'),
(4, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'DF17', 'plogan', 'Assigned', 'Palmer Logan', 'eoinmc@gmail.com', 'Yes', 'IEDF17', '2013', '18143', 'Active', 1376006400, 1470700800, '03/12/2013'),
(5, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'B627', 'jturner', 'Assigned', 'Jamal Turner', 'eoinmc@gmail.com', 'Yes', 'IEB627', '2013', '18144', 'Active', 1376006400, 1470700800, '03/12/2013'),
(6, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '5S07', 'dsaunders', 'Assigned', 'Dustin Saunders', 'eoinmc@gmail.com', 'Yes', 'IE5S07', '2013', '18145', 'Active', 1376006400, 1470700800, '03/12/2013'),
(7, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7627', 'afarrell', 'Assigned', 'Austin Farrell', 'eoinmc@gmail.com', 'Yes', 'IE7627', '2013', '18146', 'Active', 1376006400, 1470700800, '03/12/2013'),
(8, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'J727', 'jkennedy', 'Assigned', 'Jerry Kennedy', 'eoinmc@gmail.com', 'Yes', 'IEJ727', '2013', '18147', 'Active', 1376006400, 1470700800, '03/12/2013'),
(9, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '1717', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE1717', '2013', '18148', 'Active', 1376006400, 1470700800, '03/12/2013'),
(10, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '3F17', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE3F17', '2013', '18149', 'Active', 1376006400, 1470700800, '03/12/2013'),
(11, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'BV17', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEBV17', '2013', '18150', 'Active', 1376006400, 1470700800, '03/12/2013'),
(12, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '6N27', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE6N27', '2013', '18151', 'Active', 1376006400, 1470700800, '03/12/2013'),
(13, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'D637', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IED637', '2013', '18152', 'Active', 1376006400, 1470700800, '03/12/2013'),
(14, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9127', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE9127', '2013', '18153', 'Active', 1376006400, 1470700800, '03/12/2013'),
(15, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9727', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE9727', '2013', '18154', 'Active', 1376006400, 1470700800, '03/12/2013'),
(16, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'HR17', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEHR17', '2013', '18155', 'Active', 1376006400, 1470700800, '03/12/2013'),
(17, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '1S17', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE1S17', '2013', '18156', 'Active', 1376006400, 1470700800, '03/12/2013'),
(18, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '2C17', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE2C17', '2013', '18157', 'Active', 1376006400, 1470700800, '03/12/2013'),
(19, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '3527', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE3527', '2013', '18158', 'Active', 1376006400, 1470700800, '03/12/2013'),
(20, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'C717', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEC717', '2013', '18159', 'Active', 1376006400, 1470700800, '03/12/2013'),
(21, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'BR17', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEBR17', '2013', '18160', 'Active', 1376006400, 1470700800, '11/11/2013'),
(22, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '8S07', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE8S07', '2013', '18161', 'Active', 1376006400, 1470700800, '11/11/2013'),
(23, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '2D17', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE2D17', '2013', '18162', 'Active', 1376006400, 1470700800, '11/11/2013'),
(24, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'CK27', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IECK27', '2013', '18163', 'Active', 1376006400, 1470700800, '11/11/2013'),
(25, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9N27', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE9N27', '2013', '18164', 'Active', 1376006400, 1470700800, '11/11/2013'),
(26, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '5037', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE5037', '2013', '18165', 'Active', 1376006400, 1470700800, '11/11/2013'),
(27, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'B209', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEB209', '2013', '18166', 'Active', 1376006400, 1470700800, '16/11/2013'),
(28, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P09', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE7P09', '2013', '18167', 'Active', 1376006400, 1470700800, '13/11/2013'),
(29, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P49', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE7P49', '2013', '18168', 'Active', 1376006400, 1470700800, '16/11/2013'),
(30, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P50', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IE7P50', '2013', '18168', 'Active', 1376006400, 1470700800, '15/11/2013'),
(31, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0048KJ', 'xdixon', 'Assigned', 'Xander Dixon', 'eoinmc@gmail.com', 'Yes', 'IE0048KJ', '2011', '15000', 'Active', 1288569600, 1385856000, '16/11/2013'),
(32, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2048HV', 'macevedo', 'Assigned', 'Melvin Acevedo', 'eoinmc@gmail.com', 'Yes', 'IE2048HV', '2011', '15001', 'Active', 1288569600, 1385856000, '01/12/2013'),
(33, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2992LK', 'rcarson', 'Assigned', 'Rafael Carson', 'eoinmc@gmail.com', 'Yes', 'IE2992LK', '2011', '15002', 'Active', 1288569600, 1385856000, '01/10/2013'),
(34, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8377JX', 'kwhitley', 'Assigned', 'Kareem Whitley', 'eoinmc@gmail.com', 'Yes', 'IE8377JX', '2011', '15003', 'Active', 1288569600, 1385856000, '03/10/2013'),
(35, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2011XB', 'nsanders', 'Assigned', 'Nash Sanders', 'eoinmc@gmail.com', 'Yes', 'IE2011XB', '2011', '15004', 'Active', 1288569600, 1385856000, '05/10/2013'),
(36, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7213GR', 'lkennedy', 'Assigned', 'Leo Kennedy', 'eoinmc@gmail.com', 'Yes', 'IE7213GR', '2011', '15005', 'Active', 1288569600, 1385856000, '07/10/2013'),
(37, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2302AC', 'hpoole', 'Assigned', 'Harper Poole', 'eoinmc@gmail.com', 'Yes', 'IE2302AC', '2011', '15006', 'Active', 1288569600, 1385856000, '09/10/2013'),
(38, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8606KY', 'pcole', 'Assigned', 'Patrick Cole', 'eoinmc@gmail.com', 'Yes', 'IE8606KY', '2011', '15007', 'Active', 1288569600, 1385856000, '11/10/2013'),
(39, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '2051EO', 'dalvarado', 'Assigned', 'Damian Alvarado', 'eoinmc@gmail.com', 'Yes', 'IE2051EO', '2011', '15008', 'Active', 1288569600, 1385856000, '13/10/2013'),
(40, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8754YP', 'bcarey', 'Assigned', 'Brendan Carey', 'eoinmc@gmail.com', 'Yes', 'IE8754YP', '2011', '15009', 'Active', 1288569600, 1385856000, '02/12/2013'),
(41, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '4536UB', 'rallen', 'Assigned', 'Rajah Allen', 'eoinmc@gmail.com', 'Yes', 'IE4536UB', '2011', '15010', 'Active', 1288569600, 1385856000, '02/12/2013'),
(42, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7354VP', 'lhenson', 'Assigned', 'Lawrence Henson', 'eoinmc@gmail.com', 'Yes', 'IE7354VP', '2011', '15011', 'Active', 1288569600, 1385856000, '02/12/2013'),
(43, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3761YV', 'ebeach', 'Assigned', 'Eric Beach', 'eoinmc@gmail.com', 'Yes', 'IE3761YV', '2011', '15012', 'Active', 1288569600, 1385856000, '02/12/2013'),
(44, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '8596QD', 'jspence', 'Assigned', 'Jeremy Spence', 'eoinmc@gmail.com', 'Yes', 'IE8596QD', '2011', '15013', 'Active', 1288569600, 1385856000, '02/12/2013'),
(45, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3585TJ', 'czimmerman', 'Assigned', 'Connor Zimmerman', 'eoinmc@gmail.com', 'Yes', 'IE3585TJ', '2011', '15014', 'Active', 1288569600, 1385856000, '02/12/2013'),
(46, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '6755SM', 'gayers', 'Assigned', 'Gregory Ayers', 'eoinmc@gmail.com', 'Yes', 'IE6755SM', '2011', '15015', 'Active', 1288569600, 1385856000, '02/12/2013'),
(47, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3001YJ', 'wacevedo', 'Assigned', 'Wyatt Acevedo', 'eoinmc@gmail.com', 'Yes', 'IE3001YJ', '2011', '15016', 'Active', 1288569600, 1385856000, '02/12/2013'),
(48, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '4685WT', 'bmcmahon', 'Assigned', 'Baxter Mcmahon', 'eoinmc@gmail.com', 'Yes', 'IE4685WT', '2011', '15017', 'Active', 1288569600, 1385856000, '01/04/2013'),
(49, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '4278IL', 'veaton', 'Assigned', 'Vernon Eaton', 'eoinmc@gmail.com', 'Yes', 'IE4278IL', '2011', '15018', 'Active', 1288569600, 1385856000, '02/05/2013'),
(50, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0360WX', 'acalhoun', 'Assigned', 'Austin Calhoun', 'eoinmc@gmail.com', 'Yes', 'IE0360WX', '2011', '15019', 'Active', 1288569600, 1385856000, '03/06/2013'),
(51, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7547GI', 'jrodriquez', 'Assigned', 'Joshua Rodriquez', 'eoinmc@gmail.com', 'Yes', 'IE7547GI', '2011', '15020', 'Active', 1288569600, 1385856000, '14/01/2013'),
(52, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0513KI', 'cmercado', 'Assigned', 'Calvin Mercado', 'eoinmc@gmail.com', 'Yes', 'IE0513KI', '2011', '15021', 'Active', 1288569600, 1385856000, '03/12/2013'),
(53, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '6235DL', 'gbuckley', 'Assigned', 'Graiden Buckley', 'eoinmc@gmail.com', 'Yes', 'IE6235DL', '2011', '15022', 'Active', 1288569600, 1385856000, '03/12/2013'),
(54, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0940HM', 'rstuart', 'Assigned', 'Ross Stuart', 'eoinmc@gmail.com', 'Yes', 'IE0940HM', '2011', '15023', 'Active', 1288569600, 1385856000, '03/12/2013'),
(55, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '0515VW', 'krandolph', 'Assigned', 'Kennan Randolph', 'eoinmc@gmail.com', 'Yes', 'IE0515VW', '2011', '15024', 'Active', 1288569600, 1385856000, '03/12/2013'),
(56, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '9384QQ', 'mbradley', 'Assigned', 'Macaulay Bradley', 'eoinmc@gmail.com', 'Yes', 'IE9384QQ', '2011', '15025', 'Active', 1288569600, 1385856000, '03/12/2013'),
(57, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '9348HM', 'mrose', 'Assigned', 'Mark Rose', 'eoinmc@gmail.com', 'Yes', 'IE9348HM', '2011', '15026', 'Active', 1288569600, 1385856000, '03/12/2013'),
(58, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '1722DF', 'zreilly', 'Assigned', 'Zeph Reilly', 'eoinmc@gmail.com', 'Yes', 'IE1722DF', '2011', '15027', 'Active', 1288569600, 1385856000, '03/12/2013'),
(59, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '3406OK', 'lcruz', 'Assigned', 'Luke Cruz', 'eoinmc@gmail.com', 'Yes', 'IE3406OK', '2011', '15028', 'Active', 1288569600, 1385856000, '03/12/2013'),
(60, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Hewlett-Packard', 'Laptop', '7739AH', 'kwolf', 'Assigned', 'Kenneth Wolf', 'eoinmc@gmail.com', 'Yes', 'IE7739AH', '2011', '15029', 'Active', 1288569600, 1385856000, '03/12/2013'),
(64, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'TMQI', 'ekey', 'Assigned', 'Erasmus Key', 'eoinmc@gmail.com', 'Yes', 'IETMQI', '2013', '17018', 'Active', 1376006400, 1470700800, '03/12/2013'),
(65, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'SEFK', 'jjarvis', 'Assigned', 'Jameson Jarvis', 'eoinmc@gmail.com', 'Yes', 'IESEFK', '2013', '17019', 'Active', 1376006400, 1470700800, '03/12/2013'),
(66, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'EKPB', 'jstafford', 'Assigned', 'James Stafford', 'eoinmc@gmail.com', 'Yes', 'IEEKPB', '2013', '17020', 'Active', 1376006400, 1470700800, '03/12/2013'),
(67, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'ZUMB', 'pknowles', 'Assigned', 'Price Knowles', 'eoinmc@gmail.com', 'Yes', 'IEZUMB', '2013', '17021', 'Active', 1376006400, 1470700800, '03/12/2013'),
(68, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'NFSZ', 'chayes', 'Assigned', 'Cole Hayes', 'eoinmc@gmail.com', 'Yes', 'IENFSZ', '2013', '17022', 'Active', 1376006400, 1470700800, '03/12/2013'),
(69, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'HTTZ', 'iduke', 'Assigned', 'Ian Duke', 'eoinmc@gmail.com', 'Yes', 'IEHTTZ', '2013', '17023', 'Active', 1376006400, 1470700800, '03/12/2013'),
(70, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'ODME', 'ckirkland', 'Assigned', 'Colin Kirkland', 'eoinmc@gmail.com', 'Yes', 'IEODME', '2013', '17024', 'Active', 1376006400, 1470700800, '03/12/2013'),
(71, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'BMGI', 'rcaldwell', 'Assigned', 'Ralph Caldwell', 'eoinmc@gmail.com', 'Yes', 'IEBMGI', '2013', '17025', 'Active', 1376006400, 1470700800, '03/12/2013'),
(72, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'GWVH', 'cparker', 'Assigned', 'Caldwell Parker', 'eoinmc@gmail.com', 'Yes', 'IEGWVH', '2013', '17026', 'Active', 1376006400, 1470700800, '03/12/2013'),
(73, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'MRJL', 'rweaver', 'Assigned', 'Ryder Weaver', 'eoinmc@gmail.com', 'Yes', 'IEMRJL', '2013', '17027', 'Active', 1376006400, 1470700800, '03/12/2013'),
(74, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'HHOD', 'enorman', 'Assigned', 'Ethan Norman', 'eoinmc@gmail.com', 'Yes', 'IEHHOD', '2013', '17028', 'Active', 1376006400, 1470700800, '03/12/2013'),
(75, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'TJAF', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IETJAF', '2013', '17029', 'Active', 1376006400, 1470700800, '03/12/2013'),
(76, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'HQIU', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEHQIU', '2013', '17030', 'Active', 1376006400, 1470700800, '03/12/2013'),
(77, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'NSTH', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IENSTH', '2013', '17031', 'Active', 1376006400, 1470700800, '03/12/2013'),
(78, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'JEYL', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEJEYL', '2013', '17032', 'Active', 1376006400, 1470700800, '03/12/2013'),
(79, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'FVDR', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEFVDR', '2013', '17033', 'Active', 1376006400, 1470700800, '03/12/2013'),
(80, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'XAPY', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEXAPY', '2013', '17034', 'Active', 1376006400, 1470700800, '03/12/2013'),
(81, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'CKMV', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IECKMV', '2013', '17035', 'Active', 1376006400, 1470700800, '03/12/2013'),
(82, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'EUFN', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEEUFN', '2013', '17036', 'Active', 1376006400, 1470700800, '03/12/2013'),
(83, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'XIRY', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEXIRY', '2013', '17037', 'Active', 1376006400, 1470700800, '03/12/2013'),
(84, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'CDLT', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IECDLT', '2013', '17038', 'Active', 1376006400, 1470700800, '03/12/2013'),
(85, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'UAUX', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEUAUX', '2013', '17039', 'Active', 1376006400, 1470700800, '03/12/2013'),
(86, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'BBEO', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEBBEO', '2013', '17040', 'Active', 1376006400, 1470700800, '03/12/2013'),
(87, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'POLT', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEPOLT', '2013', '17041', 'Active', 1376006400, 1470700800, '03/12/2013'),
(88, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'AAQN', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEAAQN', '2013', '17042', 'Active', 1376006400, 1470700800, '03/12/2013'),
(89, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'WQZD', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEWQZD', '2013', '17043', 'Active', 1376006400, 1470700800, '03/12/2013'),
(90, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'TRHN', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IETRHN', '2013', '17044', 'Active', 1376006400, 1470700800, '03/12/2013'),
(91, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'CIGG', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IECIGG', '2013', '17045', 'Active', 1376006400, 1470700800, '03/12/2013'),
(92, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Lenovo', 'Laptop', 'QQOG', 'Spares', 'Unassigned', 'Spares', 'eoinmc@gmail.com', 'Yes', 'IEQQOG', '2013', '17046', 'Active', 1376006400, 1470700800, '03/12/2013');

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
(146602, 2, '5500104', 'Jeremy Spence', 'jspence', '12/04/2013 10:14', 'Chase', '14/04/2013 09:00', 'nec', ' mollis vitae'),
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
