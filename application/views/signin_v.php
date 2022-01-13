<?php   
include_once 'header.php';
?>
<div class="signin"> <!-- div class signin start !-->
  <h1 style="padding-top: 10px;">SignIn</h1>
  <div class="container"> <!-- div class container starts  !-->
     
    <div class="row"> <!-- div class row start!-->
    	<div class="col-md-4"> <!-- div class col-md-4 start !-->
        <div class="signin-div-left">	<!-- div class signin-div-left start!-->
          <form method="post" action="<?php echo site_url('signin_c/sign_do'); ?> " style="padding-top: 100px"> <!-- form start!-->
            <div class="form-group"> <!-- div class form-group start1--!-->
              <label for="exampleInputEmail1">Email Address</label>
              <input type="email" name="user_email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter email">
             <!--  <p><?php //echo form_error('user_email');?></p> -->
            </div>  <!-- div closed for-group -->
            <div class="form-group"> <!-- div class form-group start!-->
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="user_password"class="form-control" id="exampleInputPassword1" placeholder="Enter password">
            </div> <!-- div form-group closed!-->
            <input type="submit" name=""value="signin" class="btn btn-info btn-md"> 
              <a href="<?php echo site_url('Signup_c/index');?>" class="btn btn-outline-info"style="float: right; margin-left: 30px;padding-bottom: 10px;color:white;">Don't have account</a>
          </form>
           <!-- form closed !-->
           <!-- div class row start!-->
           
            <div style="padding: 5px 10px;margin-left:30px;margin-right:10px;float: right;"> <!-- div class col-md-6 start!-->
              <a href="<?php echo site_url('Signup_c/index');?>">
                <button class="btn btn-success"type="button" style="border-radius: 10px;">Register Now</button>
              </a>
            </div><!--div class col-md-12 closed!-->
          
        </div>  <!-- div class sigin-div-left closed!-->
      </div> <!-- div class col-md-4 closed!-->
    	<div class="col-md-6">  <!-- div class col-md-8 start!-->
    	<!--  <img src="<?php echo base_url('assets/media/sign_in.jpg');?>" style="float: right;">  -->
    	</div>  <!-- div class col-md-8 closed!-->
    </div> <!-- div class row closed!-->
  </div><!-- div class container closed1-->
</div> <!-- div class sigin closed!-->
<?php 
include_once 'footer.php';
?>

	