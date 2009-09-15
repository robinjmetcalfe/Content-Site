<?php 
/* SVN FILE: $Id$ */
/* EmailTemplatesController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'EmailTemplates');

class TestEmailTemplates extends EmailTemplatesController {
	var $autoRender = false;
}

class EmailTemplatesControllerTest extends CakeTestCase {
	var $EmailTemplates = null;

	function startTest() {
		$this->EmailTemplates = new TestEmailTemplates();
		$this->EmailTemplates->constructClasses();
	}

	function testEmailTemplatesControllerInstance() {
		$this->assertTrue(is_a($this->EmailTemplates, 'EmailTemplatesController'));
	}

	function endTest() {
		unset($this->EmailTemplates);
	}
}
?>