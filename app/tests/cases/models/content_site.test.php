<?php 
/* SVN FILE: $Id$ */
/* ContentSite Test cases generated on: 2009-09-15 12:28:17 : 1253014097*/
App::import('Model', 'ContentSite');

class ContentSiteTestCase extends CakeTestCase {
	var $ContentSite = null;
	var $fixtures = array('app.content_site');

	function startTest() {
		$this->ContentSite =& ClassRegistry::init('ContentSite');
	}

	function testContentSiteInstance() {
		$this->assertTrue(is_a($this->ContentSite, 'ContentSite'));
	}

	function testContentSiteFind() {
		$this->ContentSite->recursive = -1;
		$results = $this->ContentSite->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('ContentSite' => array(
			'id'  => 1,
			'customer_id'  => 1,
			'title'  => 'Lorem ipsum dolor sit amet',
			'site_type'  => 'L',
			'auth_key'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-09-15 12:28:17',
			'modified'  => '2009-09-15 12:28:17'
		));
		$this->assertEqual($results, $expected);
	}
}
?>