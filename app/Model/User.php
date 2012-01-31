<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 * @property Content $Content
 */
class User extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pseudo' => array(
			'alphanumeric' => array(
				'rule' => array('custom', '#[a-z0-9\-\_]{3,}$#i'),
				'message' => 'Votre pseudo n\'est pas valide',
				'allowEmpty' => false,
				'required' => true,
				'on' => 'create',
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Ce pseudo est déjà utilisé',
			),
		),
		'pass' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vous devez entrer un mot de passe',
				'allowEmpty' => false, 
				'on' => 'create',
			),
		),
		'mail' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Ce n\'est pas une adresse mail valide',
				'allowEmpty' => false,
				'required' => true,
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Cet email est déjà utilisé',
			),
		),
		'displaymail' => array(
			'inlist' => array(
				'rule' => array('inlist', array('pri', 'pro', 'pub')),
				'message' => 'La privacité n\'est pas bonne',
				'allowEmpty' => false,
				'required' => true,
			),
		),
		'name' => array(
			'alphanumeric' => array(
				'rule' => array('custom', '#^[a-z0-9\-]+$#i'),
				'message' => 'Votre nom n\'est pas valide',
				'allowEmpty' => true,
				'required' => false,
			),
		),
		'firstname' => array(
			'alphanumeric' => array(
				'rule' => array('custom', '#^[a-z0-9\-]+$#i'),
				'message' => 'Votre nom n\'est pas valide',
				'allowEmpty' => true,
				'required' => false,
			),
		),
		'birth' => array(
			'date' => array(
				'rule' => array('date', 'dmy'),
				'message' => 'La date est incorrecte',
				'allowEmpty' => true,
				'required' => false,
			),
		),
		'status' => array(
			'inlist' => array(
				'rule' => array('inlist', array('Restreint', 'Adhérent', 'Rédacteur', 'Administrateur')),
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Content' => array(
			'className' => 'Content',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function beforeSave()
	{
		if (!empty($this->data['User']['name']))
			$this->data['User']['name'] = strtoupper($this->data['User']['name']);
		if (!empty($this->data['User']['firstname']))
			$this->data['User']['firstname'] = ucwords($this->data['User']['firstname']);
		if (!empty($this->data['User']['pass']))
		  	$this->data['User']['pass'] = AuthComponent::password($this->data['User']['pass']);
		return true;
	}
	
	public function afterFind (array $result, $primaire)
	{
		foreach ($result as $k => $v)
		{
			unset($result[$k]['User']['pass']);
			if (isset($v['User']['birth']))
			{
				$date = explode('-', $v['User']['birth']);
				$result[$k]['User']['birth'] = $date[2].'/'.$date[1].'/'.$date[0];
			}
		}

		return $result;
	}

}
