
<?php 
include_once 'header.php';
?>
	<div class="parallax_2">
		<img src="<?php echo base_url('assets/media/mini-banner.jpg'); ?>">
		<b><p><span>Galaxy</span> about us</p></b> 
	</div>


	<div class="container-fluid" >
		<div class="row">
		    <?php
		     foreach ($about_data as $value)
		     {
		     	if($value->about_id%2 != 0)
		     	{
		    ?>
			    <div class="col-md-5">
			    	<div class="about_picture">
			  	      <img src="<?php echo base_url('assets/media/about/'.$value->pic);?>">
			  	    </div>
			    </div>
			    <div class ="col-md-7">
				  <div class="about_heading"><h2><b><?php echo $value->heading;?></b></h2></div>
				  <div class="about_description"><?php echo $value->description;?></div>
			    </div>
			    <?php
			}
			else
			{
			?>
			<div class ="col-md-7">
				  <div class="about_heading"><h2><b><?php echo $value->heading;?></b></h2></div>
				  <div class="about_description"><?php echo $value->description;?></div>
			    </div>
			<div class="col-md-5">
				<div class="about_picture">
			  	 <img src="<?php echo base_url('assets/media/about/'.$value->pic);?>">
			  	</div>
			    </div>

			<?php
		     }
		     }
		    ?>
		</div>
	</div>   
<?php
include_once 'footer.php';
 ?>





















