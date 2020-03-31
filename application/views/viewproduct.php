
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
                                    <li class="active" ><a href="<?php echo base_url()?>viewcategories">category</a></li>
                                    <li class="active">view category</li>
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Categories</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                           <th class="serial">Product ID</th>
                                        <th>Product Name</th>
				           				<th>Description</th>
				            			<th>Price</th>
				            			<th>Category</th>
				            			<th>Re-order level</th>
				           				<th>Discount</th>
				            			<th>Status</th>
				           				<th>Stock</th>
				            			<th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php 
                             			$row_cnt=count($products);
                             			if($row_cnt>0){
                             			for($i=0;$i<$row_cnt;$i++){?>
                            			<tr>
                                	<td>  <?php echo $products[$i]['product_id']; ?></td>
                                	<td> <?php echo $products[$i]['product_name']; ?> </td>
                                	<td> <?php echo $products[$i]['description']; ?> </td>
																	<td> <div><a type="a" href="<?php echo base_url();?>product/edit/<?php echo $products[$i]['product_id']; ?>" class="btn btn-outline-info">Edit</a> <a type="a" href="<?php echo base_url();?>product/delete/<?php echo $products[$i]['product_id']; ?>"" class="btn btn-outline-danger">Delete</a></div></td>
                           				</tr>
                                  <?php
                                   }
                                   }
                                	else
                                   {
                                  ?>
                                	<tr>
									   							<td colspan="10" class="text-center">No data at the moment</td>
                                  </tr>
                                  <?php
                                  	}
                                    ?>

                         </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
