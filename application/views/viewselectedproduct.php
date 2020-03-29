<style>
* {
  box-sizing: border-box;
  }

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px; 
} 
.checked {
  color: orange;
}
button{
position: 10px; 
}
       
   
 
 
	
</style> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 



<div class="container" style="width:800px; text-align:center;">
  
	  	<form action="detailsofproduct" method="post" class="panel panel-primary form-horizontal">
				<div class="panel-heading">
					<h3 class="panel-title">Details of Selected Product</h3>
				</div> 


	  		    <div class="panel-body">             
			        <div class="row">
			            <div class="column" style="background-color:#aaa;">
							<div class="form-group">
								<label for="name" class="col-sm-12 control-label">Product Images</label>
									<div class="col-sm-12">
									  <div class="product-image">  
									   <div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div>
            <img src="https://www.eragal.com/13004-large_default/long-sleeve-abstract-print-patchwork-shirt-light-khaki-3v88156821.jpg" class="slider-image" style="width:140px;height:120px;padding:5px;"/> <br>
            <img src="https://www.eragal.com/13005-large_default/long-sleeve-abstract-print-patchwork-shirt-light-khaki-3v88156821.jpg" style="width:140px;height:120px;padding:5px;"/>  <br>
            <img src="https://www.eragal.com/13006-large_default/long-sleeve-abstract-print-patchwork-shirt-light-khaki-3v88156821.jpg" style="width:140px;height:120px;padding:5px;"/>  <br>
            <img src="https://www.eragal.com/13007-large_default/long-sleeve-abstract-print-patchwork-shirt-light-khaki-3v88156821.jpg" class="slider-image" style="width:140px;height:120px;padding:5px;"/>  <br>
        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div>              
									            <!--    <img src="http://3.design-milk.com/images/2013/07/Karim-Rashid-1-ChateauDAx_nook_chair.jpg" /> -->
									  </div>   
									</div> 
							</div> 
			            </div>
					    <div class="column" style="background-color:#bbb;">
						    <fieldset>                    
					        <legend>Product Information</legend> 
						    <div class="form-group"> 
							    <div class="col-sm-12"> 
                                        <div class="product-category">Category:
											<input type="text" id="productcategory" name="productcategory" value="Men's Shirt" ><br>
								        </div> 
								        <div class="product-Name">Name:    										
											<input type="text" id="productname" name="productname" value="Stripped Polo Shirt" >  
								        </div> 
								        <div class="product-price">Price: 
                                            <input type="text" id="productprice" name="productprice" value="CAD$ 5.99" >        
									    </div> 
                                            <label for="product-description" class="col-sm-12 control-label">Description:</label> 
											<!--<div class="product-description">Discription:       -->    
                                        <span><textarea rows="4" cols="25" id="productdescription" name="productdescription" >This is Linen Men Shirt.Fushia Collar And Cuffs Lining. Button Fastenings And Buttoned Cuffs. COMPOSITION: 100% LINEN" </textarea>            
									   </span> </div>  
										<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star "></span>
											<span class="fa fa-star "></span> 
								    <div class="col-sm-12">     
											<div class="product-size">Size:  
									        	<select class="form-control" id="productsize"  ><!--multiple-->
													<option value="texnolog1">XS</option>
													<option value="texnolog2">S</option>
													<option value="texnolog3">M</option>
													<option value="texnolog4">L</option>                
													<option value="texnolog5">XL</option>
												</select>          
											</div> 
								    </div> 
                                    <div class="col-sm-12">     
									        <div class="product-colour">Colour: 
												<select class="form-control"id="productcolour"  > <!--multiple-->
													<option value="texnolog2">Black</option>
													<option value="texnolog3">Red</option>
													<option value="texnolog4">White</option>
													<option value="texnolog5">Green</option>
													<option value="texnolog6">Gray</option>
											    </select>
									        </div> 
								    </div> 
							     	<div class="col-sm-12"> 
										    <div class="product-description">Product Status:                      
											    <label class="radio-inline">
														<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Active
											    </label>
											    <label class="radio-inline">
												        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> In-active 
											    </label>
											</div> 
									</div> 
							</div> <!-- form-group // -->      
				    </div>
				</div>
            </div>
            </div>
		</form> 
				    </fieldset>   
						    <div class="form-group">  
								    <button type="submit" class="btn btn-primary" style="margin-top:10px;margin-left:20%;"  >Back</button>          						   
								    <button type="submit" class="btn btn-primary" style="margin-top:10px;" >Edit Product Details</button>


							</div> <!-- form-group // -->				
				 
</div>                     
</div>                     