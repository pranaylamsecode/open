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
            <li>For ExamId data, it can only be filled using Exam ID. <a data-toggle="modal" href="#kelasId" style="text-decoration:none" class="btn btn-xs btn-primary">View ID</a>.</li>
        </ul>
        <div class="text-center">
            <a href="<?= base_url('uploads/import/format/question_import.xlsx') ?>" class="btn-default btn">Download Format</a>
        </div>
        <br>
        <div class="row">
            <?= form_open_multipart('mahasiswa/preview'); ?>
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
                                <td>Question</td>
                                <td>Quiz Id</td>
                                <td>Option_A</td>
                                <td>Option_B</td>
                                <td>Option_C</td>
                                <td>Option_D</td>
								<td>Answer</td>
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
                                        <td class="<?= $data['question'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['question'] == null ? 'NOT FILLED' : $data['question']; ?>
                                        </td>
                                        <td class="<?= $data['quiz_id'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['quiz_id'] == null ? 'NOT FILLED' : $data['quiz_id']; ?>
                                        </td>
                                        <td class="<?= $data['option1'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['option1'] == null ? 'NOT FILLED' : $data['option1'];; ?>
                                        </td>
                                        <td class="<?= $data['option2'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['option2'] == null ? 'NOT FILLED' : $data['option2'];; ?>
                                        </td>
                                        <td class="<?= $data['option3'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['option3'] == null ? 'NOT FILLED' : $data['option3'];; ?>
                                        </td>
                                        <td class="<?= $data['option4'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['option4'] == null ? 'NOT FILLED' : $data['option4'];; ?>
                                        </td>
                                        <td class="<?= $data['answer'] == null ? 'bg-danger' : ''; ?>">
                                            <?= $data['answer'] == null ? 'NOT FILLED' : $data['answer'];; ?>
                                        </td>
                                    </tr>
                            <?php
                                        if ($data['question'] == null || $data['quiz_id'] == null || $data['option1'] == null || $data['option2'] == null || $data['option3'] == null || $data['option4'] == null || $data['answer'] == null ) {
                                            $status = false;
                                        }
                                    endforeach;
                                }
                                ?>
                        </tbody>
                    </table>
                    <?php if ($status) : ?>

                        <?= form_open('mahasiswa/do_import', null, ['data' => json_encode($import)]); ?>
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
