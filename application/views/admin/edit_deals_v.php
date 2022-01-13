<?php
include_once 'header.php';
include_once'menu.php';
?>
<div class="content-wrapper"> <!-- Content wrapper-->
    <div class="content-header"><!-- content-header -->
     <div class="container-fluid"> <!-- container-fluid -->
        <div class="row mb-2"> <!-- row mb-2  -->
         <div class="col-sm-6"> <!-- col-sm-6 -->
           <h1 class="m-0 text-dark"> Edit_deals </h1>
          </div><!-- /.col-sm-6 closed -->
        </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>   <!-- /.content-header -->
    <section class="content"> <!-- section content start -->
    	<div class="container-fluid"><!-- container-fluid starts here -->
    		<div class="row"><!-- row class starts here  -->
    			<div class="col-md-12"> <!-- class col-md-12 starts here -->
    				<form method="post"action="<?php echo site_url();?>/admin/Deals_c/deals_edit_do">
                       <div class="form-group">
                         <label for="exampleInputName1">Name</label>
                         <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" value="<?php echo $deal_show[0]->name;?>">
                         <small id="emailHelp" class="form-text text-muted"></small>
                       </div><!-- div class form-group closed!-->
                       <div class="form-group">
                         <label for="exampleInputName1">Description</label>
                         <input type="text" name="description" class="form-control" id="exampleInputName1" aria-describedby="emailHelp"  value="<?php echo @$deal_show[0]->description;?>">
                         <small id="emailHelp" class="form-text text-muted"></small>
                        </div><!-- div class form-group closed!-->
                        <input type="submit" class="btn btn-success btn-sm" value="Save">
                        <input type="hidden" name="deal_id" value="<?php echo @$deal_show[0]->deal_id; ?>">  
                    </form> 
    		    </div><!-- col-md-12 closed -->
    		</div><!-- class row closed -->
    	</div><!-- container-fluid closed  -->
    </section><!-- section class content closed -->
</div><!-- class content-wrapper closed -->
<?php
include_once 'footer.php';
?>