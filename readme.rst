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
