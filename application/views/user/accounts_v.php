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
    </div>   <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <form method="post" action="<?php echo site_url('user/Accounts_c/add_do');?>">
              <table class="table table-bordered table-hover">
                <tr>
                 <td>
                   <label>Name</label>
                   <input type="text" name="user_name" class="form-control" placeholder="Enter user name">
                 </td>
               </tr>
               <tr>
                 <td>
                   <label>Phone</label>
                   <input type="number" name="user_phone" class="form-control" placeholder="Enter user phone number">
                  </td>
                </tr>
                <tr>
                 <td>
                   <label>Email</label>
                   <input type="email" name="user_email" class="form-control" placeholder="Enter user email">
                 </td>
                </tr>
                <tr>
                 <td>
                   <label>Password</label>
                   <input type="Password" name="user_password" class="form-control" placeholder="Enter user password">
                  </td>
                </tr>
                <tr>
                  <td>
                   <label>Address</label>
                   <input type="text" name="user_address" class="form-control" placeholder="Enter user address">
                  </td>
                </tr>                          
                <tr>
                 <td>
                   <input type="submit" value="insert" class="btn btn-outline-info">
                 </td>
                </tr>
              </table>
            </form>
         </div>
       </div>
     </div>              
   </section> <!-- section closed -->
 </div> <!-- content-wrapper closed -->
<?php
include_once 'footer.php';
?>