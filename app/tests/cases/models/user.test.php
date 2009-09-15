<?php 
/* SVN FILE: $Id$ */
/* User Test cases generated on: 2009-09-15 12:22:43 : 1253013763*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $User = null;
	var $fixtures = array('app.user');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function testUserInstance() {
		$this->assertTrue(is_a($this->User, 'User'));
	}

	function testUserFind() {
		$this->User->recursive = -1;
		$results = $this->User->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('User' => array(
			'id'  => 1,
			'username'  => 'Lorem ipsum dolor sit amet',
			'passwd'  => 'Lorem ipsum dolor sit amet',
			'email'  => 'Lorem ipsum dolor sit amet',
			'is_customer'  => 1,
			'is_author'  => 1,
			'created'  => '2009-09-15 12:22:43',
			'modified'  => '2009-09-15 12:22:43'
		));
		$this->assertEqual($results, $expected);
	}
}
?>