<?php 
/* SVN FILE: $Id$ */
/* AuthorPaymentsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'AuthorPayments');

class TestAuthorPayments extends AuthorPaymentsController {
	var $autoRender = false;
}

class AuthorPaymentsControllerTest extends CakeTestCase {
	var $AuthorPayments = null;

	function startTest() {
		$this->AuthorPayments = new TestAuthorPayments();
		$this->AuthorPayments->constructClasses();
	}

	function testAuthorPaymentsControllerInstance() {
		$this->assertTrue(is_a($this->AuthorPayments, 'AuthorPaymentsController'));
	}

	function endTest() {
		unset($this->AuthorPayments);
	}
}
?>