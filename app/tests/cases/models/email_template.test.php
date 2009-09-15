<?php 
/* SVN FILE: $Id$ */
/* EmailTemplate Test cases generated on: 2009-09-15 12:28:24 : 1253014104*/
App::import('Model', 'EmailTemplate');

class EmailTemplateTestCase extends CakeTestCase {
	var $EmailTemplate = null;
	var $fixtures = array('app.email_template');

	function startTest() {
		$this->EmailTemplate =& ClassRegistry::init('EmailTemplate');
	}

	function testEmailTemplateInstance() {
		$this->assertTrue(is_a($this->EmailTemplate, 'EmailTemplate'));
	}

	function testEmailTemplateFind() {
		$this->EmailTemplate->recursive = -1;
		$results = $this->EmailTemplate->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('EmailTemplate' => array(
			'id'  => 1,
			'slug'  => 'Lorem ipsum dolor sit amet',
			'subject'  => 'Lorem ipsum dolor sit amet',
			'to'  => 'Lorem ipsum dolor sit amet',
			'cc'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'bcc'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'content'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		));
		$this->assertEqual($results, $expected);
	}
}
?>