
<?php

include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"><!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pizza</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid"> <!-- div class container-fluid start -->
      <div class="row"> 
       <a class="Add_item btn btn-danger" href="<?php echo site_url('admin/Add_category'); ?>   ">Add Category
       </a>
     </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////// -->
    <div class="container-fluid"> <!-- div class container start -->
      <div class="row"> <!-- div class row start -->
        <div class="col-md-6">   <!-- div class col-md-6 start -->
          <p style="text-align: center;">Pizaa Name</p>
          <form method="post">
            <div class="form-group">
             <label for="exampleInputName">Pizaa Name</label>
             <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Pizza Name">
            </div>   <!-- div class form-group closed -->
            <div class="form-group">
              <label for="exampleTextarea">Description</label>
              <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="enter description"style="margin-top: 0px; margin-bottom: 0px; height: 57px;">
              </textarea>
            </div> <!-- div class form-group closed -->
            <div class="form-group">
             <label for="exampleInputInteger">Add on price</label>
             <input type="Integer" class="form-control" id="exampleInputInteger" aria-describedby="emailHelp" placeholder="Enter price">
            </div> <!-- div class form-group closed -->
            <div class="row"> <!-- div class row start -->
              <div class="col-md-6"> <!-- div class col-md-6 start -->
                <h3>Pizza Pics</h3>
              </div> <!-- div class col-md-6 closed -->
              <div class="col-md-6"> <!-- div class col-md-6 start -->
                <img src="<?php echo base_url('assets/media/s.jpg');?>">
              </div> <!-- div class col-md-6 closed -->
            </div> <!-- div class row closed -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>  <!-- form closed -->
        </div> <!-- div class col-md-6 closed -->
        <div class="col-md-6"> <!-- div class col-md-6 start -->
         <div class="pizza-table"> <!-- div class pizza-table start -->
            <table class="table table-striped"> <!-- table start -->
              <thead class="bg-info">
               <tr>
                  <th scope="col">Size</th>
                  <th scope="col">Inches</th>
                  <th scope="col">Price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               <tr class="table-active">
                  <th scope="row">Small</th>
                  <td>6''</td>
                  <td>350</td>
                  <td>
                    <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                    <i class="fa fa-minus-circle   admin_pizza_delete" aria-hidden="true">
                    </i>
                  </td>
                </tr>
                <tr class="table-active">
                  <th scope="row">Medium</th>
                  <td>8''</td>
                  <td>850</td>
                  <td>
                    <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                    <i class="fa fa-minus-circle admin_pizza_delete" aria-hidden="true"></i>
                 </td>
                </tr>
                <tr class="table-active">
                 <th scope="row">Large</th>
                 <td>12''</td>
                 <td>1200</td>
                 <td>
                   <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                   <i class="fa fa-minus-circle admin_pizza_delete" aria-hidden="true"></i>
                 </td>
                </tr>
                <tr class="table-active">
                  <th scope="row">XL</th>
                  <td>16''</td>
                  <td>1600</td>
                  <td>
                    <i class="fa fa-pencil admin_pizza_edit" aria-hidden="true"></i>
                    <i class="fa fa-minus-circle admin_pizza_delete" aria-hidden="true"></i>
                  </td>
                </tr>
              </tbody>
            </table> 
          </div><!-- pizza table!-->
          <div class="container-fluid"> <!-- div class container-fluid -->
            <div class="row">  <!-- div class row start -->
              <h3>Add pizza Price</h3>
              <div class="col-md-12">
                <form method="post">
                  <div class="form-group">
                    <label for="exampleInputName">Pizza Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Pizza Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea">Inches</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="enter pizza size"style="margin-top: 0px; margin-bottom: 0px; height: 57px;">
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputInteger"> Price</label>
                    <input type="Integer" class="form-control" id="exampleInputInteger" aria-describedby="emailHelp" placeholder="Enter price">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div><!-- col-md-12 closed -->
            </div> <!-- div class row closed!-->
          </div> <!-- div class container-fluid -->
        </div> <!-- div class col-md-6 closed -->
      </div>  <!-- div class row closed -->
    </div> <!-- div class container-fluid closed -->
  </section><!-- section content closed -->
</div><!-- div class content-wrapper -->
<?php
include_once 'footer.php';
     ?>