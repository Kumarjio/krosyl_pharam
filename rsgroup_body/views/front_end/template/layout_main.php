<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_URL; ?>reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_URL; ?>bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_URL; ?>style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_URL; ?>font-awesome.css">

    <link href="<?php echo PLUGIN_URL; ?>owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo PLUGIN_URL; ?>owl-carousel/owl.theme.min.css" rel="stylesheet">
    <link href="<?php echo PLUGIN_URL; ?>owl-carousel/owl.transitions.min.css" rel="stylesheet">
        

    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


    <script src="<?php echo JS_URL; ?>jquery-1.10.2.js"></script>
    <script src="<?php echo JS_URL; ?>bootstrap.js"></script>
    <script src="<?php echo PLUGIN_URL; ?>owl-carousel/owl.carousel.min.js"></script>

    <script>
		$(document).ready(function(){
            if ($('#slider').length > 0){
                $("#slider").owlCarousel({
                    navigation : false,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem:true,
                    autoPlay : true
                });
            }		
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/<?php echo IMAGE_URL; ?>banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="<?php echo JS_URL; ?>html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_URL; ?>ie.css">
	<![endif]-->
</head>
<body>
    <div class="container">
        <div class="row header-row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h1><a href="index.html">Krosyl Pharmaceutical Pvt. Ltd.</a></h1>
            </div>
        </div>
       
        <nav class="navbar " role="navigation">
            <div class="navbar-header"> 
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url(); ?>"><i class="fa fa-2x fa-home"></i></a></li>
                    <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Category 1</a></li>
                            <li><a href="#">Category 2</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url() .'market'; ?>">Market</a></li>
                    <li><a href="<?php echo base_url() .'about-us'; ?>">About Us</a></li>
                    <li><a href="<?php echo base_url() .'contact-us'; ?>">Contacts Us</a></li>
                </ul>

                <ul class="nav navbar-nav pull-right social-icons">
                    <a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                    <a href="#"><i class="fa fa-2x fa-google-plus-square"></i></a>
                </ul>
            </div>
        </nav>

        <?php if($is_homepage){ ?>
            <div class="row">  
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="slider" class="owl-carousel owl-theme">
                    <?php foreach($slider_details as $slider) { ?>
                        <div class="item">
                            <div class="media">
                                <img class="lazyOwl media-object sm" src="<?php echo ADMIN_IMAGE_URL . 'slider_images/'. $slider->sliderimage; ?>" alt="Image">
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <h3>Categories</h3>
                <ul class="list-1">
                    <?php foreach ($category_details as $category) { ?>
                        <li><a href="#"><?php echo $category->name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <?php echo @$content_for_layout; ?>
            </div>
        </div>
    </div>

    <div class="aside mar-tp-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <h3 class="margin-top-killer">Contact Us</h3>
                    <dl>
                        <dt>8901 Marmora Road,<br>Glasgow, D04 89GR.</dt>
                        <dd><span>Freephone: </span>+1 800 559 6580</dd>
                        <dd><span>Telephone: </span>+1 800 603 6035</dd>
                        <dd><span>Fax: </span>+1 800 889 9898</dd>
                        <dd><span>E-mail: </span><a href="#" class="link">mail@demolink.org</a></dd>
                    </dl> 
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <div class="text-center">
                        <h3 class="margin-top-killer">Our Most Respected Clients</h3>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>  
            
    <footer>
        <p>All rights are resreved © 2014 Global</p>
        <p><a rel="nofollow" href="http://rootitsolutions.com.com/" target="_blank" class="link">Root IT Solutions</a></p>
    </footer>	
         
</body>
</html>