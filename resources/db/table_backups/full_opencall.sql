-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2013 at 08:51 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swdata`
--

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
(5231, 2, '5500074', 'Melvin Acevedo', 'macevedo', '22/03/2013 12:36', 'Thor', '24/03/2013 15:51', 'ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque.', 'at lacus. Quisque purus sapien'),
(9001, 2, '5500060', 'Rafael Carson', 'rcarson', '24/03/2013 08:29', 'Denton', '26/03/2013 10:09', 'penatibus et magnis dis parturient montes', ' nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu.'),
(15061, 2, '5500061', 'Kareem Whitley', 'kwhitley', '24/03/2013 11:09', 'Emerson', '26/03/2013 11:13', 'diam. Sed diam lorem', ' auctor quis'),
(17953, 2, '5500092', 'Nash Sanders', 'nsanders', '28/03/2013 12:54', 'Robert', '30/03/2013 13:22', 'Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra', ' per inceptos hymenaeos.'),
(25098, 2, '5500043', 'Leo Kennedy', 'lkennedy', '30/03/2013 08:58', 'Justin', '31/03/2013 10:37', 'Donec porttitor tellus non magna. Nam ligula elit', ' pretium et'),
(31909, 2, '5500038', 'Harper Poole', 'hpoole', '01/04/2013 15:57', 'Phillip', '03/04/2013 09:36', 'nibh enim', ' gravida sit amet'),
(36878, 2, '5500050', 'Patrick Cole', 'pcole', '03/04/2013 13:48', 'Alan', '05/04/2013 15:30', 'arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien', ' gravida non'),
(38042, 2, '5500012', 'Damian Alvarado', 'dalvarado', '03/04/2013 12:27', 'Mannix', '05/04/2013 14:09', 'lorem', ' vehicula et'),
(69235, 2, '5500041', 'Brendan Carey', 'bcarey', '03/04/2013 10:17', 'Dieter', '05/04/2013 15:37', 'at', ' nisi. Cum sociis natoque penatibus et magnis dis parturient montes'),
(76910, 2, '5500013', 'Rajah Allen', 'rallen', '09/04/2013 13:00', 'Mason', '11/04/2013 09:00', 'ut', ' pellentesque eget'),
(81603, 2, '5500027', 'Lawrence Henson', 'lhenson', '12/04/2013 14:39', 'Bruno', '14/04/2013 15:46', 'facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor', ' dictum eu'),
(136938, 2, '5500057', 'Eric Beach', 'ebeach', '12/04/2013 14:38', 'Kasimir', '14/04/2013 12:44', 'montes', ' nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris'),
(146602, 2, '5500104', 'Jeremy Spence', 'jspence', '12/04/2013 10:14', 'Chase', '14/04/2013 09:00', 'nec', ' mollis vitae'),
(150089, 1, '5500048', 'Connor Zimmerman', 'czimmerman', '15/04/2013 10:58', 'Vincent', '17/04/2013 15:51', 'et magnis dis parturient montes', ' nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed'),
(151759, 1, '5500052', 'Gregory Ayers', 'gayers', '15/04/2013 15:08', 'Colorado', '17/04/2013 09:41', 'eleifend non', ' dapibus rutrum'),
(162346, 1, '5500091', 'Wyatt Acevedo', 'wacevedo', '18/04/2013 08:13', 'Kennedy', '20/04/2013 11:35', 'faucibus id', ' libero. Donec consectetuer mauris id sapien. Cras dolor dolor'),
(163939, 1, '5500031', 'Baxter Mcmahon', 'bmcmahon', '21/04/2013 15:20', 'Rafael', '23/04/2013 14:09', 'quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.', 'dolor dapibus gravida. Aliquam tincidunt'),
(164395, 1, '5500055', 'Vernon Eaton', 'veaton', '24/04/2013 12:00', 'Samuel', '26/04/2013 12:10', 'erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus', 'tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec'),
(183537, 1, '5500033', 'Austin Calhoun', 'acalhoun', '27/04/2013 11:06', 'Wesley', '29/04/2013 10:37', 'Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna', ' malesuada vel'),
(189903, 1, '5500045', 'Joshua Rodriquez', 'jrodriquez', '27/04/2013 15:44', 'Cain', '29/04/2013 09:31', 'urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu.', 'Aliquam tincidunt'),
(191726, 1, '5500110', 'Calvin Mercado', 'cmercado', '27/04/2013 13:09', 'Kasimir', '29/05/2013 13:33', 'in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing', 'eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in'),
(192530, 1, '5500100', 'Graiden Buckley', 'gbuckley', '02/05/2013 15:47', 'Jamal', '04/05/2013 08:22', 'aliquet', ' sem ut cursus luctus'),
(195648, 1, '5500030', 'Ross Stuart', 'rstuart', '03/05/2013 13:07', 'Wallace', '05/05/2013 13:42', 'dapibus id', ' blandit at'),
(213447, 1, '5500014', 'Kennan Randolph', 'krandolph', '03/05/2013 10:10', 'Howard', '05/05/2013 09:31', 'ipsum dolor sit amet', ' consectetuer adipiscing elit. Etiam laoreet'),
(223068, 1, '5500028', 'Macaulay Bradley', 'mbradley', '05/05/2013 08:54', 'Zane', '07/05/2013 14:54', 'ipsum ac mi eleifend egestas. Sed pharetra', ' felis eget varius ultrices'),
(238187, 1, '5500032', 'Mark Rose', 'mrose', '06/05/2013 09:24', 'Theodore', '08/05/2013 10:04', 'at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec vitae erat', 'sociis natoque penatibus et magnis dis parturient montes'),
(255250, 1, '5500077', 'Zeph Reilly', 'zreilly', '07/05/2013 11:16', 'Logan', '09/05/2013 12:40', 'In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci', 'ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula.'),
(260056, 1, '5500015', 'Luke Cruz', 'lcruz', '08/05/2013 09:57', 'Elijah', '10/05/2013 11:57', 'ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede', ' nonummy'),
(270686, 0, '5500096', 'Kenneth Wolf', 'kwolf', '09/05/2013 13:53', 'Philip', '11/05/2013 11:51', 'consectetuer rhoncus. Nullam velit dui', ' semper et'),
(283086, 0, '5500087', 'Erasmus Key', 'ekey', '09/05/2013 15:12', 'Uriel', '11/05/2013 13:03', 'a', ' facilisis non'),
(284256, 0, '5500022', 'Jameson Jarvis', 'jjarvis', '09/05/2013 12:25', 'Seth', '11/05/2013 10:43', 'diam lorem', ' auctor quis'),
(290295, 0, '5500065', 'James Stafford', 'jstafford', '12/05/2013 10:59', 'Mark', '14/05/2013 13:50', 'nec', ' malesuada ut'),
(308683, 0, '5500025', 'Price Knowles', 'pknowles', '13/05/2013 13:26', 'Clayton', '15/05/2013 09:28', 'eleifend egestas. Sed pharetra', ' felis eget varius ultrices'),
(320751, 0, '5500035', 'Cole Hayes', 'chayes', '14/05/2013 09:37', 'Chadwick', '16/05/2013 11:57', 'Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor', ' dictum eu'),
(322815, 0, '5500111', 'Ian Duke', 'iduke', '14/05/2013 10:17', 'Isaac', '16/05/2013 15:56', 'Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes', ' nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique'),
(355025, 0, '5500034', 'Colin Kirkland', 'ckirkland', '16/05/2013 09:44', 'Phelan', '18/05/2013 12:28', 'erat nonummy ultricies ornare', ' elit elit fermentum risus'),
(380858, 0, '5500078', 'Ralph Caldwell', 'rcaldwell', '18/05/2013 09:43', 'Walter', '20/05/2013 11:58', 'Etiam ligula tortor', ' dictum eu'),
(413618, 0, '5500098', 'Caldwell Parker', 'cparker', '20/05/2013 09:50', 'Jarrod', '22/05/2013 09:24', 'montes', ' nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa'),
(414125, 0, '5500095', 'Ryder Weaver', 'rweaver', '22/05/2013 13:55', 'Hamish', '24/05/2013 13:06', 'quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque.', 'nunc sed pede. Cum sociis natoque penatibus et magnis dis'),
(424937, 0, '5500088', 'Ethan Norman', 'enorman', '24/05/2013 14:32', 'Cullen', '26/05/2013 09:21', 'Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate', ' risus a ultricies adipiscing'),
(425529, 0, '5500084', 'Mufutau Morgan', 'mmorgan', '26/05/2013 09:34', 'Chadwick', '28/05/2013 15:34', 'amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede', ' ultrices a'),
(446262, 0, '5500037', 'Rajah Rosario', 'rrosario', '28/05/2013 08:15', 'Keane', '30/05/2013 15:53', 'diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra', ' per inceptos hymenaeos. Mauris ut quam vel'),
(462599, 0, '5500090', 'Malcolm Lott', 'mlott', '30/05/2013 09:54', 'Raymond', '31/06/2013 10:40:48', 'sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est', ' congue a'),
(475489, 0, '5500103', 'Palmer Logan', 'plogan', '01/06/2013 12:23', 'Garrett', '03/06/2013 08:11', 'Cras dolor dolor', ' tempus non'),
(481465, 0, '5500053', 'Jamal Turner', 'jturner', '03/06/2013 13:07', 'Jason', '05/06/2013 15:21', 'aliquet nec', ' imperdiet nec'),
(489093, 0, '5500049', 'Dustin Saunders', 'dsaunders', '05/06/2013 09:44', 'Alexander', '07/06/2013 11:47', 'ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede', ''),
(491324, 0, '5500094', 'Austin Farrell', 'afarrell', '07/06/2013 08:09', 'Wyatt', '09/06/2013 10:27', 'augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra', ''),
(495021, 0, '5500016', 'Jerry Kennedy', 'jkennedy', '09/06/2013 09:44', 'Dorian', '11/06/2013 11:47', 'lacinia mattis. Integer eu lacus. Quisque imperdiet', ' erat nonummy ultricies ornare');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
