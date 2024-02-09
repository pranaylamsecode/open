<div class="row">
    <div class="col-sm-5">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Notice'); ?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">

                    <?php echo form_open(base_url() . 'admin/notice/create_notice', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data'));?>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="example-text"><?php echo get_phrase('Title');?></label>
                            <input name="title" type="text" class="form-control" required>
                        </div>
                    </div>
                    
                    <!-- <div class="col-sm-12">
                        <div class="form-group">
                            <label><?php //echo get_phrase('notice_image');?>*</label>
                            <input type='file' class="form-control" name="notice_img" onChange="readURL(this);"
                                required>
                            <img id="blah" alt="" width="100%" />
                        </div>
                    </div> -->

                    <div class="form-group">
                        <button class="btn btn-block btn-info btn-rounded btn-sm"><i
                                class="fa fa-save"></i>&nbsp;<?php echo get_phrase('Update Notice');?></button>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!----CREATION FORM ENDS-->

    <div class="col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('Manage Notice');?>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body table-responsive">
                    <table id="example23" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>
                                    <div>#</div>
                                </th>
                                <th>
                                    <div><?php echo get_phrase('title');?></div>
                                </th>
                              
                                <!-- <th>
                                    <div><?php //echo get_phrase('notice image');?></div>
                                </th> -->
                                <th>
                                    <div><?php echo get_phrase('actions');?></div>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $counter = 1; 
                            $notices = $this->db->get('notice')->result_array();

                            foreach($notices as $key => $notice): ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo $notice['title'];?></td>
                               
                              <!--   <td>
                                    <img src="<?php //echo base_url('uploads/notice/') . $notice['notice_img']; ?>"
                                        alt="" style="width: 130px; height: 80px;">
                                </td> -->
                                <td>
                                    <a href="#"
                                        onclick="confirm_modal('<?php echo base_url();?>admin/notice/delete_notice/<?php echo $notice['id'];?>');">
                                        <button type="button" class="btn btn-danger btn-circle btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!----TABLE LISTING ENDS--->

<script type="text/javascript">
function get_class_subject(class_id) {
    $.ajax({
        url: '<?php echo base_url();?>admin/get_class_subject/' + class_id,
        success: function(response) {
            jQuery('#subject_selector_holder').html(response);
        }

    });
}
</script>