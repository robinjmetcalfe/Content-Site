<?php 
/* SVN FILE: $Id$ */
/* Admin Test cases generated on: 2009-09-15 12:26:57 : 1253014017*/
App::import('Model', 'Admin');

class AdminTestCase extends CakeTestCase {
	var $Admin = null;
	var $fixtures = array('app.admin');

	function startTest() {
		$this->Admin =& ClassRegistry::init('Admin');
	}

	function testAdminInstance() {
		$this->assertTrue(is_a($this->Admin, 'Admin'));
	}

	function testAdminFind() {
		$this->Admin->recursive = -1;
		$results = $this->Admin->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Admin' => array(
			'id'  => 1,
			'username'  => 'Lorem ipsum do',
			'passwd'  => 'Lorem ipsum dolor sit amet',
			'admin_level'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>