<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"><!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> CURRENT ORDER </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="Content"><!-- section Content Wrapper -->
     <div class="col-sm-9">
      <?php
       foreach ($accounts as $value)
        {
        ?>
        <center>
          <div class="user_item_img">
           <img src="<?php echo base_url('assets/media/accounts/'.$value->pic);?>">
          </div>
          <p style="font-size:30px"><?php echo $value->name;?></p>
        </center>
     
      <?php
       }
       ?>
     </div>
     <a href="<?php echo site_url('user/Order_c/history');?>" class="btn btn-outline-info" style="margin-left: 20px;margin-bottom: 20px;border-radius: 5px;">Back</a>
     <div class="col-md-12"> <!-- div class col-md-8 start -->
          <!--  <h3>CURRENT ORDER</h3> -->
           <center>    
             <table class="table table-hover table-active">
               <thead class="bg-info">
                 <tr>
                   <th scope="col">sr</th>
                   <th scope="col">Image</th>
                   <th scope="col">Item</th>
                   <th scope="col">Date</th>
                   <th scope="col">Price</th>
                   <!-- <th scope="col">Action</th> -->
                  
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
                       <div class="user_item_img"> <img  src="<?php echo base_url('assets/media/items/'.$value->pic);?>" />
                        </div>
                     </td>
                      <td> <?php echo $value->name;?> </td>
                     <td><?php echo $value->odaddan;?></td>
                     <td><?php echo $value->price;?></td>
                    <!--  <td> -->
                      <!--   <a href=""class="btn btn-outline-info btn-sm"> Change 
                        </a> 
                        <a href="" class="btn btn-outline-danger btn-sm"> Del
                        </a> -->
                     <!--  </td> -->
                    </tr>
                <?php
                  $sr++;
                  }
                ?> 
                </tbody>
             </table>
           </center>
        </div> <!-- div class col-md-8 closed -->

    </section><!-- section Content Wrapper closed -->
</div><!-- content-wrapper closed -->

<?php
include_once 'footer.php';?>