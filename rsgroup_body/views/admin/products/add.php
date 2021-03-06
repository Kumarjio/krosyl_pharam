<script>
    //<![CDATA[
    $(document).ready(function() {

        $('.checkbox-error').hide();

        $("#add").validate({
            errorPlacement: function(error, element) {
                if (element.attr('type') === 'radio' || element.attr('type') === 'checkbox') {
                    //error.appendTo(element.parent());
                    $('.checkbox-error').show();
                    $('.checkbox-error').html(error);
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
    <h3>Add New Product</h3>
    <hr>

    <form action="<?php echo ADMIN_URL . 'product/add' ?>" method="post" id="add" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Selecte Category
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <select name="category_id" class="form-control required">
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Select market
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <div class="checkbox">
                    <input type="checkbox" id="checkbox-1" name="market[]" value="D" class="i-grey-flat required" />
                    <label for="checkbox-1">Domestic</label>
                </div>

                <div class="checkbox">
                    <input type="checkbox" id="checkbox-2" name="market[]" value="I" class="i-grey-flat required" />
                    <label for="checkbox-2">International</label>
                </div>
                <span class="checkbox-error"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Brand Name
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="text" name="brand_name" class="form-control required" placeholder="Brand Name"/>
            </div>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Generic Name
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="text" name="generic_name" class="form-control required" placeholder="Generic Name"/>
            </div>
        </div>
        
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Prodcut Image
                <span class="text-danger">&nbsp;</span>
            </label>
            <div class="col-md-4">
                <input type="file" name="image" class="form-control" placeholder="Product Image"/>
            </div>
            <?php
				if ($this->session->flashdata('file_errors')) {
					echo '<label class="error">' . $this->session->flashdata('file_errors') . '</label>';
				}
			?>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Descrpition
                <span class="text-danger">&nbsp;</span>
            </label>
            <div class="col-md-8">
                <textarea name="description" class="summernote-sm"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">&nbsp;</label>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?php echo ADMIN_URL . 'product' ?>" class="btn btn-inverse">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>