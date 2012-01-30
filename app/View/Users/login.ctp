<?php $this->title = 'Se connecter'; ?>
<div class="page-header">
	<h1>Connexion</h1>
</div>

<div class="row">
	<div class="span16">
	<?php echo $this->Form->create('User'); ?>
	<div class="clearfix">
	<?php echo $this->Form->input('pseudo', array('label' => 'Pseudo')); ?>
	</div>
	<div class="clearfix">
	<?php echo $this->Form->input('pass', array('label' => 'Mot de passe', 'type' => 'password')); ?>
	</div>
	<div class="actions">
	<?php echo $this->Form->submit('Se connecter', array('class' => 'btn primary')); ?>
	<?php echo $this->Html->link('Pas encore inscrit ?', array('action' => 'signup'), array('class' => 'btn')); ?>
	</div>
	<?php echo $this->Form->end(); ?>
	</div>
</div>