<script type="text/javascript">
	$(document).ready(function () {
		$('ul.nav-tabs li a').click(function (e) {
		  
		  $(this).tab('show')
		})
	});
</script>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
			<h4><?php echo @$categroy_details->name; ?></h4>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

		<ul id="add_new_form" class="nav nav-tabs nav-justified">
		    <li class="active"><a href="#domestic_market" data-toggle="tab">Domestic Market</a></li>
		    <li class=""><a href="#international_market" data-toggle="tab">International Market</a></li>
		</ul>

		<div id="myTabContent" class="tab-content">
    		<div class="tab-pane in active" id="domestic_market">
    			<?php if($domestic_product != false) { ?>
					<?php foreach ($domestic_product as $domestic) { ?>
					<div class="table-responsive">
						<table class="product-table">
							<tr>
								<td class="vertical-middle" width="34%">
									<?php if(!empty($domestic->image)) { ?>
										<img src="<?php echo ADMIN_IMAGE_URL .'product_images/'. $domestic->image; ?>" class="img-responsive product-display"/>
									<?php } ?>
								</td>

								<td width="50%">
									<h3><?php echo $domestic->brand_name; ?></h3>
							        <h5 class="pad-bt-10"><i>(<?php echo $domestic->generic_name; ?>)</i></h5>
							        <p><?php echo $domestic->description; ?></p>
								</td>

								<td class="vertical-middle" width="14%">
									<?php if(!empty($domestic->description)) { ?>
						        		<span><a href="<?php echo base_url() . 'read_more/product_domestic/' . $domestic->id; ?>" class="button">More</a></span>
									<?php } ?>
								</td>
							</tr>
							</table>
							</div>
						<br />
					<?php } ?>
    			<?php } ?>
    		</div>

    		<div class="tab-pane" id="international_market">
    			<?php if($international_product != false) { ?>
					<?php foreach ($international_product as $international) { ?>
					<div class="table-responsive">
						<table class="product-table">
							<tr>
								<td class="vertical-middle" width="34%">
									<?php if(!empty($international->image)) { ?>
										<img src="<?php echo ADMIN_IMAGE_URL .'product_images/'. $international->image; ?>" class="img-responsive product-display"/>
									<?php } ?>
								</td>

								<td width="50%">
									<h3><?php echo $international->generic_name; ?></h3>
							        <p><?php echo character_limiter($international->description, 150); ?></p>
								</td>

								<td class="vertical-middle" width="14%">
									<?php if(!empty($international->description)) { ?>
						        		<span><a href="<?php echo base_url() . 'read_more/product_international/' . $international->id; ?>" class="button">More</a></span>
									<?php } ?>
								</td>
							</tr>
							</table>
							</div>
						<br />
					<?php } ?>
    			<?php } ?>
    		</div>
    	</div>

	</div>
</div>