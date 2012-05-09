<?php
/**
 * CampusFixture
 *
 */
class CampusFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'campus';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'ies_id' => array('type' => 'integer', 'null' => false),
		'nome' => array('type' => 'string', 'null' => false, 'length' => 128),
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
			'ies_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet'
		),
	);
}
