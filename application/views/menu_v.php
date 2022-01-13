<?php
include_once 'header.php';
?>
 <!-- <div class="parallax_1">
    <p style="text-align:center;font-size: 50px;padding-top: 50px;color:white; ">
     MENU  
    </p> 
  </div> -->
  <div class="parallax_2">
    <img src="<?php echo base_url('assets/media/mini-banner.jpg'); ?>">
    <b><p><span>Galaxy</span> &nbsp; menu</p></b> 
  </div>
  
  <div class="menu-main"> <!-- menu-main -->
    <div class="container"> <!-- container -->
      <div class="row"> <!-- row -->
       <?php
        include 'itemtype_show.php';
       ?>
     </div><!-- rpw closed --> 
    </div><!-- container closed -->
  </div><!-- menu-main closed -->

<?php 
include 'footer.php';
?>