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
