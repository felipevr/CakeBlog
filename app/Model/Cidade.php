<?php
App::uses('AppModel', 'Model');
/**
 * Cidade Model
 *
 * @property Estado $Estado
 */
class Cidade extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'cidade_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
