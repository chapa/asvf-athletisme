<div class="page-header">
	<h1>Connexion</h1>
</div>

<div class="row">
	<div class="span16">
	<?php echo $this->Form->create('User'); ?>
	<?php echo $this->Form->input('pseudo', array('label' => 'Pseudo')); ?>
	<?php echo $this->Form->input('pass', array('label' => 'Mot de passe')); ?>
	<?php echo $this->Form->submit('Se connecter'); ?>
	<?php echo $this->Form->end(); ?>
	</div>
</div>