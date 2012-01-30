<?php
	
	class PagesController extends AppController
	{
		public $uses = array('Content');
		public function beforeFilter() { parent::beforeFilter(); $this->Auth->allow('*'); }
		public function menu() { return $this->Content->getPage(); }

		public function show($id = NULL, $slug = NULL)
		{
			$page = $this->Content->getPage($id);

			if(empty($page))
				throw new NotFoundException('La page n\'existe pas');
			
			if($slug != $page['Content']['slug'])
				$this->redirect($page['Content']['link'], 301);
			
			$d['page'] = current($page);
			$this->set($d);
		}
	}

