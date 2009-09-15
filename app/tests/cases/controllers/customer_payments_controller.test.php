<?php 
/* SVN FILE: $Id$ */
/* CustomerPaymentsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'CustomerPayments');

class TestCustomerPayments extends CustomerPaymentsController {
	var $autoRender = false;
}

class CustomerPaymentsControllerTest extends CakeTestCase {
	var $CustomerPayments = null;

	function startTest() {
		$this->CustomerPayments = new TestCustomerPayments();
		$this->CustomerPayments->constructClasses();
	}

	function testCustomerPaymentsControllerInstance() {
		$this->assertTrue(is_a($this->CustomerPayments, 'CustomerPaymentsController'));
	}

	function endTest() {
		unset($this->CustomerPayments);
	}
}
?>