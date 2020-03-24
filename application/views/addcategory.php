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
                                    <li><a href="#">category</a></li>
                                    <li class="active">add new category</li>
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
                                            <h3 class="text-center">Add Category</h3>
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
                                        <form action="<?php echo base_url();?>add-new-category" method="post" >
                                           
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input id="cc-payment" name="cate_name" type="text" class="form-control" placeholder="Name Of The Category">
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Category Description</label>
                                                <input id="cc-name" name="cate_desc" type="text"  placeholder="Description Of The Category" class="form-control" >
                                            </div>
                                            
                                            <div>
                                                <button id="btn btn-info" type="submit" class="btn btn-lg btn-info btn-block"> Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div><!--/.col-->
			
			<!-- <h3  style="text-align: center;">Add New Category</h3>
			<br/>
			<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
                            <label class="control-label" for="textarea2">Category Name</label>
                            <input class="form-control" name="category_name" id="categoryname" type="text" required / >
                        </div>
   
						<div class="form-group">
                            <label class="control-label" for="textarea2">Category Description</label>
                            <textarea class="form-control" name="category_description" id="categorydescription" rows="4" required ></textarea>
                        </div>
						
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                </form>  
			
			</div>
			<div class="col-sm">
			</div>
			</div> -->
			</div>


</div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>