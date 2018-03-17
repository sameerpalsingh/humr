-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2011 at 01:23 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timesheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(100) NOT NULL,
  `employee_role` tinyint(3) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `employee_name`, `employee_role`, `user_name`, `password`, `email_id`, `created_date`) VALUES
(1, 'Admin', 1, 'admin', 'admin', 'sameer@3brainz.com', '2011-12-07 18:16:52'),
(2, 'saurabh', 4, 'saurabh', 'saurabh123', 'saurabhk@3brainz.com', '2011-12-07 18:18:08'),
(3, 'sumit', 4, 'sumit', 'sumit123', 'sumits@3brainz.com', '2011-12-07 18:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `project_name`, `client_name`, `created_date`) VALUES
(1, 'admin', 'boss', '2011-12-07 18:18:58'),
(2, 'ECOM', 'gary', '2011-12-07 18:19:18'),
(3, 'wisetime', 'sumit', '2011-12-07 18:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_role` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `employee_role`, `created_date`) VALUES
(1, 'admin', '2011-12-07 18:15:41'),
(2, 'designer', '2011-12-07 18:15:51'),
(3, 'marketing', '2011-12-07 18:15:59'),
(4, 'developer', '2011-12-07 18:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_welcome`
--

CREATE TABLE IF NOT EXISTS `tbl_welcome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `project_name` tinyint(3) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `duration` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_welcome`
--

INSERT INTO `tbl_welcome` (`id`, `employee_id`, `project_name`, `description`, `start_time`, `end_time`, `duration`) VALUES
(1, 1, 1, 'project under working', '2011-12-07 18:19:51', '2011-12-07 18:19:57', '0000-00-00 00:00:00'),
(2, 2, 2, 'project still working', '2011-12-07 18:20:32', '2011-12-07 18:20:40', '0000-00-00 00:00:00'),
(3, 3, 3, 'project still working admin part completed', '2011-12-07 18:21:12', '2011-12-07 18:21:17', '0000-00-00 00:00:00'),
(4, 1, 1, 'project completed', '2011-12-06 18:29:30', '2011-12-06 18:29:54', '0000-00-00 00:00:00'),
(5, 1, 1, 'new project startjavascript:openCalendar(''token=d4b5d1bc737216e42c8ee4f5308a1e92'',%20''insertForm'',%20''field_6_3'',%20''datetime'')', '2011-12-06 18:29:54', '2011-12-06 18:30:42', '0000-00-00 00:00:00'),
(6, 1, 1, 'task completed\r\n', '2011-12-08 05:31:34', '2011-12-08 05:45:16', '0000-00-00 00:00:00'),
(7, 1, 1, 'new task start\r\n', '2011-12-08 05:46:36', '2011-12-08 07:24:52', '0000-00-00 00:00:00'),
(8, 1, 2, 'project completed', '2011-12-09 05:57:17', '2011-12-09 05:57:27', '0000-00-00 00:00:00'),
(9, 1, 2, 'attend new tasks', '2011-12-09 05:57:27', '2011-12-09 05:57:49', '0000-00-00 00:00:00'),
(10, 1, 3, 'some new pages loaded\r\n', '2011-12-09 05:57:49', '2011-12-09 05:57:53', '0000-00-00 00:00:00'),
(11, 2, 2, 'new projects starts', '2011-12-09 05:58:11', '2011-12-09 05:58:33', '0000-00-00 00:00:00'),
(12, 2, 3, 'doing some features add', '2011-12-09 05:58:33', '2011-12-09 06:00:52', '0000-00-00 00:00:00'),
(13, 1, 3, 'add new time sheet\r\n', '2011-12-09 11:47:22', '2011-12-09 11:47:34', '0000-00-00 00:00:00'),
(14, 2, 2, 'completed completed!!!!!!!!!!!!!', '2011-12-09 11:48:18', '2011-12-09 11:48:22', '0000-00-00 00:00:00'),
(15, 3, 3, 'start my day', '2011-12-09 11:48:36', '2011-12-09 11:48:53', '0000-00-00 00:00:00'),
(16, 3, 3, 'kitni baar karoo yaar', '2011-12-09 11:48:53', '2011-12-09 11:48:58', '0000-00-00 00:00:00'),
(17, 1, 3, 'nwe one!!!!!!!!!!!!!111111', '2011-12-09 12:44:56', '2011-12-09 12:45:04', '0000-00-00 00:00:00');
