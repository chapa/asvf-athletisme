<?php $pages = $this->requestAction(array('controller' => 'pages', 'action' => 'menu')); ?>

<div class="topbar">
	<div class="fill">
		<div class="container">
		<?php echo $this->Html->link('ASVF Athlétisme', '/', array('class' => 'brand')) ?>
		<ul class="nav">
			<?php foreach($pages as $v) : $v = current($v); ?>
				<li><?php echo $this->Html->link($v['name'], $v['link']) ?></li>
			<?php endforeach; ?>
		</ul>
		</div>
	</div>
</div>