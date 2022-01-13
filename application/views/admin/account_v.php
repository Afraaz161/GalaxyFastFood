<?php

include_once 'header.php';
include_once  'menu.php';
?>


<div class="content-wrapper"> <!-- Content wrapper-->
    <div class="content-header"><!-- content-header -->
     <div class="container-fluid"> <!-- container-fluid -->
        <div class="row mb-2"> <!-- row mb-2  -->
         <div class="col-sm-6"> <!-- col-sm-6 -->
           <h1 class="m-0 text-dark"> ACCOUNTS </h1>
          </div><!-- /.col-sm-6 closed -->
        </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>   <!-- /.content-header -->
     <section class="content"> <!-- section content start -->
       <div class="container-fluid"> <!-- container-fluid -->
         <div class="row"> <!-- row start -->
          	<div class="col-md-12"> <!-- col-md-12 starts -->
              
              <table class="table table-hover table-bordered table-sm">
                
                <thead class="bg-danger">
                  
                  <tr>
                    <th>Sr#</th>
                    <th> Name</th>
                    <th> Phone</th>
                    <th> Email </th>
                    <th> Password</th>
                    <th> Address</th>
                    <th> Active</th>
                    
                 </tr>
               </thead>
                  
                  <tbody>
                    
                    <?php
                      $accounts_id=1;
                      foreach ($show as $value) 
                      {
                        $id =$value->accounts_id;
                    ?>
                    
                    <tr>
                      
                      <th scope="row"><?php echo $accounts_id;?></th>
                      <td>
                        <img src="<?php echo base_url('assets/media/accounts/'.$value->pic);?>"style="width: 50px;height: 50px;border-radius: 50%;box-sizing: border-box;object-fit: cover;">
                        <span style="padding-left: 10px;"><?php echo $value->name;?></span>
                      </td>
                      <td><?php echo $value->phone;?></td>
                      <td><?php echo $value->email;?></td>
                      <td><?php echo $value->password?></td>
                      <td><?php echo $value->address;?></td>
                      <td>
                        <?php
                        if( $value->active == 1 ) {
                        ?>
                          <i class="fa fa-check" style="color: green" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/Account_c/block/0/'.$value->accounts_id); ?>" class="btn btn-sm btn-danger">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                        <?php
                        } else {
                        ?>
                          <i class="fa fa-times" style="color: red" aria-hidden="true"></i>
                          <a href="<?php echo site_url('admin/Account_c/block/1/'.$value->accounts_id); ?>" class="btn btn-sm btn-info">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                          </a>
                        <?php } ?>
                      </td>
                      
                   </tr>
                    <?php
                      $accounts_id++;
                      }
                    ?>
                 </tbody>
               </table> 
             </div> <!-- div class col-md-12 closed -->
         </div><!-- div class row closed-->
                       	
      </div><!-- div class container-fluid!-->
    </section><!-- section closed -->
  </div> <!-- div class content-wrapper -->
















<?php
include_once 'footer.php';

?>