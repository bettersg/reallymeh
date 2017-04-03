
-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 68.178.217.54
-- Generation Time: Apr 03, 2017 at 08:03 AM
-- Server version: 5.5.43
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reallymeh`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id_fk` int(11) NOT NULL,
  `question1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `question3` varchar(50) NOT NULL,
  `question4` varchar(50) NOT NULL,
  `question5` varchar(50) NOT NULL,
  `question6` varchar(50) NOT NULL,
  `question7` varchar(50) NOT NULL,
  `question8` varchar(50) NOT NULL,
  `question9` varchar(50) NOT NULL,
  `question10` varchar(50) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `age` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `race` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `ipaddress` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quiz_id_fk` (`quiz_id_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(55, 3, '28322', '14', '10', '29', '15', 'True', 'False', 'September', '12', '9', '2017-04-01 09:58:02', '30', 'male', 'indian', 'hinduism', 'singapore', '101.127.111.39');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(56, 3, '28322', '14', '10', '29', '15', 'True', 'False', 'September', '12', '9', '2017-04-01 09:58:25', '30', 'male', 'indian', 'hinduism', 'singapore', '101.127.111.39');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(57, 3, '28322', '14', '10', '29', '15', 'True', 'False', 'September', '12', '9', '2017-04-01 10:04:08', '30', 'male', 'indian', 'hinduism', 'singapore', '101.127.111.39');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(58, 3, '9830', '70', '3', '28', '5', 'True', 'False', 'December', '35', '5', '2017-04-01 10:22:57', '20', 'male', 'chinese', 'none', 'singapore', '213.225.7.239');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(59, 3, '20103', '20', '5', '28', '8', 'False', 'False', 'January', '70', '10', '2017-04-01 10:38:42', '40', 'male', 'indian', 'hinduism', 'singapore', '182.19.233.214');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(60, 3, '20103', '56', '3', '25', '41', 'True', 'True', 'January', '0', '28', '2017-04-01 10:41:06', 'teen', 'male', 'chinese', 'buddhism', 'singapore', '119.74.166.8');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(61, 3, '20103', '13', '5', '28', '11', 'False', 'False', 'November', '42', '8', '2017-04-01 10:45:45', '30', 'male', 'chinese', 'none', 'singapore', '116.88.70.97');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(62, 3, '20103', '38', '3', '28', '20', 'True', 'False', 'September', '40', '15', '2017-04-01 11:22:18', '30', 'male', 'chinese', 'buddhism', 'singapore', '116.87.51.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(63, 3, '14325', '39', '7', '29', '20', 'True', 'False', 'May', '35', '15', '2017-04-01 12:56:42', '50', 'male', 'chinese', 'buddhism', 'singapore', '175.156.82.164');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(64, 3, '14325', '39', '7', '29', '20', 'True', 'False', 'May', '35', '15', '2017-04-01 13:06:49', '50', 'male', 'chinese', 'buddhism', 'singapore', '175.156.82.164');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(65, 3, '14325', '39', '7', '29', '20', 'True', 'False', 'May', '35', '15', '2017-04-01 13:18:28', '50', 'male', 'chinese', 'buddhism', 'singapore', '175.156.82.164');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(66, 3, '9830', '0', '3', '25', '0', 'True', 'True', 'January', '0', '0', '2017-04-01 13:57:20', 'teen', 'male', 'chinese', 'buddhism', 'singapore', '71.198.44.201');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(67, 3, '33466', '20', '5', '28', '20', 'True', 'False', 'November', '70', '30', '2017-04-01 14:18:53', '30', 'male', 'others', 'christianity', 'singapore', '118.189.184.91');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(68, 3, '20103', '20', '5', '28', '19', 'True', 'False', 'August', '68', '33', '2017-04-01 15:01:34', '20', 'male', 'indian', 'none', 'singapore', '72.221.65.87');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(69, 3, '14325', '6', '5', '29', '7', 'False', 'False', 'December', '69', '33', '2017-04-01 15:17:15', '40', 'male', 'chinese', 'none', 'singapore', '116.86.147.108');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(70, 3, '14325', '15', '5', '30', '4', 'True', 'False', 'June', '20', '4', '2017-04-01 15:18:12', '30', 'male', 'chinese', 'christianity', 'singapore', '60.242.94.90');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(71, 3, '28322', '3', '5', '28', '7', 'True', 'False', 'December', '60', '15', '2017-04-01 15:52:31', '30', 'male', 'chinese', 'buddhism', 'singapore', '45.56.159.143');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(72, 3, '28322', '20', '7', '28', '20', 'True', 'False', 'December', '20', '25', '2017-04-01 15:58:46', '30', 'male', 'indian', 'hinduism', 'singapore', '86.168.132.134');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(73, 3, '28322', '10', '10', '28', '12', 'True', 'False', 'November', '75', '27', '2017-04-01 16:29:04', '40', 'male', 'chinese', 'christianity', 'singapore', '202.156.207.41');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(74, 3, '24309', '40', '7', '29', '25', 'True', 'False', 'September', '50', '17', '2017-04-01 16:33:56', '40', 'male', 'chinese', 'buddhism', 'singapore', '183.179.127.2');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(75, 3, '14325', '25', '3', '27', '17', 'True', 'False', 'February', '25', '0', '2017-04-01 16:37:11', '30', 'male', 'chinese', 'none', 'singapore', '126.164.52.123');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(76, 3, '33466', '14', '7', '28', '15', 'True', 'False', 'December', '75', '15', '2017-04-01 16:54:53', '40', 'male', 'indian', 'christianity', 'singapore', '183.90.37.37');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(77, 3, '14325', '35', '7', '29', '26', 'True', 'False', 'June', '60', '51', '2017-04-01 17:03:05', '20', 'male', 'chinese', 'none', 'singapore', '183.90.37.178');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(78, 3, '33466', '20', '3', '30', '3', 'True', 'True', 'June', '3', '0', '2017-04-01 17:08:54', '30', 'male', 'chinese', 'christianity', 'singapore', '114.162.4.30');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(79, 3, '14325', '25', '5', '28', '25', 'True', 'False', 'December', '45', '15', '2017-04-01 17:11:36', '30', 'male', 'others', 'christianity', 'singapore', '183.90.37.230');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(80, 3, '20103', '30', '7', '27', '17', 'False', 'False', 'March', '55', '23', '2017-04-01 17:13:36', '40', 'male', 'chinese', 'none', 'singapore', '45.114.5.131');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(81, 3, '14325', '55', '5', '27', '12', 'False', 'False', 'December', '60', '22', '2017-04-01 17:17:44', '20', 'male', 'chinese', 'none', 'singapore', '115.66.222.116');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(82, 3, '20103', '50', '5', '29', '12', 'True', 'True', 'January', '75', '11', '2017-04-01 17:18:14', '40', 'male', 'chinese', 'christianity', 'singapore', '14.100.136.17');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(83, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-01 17:18:42', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(84, 3, '20103', '40', '3', '29', '20', 'True', 'False', 'December', '75', '25', '2017-04-01 17:26:01', '30', 'male', 'chinese', 'christianity', 'singapore', '132.147.105.214');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(85, 3, '24309', '49', '3', '27', '24', 'False', 'False', 'February', '39', '15', '2017-04-01 17:32:23', '30', 'male', 'chinese', 'buddhism', 'singapore', '14.100.136.104');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(86, 3, '24309', '6', '3', '26', '4', 'True', 'True', 'February', '8', '8', '2017-04-01 17:44:44', 'teen', 'male', 'chinese', 'christianity', 'singapore', '118.189.194.3');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(87, 3, '24309', '60', '7', '29', '15', 'False', 'False', 'December', '73', '24', '2017-04-01 18:15:41', '30', 'male', 'chinese', 'none', 'singapore', '119.56.122.101');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(88, 3, '24309', '20', '7', '30', '10', 'False', 'False', 'December', '80', '15', '2017-04-01 18:23:02', '30', 'male', 'chinese', 'none', 'singapore', '1.46.229.144');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(89, 3, '9830', '0', '3', '25', '0', 'True', 'True', 'January', '0', '0', '2017-04-01 18:30:47', '50', 'male', 'indian', 'christianity', 'singapore', '119.56.103.159');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(90, 3, '9830', '0', '3', '25', '0', 'True', 'True', 'January', '0', '0', '2017-04-01 18:34:12', 'teen', 'male', 'chinese', 'buddhism', 'singapore', '101.127.111.39');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(91, 3, '9830', '0', '3', '25', '0', 'True', 'True', 'January', '0', '0', '2017-04-01 19:25:17', 'teen', 'male', 'chinese', 'buddhism', 'singapore', '180.255.248.103');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(92, 4, '', '', '', '', '', '', '', '', '', '', '2017-04-01 19:57:54', '30', 'male', 'chinese', 'none', 'singapore', '119.56.122.104');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(93, 3, '20103', '25', '7', '28', '6', 'False', 'False', 'March', '60', '5', '2017-04-01 20:23:13', '30', 'male', 'chinese', 'christianity', 'singapore', '112.198.78.115');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(94, 4, '', '', '', '', '', '', '', '', '', '', '2017-04-01 20:25:42', '20', 'male', 'chinese', 'buddhism', 'singapore', '116.15.196.67');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(95, 4, 'False', 'False', 'True', 'False', 'True', 'True', 'False', 'False', 'True', 'True', '2017-04-01 20:39:56', '30', 'male', 'indian', 'hinduism', 'singapore', '101.127.111.39');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(96, 4, 'False', 'False', 'False', 'False', 'False', 'False', 'True', 'True', 'True', 'True', '2017-04-01 20:43:21', '20', 'male', 'chinese', 'buddhism', 'singapore', '116.15.196.67');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(97, 4, 'False', 'True', 'False', 'True', 'True', 'True', 'True', 'True', 'True', 'False', '2017-04-01 20:45:50', 'teen', 'male', 'chinese', 'buddhism', 'singapore', '180.255.248.103');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(98, 4, 'False', 'True', 'True', 'True', 'True', 'True', 'True', 'True', 'True', 'True', '2017-04-01 21:11:27', '30', 'male', 'chinese', 'christianity', 'singapore', '27.54.51.200');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(99, 3, '14325', '15', '5', '28', '25', 'True', 'False', 'June', '69', '25', '2017-04-01 21:20:41', '30', 'male', 'chinese', 'christianity', 'singapore', '27.54.51.200');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(100, 3, '14325', '60', '13', '30', '15', 'True', 'False', 'December', '53', '25', '2017-04-01 22:14:26', '20', 'male', 'chinese', 'christianity', 'singapore', '180.255.248.92');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(101, 4, 'False', 'False', 'False', 'True', 'False', 'False', 'True', 'True', 'True', 'True', '2017-04-01 22:24:45', '30', 'male', 'chinese', 'christianity', 'singapore', '180.255.248.92');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(102, 4, 'False', 'False', 'False', 'True', 'False', 'False', 'True', 'True', 'True', 'True', '2017-04-01 22:24:45', '30', 'male', 'chinese', 'christianity', 'singapore', '180.255.248.92');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(103, 4, 'False', 'False', 'False', 'True', 'True', 'True', 'True', 'True', 'True', 'True', '2017-04-02 00:47:11', 'teen', 'male', 'chinese', 'buddhism', 'singapore', '219.75.65.117');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(104, 3, '28322', '40', '10', '28', '40', 'True', 'False', 'December', '80', '30', '2017-04-02 02:35:07', '60', 'male', 'others', 'none', 'singapore', '101.127.111.39');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(105, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-02 04:10:21', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(106, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-02 05:25:13', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(107, 4, 'False', 'False', 'True', 'True', 'True', 'True', 'True', 'True', 'True', 'True', '2017-04-02 06:03:22', '30', 'male', 'chinese', 'none', 'singapore', '180.255.240.122');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(108, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-02 06:23:52', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(109, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-02 06:46:55', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(110, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-02 06:48:05', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(111, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-02 06:48:51', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(112, 3, '9830', '30', '5', '29', '7', 'True', 'False', 'May', '60', '3', '2017-04-02 06:50:07', '30', 'male', 'chinese', 'christianity', 'singapore', '183.90.37.98');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(113, 3, '20103', '70', '5', '30', '20', 'True', 'True', 'December', '70', '20', '2017-04-02 07:22:34', '20', 'male', 'chinese', 'christianity', 'singapore', '118.189.197.153');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(114, 3, '20103', '25', '7', '28', '6', 'False', 'False', 'March', '60', '5', '2017-04-02 09:39:31', '30', 'male', 'chinese', 'christianity', 'singapore', '112.198.78.115');
INSERT INTO `answers` (`id`, `quiz_id_fk`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `createdat`, `age`, `gender`, `race`, `religion`, `location`, `ipaddress`) VALUES(115, 3, '14325', '40', '5', '27', '10', 'False', 'True', 'May', '30', '20', '2017-04-02 17:26:33', '40', 'male', 'others', 'none', 'singapore', '179.35.22.125');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id_fk` int(11) NOT NULL,
  `optiontype` varchar(50) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `question_id_fk` (`question_id_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(7, 4, 'CUSTOM', '9830', '2017-04-01 09:01:07');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(8, 4, 'CUSTOM', '14325', '2017-04-01 09:01:07');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(9, 4, 'CUSTOM', '20103', '2017-04-01 09:01:31');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(10, 4, 'CUSTOM', '24309', '2017-04-01 09:01:31');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(11, 4, 'CUSTOM', '28322', '2017-04-01 09:01:53');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(12, 4, 'CUSTOM', '33466', '2017-04-01 09:01:53');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(13, 5, '100percent', NULL, '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(14, 6, 'CUSTOM', '3', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(15, 6, 'CUSTOM', '5', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(16, 6, 'CUSTOM', '7', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(17, 6, 'CUSTOM', '10', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(18, 6, 'CUSTOM', '13', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(19, 7, 'CUSTOM', '25', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(20, 7, 'CUSTOM', '26', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(21, 7, 'CUSTOM', '27', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(22, 7, 'CUSTOM', '28', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(23, 7, 'CUSTOM', '29', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(24, 7, 'CUSTOM', '30', '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(25, 8, '100percent', NULL, '2017-04-01 09:32:44');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(26, 9, 'trueorfalse', NULL, '2017-04-01 09:49:26');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(27, 10, 'trueorfalse', NULL, '2017-04-01 09:49:26');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(28, 11, 'months', NULL, '2017-04-01 09:49:46');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(29, 12, '100percent', NULL, '2017-04-01 09:49:46');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(30, 13, '100percent', NULL, '2017-04-01 09:49:55');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(31, 14, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(32, 15, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(33, 16, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(34, 17, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(35, 18, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(36, 19, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(37, 20, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(38, 21, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(39, 22, 'trueorfalse', NULL, '2017-04-01 20:37:19');
INSERT INTO `choices` (`id`, `question_id_fk`, `optiontype`, `text`, `createdat`) VALUES(40, 23, 'trueorfalse', NULL, '2017-04-01 20:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id_fk` int(11) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `body` varchar(255) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `comment_fk0` (`quiz_id_fk`),
  KEY `comment_fk1` (`user_id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id_fk` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `byline` varchar(255) DEFAULT NULL,
  `correctanswer` varchar(50) NOT NULL,
  `answerwriteup` text,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `quiz_id_fk` (`quiz_id_fk`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(4, 3, 'How many marriages were there in 2014?', '[Including civil and Muslim marriages registered in Singapore]', '28322', 'A total of 28,322 couples tied the knot last year, down from the 28,407 marriages registered in 2014. The number of Muslim marriages rose from 5,544 to 5,778, helping to mitigate the decline in the number of civil marriages from 22,863 to 22,544.', '2017-04-01 09:00:04');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(5, 3, 'What percentage of divorcees are men over 45 years old?', NULL, '42', 'Among men, the proportion of divorcees aged 45 years and above rose from 30 per cent in 2005 to 42.4 per cent in 2015. For women, the proportion rose from 20.1 per cent to 27.5 per cent. [http://www.channelnewsasia.com/news/singapore/more-getting-divorced/2953168.html]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(6, 3, 'For those who divorced, how long did the marriage last before divorce?', '[Median number of years]', '10', 'Marriages also did not last as long, with the median marriage duration for divorces in 2015 at 10 years, slightly shorter than the 10.4 years in 2014. [http://www.channelnewsasia.com/news/singapore/more-getting-divorced/2953168.html]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(7, 3, 'What age do most women get married?', '[Median age]', '28', 'Many are choosing to marry later, with the median age for marrying rising from 29.8 years old in 2005 to 30.3 years old for grooms in 2015, and from 26.9 years old to 28.2 years old for brides. [http://www.channelnewsasia.com/news/singapore/more-getting-divorced/2953168.html]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(8, 3, 'What percentage of marriages are inter-ethnic?', NULL, '22', 'Inter-ethnic marriages have become more common, making up 21.5 per cent of marriages in 2015, up from 14.9 per cent in 2005. Such marriages made up a larger proportion among Muslim marriages (33.8 per cent) than among civil marriages (18.4 per cent) last year.[http://www.channelnewsasia.com/news/singapore/more-getting-divorced/2953168.html]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(9, 3, 'Divorcing must parents in Singapore attend a Mandatory Parenting Programme first.', NULL, 'True', 'The Mandatory Parenting Programme is a one-to-one consultation session for parents with minor children before they file for divorce. It is designed to encourage divorcing couples make informed decisions that prioritise the well-being of children. [https://www.msf.gov.sg/Divorce-Support/Pages/Mandatory-Parenting-Programme.aspx]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(10, 3, 'Singaporeans are entitled to 2 weeks of Marital Leave for their wedding and honeymoon.', NULL, 'False', 'There''s no such thing as Marital Leave. Couples planning their weddings and honeymoon must use their normal annual leave.', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(11, 3, 'Which is the most popular month to get married in?', '[Based on 2006, 2007, 2008 data]', 'December', 'December was the most popular\r\nmonth for marriage in 2008? A total\r\nof 24,596 marriages were registered in 2008, of which 2,867 (or 12 per cent) occurred in December (Chart 1). November was the next popular month for marriage, followed by September. December was also the most popular month for marriage in 2006 and 2007. [http://www.singstat.gov.sg/docs/default-source/default-document-library/publications/publications_and_papers/marriages_and_divorces/ssnmar09-pg18-19.pdf]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(12, 3, 'What percent of individuals between 25-29 years old are unmarried?', '[2016 data]', '71', 'Singles now make up over 70% of those in 25-29 age group. [http://www.straitstimes.com/singapore/more-young-people-in-singapore-staying-single]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(13, 3, 'What percent of marriages are between a Singaporean and a Foreigner?', NULL, '36', 'About one in every three marriages in 2015 was between a Singapore citizen and a foreigner. [http://mothership.sg/2016/09/1-in-3-marriages-these-days-between-sporean-foreigner/]', '2017-04-01 09:24:54');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(14, 4, '"President Tan invites Thailand''s new king to visit Singapore to eat KFC"', '[Circulated on Facebook in Dec 2016]', 'False', 'A Facebook post was circulated in which the headline of a Straits Times article, on President Tony Tan Keng Yam conveying his best wishes to Thailand''s new King and inviting him to visit Singapore, had been modified.', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(15, 4, '"Roof of Punggol Waterway Terraces Collapses!"', '[Posted on All Singapore Stuff in Nov 2016]', 'False', 'Claims that the roof of Punggol Waterway Terraces has collapsed are a hoax, the Housing and Development Board said on Friday evening (Nov 11)...Police and Singapore Civil Defence Force officers had set up a cordon, but the incident was confirmed to be a false alarm.', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(16, 4, '"Kim Jong-un throws dance party to celebrate North Korea missile launch"', '[Reported in The Independent in Aug 2016]', 'True', 'North Korea celebrated its “Military First” holiday and the recent success of its ballistic missile testing with mass dances and a series of outdoor concerts in Pyongyang. State television broadcasts and newspaper front pages hailed the submarine-launched missile, which represented a giant leap in North Korean military technology. In response, traditional mass dancing demonstrations were held across the country, the biggest taking place in the capital''s Kim Il-sung Square.\r\n\r\nhttp://www.independent.co.uk/news/world/asia/north-korea-missile-test-kim-jong-un-pyongyang-japan-military-first-holiday-a7210806.html', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(17, 4, '"This reunion meal costs $240,000 - as much as a 3-room HDB flat"', '[Facebook post, Feb 2017]', 'False', 'At first glance, the video has all the trappings of an opulent dinner that fits a $240,000 bill: A private room, a massive table, a wide lazy susan surrounding a huge steamer containing Chinese delicacies and seafood. And to make things more posh, waiters line up in rows to serve guests at the table while a dedicated restaurant staff can be heard describing the dishes through the sound system.Except that the video is not related to Singapore''s priciest meal - the latest of such deceptive news flooding the Facebook timelines of unsuspecting netizens, this time leeching on the buzz created by a photo of the $240,000 Feng Shui Inn receipt. Alert netizens were quick to flag out that the restaurant in the video was serving Taiwanese cuisine, while Feng Shui Inn serves Cantonese cuisine. \r\n', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(18, 4, '"Indonesian mayor says canned formula milk and instant noodles ''are making babies gay''"', '[Speech reported in OkeZone in Feb 2016]', 'True', 'Original article: http://news.okezone.com/read/2016/02/24/338/1319892/ini-komentar-wali-kota-tangerang-tanggapi-lgbt\r\nAustralian report: http://www.dailymail.co.uk/news/article-3466712/Instant-noodles-milk-formula-making-babies-gay-Indonesian-mayor.html', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(19, 4, '"M’sia police recruitment ad uses S’porean actor Elvin Ng photo. M’sia Boleh."', '[From Mothership Jan 2017]', 'False', 'An alleged Royal Malaysian Police (PDRM) recruitment advertisement featuring a Singaporean actor in full police gear and which was shared on social media, is a hoax. PDRM corporate communications head Asmawati Ahmad confirmed this with FMT, saying that the idea of using a Singaporean actor in any of its advertisements was absolutely nonsensical.', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(20, 4, '"Feng Tianwei beats world no. 1 after being kicked out of S’pore Table Tennis Association"', '[From Mothership in Dec 2016]', 'True', 'Singapore table tennis star Feng Tianwei created shockwaves in the Chinese Table Tennis Super League on Sunday (Dec 4). The 30-year-old, representing the club Ordos 1980, shocked Olympic champion and world No.1 Ding Ning 12-10, 13-15, 2-11, 11-7, 7-5 yesterday. Ding was representing her club Beijing Shougang in the competition.\r\nhttp://www.straitstimes.com/sport/table-tennis-feng-tianwei-shocks-world-no-1-ding-ning-in-chinese-super-league', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(21, 4, '"PM Lee presented with traditional gift horse during ASEM summit in Mongolia"', '[Reported in Channel NewsAsia Jul 2016]', 'True', 'Mongolian President Tsakhia Elbegdorj presented horses to leaders during ASEM, and Mr Lee said he has named his horse Bintang Temasek (Star of Temasek) in his Facebook page on Saturday (Jul 16). http://www.channelnewsasia.com/news/singapore/pm-lee-presented-with/2961892.html', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(22, 4, '"Indian towns plan statue, museum on Mr Lee Kuan Yew"', '[Straits Times Apr 2015]', 'True', 'NEARLY 7,000km away from Singapore, in the southern Indian state of Tamil Nadu, one town is planning to build a large brass statue of Mr Lee Kuan Yew and a memorial hall to remember him by. Another town is creating a museum on his life and achievements. http://www.straitstimes.com/singapore/indian-towns-plan-statue-museum-on-mr-lee-kuan-yew', '2017-04-01 20:35:56');
INSERT INTO `questions` (`id`, `quiz_id_fk`, `text`, `byline`, `correctanswer`, `answerwriteup`, `createdat`) VALUES(23, 4, '"Huge fire breaks out at waste management plant in Tuas"', '[Straits Times Feb 2017]', 'True', 'It took four hours of "intensive" firefighting by 200 Singapore Civil Defence Force (SCDF) firefighters to extinguish an enormous fire involving chemical waste and flammable materials at a waste management plant on Thursday morning (Feb 23).\r\nhttp://www.channelnewsasia.com/news/singapore/huge-fire-breaks-out-at-waste-management-plant-in-tuas/3542722.html\r\nHowever, a fake video was circulated online of a fire recorded elsewhere. http://www.channelnewsasia.com/news/singapore/tuas-fire-fake-video-spreads-like-wildfire-on-social-media/3544666.html', '2017-04-01 20:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `numparticipants` int(11) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `name`, `description`, `numparticipants`, `createdat`) VALUES(3, 'Marriage & Divorce', 'How well do you know the truth about marriage and divorce in Singapore? Test your knowledge against surprising statistics and policy to see if you can emerge on top!', 53, '2017-04-01 08:23:45');
INSERT INTO `quizzes` (`id`, `name`, `description`, `numparticipants`, `createdat`) VALUES(4, 'Fake News Headlines?', 'You may have seen these headline on your social media feed at some point. How well can you tell fact from fiction, when it comes to the news? As the world gets weirder and weirder, sometimes it''s hard to tell the difference. Test yourself here!', 10, '2017-04-01 19:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(55) NOT NULL,
  `ipaddress` varchar(25) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `race` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE IF NOT EXISTS `user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id_fk` int(11) NOT NULL,
  `choice_id_fk` int(11) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `question_id_fk` (`question_id_fk`),
  KEY `choice_id_fk` (`choice_id_fk`),
  KEY `choice_id_fk_2` (`choice_id_fk`),
  KEY `user_id_fk` (`user_id_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_answers`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answer_fk0` FOREIGN KEY (`quiz_id_fk`) REFERENCES `quizzes` (`id`);

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `choice_fk0` FOREIGN KEY (`question_id_fk`) REFERENCES `questions` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_fk0` FOREIGN KEY (`quiz_id_fk`) REFERENCES `quizzes` (`id`),
  ADD CONSTRAINT `comment_fk1` FOREIGN KEY (`user_id_fk`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `question_fk0` FOREIGN KEY (`quiz_id_fk`) REFERENCES `quizzes` (`id`);

--
-- Constraints for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answer_fk0` FOREIGN KEY (`question_id_fk`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `user_answer_fk1` FOREIGN KEY (`choice_id_fk`) REFERENCES `choices` (`id`),
  ADD CONSTRAINT `user_answer_fk2` FOREIGN KEY (`user_id_fk`) REFERENCES `users` (`id`);
