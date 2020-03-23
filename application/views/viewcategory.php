      <!-- Content -->
      <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">

          <div class="clearfix"></div>
          <!-- Orders -->
          <div class="orders">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="box-title">Displaying List Of All Categories </h4>
                  </div>
                  
                  <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                      <table class="table ">
                        <thead>
                          <tr>
                            <th class="serial">Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>            
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php 
                                        $row_cnt=count($categories);
                                        if($row_cnt>0){
                                        for($i=0;$i<$row_cnt;$i++){?>
                                        <tr>
                                            <td>  <?php echo $categories[$i]['category_id']; ?></td>
                                            <td> <?php echo $categories[$i]['category_name']; ?> </td>
                                            <td> <?php echo $categories[$i]['description']; ?> </td>
											<td> <div><a type="a" href="<?php echo base_url();?>category/edit/<?php echo $categories[$i]['category_id']; ?>" class="btn btn-outline-info">Edit</a> <a type="a" class="btn btn-outline-danger">Delete</a></div></td>
                                        </tr>
                                        <?php
                                        }
                                        }
                                        else
                                        {
                                        ?>
                                       <tr>
									   <td colspan="5" class="text-center">No data at the moment</td>
                                       </tr>
                                       <?php
                                        }
                                        ?>
                         

                        </tbody>
                      </table>
                    </div> <!-- /.table-stats -->
                  </div>
                </div> <!-- /.card -->
              </div>  <!-- /.col-lg-8 -->


            </div>
          </div>
        </div>
      </div>
      <!-- /.content -->
      <div class="clearfix"></div>
