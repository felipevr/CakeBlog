<?php
App::uses('Subtipo', 'Model');

/**
 * Subtipo Test Case
 *
 */
class SubtipoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.subtipo', 'app.tipo');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Subtipo = ClassRegistry::init('Subtipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subtipo);

		parent::tearDown();
	}

}
