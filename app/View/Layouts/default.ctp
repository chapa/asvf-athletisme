<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title> <?php echo $title_for_layout; ?> </title>
		<?php echo $this->Html->css('bootstrap'); ?>
	</head>
	<body>
		
		<?php echo $this->element('menus/menu_default'); ?>
		<div class="container">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<?php echo $this->element('sql_dump'); ?>

	</body>
</html>