<?php
App::uses('Ie', 'Model');

/**
 * Ie Test Case
 *
 */
class IeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ie', 'app.estado');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ie = ClassRegistry::init('Ie');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ie);

		parent::tearDown();
	}

}
