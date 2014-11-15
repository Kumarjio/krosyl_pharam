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
        <link href="http://fonts.googleapis.com/css?family=Condiment" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
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
              <a href="index.php"><img src="<?php echo IMAGE_URL .'Krosyl_Final_Logo.png'; ?>" class="img-responsive"></a>
            </div>
  </div>
          <nav class="navbar " role="navigation">
    <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-2x fa-home"></i></a></li>
        <li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                  <ul class="dropdown-menu">
            <?php foreach ($category_details as $category) { ?>
            <li><a href="<?php echo base_url() .'category/' . $category->id; ?>"><?php echo $category->name; ?></a></li>
            <?php } ?>
          </ul>
                </li>
        <li><a href="<?php echo base_url() .'market'; ?>">Market</a></li>
         <li><a href="<?php echo base_url() .'certificates'; ?>">Certificates</a></li>
        <li><a href="<?php echo base_url() .'about-us'; ?>">About Us</a></li>
        <li><a href="<?php echo base_url() .'contact-us'; ?>">Contacts Us</a></li>
      </ul>
              <ul class="nav navbar-nav pull-right social-icons">
        <a href="#"><i class="fa fa-2x fa-facebook-square"></i></a> <a href="#"><i class="fa fa-2x fa-twitter-square"></i></a> <a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a> <a href="#"><i class="fa fa-2x fa-google-plus-square"></i></a>
      </ul>
            </div>
  </nav>
          <?php if($is_homepage){ ?>
          <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div id="slider" class="owl-carousel owl-theme">
        <?php foreach($slider_details as $slider) { ?>
        <div class="item">
                  <div class="media"> <img class="lazyOwl media-object sm" src="<?php echo ADMIN_IMAGE_URL . 'slider_images/'. $slider->sliderimage; ?>" alt="Image"> </div>
                </div>
        <?php } ?>
      </div>
            </div>
  </div>
          <?php } ?>
          <div class="row">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="sidebar">
            <h3>Categories</h3>
            <ul class="list-1">
                      <?php foreach ($category_details as $category) { ?>
                      <li><a href="<?php echo base_url() .'category/' . $category->id; ?>"><?php echo $category->name; ?></a></li>
                      <?php } ?>
                    </ul>
          </div>
                </div>
      </div>
            </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
              <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> <?php echo @$content_for_layout; ?> </div>
      </div>
            </div>
  </div>
        </div>
<div class="footercon">
          <div class="container">
    <div class="row">
              <div class="col-md-3">
        <div class="con-sidebar mar-10">
                  <h3>Contact Krosyl Pharma</h3>
                  <ul class="contact-info">
            <?php if(!empty($kp_contact['address'])) { ?>
            <li> <i class="fa fa-map-marker"></i>
                      <div class="contact-info-content">
                <div class="title">Address:</div>
                <div class="description"><?php echo $kp_contact['address']; ?></div>
              </div>
                    </li>
            <?php } ?>
            <?php if(!empty($kp_contact['landline'])) { ?>
            <li> <i class="fa fa-phone"></i>
                      <div class="contact-info-content">
                <div class="title">Telephone:</div>
                <div class="description"><?php echo $kp_contact['landline']; ?></div>
              </div>
                    </li>
            <?php } ?>
            <?php if(!empty($kp_contact['mobile_1'])) { ?>
            <li> <i class="fa fa-mobile"></i>
                      <div class="contact-info-content">
                <div class="title">Mobile:</div>
                <div class="description"><?php echo $kp_contact['mobile_1']; ?></div>
              </div>
                    </li>
            <?php } ?>
            <?php if(!empty($kp_contact['fax'])) { ?>
            <li> <i class="fa fa-fax"></i>
                      <div class="contact-info-content">
                <div class="title">Fax:</div>
                <div class="description"><?php echo $kp_contact['fax']; ?></div>
              </div>
                    </li>
            <?php } ?>
            <?php if(!empty($kp_contact['mail_1'])) { ?>
            <li> <i class="fa fa-envelope-o"></i>
                      <div class="contact-info-content">
                <div class="title">Mail:</div>
                <div class="description"><?php echo $kp_contact['mail_1']; ?></div>
              </div>
                    </li>
            <?php } ?>
          </ul>
                </div>
      </div>
        <div class="col-md-9">
            <div class="row">
              <div class="col-md-8">
       <hr class="foot-hr">
        <div class="row">
                  <div class="col-md-12 text-center">
            <h3 class="margin-killer">From the House of</h3>
         
         
          
             <div class="col-md-12"> <img src="<?php echo IMAGE_URL .'Krosyl_Final_Logo.png'; ?>" class="img-kp-logo img-responsive"> </div>
             
                  <div class="col-md-12 text-center">
            <h3 class="mar-10">A Male of Life</h3>
          </div>
                  <div class="col-md-12 text-center">
            <h3 class="mar-10">Our Sister Firm.</h3>
          </div>
                </div>
        <div class="col-md-12"> <img src="<?php echo IMAGE_URL .'Chemologo.png'; ?>" class="img-kp-logo img-responsive"> </div>
        
      </div>
       <hr class="footer-hr">
            </div>
            
            <div class="col-md-4">
        <div class="con-sidebar mar-10">
                  <h3>Contact Chemotech</h3>
                  <ul class="contact-info">
            <?php if(!empty($ct_contact['address'])) { ?>
            <li> <i class="fa fa-map-marker"></i>
                      <div class="contact-info-content">
                <div class="title">Address:</div>
                <div class="description"><?php echo $ct_contact['address']; ?></div>
              </div>
                    </li>
            <?php } ?>
            
            <?php if(!empty($ct_contact['mobile_1'])) { ?>
            <li> <i class="fa fa-mobile"></i>
                      <div class="contact-info-content">
                <div class="title">Mobile:</div>
                <div class="description"><?php echo $ct_contact['mobile_1']; ?></div>
              </div>
                    </li>
            <?php } ?>
             <?php if(!empty($ct_contact['mobile_2'])) { ?>
            <li> <i class="fa fa-mobile"></i>
                      <div class="contact-info-content">
                <div class="title">Mobile:</div>
                <div class="description"><?php echo $ct_contact['mobile_2']; ?></div>
              </div>
                    </li>
            <?php } ?>
            <?php if(!empty($ct_contact['mail_1'])) { ?>
            <li> <i class="fa fa-envelope-o"></i>
                      <div class="contact-info-content">
                <div class="title">Mail:</div>
                <div class="description"><?php echo $ct_contact['mail_1']; ?></div>
              </div>
                    </li>
            <?php } ?>
            
            
          </ul>
                </div>
      </div>
            </div>
                
            </div>
            
            
            
            
  </div>
  <div class="row">
  	<div class="col-md-12">               
               <p class="text-justify"><?php echo @$chemotech_content->description; ?></p>
            </div></div>
        </div>
<footer>
          <p>All rights are resreved © 2014 Global</p>
          <p><a rel="nofollow" href="http://rootitsolutions.com.com/" target="_blank" class="link">Root IT Solutions</a></p>
        </footer>
</body>
</html>
