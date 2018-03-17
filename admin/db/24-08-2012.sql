-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2012 at 09:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db415795393`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE IF NOT EXISTS `tbl_apply` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `ml` float NOT NULL,
  `cl` float NOT NULL,
  `el` float NOT NULL,
  `employee_id` int(4) NOT NULL,
  `applied_on` datetime NOT NULL,
  `leave_type` varchar(15) NOT NULL,
  `from_date` date NOT NULL,
  `start_sess` varchar(9) NOT NULL,
  `till_date` date NOT NULL,
  `end_sess` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`id`, `ml`, `cl`, `el`, `employee_id`, `applied_on`, `leave_type`, `from_date`, `start_sess`, `till_date`, `end_sess`) VALUES
(1, 0.5, 0, 0, 4, '2012-08-23 04:08:32', 'm', '2012-08-23', 'session_2', '2012-08-23', 'session_2'),
(2, 0.5, 0, 0, 4, '2012-08-23 04:08:32', 'm', '2012-08-23', 'session_2', '2012-08-23', 'session_2'),
(3, 0.5, 0, 0, 4, '2012-08-23 04:08:32', 'm', '2012-08-23', 'session_2', '2012-08-23', 'session_2'),
(4, 0, 0.5, 0, 4, '2012-08-23 04:08:31', 'c', '2012-08-24', 'session_2', '2012-08-24', 'session_2'),
(5, 0, 0, 2, 4, '2012-08-23 04:08:31', 'e', '2012-08-25', 'session_1', '2012-08-24', 'session_2'),
(6, 0.5, 0, 0, 4, '2012-08-23 04:08:03', 'm', '2012-08-23', 'session_2', '2012-08-23', 'session_2'),
(7, 0, 0, 0.5, 4, '2012-08-23 04:08:09', 'e', '2012-08-23', 'session_2', '2012-08-23', 'session_2'),
(8, 0, 0, 1, 4, '2012-08-23 04:08:46', 'e', '2012-08-23', 'session_1', '2012-08-23', 'session_2'),
(9, 0, 0, 0.5, 3, '2012-08-24 11:08:38', 'e', '2012-08-25', 'session_2', '2012-08-25', 'session_2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign`
--

CREATE TABLE IF NOT EXISTS `tbl_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_assign`
--

INSERT INTO `tbl_assign` (`id`, `project_id`, `user_id`, `create_date`) VALUES
(1, 3, 0, '2012-08-16 14:53:20'),
(3, 1, 1, '2012-08-16 14:53:48'),
(5, 5, 7, '2012-08-16 15:47:48'),
(6, 0, 0, '2012-08-16 17:48:19'),
(7, 0, 0, '2012-08-16 17:48:35'),
(8, 3, 0, '2012-08-16 17:50:59'),
(9, 3, 0, '2012-08-16 17:50:59'),
(10, 3, 2, '2012-08-16 17:51:43'),
(11, 2, 4, '2012-08-16 17:52:35'),
(12, 2, 0, '2012-08-16 17:57:40'),
(13, 3, 0, '2012-08-16 17:58:04'),
(14, 3, 0, '2012-08-16 17:58:04'),
(15, 3, 0, '2012-08-16 18:01:30'),
(17, 3, 4, '2012-08-16 18:01:58'),
(18, 2, 0, '2012-08-16 18:03:00'),
(19, 3, 6, '2012-08-16 18:03:59'),
(21, 2, 0, '2012-08-16 18:30:40'),
(22, 2, 1, '2012-08-16 18:33:46'),
(23, 3, 5, '2012-08-16 19:14:09'),
(24, 3, 7, '2012-08-16 19:14:24');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `employee_name`, `employee_role`, `user_name`, `password`, `email_id`, `created_date`) VALUES
(1, 'Admin', 1, 'admin', 'admin', 'sameer@3brainz.com', '2011-12-07 18:16:52'),
(2, 'saurabh', 4, 'saurabh', 'saurabh123', 'saurabhk@3brainz.com', '2011-12-07 18:18:08'),
(3, 'sumit', 4, 'sumit', 'sumit123', 'sumits@3brainz.com', '2011-12-07 18:18:35'),
(4, 'Gaurav Pal', 4, 'gaurav', 'gaurav123', 'gaurav@3brainz.com', '2012-05-14 12:43:08'),
(5, 'Kamlesh Rai', 4, 'kamlesh', 'kamlesh123', 'kamlesh@3brainz.com', '2012-07-30 17:31:08'),
(6, 'Vijay Negi', 4, 'Vijay', 'vijay123', 'vijay@3brainz.com', '2012-08-01 16:16:31'),
(7, 'narender kumar', 3, 'narender', 'narender12', 'narender@gmail.com', '2012-08-08 15:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE IF NOT EXISTS `tbl_holiday` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `holiday_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `project_name`, `client_name`, `created_date`) VALUES
(1, 'Admin', 'Sameer Pal Singh', '2012-08-06 19:45:58'),
(2, 'Humraahi', 'Sameer Pal Singh', '2012-08-06 19:46:16'),
(3, 'USEATERY', 'Sameer Pal Singh', '2012-08-06 19:46:30'),
(4, 'skype', 'Sameer Pal Singh', '2012-08-06 19:46:48'),
(5, 'Wisetime', 'Sanjeev', '2012-08-06 19:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_role` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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
  `project_name` int(4) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `duration` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_welcome`
--

INSERT INTO `tbl_welcome` (`id`, `employee_id`, `project_name`, `description`, `start_time`, `end_time`, `duration`) VALUES
(1, 4, 5, 'workkjhldhgfkhgkldjhkdfhggfjhf', '2012-08-16 14:54:27', '2012-08-16 14:54:40', '0000-00-00 00:00:00'),
(2, 4, 5, 'gthglthgkkryiytrivr', '2012-08-16 14:54:40', '2012-08-16 14:54:43', '0000-00-00 00:00:00'),
(3, 3, 4, 'hlf kmh;jgj', '2012-08-16 14:55:09', '2012-08-16 14:55:15', '0000-00-00 00:00:00'),
(4, 3, 4, 'hfhgnhgfjmh', '2012-08-16 14:55:15', '2012-08-16 14:55:17', '0000-00-00 00:00:00'),
(5, 5, 3, 'fgkgf hn ,gfhn', '2012-08-16 14:55:36', '2012-08-16 14:55:43', '0000-00-00 00:00:00'),
(6, 5, 3, 'f dghnhmnjg', '2012-08-16 14:55:43', '2012-08-16 14:55:44', '0000-00-00 00:00:00'),
(7, 6, 2, 'yhytlhjry.ljhtl jjytohj yoh', '2012-08-16 14:56:10', '2012-08-16 14:56:17', '0000-00-00 00:00:00'),
(8, 6, 2, 'jhggjgjkyu daskjhb', '2012-08-16 14:56:17', '2012-08-16 14:56:20', '0000-00-00 00:00:00'),
(9, 4, 3, 'hhcfjhgjgvk', '2012-08-16 15:48:09', '2012-08-16 15:48:09', '0000-00-00 00:00:00'),
(10, 4, 3, 'hhcfjhgjgvk', '2012-08-16 15:48:09', '2012-08-16 15:48:23', '0000-00-00 00:00:00'),
(11, 4, 3, 'nmvmjm', '2012-08-16 15:48:23', '2012-08-16 15:54:26', '0000-00-00 00:00:00'),
(12, 1, 1, 'dbksbfjdbd\r\n', '2012-08-16 18:27:36', '2012-08-16 18:27:37', '0000-00-00 00:00:00'),
(13, 1, 1, 'dbksbfjdbd\r\n', '2012-08-16 18:27:37', '2012-08-16 18:27:59', '0000-00-00 00:00:00'),
(14, 1, 1, 'gbgfhfjf', '2012-08-16 18:27:59', '2012-08-16 19:13:09', '0000-00-00 00:00:00'),
(15, 4, 2, 'hnhnhgj', '2012-08-16 18:40:39', '2012-08-16 18:40:39', '0000-00-00 00:00:00'),
(16, 4, 2, 'hnhnhgj', '2012-08-16 18:40:39', '2012-08-16 18:40:43', '0000-00-00 00:00:00'),
(17, 4, 2, 'jkjhk', '2012-08-20 10:00:28', '2012-08-20 10:00:32', '0000-00-00 00:00:00'),
(18, 1, 2, 'jugjkkh', '2012-08-22 15:36:07', '2012-08-22 15:36:07', '0000-00-00 00:00:00'),
(19, 1, 2, 'jugjkkh', '2012-08-22 15:36:07', '2012-08-23 16:47:42', '0000-00-00 00:00:00'),
(20, 4, 2, 'GFRGRGGSG', '2012-08-23 16:48:59', '2012-08-23 16:49:09', '0000-00-00 00:00:00'),
(21, 4, 3, 'EEEEEEEEEE', '2012-08-23 16:49:09', '2012-08-23 16:49:40', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
