<?php 
/* SVN FILE: $Id$ */
/* AllController Test cases generated on: 2009-09-15 12:39:37 : 1253014777*/
App::import('Controller', 'All');

class TestAll extends AllController {
	var $autoRender = false;
}

class AllControllerTest extends CakeTestCase {
	var $All = null;

	function startTest() {
		$this->All = new TestAll();
		$this->All->constructClasses();
	}

	function testAllControllerInstance() {
		$this->assertTrue(is_a($this->All, 'AllController'));
	}

	function endTest() {
		unset($this->All);
	}
}
?>