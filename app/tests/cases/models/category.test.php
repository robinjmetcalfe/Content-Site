<?php 
/* SVN FILE: $Id$ */
/* Category Test cases generated on: 2009-09-15 12:29:14 : 1253014154*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $Category = null;
	var $fixtures = array('app.category', 'app.request');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function testCategoryInstance() {
		$this->assertTrue(is_a($this->Category, 'Category'));
	}

	function testCategoryFind() {
		$this->Category->recursive = -1;
		$results = $this->Category->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Category' => array(
			'id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'parent_id'  => 1,
			'lft'  => 1,
			'rght'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>