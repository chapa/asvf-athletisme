<?php $pages = $this->requestAction(array('controller' => 'pages', 'action' => 'menu')); ?>

<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inscription rapide</a>
				<ul class="dropdown-menu" id="connexion">
					<?php echo $this->Form->create('User', array('controller' => 'users', 'action' => 'signup')); ?>
					<div class="clearfix">
						<span>Pseudo</span>
						<?php echo $this->Form->text('pseudo', array('label' => false)); ?>
					</div>
					<div class="clearfix">
						<span>Mot de passe</span>
						<?php echo $this->Form->password('pass', array('label' => false)); ?>
					</div>
					<div class="clearfix">
						<span>Mail</span>
						<?php echo $this->Form->text('mail', array('label' => false)); ?>
					</div>
					<?php echo $this->Form->hidden('displaymail', array('value' => 'pri')); ?>
					<?php echo $this->Form->submit('S\'inscrire', array('class' => 'btn primary'));?>
					<?php echo $this->Form->end(); ?>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Se connecter</a>
				<ul class="dropdown-menu" id="connexion">
					<?php echo $this->Form->create('User', array('controller' => 'users', 'action' => 'login')); ?>
					<div class="clearfix">
						<span>Login</span>
						<?php echo $this->Form->text('pseudo', array('label' => false)); ?>
					</div>
					<div class="clearfix">
						<span>Mot de passe</span>
						<?php echo $this->Form->password('pass', array('label' => false)); ?>
					</div>
					<?php echo $this->Form->submit('Connexion', array('class' => 'btn primary'));?>
					<?php echo $this->Form->end(); ?>
				</ul>
			</li>
		</ul>
		</div>
	</div>
</div>