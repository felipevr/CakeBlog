<?php
App::uses('AppModel', 'Model');
/**
 * Campus Model
 *
 * @property Ies $Ies
 * @property Curso $Curso
 */
class Campus extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'campus';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Ies' => array(
			'className' => 'Ies',
			'foreignKey' => 'ies_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'campus_id',
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

}
