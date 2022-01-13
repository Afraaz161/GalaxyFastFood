<?php
include_once 'header.php';
?>
<style>
  .signin p {
    font-weight: 300;
    color: red;
    font-size: 14px;
}
</style>
<div class="signin">   <!-- div class signin start !-->
  <h1>SignUp</h1>
  <div class="container">    <!-- div class container starts  !-->
 
    <div class="row">      <!-- div class row start!-->
      <div class="col-md-12"> <!-- div class col-md-4 start !-->
        <div class="signin-div-left"> <!-- div class signin-div-left start!-->
          <div class="container-fluid"> <!-- div class container-fluid starts  !-->
            <div class="row"> <!--div class row start!-->
              <div class="col-md-12">
                <form method="post" action="<?php echo site_url('Signup_c/add_do');?>"
                 enctype="multipart/form-data">
                  <table class="table table-bordered table-hover table-light">
                    <tr>
                      <td>
                        <label>Name</label>
                      <input type="text" name="user_name" value="<?php echo set_value('user_name');?>" class="form-control" placeholder="Enter user name">
                       <p><?php echo form_error('user_name');?></p> 
                      </td>
                    </tr>
                    <tr>
                     <td>
                        <label>Phone</label>
                        <input type="text" name="user_phone"  value="<?php echo set_value('user_phone');?>"class="form-control" placeholder="Enter user phone number">
                        <p><?php echo form_error('user_phone');?></p>
                     </td>
                    </tr>
                    <tr>
                      <td>
                        <label>Pics</label>
                        <input type="file" name="pic"  value="<?php echo set_value('pic');?>"class="form-control">
                       <!--  <p><?php// echo form_error('pic');?></p> -->
                      </td>
                    </tr>
                    <tr>
                      <td>
                       <label>Email</label>
                        <input type="email" name="user_email"  value="<?php echo set_value('user_email');?>"class="form-control" placeholder="Enter user email">
                        <p><?php echo form_error('user_email');?></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label>Password</label>
                        <input type="Password" name="user_password"  value="<?php echo set_value('user_password');?>"class="form-control" placeholder="Enter password">
                        <p><?php echo form_error('user_password');?></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label>Confirm-Password</label>
                        <input type="Password" name="user_con-password"  value="<?php echo set_value('user_con-password');?>"class="form-control" placeholder="Re-enter  password">
                        <p><?php echo form_error('user_con-password');?></p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <label>Address</label>
                        <input type="text" name="user_address"  value="<?php echo set_value('user_address');?>"class="form-control" placeholder="Enter user address">
                        <p><?php echo form_error('user_address');?></p>
                      </td>
                    </tr>                          
                    <tr>
                      <td>
                        <input type="submit" value="insert" class="btn btn-outline-info">
                      </td>
                   </tr>
                  </table>
                </form>
              </div><!-- col-md-12 closed!-->
            </div><!-- div class rows closed1-->
          </div> <!-- div class container-fluid closed1-->             
        </div>  <!-- div class sigin-div-left closed!-->
      </div> <!-- div class col-md-12 closed!-->
    </div> <!-- div class row closed!-->
 </div><!-- div class container closed1-->
</div> <!-- div class sigin closed!-->
<?php
 include_once 'footer.php';
?>


