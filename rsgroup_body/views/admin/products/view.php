<script type="text/javascript" >
    $(document).ready(function() {
        datatable();
    });

    function datatable() {
        if (typeof dTable != 'undefined') {
            dTable.fnDestroy();
        }
        dTable = $('#list_data').dataTable({
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "bProcessing": true,
            'iDisplayLength': 25,
            "bSort": false,
            "aoColumns": [
                {"sClass": ""}, {"sClass": ""}, {"sClass": ""}, {"sClass": "text-center"}
            ],
            "sAjaxSource": "<?php echo ADMIN_URL . "product/getjson"; ?>"
        });
    }

    function UpdateRow(ele) {
        var current_id = $(ele).attr('id');
        var parent = $(ele).parent().parent();
        var status = '';
        if ($('.status').html() == '<span class="label label-success">Active</span>') {
            status = 'Deactive';
        } else if ($('.status').html() == '<span class="label label-danger">Deactive</span>') {
            status = 'Active';
        }

        $.confirm({
            'title': 'Manage Category',
            'message': 'Do you Want to Delete the Category?',
            'buttons': {
                'Yes': {'class': 'btn btn-primary',
                    'action': function() {
                        $.ajax({
                            type: 'POST',
                            url: http_host_js + 'product/delete/' + current_id,
                            data: id = current_id,
                            success: function() {
                                window.location.reload();
                            }
                        });
                    }
                },
                'No': {
                    'class': 'btn btn-inverse',
                    'action': function() {
                    }	// Nothing to do in this case. You can as well omit the action property.
                }
            }
        });
        return false;
    }
</script>
<div class="col-md-12">
    <h3>Manage Products</h3>
    <hr>
</div>
<div class="col-md-12 add_button">
    <a href="<?php echo ADMIN_URL . 'product/add'; ?>" class="btn btn-primary">
        Add New Product
    </a>
</div>
<div class="col-md-12">
    <table class="table table-bordered" id="list_data">
        <thead>
            <tr align="left">
                <th>Brand Name</th>
                <th>Generic Name</th>
                <th>Category</th>
                <th width="25">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>etc</td>
                <td>etc</td>
                <td>etc</td>
                <td>etc</td>
            </tr>
        </tbody>
    </table>
</div>