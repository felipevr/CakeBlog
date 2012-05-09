<?php
App::uses('Evento', 'Model');

/**
 * Evento Test Case
 *
 */
class EventoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.evento');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Evento = ClassRegistry::init('Evento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Evento);

		parent::tearDown();
	}

}
