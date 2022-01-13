<?php
include_once 'header.php';
include_once 'menu.php';
?>
  <div class="content-wrapper"><!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 class="m-0 text-dark"> Announcement </h1>
          </div><!-- div class col-sm-6 closed!-- -->
        </div><!-- /.div class row  closed-->
      </div><!-- /.container-fluid -->
    </div> <!-- div class content-header closed!-->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">  
              <table class="table table-bordered table-sm table-hover">
                <thead class="bg-info">
                  <tr>
                    <td> SR </td>
                    <td> For </td>
                    <td> Heading </td>
                    <td> Media </td>
                    <td> Detail </td>
                  </tr>
                </thead>
                <?php
                $sr=1;
                foreach($ano as $value)
                {
                ?>
                <tr>
                  <td><?php echo $sr;?></td>
                  <td>
                    <?php
                    if($value->accounts_id == 0)
                    {
                      echo "General";
                    }else {
                      echo "Specific";
                    }
                    ?>
                  </td>
                  <td><?php echo $value->heading;?></td>
                  <td><img src="<?php echo base_url('assets/media/announcement/'.$value->pic);?>" style="width: 70px;"></td>
                  <td><?php echo $value->description;?></td>
                </tr>
                <?php
                 $sr++;
                 }
                 ?>
              </table>
            </div>
          </div>
      </div>
    </section>
  </div> <!-- div class content-wrapper closed!-->
<?php
include_once 'footer.php';
?>