<script>
    //<![CDATA[
    $(document).ready(function() {
        $("#add").validate({
            errorPlacement: function(error, element) {
                if (element.attr('type') === 'radio' || element.attr('type') === 'checkbox') {
                    error.appendTo(element.parent());
                }
                else {
                    error.insertAfter(element);
                }
            }
        });
    });
    //]]>
</script>
<div class="col-md-12">
    <h3>Edit Slider</h3>
    <hr>

    <form action="<?php echo ADMIN_URL . 'certificate/edit/' . $certificate->id; ?>" method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Certificate Title
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="text" name="certificatetitle" class="form-control required" placeholder="certificate Title" value="<?php echo $certificate->certificatetitle; ?>"/>
            </div>
        </div>

        
        
        <?php if($certificate->certificateimage != ''){ ?>
        	<div class="form-group">
                <label for="question" class="col-md-2 control-label">
                    Current certificate Image
                </label>
                <div class="col-md-2">
                    <img src="<?php echo ADMIN_IMAGE_URL .'certificate_images/' . $certificate->certificateimage;?>" class="img-responsive"/>
                </div>
            </div>
        <?php } ?>
        
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Certificate Image
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="file" name="certificateimage" class="form-control required" placeholder="certificate Image"/>
            </div>
            <?php
				if ($this->session->flashdata('file_errors')) {
					echo '<label class="error">' . $this->session->flashdata('file_errors') . '</label>';
				}
			?>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">&nbsp;</label>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">Update	</button>
                <a href="<?php echo ADMIN_URL . 'certificate' ?>" class="btn btn-inverse">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>