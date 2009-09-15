<?php 
/* SVN FILE: $Id$ */
/* AuthorAccount Test cases generated on: 2009-09-15 12:27:48 : 1253014068*/
App::import('Model', 'AuthorAccount');

class AuthorAccountTestCase extends CakeTestCase {
	var $AuthorAccount = null;
	var $fixtures = array('app.author_account');

	function startTest() {
		$this->AuthorAccount =& ClassRegistry::init('AuthorAccount');
	}

	function testAuthorAccountInstance() {
		$this->assertTrue(is_a($this->AuthorAccount, 'AuthorAccount'));
	}

	function testAuthorAccountFind() {
		$this->AuthorAccount->recursive = -1;
		$results = $this->AuthorAccount->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('AuthorAccount' => array(
			'id'  => 1,
			'author_id'  => 1,
			'balance'  => 1,
			'created'  => '2009-09-15 12:27:48',
			'modified'  => '2009-09-15 12:27:48'
		));
		$this->assertEqual($results, $expected);
	}
}
?>