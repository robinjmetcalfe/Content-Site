<?php 
/* SVN FILE: $Id$ */
/* Request Test cases generated on: 2009-09-15 12:28:25 : 1253014105*/
App::import('Model', 'Request');

class RequestTestCase extends CakeTestCase {
	var $Request = null;
	var $fixtures = array('app.request');

	function startTest() {
		$this->Request =& ClassRegistry::init('Request');
	}

	function testRequestInstance() {
		$this->assertTrue(is_a($this->Request, 'Request'));
	}

	function testRequestFind() {
		$this->Request->recursive = -1;
		$results = $this->Request->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Request' => array(
			'id'  => 1,
			'customer_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'primary_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'secondary_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'category_id'  => 1,
			'deadline'  => '2009-09-15 12:28:25',
			'min_words'  => 1,
			'max_words'  => 1,
			'article_count'  => 1,
			'articles_written'  => 1,
			'articles_accepted'  => 1,
			'articles_refused'  => 1,
			'articles_in_review'  => 1,
			'created'  => '2009-09-15 12:28:25',
			'modified'  => '2009-09-15 12:28:25'
		));
		$this->assertEqual($results, $expected);
	}
}
?>