<?php if($type == 'home_block') { ?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="centersectiontitle">
				<h4><?php echo @$content->title; ?></h4>
			</div>
			<?php if(!empty($content->image)) { ?>
				<img src="<?php echo ADMIN_IMAGE_URL .'featured_images/'. $content->image; ?>" class="content-image col-sm-4 img-responsive" />
			<?php } ?>
			<?php echo @$content->description; ?>
		</div>
	</div>
<?php } ?>


<?php if($type == 'product_domestic') { ?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="centersectiontitle">
				<h4><?php echo $content->brand_name; ?>&nbsp;<i class="small">(<?php echo $content->generic_name; ?>)</i></h4>
			</div>
			<?php if(!empty($content->image)) { ?>
				<img src="<?php echo ADMIN_IMAGE_URL .'product_images/'. $content->image; ?>" class="content-image col-sm-4 img-responsive" />
			<?php } ?>
			<?php echo @$content->description; ?>
		</div>
	</div>
<?php } ?>


<?php if($type == 'product_international') { ?>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="centersectiontitle">
				<h4><?php echo $content->generic_name; ?></h4>
			</div>
			<?php if(!empty($content->image)) { ?>
				<img src="<?php echo ADMIN_IMAGE_URL .'product_images/'. $content->image; ?>" class="content-image col-sm-4 img-responsive" />
			<?php } ?>
			<?php echo @$content->description; ?>
		</div>
	</div>
<?php } ?>