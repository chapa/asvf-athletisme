<?php
	
	class PagesController extends AppController
	{
		public $uses = array('Content');

		public function menu()
		{
			return $this->Content->find('all', array(
				'fields' => array('Content.id', 'Content.slug', 'Content.name'),
				'conditions' => array('ContentType.name' => 'Page', 'Content.published <= NOW()')
			));
		}

		public function show($id = NULL, $slug = NULL)
		{
			$page = $this->Content->find('first', array(
				'fields' => array(
					'Content.id', 'Content.name', 'Content.slug', 'Content.content', 'Content.published',
					'Member.pseudo', 'Member.name', 'Member.firstname',
					'ContentType.name',
					'ContentCategory.name'),
				'conditions' => array('Content.id' => $id, 'ContentType.name' => 'Page', 'Content.published <= NOW()')
			));

			if(empty($page))
				throw new NotFoundException('La page n\'existe pas');
			
			if($slug != $page['Content']['slug'])
				$this->redirect($page['Content']['link'], 301);
			
			$d['page'] = current($page);
			$this->set($d);
		}
	}

