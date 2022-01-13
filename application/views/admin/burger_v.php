<?php 
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> BURGER</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content"><!-- content section  -->
   <div class="container-fluid"> <!-- container-fluid -->
     <div class="row"> <!-- row -->
       <div class="col-lg-2 col-6"> <!-- col-md-6 -->
          <a href="<?php echo site_url('admin/Food_menu_c/pizza');?>">
            <div class="small-box bg-info"><!-- small-box bg-info -->
              <div class="inner"><!-- inner -->
               <p style="text-align: center;">Pizza</p>
              </div><!-- inner closed -->
            </div><!-- small-box bg-info closed -->
          </a>
        </div><!-- ./col-lg-2 col-6 closed -->
        <div class="col-lg-2 col-6">
          <a href="<?php echo site_url('admin/Food_menu_c/burger');?>">
            <div class="small-box bg-success">
              <div class="inner">
                <p style="text-align: center;font-size: 18px;">Burger</p>
              </div>
            </div>
         </a>
       </div><!-- ./col-lg-2 col-6 closed -->
       <div class="col-lg-2 col-6">
          <a href="<?php echo site_url('admin/Food_menu_c/Shawarma');?>">
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Shawarma</p>
              </div>
            </div>
         </a>
       </div><!-- ./col -->
       <div class="col-lg-2 col-6">
          <a href="<?php echo site_url('admin/Food_menu_c/Drinks');?>">
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Drinks</p>
              </div>
            </div>
          </a>
        </div> <!-- ./col -->
        <div class="col-lg-2 col-6">
          <a href="<?php echo site_url('admin/Food_menu_c/Special_deals');?>">
            <div class="small-box bg-warning">
              <div class="inner">
                <p>Special deals</p>
              </div>
            </div>
          </a>
        </div>
        <a href=""><button class="btn btn-success"value="Add"type="button">Add</button></a>
      </div> <!-- row closed -->
      <a  class="Add_item " href="<?php echo base_url('');?>">Add Category</a>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="#">
            <table class="table table-striped"> <!-- table start -->
              <thead class="bg-info">
                <tr>
                  <th scope="col">Sr#</th>
                  <th scope="col">ItemImage</th>
                  <th scope="col">ItemName</th>
                  <th scope="col">Item Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-active">
                  <th scope="row" style="padding-top: 50px;">1</th>
                  <td>
                    <div class="admin_item_img">
                      <img src="<?php echo base_url('assets/media/burger_1.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                    </div> <!-- admin_item_img closed!-->
                  </td>
                  <td style="padding-top: 50px;">Zinger Burger</td>
                  <td style="padding-top: 50px;">180`</td>
                  <td style="padding-top: 50px;">
                    <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                    <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr class="table-active">
                  <th scope="row" style="padding-top: 50px;">2</th>
                  <td>
                    <div class="admin_item_img">
                      <img src="<?php echo base_url('assets/media/burger_1.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                    </div>
                        </td>
                  <td style="padding-top: 50px;">Fish Burger</td>
                  <td style="padding-top: 50px;">280`</td>
                  <td style="padding-top: 50px;">
                    <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                    <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i>

                  </td>
                </tr>
                <tr class="table-active">
                  <th scope="row" style="padding-top: 50px;">1</th>
                  <td>
                   <div class="admin_item_img">
                     <img src="<?php echo base_url('assets/media/burger_1.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                    </div>
                  </td>
                  <td style="padding-top: 50px;">Hot Burger</td>
                  <td style="padding-top: 50px;">150`</td>
                  <td style="padding-top: 50px;">
                   <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                   <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr class="table-active">
                  <th scope="row" style="padding-top: 50px;">1</th>
                  <td>
                    <div class="admin_item_img">
                      <img src="<?php echo base_url('assets/media/burger_1.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                    </div>
                  </td>
                  <td style="padding-top: 50px;">Egg Burger</td>
                  <td style="padding-top: 50px;">90`</td>
                  <td style="padding-top: 50px;">
                   <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                   <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </form> 
        </div> <!-- col-md-12 closed -->
      </div><!-- row closed without container -->
    </div><!-- container-fluid closed -->
  </section><!-- content section closed -->
</div> <!-- div class content-wrapper -->
<?php
include_once'footer.php';
?>