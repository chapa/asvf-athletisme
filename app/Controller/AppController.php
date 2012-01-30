<?php
	
	class AppController extends Controller
	{
		public $components = array('Auth', 'Session', 'Cookie');
		public $helpers = array('Html', 'Form', 'Session');

		public $status = array(
			'Visiteur'       => array('id' => 0, 'layout' => 'default'),
			'Restreint'      => array('id' => 1, 'layout' => 'restreint'),
			'Adhérent'       => array('id' => 2, 'layout' => 'adherent'),
			'Rédacteur'      => array('id' => 3, 'layout' => 'redacteur'),
			'Administrateur' => array('id' => 4, 'layout' => 'admin')
		);

		public function beforeFilter ()
		{
			$this->Auth->fields			= array('username' => 'pseudo', 'password' => 'pass');
			$this->Auth->flash			= array('element' => 'AuthError', 'key' => 'auth', 'params' => array());
			$this->Auth->loginRedirect	= array('controller' => 'pages', 'action' => 'index');
			$this->Auth->logoutRedirect	= array('controller' => 'pages', 'action' => 'index');
			$this->Auth->authError		= 'Vous n\'avez pas le droit d\'accéder à cette page';
			// debug($this->Auth);
		}
	}

