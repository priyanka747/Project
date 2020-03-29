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
                                    <li><a href="#">Sub-category</a></li>
                                    <li class="active">add new Sub-category</li>
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
                                            <h3 class="text-center">Add SubCategory</h3>
                                        </div>
                                        <!-- <hr> -->
										<?php 
										// if( validation_errors()){
											echo validation_errors('<div class="alert alert-danger">','</div>');
										// }
										if($this->session->userdata('error')){?>
											<div class="alert alert-danger"><?php echo $this->session->userdata('error'); $this->session->unset_userdata('error'); ?></div>
										<?php }
										print_r($categories);
										if($this->session->userdata('success')){?>
											<div class="alert alert-success"><?php echo $this->session->userdata('success'); $this->session->unset_userdata('success'); ?></div>
										<?php }?>
										<form action="#" method="post" novalidate="novalidate">
                                           
										   <div class="form-group">
						<label for="name" class="col-sm-12 control-label">Select Product Image</label>
							<div class="col-sm-12">
							  <label class="control-label small" for="file_img">From File</label>  <input type="file" name="file_archive">
							</div>
					  </div> <!-- form-group // -->					
                       <div class="form-group"> 
				       <div class="col-sm-12">     
                        <label for="productCategory" class="col-sm-8 control-label">Product Type or Category</label>
							<select class="form-control">
							<option value="">Clothes</option>
							<option value="texnolog2">Shoes</option>
							<option value="texnolog3">Accesseroies</option>
						   </select>
                       </div>
                    </div>

					<div class="form-group">
						<div class="col-sm-12">
							<label for="productName" class="col-sm-8 control-label">Product Name</label>
							<input type="text" id="productName" class="form-control" name="productName" placeholder="Name" required />
						</div>
					</div> 
					
				    <div class="form-group">
				        <div class="col-sm-12"> 
						  <label for="about" class="col-sm-12 control-label">Product Description</label>
						  <textarea  id="productDescription" name="productDescription" class="form-control" placeholder="Description" required></textarea>
						</div>
				    </div> <!-- form-group // --> 

					<div class="form-group">	
						<div class="col-sm-12">
							<label for="productPrice" class="col-sm-8 control-label" style="padding-top: 0px;">Product Price</label>
							<input type="number" id="productPrice" class="form-control" name="productPrice" placeholder="0.00$" step="0.01" min="0" max="100"  required />
<!-- 							<input type="text" id="productPrice" class="form-control" name="productPrice" placeholder="Price" required />
 -->						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<label for="serialNumber" class="col-sm-8 control-label">Serial Number</label>
							<input type="text" id="serialNumber" class="form-control" name="serialNumber" placeholder="serialNumber" required />
						</div>
					</div>
 
				    <div class="form-group">   
					   <div class="col-sm-12">
					       <label for="odrlvl" class="col-sm-12 control-label">Reorder Level</label>       
						   <input type="number"  id="serialNumber" class="form-control" name="odrlvl" id="odrlvl" placeholder="0"  step="0" min="0" max="100"  required />
					   </div>
				      </div> <!-- form-group // --> 
				 
				   <div class="form-group"> 
				       <div class="col-sm-12">
					       <label for="percentage" class="col-sm-12 control-label">Sale Percentage</label>
                           <input type="number"  id="percentage" class="form-control" name="percentage" id="percentage" placeholder="0%"  step="0" min="0" max="100"    required />
				       </div>
				   </div> <!-- form-group // -->            
				 
					<div class="form-group">			
						<div class="col-sm-12">
							<label for="stockQty" class="col-sm-8 control-label">Stock Quantity</label>
							<input type="number" id="stockQty" class="form-control" name="stockQty" placeholder="StockQuantity"  step="0" min="0" max="100"required />
						</div>
					</div>

			        <div class="form-group">
                        <div class="col-sm-12"> 
					       <label for="name" class="col-sm-12 control-label">Product Status</label>
							   <label class="radio-inline">
							   <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Active
							   </label>
							   <label class="radio-inline">
							   <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> In-active 
							   </label>
					    </div>
				    </div> <!-- form-group // -->  
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
					</div>


</div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>