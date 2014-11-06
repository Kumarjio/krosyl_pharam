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
                {"sClass": ""}
            ],
            "sAjaxSource": "<?php echo ADMIN_URL . "content/getjson"; ?>"
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
            'title': 'Manage Slider',
            'message': 'Do you Want to Delete the Slider?',
            'buttons': {
                'Yes': {'class': 'btn btn-primary',
                    'action': function() {
                        $.ajax({
                            type: 'POST',
                            url: http_host_js + 'slider/delete/' + current_id,
                            data: id = current_id,
                            success: function() {
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
    <h3>Manage Content</h3>
    <hr>
</div>
<div class="col-md-12 add_button">
   
</div>
<div class="col-md-12">
    <table class="table table-bordered" id="list_data">
        <thead>
            <tr align="left">
               
                <th width="175">Title</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
              
                <td>etc</td>
               
            </tr>
        </tbody>
    </table>
</div>