<?php $this->title = ($this->Session->read('Auth.User.pseudo') == $this->request->data['User']['pseudo']) ?
						'Modifier mon profil' : 'Modifier le profil de '.$this->request->data['User']['pseudo']; ?>
<div class="page-header">
	<h1><?php echo $this->request->data['User']['pseudo']; ?></h1>
</div>

<div class="row">
	<div class="span16">
		<?php echo $this->Form->create('User'); ?>
		<?php echo $this->Form->input('pseudo', array('type' => 'hidden')); ?>
		<?php echo $this->Form->input('id', array('type' => 'hidden')); ?>
		<div class="clearfix">
		<?php echo $this->Form->input('mail'); ?>
		</div>
		<div class="clearfix">
		<?php echo $this->Form->input(	'displaymail', array(
										'label' => 'Visibilité de l\'adresse',
										'class' => 'span4',
										'options' => $options)); ?>
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
		<?php echo $this->Form->submit('Enregistrer', array('class' => 'btn primary')); ?>
		</div>
		<?php echo $this->Form->end(); ?>
	</div>
</div>