<?php 
/* SVN FILE: $Id$ */
/* SettingsController Test cases generated on: 2009-09-15 12:48:28 : 1253015308*/
App::import('Controller', 'Settings');

class TestSettings extends SettingsController {
	var $autoRender = false;
}

class SettingsControllerTest extends CakeTestCase {
	var $Settings = null;

	function startTest() {
		$this->Settings = new TestSettings();
		$this->Settings->constructClasses();
	}

	function testSettingsControllerInstance() {
		$this->assertTrue(is_a($this->Settings, 'SettingsController'));
	}

	function endTest() {
		unset($this->Settings);
	}
}
?>