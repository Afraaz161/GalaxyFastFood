<?php

include_once 'header.php';
include_once 'menu.php';
$item_type_id_my = $specific[0]->item_type_id;
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
              $id= $value->item_type_id;
          ?>
          <div class="col-lg-2 col-6">
            <a href="<?php echo site_url('admin/Food_menu_c/item/'.$id);?>">
              <!-- small box -->
              <div class="small-box bg-info"> <!-- small-bg-info -->
                <div class="inner"> <!-- inner -->
                  <h2 style="text-align: center;">
                    <?php echo $value->name;?>
                  </h2>
                </div> <!-- inner closed -->
              </div> <!-- small-bg-info closed -->
            </a>
          </div> <!-- col-lg-2 col-6 closed -->
          <?php
          }
          ?>
          <a class="btn btn-outline-info bt-sm" href="<?php echo site_url('admin/Add_item_c/index/'.$item_type_id_my);?>">Add item
          </a>
       </div> <!-- /.row -->
     </div> <!-- Main row -->  
   </section>
    <section class="content">
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
                    <th scope="col">Description</th>
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
                          <img src="<?php echo base_url('assets/media/items/'.$value->pic);?>">
                        </div> <!-- admin_item_img closed!-->
                      </td>
                      <td style="padding-top: 50px;"><?php echo $value->name;?></td>
                      <td style="padding-top: 50px;"><?php echo $value->price;?></td>
                      <td style="padding-top: 50px;"><?php echo $value->description;?></td>
                      <td style="padding-top: 50px;">
         
                      <!--  <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                       <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true"></i> -->
                     </td>
                   </tr>
                   <?php
                    $item_sr++;
                    }
                    ?>
                </tbody>
             </table>  <!-- table closed -->
           </form> <!-- form closed -->
         </div> <!-- div class col-md-12 closed -->
       </div> <!-- div class row closed -->
     </div> <!-- div class container-fluid closed -->
   </section><!-- div section content closed -->
 </div> <!-- div class content-wrapper -->
<?php
include_once 'footer.php';?>