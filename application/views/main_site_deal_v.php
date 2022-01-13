<?php
include_once 'header.php';
?>

<div class="container-fluid">
	<div class="row">
		<?php
		foreach ($description_deal as $value)
		{
			$id = $value->deal_id;
		?>
		<div class="col-md-6">
			<p> <?php echo $value->name;?></p>
			<p><?php echo $value->description;?></p>
			<a href="<?php echo site_url('Home_c/add_order/'.$id);?>" class="btn btn-success btn-md">Order now</a>
		</div>
		<div class="col-md-6"><img src="<?php echo base_url('assets/media/deal/'.$value->pic);?>"></div>
		<?php
	    }
	    ?>
	</div>
</div>

<?php
include_once 'footer.php';
?>