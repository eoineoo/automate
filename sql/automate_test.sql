-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2013 at 06:16 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `automate_test`
--
CREATE DATABASE IF NOT EXISTS `automate_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `automate_test`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

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
-- Table structure for table `asset_details`
--

CREATE TABLE IF NOT EXISTS `asset_details` (
  `id` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `csv_details`
--

INSERT INTO `csv_details` (`id`, `orig_name`, `new_name`, `timestamp`, `user`, `num_entries`, `description`, `url`) VALUES
(1, '_hw_import.csv', '528f8731d1b45_hw_import.csv', '2013-11-22 16:32:50', 'emccrann', 271, '', '/automate/csv/528f8731d1b45_hw_import.csv'),
(2, '_assets.csv', '528f87684f4e8_assets.csv', '2013-11-22 16:33:45', 'emccrann', 30, '', '/automate/csv/528f87684f4e8_assets.csv'),
(3, '_assets.csv', '528f8ad0006ca_assets.csv', '2013-11-22 16:48:17', 'emccrann', 30, '', '/automate/csv/528f8ad0006ca_assets.csv'),
(4, '_assets.csv', '528f8b244e9eb_assets.csv', '2013-11-22 16:49:41', 'emccrann', 30, '', '/automate/csv/528f8b244e9eb_assets.csv'),
(5, '_assets.csv', '528f8b4e5caf8_assets.csv', '2013-11-22 16:50:23', 'emccrann', 30, '', '/automate/csv/528f8b4e5caf8_assets.csv'),
(6, '_assets.csv', '528f8bcbaab59_assets.csv', '2013-11-22 16:52:28', 'emccrann', 30, '', '/automate/csv/528f8bcbaab59_assets.csv'),
(7, '_assets.csv', '528f8c2a5da86_assets.csv', '2013-11-22 16:54:03', 'emccrann', 30, '', '/automate/csv/528f8c2a5da86_assets.csv'),
(8, '_assets.csv', '528f8c6890d7f_assets.csv', '2013-11-22 16:55:05', 'emccrann', 30, '', '/automate/csv/528f8c6890d7f_assets.csv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
