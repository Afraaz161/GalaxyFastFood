<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"><!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> News </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid --> 
  </div>   <!-- /.content-header -->
  <section class="content"><!-- content section start -->
    <div class="container-fluid"><!-- container-fluid start -->
      <div class="row"><!-- row start -->
        <div class="col-md-12"><!-- col-md-6 start -->
          <table class="table table-bordered table-sm table-hover">
            <thead class="bg-info">
              <tr>
                <td>Sr</td>
                <td>For</td>
                <td>Heading</td>
                <td>Media</td>
                <td>Description</td>
              </tr>
            </thead>
            <tbody>
              <?php
              $sr = 1;
              foreach ($show_new as  $value) 
              {
              ?>
              <tr>
                <td><?php echo $sr;?></td>
                <td>
                  <?php
                  if($value->accounts_id == 0)
                  {
                    echo "General";
                  }
                  else
                  {
                    echo "Specific";
                  }
                  ?>
                </td>
                <td><?php echo $value->heading;?></td>
                <td>
                 <div class="user_item_img">
                    <img src="<?php echo base_url('assets/media/news/'.$value->pic);?>">
                  </div> 
                </td>
                <td><?php echo $value->description;?></td>
              </tr>
              <?php
              $sr++;
              }
              ?>
            </tbody>
          </table>
      
        </div> <!-- div class col-md-12 closed -->
        <div class="col-md-6"><!-- col-md-6 start -->
         
        </div> <!-- div class col-md-6 closed -->
      </div><!-- div class row closed-->
    </div><!-- div class container-fluid!-->
  </section><!-- content section closed -->
</div> <!-- div class content-wrapper -->













<?php
include_once 'footer.php';
?>