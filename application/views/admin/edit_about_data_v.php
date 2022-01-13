<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">About_edit </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content"><!-- section class content start -->
  	<div class="container-fluid">
  	  <div class="rows">
  	  	<div class="col-md-6">
  	  		 <form method="post"action="<?php echo site_url();?>/admin/About_c/about_edit_do">
             <div class="form-group">
               <label for="exampleInputName1">heading</label>
               <input type="text" name="heading" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" value="<?php echo $edit_data[0]->heading;?>">
               <small id="emailHelp" class="form-text text-muted"></small>
             </div><!-- div class form-group closed!-->
             <div class="form-group">
               <label for="exampleInputName1">Description</label>
               <input type="textarea" name="description" class="form-control" id="exampleInputName1" aria-describedby="emailHelp"  rows="6" value="<?php echo $edit_data[0]->description;?>">

               <small id="emailHelp" class="form-text text-muted"></small>
             </div><!-- div class form-group closed!-->
              <input type="submit" class="btn btn-success btn-sm" value="Save">
              <input type="hidden" name="about_id" value="<?php echo $edit_data[0]->about_id; ?>">  
           </form> 
  	  	</div>
  	  </div>
  	</div>
  </section><!-- section class content  closed -->
</div><!-- content-wrapper closed -->
<?php
include_once 'footer.php';
?>