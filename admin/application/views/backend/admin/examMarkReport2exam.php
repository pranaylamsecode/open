
<div class="row">
    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <a href="<?php echo base_url().'/report/examMarkReportExamQuiz'; ?>" style="margin-right: 0px !important;">Reset</a>&nbsp;&nbsp;<?php echo get_phrase('');?></div>
                <div class="panel-body table-responsive">

                    <!----CREATION FORM STARTS---->

                	<?php echo form_open(base_url() . 'report/examMarkReportExamQuiz4' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                            <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Exam');?></label>
                                <div class="col-sm-12">
                                    <select  name="exam_id" class="form-control select2">
                                        <option value=""><?php echo get_phrase('Select');?></option>

                                        <?php $exams =  $this->db->get('exam_quiz_details')->result_array();
                                        foreach($exams as $key => $exam):?>
                                        <option value="<?php echo $exam['exam_quiz_id'];?>"
                                        <?php if($exam_id == $exam['exam_quiz_id']) echo 'selected="selected"' ;?>><?php echo $exam['quiz_name'];?></option>
                                        <?php endforeach;?>
                                </select>

                                </div>
                            </div>

                                            <?php if(!empty($exam_id)){
                                                ?>
 <?php

$this->db->select('s.fullName as name, s.student_id, q.quiz_id as quiz_id');
$this->db->from('student s');

$this->db->join('quiz_answer q', 's.student_id = q.user_id');
$this->db->where('q.quiz_id', $exam_id);
$this->db->group_by('s.student_id');


// Executing the query and fetching the result as an array.
$student_data = $this->db->get()->result_array();


?>
<?php if(!empty($student_data))
{?>




                                            <div class="form-group">
                                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Student');?></label>
                                                <div class="col-sm-12">



                                    <select  name="student_id"  class="form-control">
                                        <option value="">Student Select</option>
                                        <?php
                                        foreach($student_data as $key => $student): ?>
                                        <option value="<?php echo $student['student_id'];?>" <?php if(isset($student_id) && $student_id == $student['student_id']) echo 'selected="selected"';?> >
                                        <?php echo $student['name'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>

                            </div>
                            <!-- <input type="text" name="batch" value="1"> -->

                            <?php
                                            }?>
                                            <?php }?>


                                            <!-- if other student check -->
                                            <?php if(!empty($exam_id)){
                                                ?>
 <?php



$this->db->select('s.fullName as name, s.student_id, q.quiz_id as quiz_id');
$this->db->from('quiz_enquiry s');

$this->db->join('quiz_answer q', 's.student_id = q.user_id');
$this->db->where('q.quiz_id', $exam_id);

$this->db->where('s.student_id <>', $student_id);
$this->db->group_by('s.student_id');


// Executing the query and fetching the result as an array.
$student_data2 = $this->db->get()->result_array();


?>
<?php if(!empty($student_data2) && !empty($student_id))
{?>




                                            <div class="form-group">
                                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Other Student');?></label>
                                                <div class="col-sm-12">

                                        <select  name="student_id2"  class="form-control">
                                            <option value="">Select</option>
                                            <option value="All">All</option>
                                            <?php
                                            foreach ($student_data2 as $key => $student): ?>
                                            <option value="<?php echo $student['student_id'];?>"<?php if(isset($student_id2) && $student_id2 == $student['student_id']) echo 'selected="selected"';?>><?php echo $student['name'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Student Percentage');?></label>
                                                <div class="col-sm-12">

												<select  name="percentage_type"  class="form-control">

                                        <option
																				<?php if(isset($percentage_type) && $percentage_type == 'score') echo 'selected="selected"';?>
																				<?php if(empty($percentage_type)) echo 'selected="selected"';?>

																				value="score">Score</option>
                                        <option

																				<?php if(isset($percentage_type) && $percentage_type == 'percentile') echo 'selected="selected"';?>

																				value="percentile">Percentile</option>
                                    </select>
                                </div>
                            </div>

                            <?php
                                            }?>
                                            <?php }?>


                                            <!-- if other student check end  -->


                            <input class="" type="hidden" value="selection" name="operation">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-search"></i>&nbsp;<?php echo get_phrase('Get Details');?></button>
                        </div>

                    </form>
            </div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
 <script>
      $("#exam_id").select2({
          placeholder: "Select exam",
          allowClear: true
      });

      $("#student_id").select2({
          placeholder: "Select Student",
          allowClear: true
      });


      </script>
