<?php
	
	class AppController extends Controller
	{
		public $components = array('Auth', 'Session');
		public $helpers = array('Html', 'Form', 'Session');

		public $status = array(
			'Visiteur'       => array('id' => 0, 'layout' => 'default'),
			'Restreint'      => array('id' => 1, 'layout' => 'restreint'),
			'Adhérent'       => array('id' => 2, 'layout' => 'adherent'),
			'Rédacteur'      => array('id' => 3, 'layout' => 'redacteur'),
			'Administrateur' => array('id' => 4, 'layout' => 'admin')
		);

		public function beforeFilter()
		{
			$this->Auth->loginRedirect	= array('controller' => 'pages', 'action' => 'show');
			$this->Auth->fields			= array('username' => 'pseudo', 'password' => 'pass');
			$this->Auth->userModel		= 'User';
			$this->Auth->authError		= 'Vous n\'avez pas le droit d\'accéder à cette page';
			$this->Auth->loginError		= 'Votre pseudo ou votre mot de passe est incorrect';
			$this->Auth->flashElement	= 'auth_error';
		}
	}

