<?php 
/* SVN FILE: $Id$ */
/* Setting Test cases generated on: 2009-09-15 12:28:29 : 1253014109*/
App::import('Model', 'Setting');

class SettingTestCase extends CakeTestCase {
	var $Setting = null;
	var $fixtures = array('app.setting');

	function startTest() {
		$this->Setting =& ClassRegistry::init('Setting');
	}

	function testSettingInstance() {
		$this->assertTrue(is_a($this->Setting, 'Setting'));
	}

	function testSettingFind() {
		$this->Setting->recursive = -1;
		$results = $this->Setting->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Setting' => array(
			'id'  => 1,
			'key'  => 'Lorem ipsum dolor sit amet',
			'pair'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2009-09-15 12:28:29',
			'modified'  => '2009-09-15 12:28:29'
		));
		$this->assertEqual($results, $expected);
	}
}
?>