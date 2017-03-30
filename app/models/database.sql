-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2017 at 07:28 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `reallymeh`
--
CREATE DATABASE IF NOT EXISTS `reallymeh` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `reallymeh`;

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id_fk` int(11) NOT NULL,
  `optiontype` varchar(50) DEFAULT NULL,
  `choiceanswer` varchar(255) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `question_id_fk` (`question_id_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_id_fk` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `byline` varchar(255) DEFAULT NULL,
  `answerwriteup` varchar(255) DEFAULT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `quiz_id_fk` (`quiz_id_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `numparticipants` int(11) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

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
