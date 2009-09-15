<?php 
/* SVN FILE: $Id$ */
/* AuthorsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'Authors');

class TestAuthors extends AuthorsController {
	var $autoRender = false;
}

class AuthorsControllerTest extends CakeTestCase {
	var $Authors = null;

	function startTest() {
		$this->Authors = new TestAuthors();
		$this->Authors->constructClasses();
	}

	function testAuthorsControllerInstance() {
		$this->assertTrue(is_a($this->Authors, 'AuthorsController'));
	}

	function endTest() {
		unset($this->Authors);
	}
}
?>