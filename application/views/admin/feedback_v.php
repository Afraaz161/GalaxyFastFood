 value=""<?php
include_once'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> FEEDBACK </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid"><!-- div class container-fluid -->
      <div class="row"> <!-- div class row  -->
        <?php
        foreach ($feedback as $value)
         {
          $img = $value->upics;
          $star = $value->stars;
         ?>
        <div class="col-md-6"> <!-- div class col-md-6 -->
          <img src="<?php echo base_url('assets/media/accounts/'.$img)?>"style="width: 100px;height: 100px;border-radius: 50%;object-fit: cover;box-sizing: border-box;">
          <span style="padding-left: 20px;"><?php echo $value->name;?></span>
          <span style="padding-left:130px;text-decoration: none;text-align: center;"> <?php echo $value->review;?></span>
          <span style="color:red;font-family: calibri; font-size: 18px;padding-left: 20px"> <?php ?>
          </span>
          <p>
            <i class="fa fa-calendar" aria-hidden="true"style="border:0px solid red;padding-left: 150px;">
            </i>
            <span style="padding-left: 10px;"><?php echo $value->add_on;?></span>
          </p>                        
        </div> <!-- div class col-md-8 closed -->
        <div class="col-md-6">   <!-- div class col-md-6 start -->
          <div class="feedback-star"> <!-- div class feedback-star start -->
            <?php
            for($i=1;$i<=$star;$i++)
              {
                echo '<i class="fa fa-star" aria-hidden="true"></i>';
              }
              ?>
            
            
          </div> <!-- div class feedback-star closed -->
        </div> <!-- div class col-md-6 closed -->
       <?php
        }
       ?>
      </div><!-- div class row closed-->
    </div><!-- div class container-fluid!-->
  </section>
</div> <!-- div class content-wrapper -->
<?php
include_once 'footer.php';
?>