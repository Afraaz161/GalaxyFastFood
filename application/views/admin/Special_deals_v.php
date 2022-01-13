<?php 
include_once 'header.php';
include_once 'menu.php';
?>

  
           <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1 class="m-0 text-dark"> Special Deals </h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>   <!-- /.content-header -->

          
               <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-2 col-6">
            <a href="<?php echo site_url('admin/Food_menu_c/pizza');?>">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                   

                <p style="text-align: center;">Pizza</p>
              </div>
               
             
            </div>
            </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <a href="<?php echo site_url('admin/Food_menu_c/burger');?>">
            <div class="small-box bg-success">
              <div class="inner">
                <p style="text-align: center;font-size: 18px;">Burger</p>
              </div>
             
              
            </div>
        </a>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <a href="<?php echo site_url('admin/Food_menu_c/Shawarma');?>">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                

                <p>Shawarma</p>
              </div>
              
              
            </div>
        </a>
          </div>
          <!-- ./col -->
             <div class="col-lg-2 col-6">
            
            <!-- small box -->
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
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                

                <p>Special deals</p>
              </div>
              
              
            </div>
          </a>
          </div>
           <a href=""><button class="btn btn-success"value="Add"type="button">Add</button></a>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

                    <div class="Add_item btn btn-info"><!-- div class Add_item start -->

                                           <a href="<?php echo base_url('');?>">Add Category</a>
                                       </div> <!-- div class Add_item closed -->

                     <div class="container-fluid"> <!-- div class container-fluid start -->
                     
                     <div class="row"> <!-- div class row start --> 

               
                        <div class="col-md-12"><!-- div class col-md-12 start -->
                              
                              <form method="post" action="#"> <!-- form start -->

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
                                                  <img src="<?php echo base_url('assets/media/special_deal.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
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
                                                  <img src="<?php echo base_url('assets/media/special_deal1.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                                                </div>
                                              </td>
                                              <td style="padding-top: 50px;">Zinger Burger</td>
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
                                                  <img src="<?php echo base_url('assets/media/special_deal2.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                                                </div>
                                              </td>
                                              <td style="padding-top: 50px;">Zinger Burger</td>
                                              <td style="padding-top: 50px;">180`</td>
                                              <td style="padding-top: 50px;">
         
                                                     <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                                             <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i>

                                              </td>
                                        </tr>
                                          <tr class="table-active">
                                        <th scope="row" style="padding-top: 50px;">1</th>
                                              <td>
                                                <div class="admin_item_img">
                                                  <img src="<?php echo base_url('assets/media/shawarma2.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                                                </div>
                                              </td>
                                              <td style="padding-top: 50px;">Zinger Burger</td>
                                              <td style="padding-top: 50px;">180`</td>
                                              <td style="padding-top: 50px;">
         
                                                     <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                                             <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i>

                                              </td>
                                        </tr>
                                        

    
   
                                         </tbody>

                                         </table>  <!-- table closed -->

                                         </form> <!-- form closed -->
                    
                    </div> <!-- div class col-md-12 closed -->
               
               </div> <!-- div class row closed -->
           </div> <!-- div class container-fluid closed -->

          </section>

      </div> <!-- div class content-wrapper -->




<?php
include_once'footer.php';?>