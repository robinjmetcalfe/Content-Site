<?php 
/* SVN FILE: $Id$ */
/* DiscountLevel Test cases generated on: 2009-09-15 12:28:23 : 1253014103*/
App::import('Model', 'DiscountLevel');

class DiscountLevelTestCase extends CakeTestCase {
	var $DiscountLevel = null;
	var $fixtures = array('app.discount_level');

	function startTest() {
		$this->DiscountLevel =& ClassRegistry::init('DiscountLevel');
	}

	function testDiscountLevelInstance() {
		$this->assertTrue(is_a($this->DiscountLevel, 'DiscountLevel'));
	}

	function testDiscountLevelFind() {
		$this->DiscountLevel->recursive = -1;
		$results = $this->DiscountLevel->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('DiscountLevel' => array(
			'id'  => 1,
			'user_type'  => 'Lo',
			'max_articles'  => 1,
			'discount'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>