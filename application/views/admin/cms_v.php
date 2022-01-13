<?php
include_once 'header.php';
include_once 'menu.php';
?>
<style>
  b {
    color:red;
  }
</style>
<div class="content-wrapper"><!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Customer Management System </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content">
   <div class="container">
     <div class="row">
      <div class="col-md-6">
        <form method="post" action="<?php echo site_url('admin/CMS_c/add');?>"
                 enctype="multipart/form-data">
                  <table class="table table-bordered table-hover table-light">
                    <tr>
                      <td>
                        <label>Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo set_value('name');?>" placeholder="Enter  name">
                       <b><?php echo form_error('name');?></b> 
                      </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Phone_1</label>
                        <input type="text" name="phone1" value="<?php echo set_value('phone1');?>" class="form-control" placeholder="Enter  phone number">
                        <b><?php echo form_error('phone1');?></b> 
                     </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Phone_2</label>
                        <input type="text" name="phone2"  value="<?php echo set_value('phone2');?>"class="form-control" placeholder="Enter  phone number">
                        <b><?php echo form_error('phone2');?></b> 
                     </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Mobile_1</label>
                        <input type="text" name="mobile1" value="<?php echo set_value('mobile1');?>" class="form-control" placeholder="Enter  mobile number">
                        <p><?php echo form_error('mobile1');?></p> 
                     </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Mobile_2</label>
                        <input type="text" name="mobile2"  value="<?php echo set_value('mobile2');?>"class="form-control" placeholder="Enter  mobile number">
                        <b><?php echo form_error('mobile2');?></b> 
                     </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Whatsapp_1</label>
                        <input type="text" name="whatsapp1" value="<?php echo set_value('whatsapp1');?>" class="form-control" placeholder="Enter  whatsapp1 number">
                        <b><?php echo form_error('whatsapp1');?></b> 
                     </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Whatsapp_2</label>
                        <input type="text" name="whatsapp2" value="<?php echo set_value('whatsapp2');?>" class="form-control" placeholder="Enter  whatsapp2 number">
                        <b><?php echo form_error('whatsapp2');?></b> 
                     </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo set_value('address');?>" class="form-control" placeholder="Enter your address">
                         <b><?php echo form_error('address');?></b> 
                     </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="submit" value="insert" class="btn btn-outline-info">
                      </td>
                   </tr>
                  </table>
                </form>
      </div>
       
     </div>
   </div>
 </section>
</div> <!-- div class content-wrapper -->
<?php
include_once 'footer.php';
?>