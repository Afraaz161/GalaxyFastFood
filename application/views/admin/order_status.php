<?php

include_once 'header.php';
include_once 'menu.php';

//$item_type_id_my = $specific[0]->order_status_id;


//$item_type_id_item = $specific_id[0]->item_type_id;
?>
 <div class="content-wrapper">  <!-- Content Header (Page header) -->
    <div class="content-header"> <!-- content header -->
      <div class="container-fluid"> <!-- container-fluid -->
        <div class="row mb-2"> <!-- row mb-2  -->
          <div class="col-sm-6"> <!-- col-sm-6 -->
            
            <h1 class="m-0 text-dark">
             <?php echo $specific[0]->name;

             ?> 
          </h1>
          </div><!-- /.col-sm-6 -->
         
        </div><!-- /.row mb-2-->
      </div><!-- /.container-fluid -->
    </div>   <!-- /.content-header -->
    <section class="content"> <!-- content -->
      <div class="container-fluid"> <!-- container-fluid -->
        <div class="row"> <!-- row -->
          <?php
           foreach($show as $value)
            {
              $id= $value->order_status_id;
          ?>
          <div class="col-lg-2 col-6">
            <a href="<?php echo site_url('admin/ORDER_c/item/'.$id);?>">
              <!-- small box -->
              <div class="small-box-0 bg-success "> <!-- small-bg-info -->
                <div class="inner-0"> <!-- inner -->
                  <p style="text-align: center;">
                    <?php echo $value->name;?>
                  </p>
                </div> <!-- inner closed -->
              </div> <!-- small-bg-info closed -->
            </a>
          </div> <!-- col-lg-2 col-6 closed -->
          <?php
          }
          ?>
       </div> <!-- /.row -->
     </div> <!-- Main row -->  
   </section>
    <section class="content">
      <div class="container-fluid"> <!-- div class container-fluid start -->
        <div class="row"> <!-- div class row start --> 
           <div class="col-md-12">
          <table class="table table-hover table-bordered">
           <thead class="bg-info">
            <tr>
              <th scope="col">Sr#</th>
              <th scope="col">OrderID</th>
              <th scope="col"> Pic</th>
              <th scope="col"> Name</th>
              <th scope="col"> Order time</th>
              <th scope="col">Status</th>
              <th scope="col">TotalItem</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
             </tr>
           </thead>
           <tbody>
            <?php
                    $item_sr=1;
                    foreach ($specific_id as  $value) 
                    {
                      $id=$value->item_type_id;
                  ?>
                   <tr class="table-active">
                      <th scope="row" style="padding-top: 50px;"><?php echo $item_sr;?>
                      </th>
                      <td>
                        <div class="admin_item_img">
                          <img src="<?php echo base_url('assets/media/drink1.jpg');?>" style="width:0100px;border-radius: 50%;object-fit: cover;">
                        </div> <!-- admin_item_img closed!-->
                      </td>
                      <td style="padding-top: 50px;"><?php echo $value->name;?></td>
                      <td style="padding-top: 50px;"><?php echo $value->price;?></td>
                      <td style="padding-top: 50px;"><?php echo $value->description;?></td>
                      <td style="padding-top: 50px;">
         
                       <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                       <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i>
                     </td>
                   </tr>
                   <?php
                    $item_sr++;
                    }
                    ?>
            </tbody>
          </table>
        </div> <!-- div class col-md-12 closed -->

        </div> <!-- div class row closed -->
     </div> <!-- div class container-fluid closed -->
   </section><!-- div section content closed -->
 </div> <!-- div class content-wrapper -->
<?php
include_once 'footer.php';?>