<?php
include_once'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> CHANGE PASSWORD </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content"><!-- section content starts -->
  	<div class="container-fluid"><!-- container-fluid starts -->
  		<div class="row"><!-- row  class starts -->
        <div class="offset-3 col-md-6">
          <form method="post" action="<?php echo site_url('admin/Change_password_c/password_change'); ?> " style="padding-top: 00px"> <!-- form start!-->
            <div class="form-group"> <!-- div class form-group start1--!-->
                  <label for="oldpasswordInput">Old Password</label>
                  <input type="password" class="form-control" id="exampleInputoldpassword1" aria-describedby="emailHelp"required=""name="old_password" placeholder="Enter old Password">
            </div>  <!-- div closed for-group -->
            <div class="form-group"> <!-- div class form-group start1--!-->
                  <label for="oldpasswordInput">New Password</label>
                  <input type="password" class="form-control" id="exampleInputoldpassword1" aria-describedby="emailHelp"placeholder="Enter New Password" name="new_password" >
            </div>  <!-- div closed for-group -->
            <div class="form-group"> <!-- div class form-group start1--!-->
                  <label for="oldpasswordInput">Re-enter Password</label>
                  <input type="password"class="form-control" id="exampleInputoldpassword1" aria-describedby="emailHelp"placeholder="Enter new Password again.." name="re_new_password" >
            </div>  <!-- div closed for-group -->
            <input type="submit" value="ok" class="btn btn-success btn-md">
            
          </form>
        </div><!-- offset-5 col-md-6 closed -->
       
  		</div><!-- rows class closed -->
  	</div><!-- closed container-fluid -->
  </section>
</div><!-- content-wrapper closs top closed -->
<?php
include_once 'footer.php';
?>