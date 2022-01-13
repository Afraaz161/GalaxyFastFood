<?php
 include_once'header.php';
 include_once 'menu.php';
?>
   <div class="content-wrapper"> <!-- Content Header (Page header) -->
        <div class="content-header"> 
           <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0 text-dark"> Add items </h1>
                   </div><!-- /.col -->
                </div><!-- /.row -->
           </div><!-- /.container-fluid -->
        </div>   <!-- /.content-header -->
        <section class="content"> <!-- content -->
            <div class="container-fluid">
               <div class="row">
                   <div class="col-md-6">
                        <form method="post" action="<?php echo site_url('admin/Add_item_c/add_item');?>" enctype="multipart/form-data">
                            <div class="form-group">
                             <label for="exampleInputNumber1">Item Name</label>
                             <input type="text" name="item_name"  class="form-control" id="exampleInputNumber1" placeholder="Enter item name">
                            </div><!-- form-group closed -->
                            <div class="form-group">
                              <label for="exampleInputNumber1">Item price</label>
                              <input type="number" name="item_price" class="form-control" id="exampleInputNumber1" placeholder="Enter item price">
                            </div><!-- form-group closed -->
                            <div class="form-group">
                              <label for="exampleTextarea">Enter Description</label>
                              <textarea class="form-control"name="item_description" id="exampleTextarea" rows="3"></textarea>
                           </div><!-- form-group closed -->
                           <div class="form-group">
                              <label for="exampleInputNumber1">Choose item picture</label>
                              <input type="file" name="pic" class="form-control-file" id="exampleInputNumber1" >
                            </div><!-- form-group closed -->
                           <input type="submit" name="" value="save" class="btn btn-outline-info">
                           <input type="hidden" name="item_id" value="<?php echo $item_type_id_my1;?>">
                    	</form>
                    </div> <!-- col-md-6 closed -->
            	</div> <!-- row closed -->
           </div> <!-- container-fluid clsoed -->
       </section>
   </div> <!-- content-wrapper closed -->
<?php
include_once 'footer.php';
?>