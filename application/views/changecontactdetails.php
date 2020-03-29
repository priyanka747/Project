    <style> 
      input {
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style:groove; 
      background-color: #eee; 
      }
 
     .no-outline:focus {
      outline: none;
      } 
	  .center-elements{
	 text-align:center; }
	  
    </style> 
	
<link href="https://icons8.com"> 

<body>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content"> 
                <div class="login-logo">           
                    <a href="login">
                        <img class="align-content" height=150 width=200  src="<?php echo base_url();?>images/fulllogo.png" alt="style stamp the final stamp to your fashion">
                    </a>
                </div>     
                <div class="contact-form">
                   <form action="<?php echo base_url();?>changecontactdetails.php/authenticate" method="post"> 
					    <div class="form-group">      
                            <h2 class="center-elements">Company Contact Details</h2>
                        </div>
                        <div class="form-group">       
						        <h4 class="center-elements">Contact Numbers</h4>       
                                    <div class="center-elements"> 
                                        <img src="https://img.icons8.com/metro/26/000000/phone.png"/>
										<input type="phone"  class="no-outline" id="productcategory" name="productcategory" value="+1 514-550-0001" ><br>
								        <img src="https://img.icons8.com/metro/26/000000/phone.png"/>
                                        <input type="text" id="productname" name="productname" value="+1 514-550-0002" >  <br>
								        <img src="https://img.icons8.com/metro/26/000000/phone.png"/>
                                        <input type="text" id="productprice" name="productprice" value="+1 514-550-0003" >        
							        </div> 
							    <h4 class="center-elements";>E-mails</h4>      
									<div class="center-elements"> 
										<img src="https://img.icons8.com/material/24/000000/send-mass-email.png"/>         
										<input type="email" id="productcategory" name="productcategory" value="abc13@gmail.com " ><br>
											
										<img src="https://img.icons8.com/material/24/000000/send-mass-email.png"/>         
										<input type="email" id="productname" name="productname" value="xyz17@gmail.com " >  
									</div> 
								
						</div>	
							<div class="center-elements">
                               <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Edit</button>      
                            </div>
                    </form>
                </div>
            </div> 
        </div>
    </div> 
</body>
