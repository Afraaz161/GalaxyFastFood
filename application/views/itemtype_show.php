<?php
foreach ($itemtype as $value)
{
?>
<div class="col-md-4 menu-main-div" style="margin-bottom: 10px;">
  <div class="menu-main-item" style="overflow: hidden;">
    <a href="<?php echo site_url('Menu_c/itemtype/'.$value->item_type_id); ?> ">
      <img src="<?php echo base_url('assets/media/icons/'.$value->pic); ?>">
      <p> <?php echo $value->name; ?> </p>
    </a>
  </div>  <!-- menu-main-div -->
</div>  <!-- col-md-3 -->
<?php
}
?>