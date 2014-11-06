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
    <h3>Edit Category</h3>
    <hr>

    <form action="<?php echo ADMIN_URL . 'category/edit/' . $category->id; ?>" method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Category Name
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="text" name="name" class="form-control required" placeholder="Category Name" value="<?php echo $category->name; ?>"/>
            </div>
        </div>
        
        <?php if($category->image != ''){ ?>
        	<div class="form-group">
                <label for="question" class="col-md-2 control-label">
                    Current category Image
                </label>
                <div class="col-md-2">
                    <img src="<?php echo ADMIN_IMAGE_URL .'category_images/' . $category->image;?>" class="img-responsive"/>
                </div>
                <div class="col-md-2">
                    <a href="<?php echo ADMIN_URL .'category/image_remove/' . $category->id; ?>"> Remove Image </a>
                </div>
            </div>
        <?php } ?>
        
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Category Image
                <span class="text-danger">&nbsp;</span>
            </label>
            <div class="col-md-4">
                <input type="file" name="image" class="form-control" placeholder="Category Image"/>
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
                <a href="<?php echo ADMIN_URL . 'category' ?>" class="btn btn-inverse">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>