//codeiginter  bansal


//admin
Username - admin@admin.com
Password - admin123

 //users
 Student credentials
Usr- ankita@student.com
Psd- 1234


//change data base question_details
ALTER TABLE `quiz_questions` ADD `file` TEXT NULL DEFAULT NULL AFTER `option4`, ADD `file_a` TEXT NULL DEFAULT NULL AFTER `file`, ADD `file_b` TEXT NULL DEFAULT NULL AFTER `file_a`, ADD `file_c` TEXT NULL DEFAULT NULL AFTER `file_b`, ADD `file_d` TEXT NULL DEFAULT NULL AFTER `file_c`;

ALTER TABLE `quiz_questions` ADD `tipe_file` TEXT NULL DEFAULT NULL AFTER `file_d`;

//

ALTER TABLE `quiz_questions` CHANGE `quiz_id` `quiz_id` INT NULL DEFAULT NULL;


//
ALTER TABLE `mark` CHANGE `student_id` `student_id` INT NULL DEFAULT NULL, CHANGE `subject_id` `subject_id` INT NULL DEFAULT NULL, CHANGE `exam_id` `exam_id` INT NULL DEFAULT NULL, CHANGE `class_id` `class_id` INT NULL DEFAULT NULL, CHANGE `class_score1` `class_score1` INT NULL DEFAULT NULL, CHANGE `class_score2` `class_score2` INT NULL DEFAULT NULL, CHANGE `class_score3` `class_score3` INT NULL DEFAULT NULL, CHANGE `exam_score` `exam_score` INT NULL DEFAULT NULL, CHANGE `comment` `comment` LONGTEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;


//udpate query with instruction param
ALTER TABLE `quiz_details` ADD `other_imp_instruction` TEXT NOT NULL AFTER `last_modified_by`, ADD `negative_mark` TEXT NOT NULL AFTER `other_imp_instruction`, ADD `mark_for_correct_answer` TEXT NOT NULL AFTER `negative_mark`;


//null

ALTER TABLE `quiz_details` CHANGE `other_imp_instruction` `other_imp_instruction` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL, CHANGE `negative_mark` `negative_mark` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL, CHANGE `mark_for_correct_answer` `mark_for_correct_answer` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL;


//
CREATE TABLE quiz_report (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    quiz_id INT,
    score INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


//

making student table to null
ALTER TABLE `student` CHANGE `name` `name` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `birthday` `birthday` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `age` `age` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `place_birth` `place_birth` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `m_tongue` `m_tongue` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `religion` `religion` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `blood_group` `blood_group` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `address` `address` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `city` `city` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `state` `state` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `nationality` `nationality` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `phone` `phone` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `email` `email` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `ps_attended` `ps_attended` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `ps_address` `ps_address` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `ps_purpose` `ps_purpose` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `class_study` `class_study` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `date_of_leaving` `date_of_leaving` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `am_date` `am_date` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `tran_cert` `tran_cert` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `dob_cert` `dob_cert` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `mark_join` `mark_join` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `physical_h` `physical_h` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `father_name` `father_name` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `house_id` `house_id` INT NULL DEFAULT NULL, CHANGE `student_category_id` `student_category_id` INT NULL DEFAULT NULL, CHANGE `club_id` `club_id` INT NULL DEFAULT NULL, CHANGE `card_number` `card_number` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `issue_date` `issue_date` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `expire_date` `expire_date` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `dormitory_room_number` `dormitory_room_number` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `more_entries` `more_entries` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL, CHANGE `login_status` `login_status` LONGTEXT CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL;


//

ALTER TABLE `quiz_report` ADD `precentage` VARCHAR(255) NULL AFTER `created_at`;

//ALTER TABLE `quiz_report` CHANGE `precentage` `percentage` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;


//

CREATE TABLE IF NOT EXISTS `exam_quiz_answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` smallint NOT NULL,
  `exam_quiz_id` smallint NOT NULL,
  `exam_question_id` smallint NOT NULL,
  `answer` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `is_correct` bit(1) NOT NULL COMMENT '1 = correct, 0 = incorrect',
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `exam_quiz_questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `exam_quiz_id` int DEFAULT NULL,
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


CREATE TABLE IF NOT EXISTS `exam_quiz_report` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `exam_quiz_id` int DEFAULT NULL,
  `score` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `percentage` varchar(255) COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;


//


CREATE TABLE IF NOT EXISTS `exam_quiz_details` (
  `exam_quiz_id` int NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`exam_quiz_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `exam_quiz_details` (
  `exam_quiz_id` int NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`exam_quiz_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
