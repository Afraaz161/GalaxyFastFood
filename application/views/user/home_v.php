
<?php 
include_once "header.php";
include_once "menu.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <!--  <h3>150</h3> -->

                <a href="<?php echo site_url('user/Order_c');?>">
                  <i class="fa fa-first-order" aria-hidden="true"></i>
                  <span>Orders</span>
                </a>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->

                <a href="<?php echo site_url('user/Special_deal_c');?>">
                 <i class="fa fa-medkit" aria-hidden="true"></i>
                  <span>Special Deals</span>
                </a>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <!--  <h3>44</h3> -->

                <a href="<?php echo site_url('user/Announcements_c');?>">
                  <i class="fa fa-bullhorn" aria-hidden="true"></i>
                  <span>Announcements</span>
                </a>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <!-- <h3>65</h3> -->

                <a href="<?php echo site_url('user/Order_c/history');?>">
                  <i class="fas fa-history"></i>
                  <span>History</span>
                </a>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info"> <!-- small box -->
              <div class="inner"><!-- <h3>65</h3> -->
                <a href="<?php echo site_url('user/Profile_c/index');?>">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Profile</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info"> <!-- small box -->
              <div class="inner"><!-- <h3>65</h3> -->
                <a href="<?php echo site_url('user/Feedback_c/index');?>">
                   <i class="fa fa-commenting-o" aria-hidden="true"></i>
                  <span>Feedback</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info"> <!-- small box -->
              <div class="inner"><!-- <h3>65</h3> -->
                <a href="<?php echo site_url('user/Change_password_c/index');?>">
                  <i class="fa fa-key" aria-hidden="true"></i>
                  <span>Change Password</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php

include_once "footer.php";
?>