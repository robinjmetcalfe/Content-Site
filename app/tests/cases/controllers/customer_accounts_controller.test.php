<?php 
/* SVN FILE: $Id$ */
/* CustomerAccountsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'CustomerAccounts');

class TestCustomerAccounts extends CustomerAccountsController {
	var $autoRender = false;
}

class CustomerAccountsControllerTest extends CakeTestCase {
	var $CustomerAccounts = null;

	function startTest() {
		$this->CustomerAccounts = new TestCustomerAccounts();
		$this->CustomerAccounts->constructClasses();
	}

	function testCustomerAccountsControllerInstance() {
		$this->assertTrue(is_a($this->CustomerAccounts, 'CustomerAccountsController'));
	}

	function endTest() {
		unset($this->CustomerAccounts);
	}
}
?>