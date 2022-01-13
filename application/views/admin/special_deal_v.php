<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content wrapper-->
    <div class="content-header"><!-- content-header -->
     <div class="container-fluid"> <!-- container-fluid -->
        <div class="row mb-2"> <!-- row mb-2  -->
         <div class="col-sm-6"> <!-- col-sm-6 -->
           <h1 class="m-0 text-dark"> Special Deals </h1>
          </div><!-- /.col-sm-6 closed -->
        </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>   <!-- /.content-header -->
    <section class="content"> <!-- section content start -->
    	<div class="container-fluid"><!-- container-fluid start -->
    	 <div class="row"><!-- row class start -->
    	 	<div class="col-md-6"><!-- div class col-md-6 starts -->
    	 	 <form method="post" action="<?php echo site_url('admin/Special_deals_c/special_deal');?>" enctype="multipart/form-data">
    	 	 	<table class="table table-bordered table-md">
             
    	 	 		<tr>
                      <td> Heading</td>
                      <td> <input type="text" name="heading" class="form-control" required=""> </td>
                    </tr>
                    <tr>
                      <td>Media</td>
                      <td> <input type="file" name="pic" class="form-control" > </td>
                    </tr>
                    <tr>
                      <td> Description</td>
                      <td> <input type="text" name="description" class="form-control" required=""> </td>
                    </tr>
                    <tr>
                      <td> Price</td>
                      <td> <input type="number" name="price" class="form-control" required=""> </td>
                    </tr>
                    <tr>
                    	<td>
                    		<input type="submit" value="insert" class="btn btn-success btn-sm">
                    	</td>
                    </tr>
    	 	 	</table>
    	 	 </form>	
    	 	</div><!-- div class col-md-6 closed -->
    	 	<div class="col-md-6"><!-- col-md-6 starts -->
    	       <table class="table table-hover table-bordered table-sm">
		            <thead class="bg-success">
		               <tr>
		                  <td> Sr# </td>
		                  <td> Heading </td>
		                  <td>Description</td>
		                  <td>Pic</td>
		                  <td>Add_on</td>
		                  <td> Action </td>
		               </tr>
		            </thead>
		            <tbody>
		            	<?php
                  $sr = 1;
                  foreach ($show as  $value)
                  {
                  ?>
                  <tr>
                    <td><?php echo $sr;?></td>
                    <td><?php echo $value->name;?></td>
                    <td><?php echo $value->description;?></td>
                     <td></td>
                    <td><?php echo $value->add_on;?></td>
                  </tr>
		            	<?php
                  $sr++;
                  }
		            	?>
		            </tbody>
	           </table>
    	 	</div><!-- col-md-6 closed -->
    	 </div><!-- row class closed -->	
    	</div><!-- container-fluid closed -->
    </section>
</div>
<?php
include_once 'footer.php';
?>