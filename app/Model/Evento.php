<?php
App::uses('AppModel', 'Model');
/**
 * Evento Model
 *
 */
class Evento extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'ano';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ano' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'semestre' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
