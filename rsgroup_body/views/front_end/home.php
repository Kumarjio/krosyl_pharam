<?php 
    $count = 1;
    $main_count = 0;
    foreach ($block_details as $block) {
        echo ($count == 1) ? '<div class="row category-details">' : '' ; 
?>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        	<h3></span><?php echo $block->title; ?></h3>
        
        <img src="<?php echo ADMIN_IMAGE_URL .'featured_images/'. $block->image; ?>" alt="" class="img-border img-responsive">
        <?php echo character_limiter($block->description, 150); ?>
        <br />
        <a href="<?php echo base_url() . 'read_more/home/' . $block->id; ?>" class="button">More</a>
    </div>
<?php
        $count++;
        $main_count++;
        echo ($count == 4 || $total_blocks == $main_count) ? '</div>' : '';
        ($count == 4) ? $count = 1 : '';
    }
?>