<div class="hero-unit">
	<h1>Controleur innexistante</h1>
	<p>Le controleur <em><?php echo $class; ?></em> est introuvable</p>
</div>

<div class="page-header">
	<h1>Pour créer ce controleur <small>dans le fichier <em>app/Controller/<?php echo $class; ?>.php</em></small></h1>
</div>

<div class="row">
	<div class="span16">
<pre class="prettyprint">
&lt;?php

	class <?php echo $class; ?> extends AppController
	{

	}

?&gt;
</pre>
	<?php echo $this->element('exception_stack_trace'); ?>
	</div>
</div>

