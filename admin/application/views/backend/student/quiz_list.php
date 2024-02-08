
<section class="quiz">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="quiz-start">
                    <div class="text-center">

                    </div>
                    <div class="mt-5">
                        <form name="quiz"  method="post" action="<?php echo base_url();?>question-paper">
                            <div class="form-group">
                            <input type="hidden" value="0" name="step_instruction">
                                <label for="quiz">Select Quiz<span style="color: red;">*</span> :</label>
                                <select name="quiz" id="quiz" class="form-control " required>



                                    <?php
	                            if(count($quiz_name) > 0){ ?>
                                    <option value="">Please Select Quiz</option>
                                    <?php
	                            foreach($quiz_name as $quiz)
	                            {
                                    // print_r($quiz_name);
                                    // exit;
	                            ?>
                                    <option value="<?php echo $quiz->exam_quiz_id; ?>"><?php echo $quiz->quiz_name; ?>
                                    </option>

                                    <?php }
                                } else
                                { ?>
                                    <option class="col">Quiz not available</style>
                                    </option>
                                    <?php }
	                            ?>
                                </select>
                            </div>

                            <div class="mt-5">
                                <label for="level_type">Select Level<span style="color: red;">*</span> :</label>
                                <select name="level_type" id="level_type" class="form-control " required>

                                    <option value="0">Easy</option>
                                    <option value="1">Hard</option>


                                </select>

                            </div>
                            <div class="mt-4"><?php if(!empty($quiz_name)){ ?><input type="submit"
                                    class="btn btn-primary" value="Start Quiz"><?php } ?> </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
