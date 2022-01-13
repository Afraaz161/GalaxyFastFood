<?php
include_once 'header.php';
include_once 'menu.php';
?>
 <div class="content-wrapper"> <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark"> ORDER </h1>
         </div><!-- /.col-sm-6 closed -->
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
    </div>   <!-- /.content-header -->
    <section class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-6">
           
            <form method="post" action="<?php echo site_url('admin/Add_category/category_edit_do/'); ?>"
                enctype="multipart/form-data">
                <table class="table table-bordered">
                 <tr>
                   <td> Name </td>
                   <td> <input type="text" name="item_name" value="<?php echo $show[0]->name;?>" class="form-control"> </td>
                  </tr>
                  <tr>
                   <td> Icons </td>
                   <td> <input type="file" name="pic" class="form-control" required=""> </td>
                  </tr>
                  <tr>
                   <td> Banner </td>
                   <td> <input type="file" name="pics" class="form-control" required="" > </td>
                  </tr>
                  <tr>
                    <td colspan="2"> <input type="submit" value="Save" class="btn btn-success btn-md"> 
                     <input type="hidden" name="itemtypeid" value="<?php echo $show[0]->item_type_id; ?>">
                   </td>
                  </tr>
                </table>
             </form>
         </div> <!-- col-md-6 closed -->
       </div><!-- row closed -->
     </div><!-- container-fluid closed -->
   </section>
 </div>
<?php 
include_once 'footer.php';
?>