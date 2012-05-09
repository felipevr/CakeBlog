<?php
/**
 * CidadeFixture
 *
 */
class CidadeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'cidade_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'descricao' => array('type' => 'string', 'null' => false, 'length' => 64),
		'estado_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'cidade_id'), 'cidades_estado_id_key' => array('unique' => true, 'column' => array('estado_id', 'cidade_id'))),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'cidade_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'estado_id' => 1
		),
	);
}
