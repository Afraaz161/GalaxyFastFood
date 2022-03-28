<?php 
include_once 'header.php';
include_once 'menu.php';
?>




          <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="offset-5 col-sm-6">
            <h1 class="m-0 text-dark"> Profile_Edit </h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>   <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     
          
                          

        <div class="container-fluid">    <!-- div class container starts  !-->
          <div class="row">   <!-- div class row start!-->
            <div class="offset-4 col-md-4"> <!-- div class col-md-4 start !-->
              <div class="signin-div-left"><!-- div classignin-div-left star!-->
                <?php 
                   $name = $show[0]->name;
                   $phone = $show[0]->phone;
                   $email = $show[0]->email;
                   //$password = $show[0]->password;
                ?>     


                  <form method="post" action="<?php echo site_url('user/Profile_c/profile_edit_do'); ?> " style="padding-top: 100px"> <!-- form start!-->
                    <div class="form-group"> <!-- div class form-group start1--!-->
                     <label for="nameInput">Name</label>
                      <input type="text" name="name"class="form-control" id="exampleInputEmail1" placeholder="Enter Name" 
                      value="<?php echo $name;?>">
                      <div class="form-group"> <!-- div class form-group start1--!-->
                     <label for="phone">Phone</label>
                      <input type="text" name="phone"class="form-control" id="phone" placeholder="Enter phone" 
                      value="<?php echo $phone;?>">
                    </div>  <!-- div closed for-group -->
            
                   
                 
                   <div class="form-group"> <!-- div class form-group start!-->
                     <label for="exampleInputEmail1">E-mail</label>
                     <input type="email" name="email"class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $email;?>">
                    </div> <!-- div form-group closed!-->
                    
                   <!--  <div class="form-group"> <!-- div class form-group start!-->
                      <!-- <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Enter password" value="<?php //echo $password;?>">
                   </div> --> <!-- div form-group closed!--> 

                   <input type="submit" onclick="myFunction()" value="save" class="btn btn-info">
                
                  </form> <!-- form closed !-->
                
             </div>  <!-- div class sigin-div-left closed!-->

          </div> <!-- div class col-md-4 closed!-->
      </div> <!-- div class row closed!-->
      
    </div><!-- div class container closed1-->
  </div> <!-- div class sigin closed!-->


  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script>
 
   function myFunction(){
     alert('Profile going for update');
   }
   
   
</script>
<?php
include_once 'footer.php';?>