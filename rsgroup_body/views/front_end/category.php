<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
			<h4><?php echo @$categroy_details->name; ?></h4>
		</div>
		<?php 
			if(!empty($categroy_details->image)) { ?>
			<img src="<?php echo ADMIN_IMAGE_URL .'category_images/'. $categroy_details->image; ?>" class="content-image col-sm-4 img-responsive" />
		<p class="text-justify"><?php
			}
			if(!empty($categroy_details->description)) {
			 	echo @$categroy_details->description; 
			}
		?></p>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4>Domestic Market</h4>
	</div>
</div>

<?php
if($domestic_product != false) {
    $count = 1;
    $main_count = 0;
    foreach ($domestic_product as $domestic) {
        echo ($count == 1) ? '<div class="row category-details">' : '' ; 
?>
	    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="services">
   			<div class="servtitle">
		        <div class="servicon text-center">
	        		<h3><?php echo $domestic->brand_name; ?></h3>
			        <h5 class="pad-bt-10"><i>(<?php echo $domestic->generic_name; ?>)</i></h5>
                </div>
            </div>
			<div>
	        <?php if(!empty($domestic->image)) { ?>
				<img src="<?php echo ADMIN_IMAGE_URL .'product_images/thumbnail/'. $domestic->image; ?>" class="content-image col-sm-6 img-responsive" />
			<?php } else { ?>
	            <img src="http://placehold.it/174x209&text=Krosyl%20Pharma" class="content-image col-sm-6 img-responsive" />
            <?php } ?>

			<?php if(!empty($domestic->description)) { ?>
				<p class="text-justify"><?php echo character_limiter(strip_tags($domestic->description), 150); ?></p>
	        	<span><a href="<?php echo base_url() . 'read_more/product_domestic/' . $domestic->id; ?>" class="button">More</a></span>
			<?php } ?>
         </div>
         </div>
	    </div>
<?php
    $count++;
        $main_count++;
        echo ($count == 3 || count($domestic_product) == $main_count) ? '</div>' : '';
        ($count == 3) ? $count = 1 : '';
    }
}
?>

<div class="centersectiontitle">&nbsp;</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h4>International Market</h4>
	</div>
</div>


<?php
if($international_product != false) {
    $count = 1;
    $main_count = 0;
    foreach ($international_product as $international) {
        echo ($count == 1) ? '<div class="row category-details">' : '' ; 
?>
	     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="services">
   			<div class="servtitle">
		        <div class="servicon text-center">
	        		<h3><?php echo $international->generic_name; ?></h3>
                </div>
            </div>
			<div>
	        <?php if(!empty($international->image)) { ?>
				<img src="<?php echo ADMIN_IMAGE_URL .'product_images/thumbnail/'. $international->image; ?>" class="content-image col-sm-6 img-responsive" />
			<?php } else { ?>
	            <img src="http://placehold.it/174x209&text=Krosyl%20Pharma" class="content-image col-sm-6 img-responsive" />
            <?php } ?>

			<?php if(!empty($international->description)) { ?>
				<p class="text-justify"><?php echo character_limiter(strip_tags($international->description), 150); ?></p>
	        	<span><a href="<?php echo base_url() . 'read_more/product_international/' . $international->id; ?>" class="button">More</a></span>
			<?php } ?>
         </div>
         </div>
	    </div>
<?php
    $count++;
        $main_count++;
        echo ($count == 3 || count($international_product) == $main_count) ? '</div>' : '';
        ($count == 3) ? $count = 1 : '';
    }
}
?>