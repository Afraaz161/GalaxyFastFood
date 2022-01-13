<?php
 include_once 'header.php';
?>

  <div class="parallax_2">
    <img src="<?php echo base_url('assets/media/mini-banner.jpg'); ?>">
    <b><p><span>Galaxy</span> gallery</p></b> 
  </div>



	<div class="container-fluid">  <!-- div class container start !-->
    <div class="row">     <!-- div class row start !-->
       <?php
        foreach ($gallery_data as $value)
          {
            $id = $value->gallery_id;
          ?>
      <div class="col-md-4">  <!-- div class col-md-4 start !-->
       
        <a href="<?php echo site_url('Gallary_c/gallary/'.$id);?>">
        <div style=" padding-top: 10px; margin-left: 20px;">  <!-- div class col-md-6 start!-->
           <img src="<?php echo base_url('assets/media/gallary/'.$value->pic);?>" style="height: 200px;margin-left: 80px;width: 200px;">
        </div>   <!-- div class col-md-6 closed!-->
      </a>
        <h4 style="text-align:center; margin-right:20px;"><?php echo $value->heading;?></h4> 
        
      
      </div> <!-- div class col-md-4 closed!-->
       <?php
       }
       ?>
   </div> <!-- div class row end!-->
  </div><!-- div class container closed!-->
<?php
	include_once 'footer.php';
?>
