<div class="hero-unit">
	<h1>Vue innexistante</h1>
	<p>La vue pour l'action <em><?php echo $this->request->action; ?></em> du controleur <em><?php echo Inflector::camelize($this->request->controller); ?>Controller</em> n'existe pas</p>
</div>

<div class="page-header">
	<h1>Pour créer cette vue <small>dans le fichier <em>app/View/<?php echo Inflector::camelize($this->request->controller) . '/' . $this->request->action; ?>.php</em></small></h1>
</div>

<div class="row">
	<div class="span16">
		<p>Créez juste le fichier, ensuite mettez ce que vous voulez à l'intérieur</p>
		<?php echo $this->element('exception_stack_trace'); ?>
	</div>
</div>

