<?php 
/* SVN FILE: $Id$ */
/* Customer Test cases generated on: 2009-09-15 12:28:22 : 1253014102*/
App::import('Model', 'Customer');

class CustomerTestCase extends CakeTestCase {
	var $Customer = null;
	var $fixtures = array('app.customer');

	function startTest() {
		$this->Customer =& ClassRegistry::init('Customer');
	}

	function testCustomerInstance() {
		$this->assertTrue(is_a($this->Customer, 'Customer'));
	}

	function testCustomerFind() {
		$this->Customer->recursive = -1;
		$results = $this->Customer->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Customer' => array(
			'id'  => 1,
			'user_id'  => 1,
			'real_name'  => 'Lorem ipsum dolor sit amet',
			'address_1'  => 'Lorem ipsum dolor sit amet',
			'address_2'  => 'Lorem ipsum dolor sit amet',
			'address_3'  => 'Lorem ipsum dolor sit amet',
			'state'  => 'Lorem ipsum dolor sit amet',
			'postcode'  => 'Lorem ipsum do',
			'telephone'  => 'Lorem ipsum dolor sit amet',
			'mobile'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-09-15 12:28:22',
			'modified'  => '2009-09-15 12:28:22'
		));
		$this->assertEqual($results, $expected);
	}
}
?>