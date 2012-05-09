<?php
App::uses('Usr', 'Model');

/**
 * Usr Test Case
 *
 */
class UsrTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.usr', 'app.ies');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Usr = ClassRegistry::init('Usr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Usr);

		parent::tearDown();
	}

}
