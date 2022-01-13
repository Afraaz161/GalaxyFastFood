<?php
include_once 'header.php';
include_once 'menu.php';
?>
<div class="content-wrapper">     <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> Special Deals </h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>  <!--div class content-header closed!-->
  <section class="content">  
    <div class="container-fluid"> <!-- div  class container top start!-->
      <center>
        <div class="padding-top:19px;">
          <h1 style="padding: 20px;"> DEALS </h1>
        </div>
      </center><!-- center closed!-->
      <div class="row">  <!-- div row start--!---->
        <?php
           foreach ($deal as $value)
           {
            $id = $value->item_id;
          ?>
       <div class="col-md-4" style="border:0px solid black;">
          
            <img src="<?php echo base_url('assets/media/items/'.$value->itempic);?>" style="object-fit: contain;width:300px;"> 
            <div class="row"><!-- row class starts -->
              <div class="col-md-6"> <!-- col-md-6 start -->
                <h3><b><?php echo $value->name;?></b></h3>
                <p style="padding-top: 10px;"><b><?php echo $value->description;?> </b></p>
              </div><!-- col-md-6 closed -->
              <div>
                <p><b style="color: red;">Rs.</b><?php echo $value->price;?></p>
                <a  class="btn btn-success btn-md"href="<?php echo site_url('Menu_c/add_order/'.$id);?>">ORDER</a>
              </div>
            </div>
          
        </div>   <!-- div col-md-4 closed!-->
        <?php
          }
          ?>
      </div><!-- row closed top  -->
    </div><!-- container-fluid top closed -->
  </section><!-- section content closed -->
</div><!-- wrapper content closed -->
<?php
include_once 'footer.php';
?>



<!-- 
<center>
                      
                     
                    </center> -->





                  
                    <!-- <center>
                      
                    </center>
                  </div> -->

                 