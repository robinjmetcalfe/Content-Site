<?php 
/* SVN FILE: $Id$ */
/* DiscountLevelsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'DiscountLevels');

class TestDiscountLevels extends DiscountLevelsController {
	var $autoRender = false;
}

class DiscountLevelsControllerTest extends CakeTestCase {
	var $DiscountLevels = null;

	function startTest() {
		$this->DiscountLevels = new TestDiscountLevels();
		$this->DiscountLevels->constructClasses();
	}

	function testDiscountLevelsControllerInstance() {
		$this->assertTrue(is_a($this->DiscountLevels, 'DiscountLevelsController'));
	}

	function endTest() {
		unset($this->DiscountLevels);
	}
}
?>