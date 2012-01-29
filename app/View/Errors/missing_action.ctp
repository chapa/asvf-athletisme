<div class="hero-unit">
	<h1>Action innexistante</h1>
	<p>L'action <em><?php echo $action; ?></em> n'est pas définie dans le controleur <em><?php echo $controller; ?></em></p>
</div>

<div class="page-header">
	<h1>Pour créer cette action <small>dans le fichier <em>app/Controller/<?php echo $controller; ?>.php</em></small></h1>
</div>

<div class="row">
	<div class="span16">
<pre class="prettyprint">
&lt;?php

	class <?php echo $controller;?> extends AppController
	{
		<strong>public function <?php echo $action;?>()
	      {

	      }</strong>
	}

?&gt;
</pre>
	<?php echo $this->element('exception_stack_trace'); ?>
	</div>
</div>

