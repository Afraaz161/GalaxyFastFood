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
        </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>   <!-- /.content-header -->
 <section class="content">
   <div class="container-fluid">
     <div class="row">
        <div class="col-md-12">
          <h3>Contact</h3>
          <form method="post" action="<?php echo site_url('admin/Contact_c/add_do');?>">
           <table class="table table-bordered">
             <tr>
                <td>
                 <input type="text" name="user" class="form-control"placeholder=" Type name">
                </td>
             </tr>
             <tr>
                <td>
                 <input type="number" name="user_phone" class="form-control"placeholder="Enter phone number">
                </td>
             </tr>
             <tr>
                <td>
                 <input type="text" name="user" class="form-control"placeholder=" Type name">
                </td>
             </tr>
             <tr>
               <td>
                 <input type="text" name="user" class="form-control"placeholder=" Type name">
                </td>
             </tr>
             <tr>
               <td>
                 <input type="text" name="user" class="form-control"placeholder=" Type name">
                </td>
             </tr>
             <tr>
               <input type="submit" value="insert" class="btn btn-outline-info">
             </tr>
            </table>
          </form>
        </div> <!-- col-md-12 closed -->
    	</div><!-- row closed -->
    </div><!-- container-fluid closed -->
 </section> <!-- section closed -->
</div><!-- content-wrapper top closed -->
<?php 
include_once 'footer.php';
?>