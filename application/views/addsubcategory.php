			<div class="container">
			
			<div class="row">
			<div class="col-sm">
			</div>
			<div class="col-sm">
			
			<h3  style="text-align: center;">Add Sub Category</h3>
			<br/>
			<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
                            <label class="control-label" for="textarea2">Sub Category Name</label>
                            <input class="form-control" name="category_name" id="categoryname" type="text" required />
                        </div>
   
						<div class="form-group">
                            <label class="control-label" for="textarea2">Sub Category Description</label>
                            <textarea class="form-control" name="category_description" id="categorydescription" rows="4" required ></textarea>
                        </div>
						
						<div class="form-group">
                            <label class="control-label" for="textarea2">Parent Category Id</label>
							<select class="custom-select">
								<option selected>Choose Id</option>
								<option value="1">00</option>
								<option value="2">01</option>
								<option value="3">02</option>
								</select>                        
						</div>
							
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Add Sub Category</button>
                        </div>
                </form>  
			
			</div>
			<div class="col-sm">
			</div>
			</div>