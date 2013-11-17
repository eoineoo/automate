-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2013 at 11:37 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `hw_import`
--

CREATE TABLE IF NOT EXISTS `hw_import` (
  `id` int(11) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`,`model`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hw_import`
--

INSERT INTO `hw_import` (`id`, `serial`, `name`, `model`) VALUES
(23677, 'JF27', 'IEJF27', 'Latitude E6430'),
(23678, 'G517', 'IEG517', 'Latitude E6430'),
(23679, '7D17', 'IE7D17', 'Latitude E6430'),
(23680, 'DF17', 'IEDF17', 'Latitude E6430'),
(23681, 'B627', 'IEB627', 'Latitude E6430'),
(23682, '5S07', 'IE5S07', 'Latitude E6430'),
(23683, '7627', 'IE7627', 'Latitude E6430'),
(23684, 'J727', 'IEJ727', 'Latitude E6430'),
(23685, '1717', 'IE1717', 'Latitude E6430'),
(23686, '3F17', 'IE3F17', 'Latitude E6430'),
(23687, 'BV17', 'IEBV17', 'Latitude E6430'),
(23688, '6N27', 'IE6N27', 'Latitude E6430'),
(23689, 'D637', 'IED637', 'Latitude E6430'),
(23690, '9127', 'IE9127', 'Latitude E6430'),
(23691, '9727', 'IE9727', 'Latitude E6430'),
(23692, 'HR17', 'IEHR17', 'Latitude E6430'),
(23693, '1S17', 'IE1S17', 'Latitude E6430'),
(23694, '2C17', 'IE2C17', 'Latitude E6430'),
(23695, '3527', 'IE3527', 'Latitude E6430'),
(23696, 'C717', 'IEC717', 'Latitude E6430'),
(23697, 'BR17', 'IEBR17', 'Latitude E6430'),
(23698, '8S07', 'IE8S07', 'Latitude E6430'),
(23699, '2D17', 'IE2D17', 'Latitude E6430'),
(23700, 'CK27', 'IECK27', 'Latitude E6430'),
(23701, '9N27', 'IE9N27', 'Latitude E6430'),
(23702, '5037', 'IE5037', 'Latitude E6430'),
(23703, 'B209', 'IEB209', 'Latitude E6430'),
(23704, '7P09', 'IE7P09', 'Latitude E6430'),
(23705, 'CG09', 'IECG09', 'Latitude E6430'),
(23706, 'JG09', 'IEJG09', 'Latitude E6430'),
(23707, '8XZ8', 'IE8XZ8', 'Latitude E6430'),
(23708, 'BZ07', 'IEBZ07', 'Latitude E6430'),
(23709, '9G09', 'IE9G09', 'Latitude E6430'),
(23710, 'G709', 'IEG709', 'Latitude E6430'),
(23711, 'FH09', 'IEFH09', 'Latitude E6430'),
(23712, '9B09', 'IE9B09', 'Latitude E6430'),
(23713, '5B09', 'IE5B09', 'Latitude E6430'),
(23714, '8V17', 'IE8V17', 'Latitude E6430'),
(23715, 'J309', 'IEJ309', 'Latitude E6430'),
(23716, '8809', 'IE8809', 'Latitude E6430'),
(23717, 'DWZ8', 'IEDWZ8', 'Latitude E6430'),
(23718, '4B19', 'IE4B19', 'Latitude E6430'),
(23719, '1G09', 'IE1G09', 'Latitude E6430'),
(23720, '5D27', 'IE5D27', 'Latitude E6430'),
(23721, 'HM17', 'IEHM17', 'Latitude E6430'),
(23722, '6527', 'IE6527', 'Latitude E6430'),
(23723, '9T17', 'IE9T17', 'Latitude E6430'),
(23724, 'G627', 'IEG627', 'Latitude E6430'),
(23725, '6F17', 'IE6F17', 'Latitude E6430'),
(23726, '3N77', 'IE3N77', 'Latitude E6430'),
(23727, '8209', 'IE8209', 'Latitude E6430'),
(23728, 'HWZ8', 'IEHWZ8', 'Latitude E6430'),
(23729, 'D909', 'IED909', 'Latitude E6430'),
(23730, 'CNZ8', 'IECNZ8', 'Latitude E6430'),
(23731, 'CQ09', 'IECQ09', 'Latitude E6430'),
(23732, '8T07', 'IE8T07', 'Latitude E6430'),
(23733, 'BXZ8', 'IEBXZ8', 'Latitude E6430'),
(23734, 'G319', 'IEG319', 'Latitude E6430'),
(23735, 'HJ09', 'IEHJ09', 'Latitude E6430'),
(23736, '8B09', 'IE8B09', 'Latitude E6430'),
(23737, 'CXZ8', 'IECXZ8', 'Latitude E6430'),
(23738, '8D17', 'IE8D17', 'Latitude E6430'),
(23739, 'G819', 'IEG819', 'Latitude E6430'),
(23740, 'F809', 'IEF809', 'Latitude E6430'),
(23741, 'GXZ8', 'IEGXZ8', 'Latitude E6430'),
(23742, '4309', 'IE4309', 'Latitude E6430'),
(23743, '7109', 'IE7109', 'Latitude E6430'),
(23744, 'F527', 'IEF527', 'Latitude E6430'),
(23745, 'HF27', 'IEHF27', 'Latitude E6430'),
(23746, '9D17', 'IE9D17', 'Latitude E6430'),
(23747, '5127', 'IE5127', 'Latitude E6430'),
(23748, 'CS07', 'IECS07', 'Latitude E6430'),
(23749, '6V07', 'IE6V07', 'Latitude E6430'),
(23750, 'C517', 'IEC517', 'Latitude E6430'),
(23751, 'DZ27', 'IEDZ27', 'Latitude E6430'),
(23752, '1V17', 'IE1V17', 'Latitude E6430'),
(23753, '6N77', 'IE6N77', 'Latitude E6430'),
(23754, '8F17', 'IE8F17', 'Latitude E6430'),
(23755, 'GR27', 'IEGR27', 'Latitude E6430'),
(23756, '2027', 'IE2027', 'Latitude E6430'),
(23757, '3027', 'IE3027', 'Latitude E6430'),
(23758, '2Z17', 'IE2Z17', 'Latitude E6430'),
(23759, '9F27', 'IE9F27', 'Latitude E6430'),
(23760, 'CY07', 'IECY07', 'Latitude E6430'),
(23761, 'DS17', 'IEDS17', 'Latitude E6430'),
(23762, 'D027', 'IED027', 'Latitude E6430'),
(23763, 'JC27', 'IEJC27', 'Latitude E6430'),
(23764, 'BZ17', 'IEBZ17', 'Latitude E6430'),
(23765, 'GK17', 'IEGK17', 'Latitude E6430'),
(23766, '2Z07', 'IE2Z07', 'Latitude E6430'),
(23767, '3D27', 'IE3D27', 'Latitude E6430'),
(23768, 'J517', 'IEJ517', 'Latitude E6430'),
(23769, 'DK17', 'IEDK17', 'Latitude E6430'),
(23770, 'B527', 'IEB527', 'Latitude E6430'),
(23771, '2T57', 'IE2T57', 'Latitude E6430'),
(23772, 'H627', 'IEH627', 'Latitude E6430'),
(23773, '5G27', 'IE5G27', 'Latitude E6430'),
(23774, 'CC27', 'IECC27', 'Latitude E6430'),
(23775, '1627', 'IE1627', 'Latitude E6430'),
(23776, 'HM27', 'IEHM27', 'Latitude E6430'),
(23777, 'JZ07', 'IEJZ07', 'Latitude E6430'),
(23778, '9K17', 'IE9K17', 'Latitude E6430'),
(23779, '6L17', 'IE6L17', 'Latitude E6430'),
(23780, '7V17', 'IE7V17', 'Latitude E6430'),
(23781, '5T17', 'IE5T17', 'Latitude E6430'),
(23782, '4S27', 'IE4S27', 'Latitude E6430'),
(23783, 'C617', 'IEC617', 'Latitude E6430'),
(23784, 'CZ07', 'IECZ07', 'Latitude E6430'),
(23785, 'DM17', 'IEDM17', 'Latitude E6430'),
(23786, '4017', 'IE4017', 'Latitude E6430'),
(23787, 'H417', 'IEH417', 'Latitude E6430'),
(23788, '4M17', 'IE4M17', 'Latitude E6430'),
(23789, 'F017', 'IEF017', 'Latitude E6430'),
(23790, '7L17', 'IE7L17', 'Latitude E6430'),
(23791, '6Z07', 'IE6Z07', 'Latitude E6430'),
(23792, '1F27', 'IE1F27', 'Latitude E6430'),
(23793, 'H717', 'IEH717', 'Latitude E6430'),
(23794, 'DS07', 'IEDS07', 'Latitude E6430'),
(23795, '8Z17', 'IE8Z17', 'Latitude E6430'),
(23796, '7117', 'IE7117', 'Latitude E6430'),
(23797, '5717', 'IE5717', 'Latitude E6430'),
(23798, '9C17', 'IE9C17', 'Latitude E6430'),
(23799, '8N27', 'IE8N27', 'Latitude E6430'),
(23800, 'B117', 'IEB117', 'Latitude E6430'),
(23801, '9S17', 'IE9S17', 'Latitude E6430'),
(23802, '4117', 'IE4117', 'Latitude E6430'),
(23803, '1Z07', 'IE1Z07', 'Latitude E6430'),
(23804, '4727', 'IE4727', 'Latitude E6430'),
(23805, 'HZ07', 'IEHZ07', 'Latitude E6430'),
(23806, '4617', 'IE4617', 'Latitude E6430'),
(23807, 'BTM2', 'IEBTM2', 'EliteBook8470p'),
(23808, 'BTF0', 'IEBTF0', 'EliteBook8470p'),
(23809, 'BTBB', 'IEBTBB', 'EliteBook8470p'),
(23810, 'BTC9', 'IEBTC9', 'EliteBook8470p'),
(23811, 'BT92', 'IEBT92', 'EliteBook8470p'),
(23812, 'BTCT', 'IEBTCT', 'EliteBook8470p'),
(23813, 'BTCV', 'IEBTCV', 'EliteBook8470p'),
(23814, 'BT98', 'IEBT98', 'EliteBook8470p'),
(23815, 'BTDM', 'IEBTDM', 'EliteBook8470p'),
(23816, 'BTBC', 'IEBTBC', 'EliteBook8470p'),
(23817, 'BTGQ', 'IEBTGQ', 'EliteBook8470p'),
(23818, 'BTF3', 'IEBTF3', 'EliteBook8470p'),
(23819, 'BTC6', 'IEBTC6', 'EliteBook8470p'),
(23820, 'BTBD', 'IEBTBD', 'EliteBook8470p'),
(23821, 'BT9G', 'IEBT9G', 'EliteBook8470p'),
(23822, 'BTCD', 'IEBTCD', 'EliteBook8470p'),
(23823, 'BTBJ', 'IEBTBJ', 'EliteBook8470p'),
(23824, 'BT9F', 'IEBT9F', 'EliteBook8470p'),
(23825, 'BT9X', 'IEBT9X', 'EliteBook8470p'),
(23826, 'BTF5', 'IEBTF5', 'EliteBook8470p'),
(23827, 'BT9C', 'IEBT9C', 'EliteBook8470p'),
(23828, 'BT9D', 'IEBT9D', 'EliteBook8470p'),
(23829, 'BT8R', 'IEBT8R', 'EliteBook8470p'),
(23830, 'BTBH', 'IEBTBH', 'EliteBook8470p'),
(23831, 'BTB5', 'IEBTB5', 'EliteBook8470p'),
(23832, 'BTD8', 'IEBTD8', 'EliteBook8470p'),
(23833, 'BT91', 'IEBT91', 'EliteBook8470p'),
(23834, 'BTBL', 'IEBTBL', 'EliteBook8470p'),
(23835, 'BTBM', 'IEBTBM', 'EliteBook8470p'),
(23836, 'BT9S', 'IEBT9S', 'EliteBook8470p'),
(23837, 'BTDT', 'IEBTDT', 'EliteBook8470p'),
(23838, 'BTDR', 'IEBTDR', 'EliteBook8470p'),
(23839, 'BTC0', 'IEBTC0', 'EliteBook8470p'),
(23840, 'BTCP', 'IEBTCP', 'EliteBook8470p'),
(23841, 'BTDG', 'IEBTDG', 'EliteBook8470p'),
(23842, 'BTBF', 'IEBTBF', 'EliteBook8470p'),
(23843, 'BTBV', 'IEBTBV', 'EliteBook8470p'),
(23844, 'BTDY', 'IEBTDY', 'EliteBook8470p'),
(23845, 'BTD9', 'IEBTD9', 'EliteBook8470p'),
(23846, 'BTC2', 'IEBTC2', 'EliteBook8470p'),
(23847, 'BTF7', 'IEBTF7', 'EliteBook8470p'),
(23848, 'BTB2', 'IEBTB2', 'EliteBook8470p'),
(23849, 'BTKB', 'IEBTKB', 'EliteBook8470p'),
(23850, 'BTC3', 'IEBTC3', 'EliteBook8470p'),
(23851, 'BTDJ', 'IEBTDJ', 'EliteBook8470p'),
(23852, 'BT9B', 'IEBT9B', 'EliteBook8470p'),
(23853, 'BTG0', 'IEBTG0', 'EliteBook8470p'),
(23854, 'BTDB', 'IEBTDB', 'EliteBook8470p'),
(23855, 'BTDN', 'IEBTDN', 'EliteBook8470p'),
(23856, 'BT97', 'IEBT97', 'EliteBook8470p'),
(23857, 'BT9Q', 'IEBT9Q', 'EliteBook8470p'),
(23858, 'BTDC', 'IEBTDC', 'EliteBook8470p'),
(23859, 'BTB7', 'IEBTB7', 'EliteBook8470p'),
(23860, 'BTBX', 'IEBTBX', 'EliteBook8470p'),
(23861, 'BTDP', 'IEBTDP', 'EliteBook8470p'),
(23862, 'BT9W', 'IEBT9W', 'EliteBook8470p'),
(23863, 'BTCQ', 'IEBTCQ', 'EliteBook8470p'),
(23864, 'BTC1', 'IEBTC1', 'EliteBook8470p'),
(23865, 'BTCC', 'IEBTCC', 'EliteBook8470p'),
(23866, 'BT9Y', 'IEBT9Y', 'EliteBook8470p'),
(23867, 'BT9N', 'IEBT9N', 'EliteBook8470p'),
(23868, 'BT9M', 'IEBT9M', 'EliteBook8470p'),
(23869, 'BT8P', 'IEBT8P', 'EliteBook8470p'),
(23870, 'BTDK', 'IEBTDK', 'EliteBook8470p'),
(23871, 'BTDX', 'IEBTDX', 'EliteBook8470p'),
(23872, 'BT8Q', 'IEBT8Q', 'EliteBook8470p'),
(23873, 'BTD2', 'IEBTD2', 'EliteBook8470p'),
(23874, 'BTF1', 'IEBTF1', 'EliteBook8470p'),
(23875, 'BTF9', 'IEBTF9', 'EliteBook8470p'),
(23876, 'BTDV', 'IEBTDV', 'EliteBook8470p'),
(23877, 'BTCB', 'IEBTCB', 'EliteBook8470p'),
(23878, 'BT96', 'IEBT96', 'EliteBook8470p'),
(23879, 'BTB0', 'IEBTB0', 'EliteBook8470p'),
(23880, 'BTBT', 'IEBTBT', 'EliteBook8470p'),
(23881, 'BTCS', 'IEBTCS', 'EliteBook8470p'),
(23882, 'BT8X', 'IEBT8X', 'EliteBook8470p'),
(23883, 'BTD7', 'IEBTD7', 'EliteBook8470p'),
(23884, 'BTF6', 'IEBTF6', 'EliteBook8470p'),
(23885, 'BTCH', 'IEBTCH', 'EliteBook8470p'),
(23886, 'BTBZ', 'IEBTBZ', 'EliteBook8470p'),
(23887, 'BTB1', 'IEBTB1', 'EliteBook8470p'),
(23888, 'BTD1', 'IEBTD1', 'EliteBook8470p'),
(23889, 'BTBP', 'IEBTBP', 'EliteBook8470p'),
(23890, 'BTCN', 'IEBTCN', 'EliteBook8470p'),
(23891, 'BTDL', 'IEBTDL', 'EliteBook8470p'),
(23892, 'BTJP', 'IEBTJP', 'EliteBook8470p'),
(23893, 'BTCF', 'IEBTCF', 'EliteBook8470p'),
(23894, 'BT9R', 'IEBT9R', 'EliteBook8470p'),
(23895, 'BTBN', 'IEBTBN', 'EliteBook8470p'),
(23896, 'BTCZ', 'IEBTCZ', 'EliteBook8470p'),
(23897, 'BTD4', 'IEBTD4', 'EliteBook8470p'),
(23898, 'BTDF', 'IEBTDF', 'EliteBook8470p'),
(23899, 'BT9L', 'IEBT9L', 'EliteBook8470p'),
(23900, 'BT9K', 'IEBT9K', 'EliteBook8470p'),
(23901, 'BT9T', 'IEBT9T', 'EliteBook8470p'),
(23902, 'BTBW', 'IEBTBW', 'EliteBook8470p'),
(23903, 'BTB9', 'IEBTB9', 'EliteBook8470p'),
(23904, 'BTB3', 'IEBTB3', 'EliteBook8470p'),
(23905, 'BT8S', 'IEBT8S', 'EliteBook8470p'),
(23906, 'BTCR', 'IEBTCR', 'EliteBook8470p'),
(23907, 'BTCM', 'IEBTCM', 'EliteBook8470p'),
(23908, 'BTFW', 'IEBTFW', 'EliteBook8470p'),
(23909, 'BT8T', 'IEBT8T', 'EliteBook8470p'),
(23910, 'BTC5', 'IEBTC5', 'EliteBook8470p'),
(23911, 'BTF8', 'IEBTF8', 'EliteBook8470p'),
(23912, 'BTDZ', 'IEBTDZ', 'EliteBook8470p'),
(23913, 'BT93', 'IEBT93', 'EliteBook8470p'),
(23914, 'BTB4', 'IEBTB4', 'EliteBook8470p'),
(23915, 'BTDH', 'IEBTDH', 'EliteBook8470p'),
(23916, 'BTF2', 'IEBTF2', 'EliteBook8470p'),
(23917, 'BTC8', 'IEBTC8', 'EliteBook8470p'),
(23918, 'BTBS', 'IEBTBS', 'EliteBook8470p'),
(23919, 'BT9P', 'IEBT9P', 'EliteBook8470p'),
(23920, 'BTDW', 'IEBTDW', 'EliteBook8470p'),
(23921, 'BT8W', 'IEBT8W', 'EliteBook8470p'),
(23922, 'BT9H', 'IEBT9H', 'EliteBook8470p'),
(23923, 'BTD3', 'IEBTD3', 'EliteBook8470p'),
(23924, 'BTD5', 'IEBTD5', 'EliteBook8470p'),
(23925, 'BTDS', 'IEBTDS', 'EliteBook8470p'),
(23926, 'BT90', 'IEBT90', 'EliteBook8470p'),
(23927, 'BTDD', 'IEBTDD', 'EliteBook8470p'),
(23928, 'BTB8', 'IEBTB8', 'EliteBook8470p'),
(23929, 'BTC7', 'IEBTC7', 'EliteBook8470p'),
(23930, 'BT99', 'IEBT99', 'EliteBook8470p'),
(23931, 'BTD6', 'IEBTD6', 'EliteBook8470p'),
(23932, 'BT9V', 'IEBT9V', 'EliteBook8470p'),
(23933, 'BTD0', 'IEBTD0', 'EliteBook8470p'),
(23934, 'BTBR', 'IEBTBR', 'EliteBook8470p'),
(23935, 'BTBQ', 'IEBTBQ', 'EliteBook8470p'),
(23936, 'BTBY', 'IEBTBY', 'EliteBook8470p'),
(23937, 'BTBK', 'IEBTBK', 'EliteBook8470p'),
(23938, 'BT8V', 'IEBT8V', 'EliteBook8470p'),
(23939, 'BTB6', 'IEBTB6', 'EliteBook8470p'),
(23940, 'BTBG', 'IEBTBG', 'EliteBook8470p'),
(23941, 'BT94', 'IEBT94', 'EliteBook8470p'),
(23942, 'BT95', 'IEBT95', 'EliteBook8470p'),
(23943, 'BT9Z', 'IEBT9Z', 'EliteBook8470p'),
(23944, 'BT9J', 'IEBT9J', 'EliteBook8470p'),
(23945, 'BTCG', 'IEBTCG', 'EliteBook8470p'),
(23946, 'BTDQ', 'IEBTDQ', 'EliteBook8470p');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
