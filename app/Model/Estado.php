<?php
App::uses('AppModel', 'Model');
/**
 * Estado Model
 *
 */
class Estado extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'estado_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';
}
