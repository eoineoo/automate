-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2013 at 08:23 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `opencall`
--

CREATE TABLE IF NOT EXISTS `opencall` (
  `callref` int(10) unsigned NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `cust_id` varchar(64) DEFAULT NULL,
  `cust_name` varchar(124) DEFAULT NULL,
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

INSERT INTO `opencall` (`callref`, `status`, `cust_id`, `cust_name`, `logdate`, `closedby`, `closedate`, `prob_text`, `last_text`) VALUES
(76, 2, '5500039', 'Xander Dixon', '20/03/2013 11:20', 'Jonah', '22/03/2013 13:22', 'Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est.', 'In lorem. Donec elementum'),
(5231, 2, '5500074', 'Melvin Acevedo', '22/03/2013 12:36', 'Thor', '24/03/2013 15:51', 'ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque.', 'at lacus. Quisque purus sapien'),
(9001, 2, '5500060', 'Rafael Carson', '24/03/2013 08:29', 'Denton', '26/03/2013 10:09', 'penatibus et magnis dis parturient montes', ' nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu.'),
(15061, 2, '5500061', 'Kareem Whitley', '24/03/2013 11:09', 'Emerson', '26/03/2013 11:13', 'diam. Sed diam lorem', ' auctor quis'),
(17953, 2, '5500092', 'Nash Sanders', '28/03/2013 12:54', 'Robert', '30/03/2013 13:22', 'Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra', ' per inceptos hymenaeos.'),
(25098, 2, '5500043', 'Leo Kennedy', '30/03/2013 08:58', 'Justin', '31/03/2013 10:37', 'Donec porttitor tellus non magna. Nam ligula elit', ' pretium et'),
(31909, 2, '5500038', 'Harper Poole', '01/04/2013 15:57', 'Phillip', '03/04/2013 09:36', 'nibh enim', ' gravida sit amet'),
(36878, 2, '5500050', 'Patrick Cole', '03/04/2013 13:48', 'Alan', '05/04/2013 15:30', 'arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien', ' gravida non'),
(38042, 2, '5500012', 'Damian Alvarado', '03/04/2013 12:27', 'Mannix', '05/04/2013 14:09', 'lorem', ' vehicula et'),
(69235, 2, '5500041', 'Brendan Carey', '03/04/2013 10:17', 'Dieter', '05/04/2013 15:37', 'at', ' nisi. Cum sociis natoque penatibus et magnis dis parturient montes'),
(76910, 2, '5500013', 'Rajah Allen', '09/04/2013 13:00', 'Mason', '11/04/2013 09:00', 'ut', ' pellentesque eget'),
(81603, 2, '5500027', 'Lawrence Henson', '12/04/2013 14:39', 'Bruno', '14/04/2013 15:46', 'facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor', ' dictum eu'),
(136938, 2, '5500057', 'Eric Beach', '12/04/2013 14:38', 'Kasimir', '14/04/2013 12:44', 'montes', ' nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris'),
(146602, 2, '5500104', 'Jeremy Spence', '12/04/2013 10:14', 'Chase', '14/04/2013 09:00', 'nec', ' mollis vitae'),
(150089, 1, '5500048', 'Connor Zimmerman', '15/04/2013 10:58', 'Vincent', '17/04/2013 15:51', 'et magnis dis parturient montes', ' nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed'),
(151759, 1, '5500052', 'Gregory Ayers', '15/04/2013 15:08', 'Colorado', '17/04/2013 09:41', 'eleifend non', ' dapibus rutrum'),
(162346, 1, '5500091', 'Wyatt Acevedo', '18/04/2013 08:13', 'Kennedy', '20/04/2013 11:35', 'faucibus id', ' libero. Donec consectetuer mauris id sapien. Cras dolor dolor'),
(163939, 1, '5500031', 'Baxter Mcmahon', '21/04/2013 15:20', 'Rafael', '23/04/2013 14:09', 'quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', 'dolor dapibus gravida. Aliquam tincidunt'),
(164395, 1, '5500055', 'Vernon Eaton', '24/04/2013 12:00', 'Samuel', '26/04/2013 12:10', 'erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus', 'tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec'),
(183537, 1, '5500033', 'Austin Calhoun', '27/04/2013 11:06', 'Wesley', '29/04/2013 10:37', 'Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna', ' malesuada vel'),
(189903, 1, '5500045', 'Joshua Rodriquez', '27/04/2013 15:44', 'Cain', '29/04/2013 09:31', 'urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu.', 'Aliquam tincidunt'),
(191726, 1, '5500110', 'Calvin Mercado', '27/04/2013 13:09', 'Kasimir', '29/05/2013 13:33', 'in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing', 'eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in'),
(192530, 1, '5500100', 'Graiden Buckley', '02/05/2013 15:47', 'Jamal', '04/05/2013 08:22', 'aliquet', ' sem ut cursus luctus'),
(195648, 1, '5500030', 'Ross Stuart', '03/05/2013 13:07', 'Wallace', '05/05/2013 13:42', 'dapibus id', ' blandit at'),
(213447, 1, '5500014', 'Kennan Randolph', '03/05/2013 10:10', 'Howard', '05/05/2013 09:31', 'ipsum dolor sit amet', ' consectetuer adipiscing elit. Etiam laoreet'),
(223068, 1, '5500028', 'Macaulay Bradley', '05/05/2013 08:54', 'Zane', '07/05/2013 14:54', 'ipsum ac mi eleifend egestas. Sed pharetra', ' felis eget varius ultrices'),
(238187, 1, '5500032', 'Mark Rose', '06/05/2013 09:24', 'Theodore', '08/05/2013 10:04', 'at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat', 'sociis natoque penatibus et magnis dis parturient montes'),
(255250, 1, '5500077', 'Zeph Reilly', '07/05/2013 11:16', 'Logan', '09/05/2013 12:40', 'In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci', 'ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula.'),
(260056, 1, '5500015', 'Luke Cruz', '08/05/2013 09:57', 'Elijah', '10/05/2013 11:57', 'ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede', ' nonummy'),
(270686, 0, '5500096', 'Kenneth Wolf', '09/05/2013 13:53', 'Philip', '11/05/2013 11:51', 'consectetuer rhoncus. Nullam velit dui', ' semper et'),
(283086, 0, '5500087', 'Erasmus Key', '09/05/2013 15:12', 'Uriel', '11/05/2013 13:03', 'a', ' facilisis non'),
(284256, 0, '5500022', 'Jameson Jarvis', '09/05/2013 12:25', 'Seth', '11/05/2013 10:43', 'diam lorem', ' auctor quis'),
(290295, 0, '5500065', 'James Stafford', '12/05/2013 10:59', 'Mark', '14/05/2013 13:50', 'nec', ' malesuada ut'),
(308683, 0, '5500025', 'Price Knowles', '13/05/2013 13:26', 'Clayton', '15/05/2013 09:28', 'eleifend egestas. Sed pharetra', ' felis eget varius ultrices'),
(320751, 0, '5500035', 'Cole Hayes', '14/05/2013 09:37', 'Chadwick', '16/05/2013 11:57', 'Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor', ' dictum eu'),
(322815, 0, '5500111', 'Ian Duke', '14/05/2013 10:17', 'Isaac', '16/05/2013 15:56', 'Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes', ' nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique'),
(355025, 0, '5500034', 'Colin Kirkland', '16/05/2013 09:44', 'Phelan', '18/05/2013 12:28', 'erat nonummy ultricies ornare', ' elit elit fermentum risus'),
(380858, 0, '5500078', 'Ralph Caldwell', '18/05/2013 09:43', 'Walter', '20/05/2013 11:58', 'Etiam ligula tortor', ' dictum eu'),
(413618, 0, '5500098', 'Caldwell Parker', '20/05/2013 09:50', 'Jarrod', '22/05/2013 09:24', 'montes', ' nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa'),
(414125, 0, '5500095', 'Ryder Weaver', '22/05/2013 13:55', 'Hamish', '24/05/2013 13:06', 'quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque.', 'nunc sed pede. Cum sociis natoque penatibus et magnis dis'),
(424937, 0, '5500088', 'Ethan Norman', '24/05/2013 14:32', 'Cullen', '26/05/2013 09:21', 'Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate', ' risus a ultricies adipiscing'),
(425529, 0, '5500084', 'Mufutau Morgan', '26/05/2013 09:34', 'Chadwick', '28/05/2013 15:34', 'amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede', ' ultrices a'),
(446262, 0, '5500037', 'Rajah Rosario', '28/05/2013 08:15', 'Keane', '30/05/2013 15:53', 'diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra', ' per inceptos hymenaeos. Mauris ut quam vel'),
(462599, 0, '5500090', 'Malcolm Lott', '30/05/2013 09:54', 'Raymond', '31/06/2013 10:40:48', 'sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est', ' congue a'),
(475489, 0, '5500103', 'Palmer Logan', '01/06/2013 12:23', 'Garrett', '03/06/2013 08:11', 'Cras dolor dolor', ' tempus non'),
(481465, 0, '5500053', 'Jamal Turner', '03/06/2013 13:07', 'Jason', '05/06/2013 15:21', 'aliquet nec', ' imperdiet nec'),
(489093, 0, '5500049', 'Dustin Saunders', '05/06/2013 09:44', 'Alexander', '07/06/2013 11:47', 'ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede', ''),
(491324, 0, '5500094', 'Austin Farrell', '07/06/2013 08:09', 'Wyatt', '09/06/2013 10:27', 'augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra', ''),
(495021, 0, '5500016', 'Jerry Kennedy', '09/06/2013 09:44', 'Dorian', '11/06/2013 11:47', 'lacinia mattis. Integer eu lacus. Quisque imperdiet', ' erat nonummy ultricies ornare');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
