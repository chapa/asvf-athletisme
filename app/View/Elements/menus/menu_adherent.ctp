<?php $pages = $this->requestAction(array('controller' => 'pages', 'action' => 'menu')); ?>

<div class="navbar">
	<div class="navbar-inner">
		<div class="container-fluid">
		<?php echo $this->Html->link('ASVF Athlétisme', '/', array('class' => 'brand')) ?>
		<ul class="nav">
			<?php foreach($pages as $v) : $v = current($v); ?>
				<li<?php echo ($this->request->here == $this->Html->url($v['link'])) ? ' class="active"' : ''; ?>>
					<?php echo $this->Html->link($v['name'], $v['link']) ?>
				</li>
			<?php endforeach; ?>
		</ul>

		<ul class="nav pull-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle">Mon compte</a>
				<ul class="dropdown-menu" id="connexion">
					<li><a href="#">mon compte</a></li>
					<li><a href="#">mon compte</a></li>
					<li><a href="#">mon compte</a></li>
            	</ul>
            </li>
            <li><?php echo $this->Html->link('Se déconnecter', array('controller' => 'users', 'action' => 'logout')); ?></li>
		</ul>
		</div>
	</div>
</div>