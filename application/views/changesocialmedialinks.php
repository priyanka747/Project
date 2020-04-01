
<!--style="background-color:grey;"-->

<body>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="login">
                        <img class="align-content" height=150 width=200  src="<?php echo base_url();?>images/fulllogo.png" alt="style stamp the final stamp to your fashion">
                    </a>
                </div>
                <div class="login-form">
                <?php 
										// if( validation_errors()){
											echo validation_errors('<div class="alert alert-danger">','</div>');
										// }
										if($this->session->userdata('error')){?>
											<div class="alert alert-danger"><?php echo $this->session->userdata('error'); $this->session->unset_userdata('error'); ?></div>
										<?php }
										// print_r($categories);
										if($this->session->userdata('success')){?>
											<div class="alert alert-success"><?php echo $this->session->userdata('success'); $this->session->unset_userdata('success'); ?></div>
										<?php }?>
                    
             
                
                   <form action="<?php echo base_url();?>update-socialmedia" method="post">
					    <div class="form-group">
                            <h2>Social Media Links of Company</h2>
                        </div>
        
	             	        <div class="form-group">  
								<div style="padding: 5px; display: inline-block;">Facebook</div>
						        <div style="padding: 5px; display: inline-block;"><a href="#" title="Facebook"><img src="https://res.cloudinary.com/diegoarbito/image/upload/v1469744665/facebook_bqjnna.png" style="width:50%"></a> </div>
					         	<div style="padding: 5px;  display: inline-block; margin-bottom: 1em;">	<input type="url" id="facebooklink" name="fl" placeholder="https://www.facebook.com/" style="width:250px" value="<?php echo $fl[0]['settings_value'] ?>">  </div>       
	                        </div>  
							<div class="form-group">  
								<div style="padding: 5px; display: inline-block;">linkedin</div>                          
								<div style="padding: 5px; display: inline-block;"><a href="#" title="LinkedIn"><img src="https://res.cloudinary.com/diegoarbito/image/upload/v1469744659/Linkedin_Icon_jfuwkc.png"style="width:50%"></a> </div>
								<div style="padding: 5px;  display: inline-block; margin-bottom: 1em;">	<input type="url" id="linkedinlink" name="ll" placeholder="https://www.linkedin.com/home/"  style="width:250px" value="<?php echo $ll[0]['settings_value'] ?>">  </div>       
	                        </div>      
					     	<div class="form-group">  
						        <div style="padding: 5px; display: inline-block;">twitter</div>                          
								<div style="padding: 5px; display: inline-block;"><a href="#" title="Twitter"><img src="https://res.cloudinary.com/diegoarbito/image/upload/v1469744663/Twitter_enkrbf.png"style="width:50%";></a></div>
                               	<div style="padding: 5px;  display: inline-block; margin-bottom: 1em;">	<input type="url" id="twitterlink" name="tl" placeholder="https://twitter.com/diegoarbito"  style="width:250px" value="<?php echo $tl[0]['settings_value'] ?>">  </div>       
					        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Change</button>      
                      
                    </form>
                </div>
            </div>
        </div>
    </div> 
	</body>
