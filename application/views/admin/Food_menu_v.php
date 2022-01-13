<?php 
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper"> <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0 text-dark"> Foodies </h1>
       </div><!-- /.col-sm-6 closed -->
     </div><!-- /.row mb-2 closed -->
    </div><!-- /.container-fluid -->
  </div>   <!-- /.content-header -->
  <section class="content"> <!-- content -->
   <div class="container-fluid"><!-- container-fluid -->
     <div class="row"> <!-- row -->
        <?php
        foreach($show as $value)
        { 
        
         
        ?>
        <div class="col-lg-2 col-6">
          <a href="<?php echo site_url('admin/Food_menu_c/item/'.$value->item_type_id);?>">
           <div class="small-box bg-info"> <!-- small-bg-info -->
             <div class="inner"> <!-- inner -->
               <h2 style="text-align: center;">
                 <?php echo $value->name;?>

               </h2>
             </div> <!-- inner closed -->
            </div> <!-- small-bg-info closed -->
          </a>
        </div> <!-- col-lg-2 col-6 closed -->
        <?php
        }
        ?>
        <a class="Add_item btn btn-danger" href="<?php echo site_url('admin/Add_category'); ?> "> Add Category
        </a>
      </div> <!-- /.row -->
    </div> <!--container-fluid -->  
 </section>
</div> <!-- div class content-wrapper!-->
<?php
include_once 'footer.php';
?>