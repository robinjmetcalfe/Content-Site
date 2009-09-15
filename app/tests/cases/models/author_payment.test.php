<?php 
/* SVN FILE: $Id$ */
/* AuthorPayment Test cases generated on: 2009-09-15 12:27:50 : 1253014070*/
App::import('Model', 'AuthorPayment');

class AuthorPaymentTestCase extends CakeTestCase {
	var $AuthorPayment = null;
	var $fixtures = array('app.author_payment');

	function startTest() {
		$this->AuthorPayment =& ClassRegistry::init('AuthorPayment');
	}

	function testAuthorPaymentInstance() {
		$this->assertTrue(is_a($this->AuthorPayment, 'AuthorPayment'));
	}

	function testAuthorPaymentFind() {
		$this->AuthorPayment->recursive = -1;
		$results = $this->AuthorPayment->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AuthorPayment' => array(
			'id'  => 1,
			'author_id'  => 1,
			'article_id'  => 1,
			'total'  => 1,
			'created'  => '2009-09-15 12:27:50',
			'modified'  => '2009-09-15 12:27:50'
		));
		$this->assertEqual($results, $expected);
	}
}
?>