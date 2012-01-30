<?php $pages = $this->requestAction(array('controller' => 'pages', 'action' => 'menu')); ?>

<div class="topbar">
	<div class="fill">
		<div class="container">
		<?php echo $this->Html->link('ASVF Athlétisme', '/', array('class' => 'brand')) ?>
		<ul class="nav">
			<?php foreach($pages as $v) : $v = current($v); ?>
				<li<?php echo ($this->request->here == $this->Html->url($v['link'])) ? ' class="active"' : ''; ?>>
					<?php echo $this->Html->link($v['name'], $v['link']) ?>
				</li>
			<?php endforeach; ?>
		</ul>

		<ul class="nav secondary-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle">Se connecter</a>
				<ul class="dropdown-menu">
					<li><a href="#">Pseudo</a></li>
					<li><a href="#">Mot de passe</a></li>
				</ul>
			</li>
		</ul>
		</div>
	</div>
</div>