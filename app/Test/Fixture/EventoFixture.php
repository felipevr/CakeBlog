<?php
/**
 * EventoFixture
 *
 */
class EventoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'ano' => array('type' => 'float', 'null' => false),
		'semestre' => array('type' => 'float', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'ano' => 1,
			'semestre' => 1
		),
	);
}
