
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
<?php if(!empty($exam_id) && !empty($student_id) && !empty($result)):?>


<div id="chartdiv"></div>

<?php endif; ?>

<script>
    /**
     * ---------------------------------------
     * This demo was created using amCharts 5.
     *
     * For more information visit:
     * https://www.amcharts.com/
     *
     * Documentation is available at:
     * https://www.amcharts.com/docs/v5/
     * ---------------------------------------
     */

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv");

    const myTheme = am5.Theme.new(root);

    myTheme.rule("AxisLabel", ["minor"]).setAll({
        dy: 1
    });

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
        am5themes_Animated.new(root),
        myTheme,
        am5themes_Responsive.new(root)
    ]);

    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
        panX: false,
        panY: false,
        wheelX: "panX",
        wheelY: "zoomX",
        paddingLeft: 0
    }));

    // Add cursor
    // https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {
        behavior: "zoomX"
    }));
    cursor.lineY.set("visible", false);

    var date = new Date();
    date.setHours(0, 0, 0, 0);
    var value = 100;

    function generateData() {
        value = Math.round((Math.random() * 10 - 5) + value);
        am5.time.add(date, "day", 1);
        return {
            date: date.getTime(),
            value: value
        };
    }

    function generateDatas(count) {
        var data = [];
        for (var i = 0; i < count; ++i) {
            data.push(generateData());
        }
        return data;
    }

    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xAxis = chart.xAxes.push(am5xy.DateAxis.new(root, {
        maxDeviation: 0,
        baseInterval: {
            timeUnit: "day",
            count: 1
        },
        renderer: am5xy.AxisRendererX.new(root, {
            minorGridEnabled: true,
            minorLabelsEnabled: true
        }),
        tooltip: am5.Tooltip.new(root, {})
    }));

    xAxis.set("minorDateFormats", {
        "day": "dd",
        "month": "MM"
    });

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
        renderer: am5xy.AxisRendererY.new(root, {})
    }));

    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.LineSeries.new(root, {
        name: "Series",
        xAxis: xAxis,
        yAxis: yAxis,
        valueYField: "value",
        valueXField: "date",
        tooltip: am5.Tooltip.new(root, {
            labelText: "{valueY}"
        })
    }));

    // Add scrollbar
    // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
    chart.set("scrollbarX", am5.Scrollbar.new(root, {
        orientation: "horizontal"
    }));

    var data = generateDatas(30);
    var dataset = <?php echo $json_data; ?>;
    console.log(dataset);
    series.data.setAll(dataset);

    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series.appear(1000);
    chart.appear(1000, dataset.length);
</script>
<!-- normal js end  -->



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
