<?php
include_once "header.php";
include_once "menu.php";
?>
<div class="content-wrapper"><!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> HISTORY </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="Content"><!-- section Content Wrapper -->
       <div class="container-fluid"><!-- container-fluid starts -->
    	   <div class="row"><!-- row starts -->

    	   	  <div style="width:100%;border-color:4px solid red">
          <form class="form-inline my-2 my-lg-0" name ="order_id" method="post" action="<?php echo site_url('user/Order_c/dated');?>">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
             
              <a class="navbar-brand" href="#">Search
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">FROM</a>
                    <div class="dropdown-menu">
                      <input type="date" name="startdate" required="">
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">To</a>
                    <div class="dropdown-menu">
                     <input type="date" name="enddate" required="">
                    </div>
                  </li>
                </ul>
                <input type="submit" name="search" value="Search order ..!">
               <!--  <input type="hidden" name="id" value=" <?php echo $id;?>"> -->
              </div>
            </nav> 
          </form>
        </div>

	    	  	<div class="col-md-12"> <!-- col-md-12 starts -->
	    	  		<table class="table table-hover table-bordered">
			           <thead class="bg-info">
				            <tr>
				              <th scope="col">Sr#</th>
				              <th scope="col">OrderID</th>
				              <th scope="col"> Pic</th>
				              <th scope="col"> Name</th>
				              <th scope="col"> Order time</th>
				              <th scope="col">Status</th>
				              <th scope="col">TotalItem</th>
				              <th scope="col">Price</th>
				              <th scope="col">Action</th>
				            </tr>
			            </thead>
			            <tbody>
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
					              //print_r($sum);
					              //exit;
					            }
			            	?>
			            	<tr>
			            		<td><?php echo $sr;?></td>
			            		<td><?php echo $value['order_id'];?></td>
			            		<td>
			            			<div class="user_item_img"><img src="<?php echo base_url('assets/media/accounts/'.$value['apic']);?>">
			            			</div>
			            		</td>
			            		<td><?php echo $value['aname'];?></td>
			            		<td><?php echo $value['cadd_on'];?></td>
			            		<td><?php echo $value['sname']; ?></td>
			            		 <td><?php echo $value['item_name'];?></td>
			            		<td><?php echo $sum;?></td>
			            		<td>
                                 <a href="<?php echo site_url('user/Order_c/order_detail/'.$id);?>" class="btn btn-outline-success btn-sm"> Detail</a>
                                </td>
			            	</tr>
			            	<?php
			            	$sr++;
			            	// echo "<pre>";
			            	// print_r($value['sname']);
			            	// exit;
			                }
			                ?>
			           </tbody>
	                </table>
	    	  	</div><!-- col-md-12 closed -->
    	  </div><!-- row closed -->
    	</div><!-- container-fluid closed -->
    </section><!-- section content Wrapper closed -->
</div><!-- content-wrapper closed header -->
<?php
include_once "footer.php";
?>