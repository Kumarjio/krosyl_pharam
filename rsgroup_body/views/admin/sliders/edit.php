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

    <form action="<?php echo ADMIN_URL . 'slider/edit/' . $slider->id; ?>" method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Slider Title
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="text" name="slidertitle" class="form-control required" placeholder="Slider Title" value="<?php echo $slider->slidertitle; ?>"/>
            </div>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Slider Text
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="text" name="slidertext" class="form-control required" placeholder="Slider Text" value="<?php echo $slider->slidertext; ?>"/>
            </div>
        </div>
        
        <?php if($slider->sliderimage != ''){ ?>
        	<div class="form-group">
                <label for="question" class="col-md-2 control-label">
                    Current Slider Image
                </label>
                <div class="col-md-4">
                    <img src="<?php echo ADMIN_IMAGE_URL .'slider_images/' . $slider->sliderimage;?>" class="img-responsive"/>
                </div>
            </div>
        <?php } ?>
        
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Slider Image
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="file" name="sliderimage" class="form-control required" placeholder="Slider Image"/>
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
                <a href="<?php echo ADMIN_URL . 'slider' ?>" class="btn btn-inverse">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>