-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2015 at 02:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `codename`
--

CREATE TABLE IF NOT EXISTS `codename` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`number`,`code`),
  KEY `codename_course_id_index` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `correct`
--

CREATE TABLE IF NOT EXISTS `correct` (
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ta_id` int(10) unsigned NOT NULL,
  `del_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ta_id`),
  KEY `correct_ta_id_index` (`ta_id`),
  KEY `correct_del_id_index` (`del_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dept_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_dept_id_index` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `deliverables`
--

CREATE TABLE IF NOT EXISTS `deliverables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `deadline` varchar(255) COLLATE utf8_bin NOT NULL,
  `ta_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `deliverables_ta_id_index` (`ta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `join`
--

CREATE TABLE IF NOT EXISTS `join` (
  `student_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`student_id`,`course_id`),
  KEY `join_student_id_index` (`student_id`),
  KEY `join_course_id_index` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `fname` varchar(255) COLLATE utf8_bin NOT NULL,
  `mname` varchar(255) COLLATE utf8_bin NOT NULL,
  `lname` varchar(255) COLLATE utf8_bin NOT NULL,
  `dept_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persons_email_unique` (`email`),
  KEY `persons_dept_id_index` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `prof_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `resources_prof_id_index` (`prof_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `respond`
--

CREATE TABLE IF NOT EXISTS `respond` (
  `msg` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `student_id` int(10) unsigned NOT NULL,
  `stuff_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`student_id`,`stuff_id`,`msg`,`created_at`,`updated_at`),
  KEY `respond_student_id_index` (`student_id`),
  KEY `respond_stuff_id_index` (`stuff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE IF NOT EXISTS `send` (
  `msg` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `student_id` int(10) unsigned NOT NULL,
  `stuff_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `send_student_id_index` (`student_id`,`stuff_id`,`msg`,`created_at`,`updated_at`),
  KEY `send_stuff_id_index` (`stuff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `studyingyear` varchar(255) COLLATE utf8_bin NOT NULL,
  `person_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `students_person_id_index` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stuffs`
--

CREATE TABLE IF NOT EXISTS `stuffs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `person_id` int(10) unsigned NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `dept_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stuffs_phone_unique` (`phone`),
  KEY `stuffs_person_id_index` (`person_id`),
  KEY `stuffs_course_id_index` (`course_id`),
  KEY `stuffs_dept_id_index` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE IF NOT EXISTS `submit` (
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `student_id` int(10) unsigned NOT NULL,
  `del_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `submit_student_id_index` (`student_id`),
  KEY `submit_del_id_index` (`del_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `ta_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tutorials_ta_id_index` (`ta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `codename`
--
ALTER TABLE `codename`
  ADD CONSTRAINT `codename_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `correct`
--
ALTER TABLE `correct`
  ADD CONSTRAINT `correct_del_id_foreign` FOREIGN KEY (`del_id`) REFERENCES `deliverables` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `correct_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deliverables`
--
ALTER TABLE `deliverables`
  ADD CONSTRAINT `deliverables_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `join`
--
ALTER TABLE `join`
  ADD CONSTRAINT `join_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `join_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_prof_id_foreign` FOREIGN KEY (`prof_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `respond`
--
ALTER TABLE `respond`
  ADD CONSTRAINT `respond_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `respond_stuff_id_foreign` FOREIGN KEY (`stuff_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `send`
--
ALTER TABLE `send`
  ADD CONSTRAINT `send_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`person_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `send_stuff_id_foreign` FOREIGN KEY (`stuff_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stuffs`
--
ALTER TABLE `stuffs`
  ADD CONSTRAINT `stuffs_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stuffs_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stuffs_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submit`
--
ALTER TABLE `submit`
  ADD CONSTRAINT `submit_del_id_foreign` FOREIGN KEY (`del_id`) REFERENCES `deliverables` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `submit_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD CONSTRAINT `tutorials_ta_id_foreign` FOREIGN KEY (`ta_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
