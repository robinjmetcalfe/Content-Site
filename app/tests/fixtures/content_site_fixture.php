<?php 
/* SVN FILE: $Id$ */
/* ContentSite Fixture generated on: 2009-09-15 12:28:17 : 1253014097*/

class ContentSiteFixture extends CakeTestFixture {
	var $name = 'ContentSite';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'customer_id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'title' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 64),
		'site_type' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 3),
		'auth_key' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'customer_id' => array('column' => array('customer_id', 'site_type'), 'unique' => 0))
	);
	var $records = array(array(
		'id'  => 1,
		'customer_id'  => 1,
		'title'  => 'Lorem ipsum dolor sit amet',
		'site_type'  => 'L',
		'auth_key'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2009-09-15 12:28:17',
		'modified'  => '2009-09-15 12:28:17'
	));
}
?>