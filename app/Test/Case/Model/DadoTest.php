<?php
App::uses('Dado', 'Model');

/**
 * Dado Test Case
 *
 */
class DadoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.dado', 'app.evento', 'app.ies', 'app.subtipo', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dado = ClassRegistry::init('Dado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dado);

		parent::tearDown();
	}

}
