<div class="col-md-12">
  <h3>Edit Setting</h3>
  <hr>
  <form action="<?php echo ADMIN_URL . 'setting/' . $settings->system_type; ?>" method="post" id="add" class="form-horizontal">
    <?php 
            if(!empty($settings)){ 
                $array_textarea = array('google_address', 'address');
				
				$array_password = array('smtp_password');
                    foreach($settings as $setting){
        ?>
    <?php if(in_array($setting->system_key, $array_textarea)) { ?>
    <div class="form-group">
      <label for="question" class="col-md-2 control-label"> <?php echo ucwords(str_replace("_"," ",$setting->system_key)); ?> </label>
      <div class="col-md-4">
        <textarea class="form-control" name="<?php echo $setting->system_key; ?>" rows="10"><?php echo $setting->system_value; ?></textarea>
      </div>
    </div>
    <?php } else if(in_array($setting->system_key, $array_password)) { ?>
    <div class="form-group">
      <label for="question" class="col-md-2 control-label"> <?php echo ucwords(str_replace("_"," ",$setting->system_key)); ?> </label>
      <div class="col-md-4">
        <input type="password" name="<?php echo $setting->system_key; ?>" class="form-control" placeholder="<?php echo ucwords(str_replace("_"," ",$setting->system_key)); ?>" value="<?php echo $setting->system_value; ?>"/>
      </div>
    </div>
    <?php	} else { ?>
    <div class="form-group">
      <label for="question" class="col-md-2 control-label"> <?php echo ucwords(str_replace("_"," ",$setting->system_key)); ?> </label>
      <div class="col-md-4">
        <input type="text" name="<?php echo $setting->system_key; ?>" class="form-control" placeholder="<?php echo ucwords(str_replace("_"," ",$setting->system_key)); ?>" value="<?php echo $setting->system_value; ?>"/>
      </div>
    </div>
    <?php
                    }
                } 
            } 
        ?>
    <div class="form-group">
      <label class="col-md-2 control-label">&nbsp;</label>
      <div class="col-md-8">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo ADMIN_URL . 'slider' ?>" class="btn btn-inverse">Cancel</a> </div>
    </div>
    <div class="form-group"> Fields marked with <span class="text-danger">*</span> are mandatory. </div>
  </form>
</div>
