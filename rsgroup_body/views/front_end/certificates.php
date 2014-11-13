<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>magnific-popup.css">
<script src="<?php echo JS_URL; ?>jquery.magnific-popup.js"></script>
<script>
$(document).ready(function() {
  $('.image-popup').magnificPopup({type:'image'});
});
</script>
<div class="row">
  <div class="centersectiontitle">
    <h4> certificates </h4>
  </div>
  <?php foreach($certificates as $certificate ) { ?>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <?php if(!empty($certificate->certificateimage)) { ?>
    <a class="image-popup" href="<?php echo ADMIN_IMAGE_URL .'certificate_images/'. $certificate->certificateimage; ?>" title="Caption. Can be aligned it to any side and contain any HTML.">
        <img src="<?php echo ADMIN_IMAGE_URL .'certificate_images/'. $certificate->certificateimage; ?>" class="img-responsive thumbnail" />
      </a>
    <?php } ?>
  </div>
  <?php } ?>
</div>
