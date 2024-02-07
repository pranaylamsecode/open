-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2024 at 06:21 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb3 */;

--
-- Database: `open`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_syllabus`
--

DROP TABLE IF EXISTS `academic_syllabus`;
CREATE TABLE IF NOT EXISTS `academic_syllabus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `academic_syllabus_code` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `class_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uploader_type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uploader_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `session` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` int NOT NULL,
  `file_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_syllabus`
--

INSERT INTO `academic_syllabus` (`id`, `academic_syllabus_code`, `title`, `class_id`, `subject_id`, `description`, `uploader_type`, `uploader_id`, `session`, `timestamp`, `file_name`) VALUES
(4, 'c92aa3b', 'swegft', 2, 4, 'sdfgvhgj', 'admin', '1', '2019-2020', 1701157021, 'index.html'),
(5, 'ad5997a', 'esrdthyuj', 2, 4, 'wedtghyui', 'admin', '1', '2019-2020', 1702487540, 'customer-support.png');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `activity_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `colour` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `icon` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `club_id` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `userfile` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `level` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `login_status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `phone`, `password`, `userfile`, `level`, `login_status`) VALUES
(1, 'Administrator', 'admin@admin.com', '07133445656', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'passport-photo.jpeg', '1', '1'),
(16, 'ankita', 'ankita@gmail.com', '9890987678', 'da54e6c92368d10baaca171faf8dad325c3542d3', '', '2', '0'),
(17, 'sudipa', 'sudipa@gmail.com', '8765432123', '42e6ea9c6e89fbac7d5fe72df4fbeabde334da9c', '', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

DROP TABLE IF EXISTS `admin_role`;
CREATE TABLE IF NOT EXISTS `admin_role` (
  `admin_role_id` int NOT NULL AUTO_INCREMENT,
  `admin_id` int NOT NULL,
  `dashboard` int NOT NULL,
  `manage_academics` int NOT NULL,
  `manage_employee` int NOT NULL,
  `manage_meeting` int NOT NULL,
  `manage_recorded_lecture` int NOT NULL,
  `manage_student` int NOT NULL,
  `manage_attendance` int NOT NULL,
  `download_page` int NOT NULL,
  `manage_parent` int NOT NULL,
  `manage_alumni` int NOT NULL,
  `manage_quiz` int NOT NULL,
  PRIMARY KEY (`admin_role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`admin_role_id`, `admin_id`, `dashboard`, `manage_academics`, `manage_employee`, `manage_meeting`, `manage_recorded_lecture`, `manage_student`, `manage_attendance`, `download_page`, `manage_parent`, `manage_alumni`, `manage_quiz`) VALUES
(4, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(7, 9, 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0),
(8, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1),
(9, 10, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 0),
(10, 11, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `announcement_img` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `title`, `announcement_img`, `created_date`) VALUES
(8, 'JEET/NEET Test Series', '1702101097815841.jpg', '2024-01-16 14:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `subject_id` int NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file_type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `name`, `subject_id`, `class_id`, `teacher_id`, `description`, `file_name`, `file_type`, `timestamp`) VALUES
(1, 'Assignment for Nursery One', 4, 2, 1, 'DESC', 'invoice.docx', 'pdf', '2018-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int NOT NULL AUTO_INCREMENT,
  `status` int NOT NULL COMMENT '0 undefined , 1 present , 2  absent, 3 holiday, 4 half day, 5 late',
  `student_id` int NOT NULL,
  `date` date NOT NULL,
  `session` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `status`, `student_id`, `date`, `session`) VALUES
(39, 1, 45, '2019-12-20', ''),
(40, 1, 45, '2019-12-22', ''),
(41, 1, 45, '2021-12-02', ''),
(42, 2, 45, '2021-12-03', ''),
(43, 4, 45, '2023-11-28', ''),
(44, 0, 45, '2024-01-12', '');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int NOT NULL AUTO_INCREMENT,
  `account_holder_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `account_number` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bank_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `account_holder_name`, `account_number`, `bank_name`, `branch`) VALUES
(2, 'Udemy Instructor', '1234567', 'Payoneer or paypal', 'USA'),
(3, 'Udemy Instructor', '1234567', 'Payoneer or paypal', 'USA'),
(4, 'Udemy Instructor', '1234567', 'Payoneer or paypal', 'USA'),
(5, 'ANKITA', '88765443212345', 'BOI', 'Reshimbag'),
(6, 'ASDFGH', 'SDFGH', 'SDXFCG', 'XDFDGH');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `author_id` int NOT NULL,
  `publisher_id` int NOT NULL,
  `book_category_id` int NOT NULL,
  `isbn` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `edition` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `subject_id` int NOT NULL,
  `quantity` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` int NOT NULL,
  `class_id` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `description`, `author_id`, `publisher_id`, `book_category_id`, `isbn`, `edition`, `subject_id`, `quantity`, `timestamp`, `class_id`, `status`, `price`) VALUES
(1, 'Advance Java.', 'This is the newly released book by Sheg', 2, 1, 2, 'DS34FD', '1st', 0, '1', 1576951200, 2, '1', '200'),
(2, 'Python', 'Python', 2, 1, 2, 'DS34FD', '1st', 4, '2', 1574186400, 2, '2', '500');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

DROP TABLE IF EXISTS `book_category`;
CREATE TABLE IF NOT EXISTS `book_category` (
  `book_category_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`book_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`book_category_id`, `name`, `description`) VALUES
(2, 'Non fictional.', 'This is another non-fictional book');

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

DROP TABLE IF EXISTS `circular`;
CREATE TABLE IF NOT EXISTS `circular` (
  `circular_id` int NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `reference` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`circular_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `circular`
--

INSERT INTO `circular` (`circular_id`, `title`, `reference`, `content`, `date`) VALUES
(2, 'Meeting for all the members of the school', 'DF46SFGH', 'This is for all the teaching staff. Ensure you are all present.', '2018-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` int UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('18056l3ggtl2jfqij6tja2mn50j7or9p', '::1', 1707286263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730373238363236333b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('eu5m71k4qfdmgd4521up7rtrt1t1v8qf', '::1', 1707286386, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730373238363236333b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('ta74f749kl1cp0tq7f086b3hpumtdkie', '::1', 1707285776, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730373238353737363b6c6f67696e5f747970657c733a353a2261646d696e223b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31333a2241646d696e6973747261746f72223b666c6173685f6d6573736167657c733a31383a225375636365737366756c6c79204c6f67696e223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `name_numeric` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `teacher_id` int NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `name_numeric`, `teacher_id`) VALUES
(2, 'Nursery One', 'Nursery 1', 1),
(3, 'class 1', 'class 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

DROP TABLE IF EXISTS `classroom`;
CREATE TABLE IF NOT EXISTS `classroom` (
  `id` int NOT NULL AUTO_INCREMENT,
  `classroom` varchar(255) NOT NULL,
  `subclass` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `club_id` int NOT NULL AUTO_INCREMENT,
  `club_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `desc`, `date`) VALUES
(1, 'Jet club', 'This is for those who love science.', '2019-08-25'),
(4, 'defgt', 'dsefg', '2023-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `section` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `class_id` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `target_year` varchar(255) NOT NULL,
  `course_img` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `section`, `title`, `class_id`, `batch`, `target_year`, `course_img`, `created_date`) VALUES
(4, 'JEE', 'JEE Early Nurture Batch', '3', '2025-01-03', '2025', 'jee.jpg', '2024-01-03 23:09:38'),
(5, 'NEET', 'JEE Early Dropper Batch', '3', '2025-01-06', '2025', 'neet.jpg', '2024-01-03 23:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `department_code` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `name`, `department_code`) VALUES
(2, 'Bursar', 'aed7c689d676c7c'),
(5, 'science', '1ff72b9a092b75a');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `designation_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `department_id` int NOT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `name`, `department_id`) VALUES
(5, 'Tutorial', 2),
(4, 'Udemy', 2),
(6, 'Student', 2),
(14, 'adsgegg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `dormitory`
--

DROP TABLE IF EXISTS `dormitory`;
CREATE TABLE IF NOT EXISTS `dormitory` (
  `dormitory_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `hostel_room_id` int NOT NULL,
  `hostel_category_id` int NOT NULL,
  `capacity` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`dormitory_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dormitory`
--

INSERT INTO `dormitory` (`dormitory_id`, `name`, `hostel_room_id`, `hostel_category_id`, `capacity`, `address`, `description`) VALUES
(2, 'Wiz Hostel', 2, 3, '200', 'Address for hostel location', 'Address for hostel location');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `enquiry_id` int NOT NULL AUTO_INCREMENT,
  `category` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mobile` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `purpose` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `whom_to_meet` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`enquiry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_category`
--

DROP TABLE IF EXISTS `enquiry_category`;
CREATE TABLE IF NOT EXISTS `enquiry_category` (
  `enquiry_category_id` int NOT NULL AUTO_INCREMENT,
  `category` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `purpose` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `whom` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`enquiry_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_category`
--

INSERT INTO `enquiry_category` (`enquiry_category_id`, `category`, `purpose`, `whom`) VALUES
(3, 'This is for ID 3 information.', 'Payment', 'Tutorial'),
(4, 'This is Udemy Information', 'School fees information', 'Just edited now'),
(6, 'dfghj', 'deghj', 'efghju');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `exam_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `name`, `comment`, `timestamp`) VALUES
(1, 'First Term Examination', 'First Term', '2019-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

DROP TABLE IF EXISTS `exam_question`;
CREATE TABLE IF NOT EXISTS `exam_question` (
  `exam_question_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `teacher_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `subject_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `class_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file_type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`exam_question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expense_category`
--

DROP TABLE IF EXISTS `expense_category`;
CREATE TABLE IF NOT EXISTS `expense_category` (
  `expense_category_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`expense_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_category`
--

INSERT INTO `expense_category` (`expense_category_id`, `name`) VALUES
(5, 'Reading Books.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `gallery_img` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

DROP TABLE IF EXISTS `home_slider`;
CREATE TABLE IF NOT EXISTS `home_slider` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `banner`, `title`, `created_date`) VALUES
(5, 'bansal_slider_image.webp', '', '2024-01-16 13:14:13'),
(6, 'NSEs-2023-24-1291x322.webp', '', '2024-01-16 13:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_category`
--

DROP TABLE IF EXISTS `hostel_category`;
CREATE TABLE IF NOT EXISTS `hostel_category` (
  `hostel_category_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`hostel_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_category`
--

INSERT INTO `hostel_category` (`hostel_category_id`, `name`, `description`) VALUES
(2, 'Female', 'This is for female only.'),
(3, 'Male', 'This is for male only. Female are not allowed.');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_room`
--

DROP TABLE IF EXISTS `hostel_room`;
CREATE TABLE IF NOT EXISTS `hostel_room` (
  `hostel_room_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `room_type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `num_bed` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cost_bed` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`hostel_room_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_room`
--

INSERT INTO `hostel_room` (`hostel_room_id`, `name`, `room_type`, `num_bed`, `cost_bed`, `description`) VALUES
(2, 'Room One', 'Single', '2', '5000', 'This is for the big guys among us.');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

DROP TABLE IF EXISTS `house`;
CREATE TABLE IF NOT EXISTS `house` (
  `house_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`house_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `name`, `description`) VALUES
(1, 'Purple House', 'This is for students in purple house');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int NOT NULL AUTO_INCREMENT,
  `invoice_number` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `student_id` int NOT NULL,
  `title` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `discount` int NOT NULL,
  `amount_paid` int NOT NULL,
  `due` int NOT NULL,
  `creation_timestamp` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `payment_method` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `year` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_number`, `student_id`, `title`, `description`, `amount`, `discount`, `amount_paid`, `due`, `creation_timestamp`, `payment_method`, `status`, `year`) VALUES
(2, '742593INV2019', 45, 'Another Part payment for eLibrary', 'Another Part payment for eLibrary.', 7000, 0, 6200, 800, '2019-11-12', '1', 2, '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `phrase_id` int NOT NULL AUTO_INCREMENT,
  `phrase` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `english` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `arabic` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `french` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `korea` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`phrase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40558 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `arabic`, `french`, `korea`) VALUES
(1, 'Manage Language', 'Manage Language', 'إدارة اللغة', NULL, NULL),
(2, 'active language', 'Active Language', 'اللغة النشطة', NULL, NULL),
(40557, 'add', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `language_list`
--

DROP TABLE IF EXISTS `language_list`;
CREATE TABLE IF NOT EXISTS `language_list` (
  `language_list_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `db_field` varchar(300) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`language_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

DROP TABLE IF EXISTS `leave`;
CREATE TABLE IF NOT EXISTS `leave` (
  `leave_id` int NOT NULL AUTO_INCREMENT,
  `leave_code` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `teacher_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `start_date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `end_date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `reason` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
CREATE TABLE IF NOT EXISTS `mark` (
  `mark_id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `exam_id` int DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `class_score1` int DEFAULT NULL,
  `class_score2` int DEFAULT NULL,
  `class_score3` int DEFAULT NULL,
  `exam_score` int DEFAULT NULL,
  `comment` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`mark_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`mark_id`, `student_id`, `subject_id`, `exam_id`, `class_id`, `class_score1`, `class_score2`, `class_score3`, `exam_score`, `comment`) VALUES
(1, 45, 5, 1, 2, 10, 9, 8, 70, 'Good performance.'),
(2, 45, 4, 1, 2, 10, 7, 9, 69, 'Excellent performance.'),
(3, 45, 6, 1, 2, 8, 5, 8, 21, ''),
(4, 0, 5, 1, 2, 0, 0, 0, 0, ''),
(5, 0, 4, 1, 2, 0, 0, 0, 0, ''),
(6, 0, 6, 1, 2, 0, 0, 0, 0, ''),
(7, 45, 0, 1, 2, 0, 0, 0, 0, ''),
(8, 45, 0, 1, 2, 22, 22, 22, 22, 'good'),
(9, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(10, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(11, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(12, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(13, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(14, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(15, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(16, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(17, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(18, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(19, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(20, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(21, 45, 6, 20, 2, 11, 11, 11, 11, 'good'),
(22, 45, 6, 20, 2, 11, 11, 11, 11, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `material_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `class_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file_type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`material_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `name`, `class_id`, `subject_id`, `teacher_id`, `description`, `file_name`, `file_type`, `timestamp`) VALUES
(1, 'Study material for Nursery One', 2, 5, 1, 'This is for class only.', 'profile.png', 'docx', '2018-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_link`
--

DROP TABLE IF EXISTS `meeting_link`;
CREATE TABLE IF NOT EXISTS `meeting_link` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `meeting_code` longtext NOT NULL,
  `meeting_type` varchar(255) NOT NULL,
  `link` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uploader_type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uploader_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `session` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting_link`
--

INSERT INTO `meeting_link` (`id`, `title`, `meeting_code`, `meeting_type`, `link`, `uploader_type`, `uploader_id`, `session`, `timestamp`) VALUES
(18, 'google meet', 'b2ec36b', 'Google Meeting', 'https://meet.google.com/mtc-drnf-mip', 'admin', '1', '2023-2024', 1706513967);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

DROP TABLE IF EXISTS `noticeboard`;
CREATE TABLE IF NOT EXISTS `noticeboard` (
  `noticeboard_id` int NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `location` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` int NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`noticeboard_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`noticeboard_id`, `title`, `location`, `timestamp`, `description`) VALUES
(3, 'Second meeting coming up soon', 'Udemy Forum', 1575136800, 'The meeting is coming up soon. Ensure you are fully prepared.'),
(4, 'Parent Teacher Association Meeting.', 'Ontario Location', 1575050400, 'This is the new updated information as regards the meeting.');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

DROP TABLE IF EXISTS `parent`;
CREATE TABLE IF NOT EXISTS `parent` (
  `parent_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `profession` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `login_status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `name`, `email`, `password`, `phone`, `address`, `profession`, `login_status`) VALUES
(4, 'Mr. Parent', 'parent@parent.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '+912345667', 'Udemy Address', 'Learners', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `expense_category_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `payment_type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `invoice_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `student_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `method` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `amount` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `discount` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `timestamp` int NOT NULL,
  `year` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `expense_category_id`, `title`, `payment_type`, `invoice_id`, `student_id`, `method`, `description`, `amount`, `discount`, `timestamp`, `year`) VALUES
(2, '5', 'Purchase of school reading', 'expense', '', '', '2', 'This was purchase by the school administrator for the purpose of having reading books in the school.<br>', '5000', '', 556644564, '2019-2020'),
(5, '5', 'Purchase of school chalks', 'expense', '', '', '1', 'Purchase of school chalks<br>', '3000', '', 556644564, '2019-2020'),
(6, '', 'Part payment for eLibrary', '', '2', '45', '1', 'income', '5000', '0', 556644564, ''),
(7, '', 'Another payment for eLibrary', 'income', '3', '45', '1', 'Another payment for eLibrary', '2000', '0', 445667865, ''),
(8, '', 'Part payment for eLibrary', 'income', '2', '45', '1', 'Part payment for eLibrary', '1200', '', 556644564, ''),
(9, '5', 'New chalk purchased', 'expense', '', '', '3', 'New chalk purchased<br>', '1000', '', 556644564, '2019-2020'),
(10, '', 'Another Part payment for eLibrary.', 'income', '2', '45', '1', 'Another Part payment for eLibrary.', '5000', '', 1576951200, '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answer`
--

DROP TABLE IF EXISTS `quiz_answer`;
CREATE TABLE IF NOT EXISTS `quiz_answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` smallint NOT NULL,
  `quiz_id` smallint NOT NULL,
  `question_id` smallint NOT NULL,
  `answer` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `is_correct` bit(1) NOT NULL COMMENT '1 = correct, 0 = incorrect',
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_answer`
--

INSERT INTO `quiz_answer` (`id`, `user_id`, `quiz_id`, `question_id`, `answer`, `is_correct`, `entry_date`) VALUES
(1, 46, 20, 1, 'option_1', b'1', '2024-02-05 13:12:44'),
(2, 45, 20, 2, 'option_1', b'1', '2024-02-05 13:12:44'),
(4, 47, 20, 2, 'option_1', b'1', '2024-02-05 13:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_details`
--

DROP TABLE IF EXISTS `quiz_details`;
CREATE TABLE IF NOT EXISTS `quiz_details` (
  `quiz_id` int NOT NULL AUTO_INCREMENT,
  `quiz_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `quiz_duration` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `is_active` tinyint NOT NULL,
  `show_it` bit(1) NOT NULL,
  `counter` varchar(255) NOT NULL DEFAULT '10',
  `created_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  `last_modified_date` datetime NOT NULL,
  `last_modified_by` int NOT NULL,
  `other_imp_instruction` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `negative_mark` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `mark_for_correct_answer` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  PRIMARY KEY (`quiz_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_details`
--

INSERT INTO `quiz_details` (`quiz_id`, `quiz_name`, `quiz_duration`, `start_date`, `end_date`, `is_active`, `show_it`, `counter`, `created_date`, `created_by`, `last_modified_date`, `last_modified_by`, `other_imp_instruction`, `negative_mark`, `mark_for_correct_answer`) VALUES
(18, 'maths', '30 min', '2024-01-09', '2024-01-30', 1, b'1', '11', '2024-01-09 16:46:20', 0, '0000-00-00 00:00:00', 0, 'sdfsd', '1', '2'),
(19, 'science', '2 hours', '2024-01-18', '2024-02-04', 1, b'1', '2', '2024-01-18 13:26:58', 0, '0000-00-00 00:00:00', 0, '', '1', '2'),
(20, 'NEET ', '30 min', '2024-01-11', '2024-03-21', 1, b'1', '10', '2024-01-30 16:36:44', 0, '0000-00-00 00:00:00', 0, '', '1', '2'),
(21, 'Nagpur', '30 min', '2024-02-09', '2024-02-24', 1, b'1', '10', '2024-02-01 20:47:31', 0, '0000-00-00 00:00:00', 0, 'dsfsdfsd', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_enquiry`
--

DROP TABLE IF EXISTS `quiz_enquiry`;
CREATE TABLE IF NOT EXISTS `quiz_enquiry` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileNumber` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `user_role` tinyint NOT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

DROP TABLE IF EXISTS `quiz_questions`;
CREATE TABLE IF NOT EXISTS `quiz_questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quiz_id` int DEFAULT NULL,
  `question` text NOT NULL,
  `option1` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `option2` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `option3` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `option4` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file` text,
  `file_a` text,
  `file_b` text,
  `file_c` text,
  `file_d` text,
  `tipe_file` text,
  `answer` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `is_active` tinyint NOT NULL,
  `add_by_import` varchar(255) DEFAULT NULL,
  `exam_type` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `created_by` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `quiz_id`, `question`, `option1`, `option2`, `option3`, `option4`, `file`, `file_a`, `file_b`, `file_c`, `file_d`, `tipe_file`, `answer`, `is_active`, `add_by_import`, `exam_type`, `created_date`, `created_by`) VALUES
(1, 20, 'ss', 'option1', 'optin_2', 'optionc', 'optin4', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', '', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', '', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '0', '0000-00-00 00:00:00', 0),
(2, 20, 'ssas', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '0', '0000-00-00 00:00:00', 0),
(3, 20, '1', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '0', '0000-00-00 00:00:00', 0),
(4, 20, '2', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', '', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', '', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(5, 20, '3', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(6, 20, '4', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(7, 20, '5', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(8, 20, '6', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(9, 20, '7', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(10, 20, '8', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(11, 20, '9', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0),
(12, 20, '10', 'a', 'b', 'd', 'd', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/untitled_design_93-sixteen_nine.jpg?size=948:533', NULL, 'option_1', 1, '1', '1', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_report`
--

DROP TABLE IF EXISTS `quiz_report`;
CREATE TABLE IF NOT EXISTS `quiz_report` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `quiz_id` int DEFAULT NULL,
  `score` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `precentage` varchar(255) COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `quiz_report`
--

INSERT INTO `quiz_report` (`id`, `student_id`, `quiz_id`, `score`, `created_at`, `precentage`) VALUES
(1, 45, 20, 3, '2024-02-07 07:00:40', NULL),
(2, 45, 20, 6, '2024-02-08 18:30:00', NULL),
(3, 45, 20, 6, '2024-02-09 18:30:00', NULL),
(4, 45, 20, 6, '2024-02-05 07:10:53', NULL),
(5, 47, 20, 3, '2024-02-09 07:10:53', NULL),
(6, 47, 20, 6, '2024-02-10 07:37:28', NULL),
(7, 47, 20, 6, '2024-02-13 07:42:44', NULL),
(8, 46, 20, 3, '2024-02-09 07:10:53', NULL),
(9, 46, 20, 6, '2024-02-10 07:37:28', NULL),
(10, 46, 20, 6, '2024-02-13 07:42:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recorded_lecture`
--

DROP TABLE IF EXISTS `recorded_lecture`;
CREATE TABLE IF NOT EXISTS `recorded_lecture` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `recorded_lecture`
--

INSERT INTO `recorded_lecture` (`id`, `title`, `youtube_link`, `description`, `created_date`) VALUES
(2, 'ssssssssssss', 'https://www.youtube.com/@vedhvalleyworldschool6773', 'sdfghjefesf', '2023-12-27 17:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `result_banner` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `result_banner`, `title`, `created_date`) VALUES
(6, 'jee-adv-results-Image.jpg', '', '2024-01-02 23:42:55'),
(7, 'Slider_Aug.jpg', '', '2024-01-16 14:12:59'),
(8, 'result-3.jpg', '', '2024-01-16 14:13:08'),
(9, 'jee-adv-results-Image1.jpg', '', '2024-01-16 14:13:30'),
(10, 'JEE-Advanced-Result-2016.jpg', '', '2024-01-16 14:14:01'),
(11, 'JEE-Advanced-Result-2015.jpg', '', '2024-01-16 14:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nick_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `name`, `nick_name`, `class_id`, `teacher_id`) VALUES
(3, 'First Term', 'Term 1', 2, 1),
(4, 'Second Term', '2nd', 2, 1),
(5, 'aaa', 'asdfgh', 3, 2),
(6, 'genius', 'genius', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Bansal Pathshala'),
(2, 'system_title', 'Bansal Pathshala'),
(3, 'address', ' 2nd floor morey sadan, opp. Bajaj KTM showroom, Nagpur, Maharashtra 440001'),
(4, 'phone', '+1564783934'),
(6, 'currency', 'INR'),
(7, 'system_email', 'payment@optimumlinkup.com'),
(11, 'language', 'english'),
(12, 'text_align', 'left-to-right'),
(16, 'skin_colour', 'blue'),
(21, 'session', '2023-2024'),
(22, 'footer', 'Bringing to you by Bansal Pathshala'),
(116, 'paypal_email', 'info@bansalpathshala.com'),
(119, 'stripe_setting', '[{\"stripe_active\":\"1\",\"testmode\":\"off\",\"secret_key\":\"test secret key\",\"public_key\":\"test public key\",\"secret_live_key\":\"live secret key\",\"public_live_key\":\"live public key\"}]'),
(122, 'paypal_setting', '[{\"paypal_active\":\"1\",\"paypal_mode\":\"sandbox\",\"sandbox_client_id\":\"client id sandbox\",\"production_client_id\":\"client - production\"}]'),
(123, 'img', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

DROP TABLE IF EXISTS `sms_settings`;
CREATE TABLE IF NOT EXISTS `sms_settings` (
  `sms_setting_id` int NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `info` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`sms_setting_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`sms_setting_id`, `type`, `info`) VALUES
(12, 'msg91_sender_id', 'sender id'),
(11, 'msg91_authentication_key', 'msg91 auth key'),
(10, 'clickatell_apikey', 'clickattel api'),
(9, 'clickatell_password', 'clickattel paasword'),
(8, 'clickatell_username', 'clickattel username'),
(13, 'msg91_route', 'route'),
(14, 'msg91_country_code', 'country code'),
(15, 'active_sms_gateway', 'msg91');

-- --------------------------------------------------------

--
-- Table structure for table `social_category`
--

DROP TABLE IF EXISTS `social_category`;
CREATE TABLE IF NOT EXISTS `social_category` (
  `social_category_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `colour` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `icon` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`social_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_category`
--

INSERT INTO `social_category` (`social_category_id`, `name`, `colour`, `icon`, `description`) VALUES
(2, 'Romance', 'danger', 'fa-male', 'This is for romance chat room'),
(3, 'Event', 'primary', 'fa-book', 'This is for event chat room');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `birthday` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `age` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `place_birth` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `sex` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `m_tongue` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `religion` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `blood_group` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `address` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `city` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `state` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `nationality` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `phone` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `email` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `ps_attended` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `ps_address` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `ps_purpose` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `class_study` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `date_of_leaving` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `am_date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `tran_cert` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `dob_cert` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `mark_join` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `physical_h` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `password` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `father_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `mother_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `class_id` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `section_id` int NOT NULL,
  `parent_id` int NOT NULL,
  `roll` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `transport_id` int NOT NULL,
  `dormitory_id` int NOT NULL,
  `house_id` int DEFAULT NULL,
  `student_category_id` int DEFAULT NULL,
  `club_id` int DEFAULT NULL,
  `session` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `card_number` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `issue_date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `expire_date` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `dormitory_room_number` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `more_entries` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `login_status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `birthday`, `age`, `place_birth`, `sex`, `m_tongue`, `religion`, `blood_group`, `address`, `city`, `state`, `nationality`, `phone`, `email`, `ps_attended`, `ps_address`, `ps_purpose`, `class_study`, `date_of_leaving`, `am_date`, `tran_cert`, `dob_cert`, `mark_join`, `physical_h`, `password`, `father_name`, `mother_name`, `class_id`, `section_id`, `parent_id`, `roll`, `transport_id`, `dormitory_id`, `house_id`, `student_category_id`, `club_id`, `session`, `card_number`, `issue_date`, `expire_date`, `dormitory_room_number`, `more_entries`, `login_status`) VALUES
(45, 'Testing Student', '09/30/2003', '16', 'Lagos', 'female', 'Mother Tongue', 'Muslim', 'B+', 'Address', 'City', 'Lagos', 'Canadian', '+912345667', 'ankita@student.com', 'Previous school attended', 'Previous school address', 'Purpose Of Leaving', 'Class In Which Was Studying', '2011-08-10', '2011-08-19', 'Yes', 'Yes', 'Yes', 'No', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '2', 0, 4, '5bf8161', 0, 2, 1, 2, 1, '2019-2020', '', '', '', '', '', '0'),
(46, 'Sudipa Swarup Maity', '01/18/2022', '2', 'Nagpur', 'female', 'marathi', 'hindu', 'A', 'Nagpur\r\nMaharashtra\r\n440002', 'Nagpur', 'Maharashtra', 'rfvgf', '9359044818', 'msudi8@gmail.com', 'aaa', 'Nagpur', 'aaa', 'aaa', '2011-08-19', '2011-08-19', 'No', 'No', 'No', 'No', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '3', 5, 4, '0b9a282', 0, 2, 1, 2, 1, '2023-2024', '', '', '', '', '', '1'),
(47, 'pranay', '02/05/2024', '', 'nagpur', 'male', 'Hindi', 'Hindu', 's', 'Nagpur MH India', 'Nagpur', 'Maharashtra', 'india', '09284154036', 'pranay.l@gmail.com', 'test', 'Nagpur MH India', 'bad company', 'nursery', '2011-08-19', '2011-08-19', 'Yes', 'Yes', 'Yes', 'Yes', 'f63036841208c85f367cbb2680dea8125d001372', NULL, '', '2', 4, 4, '4926ace', 0, 2, 1, 2, 4, '2023-2024', NULL, NULL, NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_category`
--

DROP TABLE IF EXISTS `student_category`;
CREATE TABLE IF NOT EXISTS `student_category` (
  `student_category_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`student_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_category`
--

INSERT INTO `student_category` (`student_category_id`, `name`, `description`) VALUES
(2, 'Boarding Student', 'This is for the boarding student.');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `class_id`, `teacher_id`) VALUES
(5, 'Economics', 2, 1),
(4, 'Mathematics', 2, 1),
(6, 'English', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `role` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `teacher_number` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `birthday` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sex` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `religion` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `blood_group` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `facebook` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `twitter` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `googleplus` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `linkedin` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `marital_status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `department_id` int NOT NULL,
  `designation_id` int NOT NULL,
  `date_of_joining` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `joining_salary` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `date_of_leaving` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bank_id` int NOT NULL,
  `login_status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `role`, `teacher_number`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `email`, `facebook`, `twitter`, `googleplus`, `linkedin`, `qualification`, `marital_status`, `file_name`, `password`, `department_id`, `designation_id`, `date_of_joining`, `joining_salary`, `status`, `date_of_leaving`, `bank_id`, `login_status`) VALUES
(1, 'Testing Teacher', '1', 'f82e5cc', '2018-08-19', 'male', 'Christianity', 'B+', '546787, Kertz shopping complext, Silicon Valley, United State of America, New York city.', '+912345667', 'teacher@teacher.com', 'facebook', 'twitter', 'googleplus', 'linkedin', 'PhD', 'Married', 'profile.png', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, 4, '2019-09-15', '5000', 1, '2019-09-18', 3, '1'),
(2, 'ankita rokde', '2', 'fabb241', '1995-08-19', 'female', 'hindu', 'B+', 'dighori', '8765432123', 'ankita@gmail.com', '', '', '', '', 'sdas', 'Single', 'Ankita CV.pdf', 'da54e6c92368d10baaca171faf8dad325c3542d3', 5, 14, '2024-01-01', '20000', 1, '2024-01-01', 5, ''),
(3, 'Amit', '1', '92117e1', '2018-08-19', 'male', 'ghj', 'df', 'dxfgh', '09359044818', 'amit@gmail.com', 'wsda', 'sdf', 'sdf', 'sdxf', 'sd', 'Single', 'Background-image2.jpeg', 'c8babb64262c6076e821e1ea0afc7d306ede96cb', 5, 14, '2024-11-01', '23456', 1, '2024-01-11', 6, '0');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `scholarship_image` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `description`, `scholarship_image`, `created_date`) VALUES
(3, 'demo', 'Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.\r\n                                        Rebum\r\n                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere\r\n           ', 'team-2.jpg', '2024-01-16 14:08:16'),
(4, 'Nathan Joe', 'Et nec tantas accusamus salutatus, sit commodo veritus te, erat fabulas has ut.\r\n                                        Rebum\r\n                                        cum laudem cum ea, accusamus salutatus, sit commodo veritus te,erat legere\r\n           ', 'team-1.jpg', '2024-01-16 14:08:47');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE IF NOT EXISTS `transport` (
  `transport_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `transport_route_id` int NOT NULL,
  `vehicle_id` int NOT NULL,
  `route_fare` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`transport_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transport_route`
--

DROP TABLE IF EXISTS `transport_route`;
CREATE TABLE IF NOT EXISTS `transport_route` (
  `transport_route_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`transport_route_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport_route`
--

INSERT INTO `transport_route` (`transport_route_id`, `name`, `description`) VALUES
(2, 'Toronto to Usa', 'This is vehicle is going from Canada to Usa'),
(3, 'Lagos to Canada', 'This is going to Canada');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_role` int NOT NULL,
  `is_active` tinyint NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `first_name`, `last_name`, `gender`, `user_role`, `is_active`, `created_date`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '', '', '', 1, 1, '2018-09-25 17:31:00'),
(6, 'akshu', '50f20ea242c189f7dd46242e8411dc9f', 'akshu', 'm', 'female', 2, 1, '2023-11-30 10:00:06'),
(7, 'ankita', '1138dd6fdda5d617dfe218898ee02077', 'ankita', 'rokde', 'female', 2, 1, '2023-12-19 11:21:57'),
(8, 'sudipa', 'a7b24d715c42b8d2606c35d88b5a2954', 'sudipa', 'maity', 'female', 2, 1, '2023-12-19 13:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int NOT NULL AUTO_INCREMENT,
  `name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `vehicle_number` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `vehicle_model` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `vehicle_quantity` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `year_made` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `driver_name` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `driver_license` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `driver_contact` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `name`, `vehicle_number`, `vehicle_model`, `vehicle_quantity`, `year_made`, `driver_name`, `driver_license`, `driver_contact`, `description`, `status`) VALUES
(2, 'Toyota', '423', 'Camry', '2', '2019', 'Udemy Sheg', 'License', 'Contact address here', 'description here', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

DROP TABLE IF EXISTS `winners`;
CREATE TABLE IF NOT EXISTS `winners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `winners_img` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`id`, `title`, `winners_img`, `created_date`) VALUES
(8, 'JEE ADVANCED', '1.jpg', '2024-01-16 13:19:57'),
(9, 'JEE MAIN', '2.jpg', '2024-01-16 13:20:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
