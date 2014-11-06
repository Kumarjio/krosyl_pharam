<script>
    //<![CDATA[
    $(document).ready(function() {
        $("#manage_student").validate({
            rules: {
                old_password: {
                    remote: '<?php echo ADMIN_URL . 'profile/checkOldPassword'; ?>'
                },
                confirm_password: {
                    equalTo: "#password"
                }
            },
            messages: {
                old_password: {
                    remote : 'Password did not match. Please enter again'
                },
                confirm_password: {
                    equalTo: 'Please enter the SAME NEW PASSWORD again'
                }
            },
        });
    });
</script>
<div class="col-md-12">
    <h3>Change Password</h3>
    <hr>

    

    <form action="<?php echo ADMIN_URL . 'change_password' ?>" method="post" id="manage_student" class="form-horizontal">
        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Old Password
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="password" name="old_password" class="form-control required" placeholder="Old Password" autocomplete="off"/>
            </div>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                New Password
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="password" name="password" id="password" class="form-control required" placeholder="New Password" autocomplete="off"/>
            </div>
        </div>

        <div class="form-group">
            <label for="question" class="col-md-2 control-label">
                Confirm Password
                <span class="text-danger">*</span>
            </label>
            <div class="col-md-4">
                <input type="password" name="confirm_password" class="form-control required" placeholder="Confirm Password" autocomplete="off"/>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-2 control-label">&nbsp;</label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-default">Save</button>
                <a href="<?php echo ADMIN_URL . 'dashboard' ?>" class="btn btn-default">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>
