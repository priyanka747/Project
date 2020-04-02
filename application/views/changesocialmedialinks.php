<style>
body{
background-color: #eee;}
</style>
	<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li class="active">Social Media Links</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="content">
            <div class="animated fadeIn">
	
                <div class="row">
				<div class="col-lg-2">
				</div>
                    <div class="col-lg-8">
                        <div class="card">
                           
                            <div class="card-body">

                                <div id="pay-invoice">
                                    <div class="card-body">
									
                                        <div class="card-title">  
										      <h3 class="text-center" >Social Media Links</h3>
                                        </div>

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
                                        <form action="<?php echo base_url();?>social-media-links" method="post" >
																		
											<div >Facebook </div>
											<div ><img src="https://res.cloudinary.com/diegoarbito/image/upload/v1469744665/facebook_bqjnna.png" ></a> </div>
											<span> 
												<input id="facebook_link" name="facebook_link" type="text" class="form-control" placeholder="Link for facebook"  value="https://www.facebook.com/" style="width:250px";>
											</span>          
											<div>linkedin</div>
											<span><a href="https://www.linkedin.com/in/diegoarbito" title="LinkedIn"><img src="https://res.cloudinary.com/diegoarbito/image/upload/v1469744659/Linkedin_Icon_jfuwkc.png"style="width:50%";></a> </span>
											<span> 
												<input  id="linkedin_link" name="cate_name" type="text" class="form-control" placeholder="Link for Linkedin"  value="https://www.linkedin.com/home/" style="width:250px";>
											</span>          
											<div>twitter</div>                          
											<div><a href="https://twitter.com/diegoarbito" title="Twitter"><img src="https://res.cloudinary.com/diegoarbito/image/upload/v1469744663/Twitter_enkrbf.png"style="width:50%";></a></div>
											<span> 
												<input id="twitter_link" name="cate_name" type="text" class="form-control" placeholder="Link for Twitter"  value="https://twitter.com/diegoarbito" style="width:250px";>
											</span>   
                                        </div>
                                            <div>
                                                <button id="btn btn-info" type="submit" class="btn btn-lg btn-info btn-block"> Submit
                                                </button>
                                            </div>
                                        </form> 

                                        </form>  

                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->
			

								</div>


</div><!-- .animated -->
</div><!-- .content -->
<div class="clearfix"></div>
