
<div class="row">
    <div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Quiz Score');?></div>
                <div class="panel-body table-responsive">

                    <!----CREATION FORM STARTS---->

                	<?php echo form_open(base_url() . 'report/examMarkReport3' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

                            <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Quiz');?></label>
                                <div class="col-sm-12">
                                    <select name="exam_id" class="form-control select2">
                                        <option value=""><?php echo get_phrase('select_class');?></option>

                                        <?php $exams =  $this->db->get('quiz_details')->result_array();
                                        foreach($exams as $key => $exam):?>
                                        <option value="<?php echo $exam['quiz_id'];?>"<?php if($exam_id == $exam['quiz_id']) echo 'selected="selected"' ;?>><?php echo $exam['quiz_name'];?></option>
                                        <?php endforeach;?>
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


<?php if(/* $student_id > 0 && $exam_id > 0 */false):?>





    <div class="row">
	<div class="col-sm-12">
		<div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('enter_student_score'); ?></div>
                <div class="panel-body table-responsive">

    					<table cellpadding="0" cellspacing="0" border="0" class="table">
								<thead>
									<tr>
										<td><?php echo get_phrase('Quiz Name');?></td>
										<td><?php echo get_phrase('attempt');?></td>
										<td><?php echo get_phrase('correct');?></td>
										<td><?php echo get_phrase('score');?></td>

									</tr>
								</thead>
                    				<tbody>

        <?php

                $verify_data = array('quiz_id' => $exam_id,'user_id' => $student_id,);
                $query = $this->db->get_where('quiz_answer', $verify_data);
                $update_subject_marks = $query->result_array();




           ?>


						<tr>
							<td>
								<?php echo $class_subject_exam_student['name'];?>
							</td>
							<td>
								<?php echo $general_select['class_score1'];?>
							</td>
							<td>
								<?php echo $general_select['class_score2'];?>
							</td>


                    </tbody>
               </table>

               <h3 align="center"> Student Score (Over 100)</h3>
                <div id="bar_chartdiv"></div>

			</div>
        </div>
	</div>
 </div>

<?php endif;?>
<script type="text/javascript">
    function show_students(class_id){
            for(i=0;i<=50;i++){
                try{
                    document.getElementById('student_id_'+i).style.display = 'none' ;
                    document.getElementById('student_id_'+i).setAttribute("name" , "temp");
                }
                catch(err){}
            }
            if (class_id == "") {
                class_id = "0";
        }
        document.getElementById('student_id_'+class_id).style.display = 'block' ;
        document.getElementById('student_id_'+class_id).setAttribute("name" , "student_id");
        var student_id = $(".student_id");
        for(var i = 0; i < student_id.length; i++)
            student_id[i].selected = "";
    }
</script>

<style>
    #bar_chartdiv {
        width		: 100%;
        height		: 397px;
        font-size	: 11px;
    }
	.amcharts-chart-div a{
    display:none !important;
    }
</style>

<script>
        var chart = AmCharts.makeChart("bar_chartdiv", {
            "theme": "light",
            "type": "serial",
            "startDuration": 2,
            "dataProvider": [



                  /*   {
                        "country": "<?php // echo // $class_subject_exam_student['name'];?>",
                        "visits": "<?php //  echo  //$sum_Class_score_and_exam_score;?>",
                        "color": "#99BDF9"
                    }, */


            ],
            "valueAxes": [{
                    "position": "left",
                    "title": "Student Score in Subject"
                }],
            "graphs": [{
                    "balloonText": "[[category]]: <b>[[value]]</b>",
                    "fillColorsField": "color",
                    "fillAlphas": 1,
                    "lineAlpha": 0.1,
                    "type": "column",
                    "valueField": "visits"
                }],
            "depth3D": 20,
            "angle": 30,
            "chartCursor": {
                "categoryBalloonEnabled": true,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "country",
            "categoryAxis": {
                "gridPosition": "start",
                "labelRotation": 90,
                "position": "bottom",
                "title": "All Subjects",
            },
            "export": {
                "enabled": true
            }

        });
        jQuery('.chart-input').off().on('input change', function () {
            var property = jQuery(this).data('property');
            var target = chart;
            chart.startDuration = 0;

            if (property == 'topRadius') {
                target = chart.graphs[0];
                if (this.value == 0) {
                    this.value = undefined;
                }
            }

            target[property] = this.value;
            chart.validateNow();
        });
    </script>
