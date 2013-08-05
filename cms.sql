-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2013 at 03:27 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

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
(8, 'news', 'news', '2013-08-04', 'aslkfj', '2013-08-04 00:00:00', '2013-08-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE IF NOT EXISTS `ask` (
  `int` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ask` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `difficulty` int(1) NOT NULL,
  `correct_answer` text NOT NULL,
  `choice1` text NOT NULL,
  `choice2` text NOT NULL,
  `choice3` text NOT NULL,
  `choice4` text NOT NULL,
  PRIMARY KEY (`int`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`int`, `ask`, `group`, `difficulty`, `correct_answer`, `choice1`, `choice2`, `choice3`, `choice4`) VALUES
(1, 'what is your name?', 'general', 1, 'earle', 'earl', 'randy', 'rol', 'earle'),
(2, 'what is your age', 'general', 1, '18', '4', '9', '10', '18');

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
('f556dd313211d8ee114ad94aada42ef6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', 1375714536, '');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `email_address`) VALUES
(1, 'mireya', 'andres', 'meyaaa', 'password', 'mireya@yahoo.com'),
(2, 'Rowel', 'Ventura', 'rdventura2', 'b2d4c0c55c26569158fa38ff98aa60ab', 'rowel_26@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(6);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `order`, `body`, `parent_id`, `template`) VALUES
(1, 'Homepage', '', 1, '<p>lorem</p>', 0, 'homepage'),
(6, 'Contact', 'contact', 2, '<p>contact</p>', 0, 'page'),
(7, 'About', 'about', 3, '<p>try</p>', 0, 'page'),
(8, 'News archive', 'News-archive', 4, '<p>archive</p>', 0, 'news_archive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'earle.bunao@gmail.com', '1a5c2855eb0797466fa3e5fba0bac33f335c1f1b9f14840bf295bf7fdf3f03192bb0b0c7f14f5292c21d99e8924095e8300e181936f658f7440d11638c389443', 'Earle Bunao'),
(2, 'rowel_26@yahoo.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', 'Rowel'),
(4, 'meya@yahoo.com', '467356c24f7ea20aa1aa18360cb50c68c70f58967863772b3a4e111a4162dcd4c46e3e715387926de9a59389d191cd681e0a2d339e45f37b08b63535df03aab2', 'Mireya Gen Andres');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
