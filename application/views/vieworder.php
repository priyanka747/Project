			
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
                                    <li><a href="<?php echo base_url()?>">Dashboard</a></li>
                                    <!-- <li class="active" ><a href="#">category</a></li> -->
                                    <li class="active">view orders</li>
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
                                <strong class="card-title">Orders</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Client Name</th>
				            <th>Date</th>
				            <th>Payment Type</th>
				            <th>Shipping status</th>
				            <th>Order Status</th>
				            <th>Action</th>
				            <!-- <th>Product Name</th>
				            <th>Product Quantity</th> -->
				            
						  </tr>
                        </thead>
                        <tbody>  
							<tr>
                              <td>01</td>
                              <td>shirt</td>
			              	<td>27-10-1998</td>
			              	 <td>Card</td>
                              <td><span class="badge badge-dark"> Not Shipped </span></td>
			              	<td><span class="badge badge-danger"> pending </span></td>
                              
			              	<td><button class="view btn-info">View</button> <button class="edit btn-info">edit</button> <button class="delete btn-danger">delete</button> </td>
                              
                            </tr>

                            </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
			