<div class="row">
    <div class="col-sm-10">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add_exam'); ?>
            </div>

            <?php echo form_open(base_url() . 'examquiz/add_exam_quiz/create', array('class' => 'form-horizontal form-goups-bordered validate'));?>
            <div class="panel-body table-responsive">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text"><?php echo get_phrase('Enter Exam Name');?></label>
                        <input name="quiz" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text"><?php echo get_phrase('Exam Duration');?></label>
                        <select class="form-control" name="duration" required>
                            <option value="">Exam Duration Time</option>
                            <option value="30 min">30 Minutes</option>
                            <option value="1 hours">1 Hours</option>
                            <option value="2 hours">2 Hours</option>
                            <option value="3 hours">3 Hours</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text"><?php echo get_phrase('Exam Start Date');?></label>
                        <input name="q_s_d" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text"><?php echo get_phrase('Exam End Date');?></label>
                        <input name="q_e_d" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text"><?php echo get_phrase('More Instruction Details');?></label>
                                    <input name="other_imp_instruction" type="text" value="" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text"><?php echo get_phrase('mark_for_correct_answer');?></label>
                                    <input name="mark_for_correct_answer" type="number" value="" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text"><?php echo get_phrase('negative_mark');?></label>
                                    <input name="negative_mark" type="number" value="" class="form-control" required>
                                </div>
                            </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input id="checkbox" class="filled-in chk-col-teal" name="show_quiz" value="1" type="checkbox">
                        <label for="checkbox">Active</label> <br/>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm "><i
                            class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_exam');?></button>
                </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
<!----TABLE LISTING ENDS--->
