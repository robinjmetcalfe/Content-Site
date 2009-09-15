<?php 
/* SVN FILE: $Id$ */
/* ContentSitesController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'ContentSites');

class TestContentSites extends ContentSitesController {
	var $autoRender = false;
}

class ContentSitesControllerTest extends CakeTestCase {
	var $ContentSites = null;

	function startTest() {
		$this->ContentSites = new TestContentSites();
		$this->ContentSites->constructClasses();
	}

	function testContentSitesControllerInstance() {
		$this->assertTrue(is_a($this->ContentSites, 'ContentSitesController'));
	}

	function endTest() {
		unset($this->ContentSites);
	}
}
?>