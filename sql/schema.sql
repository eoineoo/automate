-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2013 at 10:01 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(14, '_mdt_import.csv', 'mdt_5297b82b1de10_mdt_import.csv', '2013-11-28 21:39:56', 'emccrann', 31, '', '/automate/csv/mdt_5297b82b1de10_mdt_import.csv');
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
(1, 'JF27', 'IEJF27', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(2, 'G517', 'IEG517', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(3, '7D17', 'IE7D17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(4, 'DF17', 'IEDF17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(5, 'B627', 'IEB627', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(6, '5S07', 'IE5S07', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(7, '7627', 'IE7627', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(8, 'J727', 'IEJ727', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(9, '1717', 'IE1717', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(10, '3F17', 'IE3F17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(11, 'BV17', 'IEBV17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(12, '6N27', 'IE6N27', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(13, 'D637', 'IED637', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(14, '9127', 'IE9127', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(15, '9727', 'IE9727', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(16, 'HR17', 'IEHR17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(17, '1S17', 'IE1S17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(18, '2C17', 'IE2C17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(19, '3527', 'IE3527', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(20, 'C717', 'IEC717', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(21, 'BR17', 'IEBR17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(22, '8S07', 'IE8S07', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(23, '2D17', 'IE2D17', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(24, 'CK27', 'IECK27', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(25, '9N27', 'IE9N27', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(26, '5037', 'IE5037', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(27, 'B209', 'IEB209', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(28, '7P09', 'IE7P09', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(29, '7P49', 'IE7P49', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes'),
(30, '7P50', 'IE7P50', 'Latitude E6430', 'Peter McNeill', 'Eoin McCrann', 'Yes');

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
  `active` varchar(255) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `purchase_order_number` varchar(255) NOT NULL,
  `asset_tag` varchar(255) NOT NULL,
  `cmdb_status` varchar(255) NOT NULL,
  `purchase_date` int(11) NOT NULL,
  `warranty_expires_date` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `serial_num_2` (`serial_num`),
  KEY `serial_num` (`serial_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `impacted`, `deactivated`, `faulty`, `baseline`, `urgency_level`, `activebaseline`, `impact_level`, `manufacturer`, `hardware_type`, `serial_num`, `username`, `status_level`, `owner`, `active`, `comp_name`, `purchase_order_number`, `asset_tag`, `cmdb_status`, `purchase_date`, `warranty_expires_date`) VALUES
(1, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'JF27', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEJF27', '2013', '18140', 'Active', 1376006400, 1470700800),
(2, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'G517', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEG517', '2013', '18141', 'Active', 1376006400, 1470700800),
(3, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7D17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE7D17', '2013', '18142', 'Active', 1376006400, 1470700800),
(4, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'DF17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEDF17', '2013', '18143', 'Active', 1376006400, 1470700800),
(5, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'B627', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEB627', '2013', '18144', 'Active', 1376006400, 1470700800),
(6, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '5S07', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE5S07', '2013', '18145', 'Active', 1376006400, 1470700800),
(7, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7627', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE7627', '2013', '18146', 'Active', 1376006400, 1470700800),
(8, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'J727', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEJ727', '2013', '18147', 'Active', 1376006400, 1470700800),
(9, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '1717', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE1717', '2013', '18148', 'Active', 1376006400, 1470700800),
(10, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '3F17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE3F17', '2013', '18149', 'Active', 1376006400, 1470700800),
(11, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'BV17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEBV17', '2013', '18150', 'Active', 1376006400, 1470700800),
(12, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '6N27', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE6N27', '2013', '18151', 'Active', 1376006400, 1470700800),
(13, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'D637', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IED637', '2013', '18152', 'Active', 1376006400, 1470700800),
(14, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9127', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE9127', '2013', '18153', 'Active', 1376006400, 1470700800),
(15, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9727', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE9727', '2013', '18154', 'Active', 1376006400, 1470700800),
(16, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'HR17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEHR17', '2013', '18155', 'Active', 1376006400, 1470700800),
(17, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '1S17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE1S17', '2013', '18156', 'Active', 1376006400, 1470700800),
(18, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '2C17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE2C17', '2013', '18157', 'Active', 1376006400, 1470700800),
(19, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '3527', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE3527', '2013', '18158', 'Active', 1376006400, 1470700800),
(20, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'C717', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEC717', '2013', '18159', 'Active', 1376006400, 1470700800),
(21, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'BR17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEBR17', '2013', '18160', 'Active', 1376006400, 1470700800),
(22, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '8S07', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE8S07', '2013', '18161', 'Active', 1376006400, 1470700800),
(23, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '2D17', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE2D17', '2013', '18162', 'Active', 1376006400, 1470700800),
(24, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'CK27', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IECK27', '2013', '18163', 'Active', 1376006400, 1470700800),
(25, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '9N27', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE9N27', '2013', '18164', 'Active', 1376006400, 1470700800),
(26, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '5037', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE5037', '2013', '18165', 'Active', 1376006400, 1470700800),
(27, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', 'B209', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IEB209', '2013', '18166', 'Active', 1376006400, 1470700800),
(28, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P09', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE7P09', '2013', '18167', 'Active', 1376006400, 1470700800),
(29, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P49', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE7P49', '2013', '18168', 'Active', 1376006400, 1470700800),
(30, 'No', 'No', 'No', 1, 'Low', 'Yes', 'Low', 'Dell Products', 'Laptop', '7P50', 'Spares', 'Unassigned', 'Spares', 'Yes', 'IE7P50', '2013', '18168', 'Active', 1376006400, 1470700800);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
