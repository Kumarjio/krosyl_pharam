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
		    $('.summernote-sm').summernote({
            height: 200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
    //]]>
</script>
<div class="col-md-12">
    <h3>Edit Content</h3>
    <hr>

    <form action="<?php echo ADMIN_URL . 'content/edit/' . $content->id; ?>" method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Content Title
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-8">
                <input type="text" name="title" class="form-control required" placeholder="Content Title" value="<?php echo $content->title; ?>"/>
            </div>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Content Description
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-8">
            

 <textarea name="description" class="summernote-sm"><?php echo $content->description; ?></textarea>
            </div>
        </div>
        
        <?php if($content->image != ''){ ?>
        	<div class="form-group">
                <label for="question" class="col-md-2 control-label">
                    Featured Image
                </label>
                <div class="col-md-4">
                    <img src="<?php echo ADMIN_IMAGE_URL .'content_images/' . $content->image;?>" class="img-responsive"/>
                </div>
            </div>
        <?php } ?>
        
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Featured Image
                <span class="text-danger">&nbsp;</span>
            </label>
            <div class="col-md-8">
                <input type="file" name="image" class="form-control required" placeholder="Content Image"/>
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
                <a href="<?php echo ADMIN_URL . 'content' ?>" class="btn btn-inverse">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>