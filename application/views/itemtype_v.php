<?php
include_once 'header.php';
?>
<style type="text/css">
  .abcdef {
    opacity: 0.9;
  }
    .abcdef:hover {
    opacity: 0.9 !important;
    cursor:not-allowed;

  }
</style>
  <div class="parallax_2">
    <img src="<?php echo base_url('assets/media/mini-banner.jpg'); ?>">
    <b><p><span>Galaxy</span>menu</p></b> 
  </div>
<!-- parallax_1 closed -->
  <div class="menu-main"> <!-- menu-main start -->
    <div class="container"><!-- container start -->
      <div class="row"><!-- row start -->
        <?php
         include 'itemtype_show.php';
        ?>
     </div><!-- row closed --> 
    </div><!-- container closed -->
  </div><!-- menu-main closed -->
  <div class="container"><!-- container start -->
  	<center>
  		<h1 style="text-transform: uppercase;"> <?php echo @$itemtypename[0]->name; ?> </h1>
  	</center>
    <div class="row"><!-- row start -->
      <?php
        $howmany = count($item);
       if($howmany == 0)
       { 
        echo '<div class="col-md-12" style="margin-bottom:100px; padding:20px 50px; color: white; background-color: red;"> Sorry! We dont have any item in this category. </div>';
       }
       else
       {
        foreach ($item as $value_item)
        {

          $item_id = $value_item->item_id;
      ?>
      <div class="col-md-4"> <!-- cl-md-4 start -->
       <div class="item-div"><!-- item-div start -->
          <div class="item-div-up"> <!-- item-div-up start -->
              <img src="<?php echo base_url('assets/media/items/'.$value_item->pic); ?>">
          </div><!-- item-div-up closed --> 
            <div class="item-div-bottom"><!-- item-div bottom start -->
              <div class="item-div-bottom-content"> <!-- item-div-bottom-content start -->
                <h3> <?php echo $value_item->name; ?> </h3>

                <h4 style="margin-left: 10px"><b style="color: red;">RS.</b> <?php echo $value_item->price; ?> </h4>
              </div>   <!-- item-div-bottom-content closed -->
              <?php

               if($this->session->userdata('validity')==NULL)
               {
                ?>
                <a class="abcdef" href="">order</a>
               <?php
               }
                else
                {
                ?>
                <a href="<?php echo site_url('Menu_c/add_order/'.$item_id);?>">order</a>
                <?php
                }
                ?>
           </div> <!-- item-div-bottom closed -->
          </div><!-- item-div closed -->
        </div><!-- col-md-4 closed -->
          <?php
            } //foreach loop { closed
           }// else closed
           ?>
    </div>  <!-- row closed-->
  </div><!-- container closed -->
<?php 
include 'footer.php';
?>