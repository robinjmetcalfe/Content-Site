<?php 
/* SVN FILE: $Id$ */
/* CategoriesController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'Categories');

class TestCategories extends CategoriesController {
	var $autoRender = false;
}

class CategoriesControllerTest extends CakeTestCase {
	var $Categories = null;

	function startTest() {
		$this->Categories = new TestCategories();
		$this->Categories->constructClasses();
	}

	function testCategoriesControllerInstance() {
		$this->assertTrue(is_a($this->Categories, 'CategoriesController'));
	}

	function endTest() {
		unset($this->Categories);
	}
}
?>