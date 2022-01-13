<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"><!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> ORDER </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="col-sm-9">
       <?php
       foreach ($accounts as $value)
        {
        ?>
        <center>
          <div class="admin_item_img">
           <img src="<?php echo base_url('assets/media/accounts/'.$value->pic);?>">
          </div>
          <p style="font-size:30px"><?php echo $value->name;?></p>
        </center>
     
      <?php
       }
       ?>
        <a href="<?php echo site_url('admin/ORDER_c/index');?>" class="btn btn-outline-info" style="margin-left: 20px;margin-bottom: 20px;border-radius: 5px;">Back</a>
       </div>
      <div class="col-md-12"> <!-- div class col-md-8 start -->
           <h3>CURRENT ORDER</h3>
           <center>    
             <table class="table table-hover">
               <thead class="bg-info">
                 <tr>
                   <th scope="col">sr</th>
                   <th scope="col">Image</th>
                   <th scope="col">Item</th>
                   <th scope="col">Date</th>
                   <th scope="col">Price</th>
                  <!--  <th scope="col">Action</th> -->
                  
                 </tr>
               </thead>
               <tbody>  
                <?php
                 $sr=1;
                 foreach ($order_detail as $value)
                  {
                    $id= $value->order_detail_id;
                ?>
                   <tr class="table-active">
                     <th> <?php echo $sr;?> </th>
                     <td>
                       <div class="admin_item_img"> <img  src="<?php echo base_url('assets/media/items/'.$value->pic);?>" />
                        </div>
                     </td>
                      <td> <?php echo $value->name;?> </td>
                     <td><?php echo $value->odaddon;?></td>
                     <td><?php echo $value->price;?></td>
                    <!--  <td>
                        <a href=""class="btn btn-outline-info btn-sm"> Change 
                        </a> 
                        <a href="" class="btn btn-outline-danger btn-sm"> Del
                        </a>
                      </td> -->
                    </tr>
                <?php
                  $sr++;
                  }
                ?>
                </tbody>
             </table>
           </center>
        </div> <!-- div class col-md-8 closed -->
    </section>
</div>

<?php
include_once 'footer.php';
?>
