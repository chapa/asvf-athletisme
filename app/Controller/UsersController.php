<?php 

	class UsersController extends AppController
	{
		public function beforeFilter()
		{
			parent::beforeFilter();
			$this->Auth->allow('signup', 'activate');
		}
		public function login ()
		{
			if ($this->request->is('post'))
				debug($this->request->data);
			if ($this->Auth->user('id'))
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
		}

		public function logout ()
		{
			$this->Session->setFlash('A bientot '.$this->Auth->user('pseudo'));
			$this->redirect($this->Auth->logout());
		}

		public function signup ()
		{
			if ($this->request->is('post'))
			{
				$d = $this->request->data;
				// if (!empty($d['User']['pass']))
				//  	$d['User']['pass'] = $this->Auth->password($d['User']['pass']);
				$this->User->set($d);
				if ($this->User->validates())
				{
					// debug($d);
					// $this->User->save($d, true, array('pseudo', 'pass', 'mail', 'displaymail', 'name', 'firstname', 'birth'));
					// App::uses('CakeEmail', 'Network/Email');
					// $link = array('controller' => 'users', 'action' => 'activate', $this->User->id.'-'.$d['User']['pass']);
					// $mail = new CakeEmail();
					// $mail	->from('noreply@localhost')
					// 		->to($d['User']['mail'])
					// 		->subject('Test')
					// 		->emailFormat('html')
					// 		->tmplate('signup')
					// 		->viewVars(array('pseudo' => $d['User']['pseudo'], 'link' => $link))
					// 		->send();
					$this->Session->setFlash('Votre compte a bien été créé, un mail de confirmation a été envoyé à <strong>'.$d['User']['mail'].'</strong>', 'message', array('class' => 'success'));
					// $this->redirect('/');
				}
				else
					$this->Session->setFlash('Votre inscription comporte des erreurs', 'message');
			}
		}

		public function activate($token)
		{
			$token = explode('-', $token);
			$this->User->recursive = -1;
			$user = $this->User->find('first', array('conditions' => array('id' => $token[0], 'pass' => $token[1], 'status' => 'Restreint')));
			if (!empty($user))
			{
				$this->User->id = $user['User']['id'];
				$this->User->saveField('status', 'Adhérent');
				$this->Session->setFlash('Votre compte a bien été activé', 'message', array('class' => 'success'));
			}
			else
				$this->Session->setFlash('Ce lien d\'activation n\'est pas valide', 'message');
			$this->redirect('/');
			debug($user);
			die();
		}
	}
