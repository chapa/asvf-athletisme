<?php $this->title = 'S\'inscrire'; ?>
<div class="page-header">
	<h1>S'inscrire</h1>
</div>

<div class="alert-message">
	<p>Les champs marqués d'un <strong class="warning">*</strong> sont obligatoire</p>
</div>


<div class="row">
	<div class="span16">
		<?php echo $this->Form->create('User'); ?>
		<div class="clearfix">
		<?php echo $this->Form->input('pseudo'); ?>
		</div>
		<div class="clearfix">
		<?php echo $this->Form->input('pass', array('label' => 'Mot de passe', 'type' => 'password')); ?>
		</div>
		<div class="clearfix">
		<?php echo $this->Form->input('mail'); ?>
		</div>
		<div class="clearfix">
		<?php echo $this->Form->input('displaymail', array(
								'label' => 'Visibilité de l\'adresse',
								'class' => 'span4',
								'options' => array(	'pri' => 'Privée (Vous uniquement)',
													'pro' => 'Protégée (membres uniquement)',
													'pub' => 'Publique (Visibilité totale)'))); ?>
		</div>
		<div class="clearfix">
		<?php echo $this->Form->input('name', array('label' => 'Nom')); ?>
		</div>
		<div class="clearfix">
		<?php echo $this->Form->input('firstname', array('label' => 'Prénom')); ?>
		</div>
		<div class="clearfix">
		<?php echo $this->Form->input('birth', array('label' => 'Date de naissance', 'type' => 'text', 'class' => 'datepicker', 'readonly' => 'readonly')); ?>
		</div>
		<div class="actions">
		<?php echo $this->Form->submit('S\'inscripre', array('class' => 'btn primary')); ?>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>