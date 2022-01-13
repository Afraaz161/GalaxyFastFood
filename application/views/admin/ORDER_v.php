<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
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
        <div style="width:100%;border-color:4px solid red">
          <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo site_url('admin/ORDER_c/dated');?>">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
             
              <a class="navbar-brand" href="#">Search
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">FROM</a>
                    <div class="dropdown-menu">
                      <input type="date" name="startdate">
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">To</a>
                    <div class="dropdown-menu">
                     <input type="date" name="enddate">
                    </div>
                  </li>
                </ul>
                <input type="submit" name="search" value="Search order ..!">
              </div>
            </nav> 
          </form>
        </div>

        <?php
          if( $this->session->flashdata('error_msg') != NULL)
          {
        ?>
          <div style="top:90px;right:30px;position: absolute;">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $this->session->flashdata('error_msg');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        <?php
        }
        ?>
        <?php
        foreach($status as $value)
        { 
              $id= $value->order_status_id;
        ?>
        <div class="col-lg-2 col-6">
          <a href="<?php echo site_url('admin/ORDER_c/index/'.$value->order_status_id);?>">
           <div class="small-box-0 bg-success"> <!-- small-bg-info -->
             <div class="inner"> <!-- inner -->
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
            $sr=1;
            foreach($my as $value)
            {
              $id = $value['order_id'];
              $price =$value['price'];
              $pri= explode('+', $price);
              $len =count($pri);
              $sum=0;
              for ($i=0;$i<$len;$i++)
              {
                $sum=$sum+$pri[$i];
                // echo "<pre>";
                // print_r($i<$len);
                // exit;

              }
              ?>

              <tr class="table-active">
              <th scope="row"><?php echo $sr;?></th>
               <th scope="row"><?php echo $value['order_id'];?></th>
               <td> 
                 <div class="row">
                   <div class="admin_item_img">
                    <img src="<?php echo base_url('assets/media/accounts/'.$value['apic']);?>">
                   </div>
                  </div>
               </td>
               <td width="0%">
                 <?php echo $value['aname'];?>
               </td>
               <td><?php echo $value['cadd_on'];?></td>
               <td>
                 <form method="post" action="<?php echo site_url('admin/ORDER_c/update'); ?>">
                  <select class="form-control" name="stid">
                     <option value="0">--SELECT--</option> 
                    <?php
                     foreach($status as $s)
                     {
                     ?>
                      <option value="<?php echo $s->order_status_id; ?>"> <?php echo $s->name; ?> </option>
                     <?php
                     }
                     ?>
                  </select>
                 <!--  <a href="" class="btn btn-outline-success btn-sm" ></a> -->
                  <input class="btn btn-outline-success btn-sm" value="change" type="submit">
                  <input type="hidden" name="oid" value="<?php echo $id; ?>" >
                  <input type="hidden" name="account_id" value="<?php echo $value['accounts_id']; ?>" >
                  
                  
                 </form>
               </td>
               <td><?php echo $value['sname'];?></td>
               <td><?php echo $sum;?></td>
               <td>
                 <a href="<?php echo site_url('admin/ORDER_c/order_detail/'.$id);?>" class="btn btn-outline-success btn-sm"> Detail</a>
               </td>
              </tr>
              <?php
              // var_dump($value['sname']);
              // exit;
              $sr++;
              }
             ?>

            </tbody>
          </table>
        </div> <!-- div class col-md-12 closed -->
        <div></div>
      </div><!-- div class row closed-->
   </div><!-- div class container-fluid!-->
 </section>
</div> <!-- div class content-wrapper -->
<?php
include_once 'footer.php';
?>