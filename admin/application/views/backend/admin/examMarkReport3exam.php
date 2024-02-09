
<div class="row">
    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <a href="<?php echo base_url().'/report/examMarkReportExamQuiz'; ?>" style="margin-right: 0px !important;">Reset</a>&nbsp;&nbsp;</div>
                <div class="panel-body table-responsive">

                    <!----CREATION FORM STARTS---->

                	<?php echo form_open(base_url() . 'report/examMarkReportBatchQuiz' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                            <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Quiz');?></label>
                                <div class="col-sm-12">
                                    <select  name="exam_id" class="form-control select2">
                                        <option value=""><?php echo get_phrase('select_class');?></option>

                                        <?php $exams =  $this->db->get('exam_quiz_details')->result_array();
                                        foreach($exams as $key => $exam):?>
                                        <option value="<?php echo $exam['exam_quiz_id'];?>"<?php if($exam_id == $exam['exam_quiz_id']) echo 'selected="selected"' ;?>><?php echo $exam['quiz_name'];?></option>
                                        <?php endforeach;?>
                                </select>

                                </div>
                            </div>

                                            <?php if(!empty($exam_id)){
                                                ?>
 <?php

$this->db->select('s.name as name, s.student_id, q.exam_quiz_id as exam_quiz_id');
$this->db->from('student s');

$this->db->join('exam_quiz_answer q', 'q.user_id = s.student_id');
$this->db->where('q.exam_quiz_id', $exam_id);


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
                                        <option value="">Select</option>

                                        <?php
                                        foreach ($student_data as $key => $student): ?>
                                        <option value="<?php echo $student['student_id'];?>"<?php if(isset($student_id) && $student_id == $student['student_id']) echo 'selected="selected"';?>><?php echo $student['name'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>

                            <?php
                                            }?>
                                            <?php }?>


                                            <!-- if other student check -->
                                            <?php if(!empty($exam_id)){
                                                ?>
 <?php



$this->db->select('s.name as name, s.student_id, q.exam_quiz_id as exam_quiz_id');
$this->db->from('student s');

$this->db->join('exam_quiz_answer q', 'q.user_id = s.student_id');
$this->db->where('q.exam_quiz_id', $exam_id);
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





                            <?php
                                            }?>
                                            <?php }?>


                                            <!-- if other student check end  -->

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


                            <input class="" type="hidden" value="selection" name="operation">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-search"></i>&nbsp;<?php echo get_phrase('Get Details');?></button>
                        </div>

                    </form>
            </div>
		</div>
	</div>
</div>

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Responsive.js"></script>

<?php

$this->db->select('UNIX_TIMESTAMP(qr.created_at) as date, qr.exam_quiz_id, qr.score as value, s.name as student_name');
$this->db->from('exam_quiz_report qr');
$this->db->join('student s', 'qr.student_id = s.student_id');
$this->db->where('qr.student_id', $student_id);
$this->db->where('qr.exam_quiz_id', $exam_id);

$query2 = $this->db->get();
$result2 = $query2->result_array();



// Loop through each row of the query result
foreach ($result2 as $row) {
	// Construct an array for each student with 'name', 'data', and 'labels' keys

	$random_hue = mt_rand(0, 360);

	$student_data = array(
			'name' => $row['student_name'], // Student name
			'data' => array($row['value']), // Student's score data
			'labels' => array(date('Y-m-d', $row['date'])) ,// Date converted to 'YYYY-MM-DD' format
			'color' => "hsl($random_hue, 100%, 50%)" // Random
	);

	// Check if the student name already exists in $json_data
	if (array_key_exists($row['student_name'], $json_data)) {
			// Append data and labels to existing student entry
			$json_data[$row['student_name']]['data'][] = $row['value'];
			$json_data[$row['student_name']]['labels'][] = date('Y-m-d', $row['date']);
	} else {
			// Add new student entry to $json_data
			$json_data[$row['student_name']] = $student_data;
	}
}

// Convert associative array to indexed array
$json_data = array_values($json_data);

// Encode the array to JSON
$json_string = json_encode($json_data, JSON_PRETTY_PRINT);

?>

<?php
//!empty($result2)
if(true)
{
	?>

<canvas id="marksChart" width="400" height="200"></canvas>

	<?php
} ?>
<script src="your_script.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Sample data for multiple students
		/* var json_data3 =<?php // echo $json_string; ?>;
		console.log(json_data3); */


    var json_data3 = [
        {
            "name": "Testing Student",
            "data": [3, 6, 6, 6],
            "labels": ["2024-02-01", "2024-02-02", "2024-02-03", "2024-02-04"],
            "color": "hsl(73, 100%, 50%)"
        },
        {
            "name": "Testing Student",
            "data": [6, 9, 12, 15],
            "labels": ["2024-02-01", "2024-02-02", "2024-02-03", "2024-02-04"],
            "color": "hsl(123, 100%, 50%)"
        },
        {
            "name": "Testing Student",
            "data": [9, 12, 15, 18],
            "labels": ["2024-02-01", "2024-02-02", "2024-02-03", "2024-02-04"],
            "color": "hsl(350, 100%, 50%)"
        },
        {
            "name": "Testing Student",
            "data": [12, 15, 18, 21],
            "labels": ["2024-02-01", "2024-02-02", "2024-02-03", "2024-02-04"],
            "color": "hsl(317, 100%, 50%)"
        }
    ];

    // Get the canvas element
    const canvas = document.getElementById("marksChart");
    const ctx = canvas.getContext("2d");

    // Create a line chart
    const marksChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: json_data3[0].labels, // Assuming all students have the same labels
            datasets: json_data3.map((student) => ({
                label: student.name,
                data: student.data,
                borderColor: student.color,
                fill: false,
            })),
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                },
            },
        },
    });
});



</script>

<!-- campaire js end  -->
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
