
<style>
    button.btn.btn-block.btn-flat.bg-purple {
    color: #fff;
}
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading"> <?php echo get_phrase('All Categories');?>


            </div>
            <div class="panel-body table-responsive">


                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>Student Name</th>
                            <th>gender</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Class</th>
                            <th>Exam Name</th>
                            <th>Score</th>
                            <th>Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    if(count($quiz_enquiry)) {
                        // print_r(count($quiz_details));
                        // exit;
                        foreach ($quiz_enquiry as $quiz_obj):
                        //  print_r($quiz_details);
                        //  exit;

                        ?>
                        <tr>
                            <td><?php echo ucfirst($quiz_obj['fullName']); ?></td>
                            <td><?php echo $quiz_obj['gender']; ?></td>
                            <td><?php echo $quiz_obj['email']; ?></td>
                            <td><?php echo $quiz_obj['mobileNumber']; ?></td>
                            <td><?php echo $quiz_obj['class']; ?></td>
                            <td><?php echo $quiz_obj['quiz_name']; ?></td>
                            <td><?php echo $quiz_obj['score']; ?></td>




                            <td> <!-- <a href="<?php echo base_url(); ?>quiz/edit_quiz_question/<?php echo $quiz_obj['id']; ?>"
                                    class="btn btn-info btn-circle btn-xs" style="color:white">
                                    <i class="fa fa-edit"></i>
                                </a> -->
                                <a href="#"
                                    onclick="confirm_modal('<?php echo base_url();?>quiz/manage_quiz_enquiry_delete/delete/<?php echo $quiz_obj['id']; ?>');"><button
                                        type="button" class="btn btn-danger btn-circle btn-xs" style="color:white"><i
                                            class="fa fa-times"></i></button></a>

                            </td>
                        </tr>
                        <?php
                          endforeach;
                    }
                ?>

                    </tbody>
                </table>



            </div>
        </div>
    </div>
</div>
