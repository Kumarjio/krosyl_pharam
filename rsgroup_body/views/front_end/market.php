<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
			<h4><?php echo @$domestic_content->title; ?></h4>
		</div>
		<?php if(!empty($domestic_content->image)) { ?>
			<img src="<?php echo ADMIN_IMAGE_URL .'content_images/'. $domestic_content->image; ?>" class="thumbnail mar-rt-10 col-sm-4 img-responsive" />
		<?php } ?>
		<p class="text-justify"><?php echo @$domestic_content->description; ?></p>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
			<h4><?php echo @$international_content->title; ?></h4>
		</div>
		<?php if(!empty($international_content->image)) { ?>
			<img src="<?php echo ADMIN_IMAGE_URL .'content_images/'. $international_content->image; ?>" class="thumbnail mar-rt-10 col-sm-4 img-responsive" />
		<?php } ?>
		<p class="text-justify"><?php echo @$international_content->description; ?></p>
	</div>
</div>