
<div class="row">
    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"><a href="<?php echo base_url().'/report/examMarkReportExamQuiz'; ?>" style="margin-right: 0px !important;">Reset</a>&nbsp;&nbsp;</div>
                <div class="panel-body table-responsive">

                    <!----CREATION FORM STARTS---->

                	<?php echo form_open(base_url() . 'report/examMarkReport4' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                            <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Quiz');?></label>
                                <div class="col-sm-12">
                                    <select  name="exam_id" class="form-control select2">
                                        <option value=""><?php echo get_phrase('select_class');?></option>

                                        <?php $exams =  $this->db->get('quiz_details')->result_array();
                                        foreach($exams as $key => $exam):?>
                                        <option value="<?php echo $exam['quiz_id'];?>"<?php if($exam_id == $exam['quiz_id']) echo 'selected="selected"' ;?>><?php echo $exam['quiz_name'];?></option>
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
                                        <option value="">Student Select</option>
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
                                        <option value="">Other Student Select</option>
                                        <option  value="All" selected="selected">All</option>
                                        <?php
                                        foreach($student_data2 as $key => $student): ?>
                                        <option value="<?php echo $student['student_id'];?>"

																				<?php if(isset($student_id2) && $student_id2 == $student['student_id']) echo 'selected="selected"';?>


																				><?php echo $student['name'];?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                               <label class="col-md-12" for="example-text">
                                <?php echo get_phrase('Student Percentage');?></label>
                                     <div class="col-sm-12">
                                    <select  name="percentage_type"  class="form-control">
                                    <option value="">Select Percentage By</option>
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
<?php

// Replace 123 with the actual student_id you want to filter



$query = $this->db->query("SELECT UNIX_TIMESTAMP(created_at) as date, quiz_id, score as value FROM quiz_report WHERE student_id = $student_id AND quiz_id = $exam_id");

$result = $query->result_array();

// Convert the result into the desired format
$formatted_result = array_map(function($row) {
    return [
        'date' => $row['date'] * 1000, // Multiply by 1000 to convert seconds to milliseconds
        'value' => (int)$row['value']
    ];
}, $result);

// Now $formatted_result contains the data in the desired format
$json_data = json_encode($formatted_result);


$this->db->select('s.name as name, s.student_id, q.quiz_id as quiz_id');
$this->db->from('student s');

$this->db->join('quiz_answer q', 's.student_id = q.user_id', 'right');
$this->db->where('q.quiz_id', $exam_id);

$this->db->where('s.student_id <>', $student_id);
$this->db->group_by('s.student_id');


// Executing the query and fetching the result as an array.
$student_data2 = $this->db->get()->result_array();

foreach($student_data2 as $student_data2)
{
    $student_id22 = $student_data2['student_id'];

    $query2 = $this->db->query("SELECT UNIX_TIMESTAMP(created_at) as date, quiz_id, score as value FROM quiz_report WHERE student_id = $student_id22 AND quiz_id = $exam_id");

    $result2 = $query2->result_array();

    // Convert the result into the desired format
    $formatted_result2 = array_map(function($row) {
        return [
            'date' => $row['date'] * 1000, // Multiply by 1000 to convert seconds to milliseconds
            'value' => (int)$row['value']
        ];
    }, $result2);

    // Now $formatted_result contains the data in the desired format
    $json_data2 = json_encode($formatted_result2);

}

?>


<style>
    body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

#chartdiv {
  width: 100%;
  height: 500px;
}
</style>


<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Responsive.js"></script>

<?php
$exam_id = 20;
$student_id2 = 45;
/* $query2 = $this->db->query("SELECT UNIX_TIMESTAMP(created_at) as date, quiz_id, score as value FROM quiz_report WHERE student_id = $student_id2 AND quiz_id = $exam_id");

$result2 = $query2->result_array(); */

$this->db->select('UNIX_TIMESTAMP(qr.created_at) as date, qr.quiz_id, qr.score as value, s.name as student_name');
$this->db->from('quiz_report qr');
$this->db->join('student s', 'qr.student_id = s.student_id');
$this->db->where('qr.student_id', $student_id2);
$this->db->where('qr.quiz_id', $exam_id);

$query2 = $this->db->get();
$result2 = $query2->result_array();




// Convert the result into the desired format
$formatted_result2 = array_map(function($row) {
$counter = 1;
return [
'name' => $row['student_name'],
/* 'date' => $row['date'] * 1000, */ // Multiply by 1000 to convert seconds to milliseconds
'value' => (int)$row['value'],
'color' => 'hsl(' . mt_rand(0, 360) . ', 100%, 50%)'
];
$counter++;
}, $result2);

// Now $formatted_result contains the data in the desired format
$json_data2 = json_encode($formatted_result2);

/* date  */

$this->db->select('UNIX_TIMESTAMP(qr.created_at) as date, qr.quiz_id, qr.score as value, s.name as student_name');
$this->db->from('quiz_report qr');
$this->db->join('student s', 'qr.student_id = s.student_id');
$this->db->where('qr.student_id', $student_id2);
$this->db->where('qr.quiz_id', $exam_id);

$query2 = $this->db->get();
$result2 = $query2->result_array();




// Convert the result into the desired format
$formatted_result_date = array_map(function($row) {
$counter = 1;
return [
'labels' => $row['date'] * 1000,
];
$counter++;
}, $result2);

// Now $formatted_result contains the data in the desired format
$json_data3 = json_encode($formatted_result2);
$json_data_dates = json_encode($formatted_result_date);

/* date end  */

?>
<canvas id="marksChart" width="400" height="200"></canvas>

<script src="your_script.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Sample data for multiple students

    var json_data_dates = <?php echo $json_data_dates; ?>;
    var json_data3 = <?php echo $json_data3; ?>;
    console.log(json_data3);
    const studentData = {
      labels: json_data_dates,
      students: json_data3, // Add data for each student
    };

    // Generate random data for 1000 students
    /* for (let i = 1; i <= 10; i++) {
      const student = {
        name: `Student ${i}`,
        data: Array.from(
          { length: 5 },
          () => Math.floor(Math.random() * 100) + 1
        ),
        color: `hsl(${(i * 360) / 50}, 100%, 50%)`, // Assign unique HSL color
      };
      studentData.students.push(student);
    } */

    /* for (let i = 1; i <= 10; i++) {
      const labels = i;
      studentData.labels.push(labels);
    } */

    // Get the canvas element
    const canvas = document.getElementById("marksChart");
    const ctx = canvas.getContext("2d");

    // Create a line chart
    const marksChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: studentData.labels,
        datasets: studentData.students.map((student) => ({
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
