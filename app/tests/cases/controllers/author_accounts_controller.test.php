<?php 
/* SVN FILE: $Id$ */
/* AuthorAccountsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'AuthorAccounts');

class TestAuthorAccounts extends AuthorAccountsController {
	var $autoRender = false;
}

class AuthorAccountsControllerTest extends CakeTestCase {
	var $AuthorAccounts = null;

	function startTest() {
		$this->AuthorAccounts = new TestAuthorAccounts();
		$this->AuthorAccounts->constructClasses();
	}

	function testAuthorAccountsControllerInstance() {
		$this->assertTrue(is_a($this->AuthorAccounts, 'AuthorAccountsController'));
	}

	function endTest() {
		unset($this->AuthorAccounts);
	}
}
?>