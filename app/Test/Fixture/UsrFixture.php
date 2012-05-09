<?php
/**
 * UsrFixture
 *
 */
class UsrFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'usr';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false),
		'password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'nome' => array('type' => 'string', 'null' => false),
		'email' => array('type' => 'string', 'null' => false),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => true),
		'last_access' => array('type' => 'datetime', 'null' => true),
		'expire_date' => array('type' => 'datetime', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => 'now()'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => 'now()'),
		'ies_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id'), 'usr_usrlogin_key' => array('unique' => true, 'column' => 'login')),
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
			'login' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'nome' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'last_access' => '2012-03-05 20:32:09',
			'expire_date' => '2012-03-05 20:32:09',
			'created' => '2012-03-05 20:32:09',
			'modified' => '2012-03-05 20:32:09',
			'ies_id' => 1
		),
	);
}
