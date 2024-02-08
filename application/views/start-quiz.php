
<img class="brand-logo" src="<?php echo base_url(); ?>assets-frontend/img/quiz.jpg" alt="quiz">
<?php
$name = $this->session->userdata('first_name');
$title = $this->session->userdata('name_title');

?>

<form name="quiz" method="post" action="<?php echo base_url(); ?>question-paper">
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content quiz">
				<!-- dialog body -->
				<div class="modal-body">

					<center>
						<h3>OnLine Quiz</h3>
					</center>
					<br>
					<p>Welcome <?php echo ucfirst($title); ?> <?php echo  ucfirst($name); ?> in online quiz, select your quiz and then click on start quiz link.</p>
					<div class="form-row">
						<div class="col">
							<label for="quiz">SelectQuiz<span style="color: red;">*</span> :</label>
							<select name="quiz" id="quiz" class="form-control " required>


								<?php
								if (count($quiz_name) > 0) { ?>
									<option value="">Please Select Quiz</option>
									<?php
									foreach ($quiz_name as $quiz) {


									?>
										<option value="<?php echo $quiz->quiz_id; ?>"><?php echo ucfirst($quiz->quiz_name); ?></option>

									<?php }
								} else { ?>
									<option class="col">Quiz not available</style>
									</option>
								<?php }
								?>
							</select>

						</div>

					</div>
				</div>
				<!-- dialog buttons -->
				<div class="modal-footer"><?php if (!empty($quiz_name)) { ?><input type="submit" class="btn btn-primary" value="Start Quiz"><?php } ?> </div>

			</div>
		</div>
	</div>
</form>
</body>



<script>
	$("#myModal").modal({
		"backdrop": "static",
		"keyboard": true,
		"show": true
	});
</script>
