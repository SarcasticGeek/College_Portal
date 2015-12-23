-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 03:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE IF NOT EXISTS `ask` (
  `s_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`s_id`,`t_id`,`question`,`answer`,`updated_at`,`created_at`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name_code` char(6) NOT NULL,
  `dep_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_code` (`name_code`),
  KEY `dep_id` (`dep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `name_code`, `dep_id`) VALUES
(1, 'simulation', 'cse100', 1),
(2, 'Operating system', 'cse101', 1),
(3, 'database', 'cse411', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deliverable`
--

CREATE TABLE IF NOT EXISTS `deliverable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brief_desc` varchar(255) DEFAULT NULL,
  `des_link` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `des_link` (`des_link`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(1, 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `joined`
--

CREATE TABLE IF NOT EXISTS `joined` (
  `student_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  PRIMARY KEY (`student_id`,`c_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joined`
--

INSERT INTO `joined` (`student_id`, `c_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `email`, `password`, `fname`, `mname`, `lname`) VALUES
(1, 'kashif@kashif.com', '123456', 'kashif', 'kashif', 'kashif'),
(2, 'essam@essam.com', '123456', 'essam', 'essam', 'essam'),
(3, 'hatem@hatem.com', '123456', 'hatem', 'hatem', 'hatem'),
(4, 'hussin@hussin.com', '123456', 'hussin', 'hussin', 'hussin'),
(5, 'mabrook@mabrook.com', '123456', 'mabrook', 'mabrook', 'mabrook'),
(6, 'mona@mona.com', '123456', 'mona', 'mona', 'mona');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE IF NOT EXISTS `resource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `link` (`link`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `p_id` int(10) NOT NULL,
  `studyingyear` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`p_id`, `studyingyear`) VALUES
(1, 'second'),
(2, 'second'),
(3, 'second');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE IF NOT EXISTS `stuff` (
  `p_id` int(10) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dep_id` int(10) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `phone` (`phone`),
  KEY `dep_id` (`dep_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`p_id`, `phone`, `dep_id`) VALUES
(4, '011', 1),
(5, '012', 1),
(6, '013', 1);

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE IF NOT EXISTS `submit` (
  `sd_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `creatd_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ans_link` varchar(255) NOT NULL,
  PRIMARY KEY (`sd_id`,`d_id`,`c_id`),
  UNIQUE KEY `ans_link` (`ans_link`),
  KEY `c_id` (`c_id`),
  KEY `d_id` (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE IF NOT EXISTS `teach` (
  `st_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  PRIMARY KEY (`st_id`,`c_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`st_id`, `c_id`) VALUES
(4, 1),
(5, 1),
(4, 2),
(4, 3),
(6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `upload_d`
--

CREATE TABLE IF NOT EXISTS `upload_d` (
  `st_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`st_id`,`c_id`,`d_id`),
  KEY `c_id` (`c_id`),
  KEY `d_id` (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_r`
--

CREATE TABLE IF NOT EXISTS `upload_r` (
  `st_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`st_id`,`c_id`,`r_id`),
  KEY `c_id` (`c_id`),
  KEY `r_id` (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ask`
--
ALTER TABLE `ask`
  ADD CONSTRAINT `ask_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ask_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `joined`
--
ALTER TABLE `joined`
  ADD CONSTRAINT `joined_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joined_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stuff`
--
ALTER TABLE `stuff`
  ADD CONSTRAINT `stuff_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stuff_ibfk_2` FOREIGN KEY (`dep_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submit`
--
ALTER TABLE `submit`
  ADD CONSTRAINT `submit_ibfk_1` FOREIGN KEY (`sd_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submit_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `submit_ibfk_3` FOREIGN KEY (`d_id`) REFERENCES `deliverable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `teach_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload_d`
--
ALTER TABLE `upload_d`
  ADD CONSTRAINT `upload_d_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_d_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_d_ibfk_3` FOREIGN KEY (`d_id`) REFERENCES `deliverable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upload_r`
--
ALTER TABLE `upload_r`
  ADD CONSTRAINT `upload_r_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_r_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `upload_r_ibfk_3` FOREIGN KEY (`r_id`) REFERENCES `deliverable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
