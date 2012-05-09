<?php
App::uses('Cidade', 'Model');

/**
 * Cidade Test Case
 *
 */
class CidadeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.cidade', 'app.estado');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cidade = ClassRegistry::init('Cidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cidade);

		parent::tearDown();
	}

}
