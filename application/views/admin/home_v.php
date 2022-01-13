
<?php 
include_once "header.php";
include_once "menu.php";
?>
<div class="content-wrapper"> <!-- Content Wrapper. Contains page content -->
  <div class="content-header"> <!-- Content Header (Page header) -->
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div> <!-- /.content-header -->
  <section class="content"> <!-- Main content section starts -->
    <div class="container-fluid"> <!-- container-fluid starts --> 
      <div class="row"><!-- row start -->
        <div class="col-lg-3 col-6"> <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <!-- <h3>150</h3> -->
              <a href="<?php echo site_url('admin/ORDER_c');?>"><p> Orders</p></a>
            </div><!-- inner class closed -->
            <!--  <div class="icon"> -->
              <!-- <i class="ion ion-bag"></i> -->
            <!-- </div> -->
           <!--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div><!-- small-box bg-info closed -->
        </div> <!-- ./col-lg-3 col-6 closed -->
        <div class="col-lg-3 col-6"> <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <!-- <h3>53<sup style="font-size: 20px">%</sup></h3> -->
              <a href="<?php echo site_url('admin/Account_c');?>"><p>Accounts</p></a>
            </div>
           <!--  <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div> -->
           <!--  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div> <!-- small-box bg-success -->
        </div> <!-- col-lg-3 col-6 closed -->
        <div class="col-lg-3 col-6"><!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
            <!--   <h3>44</h3> -->
              <a href="<?php echo site_url('admin/About_c');?>">
              <i class="fas fa-address-card"></i>
                <span>About Us</span>
              </a>
            </div><!-- inner closed -->
            <!-- <div class="icon">
              <i class="ion ion-person-add"></i>
            </div> -->
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div><!-- small-box bg-warning closed -->
        </div><!-- col-lg-3 col-6 closed -->
        <div class="col-lg-3 col-6"><!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <!-- <h3>65</h3> -->
              <a href="<?php echo site_url('admin/Feedback_c');?>"><p>Feedback</p></a>
            </div>
            <!-- <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div> -->
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
 -->      </div><!-- small-box bg-danger closed -->
          
        </div><!-- ./ col-lg-3 closed col-6 closed -->
      </div><!-- /.row -->
    </div><!-- container-fluid closed -->
  </section><!-- content section closed -->
</div>  <!-- /.content-wrapper closed -->
<?php
include_once "footer.php";
?>