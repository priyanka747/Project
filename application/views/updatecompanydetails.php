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
                                    <li><a href="#">settings</a></li>
                                    <li class="active">Company settings</li>
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
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Update Company settings</h3>
                                        </div>
                                        <!-- <hr> -->
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
			<form action="" method="post" enctype="multipart/form-data">
			
						<div class="form-group">
						
                            <label class="control-label" for="textarea2">Company Name </label>
                            <input class="form-control" name="company_name" id="company_name" type="text" required />
							
                        </div>
   
						<div class="form-group">
						    
                           
							<form action="/action_page.php">
							<label for="myfile">Select Company logo:</label>
							<input type="file" id="myfile" name="myfile" multiple><br><br>
							
							</form>
							
                        </div>
						
							<div class="form-group">
                            
                            <form action="/action_page.php">
							<label for="copyrightdate">Copyright Date:</label>
							<input type="date" id="cpydate" name="cpydate">
							
							
							
                        </div>
						
						
							
                        <div class="form-actions">
							               
							<button type="submit" class="btn btn-primary">Change</button>
							
					   </div>
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