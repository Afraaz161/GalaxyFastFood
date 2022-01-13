<?php 
include_once 'header.php';
include_once 'menu.php';
?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
         <h1 class="m-0 text-dark"> Change Password </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div> <!-- div content-header!-->
  <section class="content">
    <div class="container">
    	<div class="row">
    		<div class="offset-3 col-md-6">
          <form method="post" action="<?php echo site_url('user/Change_password_c/password_change'); ?> " style="padding-top: 00px"> <!-- form start!-->
            <div class="form-group"> <!-- div class form-group start1--!-->
                  <label for="oldpasswordInput">Old Password</label>
                  <input type="password" class="form-control" id="exampleInputoldpassword1" aria-describedby="emailHelp"required=""name="oldpass" placeholder="Enter old Password">
            </div>  <!-- div closed for-group -->
            <div class="form-group"> <!-- div class form-group start1--!-->
                  <label for="oldpasswordInput">New Password</label>
                  <input type="password" class="form-control" id="exampleInputoldpassword1" aria-describedby="emailHelp"placeholder="Enter New Password" name="new-password" >
            </div>  <!-- div closed for-group -->
            <div class="form-group"> <!-- div class form-group start1--!-->
                  <label for="oldpasswordInput">Re-enter Password</label>
                  <input type="password"class="form-control" id="exampleInputoldpassword1" aria-describedby="emailHelp"placeholder="Enter new Password again.." name="re-new-password" >
            </div>  <!-- div closed for-group -->
            <input type="submit" value="ok" class="btn btn-success btn-md">
          </form>
        </div><!-- offset-5 col-md-6 closed -->
      </div><!-- row class closed -->
    </div><!-- container-fluid closed -->
  </section><!-- section class content closed -->
</div> <!-- div class content-wrapper closed!-->
<?php
include_once 'footer.php';
?>