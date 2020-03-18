
<div class="container" style="width:500px; text-align:center;">
  
	  	<form action="addaproduct" method="post" class="panel panel-primary form-horizontal">
	  		<div class="panel-heading">
	  			<h3 class="panel-title">Adding a new product</h3>
	  		</div>
	  		<div class="panel-body">
		  		<fieldset>                    
		  			<legend>Product Information</legend> 
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
				</fieldset>           
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-12">
						  <button type="submit" class="btn btn-primary">ADD</button>
						</div>
				    </div> <!-- form-group // -->				
				 <hr>

			</div>
		</form>
    </div>