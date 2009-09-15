<?php 
/* SVN FILE: $Id$ */
/* AuthorWithdrawalsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'AuthorWithdrawals');

class TestAuthorWithdrawals extends AuthorWithdrawalsController {
	var $autoRender = false;
}

class AuthorWithdrawalsControllerTest extends CakeTestCase {
	var $AuthorWithdrawals = null;

	function startTest() {
		$this->AuthorWithdrawals = new TestAuthorWithdrawals();
		$this->AuthorWithdrawals->constructClasses();
	}

	function testAuthorWithdrawalsControllerInstance() {
		$this->assertTrue(is_a($this->AuthorWithdrawals, 'AuthorWithdrawalsController'));
	}

	function endTest() {
		unset($this->AuthorWithdrawals);
	}
}
?>