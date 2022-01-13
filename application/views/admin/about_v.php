<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content wrapper-->
    <div class="content-header"><!-- content-header -->
     <div class="container-fluid"> <!-- container-fluid -->
        <div class="row mb-2"> <!-- row mb-2  -->
         <div class="col-sm-6"> <!-- col-sm-6 -->
           <h1 class="m-0 text-dark"> About us </h1>
          </div><!-- /.col-sm-6 closed -->
        </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>   <!-- /.content-header -->
   <section class="content"> <!-- section content start -->
   	<div class="container-fluid">
   		<div class="row">
   			<div class="col-md-4 ">
   			 <form method="post" action="<?php echo site_url('admin/About_c/add_data');?>" enctype="multipart/form-data">
            <table class="table table-bordered table-sm">
             
              <tr>
                <td> Heading</td>
                <td> <input type="text" name="heading" class="form-control" required=""> </td>
              </tr>
              <tr>
                <td> Media </td>
                <td> <input type="file" name="pic" class="form-control" required=""> </td>
              </tr>
              <tr>
                <td> Description</td>
                <td> <textarea name="description" class="form-control" rows="5" required=""></textarea> </td>
              </tr>
              <tr>
                <td colspan="2"> <input type="submit" value="Insert" class="btn btn-outline-info"> </td>
              </tr>
            </table>
          </form>
   			</div>
   			<div class="col-md-8">
           <table class="table table-hover table-bordered table-sm">
            <thead class="bg-success">
              <tr>
                <td> Sr# </td>
                <td> Heading </td>
                <td> Description</td>
                <td>Active</td>
                <td> Action </td>
              </tr>
            </thead>
            <tbody>
              <?php
              $about_id=1;
              foreach($about_us as $value)
              {
                $id=$value->about_id;
            //echo"<pre>";
              //var_dump($id);
              //
              ?>
              <tr>
                <td><?php echo $about_id;?></td>
                <td>
                  <h3> <?php echo $value->heading;?> </h3>
                  <div class="admin_item_img">
                    <img src="<?php echo base_url('assets/media/about/'.$value->pic);?>">
                  </div>
                  
                </td>
                <td width="20%"><?php echo $value->description;?></td>
                <td>
                  <?php
                        if( $value->active == 1 ) {
                        ?>
                          <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/About_c/block/0/'.$value->about_id); ?>" class="btn btn-sm btn-danger">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                        <?php
                        } else {
                        ?>
                          <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/About_c/block/1/'.$value->about_id); ?>" class="btn btn-sm btn-info">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                  <?php
                   } ?>
                </td>
                <td>
                    <a href="<?php echo site_url('admin/About_c/edit_about/'.$id);?>" class="btn btn-outline-info btn-sm"> Edit </a>
                    <br/>
                   <a href="<?php echo site_url('admin/About_c/delete_about/'.$id);?>" class="btn btn-outline-danger btn-sm"> Del </a>
                </td>
              </tr>
              <?php
              $about_id++;
               }
              ?>
            </tbody>
          </table>
        </div>
   		</div>
   	</div>
   </section><!-- section content closed -->
</div> <!-- Content wrapper closed here -->


<?php
include_once 'footer.php';
?>