<?php 
/* SVN FILE: $Id$ */
/* Author Test cases generated on: 2009-09-15 12:27:53 : 1253014073*/
App::import('Model', 'Author');

class AuthorTestCase extends CakeTestCase {
	var $Author = null;
	var $fixtures = array('app.author');

	function startTest() {
		$this->Author =& ClassRegistry::init('Author');
	}

	function testAuthorInstance() {
		$this->assertTrue(is_a($this->Author, 'Author'));
	}

	function testAuthorFind() {
		$this->Author->recursive = -1;
		$results = $this->Author->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Author' => array(
			'id'  => 1,
			'user_id'  => 1,
			'full_name'  => 'Lorem ipsum dolor sit amet',
			'address_1'  => 'Lorem ipsum dolor sit amet',
			'address_2'  => 'Lorem ipsum dolor sit amet',
			'address_3'  => 'Lorem ipsum dolor sit amet',
			'state'  => 'Lorem ipsum dolor sit amet',
			'postcode'  => 'Lorem ipsum do',
			'telephone'  => 'Lorem ipsum dolor sit amet',
			'mobile'  => 'Lorem ipsum dolor sit amet',
			'test_text'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'test_text_feedback'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'validated'  => 1,
			'created'  => '2009-09-15 12:27:53',
			'modified'  => '2009-09-15 12:27:53'
		));
		$this->assertEqual($results, $expected);
	}
}
?>