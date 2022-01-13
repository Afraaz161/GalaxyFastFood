<?php 
 
include_once "header.php";
include_once "menu.php";
?>
 <div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
    <div class="content-header"><!-- Content Header (Page header) -->
      <div class="container-fluid"> <!-- container-fluid start -->
        <div class="row mb-2"> <!-- row mb-2 start -->
          <div class="offset-5 col-sm-6"><!-- col-md-6 start -->
            <h1 class="m-0 text-dark"> Profile </h1>
          </div><!-- /.col-md-6 closed -->
        </div><!-- /.row mb-2 closed-->
      </div><!-- /.container-fluid  closed-->
    </div>   <!-- /.content-header closed -->
    <section class="content">   <!-- section start!--><!-- Main content -->
      <div class="container-fluid"> <!-- container-fluid start!-->
       <div class="row">  <!-- row start!-->
          <?php
            foreach($show as $value)
            {
          ?>
          <div class="offset-3 col-md-8"> <!-- div class offset-3 col-md-8 start -->
            <div class="profile-div">  <!-- div class profile-div start -->
              <div class="profile-div-img"> <!-- div class profile-div-img start -->
                    <img src="<?php echo base_url('assets/media/accounts/'.$value->pic);?>">
              </div> <!-- div class profile-div-img closed -->
              <div class="profile-div-name"> <!-- profile-div-name start -->  
               <?php echo $value->name;?>
              </div> <!-- profile-div-name closed -->
              <div class="profile-div-email"> <!-- profile-div-email start -->
               <?php echo $value->email;?>
              </div> <!-- profile-div-emailclosed -->
              <!-- <div class="profile-div-date"> <!-- profile-div-date start -->
               <!-- <?php //echo $value->password;?>
              </div> --> <!-- profile-div-date closed -->
              <a href="<?php echo site_url('user/Profile_c/profile_edit');?>" class="profile-div-action">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>
            </div><!-- profile-div closed!-->
          </div> <!-- offset-3 col-md-8 clsoed --> 
          <?php
            }
          ?>
        </div>  <!-- row closed --> 
      </div> <!-- div class container-fluid closed -->
    </section> <!-- section  content closed!-->
 </div> <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>