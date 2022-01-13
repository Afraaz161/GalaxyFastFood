<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">NEWS </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <form method="post" action="<?php echo site_url('admin/News_c/add_data_news');?>" enctype="multipart/form-data">
            <table class="table table-bordered">
              <tr>
                <td>Member</td>
                <td>
                  <select class="form-control" name="stid">
                    <option value="0">For All Members</option>
                    <?php
                    foreach ($show_accounts_holder as  $value) 
                    {
                    ?>
                    <option value="<?php echo $value->accounts_id;?>"><?php echo $value->name;?></option>
                    <?php
                    }
                    ?>
                  </select>
                </td>
               
              </tr>
              <tr>
                <td> Heading</td>
                <td> <input type="text" name="heading" class="form-control" required=""> </td>
              </tr>
              <tr>
                <td> Media </td>
                <td> <input type="file" name="pic" class="form-control" required=""> </td>
              </tr>
              <tr>
                <td> Description</td>
                <td> <textarea name="description" class="form-control"rows="5" required=""></textarea> </td>
              </tr>
              <tr>
                <td colspan="2"> <input type="submit" value="Insert" class="btn btn-outline-info"> </td>
              </tr>
            </table>
          </form>
        </div><!-- col-md-6 closed -->
        <div class="col-md-8">
          <table class="table table-hover table-bordered table-sm">
            <thead class="bg-success">
              <tr>
                <td> Sr# </td>
                <td> Heading </td>
                <td>Description</td>
                <td>Pic</td>
                <td>Add_on</td>
                <td>Active</td>
                <td> Action </td>
              </tr>
            </thead>
            <tbody>
              <?php
              $news_id=1;
              foreach($news as $value)
              {
                $id=$value->news_id;
            //echo"<pre>";
              //var_dump($id);
              //
              ?>
              <tr>
                <td><?php echo $news_id;?></td>
                <td><?php echo $value->heading;?></td>
                <td width="10%"><?php echo $value->description;?></td>
                <td>
                  <div class="admin_item_img">
                    <img src="<?php echo base_url('assets/media/news/'.$value->pic);?>">
                  </div>
                </td>
                <td><?php echo $value->add_on;?></td>
                <td>
                  <?php
                        if( $value->active == 1 ) {
                        ?>
                          <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/News_c/block/0/'.$value->news_id); ?>" class="btn btn-sm btn-danger">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                        <?php
                        } else {
                        ?>
                          <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/News_c/block/1/'.$value->news_id); ?>" class="btn btn-sm btn-info">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                  <?php
                   } ?>
                </td>
                <td>
                    <a href="<?php echo site_url('admin/News_c/edit_news/'.$id);?>" class="btn btn-outline-info btn-sm"> Edit </a> 
                   <a href="<?php echo site_url('admin/News_c/delete_news/'.$id);?>" class="btn btn-outline-danger btn-sm"> Del </a>
                </td>
              </tr>
              <?php
              $news_id++;
               }
              ?>
            </tbody>
          </table>

        </div><!-- col-md-6 closed -->
      </div><!-- row closed -->
    </div><!-- container-fluid closed -->
  </section>
</div> <!-- div class content-wrapper -->
<?php
include_once 'footer.php';
?>