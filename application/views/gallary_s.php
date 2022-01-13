<?php
include_once 'header.php';
?>

<div class="parallax_2">
    <img src="<?php echo base_url('assets/media/mini-banner.jpg'); ?>">
    <b><p><span>Gallery</span> detail</p></b> 
  </div>

<div class="container"> 
  <div class="row">
  	<?php
      foreach ($specific as  $value)
       {
    ?>
    <div class="col-md-4">
      <div style="">
        <img src="<?php echo base_url('assets/media/gallary/'.$value->pic);?>" style="width: 300px;
          height: 300px;padding-top: 10px;padding-bottom: 10px; border:0px solid black; border-radius: 30px ">
      </div>
    </div>
    <div class="col-md-8">
           		<center style="padding-top: 50px;text-align: left;"><h1><?php echo $value->heading;?></h1>
  		<p><?php echo $value->description;?></p>
    </center>
  	       
     	
   </div>
  
   <?php
   }
   ?>
  </div>   
</div>










<?php
 include_once 'footer.php';
  ?>