-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 16, 2013 at 08:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `pubdate` date NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `pubdate`, `body`, `created`, `modified`) VALUES
(1, 'First post', 'booting-up', '2013-08-04', '<p>Booted up kalsdjflkjdsflkjasdlfkjasldkfjl kajslkfjaslkjflkasjdljf adjf lkaslkf jasljfla ksjfdlkjasd jflkadjfkl aslkf jaslfjkl asjfkladfj kaslfdjalksjf lksadfj</p>', '2013-08-04 02:42:09', '2013-08-04 02:42:32'),
(2, 'UP', 'DOWN', '2013-07-24', '<p>RIGHT</p>', '2013-08-04 02:42:21', '2013-08-04 02:45:57'),
(4, 'WEBSITE', 'website', '2013-08-01', '<p>dslkjf lksjfd lasdjf lksdfj laskj kdsf kadlfj lak jdf ewo ij lskdj oeiwj lskjdfl </p>', '2013-08-04 00:00:00', '2013-08-04 00:00:00'),
(6, 'Another news', 'sleep', '2013-08-02', 'Sleep!', '2013-08-04 00:00:00', '2013-08-04 00:00:00'),
(7, 'HEADLINE', 'HEADLINE', '2013-08-04', 'HEADLINE', '2013-08-04 00:00:00', '2013-08-15 00:00:00'),
(8, 'news', 'news', '2013-08-04', '<p>aslkfj</p>', '2013-08-04 00:00:00', '2013-08-06 01:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE IF NOT EXISTS `ask` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `ask` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `correct_answer` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`id`, `title`, `ask`, `group`, `difficulty`, `correct_answer`, `choice1`, `choice2`, `choice3`) VALUES
(5, 'Heat Transfer', 'What type of heat transfer is responsible for the formation of sea breeze and land breeze?', 'Science', 'Difficult', 'Convection', 'Radiation', 'Condensation', 'Conduction'),
(6, '!Fuel Source', 'Which of the following is not fuel source?', 'Science', 'Easy', 'Wood', 'Crude Oil', 'Coal', 'Battery'),
(8, 'Volume of Substances', 'Substance A is twice as dense as substance B. If we take the samples of equal mass of these substances, what can be observed about their volume?', 'Science', 'Normal', 'The volume of substance B is twice that of substance A.', 'The volume of substance A is twice that of substance B.', 'The volume of both A and B is the same since the samples have the same mass.', 'No conclusion can be provided about the volume of A and B.'),
(9, 'Jupiter''s Great Red Spot', 'The Great Red Spot of Jupiter is a/ an ___________.', 'Science', 'Easy', 'Intense wind storm', 'Sink hole bigger than Earth', 'Sea of red water due to algae formations', 'Flaming field');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('7e6631dbdb2528e33302ee7835bbbb6b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.66 Safari/537.36', 1379362878, ''),
('a329f902af0ae56f8253cd48de82aa3d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0', 1379362773, 'a:7:{s:9:"user_data";s:0:"";s:5:"fname";s:6:"Mireya";s:5:"lname";s:6:"Andres";s:8:"username";s:7:"meyagen";s:5:"email";s:25:"mireyagenandres@gmail.com";s:2:"id";s:2:"30";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `gen_exam`
--

CREATE TABLE IF NOT EXISTS `gen_exam` (
  `username` varchar(100) NOT NULL,
  `sequence` text NOT NULL,
  `answers` text NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(128) CHARACTER SET utf8 NOT NULL,
  `temp_password` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `email_address` varchar(100) CHARACTER SET utf8 NOT NULL,
  `scores` text,
  `activate` varchar(5) CHARACTER SET utf8 NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `temp_password`, `email_address`, `scores`, `activate`) VALUES
(1, 'Earle', 'Bunao', 'gardevior411', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', 'd7072ac632af04a2d16fe5e142c03460e018e39641e19ef512f0821156cbae0f8784f582267140ebc7253a9672f1d15b9feee439a0d693d0967220fbf93c7cdb', 'gardevior_erb411@yahoo.com', 'a:4:{i:0;i:3;i:1;i:3;i:2;i:4;i:3;i:4;}', 'true'),
(30, 'Mireya', 'Andres', 'meyagen', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', '4dd75150ac271596346f856a877c5f008aa2af7aa6131091b4bde3524a83a95bf9762160dbbb810ae75a62e60035cc1947c7fe402888dba364688ee778ce389b', 'mireyagenandres@gmail.com', 'a:3:{i:0;i:2;i:1;i:4;i:2;i:4;}', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `order` int(11) unsigned NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  `parent_id` int(11) unsigned NOT NULL,
  `template` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `order`, `body`, `parent_id`, `template`) VALUES
(1, 'Homepage', '', 1, '<p>lorem</p>', 0, 'homepage'),
(6, 'Contact', 'contact', 2, '<p>contact</p>', 0, 'page'),
(7, 'About', 'about', 3, '<p>try</p>', 6, 'page'),
(8, 'News archive', 'News-archive', 5, '<p>archive</p>', 0, 'news_archive'),
(9, 'trial', 'trial', 4, '<p>trial</p>', 6, 'news_archive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `temp_password` varchar(128) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `temp_password`, `name`) VALUES
(1, 'earle.bunao@gmail.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', NULL, 'Earle Bunao'),
(2, 'rowel_26@yahoo.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', NULL, 'Rowel'),
(3, 'meya@yahoo.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', NULL, 'Mireya Gen Andres');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
