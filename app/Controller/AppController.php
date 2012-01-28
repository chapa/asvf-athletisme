<?php
	
	class AppController extends Controller
	{
		public $status = array(
			'Visiteur'       => array('id' => 0, 'layout' => 'default'),
			'Restreint'      => array('id' => 1, 'layout' => 'restreint'),
			'Adhérent'       => array('id' => 2, 'layout' => 'adherent'),
			'Rédacteur'      => array('id' => 3, 'layout' => 'redacteur'),
			'Administrateur' => array('id' => 4, 'layout' => 'admin')
		);
	}

