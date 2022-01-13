<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
    <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                 <h1 class="m-0 text-dark"> ORDER History </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
       </div><!-- /.container-fluid -->
   </div>   <!-- /.content-header -->
   <section class="content"> <!-- section content starts -->
    <div class="container-fluid"><!-- container-fluid starts -->
	  	    <div class="row"><!-- row starts -->
	  		   <div class="col-md-12"><!-- col-md-12 starts -->
		  		 	<table class="table table-hover table-bordered"> <!-- table start -->
		  		 	 	<thead class="bg-info"> <!-- thead starts -->
		  		 	 		<tr>
		  		 	 			<th scope="col">Sr#</th>
		  		 	 			<th scope="col">Order_id</th>
		  		 	 			<th scope="col">Name</th>
		  		 	 			<th scope="col">Order time</th>
		  		 	 			<th scope="col">Status</th>
		  		 	 			<th scope="col">Total Item</th>
		  		 	 			<th scope="col">Price</th>
		  		 	 			<th scope="col">Action</th>
		  		 	 		</tr>
		  		 	 	</thead><!-- thead closed -->
		  		 	 	<tbody><!-- tbody starts -->
		  		 	 		<?php
			            	$sr =1;
			            	foreach ($my as  $value)
			            	{
			            		$id = $value['order_id'];
			            		$price = $value['price'];
			            		$pri= explode('+', $price);
					            $len =count($pri);
					            $sum=0;
					            for ($i=0;$i<$len;$i++)
					            {
					              $sum=$sum+$pri[$i];
					              // print_r($sum);
					              // exit;
					            }
					            ?>
		  		 	 		<tr>
		  		 	 			<td><?php echo $sr;?></td>
		  		 	 			<td><?php echo $value['order_id'];?></td>
		  		 	 			<td><?php echo $value['name'];?></td>
		  		 	 			<td><?php echo $value['cadd_on'];?></td>
		  		 	 			<td><?php echo $value['status_name'];?></td>
		  		 	 			<td><?php echo $value['item_name'];?></td>
		  		 	 			<td><?php echo $sum;?></td>
		  		 	 			<td>
		  		 	 				 <a href="<?php echo site_url('user/Order_c/history_order_detail/'.$id);?>" class="btn btn-outline-success btn-sm"> Detail</a>
		  		 	 			</td>
		  		 	 		</tr>
	                       <?php
	                      
	                      $sr++;
	                        }
	                       ?>
	                    </tbody><!-- tbody closed -->
		  		 	</table><!-- table closed -->
	           </div><!-- col-md-12 closed -->
	  		</div><!-- row closed -->
  		</div><!-- container-fluid closed --> 
   </section> <!-- section content closed -->
</div> <!-- content-wrapper closed -->  
<?php
include_once'footer.php';
?>