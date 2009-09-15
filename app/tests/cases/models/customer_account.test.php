<?php 
/* SVN FILE: $Id$ */
/* CustomerAccount Test cases generated on: 2009-09-15 12:28:20 : 1253014100*/
App::import('Model', 'CustomerAccount');

class CustomerAccountTestCase extends CakeTestCase {
	var $CustomerAccount = null;
	var $fixtures = array('app.customer_account');

	function startTest() {
		$this->CustomerAccount =& ClassRegistry::init('CustomerAccount');
	}

	function testCustomerAccountInstance() {
		$this->assertTrue(is_a($this->CustomerAccount, 'CustomerAccount'));
	}

	function testCustomerAccountFind() {
		$this->CustomerAccount->recursive = -1;
		$results = $this->CustomerAccount->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('CustomerAccount' => array(
			'id'  => 1,
			'customer_id'  => 1,
			'balance'  => 1,
			'pending'  => 1,
			'created'  => '2009-09-15 12:28:20',
			'modified'  => '2009-09-15 12:28:20'
		));
		$this->assertEqual($results, $expected);
	}
}
?>