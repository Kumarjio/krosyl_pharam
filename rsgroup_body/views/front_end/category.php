<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
			<h4><?php echo @$categroy_details->name; ?></h4>
		</div>
		<?php 
			if(!empty($categroy_details->image)) { ?>
			<img src="<?php echo ADMIN_IMAGE_URL .'category_images/'. $categroy_details->image; ?>" class="content-image col-sm-4 img-responsive" />
		<?php
			}
			if(!empty($categroy_details->description)) {
			 	echo @$categroy_details->description; 
			}
		?>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
			<h4>Domestic Marekt</h4>
		</div>
	</div>
</div>


<?php
if($domestic_product != false) {
    $count = 1;
    $main_count = 0;
    foreach ($domestic_product as $domestic) {
        echo ($count == 1) ? '<div class="row category-details">' : '' ; 
?>
	    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	        <h4><?php echo $domestic->brand_name; ?></h4>
	        <h5><i>(<?php echo $domestic->generic_name; ?>)</i></h5>

	        <?php if(!empty($domestic->image)) { ?>
				<img src="<?php echo ADMIN_IMAGE_URL .'product_images/'. $domestic->image; ?>" class="content-image col-sm-4 img-responsive" />
			<?php } ?>

			<?php if(!empty($domestic->description)) { ?>
				<?php echo character_limiter($domestic->description, 150); ?>
				<br />
	        	<a href="<?php echo base_url() . 'read_more/product_domestic/' . $domestic->id; ?>" class="button">More</a>
			<?php } ?>
	    </div>
<?php
    $count++;
        $main_count++;
        echo ($count == 4 || count($domestic_product) == $main_count) ? '</div>' : '';
        ($count == 4) ? $count = 1 : '';
    }
}
?>


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
			<h4>International Marekt</h4>
		</div>
	</div>
</div>


<?php
if($domestic_product != false) {
    $count = 1;
    $main_count = 0;
    foreach ($international_product as $international) {
        echo ($count == 1) ? '<div class="row category-details">' : '' ; 
?>
	    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	        <h4><?php echo $international->generic_name; ?></h4>

	        <?php if(!empty($international->image)) { ?>
				<img src="<?php echo ADMIN_IMAGE_URL .'product_images/'. $international->image; ?>" class="content-image col-sm-4 img-responsive" />
			<?php } ?>

			<?php if(!empty($international->description)) { ?>
				<?php echo character_limiter($international->description, 150); ?>
				<br />
	        	<a href="<?php echo base_url() . 'read_more/product_international/' . $international->id; ?>" class="button">More</a>
			<?php } ?>
	    </div>
<?php
    $count++;
        $main_count++;
        echo ($count == 4 || count($domestic_product) == $main_count) ? '</div>' : '';
        ($count == 4) ? $count = 1 : '';
    }
}
?>