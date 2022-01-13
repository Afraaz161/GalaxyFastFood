<?php
 include_once 'header.php';
 include_once 'menu.php';
 ?>
  <div class="content-wrapper">   <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0 text-dark"> ORDER </h1>
         </div><!-- /.col-sm-6 closed -->
        </div><!-- /.row mb-2 closed-->
     </div><!-- /.container-fluid -->
   </div>   <!-- /.content-header -->

   <section class="content"> <!-- class content section starts -->

     <div class="container-fluid"><!-- container-fluid start -->
        <div class="row"> <!-- row start -->
	        <div class="col-md-4"> <!-- col-md-6 start -->
           <h3> Add Category</h3>
              <form method="post" action="<?php echo site_url('admin/Add_category/add_do'); ?>"
                enctype="multipart/form-data">
		            <table class="table table-bordered">
			           <tr>
					         <td> Name </td>
					         <td> <input type="text" name="item_name" class="form-control" value="" required=""> </td>
                    
			           	</tr>
                  <tr>
                   <td> Icons </td>
                   <td> <input type="file" name="pic" class="form-control" required=""> </td>
                  </tr>
                  <tr>
                   <td> Banner </td>
                   <td> <input type="file" name="pics" class="form-control" required=""> </td>
                  </tr>
            			<tr>
				            <td colspan="2"> <input type="submit" value="Insert" class="btn btn-outline-info"> </td>
				          </tr>
                </table>
	           </form>
         </div> <!-- col-md-6 -->
         <div class="col-md-8">
           <h3>Show Category</h3>
             <table class="table table-hover table-bordered table-sm">
                <thead class="bg-success">
                 <tr>
                   <td> Sr# </td>
                   <td> Name </td>
                   <td>Media</td>
                   <td>Banner</td>
                   <td>Active</td>
                   <td>Add_on</td>
                   <td> Action </td>
                  </tr>
                </thead>
                <?php
                 $item_type_id =1;
                 foreach( $show as $value)
                 {                   
                  $id=$value->item_type_id;
                ?>
                <tr>
                 <td> <?php echo $item_type_id; ?></td>
                 <td> <?php echo $value->name; ?> </td>
                 <td>
                   <div class="admin_item_img">
                    <img src="<?php echo base_url('assets/media/icons/'.$value->pic);?>">
                  </div>
                 </td>
                 <td>
                    <div class="admin_item_img">
                    <img src="<?php echo base_url('assets/media/banner/'.$value->banner);?>">
                  </div>
                 </td>
                 <td> 
                    <?php
                        if( $value->active == 1 ) {
                        ?>
                          <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/Add_category/block/0/'.$value->item_type_id); ?>" class="btn btn-sm btn-danger">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                        <?php
                        } else {
                        ?>
                          <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/Add_category/block/1/'.$value->item_type_id); ?>" class="btn btn-sm btn-info">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                  <?php
                   } ?>
                 </td>
                 <td> <?php echo $value->add_on;?> </td>
                 <td>
                   <a href="<?php echo site_url('admin/Add_category/category_edit/'.$id);?>" class="btn btn-outline-info btn-sm"> Edit </a>
                   <a href="<?php echo site_url('admin/Add_category/category_del/'.$id);?>" class="btn btn-outline-danger btn-sm"> Del </a>
                 </td>
                </tr>
                 <?php
                   $item_type_id++;
                 }
                 ?>
              </table>
           </div> <!-- div class col-md-6 closed -->
         </div> <!-- row -->
       </div>  <!-- container-fluid -->
     </section> <!-- section closed -->
   </div> <!-- div class content-wrapper -->
<?php include_once 'footer.php';
 ?>