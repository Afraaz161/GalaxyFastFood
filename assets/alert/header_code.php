<?php if($_SESSION['alert_msg']): ?>
	<div id="alert-area" class="alert-area"></div>
	<?php foreach($_SESSION['alert_msg'] as $alert_msg ): ?>
		<script type="text/javascript">alert_msg("<?php echo $alert_msg['msg']; ?>","<?php echo $alert_msg['notify']; ?>")</script>
	<?php endforeach; ?>
	<?php unset($_SESSION['alert_msg']); ?>
<?php endif; ?>

<div id="alert-area" class="alert-area"></div>