<script>
    //<![CDATA[
    $(document).ready(function() {
        $("#login_form").validate()
    });
</script>

<div class="container">
    <div class="login-box-style">
        <form id="login_form" class="form-signin" action="<?php echo ADMIN_URL; ?>validate" method="post">
            <legend class="text-center">Welocme to Admin Area</legend>
            <div class="col-lg-12 margin-killer padding-killer">
                <?php if ($this->session->flashdata('error') != '' || $this->session->flashdata('success') != '') { ?>
                    <?php
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger"><a href="' . current_url() . '" class="close" data-dismiss="alert">&times;</a>' . $this->session->flashdata('error') . '</div>';
                    }
                    ?>

                    <?php
                    if ($this->session->flashdata('success') != '') {
                        echo '<div class="alert alert-success"><a href="' . current_url() . '" class="close" data-dismiss="alert">&times;</a>' . $this->session->flashdata('success') . '</div>';
                    }
                    ?>
                <?php } ?>
            </div>
            <div class="col-lg-12 margin-killer padding-killer">
                <span class="login-box-label col-md-12 margin-killer padding-killer">
                    <?php echo $this->lang->line('mail_address'); ?>
                </span>
                <input name="email_address" type="text" class="form-control col-md-12 required" placeholder="Username" autofocus value="<?php echo set_value('email_address'); ?>">
                <span class="text-danger"><?php echo form_error('email_address'); ?></span>
            </div>
            <div class="col-lg-12 margin-killer padding-killer">
                <br>
                <span class="login-box-label col-md-12 margin-killer padding-killer">
                    <?php echo $this->lang->line('password'); ?>
                </span>
                <input  name="password" type="password" class="form-control col-md-12 required" placeholder="Password">
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>
            <div class="col-lg-12 margin-killer padding-killer">
                <br>
                <!--<span class="pull-left">
                    <a href="<?php echo ADMIN_BASE_URL . 'forgotpassword'; ?>">
                <?php echo $this->lang->line('forgot') . ' ' . $this->lang->line('password'); ?>?
                    </a>
                </span> -->
                <span class="pull-right">
                    <button class="btn btn-primary btn-lg pull-right" type="submit">Login</button>
                </span>
            </div>
        </form>
    </div>
</div>