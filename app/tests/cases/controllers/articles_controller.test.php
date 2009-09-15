<?php 
/* SVN FILE: $Id$ */
/* ArticlesController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'Articles');

class TestArticles extends ArticlesController {
	var $autoRender = false;
}

class ArticlesControllerTest extends CakeTestCase {
	var $Articles = null;

	function startTest() {
		$this->Articles = new TestArticles();
		$this->Articles->constructClasses();
	}

	function testArticlesControllerInstance() {
		$this->assertTrue(is_a($this->Articles, 'ArticlesController'));
	}

	function endTest() {
		unset($this->Articles);
	}
}
?>