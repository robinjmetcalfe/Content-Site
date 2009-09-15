<?php 
/* SVN FILE: $Id$ */
/* CustomerPayment Test cases generated on: 2009-09-15 12:28:21 : 1253014101*/
App::import('Model', 'CustomerPayment');

class CustomerPaymentTestCase extends CakeTestCase {
	var $CustomerPayment = null;
	var $fixtures = array('app.customer_payment');

	function startTest() {
		$this->CustomerPayment =& ClassRegistry::init('CustomerPayment');
	}

	function testCustomerPaymentInstance() {
		$this->assertTrue(is_a($this->CustomerPayment, 'CustomerPayment'));
	}

	function testCustomerPaymentFind() {
		$this->CustomerPayment->recursive = -1;
		$results = $this->CustomerPayment->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('CustomerPayment' => array(
			'id'  => 1,
			'customer_id'  => 1,
			'transaction_id'  => 1,
			'cash'  => 1,
			'credits'  => 1,
			'conversion_rate'  => 1,
			'customer_discount'  => 1,
			'created'  => '2009-09-15 12:28:21',
			'modified'  => '2009-09-15 12:28:21'
		));
		$this->assertEqual($results, $expected);
	}
}
?>