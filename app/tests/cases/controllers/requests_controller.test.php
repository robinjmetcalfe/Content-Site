<?php 
/* SVN FILE: $Id$ */
/* RequestsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'Requests');

class TestRequests extends RequestsController {
	var $autoRender = false;
}

class RequestsControllerTest extends CakeTestCase {
	var $Requests = null;

	function startTest() {
		$this->Requests = new TestRequests();
		$this->Requests->constructClasses();
	}

	function testRequestsControllerInstance() {
		$this->assertTrue(is_a($this->Requests, 'RequestsController'));
	}

	function endTest() {
		unset($this->Requests);
	}
}
?>