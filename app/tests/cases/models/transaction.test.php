<?php 
/* SVN FILE: $Id$ */
/* Transaction Test cases generated on: 2009-09-15 12:28:30 : 1253014110*/
App::import('Model', 'Transaction');

class TransactionTestCase extends CakeTestCase {
	var $Transaction = null;
	var $fixtures = array('app.transaction');

	function startTest() {
		$this->Transaction =& ClassRegistry::init('Transaction');
	}

	function testTransactionInstance() {
		$this->assertTrue(is_a($this->Transaction, 'Transaction'));
	}

	function testTransactionFind() {
		$this->Transaction->recursive = -1;
		$results = $this->Transaction->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Transaction' => array(
			'id'  => 1,
			'payment_method'  => 'Lorem ipsum do',
			'amount'  => 'Lorem ipsum do',
			'details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'user_id'  => 1,
			'direction'  => 1,
			'created'  => '2009-09-15 12:28:30',
			'modified'  => '2009-09-15 12:28:30'
		));
		$this->assertEqual($results, $expected);
	}
}
?>