<?php
/**
 * DadoFixture
 *
 */
class DadoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'evento_id' => array('type' => 'integer', 'null' => false),
		'ies_id' => array('type' => 'integer', 'null' => false),
		'subtipo_id' => array('type' => 'integer', 'null' => false),
		'valor' => array('type' => 'integer', 'null' => false, 'default' => '0'),
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
			'evento_id' => 1,
			'ies_id' => 1,
			'subtipo_id' => 1,
			'valor' => 1
		),
	);
}
