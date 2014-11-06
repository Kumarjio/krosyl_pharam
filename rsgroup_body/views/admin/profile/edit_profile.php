
<div class="col-md-12">
    <h3>Edit Profile</h3>
    <hr>

    <form action="<?php echo ADMIN_URL . 'profile' ?>" method="post" id="add" class="form-horizontal">
    
 
    
    <div class="form-group">
            <label for="question" class="col-md-2 control-label">
               Username
                
            </label>
            <div class="col-md-8">
                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $profile->username; ?>"/>
            </div>
        </div>
    
    <div class="form-group">
            <label for="question" class="col-md-2 control-label">
               Full Name
                
            </label>
            <div class="col-md-8">
                <input type="text" name="fullname" class="form-control" placeholder="Full Name" value="<?php echo $profile->fullname; ?>"/>
            </div>
        </div>
   
    <div class="form-group">
            <label for="question" class="col-md-2 control-label">
               Email
                
            </label>
            <div class="col-md-8">
                <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $profile->email; ?>"/>
            </div>
        </div>
        

       

        <div class="form-group">
            <label class="col-md-2 control-label">&nbsp;</label>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">Update	</button>
                <a href="<?php echo ADMIN_URL . 'dashboard' ?>" class="btn btn-inverse">Cancel</a>
            </div>
        </div>

        <div class="form-group">
            Fields marked with  <span class="text-danger">*</span>  are mandatory.
        </div>
    </form>
</div>