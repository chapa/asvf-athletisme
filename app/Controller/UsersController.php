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
			if ($this->Auth->login())
			{
				if ($this->Auth->user('status') == 'Restreint')
					$this->Session->setFlash('Vous ne pouvez actuellement pas poster de commentaire, consultez vos email', 'message', array('class' => 'info'));
				else
					$this->Session->setFlash('Bonjour '.$this->Auth->user('pseudo'), 'message', array('class' => 'success'));
				$this->redirect($this->Auth->loginRedirect);
			}
			elseif ($this->request->is('post'))
			{
				$this->Session->setFlash('Le mot de passe ou le pseudo semble incorrect', 'message');
				$this->request->data['User']['pass'] = null;
			}
			
			if ($this->Auth->user('id'))
				$this->redirect(array('controller' => 'pages', 'action' => 'index'));
		}

		public function logout ()
		{
			$this->Session->setFlash('A bientot '.$this->Auth->user('pseudo'), 'message', array('class' => 'success'));
			$this->redirect($this->Auth->logout());
		}

		public function signup ()
		{
			if ($this->request->is('post'))
			{
				$d = $this->request->data;
				$this->User->set($d);
				if ($this->User->validates())
				{
					$this->User->save($d, true, array('pseudo', 'pass', 'mail', 'displaymail', 'name', 'firstname', 'birth'));
					App::uses('CakeEmail', 'Network/Email');
					$link = array('controller' => 'users', 'action' => 'activate', $this->User->id.'-'.$d['User']['pass']);
					$mail = new CakeEmail();
					$mail	->from('noreply@localhost')
							->to($d['User']['mail'])
							->subject('Test')
							->emailFormat('html')
							->tmplate('signup')
							->viewVars(array('pseudo' => $d['User']['pseudo'], 'link' => $link))
							->send();
					$this->Session->setFlash('Votre compte a bien été créé, un mail de confirmation a été envoyé à <strong>'.$d['User']['mail'].'</strong>', 'message', array('class' => 'success'));
					$this->redirect('/');
				}
				else
				{
					$this->Session->setFlash('Votre inscription comporte des erreurs', 'message');
					$this->request->data['User']['pass'] = null;
				}
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
