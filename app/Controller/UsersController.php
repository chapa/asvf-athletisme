<?php 

	class UsersController extends AppController
	{
		public function login () { }

		public function logout ()
		{
			$this->Session->setFlash('A bientot '.$this->Auth->user('pseudo'));
			$this->redirect($this->Auth->logout());
		}
	}
