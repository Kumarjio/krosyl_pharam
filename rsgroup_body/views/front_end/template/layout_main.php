<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Krosyl Pharmaceutical Pvt. Ltd. | A Leading Pharmaceutical Company</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo IMAGE_URL; ?>favicon.ico" />

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
          <script src="<?php echo ADMIN_JS_URL; ?>jquery.validate.js" type="text/javascript"></script>
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
          autoPlay : true,
          pagination : false
        });
      }
	  
	  
		$('#ct-contact-mail-form').on('shown.bs.modal', function () {
			$('.alert-message').hide();
			$('#ctform').validate();
			
			$('#submit_ct_form').click(function(){
				var post_data = {
				'name' : $('input[name="name"]').val(),
				'mno' : $('input[name="mno"]').val(),
				'email' : $('input[name="email"]').val(),
				'inquiry' : $('select[name="inquiry"]').val(),
				'message' : $('textarea[name="message"]').val()
			};
			
			 $.ajax({
				type: 'POST',
				url: '<?php echo base_url() ."send_chemotech_mail"; ?>',
				data: 	post_data,
				dataType : 'JSON',
				success: function(data) {
					if(data.status == 'success'){
						$('.alert-message').find('.alert').addClass('alert-success');
					}else{
						$('.alert-message').find('.alert').addClass('alert-danger');
					}
					$('.alert-message').show();
					$('.alert-message').find('p').html(data.msg)
					if($(".auto-close").length > 0){
						$(".auto-close").fadeTo(2500, 1000).slideUp(1000, function(){
							$('#ct-contact-mail-form').hide();
						});
					}
				}
			});
			});
		
		});
	  
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
      <div class="row"><div class="col-md-12 header-row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="<?php echo base_url(); ?>"><img src="<?php echo IMAGE_URL .'Krosyl_Final_Logo.png'; ?>" class="img-responsive logo"></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
          	<div class="row">
            	 <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                	<ul class="social-icons pull-right">
              <a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
              <a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
              <a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
              <a href="#"><i class="fa fa-2x fa-google-plus-square"></i></a>
            </ul>
                </div>
                
                <div class="col-md-12">
                	<nav class="navbar navcenter" role="navigation">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>

              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav pull-right navbar-nav">
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
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
              </div>
            </nav>
                </div>
                
            </div>
            
        
            </div>
          </div>  
	
       
      </div>

      <?php if($is_homepage){ ?>
      <br>

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="slider" class="owl-carousel owl-theme">
              <?php foreach($slider_details as $slider) { ?>
                <div class="item">
                  <div class="media">
                    <img class="lazyOwl media-object sm" src="<?php echo ADMIN_IMAGE_URL . 'slider_images/'. $slider->sliderimage; ?>" alt="Image"> </div>
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
                <ul class="list-1  shade-bg">
                  <?php
                    $cat = @$this->uri->segment(1);
                    $cat_id = @$this->uri->segment(2);
                  ?>
                  <?php foreach ($category_details as $category) { ?>
                    <li class="<?php echo ($cat == 'category' && $cat_id == $category->id) ? 'active' : ''; ?>"><a href="<?php echo base_url() .'category/' . $category->id; ?>"><?php echo $category->name; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="sidebar shade-bg">
                <h3>Contact Krosyl Pharma</h3>
                <ul class="contact-info">
                  <?php if(!empty($kp_contact['address'])) { ?>
                    <li>
                      <div class="contact-info-content">
                        <div class="description">
                          <?php echo $kp_contact['address']; ?>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['landline'])) { ?>
                    <li>
                      <div class="contact-info-content">
                        <div class="description">
                          <b>(T)&nbsp;&nbsp;:</b> <?php echo $kp_contact['landline']; ?>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['mobile_1'])) { ?>
                  <li>
                    <div class="contact-info-content">
                      <div class="description">
                        <b>(M)&nbsp;:</b> <?php echo $kp_contact['mobile_1']; ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['fax'])) { ?>
                    <li>
                      <div class="contact-info-content">
                        <div class="description">
                          <b>(F)&nbsp;&nbsp;:</b> <?php echo $kp_contact['fax']; ?>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['mail_1'])) { ?>
                  <li>
                    <div class="contact-info-content">
                      <div class="description">
                        <b>(M)&nbsp;:</b> <?php echo $kp_contact['mail_1']; ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <?php echo @$content_for_layout; ?>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <hr class="foot-hr">
              <h3><i>Our sister concern</i></h3>
              <img src="<?php echo ADMIN_IMAGE_URL .'content_images/'. $chemotech_content->image; ?>" class="content-image pull-left img-responsive" />
              <?php echo @$chemotech_content->description; ?>
              <p class="pull-right"><a href="#" class="button" data-toggle="modal" data-target="#ct-contact-mail-form">Inquiry</a></p>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="sidebar shade-bg">
                <h3 class="margin-top-killer">Head office</h3>
                <ul class="contact-info">
                  <?php if(!empty($kp_contact['address'])) { ?>
                    <li>
                      <div class="contact-info-content">
                        <div class="description">
                          <?php echo $kp_contact['address']; ?>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['landline'])) { ?>
                    <li>
                      <div class="contact-info-content">
                        <div class="description">
                          <?php echo $kp_contact['landline']; ?>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['mobile_1'])) { ?>
                  <li>
                    <div class="contact-info-content">
                      <div class="description">
                        <?php echo $kp_contact['mobile_1']; ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>


                  <?php if(!empty($kp_contact['mail_1'])) { ?>
                  <li>
                    <div class="contact-info-content">
                      <div class="description">
                        <?php echo $kp_contact['mail_1']; ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="sidebar shade-bg">
                <h3 class="margin-top-killer">Branch Office</h3>
                <ul class="contact-info">
                  <?php if(!empty($kp_contact['address'])) { ?>
                    <li>
                      <div class="contact-info-content">
                        <div class="description">
                          <?php echo $kp_contact['address']; ?>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['landline'])) { ?>
                    <li>
                      <div class="contact-info-content">
                        <div class="description">
                          <?php echo $kp_contact['landline']; ?>
                        </div>
                      </div>
                    </li>
                  <?php } ?>

                  <?php if(!empty($kp_contact['mobile_1'])) { ?>
                  <li>
                    <div class="contact-info-content">
                      <div class="description">
                        <?php echo $kp_contact['mobile_1']; ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>


                  <?php if(!empty($kp_contact['mail_1'])) { ?>
                  <li>
                    <div class="contact-info-content">
                      <div class="description">
                        <?php echo $kp_contact['mail_1']; ?>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    

    <footer>
      <p>All rights are resreved © 2014 Global</p>
      <p><a href="http://rootitsolutions.com.com/" target="_blank" class="link">Root IT Solutions</a></p>
    </footer>
    
    
 <div class="modal fade" id="ct-contact-mail-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Inquiry form of Chemotech</h4>
      </div>
      <div class="modal-body">
      <div class="pad margin no-print alert-message">
        <div class="auto-close alert fade in alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <p class="text-center"></p>
        </div>
    </div>
      
        <form id="ctform" class="form-horizontal" method="post" action="<?php echo base_url() ."send_chemotech_mail"; ?>" >
	<fieldset>
		<div class="form-group">
			<div class="col-md-6">
		  		<input name="name" type="text" placeholder="Name" class="required form-control input-md">
		  	</div>

		  	<div class="col-md-6">
		  		<input name="mno" type="text" placeholder="Mobile Number" class="required form-control input-md">
		  	</div>
		</div>

		<div class="form-group">
			<div class="col-md-6">
		  		<input name="email" type="email" placeholder="Email" class="required form-control input-md">
		  	</div>

		  	<div class="col-md-6">
		  		<select name="inquiry" class="required form-control">
		    		<option value="">Select type</option>
			    	<option value="GLI">General Inquiry</option>
			    	<option value="ILI">Industrial & Laboratory Chemicals Inquiry</option>
			    	<option value="GEI">Glassware Inquiry</option>
			    	<option value="ISI">Instruments Inquiry</option>
                    <option value="SSI">Surgicals Inquiry</option>
			    </select>
		  	</div>
		</div>

		<div class="form-group">
			<div class="col-md-12">               
		    	<textarea class="form-control required" name="message" placeholder="Message" rows="10"></textarea>
		    </div>
		</div>

		<div class="form-group">
			<div class="col-md-12">
              	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		    	<button type="button" class="btn btn-primary" id="submit_ct_form">Send</button>
		    </div>
		</div>
	</fieldset>
</form>
      </div>
    </div>
  </div>
</div>   
    
    
  </body>
</html>



