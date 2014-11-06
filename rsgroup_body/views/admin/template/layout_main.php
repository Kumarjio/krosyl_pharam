<!DOCTYPE html>
<html>
    <head>
        <title><?php echo @$page_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo ADMIN_CSS_URL; ?>bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo ADMIN_CSS_URL; ?>demo_table_jui.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_CSS_URL; ?>jquery-ui.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_CSS_URL; ?>jquery.confirm.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_CSS_URL; ?>DT_bootstrap.css" rel="stylesheet" />
        <link href="<?php echo ADMIN_JS_URL; ?>icheck/skins/all.css" rel="stylesheet">
        <link href="<?php echo ADMIN_JS_URL; ?>chosen/chosen.min.css" rel="stylesheet">
        <link href="<?php echo ADMIN_JS_URL; ?>summernote/summernote.min.css" rel="stylesheet">
        <link href="<?php echo ADMIN_JS_URL; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo ADMIN_CSS_URL; ?>custom.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo ADMIN_JS_URL; ?>jquery-1.7.2.min.js" type="text/javascript"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>jquery.validate.js" type="text/javascript"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>additional_jquery_validation.js" type="text/javascript"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>jquery.confirm.js" type="text/javascript"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>DT_bootstrap.js" type="text/javascript"></script>


        <script type="text/javascript">
            var http_host_js = '<?php echo ADMIN_URL; ?>';
        </script>
    </head>
    <body>
        <div class="container">
            <!--Header-->
            <div class="row padding-killer margin-killer login-page-header">
                <div class="container padding-killer">
                    <div class="project-logo-area">
                        <h2>Krosyl Pharmaceuticals Pvt Ltd.</h2>
                    </div>
                </div>   	
            </div>
            <!--/Header-->



            <!--Navigation Bar-->
            <div class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                    <li><a href="<?php echo ADMIN_URL . 'slider' ?>">Slider</a></li>
                        <li><a href="<?php echo ADMIN_URL . 'block' ?>">Homepage Block</a></li>
                        <li><a href="<?php echo ADMIN_URL . 'content' ?>">Content Management</a></li>
                          <li><a href="<?php echo ADMIN_URL . 'category' ?>">Category</a></li>
                        <li><a href="<?php echo ADMIN_URL . 'product' ?>">Products</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings   <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo ADMIN_URL . 'setting/kp_contact' ?>">Krosyl Contact Settings</a></li>
                        	<li><a href="<?php echo ADMIN_URL . 'setting/ct_contact' ?>">Chemotech Contact Settings</a></li>
                        
                         </ul>   
                        </li>
                    </ul>

                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown">
                            <?php $session = $this->session->userdata('admin_session'); ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo @$session->fullname; ?>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo ADMIN_URL . 'profile' ?>">Change Profile</a></li> 
                                <li><a href="<?php echo ADMIN_URL . 'password' ?>">Change Password</a></li>
                                <li><a href="<?php echo ADMIN_URL . 'logout'; ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
            <!--/Navigation Bar-->


            <!--Main Container-->
            <div class="">
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
            
                <?php echo @$content_for_layout; ?>
            </div>
            <!--Main Container-->

            <div class="text-center footer-style">
                <hr>
                Powered By <a href="http://rootisolutions.com">Root IT Solutions</a>.
            </div>
        </div>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo ADMIN_JS_URL; ?>bootstrap.min.js"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>chosen/chosen.jquery.min.js"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>icheck/icheck.min.js"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>summernote/summernote.min.js"></script>
        <script src="<?php echo ADMIN_JS_URL; ?>custom.js" type="text/javascript"></script>
    </body>
</html>
