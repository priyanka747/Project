			<div class="container">
			
			<div class="row">

			<div class="col-sm">
			
			<h3  style="text-align: center;">Admin Information </h3>
			<br/>
			<?php 
										// if( validation_errors()){
											echo validation_errors('<div class="alert alert-danger">','</div>');
										// }
										if($this->session->userdata('error')){?>
											<div class="alert alert-danger"><?php echo $this->session->userdata('error'); $this->session->unset_userdata('error'); ?></div>
										<?php }
										if($this->session->userdata('success')){?>
											<div class="alert alert-success"><?php echo $this->session->userdata('success'); $this->session->unset_userdata('success'); ?></div>
										<?php }?>
			<form action="<?php echo base_url();?>update-profile" method="post" enctype="multipart/form-data">
						<div class="form-group">
                            <label class="control-label" for="textarea2">Current password </label><br/>
                            <input class="form-control" name="pass" id="currentpassword" type="password" required />
							
                        </div>
   
						<div class="form-group">
                            <label class="control-label" for="textarea2">First Name </label><br/>
                            <input class="form-control" value="<?php echo $user[0]['first_name'];?>" name="fname" id="fname" type="text" required />
                        </div>
						
						<div class="form-group">
                           <label class="control-label" for="textarea2">Last Name </label><br/>
                            <input class="form-control" value="<?php echo $user[0]['last_name'];?>" name="lname" id="lname" type="text" required />
                        </div>
						
						
						
						<div class="form-group">
                            <label class="control-label" for="textarea2">Email </label><br/>
                            <input class="form-control" name="email" value="<?php echo $user[0]['email'];?>" id="Email" type="text" required /><br/>
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