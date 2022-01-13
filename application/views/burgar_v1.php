<?php 
include_once 'header.php';
?>
  <div class="parallax_1">
    <p style="text-align:center;font-size: 50px;padding-top: 50px;color:white; ">
     MENU 
    </p>
  </div>
  
  <div class="menu-main">
    <div class="container">
      <div class="row">

     <?php include_once'itemtype_show.php';?>
      </div> 
    </div>
  </div>



<div class="container">   <!-- div class container start  !--> 
  <center>
    <h1 style="text-transform: uppercase;"> <?php echo $item[0]->name; ?> 
    </h1>
  </center>
 
  <div class="row">        <!-- div class row start  !-->

    	<div class="col-md-4">    <!-- div class col-md-4  start  !-->  
   	 
   	    	<div class="burger_pic">  <!-- div class burger_pic start  !-->

   			<div> 
   			
   			<img src="<?php echo base_url('assets/media/burger_1.jpg');?>">
   		   
   		   </div>
   	
   	    	<div>

   			     <div class="row"> <!-- div class row start  !-->
   				
   				       <div class="col-md-8">  <!-- div class col-md-8 start  !-->
   					        <center>
   						  
   						      <h3>SPICY BURGER</h3>
   				     	    
   				     	    </center>
   				      </div>     <!-- div class col-md-8 closed  !-->
   				
   				    <div class="col-md-4">   <!-- div class col-md-4 start  !-->
   					
   					    <center>
   						
   						  <p>RS. 170</p>
   						
   						  <button type="button" class="btn btn-success">ORDER</button>
   					
   					    </center>
   				     </div>  <!-- div class col-md-4 closed  !-->
   			    </div>     <!-- div class row closed  !-->
   		        </div>     <!-- div closed!-->
   		    </div>   <!-- div class burger_pic closed  !-->
   	    </div>        <!-- div class col-md-4 closed  !-->
   

        	
    <div class="col-md-4">  <!-- div class col-md-4 starts  !-->
       
       <div class="burger_pic">  <!-- div class burger_pic start  !-->
   		           	<div>
   				     <img src="<?php echo base_url('assets/media/burger_2.jpg');?>">
   		        	</div>
   			<div>
   				<div class="row">
   					<div class="col-md-8">

   						<center>
   							<h3>SIZZLAR BURGER</h3>
   						</center>
   					</div>  <!-- div class col-md-8 closed  !-->
   					
   					<div class="col-md-4">
             <!--  <h3 name="name1">SIZZLAR BURGER</h3> -->
   						<?php
              if($this->session->userdata('validity') == NULL)
              {
              ?>
              echo "<script>alert('login');</script>";
              <?php
            }
            else
            {
              ?>
              <a href="<?php echo site_url('Menu_c/add_order');?>">Order</a>
              <?php
            }
            ?>
              <!-- <center>
   							<p>RS.250</p> -->
   						   
   						   <!-- //<button type="button" class="btn btn-success">ORDER</button> -->
   					<!-- 	</center> -->
   					</div>   <!-- div class col-md -4 closed  !-->
   				</div> <!-- div class row closed  !-->
   			</div> <!-- div closed !-->
   		</div>  <!-- div class burger_pic closed !-->
   	</div>  <!-- div class col-md-4 closed  !-->
   	

   	                       <div class="col-md-4">  
                               
                                 <div class="burger_pic">
      	                                 
      	                                   <div>
      		                                  
      		                                   <img src="<?php echo base_url('assets/media/burger_3.jpg');?>">
      	                                    </div>
                                       
                                         	<div>
      	                                  
      	                                     	<div class="row">
                                                			<div class="col-md-8">
      				                                             <center>
      				                                             	<h3 style="margin-left: 20px;">FISH BURGER</h3></center>
      		                                                </div>
      	                                            
      	                                            		<div class="col-md-4">
      			                                                	<CENTER>
      			                                                		<p>RS.250</p>
      				                                                    	<button type="button"class="btn btn-success">ORDER</button>
      				                                                 </CENTER>
      		                                              	</div>
                                          		</div>
                                        	</div>
                                    </div>
                          	 </div>
            

                            <div class="col-md-4">
   	  
   	                            	<div class="burger_pic">
   		                                  	<div>
   		                                         	<img src="<?php echo base_url('assets/media/burger_1.jpg');?>">
                                       		</div>
     	                             	<div>
                                
                                			<div class="row">
   		                                 		<div class="col-md-8">
   		                                 			<center>
   		                                 				<h3>SPICY BURGER</h3>
   		                                 			</center>
   		                                 		</div>
   			                                     	<div class="col-md-4">
   			                                     		<center>
   			                                     			<p>RS. 170</p>
   			                                              		<button type="button" class="btn btn-success">ORDER</button>
   			                                            	</center>
   			                                      </div> <!-- div class col-md-4 closed !-->
   			                                    </div>   <!-- div class row closed  !-->
   		                               </div> <!-- div closed  !-->
   	                               	</div>   <!-- div class burger_pic closed  !-->
   	                       </div>   <!-- div class col-md-4 closed  !-->
      

                        <div class="col-md-4">  <!-- div class col-md-4 starts  !-->
   		                         
   		                    <div class="burger_pic">  <!-- div class burger_pic start  !-->
   	                          		         
   	                          		         <div>
   				                                
   				                                <img src="<?php echo base_url('assets/media/burger_2.jpg');?>">
   			                                
   			                                </div>
                          		<div>
   				                    
   				                    <div class="row">
   					                
   					                    <div class="col-md-8">
   					                    	<center>
   					                    		<h3>SIZZLAR BURGER</h3>
   					                    	</center>
   					                    </div> <!-- div class col-md-8 closed  !-->
   					                    
   					                    <div class="col-md-4">
   			                      			<center>
   					                     
   					                     		<p>RS.250</p>
   						                         <button type="button" class="btn btn-success">ORDER</button>
   					                     	</center>
   					                   </div>     <!-- div class col-md-4 closed  !-->
   				                       
   				                    </div>   <!-- div class row closed  !-->
   			                   </div>   <!-- div closed !-->
   	                    	</div>     <!-- div class burger_pic  !-->
   	                  </div>  <!-- div class col-md-4 closed  !-->
      
                 	<div class="col-md-4">  
               
                      <div class="burger_pic">
      	                      <div>
                              		<img src="<?php echo base_url('assets/media/burger_3.jpg');?>">
      	                       </div>
                          
                            	<div>
      	                        	<div class="row">
      	                         
      	                         		<div class="col-md-8">
      				                            <center>
      		                             			<h3 style="margin-left: 20px;">FISH BURGER</h3>
      				                             </center>
      		                           </div>   <!-- div class col-md-8 closed  !-->
      			                     
      			                         <div class="col-md-4">
      	                       	     		<CENTER>
      	                       	     			<p>RS.250</p>
      				                           	<button type="button"class="btn btn-success">ORDER</button>
      				                         </CENTER>
      			                        </div>   <!-- div class  col-md-4 closed  !-->
      		                       </div>  <!-- div class row closed  !-->
                             	</div> <!-- div closed  !-->
                   </div>     <!-- div class burger_pic closed  !-->
             	</div>   <!-- div class col-md-4 closed !-->
   </div> <!-- class row closed -->
 </div><!-- container class closed!-->

<?php include_once 'footer.php'; ?>