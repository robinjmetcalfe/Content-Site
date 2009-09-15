<?php 
/* SVN FILE: $Id$ */
/* TransactionsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'Transactions');

class TestTransactions extends TransactionsController {
	var $autoRender = false;
}

class TransactionsControllerTest extends CakeTestCase {
	var $Transactions = null;

	function startTest() {
		$this->Transactions = new TestTransactions();
		$this->Transactions->constructClasses();
	}

	function testTransactionsControllerInstance() {
		$this->assertTrue(is_a($this->Transactions, 'TransactionsController'));
	}

	function endTest() {
		unset($this->Transactions);
	}
}
?>