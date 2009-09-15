<?php 
/* SVN FILE: $Id$ */
/* AdminsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'Admins');

class TestAdmins extends AdminsController {
	var $autoRender = false;
}

class AdminsControllerTest extends CakeTestCase {
	var $Admins = null;

	function startTest() {
		$this->Admins = new TestAdmins();
		$this->Admins->constructClasses();
	}

	function testAdminsControllerInstance() {
		$this->assertTrue(is_a($this->Admins, 'AdminsController'));
	}

	function endTest() {
		unset($this->Admins);
	}
}
?>