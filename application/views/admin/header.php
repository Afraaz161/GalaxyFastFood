<!DOCTYPE html>
<!-- <?php echo base_url('assets/user/'); ?> -->
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" type="images/png" href="<?php echo base_url('assets/media/logo.png'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin panel </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/user/plugins/fontawesome-free/css/all.min.css'); ?> ">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/admin_style.css');?>">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href=" <?php echo base_url('assets/user/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');?>">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="  <?php echo base_url('assets/user/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <!-- iCheck -->
  <link rel="stylesheet" href=" <?php echo base_url('assets/user/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/user/plugins/jqvmap/jqvmap.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?php echo base_url('assets/user/dist/css/adminlte.min.css');?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/user/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/user/plugins/daterangepicker/daterangepicker.css');?>">
  <!-- summernote -->
  <link rel="stylesheet" href=" <?php echo base_url('assets/user/plugins/summernote/summernote-bs4.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href=" <?php echo base_url('assets/user/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/dist/css/skins/_all-skins.min.css'); ?>">
</head>
<body class="skin-green hold-transition sidebar-mini layout-fixed ">
   <div id="alert-area" class="alert-area" style=""></div>
  <?php if(@$_SESSION['alert_msg']): ?>
  <?php foreach($_SESSION['alert_msg'] as $alert_msg ): ?>
    <script type="text/javascript">alert_msg("<?php echo $alert_msg['msg']; ?>","<?php echo $alert_msg['notify']; ?>")</script>
  <?php endforeach; ?>
  <?php unset($_SESSION['alert_msg']); ?>
<?php endif; ?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
       
      
      
         
         
            <!-- Message Start -->
          
            <!-- Message End -->
          
          
          
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="fa fa-cogs" aria-hidden="true"></i>
         
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         `<a href="<?php echo site_url('admin/Change_password_c/index');?>" class="btn btn-default btn-flat">
            <i class="fa fa-key" aria-hidden="true"></i></a>
         <a href="<?php echo site_url('admin/Signout_c/index');?>" class="btn btn-default btn-flat"style="float:right;"><i class="fa fa-power-off" aria-hidden="true"></i></a>

        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->