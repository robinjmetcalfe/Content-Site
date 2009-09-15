<?php 
/* SVN FILE: $Id$ */
/* ControllersController Test cases generated on: 2009-09-15 12:40:17 : 1253014817*/
App::import('Controller', 'Controllers');

class TestControllers extends ControllersController {
	var $autoRender = false;
}

class ControllersControllerTest extends CakeTestCase {
	var $Controllers = null;

	function startTest() {
		$this->Controllers = new TestControllers();
		$this->Controllers->constructClasses();
	}

	function testControllersControllerInstance() {
		$this->assertTrue(is_a($this->Controllers, 'ControllersController'));
	}

	function endTest() {
		unset($this->Controllers);
	}
}
?>