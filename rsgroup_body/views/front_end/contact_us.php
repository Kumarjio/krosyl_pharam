<script>
$(document).ready(function(){
      $('#kpform').validate();
    });


</script><div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="centersectiontitle">
				<h4>Contact Us</h4>
			</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<iframe width="100%" height="275" src="http://regiohelden.de/google-maps/map_en.php?hl=en&amp;q=Aishwarya%20apartment%2C%20Ellora%20park%2C%20Vadodara%2C%20390-007+(Krosyl%20Pharmaceutical%20Pvt.%20Ltd.)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>
</div>

<br />
<?php if ($this->session->flashdata('success') != '') { ?>
	<div class="row">
	    <div class="col-lg-12">
	        <div class=" alert alert-success fade in alert-dismissable">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	            <p class="text-center">
	                <?php echo $this->session->flashdata('success'); ?>
	            </p>
	        </div>
	    </div>
	</div>
	<br />
<?php } ?>

<form id="kpform" class="form-horizontal" method="post" action="<?php echo base_url() .'send_mail'; ?>" >
	<fieldset>
		<legend>Feel free to tell us</legend>
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
			    	<option value="DCI">Domestic Inquiry</option>
			    	<option value="ILI">International Inquiry</option>
			    	<option value="SSI">Sales Inquiry</option>
			    	<option value="SRI">Supplier Inquiry</option>
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
		    	<button type="submit" class="btn btn-block btn-primary">Send</button>
		    </div>
		</div>
	</fieldset>
</form>