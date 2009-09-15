<?php 
/* SVN FILE: $Id$ */
/* Admin Fixture generated on: 2009-09-15 12:26:57 : 1253014017*/

class AdminFixture extends CakeTestFixture {
	var $name = 'Admin';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'username' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 16),
		'passwd' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 64),
		'admin_level' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'username'  => 'Lorem ipsum do',
		'passwd'  => 'Lorem ipsum dolor sit amet',
		'admin_level'  => 1
	));
}
?>