<?php 
/* SVN FILE: $Id$ */
/* AuthorWithdrawal Test cases generated on: 2009-09-15 12:27:53 : 1253014073*/
App::import('Model', 'AuthorWithdrawal');

class AuthorWithdrawalTestCase extends CakeTestCase {
	var $AuthorWithdrawal = null;
	var $fixtures = array('app.author_withdrawal');

	function startTest() {
		$this->AuthorWithdrawal =& ClassRegistry::init('AuthorWithdrawal');
	}

	function testAuthorWithdrawalInstance() {
		$this->assertTrue(is_a($this->AuthorWithdrawal, 'AuthorWithdrawal'));
	}

	function testAuthorWithdrawalFind() {
		$this->AuthorWithdrawal->recursive = -1;
		$results = $this->AuthorWithdrawal->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AuthorWithdrawal' => array(
			'id'  => 1,
			'author_id'  => 1,
			'payout_date'  => '2009-09-15 12:27:53',
			'paid'  => 1,
			'transaction_details'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'transaction_status'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-09-15 12:27:53',
			'modified'  => '2009-09-15 12:27:53'
		));
		$this->assertEqual($results, $expected);
	}
}
?>