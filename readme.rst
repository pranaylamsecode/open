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
