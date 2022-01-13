<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper">   <!-- Content Wrapper. Contains page content -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="offset-5 col-sm-6">
          <h1 class="m-0 text-dark"> Feedback </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content">
	  	<div class="container-fluid">
	  		<div class="row">
			   <div class="col-md-6">
		          <form method="post"action="<?php echo site_url('user/Feedback_c/update_do/');?>">
		             <div class="form-group">
		               <label for="exampleInputName1">Review</label>
		               <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter category name" value="<?php echo $shows[0]->review; ?>">
		               <small id="emailHelp" class="form-text text-muted"></small>
		             </div><!-- div class form-group closed -->
		             <input type="submit" class="btn btn-success btn-sm" value="Save">
		             <input type="hidden" name="feedbackid" value="<?php echo $shows[0]->feedback_id; ?>">
		           </form>
		         </div> <!-- col-md-6 closed -->

	  		</div>
	  	</div>
  </section>
</div>
<?php
include_once 'footer.php';
?>