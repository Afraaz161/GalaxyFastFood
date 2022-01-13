<!DOCTYPE html>
<html>
<head>
	<title>GALAXY FAST FOOD</title>
  <link rel="icon" type="images/png" href="<?php echo base_url('assets/media/logo.png'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/main_style.css');?>">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owlCarousel2/assets/owl.carousel.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owlCarousel2/assets/owl.theme.default.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/owlCarousel2/assets/owl.theme.green.css') ?>">
  
  <!-- alert -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/alert/alert.css');?>">
  <script src="<?php echo base_url('assets/alert/alert-msg.js');?>"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <div id="alert-area" class="alert-area" style=""></div>
  <?php if(@$_SESSION['alert_msg']): ?>
  <?php foreach($_SESSION['alert_msg'] as $alert_msg ): ?>
    <script type="text/javascript">alert_msg("<?php echo $alert_msg['msg']; ?>","<?php echo $alert_msg['notify']; ?>")</script>
  <?php endforeach; ?>
  <?php unset($_SESSION['alert_msg']); ?>
<?php endif; ?>

  
<header class="header">
  <div class="container">
  
    <div class="row">
      <div class="col-md-3 border-0">
          <a href="<?php echo site_url('Home_c');?>">
            <img src="<?php echo base_url('assets/media/logo.png');?>" width="70px">
          
            

          </a>
      </div>  <!-- col-md-4 -->
      <div class="col-md-9 border-0">
          <a class="header-menu-a" href="<?php echo site_url('Menu_c'); ?>">MENU</a>
         
          <a class="header-menu-a" href="<?php echo site_url('About_c'); ?>">ABOUT</a>
          <a class="header-menu-a" href="<?php echo site_url('Contact_c'); ?>">CONTACT</a>
         <a class="header-menu-a" href="<?php echo site_url('Gallary_c'); ?>">GALLARY</a>

         <?php
           if($this->session->userdata('validity') == NULL)
          {
          ?>
           <a class="header-menu-a" href="<?php echo site_url('Signin_c'); ?>"> SIGNIN</a>
           <a class="header-menu-a" href="<?php echo site_url('Signup_c'); ?>">SIGNUP</a>
            <?php
        }
        else
        {
          ?>
          <a  class ="header-menu-a"href="<?php echo site_url('user/Home_c/index');?>">Account</a>

          <a class="header-menu-a"href="<?php echo site_url('user/Order_c/index');?>">
            <i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>
            <?php echo @$count; ?> 
          </a>
          <?php
        }
        ?>
      </div>  <!-- col-md-8 -->
    </div> <!--  row-->
  </div>  <!-- conteainer -->
</header>  <!-- header -->
</body>
</html>

