			<div class="container">
			
			<div class="row">

			<div class="col-sm">
			
			<h3  style="text-align: center;">Admin Information </h3>
			<br/>
			<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
                            <label class="control-label" for="textarea2">Current password </label><br/>
                            <input class="form-control" name="currentpassword" id="currentpassword" type="text" required />
							
                        </div>
   
						<div class="form-group">
                            <label class="control-label" for="textarea2">First Name </label><br/>
                            <input class="form-control" name="fname" id="fname" type="text" required />
                        </div>
						
						<div class="form-group">
                           <label class="control-label" for="textarea2">Last Name </label><br/>
                            <input class="form-control" name="lname" id="lname" type="text" required />
                        </div>
						
						
						
						<div class="form-group">
                            <label class="control-label" for="textarea2">Email </label><br/>
                            <input class="form-control" name="Email" id="Email" type="text" required /><br/>
                        </div>
							
						<div class="row">
						<a  class="btn btn-primary col col-md-2" href="<?php echo base_url(); ?>">Back to dashboard</a>
					
							<button type="submit" class="btn btn-primary col col-lg-4">Submit</button>
							<button type="submit" class="btn btn-primary col col-lg-2 float-right">Change password</button>
                        </div>
						
						</div>
							
                       
                </form>  
			
			</div>
			<div class="col-sm">
			</div>
			</div>