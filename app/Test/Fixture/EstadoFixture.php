<?php
/**
 * EstadoFixture
 *
 */
class EstadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'estado_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'descricao' => array('type' => 'string', 'null' => false, 'length' => 64),
		'sigla' => array('type' => 'string', 'null' => false, 'length' => 2),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'estado_id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'estado_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'sigla' => ''
		),
	);
}
