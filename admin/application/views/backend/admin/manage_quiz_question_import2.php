
<style>
    button.btn.btn-block.btn-flat.bg-purple {
    color: #fff !important;
}
</style>
<div class="row">
    <div class="col-sm-12">
		<div class="box">
    <div class="box-header with-border">

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <ul class="alert alert-info" style="padding-left: 40px">
            <li>Please import data from excel, using the provided format</li>
            <li>Data must not be empty, all must be filled in.</li>
            <li>For StudentId ,SubjectId, ClassId, ExamId data, it can only be filled using StudentId ,SubjectId, ClassId, ExamId . .</li>
         <!-- <a data-toggle="modal" href="#kelasId" style="text-decoration:none" class="btn btn-xs btn-primary">View ID</a> -->
        </ul>
        <div class="text-center">
            <a href="<?= base_url('uploads/import/format/mark_question_import.xlsx') ?>" class="btn-default btn">Download Format</a>
        </div>
        <br>
        <div class="row">
            <?= form_open_multipart('mahasiswa/preview2'); ?>

            <?php

$students  = $this->db->get('student')->result();
$quiz_details  = $this->db->get('quiz_details')->result();
$subjects  = $this->db->get('subject')->result();
$classs  = $this->db->get('class')->result();


    ?>

    <div class="col">
                <div class="form-group">
                    <label for="example-text"><?php echo get_phrase('Student');?></label>
                    <select class="form-control" name="student_id" required>
                    <?php foreach($students as $students
                    ) { ?>

    <option value="<?php echo $students->student_id; ?>"><?php echo $students->name; ?></option>
                    <?php }?>



                    </select>
                </div>
    </div>

    <div class="col">
                <div class="form-group">
                    <label for="example-text"><?php echo get_phrase('Exam Id');?></label>
                    <select class="form-control" name="exam_id" required>
                    <?php foreach($quiz_details as $quiz_details
                    ) { ?>

    <option value="<?php echo $quiz_details->quiz_id; ?>"><?php echo $quiz_details->quiz_name; ?></option>
                    <?php }?>



                    </select>
                </div>
    </div>

    <div class="col">
                <div class="form-group">
                    <label for="example-text"><?php echo get_phrase('subjects');?></label>
                    <select class="form-control" name="subject_id" required>
                    <?php foreach($subjects as $subjects
                    ) { ?>

    <option value="<?php echo $subjects->subject_id; ?>"><?php echo $subjects->name; ?></option>
                    <?php }?>



                    </select>
                </div>
    </div>

    <div class="col">
                <div class="form-group">
                    <label for="example-text"><?php echo get_phrase('Class');?></label>
                    <select class="form-control" name="class_id" required>
                    <?php foreach($classs as $classs
                    ) { ?>

    <option value="<?php echo $classs->class_id; ?>"><?php echo $classs->name; ?></option>
                    <?php }?>



                    </select>
                </div>
    </div>


            <label for="file" class="col-sm-offset-1 col-sm-3 text-right">Choose File</label>
            <div class="col-sm-4">
                <div class="form-group">
                    <input type="file" name="upload_file">
                </div>
            </div>
            <div class="col-sm-3">
                <button name="preview" type="submit" class="btn btn-sm btn-success">Preview</button>
            </div>
            <?= form_close(); ?>
            <div class="col-sm-6 col-sm-offset-3">
                <?php if (isset($_POST['preview'])) : ?>
                    <br>
                    <h4>Preview Data</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>

                                <td>Score 1</td>
                                <td>Score 2</td>
                                <td>Score 3</td>
                                <td>Exam</td>
								<td>Comment</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $status = true;
                                if (empty($import)) {
                                    echo '<tr><td colspan="2" class="text-center">Empty data! make sure you use the format provided.</td></tr>';
                                } else {
                                    $no = 1;
                                    foreach ($import as $data) :
                                        ?>
                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td class="<?= $data['class_score1'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['class_score1'] == null ? 'NOT FILLED' : $data['class_score1']; ?>
                                        </td>
                                        <td class="<?= $data['class_score2'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['class_score2'] == null ? 'NOT FILLED' : $data['class_score2']; ?>
                                        </td>
                                        <td class="<?= $data['class_score3'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['class_score3'] == null ? 'NOT FILLED' : $data['class_score3']; ?>
                                        </td>
                                        <td class="<?= $data['exam_score'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['exam_score'] == null ? 'NOT FILLED' : $data['exam_score']; ?>
                                        </td>
                                        <td >
                                            <?= $data['comment']; ?>
                                        </td>

                                    </tr>
                            <?php
                                     if (
                                        $data['class_score1'] == null ||
                                        $data['class_score2'] == null ||
                                        $data['class_score3'] == null ||
                                        $data['exam_score'] == null
                                        ) {
                                            $status = false;
                                        }
                                    endforeach;
                                }
                                ?>
                        </tbody>
                    </table>
                    <?php if ($status) : ?>

                        <?= form_open('mahasiswa/do_import2', null, ['data' => json_encode($import)]); ?>
                        <button type='submit' class='btn btn-block btn-flat bg-purple'>Import</button>
                        <?= form_close(); ?>

                    <?php endif; ?>
                    <br>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kelasId">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Class Data</h4>
            </div>
            <div class="modal-body">
                <table id="kelas" class="table table-bordered table-condensed table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Class</th>
                        <th>Dept</th>
                    </thead>
                    <tbody>
                        <?php foreach ($kelas as $k) : ?>
                            <tr>
                                <td><?= $k->id_kelas; ?></td>
                                <td><?= $k->nama_kelas; ?></td>
                                <td><?= $k->nama_jurusan; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let table;
        table = $("#kelas").DataTable({
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
        });
    });
</script></div>
</div>
