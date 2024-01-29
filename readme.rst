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
