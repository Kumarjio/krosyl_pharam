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
    <h3>Add New Slider</h3>
    <hr>

    <form action="<?php echo ADMIN_URL . 'category/add' ?>" method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Category Name
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="text" name="name" class="form-control required" placeholder="Category Name"/>
            </div>
        </div>
        
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
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo ADMIN_URL . 'category' ?>" class="btn btn-inverse">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>